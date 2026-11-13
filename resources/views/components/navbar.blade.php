<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="{{ route('home') }}" aria-label="Beranda {{ $profile['name'] ?? 'Portfolio' }}">
            <span class="brand-mark">RG<span>.</span></span>
            <span class="brand-text"><strong>RG / RESEARCH</strong><small>INFORMATION SYSTEMS</small></span>
        </a>
        <button class="mobile-menu" type="button" aria-expanded="false" aria-controls="primary-nav">Menu</button>
        <nav class="primary-nav" id="primary-nav" aria-label="Navigasi utama">
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('home') }}#about">Tentang</a>
            <a href="{{ route('home') }}#publications">Publikasi</a>
            <a href="{{ route('home') }}#case-studies">Studi Kasus</a>
            <a href="{{ route('home') }}#lab">Lab</a>
            <a href="{{ route('home') }}#methodology">Metodologi</a>
            <a href="{{ route('home') }}#contact">Kontak</a>
        </nav>
        <div class="nav-actions">
            <span class="availability"><i></i> Available for research</span>
            <button class="theme-toggle" type="button" aria-label="Ganti tema" title="Ganti tema"><span class="theme-icon">◐</span></button>
        </div>
    </div>
</header>