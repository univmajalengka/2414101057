<?php
// koneksi.php (Versi untuk LOKAL / XAMPP)

$servername = "localhost";
$username = "root";      // <-- KEMBALIKAN KE 'root'
$password = "";          // <-- KOSONGKAN LAGI PASSWORDNYA
$dbname = "aditpetshop"; // Nama database di komputer lokal Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>