<?php
// Validation functions
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePassword($password) {
    // Password must be at least 8 characters long
    return strlen($password) >= 8;
}

function validateName($name) {
    // Name must be at least 2 characters and contain only letters and spaces
    return strlen(trim($name)) >= 2 && preg_match('/^[a-zA-Z\s]+$/', trim($name));
}

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function generateResponse($success, $message, $data = null) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}

function checkUserStatus($status) {
    switch($status) {
        case 'active':
            return true;
        case 'inactive':
            return false;
        case 'restricted':
            return false;
        default:
            return false;
    }
}
?> 