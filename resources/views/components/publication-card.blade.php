<article class="content-card publication-card">
    <div class="card-meta"><span class="status-tag">{{ $publication['status'] }}</span><span>{{ $publication['year'] }}</span></div>
    <h3><a href="{{ route('publication.detail', $publication['slug']) }}">{{ $publication['title'] }}</a></h3>
    <p class="muted">{{ $publication['venue'] }}</p>
    <p class="byline">{{ $publication['authors'] }}</p>
    <details class="abstract-details"><summary>Baca ringkasan abstrak</summary><p>{{ $publication['abstract'] }}</p></details>
    <div class="card-actions">
        <a class="text-link" href="{{ route('publication.detail', $publication['slug']) }}">Detail publikasi →</a>
        <button class="text-button copy-citation" type="button" data-bibtex="{{ base64_encode($publication['bibtex']) }}">Salin BibTeX</button>
        @if(!empty($publication['pdf']))<a class="text-link" href="{{ $publication['pdf'] }}" target="_blank" rel="noopener">Paper PDF ↗</a>@endif
        @if(!empty($publication['code']))<a class="text-link" href="{{ $publication['code'] }}" target="_blank" rel="noopener">Kode / dataset ↗</a>@endif
    </div>
</article>