<footer class="footer">
    <nav aria-label="Документы" class="footer-nav">
        <div class="footer-nav-row">
            <a href="{{ route('pages.payment') }}">Оплата и доставка</a>
            <a href="{{ route('pages.contacts') }}">Контакты</a>
        </div>
        <div class="footer-nav-row">
            <a href="{{ route('pages.privacy') }}">Политика ПДн</a>
            <a href="{{ route('pages.consent') }}">Согласие на обработку ПД</a>
        </div>
    </nav>
    <div class="footer-contacts">
        <a href="https://vk.ru/potapov.official" target="_blank" rel="noopener" aria-label="ВКонтакте" class="footer-contact footer-contact--vk">VK</a>
        <a href="tel:+79207053348" aria-label="Телефон +7 920 705-33-48" class="footer-contact"><svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#1D1D1F" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M4 2.5h3l1.5 4-2 1.3a9 9 0 0 0 5.7 5.7l1.3-2 4 1.5v3a1.5 1.5 0 0 1-1.6 1.5A15 15 0 0 1 2.5 4.1 1.5 1.5 0 0 1 4 2.5z"></path></svg></a>
        <a href="mailto:potapovvv661@gmail.com" aria-label="E-mail potapovvv661@gmail.com" class="footer-contact"><svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#1D1D1F" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="4.5" width="15" height="11" rx="2"></rect><path d="m3 5.5 7 5.5 7-5.5"></path></svg></a>
    </div>
    <span class="footer-copy">© {{ date('Y') }} ИП Потапов Александр Александрович · ИНН 463231657366 · ОГРНИП 326460000011179</span>
</footer>
