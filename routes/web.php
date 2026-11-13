<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/publikasi/{slug}', [PortfolioController::class, 'publicationDetail'])->name('publication.detail');
Route::get('/studi-kasus/{slug}', [PortfolioController::class, 'caseStudyDetail'])->name('casestudy.detail');
Route::post('/kontak', [PortfolioController::class, 'sendContact'])->middleware('throttle:contact')->name('contact.send');
Route::get('/cv', [PortfolioController::class, 'previewCv'])->name('cv.preview');
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');