@extends('layouts.landing')

@section('content')
{{-- HERO --}}
<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">Тайминг для ведущих и не только</p>
        <h1 class="hero-title">Тайминг —<br>за одну встречу.<br><span class="it">Вечера —<br>для себя.</span></h1>
        <p class="hero-lead">Собирайте тайминг свадьбы, юбилея или корпоратива вместе с заказчиком прямо на встрече — и отдавайте ему красивый PDF в тот же день.</p>
        <div class="hero-actions">
            <a href="#price" class="btn-light">Скачать бесплатно
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3 11 11 3"></path><path d="M4.5 3H11v6.5"></path></svg>
            </a>
            <span class="hero-note">Свадьбы · Юбилеи · Корпоративы · Деловые мероприятия</span>
        </div>
    </div>
    <div class="hero-media">
        <img class="fade" src="{{ asset('images/landing/hero.jpg') }}" alt="Серебряная спираль ДНК мероприятия на подставке: секундомер, бокалы, кольца, микрофон, торт, нота и песочные часы">
    </div>
</section>

{{-- PAIN --}}
<section aria-labelledby="pain-h" class="pain">
    <div class="pain-inner">
        <h2 id="pain-h" class="pain-title">Тайминг занимает больше времени, чем должен</h2>
        <div class="pain-grid">
            <p>Вечный Word, который кочует от пары к паре с чужими именами.</p>
            <p>Переписка на недели: «а если подвинуть торт», «а где конкурсы».</p>
            <p>Двинули один блок — пересчитываете всё вручную.</p>
            <p>Историю любви для церемонии пишете ночью перед свадьбой.</p>
            <p>Корпоратив на 200 человек, а программа живёт в чатах и пяти версиях презентации для руководства.</p>
            <p>У каждого подрядчика свой тайминг — и на площадке выясняется, что DJ ждал торт на полчаса позже.</p>
        </div>
    </div>
</section>

