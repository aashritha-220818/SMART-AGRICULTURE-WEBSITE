<?php
session_start();
require_once '../config/db.php';
require_once '../models/User.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$userModel = new User($database);
$users = $userModel->getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #ddd;
        }
        a {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<h2>User List</h2>
<a href="dashboard.php">Back to Dashboard</a>
<br><br>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['name']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td><?php echo isset($user['created_at']) ? $user['created_at'] : ''; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $user['_id']; ?>">Edit</a>
                <a href="../backend/user_operations.php?delete=<?php echo $user['_id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>