<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools - Login</title>
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
    <link rel="stylesheet" href="hallogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <h2>Welcome!</h2>
        <form id="loginForm" action="process_login.php" method="POST">
            <div class="input-group">
                <input type="username" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="#666">
                        <!-- Mata tertutup -->
                        <circle cx="12" cy="12" r="10" fill="none" stroke="#666" stroke-width="2" />
                        <path class="eye-closed eye-animation"
                            d="M15.5 12c0 1.93-1.57 3.5-3.5 3.5s-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5zM12 14.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />

                        <!-- Mata terbuka -->
                        <circle cx="12" cy="12" r="10" fill="none" stroke="#666" stroke-width="2"
                            style="display:none;" />
                        <path class="eye-open eye-animation"
                            d="M15.5 12c0 1.93-1.57 3.5-3.5 3.5s-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5zM12 14.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"
                            style="display:none;" />
                    </svg>
                </span>
            </div>
            <button type="submit">Sign In</button>
            <div id="loginError" class="error-message"></div>
        </form>
        <div class="forgot-link">
            <p>Forgot your Password? <a href="forgot_password.php" class="signup-button">Reset Here!</a></p>
        </div>
        <div class="register-link">
            <p>Don't have an Account yet? <a href="daftar.php" class="signup-button">Sign Up here!</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="login.js"></script>
</body>

</html>