{{-- FEATURES --}}
<section id="features" aria-label="Возможности" class="features">

    {{-- 01 --}}
    <div class="feature">
        <div class="feature-media">
            <div class="timing-card">
                <div class="timing-card-head">
                    <span>Анна &amp; Михаил</span>
                    <span>14.08.2027 · 16:00–23:00</span>
                </div>
                <div class="timing-row"><time>16:00</time><span>Сбор гостей</span><span>60 мин</span></div>
                <div class="timing-row is-active"><time>17:00</time><span>Первый блок застолья</span><span>30 мин</span></div>
                <div class="timing-row"><time>17:30</time><span>Первый танец</span><span>5 мин</span></div>
                <div class="timing-row"><time>17:35</time><span>Танцевальный блок</span><span>20 мин</span></div>
                <div class="timing-row"><time>17:55</time><span>Второй блок застолья</span><span>30 мин</span></div>
                <div class="timing-badge">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="#55555A" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M2 6.5 4.8 9 10 3"></path></svg>
                    40 → 30 минут: вечер пересчитан
                </div>
            </div>
        </div>
        <div class="feature-body">
            <span class="feature-num">01</span>
            <h2 class="feature-title">Время пересчитывается<br>само.</h2>
            <p class="feature-text">Договорились о 30 минутах застолья и 3 минутах на тост — весь вечер перестраивается без калькулятора. Проверка ритма подскажет, где перегруз.</p>
        </div>
    </div>

    {{-- 02 --}}
    <div id="how" class="feature">
        <div class="feature-body">
            <span class="feature-num">02</span>
            <h2 class="feature-title">Подсказка в каждом<br>блоке вечера.</h2>
            <p class="feature-text">Кнопка «Опции» показывает, что уместно именно сейчас. Пять рубрик — и ваша библиотека конкурсов поверх: добавляйте свои, ставьте лайки.</p>
        </div>
        <div class="feature-media feature-media--cards">
            <div class="option-card"><span class="option-card-num">01</span><span class="option-card-title">Общение и знакомство</span></div>
            <div class="option-card"><span class="option-card-num">02</span><span class="option-card-title">Тосты и поздрав&shy;ления</span></div>
            <div class="option-card is-dark"><span class="option-card-num">03</span><span class="option-card-title">Номера и сюрпризы</span></div>
            <div class="option-card"><span class="option-card-num">04</span><span class="option-card-title">Игры и конкурсы</span></div>
            <div class="option-card"><span class="option-card-num">05</span><span class="option-card-title">Танцы и активации</span></div>
        </div>
    </div>

    {{-- CEREMONY --}}
    <div id="ceremony" class="ceremony">
        <div class="ceremony-body">
            <span class="ceremony-badge">Только в Тайминг PRO</span>
            <h2 class="ceremony-title">Речь для выездной церемонии.<br><span class="it">Из рассказа пары.</span></h2>
            <p class="ceremony-text">Загрузите анкету или историю пары — конструктор соберёт задание для нейросети с полной драматургией церемонии. Добавьте свои фирменные фразы, и текст зазвучит вашим голосом, а не шаблоном.</p>
            <div class="ceremony-quote">
                <p class="it">«Они познакомились в очереди за кофе — и с тех пор делят всё, кроме последнего круассана.»</p>
                <span>Фрагмент речи · пример</span>
            </div>
            <ol class="ceremony-steps">
                <li><span class="ceremony-steps-num">01</span><span class="ceremony-steps-text">Анкета или рассказ пары</span></li>
                <li><span class="ceremony-steps-num">02</span><span class="ceremony-steps-text">Структура и ваш стиль</span></li>
                <li><span class="ceremony-steps-num">03</span><span class="ceremony-steps-text">Готовая речь в тайминге</span></li>
            </ol>
        </div>
        <div class="ceremony-media">
            <img class="fade" src="{{ asset('images/landing/ceremony.jpg') }}" alt="Серебряные часы, переходящие в песочные часы, на чёрном фоне">
        </div>
    </div>

    {{-- 03 --}}
    <div class="feature">
        <div class="feature-media feature-media--export">
            <div class="export-scene">
                <div class="export-doc export-doc--dark">
                    <span class="export-doc-label">ТАЙМИНГ</span>
                    <span class="export-doc-title">Юбилей Ольги</span>
                    <span class="export-doc-divider"></span>
                    <span class="export-doc-line" style="width: 80%;"></span>
                    <span class="export-doc-line" style="width: 64%;"></span>
                    <span class="export-doc-line" style="width: 72%;"></span>
                </div>
                <div class="export-doc export-doc--light">
                    <span class="export-doc-label">ТАЙМИНГ СВАДЬБЫ</span>
                    <span class="export-doc-title">Анна &amp; Михаил</span>
                    <span class="export-doc-date">14 августа 2027</span>
                    <span class="export-doc-divider"></span>
                    <span class="export-doc-row"><b>16:00</b>Сбор гостей</span>
                    <span class="export-doc-row"><b>17:00</b>Первый блок</span>
                    <span class="export-doc-row"><b>17:30</b>Первый танец</span>
                    <span class="export-doc-row"><b>21:40</b>Торт и финал</span>
                    <span class="export-doc-footer">Тайминг PRO · ведущий Иван Петров</span>
                </div>
                <span class="export-formats">
                    <span>PDF</span>
                    <span>PPTX</span>
                    <span>HTML</span>
                </span>
            </div>
        </div>
        <div class="feature-body">
            <span class="feature-num">03</span>
            <h2 class="feature-title">Красивый файл<br>для заказчика.</h2>
            <p class="feature-text">PDF, PowerPoint или интерактивная страница — в одной из шести палитр, с вашим именем. Ваша библиотека и настройки в файл не попадают.</p>
        </div>
    </div>

    {{-- 4 CARDS --}}
    <div class="mini-cards">
        <div class="mini-card">
            <svg viewBox="0 0 160 150" width="160" height="150" aria-hidden="true">
                <defs><linearGradient id="m-g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FFFFFF"></stop><stop offset="0.4" stop-color="#C9C9CE"></stop><stop offset="0.72" stop-color="#6E6E75"></stop><stop offset="1" stop-color="#E4E4E8"></stop></linearGradient><radialGradient id="m-glow" cx="0.5" cy="0.6" r="0.5"><stop offset="0" stop-color="#A8A8AE" stop-opacity="0.2"></stop><stop offset="1" stop-color="#A8A8AE" stop-opacity="0"></stop></radialGradient></defs>
                <ellipse cx="80" cy="80" rx="80" ry="70" fill="url(#m-glow)"></ellipse>
                <path d="M60 26 C70 18 90 18 100 26" fill="none" stroke="#A8A8AE" stroke-opacity="0.45" stroke-width="1" stroke-dasharray="2 4"></path>
                <path d="M56 130 L72 30 H88 L104 130 Z" fill="#0A0A0A" stroke="url(#m-g)" stroke-width="2.4" stroke-linejoin="round"></path>
                <g stroke="#A8A8AE" stroke-opacity="0.6" stroke-width="1"><line x1="74" y1="56" x2="86" y2="56"></line><line x1="73" y1="66" x2="87" y2="66"></line><line x1="72" y1="76" x2="88" y2="76"></line><line x1="71" y1="86" x2="89" y2="86"></line><line x1="70" y1="96" x2="90" y2="96"></line></g>
                <line x1="80" y1="114" x2="101" y2="34" stroke="url(#m-g)" stroke-width="2.4" stroke-linecap="round"></line>
                <rect x="88" y="56" width="16" height="11" rx="2" fill="url(#m-g)" transform="rotate(15 96 61)"></rect>
                <circle cx="80" cy="114" r="4.5" fill="url(#m-g)"></circle>
                <rect x="48" y="128" width="64" height="9" rx="2.5" fill="url(#m-g)"></rect>
            </svg>
            <span class="mini-card-title">Проверка ритма</span>
            <span class="mini-card-text">Подскажет, где перегружен блок или затянулась пауза</span>
        </div>
        <div class="mini-card">
            <svg viewBox="0 0 160 150" width="160" height="150" aria-hidden="true">
                <defs><linearGradient id="c-g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FFFFFF"></stop><stop offset="0.4" stop-color="#C9C9CE"></stop><stop offset="0.72" stop-color="#6E6E75"></stop><stop offset="1" stop-color="#E4E4E8"></stop></linearGradient><linearGradient id="c-wine" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#F0F0F2" stop-opacity="0.95"></stop><stop offset="1" stop-color="#9A9AA0" stop-opacity="0.95"></stop></linearGradient><radialGradient id="c-glow" cx="0.5" cy="0.45" r="0.5"><stop offset="0" stop-color="#A8A8AE" stop-opacity="0.22"></stop><stop offset="1" stop-color="#A8A8AE" stop-opacity="0"></stop></radialGradient></defs>
                <ellipse cx="80" cy="74" rx="80" ry="70" fill="url(#c-glow)"></ellipse>
                <g transform="translate(69 34) rotate(16)">
                    <path d="M-10.4 14 L10.4 14 C9.6 32 7 46 2 55 L-2 55 C-7 46 -9.6 32 -10.4 14 Z" fill="url(#c-wine)" fill-opacity="0.75"></path>
                    <path d="M-11 0 L11 0 C11 22 9 44 2 56 L-2 56 C-9 44 -11 22 -11 0 Z" fill="#FFFFFF" fill-opacity="0.06" stroke="url(#c-g)" stroke-width="1.6"></path>
                    <path d="M-7 4 C-7 20 -6 34 -3 44" fill="none" stroke="#FFFFFF" stroke-opacity="0.6" stroke-width="1.2" stroke-linecap="round"></path>
                    <line x1="0" y1="56" x2="0" y2="94" stroke="#C9C9CE" stroke-width="2.2"></line>
                    <ellipse cx="0" cy="95" rx="13" ry="3.2" fill="url(#c-g)"></ellipse>
                    <circle cx="-2" cy="40" r="1.2" fill="#FFFFFF"></circle><circle cx="2" cy="30" r="1" fill="#FFFFFF"></circle><circle cx="-1" cy="22" r="0.9" fill="#FFFFFF"></circle>
                </g>
                <g transform="translate(91 34) rotate(-16)">
                    <path d="M-10.4 14 L10.4 14 C9.6 32 7 46 2 55 L-2 55 C-7 46 -9.6 32 -10.4 14 Z" fill="url(#c-wine)" fill-opacity="0.75"></path>
                    <path d="M-11 0 L11 0 C11 22 9 44 2 56 L-2 56 C-9 44 -11 22 -11 0 Z" fill="#FFFFFF" fill-opacity="0.06" stroke="url(#c-g)" stroke-width="1.6"></path>
                    <path d="M-7 4 C-7 20 -6 34 -3 44" fill="none" stroke="#FFFFFF" stroke-opacity="0.6" stroke-width="1.2" stroke-linecap="round"></path>
                    <line x1="0" y1="56" x2="0" y2="94" stroke="#C9C9CE" stroke-width="2.2"></line>
                    <ellipse cx="0" cy="95" rx="13" ry="3.2" fill="url(#c-g)"></ellipse>
                    <circle cx="1" cy="38" r="1.2" fill="#FFFFFF"></circle><circle cx="-2" cy="27" r="1" fill="#FFFFFF"></circle>
                </g>
                <path d="M80 8 L82 17 L91 19 L82 21 L80 30 L78 21 L69 19 L78 17 Z" fill="url(#c-g)"></path>
                <path d="M104 14 L105 18 L109 19 L105 20 L104 24 L103 20 L99 19 L103 18 Z" fill="#D6D6DA"></path>
            </svg>
            <span class="mini-card-title">Любой повод</span>
            <span class="mini-card-text">Свадьбы, юбилеи, корпоративы и деловые мероприятия</span>
        </div>
        <div class="mini-card">
            <svg viewBox="0 0 160 150" width="160" height="150" aria-hidden="true">
                <defs><linearGradient id="k-g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FFFFFF"></stop><stop offset="0.4" stop-color="#C9C9CE"></stop><stop offset="0.72" stop-color="#6E6E75"></stop><stop offset="1" stop-color="#E4E4E8"></stop></linearGradient><radialGradient id="k-lens" cx="0.38" cy="0.35" r="0.7"><stop offset="0" stop-color="#4A4A50"></stop><stop offset="0.55" stop-color="#141416"></stop><stop offset="1" stop-color="#050505"></stop></radialGradient><radialGradient id="k-glow" cx="0.5" cy="0.55" r="0.5"><stop offset="0" stop-color="#A8A8AE" stop-opacity="0.2"></stop><stop offset="1" stop-color="#A8A8AE" stop-opacity="0"></stop></radialGradient></defs>
                <ellipse cx="80" cy="80" rx="80" ry="68" fill="url(#k-glow)"></ellipse>
                <rect x="38" y="36" width="14" height="7" rx="2" fill="url(#k-g)"></rect>
                <rect x="58" y="32" width="44" height="18" rx="4" fill="#0A0A0A" stroke="url(#k-g)" stroke-width="2"></rect>
                <rect x="24" y="44" width="112" height="72" rx="10" fill="#0A0A0A" stroke="url(#k-g)" stroke-width="2.2"></rect>
                <line x1="24" y1="60" x2="136" y2="60" stroke="#A8A8AE" stroke-opacity="0.4" stroke-width="1"></line>
                <rect x="112" y="50" width="16" height="6" rx="2" fill="url(#k-g)"></rect>
                <circle cx="80" cy="82" r="28" fill="#0A0A0A" stroke="url(#k-g)" stroke-width="2.4"></circle>
                <circle cx="80" cy="82" r="20" fill="url(#k-lens)" stroke="#A8A8AE" stroke-opacity="0.7" stroke-width="1"></circle>
                <circle cx="80" cy="82" r="9" fill="none" stroke="#A8A8AE" stroke-opacity="0.5" stroke-width="1"></circle>
                <circle cx="73" cy="75" r="3.2" fill="#FFFFFF" fill-opacity="0.8"></circle>
            </svg>
            <span class="mini-card-title">Фото и «фишки часа»</span>
            <span class="mini-card-text">Референсы и изюминка каждого часа прямо в тайминге</span>
        </div>
        <div class="mini-card">
            <svg viewBox="0 0 160 150" width="160" height="150" aria-hidden="true">
                <defs><linearGradient id="p-g" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#6E6E75"></stop><stop offset="0.35" stop-color="#D6D6DA"></stop><stop offset="0.5" stop-color="#FFFFFF"></stop><stop offset="0.7" stop-color="#A8A8AE"></stop><stop offset="1" stop-color="#5E5E65"></stop></linearGradient><radialGradient id="p-glow" cx="0.5" cy="0.55" r="0.5"><stop offset="0" stop-color="#A8A8AE" stop-opacity="0.2"></stop><stop offset="1" stop-color="#A8A8AE" stop-opacity="0"></stop></radialGradient></defs>
                <ellipse cx="80" cy="80" rx="80" ry="68" fill="url(#p-glow)"></ellipse>
                <g transform="rotate(-6 74 76)">
                    <rect x="40" y="26" width="68" height="96" rx="3" fill="#F4F4F6"></rect>
                    <g stroke="#CFCFD4" stroke-width="1.2"><line x1="50" y1="44" x2="96" y2="44"></line><line x1="50" y1="54" x2="90" y2="54"></line><line x1="50" y1="64" x2="98" y2="64"></line><line x1="50" y1="74" x2="84" y2="74"></line></g>
                    <path d="M50 96 C58 86 66 102 74 92 S86 96 92 100" fill="none" stroke="#2A2A2E" stroke-width="1.4" stroke-linecap="round"></path>
                </g>
                <g transform="translate(94 102) rotate(32)">
                    <path d="M-5 -16 L5 -16 L0 0 Z" fill="url(#p-g)"></path>
                    <line x1="0" y1="-14" x2="0" y2="-5" stroke="#2A2A2E" stroke-width="0.8"></line>
                    <rect x="-5.5" y="-28" width="11" height="12" rx="1.5" fill="#0A0A0A" stroke="url(#p-g)" stroke-width="1"></rect>
                    <rect x="-6.5" y="-96" width="13" height="68" rx="6.5" fill="url(#p-g)"></rect>
                    <rect x="3" y="-92" width="2.4" height="34" rx="1.2" fill="#5E5E65"></rect>
                </g>
            </svg>
            <span class="mini-card-title">Белая тема для печати</span>
            <span class="mini-card-text">Без заливок — бережёт краску ч/б принтера</span>
        </div>
    </div>
