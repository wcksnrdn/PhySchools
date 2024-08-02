<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PhySchools - Forgot Password</title>
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
    <link rel="stylesheet" href="forgotpassword.css">
    <script>
        function submitForm(event) {
            event.preventDefault(); // Menghentikan pengiriman form secara default

            // Mendapatkan nilai email dari form
            var email = document.getElementById("email").value;

            // Contoh validasi sederhana untuk email (bisa disesuaikan)
            if (!email || !email.includes('@')) {
                alert('Masukkan email yang valid.');
                return;
            }

            // Tampilkan animasi loading
            var loader = document.getElementById("loader");
            loader.style.display = "inline-block";

            // Simulasi pengiriman form ke server (dapat diganti dengan AJAX jika diperlukan)
            // Misalnya, Anda bisa menggunakan fetch atau XMLHttpRequest untuk mengirimkan data ke process_forgot_password.php
            // dan menanggapi respons dari server.
            var formData = new FormData();
            formData.append('email', email);

            fetch('process_forgot_password.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    // Sembunyikan animasi loading
                    loader.style.display = "none";

                    // Menampilkan pesan dari server
                    alert(data);

                    // Mengosongkan nilai email setelah form dikirim (opsional)
                    document.getElementById("email").value = '';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim permintaan reset password.');
                    loader.style.display = "none"; // Sembunyikan animasi loading jika terjadi kesalahan
                });
        }
    </script>
</head>

<body>
    <h2>Forgot Password</h2>
    <form onsubmit="submitForm(event);">
        <label for="email">Enter your Gmail:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Reset Password</button>
        <div id="loader" class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div> <!-- Elemen untuk animasi loading -->
    </form>
</body>

</html>