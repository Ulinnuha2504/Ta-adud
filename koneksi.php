<?php
$host = "localhost";       // host database (biasanya localhost)
$user = "root";            // username database (ubah sesuai server kamu)
$password = "";            // password database (kosongkan jika tidak ada)
$database = "db_dokumentasi_karyawan";  // nama database

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Jika koneksi berhasil
// echo "Koneksi berhasil";
?>
