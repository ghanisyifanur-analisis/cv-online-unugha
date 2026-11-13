<footer class="site-footer">
    <div class="container footer-top">
        <div><a class="brand footer-brand" href="{{ route('home') }}"><span class="brand-mark">RG<span>.</span></span><span class="brand-text"><strong>{{ $profile['name'] ?? 'Rizqi Ghani Adinata' }}</strong><small>ACADEMIC RESEARCH & ENGINEERING</small></span></a><p>Information Systems Researcher & Software Engineer.</p></div>
        <div class="footer-links"><a href="{{ $profile['github'] ?? '#' }}" target="_blank" rel="noopener">GitHub ↗</a><a href="{{ $profile['linkedin'] ?? '#' }}" target="_blank" rel="noopener">LinkedIn ↗</a><a href="mailto:{{ $profile['institutional_email'] ?? '' }}">Email ↗</a></div>
    </div>
    <div class="container footer-bottom"><span>© {{ date('Y') }} {{ $profile['name'] ?? 'Rizqi Ghani Adinata' }}</span><span>{{ $profile['institution'] ?? 'UNUGHA Cilacap' }}</span><a href="#main-content">Kembali ke atas ↑</a></div>
</footer>