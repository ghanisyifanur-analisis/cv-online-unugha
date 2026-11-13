<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    public function test_homepage_renders_portfolio_sections(): void
    {
        $this->get('/')->assertOk()
            ->assertSee('Menjembatani riset teoretis')
            ->assertSee('PUBLICATIONS & WHITEPAPERS')
            ->assertSee('LIVE RESEARCH LAB');
    }

    public function test_publication_detail_is_available(): void
    {
        $this->get('/publikasi/deteksi-anomali-mini-siem')->assertOk()
            ->assertSee('Analisis Deteksi Anomali Trafik Jaringan');
    }

    public function test_cv_preview_page_renders_without_uploaded_pdf(): void
    {
        $this->get('/cv')->assertOk()->assertSee('Dokumen CV belum tersedia');
    }

    public function test_unknown_publication_returns_404(): void
    {
        $this->get('/publikasi/unknown-paper')->assertNotFound();
    }
}