</section>

{{-- AUDIENCE --}}
<section id="who" aria-labelledby="who-h" class="audience">
    <div class="audience-head">
        <h2 id="who-h" class="section-title">Тайминг для ведущих —<br><span class="it">и не только.</span></h2>
        <p class="audience-lead">Конструктору не нужен опыт ведущего. Если вы отвечаете за чей-то праздник, он сэкономит вам вечера и нервы.</p>
    </div>
    <div class="audience-grid">
        <div class="audience-card">
            <span class="audience-icon"><svg width="30" height="30" viewBox="0 0 48 48" fill="none" stroke="#55555A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="18" y="5" width="12" height="22" rx="6"></rect><path d="M12 22a12 12 0 0 0 24 0"></path><path d="M24 34v8"></path><path d="M17 42h14"></path></svg></span>
            <span class="audience-card-title">Ведущим</span>
            <span class="audience-card-text">Тайминг за одну встречу с парой и красивый файл для заказчика в тот же день.</span>
        </div>
        <div class="audience-card">
            <span class="audience-icon"><svg width="30" height="30" viewBox="0 0 48 48" fill="none" stroke="#55555A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="16" r="6"></circle><path d="M6 38c0-7 5.4-12 12-12s12 5 12 12"></path><circle cx="34" cy="19" r="5"></circle><path d="M31 28c6 0 11 4 11 10"></path></svg></span>
            <span class="audience-card-title">HR-отделам</span>
            <span class="audience-card-text">Новогодний корпоратив или юбилей компании без хаоса: программа, слово руководителей и награждения — по минутам.</span>
        </div>
        <div class="audience-card">
            <span class="audience-icon"><svg width="30" height="30" viewBox="0 0 48 48" fill="none" stroke="#55555A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 42h36"></path><path d="M12 42V32"></path><path d="M21 42V26"></path><path d="M30 42V22"></path><path d="M39 42V16"></path><path d="M10 22l9-7 7 5 14-12"></path><path d="M34 8h6v6"></path></svg></span>
            <span class="audience-card-title">Маркетологам</span>
            <span class="audience-card-text">Открытия, презентации и клиентские вечера — план, который не стыдно показать руководству и партнёрам.</span>
        </div>
        <div class="audience-card">
            <span class="audience-icon"><svg width="30" height="30" viewBox="0 0 48 48" fill="none" stroke="#55555A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="19" cy="30" r="10"></circle><circle cx="30" cy="30" r="10"></circle><path d="M19 12l4 4-4 4-4-4z"></path></svg></span>
            <span class="audience-card-title">Невестам</span>
            <span class="audience-card-text">Соберите свой день сами — и отправьте ведущему, фотографу и площадке готовый план вместо голосовых.</span>
        </div>
    </div>
