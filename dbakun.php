<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mengambil data dari formulir pendaftaran
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Hash password untuk keamanan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Detail koneksi database
$servername = "localhost";
$db_username = "root"; // Sesuaikan dengan username MySQL kamu
$db_password = ""; // Sesuaikan dengan password MySQL kamu
$dbname = "namadatabase"; // Sesuaikan dengan nama database kamu

// Membuat koneksi ke database
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menjalankan query untuk menyimpan data pendaftaran
$sql = "INSERT INTO user (namalengkap, gmail, username, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $email, $username, $hashed_password);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
