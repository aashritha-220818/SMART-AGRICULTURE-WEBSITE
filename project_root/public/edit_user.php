<?php
session_start();

require_once '../config/db.php';
require_once '../models/User.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$userModel = new User($database);

// Check if ID is provided
if (!isset($_GET['id'])) {
    die("User ID not provided");
}

$id = $_GET['id'];

try {
    $user = $database->users->findOne([
        '_id' => new MongoDB\BSON\ObjectId($id)
    ]);

    if (!$user) {
        die("User not found");
    }

} catch (Exception $e) {
    die("Invalid User ID");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="POST" action="../backend/user_operations.php">
    
    <input type="hidden" name="id" value="<?php echo $user['_id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name"
        value="<?php echo htmlspecialchars($user['name']); ?>" required>
    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email"
        value="<?php echo htmlspecialchars($user['email']); ?>" required>
    <br><br>

    <button type="submit" name="update">Update User</button>

</form>

<br>
<a href="users.php">Back to User List</a>

</body>
</html>