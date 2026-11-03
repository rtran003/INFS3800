<?php
require 'includes/session_check.php';   // Session check (common)
$pageTitle = 'Private Home'; $active = 'private_home.php';
include 'includes/header.php';
?>

<section id="private-home">
    <h2>Private Home <span class="badge">Members only</span></h2>
    <p class="notice">Welcome, <strong><?= e($_SESSION['user']) ?></strong>! You are logged in.</p>
    <p>From here you can view the private portfolio pages or search my portfolio.</p>
    <div class="btn-row">
        <a class="btn" href="private_info1.php">Projects</a>
        <a class="btn" href="private_info2.php">Contact Details</a>
        <a class="btn" href="search.php">Search</a>
        <a class="btn" href="logout.php">Logoff</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
