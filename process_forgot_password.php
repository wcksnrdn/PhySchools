<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


$koneksi = mysqli_connect("localhost", "root", "", "dbakun");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];


    $query = "SELECT * FROM akun WHERE gmail = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {

        $token = bin2hex(random_bytes(32));


        $query_update = "UPDATE akun SET reset_token = ? WHERE gmail = ?";
        $stmt_update = mysqli_prepare($koneksi, $query_update);
        mysqli_stmt_bind_param($stmt_update, "ss", $token, $email);
        mysqli_stmt_execute($stmt_update);


        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ardansatria004@gmail.com';
            $mail->Password = 'gpicdpppvhmcobxi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('admin@example.com', 'Admin Company');
            $mail->addAddress($email);
            $mail->isHTML(true);


            $mail->Subject = 'Reset Password';


            $reset_link = "http://localhost/PROJEK/reset_password.php?token=" . $token;


            $mail->Body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Reset Password</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            color: #666666;
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            background-color: #ff69b4; /* Warna pink */
            color: #ffffff; /* Warna putih untuk teks */
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            margin-top: 15px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #d9534f; /* Warna pink yang sedikit lebih gelap saat hover */
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #999999;
            text-align: center;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Reset Password</h2>
        <p>Dear User,</p>
        <p>You have requested to reset your password. Click the button below to proceed:</p>
        <p><a class='btn' href='$reset_link'>Reset Password</a></p>
        <p>If you did not request this action, please ignore this email.</p>
        <div class='footer'>
            <p>This email was sent by Admin Company. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>
";


            $mail->send();
            echo 'Link sent successfully! check your inbox.';
        } catch (Exception $e) {
            echo "Email gagal dikirim: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Email tidak terdaftar.';
    }
}

mysqli_close($koneksi);
?>