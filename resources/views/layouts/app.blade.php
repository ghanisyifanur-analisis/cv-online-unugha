<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', 'Portofolio riset sistem informasi dan rekayasa perangkat lunak Rizqi Ghani Adinata.')">
    <meta name="theme-color" content="#09090b">
    <meta property="og:type" content="profile">
    <meta property="og:title" content="@yield('title', 'Rizqi Ghani Adinata — Research & Engineering')">
    <meta property="og:description" content="@yield('description', 'Academic Research & Software Engineering Portfolio')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <title>@yield('title', 'Rizqi Ghani Adinata — Research & Engineering')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        (() => {
            const saved = localStorage.getItem('portfolio-theme');
            const theme = saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.dataset.theme = theme;
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
    @stack('head')
</head>
<body>
    @include('components.navbar')
    <main id="main-content">@yield('content')</main>
    @include('components.footer')
    <script src="{{ asset('assets/js/portfolio.js') }}" defer></script>
    @stack('scripts')
</body>
</html>