</section>

{{-- AUTHOR --}}
<section id="author" aria-labelledby="author-h" class="author">
    <img src="{{ asset('images/landing/author.jpg') }}" alt="Александр Потапов смотрит на часы" class="author-photo">
    <div class="author-body">
        <p class="eyebrow">Колонка автора</p>
        <h2 id="author-h" class="author-title">Чуть не утонул в бумажном<br><span class="it">море таймингов.</span></h2>
        <p class="author-text">Привет! Я Александр Потапов, практикующий ведущий: по натуре разгильдяй, в душе эстет и педант (педанта — на донышке, но хватает). Именно этот микс помогает мне не терять себя в десятках проектов и мероприятий каждую неделю. Я родился в Курске и работаю по всему Черноземью, за плечами — организация конкурсов красоты и медийные ТВ-проекты.</p>
        <p class="author-text">Летом 2026-го я закопался в бумажках и понял: пора оптимизировать процесс. Мне хотелось превратить тайминг в сервис — не только показать свой уровень внимания и профессионализма, но и успокоить пару: всё под контролем. Word или заметки в телефоне с этим не справлялись. Ведь для наших клиентов тайминг — не документ для галочки, а священное писание и договор в одном лице.</p>
        <p class="author-text">Однажды на «Предсезонке» хороший человек нашей профессии дал мудрый совет: пора внедрять в работу ИИ. Спустя месяц знакомства с Claude родился этот сервис.</p>
        <p class="author-text">Коллеги, экономьте время и оптимизируйте работу, а освободившиеся часы тратьте на обучение, рост и развитие. Даже ваше мысленное «спасибо» — крутой плюсик в мою карму.</p>
        <p class="author-facts"><span>15 лет на свадьбах и деловых мероприятиях</span><span aria-hidden="true">·</span><span>Ведущий новостей на ТВ</span></p>
        <p class="author-note">Нашли ошибку или придумали, чего не хватает? Напишите мне — лучшие идеи войдут в обновление, а их авторов поблагодарим поимённо.</p>
        <div class="author-actions">
            <a href="https://t.me/sasha_potapov" target="_blank" rel="noopener" class="author-link">Написать в Telegram
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3 11 11 3"></path><path d="M4.5 3H11v6.5"></path></svg>
            </a>
            <span class="it author-sign">— Александр</span>
        </div>
    </div>
