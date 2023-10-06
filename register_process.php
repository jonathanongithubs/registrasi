<?php
if (isset($_POST['register'])) {
    $servername = "localhost"; // Lokasi server MySQL 
    $username = "root"; // Nama pengguna MySQL Anda
    $password = ""; // Kata sandi MySQL Anda (kosongkan jika tidak ada)
    $dbname = "registrasi_dasar"; // Nama database yang telah Anda buat

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mendapatkan data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membuat query untuk menyimpan data ke database
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();
}
?>