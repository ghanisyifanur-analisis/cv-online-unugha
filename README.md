# Academic Research & Software Engineering Portfolio

Laravel 12 application for Rizqi Ghani Adinata. This branch migrates the former static HTML/CSS/JavaScript portfolio into a server-rendered Blade application.

## Requirements
- PHP 8.2+
- Composer 2
- SQLite or MySQL

## Local setup
```bash
git clone https://github.com/ghanisyifanur-analisis/cv-online-unugha.git
cd cv-online-unugha
git checkout feat/laravel-academic-portfolio
composer install
cp .env.example .env
php artisan key:generate
mkdir -p database
touch database/database.sqlite
php artisan serve
```
Open http://127.0.0.1:8000. Configure database and SMTP in `.env` before using the contact form in production.

## Content management
Edit `config/research.php` to update profile, links, metrics, publications, case studies, methodology, education and certifications. Metrics and publication metadata are intentionally marked as placeholders until independently verified.

## CV
Place the final PDF at `public/documents/cv-rizqi-ghani-adinata.pdf`. The download route returns 404 until the file is provided.

## Contact form
The form includes CSRF protection, validation and IP-based rate limiting (3 requests/minute). Configure SMTP environment variables; do not commit credentials or `.env`.

## Interactive research lab
The JSON inspector, API tester and Chart.js plot use synthetic in-browser sample data. The API tester is explicitly a mock and does not send network requests.

## Deployment
This application requires a PHP-capable host (PHP 8.2+, Composer, and a web server document root pointed to `public/`). GitHub Pages and static-only Cloudflare Pages cannot execute Laravel/PHP. Use a VPS or Laravel-compatible hosting. Set `APP_ENV=production`, `APP_DEBUG=false`, `APP_KEY`, database, and SMTP secrets in the host environment; then run `composer install --no-dev --optimize-autoloader` and `php artisan config:cache route:cache view:cache`.

## Data integrity
Publication titles and research areas are editable starter content. Do not present placeholder drafts, prototype status, performance claims, credentials or certifications as peer-reviewed/production facts without evidence.
