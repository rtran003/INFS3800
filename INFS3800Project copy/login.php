<?php
// "log in Collector": only collects the credentials
require_once 'includes/init.php';
if (is_logged_in()) { header('Location: private_home.php'); exit; }

$error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
unset($_SESSION['login_error']);

$pageTitle = 'Login'; $active = 'login.php';
include 'includes/header.php';
?>

<section id="login">
    <h2>Login</h2>
    <?php if ($error): ?><p class="error"><?= e($error) ?></p><?php endif; ?>
    <form action="login_handler.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Log In</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
