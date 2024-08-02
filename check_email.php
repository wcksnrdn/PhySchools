<?php
// Pastikan ada koneksi ke database di sini
include ('server.php'); // Sesuaikan dengan file koneksi database Anda

// Ambil data yang dikirimkan melalui AJAX
if (isset($_POST['gmail'])) {
    $gmail = $_POST['gmail'];

    // Query untuk memeriksa apakah email sudah terdaftar
    $query = "SELECT COUNT(*) AS count FROM users WHERE gmail = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $gmail);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Jika jumlah baris hasil query lebih dari 0, berarti email sudah terdaftar
    if ($row['count'] > 0) {
        echo 'exists';
    } else {
        echo 'available';
    }
} else {
    echo 'error'; // Handle jika tidak ada data yang dikirimkan
}

$stmt->close();
$conn->close();
?>