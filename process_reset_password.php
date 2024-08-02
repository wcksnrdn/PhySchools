<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Update password di database
    $query_update = "UPDATE akun SET password = '$password', reset_token = NULL, token_expiry = NULL WHERE reset_token = '$token'";
    if (mysqli_query($koneksi, $query_update)) {
        echo 'Password telah direset.';
    } else {
        echo 'Gagal mereset password.';
    }
}

mysqli_close($koneksi);
?>