<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM akun WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        if ($user && password_verify($password, $user['password'])) {
            // Berhasil login
            $_SESSION['username'] = $user['username'];

            // Set default profile picture atau ambil dari database jika ada
            if (!empty($user['profile_picture'])) {
                $_SESSION['profile_picture'] = $user['profile_picture'];
            } else {
                $_SESSION['profile_picture'] = 'default-profile.png';
            }

            echo json_encode(['status' => 'success']);
        } else {
            // Gagal login, username atau password salah
            echo json_encode(['status' => 'error', 'message' => 'Username atau password salah.']);
        }
    } else {
        // Query gagal
        echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan pada query.']);
    }
}

mysqli_close($koneksi);
?>