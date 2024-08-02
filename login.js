$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        var formData = $(this).serialize(); // Serialisasi data form

        $.ajax({
            type: 'POST',
            url: 'process_login.php',
            data: formData,
            success: function(response) {
                var res = JSON.parse(response);
                if (res.status === 'success') {
                    localStorage.setItem("isLoggedIn", true);
                    window.location.href = 'index.php'; // Redirect ke halaman utama
                } else {
                    $('#loginError').text(res.message); // Tampilkan pesan kesalahan
                }
            },
            error: function() {
                $('#loginError').text('An error occurred. Please try again.');
            }
        });
    });

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
});
function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var eyeClosed = document.querySelector(".eye-closed");
    var eyeOpen = document.querySelector(".eye-open");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeClosed.style.display = "none";
        eyeOpen.style.display = "block";
        setTimeout(function() {
            eyeOpen.style.transform = "scaleY(1)";
        }, 10); // Delay for animation effect
    } else {
        passwordField.type = "password";
        eyeClosed.style.display = "block";
        eyeOpen.style.display = "none";
        setTimeout(function() {
            eyeClosed.style.transform = "scaleY(1)";
        }, 10); // Delay for animation effect
    }
}