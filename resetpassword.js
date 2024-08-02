function submitForm(event) {
    event.preventDefault(); // Menghentikan pengiriman form secara default

    // Mendapatkan nilai password dan token dari form
    var password = document.getElementById("password").value;
    var token = document.querySelector("input[name='token']").value;

    // Tampilkan animasi loading
    var loader = document.getElementById("loader");
    loader.style.display = "inline-block";

    // Simulasi pengiriman form ke server (dapat diganti dengan AJAX jika diperlukan)
    // Misalnya, Anda bisa menggunakan fetch atau XMLHttpRequest untuk mengirimkan data ke process_reset_password.php
    // dan menanggapi respons dari server.
    var formData = new FormData();
    formData.append('password', password);
    formData.append('token', token);

    fetch('process_reset_password.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Sembunyikan animasi loading
        loader.style.display = "none";

        // Menampilkan pesan dari server
        alert(data);

        // Mengosongkan nilai password setelah form dikirim (opsional)
        document.getElementById("password").value = '';
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengirim permintaan reset password.');
        loader.style.display = "none"; // Sembunyikan animasi loading jika terjadi kesalahan
    });
}

