<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_ci_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enkripsi password baru
$admin_password_hashed = password_hash('admin', PASSWORD_BCRYPT);
$user_password_hashed = password_hash('password', PASSWORD_BCRYPT);

// Masukkan data untuk admin dan user
$sql = "INSERT INTO `users` (`username`, `password`, `email`, `role`) VALUES 
('admin', '$admin_password_hashed', 'admin@example.com', 'admin'),
('user', '$user_password_hashed', 'user@example.com', 'user')";

if ($conn->query($sql) === TRUE) {
    echo "Passwords updated successfully.<br>";
} else {
    echo "Error updating passwords: " . $conn->error . "<br>";
}

$conn->close();
?>