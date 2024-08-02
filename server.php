<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namalengkap = $_POST['namalengkap'];
    $gmail = $_POST['gmail'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Tambahkan kolom reset_token dan token_expiry ke dalam query jika perlu
    $reset_token = isset($_POST['reset_token']) ? $_POST['reset_token'] : null;
    $token_expiry = isset($_POST['token_expiry']) ? $_POST['token_expiry'] : null;

    $query = "INSERT INTO akun (namalengkap, gmail, username, password, reset_token, token_expiry) 
              VALUES ('$namalengkap', '$gmail', '$username', '$password', '$reset_token', '$token_expiry')";

    if (mysqli_query($koneksi, $query)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

mysqli_close($koneksi);
?>