<?php
// Session check (common): include at the top of every private page
require_once __DIR__ . '/init.php';
if (!is_logged_in()) {
    $_SESSION['login_error'] = 'Please log in to view that page.';
    header('Location: login.php');
    exit;
}
