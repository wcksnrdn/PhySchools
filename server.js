const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
const port = 3306;

// Konfigurasi koneksi ke database
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root', // ganti dengan user MySQL Anda
    password: '', // ganti dengan password MySQL Anda
    database: 'dbakun' // ganti dengan nama database Anda
}); 

// Koneksi ke database
db.connect(err => {
    if (err) {
        console.error('error connecting: ' + err.stack);
        return;
    }
    console.log('connected as id ' + db.threadId);
});

// Middleware untuk parsing body dari request
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Route untuk halaman registrasi (form HTML)
app.get('/register', (req, res) => {
    res.sendFile(__dirname + '/register.html');
});

// Route untuk menangani data registrasi yang dikirim dari form
app.post('/register', (req, res) => {
    let { namalengkap, gmail, username, password } = req.body;
    let sql = 'INSERT INTO users (namalengkap, gmail, username, password) VALUES (?, ?, ?, ?)';
    db.query(sql, [namalengkap, gmail, username, password], (err, result) => {
        if (err) {
            console.error(err);
            res.send('Error during registration');
        } else {
            res.send('User registered successfully');
        }
    });
});

// Menjalankan server
app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
app.post('/register', (req, res) => {
    console.log(req.body); // Tambahkan log ini untuk melihat data yang diterima
    let { namalengkap, gmail, username, password } = req.body;
    let sql = 'INSERT INTO users (namalengkap, gmail, username, password) VALUES (?, ?, ?, ?)';
    db.query(sql, [namalengkap, gmail, username, password], (err, result) => {
        if (err) {
            console.error(err);
            res.send('Error during registration');
        } else {
            res.send('User registered successfully');
        }
    });
});
