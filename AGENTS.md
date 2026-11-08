# AGENTS.md — timing_pro

Файл для AI-агентов, работающих в этом репозитории. Читатель не знает ничего о проекте — вся информация ниже проверена по фактическому содержимому репозитория (состояние на 2026-11-08).

## Обзор проекта

**timing_pro** — веб-приложение на Laravel (Laravel 13, проверено: `Laravel Framework 13.40.0`) с установленным Laravel Boost. Основная страница — лендинг «Тайминг PRO» (перенесён из `promts/lending_html/` 2026-11-08); прикладной логики (бэкенд обработки формы) пока нет.

Текущее состояние:
- Маршруты: `GET /` → `view('home')`, именованный `home` (`routes/web.php`), плюс команда `inspire` (`routes/console.php`). Контроллеров приложения, API-роутов нет.
- Модели: только `App\Models\User` (стандартная модель аутентификации).
- Миграции: стандартные — `users`, `cache`, `jobs` (`database/migrations/`).
- Вьюхи: `resources/views/layouts/landing.blade.php` (шапка, подвал, подключение шрифтов/стилей/скрипта) и `resources/views/home.blade.php` (секции лендинга). Старый `welcome.blade.php` удалён.
- Лендинг подключен напрямую из `public/`, мимо Vite: стили `public/css/landing.css`, скрипт `public/js/landing.js` (интерактив формы: суммы поддержки, выбор файла, валидация), изображения в `public/images/landing/` (hero.jpg, ceremony.jpg, author.jpg). Шрифты Prata / Cormorant Garamond / Montserrat — с Google Fonts.
- Папка `promts/` (с опечаткой в названии, не `prompts/`) в git не закоммичена (`?? promts/` в `git status`) — при коммитах учитывать это явно. Внутри: `start_lending` (задание) и `lending_html/` (исходный референс-макет; React-рантайм `support.js` и `vendor/` — рендерер макета, в приложение не переносился).

## Технологический стек

- **PHP** 8.5.x (требование в `composer.json`: `^8.3`; установлен 8.5.1), Composer 2.9.
- **Laravel 13** (`laravel/framework ^13.17`, установлен 13.40.0), `laravel/tinker`.
- **БД**: SQLite — `database/database.sqlite`, драйвер по умолчанию в `.env` (`DB_CONNECTION=sqlite`). Файл `database/database.sqlite` в git игнорируется (`database/.gitignore` — `*.sqlite*`), создаётся/мигрируется через `composer setup`.
- **Фронтенд**: Vite 8 + `laravel-vite-plugin` 3 + Tailwind CSS 4 (через `@tailwindcss/vite`), шрифт Instrument Sans (400/500/600, через `@fontsource`-плагин `bunny()` в `vite.config.js`). Входные точки: `resources/css/app.css`, `resources/js/app.js`.
- **Тесты**: Pest 5 (`pestphp/pest`, `pestphp/pest-plugin-laravel`), PHPUnit через `php artisan test`.
- **Dev-инструменты**: Laravel Boost (`laravel/boost` 2.x), Pint (`laravel/pint`), Pail, Collision. `concurrently` — для параллельного запуска дев-серверов.
- Node.js 22 + npm 10 (установлены v22.23.1 / 10.9.8).

## Установка и запуск

Полная первичная установка (создаёт `.env`, ключ, SQLite-файл, миграции, собирает фронт):

```sh
composer setup        # composer install + key:generate + migrate --force + npm install --ignore-scripts + npm run build
```

Повседневная работа:

```sh
composer run dev      # php artisan dev — одновременно поднимает PHP-сервер, Vite dev-server и очередь
npm run dev           # только Vite dev-server
npm run build         # production-сборка фронта в public/build/
php artisan serve     # только PHP-сервер
```

Если изменение фронтенда не отображается в UI или появляется ошибка «Unable to locate file in Vite manifest» — выполнить `npm run build` (или использовать dev-сервер).

Требования окружения: PHP ≥ 8.3 и Composer должны быть в PATH (проверка: `php -v`, `composer -V`).

## Тестирование

