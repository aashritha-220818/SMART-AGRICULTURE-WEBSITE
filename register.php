<?php
$conn = mysqli_connect("localhost", "root", "", "logindb");
if (!$conn) {
    die("Database connection failed");
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);


if (strlen($username) < 3) {
    die("Username must be at least 3 characters");
}


$username = strtolower($username);


$password = addslashes($password);

$sql = "INSERT INTO log (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
} else {
    die("Registration failed");
}
?>