</section>

{{-- PRICE + FORM --}}
<section id="price" aria-labelledby="price-h" class="price">
    <div class="price-inner">
        <div class="price-info">
            <h2 id="price-h" class="price-title">Бесплатно.<br><span class="it">Оплата — по сердцу.</span></h2>
            <div class="price-value">
                <b>0 ₽</b>
                <span>или сколько не жалко</span>
            </div>
            <ul class="price-list">
                <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3.5 9.5 7.2 13 14.5 5"></path></svg>Персональный файл с вашим именем и логотипом</li>
                <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3.5 9.5 7.2 13 14.5 5"></path></svg>Базовая библиотека интерактивов из 5 рубрик</li>
                <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3.5 9.5 7.2 13 14.5 5"></path></svg>Инструкция и анкета для пары</li>
                <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3.5 9.5 7.2 13 14.5 5"></path></svg>ИИ-помощник: речь для выездной церемонии</li>
                <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3.5 9.5 7.2 13 14.5 5"></path></svg>Бесплатные обновления два раза в год</li>
            </ul>
            <div class="price-note">
                <p class="eyebrow">Куда уйдут ваши деньги</p>
                <p>На корм шпицу — он строгий, но справедливый. На презент другу-разработчику, который помогает с сайтом. И на новые конкурсы от <a href="https://vk.ru/danfrayshop" target="_blank" rel="noopener">Дена Фрая</a>.</p>
            </div>
            <p class="price-stats">Уже скачали: <b>[N] ведущих</b> из <b>[N] городов</b></p>
        </div>
        <form aria-label="Получить Тайминг PRO" class="lead-form" data-lead-form novalidate>
            <p class="lead-form-title">Получить свой Тайминг PRO</p>
            <label for="f-name" class="field-label field-label--tight">ФИО / Агентство</label>
            <input id="f-name" name="name" type="text" placeholder="Иван Петров или агентство «Праздник»" class="input" autocomplete="name">
            <div class="field-row">
                <div class="field-group"><label for="f-city" class="field-label">Город</label><input id="f-city" name="city" type="text" placeholder="Воронеж" class="input"></div>
                <div class="field-group"><label for="f-phone" class="field-label">Телефон</label><input id="f-phone" name="phone" type="tel" placeholder="+7" class="input" autocomplete="tel"></div>
            </div>
            <label for="f-mail" class="field-label field-label--tight">E-mail — сюда придёт файл</label>
            <input id="f-mail" name="email" type="email" placeholder="name@mail.ru" class="input" autocomplete="email">
            <label for="f-photo" class="file-label" data-file-label>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="#1D1D1F" stroke-width="1.5" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="9"></circle><path d="M11 7v8"></path><path d="M7 11h8"></path></svg>
                Фото или логотип <span class="file-label-hint" data-file-hint>— необязательно</span>
            </label>
            <input id="f-photo" name="photo" type="file" accept="image/*" class="file-input">
            <fieldset class="pills-fieldset">
                <legend>Поддержать автора — по желанию</legend>
                <div class="pills">
                    <button type="button" data-pill="0" aria-pressed="true" class="pill is-active">0 ₽</button>
                    <button type="button" data-pill="300" aria-pressed="false" class="pill">300 ₽</button>
                    <button type="button" data-pill="500" aria-pressed="false" class="pill">500 ₽</button>
                    <button type="button" data-pill="1000" aria-pressed="false" class="pill">1 000 ₽</button>
                    <button type="button" data-pill="custom" aria-pressed="false" class="pill">Своя сумма</button>
                </div>
            </fieldset>
            <label class="consent"><input type="checkbox" data-consent>Согласен с политикой обработки персональных данных</label>
            <button type="submit" class="submit">Получить файл</button>
            <p class="form-message" data-form-message role="status"></p>
            <p class="form-note">Имя и логотип попадут в ваш файл. Если выберете сумму, после формы откроется оплата. Файл придёт на почту в любом случае.</p>
        </form>
    </div>
