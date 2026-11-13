@extends('layouts.app')
@section('title', 'CV — '.$profile['name'])
@section('content')
<section class="detail-hero">
    <div class="container detail-content">
        <a class="back-link" href="{{ route('home') }}#credentials">← Kembali ke kredensial</a>
        <p class="section-kicker">CURRICULUM VITAE / ACADEMIC PROFILE</p>
        <h1>{{ $profile['name'] }}</h1>
        <p class="muted">{{ $profile['role'] }} · {{ $profile['institution'] }}</p>
        @if($cvAvailable)
            <p><a class="button button-primary" href="{{ route('cv.download') }}">Unduh CV PDF ↓</a></p>
            <iframe title="Pratinjau Curriculum Vitae" src="{{ asset('documents/cv-rizqi-ghani-adinata.pdf') }}" style="width:100%;height:80vh;border:1px solid var(--line);border-radius:12px"></iframe>
        @else
            <div class="content-card">
                <h2>Dokumen CV belum tersedia</h2>
                <p>Unggah CV final dalam format PDF ke <code>public/documents/cv-rizqi-ghani-adinata.pdf</code>. Setelah file tersedia, halaman ini otomatis menampilkan pratinjau dan tombol unduh.</p>
                <p><a class="button button-secondary" href="{{ route('home') }}#contact">Hubungi saya</a></p>
            </div>
        @endif
    </div>
</section>
@endsection