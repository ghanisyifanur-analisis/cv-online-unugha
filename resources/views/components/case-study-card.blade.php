<article class="content-card case-card" data-category="{{ $caseStudy['category'] }}">
    <div class="card-meta"><span class="category-tag">{{ $caseStudy['category'] }}</span><span class="status-tag">{{ $caseStudy['status'] }}</span></div>
    <h3><a href="{{ route('casestudy.detail', $caseStudy['slug']) }}">{{ $caseStudy['name'] }}</a></h3>
    <div class="case-summary"><p><strong>Problem</strong>{{ $caseStudy['problem'] }}</p><p><strong>Solution</strong>{{ $caseStudy['solution'] }}</p><p><strong>Impact</strong>{{ $caseStudy['impact'] }}</p></div>
    <div class="tech-list">@foreach($caseStudy['stack'] as $technology)<span>{{ $technology }}</span>@endforeach</div>
    <div class="card-actions">
        <a class="text-link" href="{{ route('casestudy.detail', $caseStudy['slug']) }}">Dokumentasi →</a>
        @if(!empty($caseStudy['repository']))<a class="text-link" href="{{ $caseStudy['repository'] }}" target="_blank" rel="noopener">GitHub ↗</a>@endif
        @if(!empty($caseStudy['demo']))<a class="text-link" href="{{ $caseStudy['demo'] }}" target="_blank" rel="noopener">Live demo ↗</a>@endif
    </div>
</article>