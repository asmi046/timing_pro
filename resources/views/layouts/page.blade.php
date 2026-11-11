<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Тайминг PRO')</title>
    <meta name="description" content="@yield('description', 'Тайминг PRO — тайминг для ведущих за одну встречу')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&family=Cormorant+Garamond:ital,wght@1,500;1,600&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">

    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
</head>
<body>
    <div class="landing">
        <x-landing-page-header />

        <main id="top">
            <section class="page">
                <div class="page-wrapper">
                    @yield('content')
                </div>
            </section>
        </main>

        <x-landing-footer />
    </div>
</body>
</html>
