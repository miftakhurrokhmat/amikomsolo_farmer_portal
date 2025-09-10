
# CI3 Farm Admin + Landing Page (AdminLTE)

This bundle includes:
1) Landing page integrated into CI3 (`Home` controller + view).
2) Admin page using AdminLTE (login/register, dashboard, CRUD news, settings for About/Contact/Demo link).
3) Seed controller to populate default data.
4) SQL dump to import manually (alternative to seeder).

## Requirements
- PHP 7.2+ (or compatible with CI3)
- MySQL/MariaDB
- CodeIgniter 3 **system/** folder (not included to keep size small)

## Quick Start

### 1) Get CodeIgniter 3
Option A (Composer):
```
composer create-project codeigniter/framework ci3
```
Then copy **/system** from that project next to this project's `index.php` (or move this `application/` into that project).

Option B (Manual):
- Download CI3 from https://codeigniter.com/userguide3/installation/downloads.html
- Place the `system/` directory at the project root (next to `index.php`).

### 2) Configure Base URL & Database
Edit `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/ci3-farm-admin/';
```
Edit `application/config/database.php` with your DB credentials.

### 3) Import Database
Import `sql/admin_panel.sql` (creates DB `ci3_admin_panel` with tables and sample data).
Or run seeder endpoints (below).

### 4) Routes
- Public landing page: `/` (Home controller)
- Admin: `/admin`
- Login: `/login` | Register: `/register`

### 5) Seeder (optional)
Visit:
- `/seed/users`
- `/seed/news`
- `/seed/settings`
- `/seed/all`

### 6) Admin Credentials (default)
- Email: `admin@example.com`
- Password: `admin123`

### Notes
- AdminLTE and icons are loaded via CDN to keep the project lightweight.
- You can switch to local assets by downloading AdminLTE and updating links in templates.