- Создание тестов: `php artisan make:test --pest {name}` (feature-тесты по умолчанию, `--unit` для юнит-тестов; имя без префикса `Feature/`). Большинство тестов — feature.
- Запуск: `composer test` (чистит конфиг и запускает `php artisan test`) или `php artisan test --compact`; можно узко: `php artisan test --filter=testName` или по пути к файлу. Прямой вызов раннера — `vendor/bin/pest`.
- Окружение тестов (`phpunit.xml`): `APP_ENV=testing`, БД — SQLite **in-memory** (`DB_DATABASE=:memory:`), кеш/сессии — `array`, очереди — `sync`, `BCRYPT_ROUNDS=4`. В `tests/Pest.php` `RefreshDatabase` сейчас закомментирован — включать, когда тесты начнут работать с БД.
- Тесты не удалять без одобрения пользователя — они часть приложения.
- Проверено: `php artisan test` — 2 теста проходят (2 assertions).

## Стили кода

- PHP-форматтер — **Laravel Pint**. После правок PHP-файлов обязательно: `vendor/bin/pint --dirty --format agent` (исправляет форматирование; `--test` не использовать — просто прогонять с исправлением).
- Именование и стиль: фигурные скобки всегда; property promotion в конструкторах; явные типы параметров и возвращаемых значений; ключи enum в TitleCase; PHPDoc вместо инлайн-комментариев, array-shapes в PHPDoc (`array{foo: string}`).
- Новые классы/контроллеры/модели/миграции создавать через `php artisan make:*` (все команды — с `--no-interaction`). Для новой модели сразу создавать factory и seeder.
- Ссылки между страницами — именованные роуты и `route()`. Перед созданием компонента — проверить существующие на переиспользование.
- Не менять зависимости (`composer.json`, `package.json`) и не создавать новые корневые папки без одобрения пользователя.
- Не создавать документацию, если пользователь явно не просил.
- Проверять версии API пакетов перед использованием: `composer show <vendor/package>` — версии установленных пакетов могут отличаться от ожидаемых.

## Структура кода

Стандартная для Laravel 13:

```
app/
  Http/Controllers/   # пока только базовый Controller.php
  Models/             # пока только User.php
  Providers/          # AppServiceProvider
bootstrap/            # app.php, providers.php
config/               # только стандартные конфиги (app, auth, cache, database, ...)
database/
  migrations/         # users, cache, jobs
  seeders/ factories/ # DatabaseSeeder, UserFactory
resources/
  css/ js/            # входы Vite (app.css — Tailwind v4, @theme с Instrument Sans)
  views/              # layouts/landing.blade.php + home.blade.php
routes/
  web.php             # GET / → home (именованный маршрут home)
  console.php         # artisan-команда inspire
public/               # document root; public/build — собранный фронт (в git игнорируется)
                      # лендинг подключен напрямую: css/landing.css, js/landing.js, images/landing/
```

Скиллы проекта лежат в `.claude/skills/`: `laravel-best-practices`, `testing-best-practices`, `tailwindcss-development`, `deploying-to-cloud`, `infer-conventions`. При работе в соответствующей области — активировать соответствующий скилл.

## Laravel Boost (важно)

Этот проект настроен с **Laravel Boost** — MCP-сервер с инструментами, специфичными для приложения (конфиг `.mcp.json` → `php artisan boost:mcp`).

- **Полные сгенерированные гайдлайны Boost — в `CLAUDE.md`** (обязательно прочитать перед работой; дублировать их здесь не нужно). Ключевое оттуда: предпочитать Boost-инструменты (`database-query` вместо сырого SQL, `search-docs` перед изменениями, зависящими от API экосистемы Laravel, `browser-logs` и т.д.).
- `boost.json`: включены `guidelines`, `mcp`, `cloud`; выключены `nightwatch`, `sail`.
- Каталога `.ai/rules` нет — если появится, перед правками читать `@.ai/rules/index.md` и все правила, покрывающие изменяемые пути.

## Безопасность

- `.env` в git игнорируется, секреты не коммитить; `APP_KEY` генерируется при установке.
- В `phpunit.xml`/`.env.example` стоят безопасные значения по умолчанию (лог-почта, локальные хосты БД/кеша).
- Пароли хешируются (`'password' => 'hashed'` в casts модели User), поля `password`/`remember_token` скрыты через атрибут `#[Hidden]`.

## Деплой

Процесса деплоя в репозитории нет (CI/CD-конфигов нет). Стандартный путь для Laravel — Laravel Cloud (в `boost.json` включён `cloud: true`, скилл `deploying-to-cloud` в `.claude/skills/`).
