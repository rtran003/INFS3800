<?php
// "login Handler": DB checkup -> session setup -> redirection (no HTML output)
require_once 'includes/init.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: login.php'); exit; }

$username = trim(isset($_POST['username']) ? $_POST['username'] : '');
$password = isset($_POST['password']) ? $_POST['password'] : '';

// 1. DB checkup (prepared statement; passwords stored as SHA-256 hashes)
$conn = get_db();
$stmt = $conn->prepare('SELECT username FROM users WHERE username = ? AND password_hash = SHA2(?, 256)');
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // 2. Session setup
    session_regenerate_id(true);
    $_SESSION['user'] = $result->fetch_assoc()['username'];
    // 3. Redirection -> Private Home
    header('Location: private_home.php');
} else {
    // Back to the login Collector with an error
    $_SESSION['login_error'] = 'Invalid username or password.';
    header('Location: login.php');
}
$stmt->close();
$conn->close();
exit;
