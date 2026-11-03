<?php
// Database connection (credentials required by the assignment)
function get_db() {
    $conn = new mysqli('localhost', 'joe', 'joe123', 'INFS3800Project');
    if ($conn->connect_error) {
        die('Database connection failed: ' . htmlspecialchars($conn->connect_error));
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}
