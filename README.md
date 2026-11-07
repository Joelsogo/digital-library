# Digital Library — Organizational Document Repository

A professional, pure-PHP digital library system for organizations. Admins upload documents; all authorized users can browse, view, and download them.

**No frameworks** — plain PHP + MySQL + Bootstrap 5.

## Features

- **Admin panel**
  - Upload documents (PDF, Office, images, archives, media)
  - Manage categories
  - Manage users (block/unblock)
  - Dashboard with stats
- **User area**
  - Register / login
  - Browse & search documents
  - Filter by category
  - View / download / preview (PDF & images)
  - Profile & password change
- **Security**
  - Password hashing (`password_hash`)
  - Prepared statements (PDO)
  - Role-based access
  - Upload type & size validation
  - Activity logging

## Requirements

- PHP 7.4+ (8.x recommended)
- MySQL 5.7+ / MariaDB 10.3+
- Apache or Nginx with PHP
- `uploads/` directory writable by the web server

## Quick setup

1. Clone or download this repository into your web root (e.g. `htdocs/digital-library` or `/var/www/digital-library`).

2. Open in browser:
   ```
   http://localhost/digital-library/setup.php
   ```

3. Enter database credentials and admin account details, then click **Run Setup**.

4. **Delete `setup.php`** after a successful install.

5. Login:
   - Admin: the email/password you set (default suggestion: `admin@library.com` / `Admin@123`)
   - Users: register from the site

## Manual database setup

```bash
mysql -u root -p < sql/schema.sql
```

Then update `includes/config.php` with your DB credentials and set the admin password with:

```php
echo password_hash('YourPassword', PASSWORD_DEFAULT);
```

## Directory structure

```
digital-library/
├── admin/              # Admin panel
├── assets/             # CSS, JS
├── includes/           # Config, header, footer
├── sql/                # Database schema
├── uploads/            # Uploaded files (protected)
├── index.php
├── login.php
├── register.php
├── documents.php
├── view.php
├── download.php
├── profile.php
├── setup.php           # One-time installer (delete after use)
└── README.md
```

## Default admin (after setup)

Use the credentials you entered in `setup.php`.  
If you imported `schema.sql` only, update the admin password hash as shown above.

## Hosting notes

- Works on shared hosting (cPanel, etc.) that supports PHP + MySQL.
- Ensure `uploads/` is writable (`chmod 755` or `775`).
- For production: disable error display, use HTTPS, delete `setup.php`.

## License

MIT — free to use and modify for any organization.
