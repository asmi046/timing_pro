<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Тайминг PRO — тайминг для ведущих за одну встречу')</title>
    <meta name="description" content="@yield('description', 'Собирайте тайминг свадьбы, юбилея или корпоратива вместе с заказчиком прямо на встрече — и отдавайте ему красивый PDF в тот же день.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&family=Cormorant+Garamond:ital,wght@1,500;1,600&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Тайминг PRO">
    <meta property="og:title" content="@yield('title', 'Тайминг PRO — тайминг для ведущих за одну встречу')">
    <meta property="og:description" content="@yield('description', 'Собирайте тайминг свадьбы, юбилея или корпоратива вместе с заказчиком прямо на встрече — и отдавайте ему красивый PDF в тот же день.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/landing/hero.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>
    <div class="landing">
        <x-landing-header />

        <main id="top">
            @yield('content')
        </main>

        <x-landing-footer />
    </div>

    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
