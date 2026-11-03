# INFS 3800 Project: Professional Portfolio

A multi-page portfolio website built with PHP and MySQL. Every page shares one template (header, navigation bar, footer, color theme, and stylesheet). The site has public pages, a login system, and private pages that require a session.

## Login Credentials

| Username | Password | Purpose |
|----------|----------|---------|
| `jma` | `jma123` | Website login |
| `joe` | `joe123` | MySQL database user (used in `includes/db.php`) |

## Setup

1. **Install a PHP and MySQL server.** XAMPP, MAMP, or WAMP all work. Start Apache and MySQL.
2. **Create the database.** Run `INFS3800Project.sql` in MySQL, for example:
   ```
   mysql -u root -p < INFS3800Project.sql
   ```
   or import it through phpMyAdmin. The script drops and recreates the `INFS3800Project` database and the user `joe`, so it is safe to run again.
3. **Copy the project folder** into your server's web root (for example `htdocs` in XAMPP).
4. **Add your photo.** Place `Portfolio.png` in the `img/` folder.
5. **Open the site** at `http://localhost/INFS3800Project/` (the PHP pages must be opened through the server, not by double-clicking the files).

## Workflow

```
PUBLIC PAGES                                   PRIVATE PAGES (session required)

index.php (Home) --login--> login.php          private_home.php --> private_info1.php
   |                         (collector)          |   |              private_info2.php
   |                            |                 |   +-- Search --> search.php (collector)
   +--> public_info1.php        v                 |                      |
   +--> public_info2.php   login_handler.php       |                      v
                            - DB checkup           |               search_handler.php
                            - Session setup        |                - Session check
                            - Redirection ---------+                - DB checkup
                            (failure -> back to                     (results -> search.php)
                             login.php with error)
                                                  +-- logoff --> logout.php --> index.php
```

Every private page starts with `includes/session_check.php`. If you are not logged in, you are redirected to `login.php`.

## Pages

| File | Type | Description |
|------|------|-------------|
| `index.php` | Public | Home: About Me and animated Skills cards |
| `public_info1.php` | Public | Education |
| `public_info2.php` | Public | Experience |
| `login.php` | Public | Login form (collector only) |
| `login_handler.php` | Handler | Checks the database, sets up the session, redirects |
| `private_home.php` | Private | Welcome page with links to private pages |
| `private_info1.php` | Private | Projects |
| `private_info2.php` | Private | Contact details |
| `search.php` | Private | Search form and results (collector) |
| `search_handler.php` | Handler | Runs the database search and returns results |
| `logout.php` | Handler | Ends the session and returns to Home |

## Shared Template

| File | Purpose |
|------|---------|
| `includes/header.php` | Page header and navigation bar (shows private links after login) |
| `includes/footer.php` | Footer and script include |
| `includes/init.php` | Starts the session and defines helper functions |
| `includes/db.php` | MySQL connection (user `joe`) |
| `includes/session_check.php` | Common session check for private pages |
| `css/style.css` | The one stylesheet used by every page |
| `js/main.js` | Section fade-in effect used by every page |

## Database

**Database:** `INFS3800Project`

- `users`: login accounts. Passwords are stored as SHA-256 hashes (`SHA2()`).
- `portfolio_items`: portfolio entries searched by the Search page (projects, experience, education, skills).

The SQL file begins with the two required statements:

```sql
DROP USER IF EXISTS 'joe@localhost';
DROP DATABASE IF EXISTS `INFS3800Project` ;
```

## Features

- Consistent template across all pages (structure, colors, menu bar, header, footer)
- Navigation highlights the current page
- Session-based login and logoff
- Private pages protected by a common session check
- Database search using prepared statements (protects against SQL injection)
- Animated skill cards with logos, hover descriptions, and a scrolling tools strip
- Responsive layout; animations are disabled for visitors who prefer reduced motion

## Project Structure

```
INFS3800Project/
├── INFS3800Project.sql
├── README.md
├── index.php
├── public_info1.php
├── public_info2.php
├── login.php
├── login_handler.php
├── logout.php
├── private_home.php
├── private_info1.php
├── private_info2.php
├── search.php
├── search_handler.php
├── css/
│   └── style.css
├── js/
│   └── main.js
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── init.php
│   ├── db.php
│   └── session_check.php
└── img/
    ├── Portfolio.png        (add your own photo)
    └── skills/              (SVG logos from the open-source Devicon set, MIT license)
```

## Quick Test Checklist

- [ ] Home, Education, and Experience open without logging in
- [ ] Opening `private_home.php` while logged out redirects to the login page
- [ ] Logging in with a wrong password shows an error
- [ ] Logging in with `jma` / `jma123` opens Private Home
- [ ] Projects, Contact, and Search work after login
- [ ] Searching for `Python` returns results
- [ ] Logoff returns to Home and hides the private links
- [ ] Header, menu, and footer look the same on every page

## Credits

Skill logos are from [Devicon](https://github.com/devicons/devicon) (MIT license). The Power BI icon is a simple custom drawing.
