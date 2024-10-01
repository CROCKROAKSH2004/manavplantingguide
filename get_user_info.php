<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $response = [
        'logged_in' => true,
        'username' => $_SESSION['username'],
        // You can return more user profile information if needed
    ];
} else {
    $response = [
        'logged_in' => false,
    ];
}

// Return response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
