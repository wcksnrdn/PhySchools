// check_username.php
<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $query_cek_username = "SELECT * FROM akun WHERE username='$username'";
    $result_cek_username = mysqli_query($koneksi, $query_cek_username);

    if (mysqli_num_rows($result_cek_username) > 0) {
        echo 'exists';
    } else {
        echo 'available';
    }
}

mysqli_close($koneksi);
?>