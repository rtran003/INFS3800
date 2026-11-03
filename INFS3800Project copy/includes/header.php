<?php
require_once __DIR__ . '/init.php';
$pageTitle = isset($pageTitle) ? $pageTitle : 'Ryan Tran';
$active = isset($active) ? $active : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> | Ryan Tran - INFS 3800</title>
    <script>document.documentElement.classList.add('js');</script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Ryan Tran</h1>
    <p>Information Systems Student</p>
</header>

<nav>
    <?= nav_link('index.php', 'Home', $active) ?>
    <?= nav_link('public_info1.php', 'Education', $active) ?>
    <?= nav_link('public_info2.php', 'Experience', $active) ?>
<?php if (is_logged_in()): ?>
    <?= nav_link('private_home.php', 'Private Home', $active, 'private') ?>
    <?= nav_link('private_info1.php', 'Projects', $active, 'private') ?>
    <?= nav_link('private_info2.php', 'Contact', $active, 'private') ?>
    <?= nav_link('search.php', 'Search', $active, 'private') ?>
    <a href="logout.php">Logoff (<?= e($_SESSION['user']) ?>)</a>
<?php else: ?>
    <?= nav_link('login.php', 'Login', $active) ?>
<?php endif; ?>
</nav>

<div class="container">
