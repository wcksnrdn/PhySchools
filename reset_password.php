<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$message = "";
$show_signin_button = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $message = 'Password dan Konfirmasi Password tidak cocok.';
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Update password di database
        $query_update = "UPDATE akun SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?";
        $stmt = mysqli_prepare($koneksi, $query_update);
        mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $token);

        if (mysqli_stmt_execute($stmt)) {
            $message = 'Password has been reset. Click the button below to enter.';
            $show_signin_button = true;
        } else {
            $message = 'Gagal mereset password.';
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token'])) {
    // Membersihkan dan memvalidasi token
    $token = htmlspecialchars($_GET['token']);

    // Query untuk mencari akun berdasarkan token
    $query = "SELECT * FROM akun WHERE reset_token = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $token);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        $message = 'Token tidak valid.';
    }
} else {
    $message = 'Token tidak valid atau permintaan tidak valid.';
}

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools - Reset Password</title>
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
    <link rel="stylesheet" href="resetpassword.css">
</head>

<body>
    <div class="reset-form">
        <h2>Reset Password</h2>
        <?php if ($message): ?>
            <p class="<?php echo $show_signin_button ? '' : 'error'; ?>"><?php echo $message; ?></p>
            <?php if ($show_signin_button): ?>
                <a href="login.php"><button>Sign In</button></a>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (isset($row) && $row && !$show_signin_button): ?>
            <form method="POST">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm_password">Confirmation Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <button type="submit">Reset</button>
                <div id="loader" class="loader"></div> <!-- Elemen untuk animasi loading -->
            </form>
        <?php endif; ?>
        <div id="customNotification" class="custom-notification"></div> <!-- Elemen untuk custom notification -->
    </div>
</body>

</html>