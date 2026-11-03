<?php
// "Search Handler": Session check -> DB checkup -> send results back to the collector
require 'includes/session_check.php';   // Session check (common)

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: search.php'); exit; }

$q = trim(isset($_POST['q']) ? $_POST['q'] : '');
$results = [];

if ($q !== '') {
    $conn = get_db();                                    // DB checkup
    $like = '%' . $q . '%';
    $stmt = $conn->prepare('SELECT category, title, description FROM portfolio_items
                            WHERE title LIKE ? OR description LIKE ? OR category LIKE ?
                            ORDER BY category, title');
    $stmt->bind_param('sss', $like, $like, $like);
    $stmt->execute();
    $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    $conn->close();
}

$_SESSION['search'] = ['q' => $q, 'results' => $results];
header('Location: search.php');
exit;
