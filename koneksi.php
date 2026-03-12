<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tugas_web";

// Koneksi standar tanpa "hostname:" dkk agar tidak error di PHP versi lama
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>