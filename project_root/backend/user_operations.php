<?php
require_once '../config/db.php';
require_once '../models/User.php';

$userModel = new User($database);

// DELETE USER
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    if (empty($id)) {
        die("Invalid User ID");
    }

    try {
        $userModel->deleteUser($id);
        header("Location: ../public/users.php");
        exit();
    } catch (Exception $e) {
        die("Error deleting user: " . $e->getMessage());
    }
}
?>