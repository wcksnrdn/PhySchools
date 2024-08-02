<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Tangkap data dari formulir HTML
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO dbakun (namalengkap, gmail, username, password) VALUES ('$namalengkap', '$email', '$username', '$password')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