</section>

{{-- FAQ --}}
<section id="faq" aria-labelledby="faq-h" class="faq">
    <h2 id="faq-h" class="faq-title">Вопросы</h2>
    <div class="faq-grid">
        <div class="faq-item"><h3>Нужен ли интернет?</h3><p>Нет. Файл открывается в браузере и работает без сети. Интернет нужен только при первом сохранении в PowerPoint.</p></div>
        <div class="faq-item"><h3>На чём работать удобнее?</h3><p>На компьютере или ноутбуке. На планшете и телефоне файл откроется, но собирать удобнее на большом экране.</p></div>
        <div class="faq-item"><h3>Где хранятся тайминги?</h3><p>В браузере на вашем компьютере. Каждый тайминг можно сохранить рабочим файлом и вернуться к нему через месяц.</p></div>
        <div class="faq-item"><h3>Как работает «История любви»?</h3><p>Файл по анкете пары собирает задание для нейросети. Копируете его в чат, готовую речь вставляете обратно.</p></div>
        <div class="faq-item"><h3>Можно добавить свои конкурсы?</h3><p>Да. В «Библиотеке» добавляете, правите и скрываете интерактивы, создаёте свои рубрики.</p></div>
        <div class="faq-item"><h3>Можно поделиться с коллегой?</h3><p>Нужно! Только отправьте ссылку на сайт, а не свой файл: так коллега получит конструктор со своим именем, а не с вашим.</p></div>
    </div>
</section>

{{-- CTA BAND --}}
<section aria-label="Призыв к покупке" class="cta">
    <div class="cta-inner">
        <svg viewBox="0 0 1200 200" preserveAspectRatio="none" aria-hidden="true" class="cta-bg" fill="none" stroke="#FFFFFF" stroke-opacity="0.7" stroke-width="1"><path d="M500 200 C700 120 850 160 1200 40"></path><path d="M540 200 C730 135 880 175 1200 70"></path><path d="M580 200 C760 150 910 190 1200 100"></path><path d="M620 200 C790 165 940 205 1200 130"></path></svg>
        <div class="cta-body">
            <p class="cta-title">Меньше переписки.<br>Больше праздника.</p>
            <p class="cta-text">Персональный файл придёт на почту в течение 24 часов.</p>
        </div>
        <a href="#price" class="btn-light">Скачать бесплатно
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#1D1D1F" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M3 11 11 3"></path><path d="M4.5 3H11v6.5"></path></svg>
        </a>
    </div>
</section>
@endsection
