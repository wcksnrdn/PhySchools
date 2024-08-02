<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools - Registration</title>
    <link rel="stylesheet" href="haldaftar.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
</head>

<body>
    <div class="containerjudul">
        <h2>Registration</h2>
    </div>
    <div class="registration-container">
        <form id="registerForm" action="server.php" method="post" onsubmit="return validateForm()">
            <div class="input-group">
                <input type="namalengkap" id="namalengkap" name="namalengkap" required aria-label="namalengkap">
                <label for="namalengkap">Full Name</label>
            </div>
            <div class="input-group">
                <input type="gmail" id="gmail" name="gmail" required aria-label="gmail">
                <label for="gmail">Gmail (Gmail)</label>
            </div>
            <div class="input-group">
                <input type="username" id="username" name="username" required aria-label="Username">
                <label for="username">Username</label>
                <div id="usernameError" class="error-message"></div>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" minlength="8" required aria-label="Password">
                <label for="password">Password (min. 8 characters)</label>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an Account? <a href="login.php">Sign In here!</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function () {
            $('#registerForm').submit(function (event) {
                event.preventDefault();

                var namalengkap = $('#namalengkap').val();
                var gmail = $('#gmail').val(); // Changed id from 'email' to 'gmail'
                var username = $('#username').val();
                var password = $('#password').val();

                // Check if Gmail is already registered
                $.ajax({
                    url: 'check_email.php', // Modify to your actual PHP script to check Gmail
                    method: 'POST',
                    data: { gmail: gmail },
                    success: function (response) {
                        if (response === 'exists') {
                            alert('Gmail address is already registered.');
                        } else {
                            // Proceed with username availability check
                            $.ajax({
                                url: 'check_username.php',
                                method: 'POST',
                                data: { username: username },
                                success: function (response) {
                                    if (response === 'exists') {
                                        $('#usernameError').text('Username Sudah Ada');
                                    } else {
                                        // If username and email are both available, proceed with registration
                                        $.ajax({
                                            url: 'server.php',
                                            method: 'POST',
                                            data: {
                                                namalengkap: namalengkap,
                                                gmail: gmail,
                                                username: username,
                                                password: password
                                            },
                                            success: function (response) {
                                                if (response === 'success') {
                                                    alert('Terjadi kesalahan saat mendaftar. Silakan coba lagi.');
                                                } else {
                                                    alert('Registrasi Berhasil! Anda akan dialihkan ke halaman login.');
                                                    window.location.href = 'login.php';
                                                }
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    }
                });
            });
        });

        function validateForm() {
            var email = document.getElementById('email').value;
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }

            // Panggil fungsi untuk memeriksa ketersediaan username
            if (!checkUsernameAvailability(username)) {
                // Tampilkan pesan kesalahan di halaman
                document.getElementById('usernameError').innerHTML = "Username sudah digunakan. Silakan pilih username lain.";
                return false;
            }

            return true;
        }

        document.querySelectorAll('.input-group input').forEach(input => {
            input.addEventListener('focus', function () {
                this.parentElement.querySelector('label').classList.add('active');
            });

            input.addEventListener('blur', function () {
                if (this.value === '') {
                    this.parentElement.querySelector('label').classList.remove('active');
                }
            });
        });

        function checkUsernameAvailability(username) {
            // Lakukan kueri atau panggil API untuk memeriksa ketersediaan username di server
            // Return true jika username tersedia, false jika sudah digunakan
        }
    </script>
</body>

</html>