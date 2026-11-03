<?php
// Loaded by every page: starts the session and defines shared helpers
if (session_status() === PHP_SESSION_NONE) { session_start(); }
require_once __DIR__ . '/db.php';

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function is_logged_in() { return isset($_SESSION['user']); }
function nav_link($file, $label, $active, $class = '') {
    $cls = trim($class . ($active === $file ? ' active' : ''));
    return '<a href="' . $file . '"' . ($cls ? ' class="' . $cls . '"' : '') . '>' . $label . '</a>';
}
