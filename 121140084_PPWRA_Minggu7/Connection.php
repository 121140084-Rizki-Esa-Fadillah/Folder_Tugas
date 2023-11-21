<?php
// Membuat koneksi
$koneksi = new mysqli("localhost", "root", "", "Database_Mahasiswa.sql");

// Melakukan pengecekan koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
?>