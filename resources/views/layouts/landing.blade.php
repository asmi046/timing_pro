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
</head>
<body>
    <div class="landing">
        <header class="header">
            <a href="{{ route('home') }}#top" class="brand">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="13.5" r="8"></circle><path d="M12 13.5 15.5 10"></path><path d="M10 2.5h4"></path><path d="M12 2.5v3"></path></svg>
                <span>Тайминг PRO</span>
            </a>
            <nav aria-label="Разделы" class="nav">
                <a href="{{ route('home') }}#features">Возможности</a>
                <a href="{{ route('home') }}#how">Как работает</a>
                <a href="{{ route('home') }}#who">Кому подойдёт</a>
                <a href="{{ route('home') }}#author">Автор</a>
                <a href="{{ route('home') }}#price">Скачать</a>
                <a href="{{ route('home') }}#faq">Вопросы</a>
            </nav>
            <a href="{{ route('home') }}#price" class="btn-dark">Скачать</a>
        </header>

        <main id="top">
            @yield('content')
        </main>

        <footer class="footer">
            <nav aria-label="Документы" class="footer-nav">
                <a href="#oferta">Оферта</a>
                <a href="#privacy">Политика ПДн</a>
                <a href="#contacts">Контакты</a>
            </nav>
            <div class="footer-contacts">
                <a href="https://vk.ru/potapov.official" target="_blank" rel="noopener" aria-label="ВКонтакте" class="footer-contact footer-contact--vk">VK</a>
                <a href="tel:+79207053348" aria-label="Телефон +7 920 705-33-48" class="footer-contact"><svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#1D1D1F" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M4 2.5h3l1.5 4-2 1.3a9 9 0 0 0 5.7 5.7l1.3-2 4 1.5v3a1.5 1.5 0 0 1-1.6 1.5A15 15 0 0 1 2.5 4.1 1.5 1.5 0 0 1 4 2.5z"></path></svg></a>
                <a href="mailto:potapovvv661@gmail.com" aria-label="E-mail potapovvv661@gmail.com" class="footer-contact"><svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#1D1D1F" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="4.5" width="15" height="11" rx="2"></rect><path d="m3 5.5 7 5.5 7-5.5"></path></svg></a>
            </div>
            <span class="footer-copy">© {{ date('Y') }} ИП Потапов Александр Александрович · ИНН 463231657366 · ОГРНИП 326460000011179</span>
        </footer>
    </div>

    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
