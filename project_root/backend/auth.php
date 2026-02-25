<?php
session_start();
require_once '../models/User.php';
require_once '../config/db.php';

$userModel = new User($database);

if (isset($_POST['signup'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        die("All fields required");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    // Duplicate check
    if ($userModel->findByEmail($email)) {
        die("Email already exists");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $userModel->createUser([
        'name' => $name,
        'email' => $email,
        'password' => $hashedPassword,
        'created_at' => date('Y-m-d H:i:s')
    ]);

    echo "Signup Successful";
}

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $user = $userModel->findByEmail($email);

    if (!$user) {
        die("Invalid Email");
    }

    if (!password_verify($password, $user['password'])) {
        die("Wrong Password");
    }

    $_SESSION['user'] = $user['email'];
    header("Location: ../public/dashboard.php");
}
?>