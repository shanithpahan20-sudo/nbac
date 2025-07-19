<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    generateResponse(false, 'Invalid request method');
}

$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
} elseif (!validateName($name)) {
    $errors[] = 'Name must be at least 2 characters and contain only letters and spaces';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!validateEmail($email)) {
    $errors[] = 'Please enter a valid email address';
}

if (empty($password)) {
    $errors[] = 'Password is required';
} elseif (!validatePassword($password)) {
    $errors[] = 'Password must be at least 8 characters long';
}

if (!empty($errors)) {
    generateResponse(false, implode(', ', $errors));
}

try {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() > 0) {
        generateResponse(false, 'Email address is already registered');
    }
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $hashedPassword]);
    
    if ($stmt->rowCount() > 0) {
        generateResponse(true, 'Registration successful! You can now login.');
    } else {
        generateResponse(false, 'Registration failed. Please try again.');
    }
    
} catch (PDOException $e) {
    error_log("Registration error: " . $e->getMessage());
    generateResponse(false, 'An error occurred during registration. Please try again.');
}
?> 