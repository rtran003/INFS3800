INFS 3800 Project - Ryan Tran

SETUP
1. Run INFS3800Project.sql in MySQL (creates DB, user joe/joe123, tables, and login jma/jma123).
2. Put this folder in your PHP server root (XAMPP htdocs, etc.) and open index.php.
3. Add your profile photo as img/Portfolio.png.

WORKFLOW
Public:  index.php, public_info1.php, public_info2.php
Login:   login.php (collector) -> login_handler.php (DB checkup, session setup, redirect)
Private: private_home.php, private_info1.php, private_info2.php, search.php (collector) -> search_handler.php
Shared template: includes/header.php, includes/footer.php, css/style.css, js/main.js
Session check (common): includes/session_check.php
