<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    generateResponse(false, 'Invalid request method');
}

$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$errors = [];

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!validateEmail($email)) {
    $errors[] = 'Please enter a valid email address';
}

if (empty($password)) {
    $errors[] = 'Password is required';
}

if (!empty($errors)) {
    generateResponse(false, implode(', ', $errors));
}

try {
    $stmt = $pdo->prepare("SELECT id, name, email, password, status FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if (!$user) {
        generateResponse(false, 'Invalid email or password');
    }
    
    if (!checkUserStatus($user['status'])) {
        if ($user['status'] === 'restricted') {
            generateResponse(false, 'Your account has been restricted by the Admin.');
        } else {
            generateResponse(false, 'Your account is inactive. Please contact support.');
        }
    }
    
    if (!password_verify($password, $user['password'])) {
        generateResponse(false, 'Invalid email or password');
    }
    
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['logged_in'] = true;
    
    generateResponse(true, 'Login Successful.', [
        'user_id' => $user['id'],
        'user_name' => $user['name'],
        'user_email' => $user['email']
    ]);
    
} catch (PDOException $e) {
    error_log("Login error: " . $e->getMessage());
    generateResponse(false, 'An error occurred during login. Please try again.');
}
?> 