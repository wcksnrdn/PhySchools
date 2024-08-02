<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


$pesan = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];


    $query = "SELECT password FROM akun WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];


        if (password_verify($current_password, $hashed_password)) {

            if ($new_password === $confirm_password) {
                $hashed_new_password = password_hash($new_password, PASSWORD_BCRYPT);


                $update_query = "UPDATE akun SET password = '$hashed_new_password' WHERE username = '$username'";
                if (mysqli_query($koneksi, $update_query)) {
                    $pesan = "Password changed successfully.";
                } else {
                    $pesan = "An error occurred while changing the password.";
                }
            } else {
                $pesan = "New password and password confirmation do not match.";
            }
        } else {
            $pesan = "The current password is incorrect.";
        }
    } else {
        $pesan = "An error occurred while retrieving data from the database.";
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools - Change Password</title>
    <link rel="stylesheet" href="changepassword.css">
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
</head>

<body>

    <div class="container">
        <h2>Change Password</h2>
        <?php if (!empty($pesan)): ?>
            <div class="<?php echo ($pesan == 'Password changed successfully.') ? 'success' : 'error'; ?>">
                <?php echo $pesan; ?>
            </div>
        <?php endif; ?>
        <form id="changePasswordForm" method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="current_password">Current Password:</label><br>
            <input type="password" id="current_password" name="current_password" required><br><br>

            <label for="new_password">New Password:</label><br>
            <input type="password" id="new_password" name="new_password" required><br><br>

            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <button type="submit" id="submitBtn">
                <p>Change Password</p>
            </button>
        </form>

        <br>
        <a href="index.php">Back to Home</a>
    </div>
    <div id="loading" class="loading">
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
        <div class="loader-square"></div>
    </div>
    <script>
        function validateForm() {
            var newPassword = document.getElementById('new_password').value;
            var confirmPassword = document.getElementById('confirm_password').value;

            if (newPassword !== confirmPassword) {
                alert("New Password and Confirm Password do not match!");
                return false;
            }

            // Display loading animation
            var loading = document.getElementById('loading');
            loading.style.display = 'block';

            // Simulate delay before submitting the form (for realistic effect)
            setTimeout(function () {
                document.getElementById('changePasswordForm').submit();
            }, 2000); // Change 2000 to desired milliseconds delay
            return false; // Prevent form submission
        }
    </script>

</body>

</html>