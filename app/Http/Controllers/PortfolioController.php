<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $research = config('research');

        return view('index', [
            'profile' => $research['profile'],
            'metrics' => $research['metrics'],
            'publications' => $research['publications'],
            'caseStudies' => $research['case_studies'],
            'methodology' => $research['methodology'],
            'credentials' => $research['credentials'],
        ]);
    }

    public function publicationDetail(string $slug): View
    {
        $publication = collect(config('research.publications'))->firstWhere('slug', $slug);
        abort_if(!$publication, 404);

        return view('publications.show', compact('publication'));
    }

    public function caseStudyDetail(string $slug): View
    {
        $caseStudy = collect(config('research.case_studies'))->firstWhere('slug', $slug);
        abort_if(!$caseStudy, 404);

        return view('case-studies.show', compact('caseStudy'));
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:190'],
            'subject' => ['required', 'in:research,project,academic,other'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
        ]);

        $recipient = config('research.profile.institutional_email');

        try {
            Mail::raw(
                "Nama: {$validated['name']}\nEmail: {$validated['email']}\nTopik: {$validated['subject']}\n\n{$validated['message']}",
                function ($mail) use ($recipient, $validated): void {
                    $mail->to($recipient)
                        ->replyTo($validated['email'], $validated['name'])
                        ->subject('[Portfolio] '.$validated['subject']);
                }
            );
        } catch (\Throwable $exception) {
            Log::error('Portfolio contact delivery failed', ['exception' => $exception::class]);
            return back()->withInput()->with('contact_error', 'Pesan belum dapat dikirim. Silakan gunakan kontak email atau WhatsApp.');
        }

        return back()->with('contact_success', 'Pesan berhasil dikirim. Terima kasih telah menghubungi saya.');
    }

    public function downloadCv(): BinaryFileResponse
    {
        $path = public_path('documents/cv-rizqi-ghani-adinata.pdf');
        abort_unless(is_file($path), 404, 'CV PDF belum diunggah. Tambahkan berkas ke public/documents/.');

        return response()->download($path, 'CV-Rizqi-Ghani-Adinata.pdf');
    }
}