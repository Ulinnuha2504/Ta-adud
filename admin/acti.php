<?php
// Panggil koneksi database
include '../koneksi.php';

if (isset($_POST['tcivitas'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
   
    $namalengkap     = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
    $panggilan       = mysqli_real_escape_string($koneksi, $_POST['panggilan']);
    $jenis_kelamin   = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $tempatlahir     = mysqli_real_escape_string($koneksi, $_POST['tempatlahir']);
    $tanggalmasuk    = mysqli_real_escape_string($koneksi, $_POST['tanggalmasuk']);
    $tanggallahir    = mysqli_real_escape_string($koneksi, $_POST['tanggallahir']);
    $alamat          = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $telepon         = mysqli_real_escape_string($koneksi, $_POST['telepon']);
    
    $query = mysqli_query($koneksi, "
      INSERT INTO karyawan (
        namalengkap_karyawan,
        panggilan_karyawan,
        jk_karyawan,
        tempatlahir_karyawan,
        tanggallahir_karyawan,
        alamat_karyawan,
        kontak_karyawan,
        tglmasuk_karyawan
      ) VALUES (
        '$namalengkap',
        '$panggilan',
        '$jenis_kelamin',
        '$tempatlahir',
        '$tanggallahir',
        '$alamat',
        '$telepon',
        '$tanggalmasuk'
      )
    ");
    
    // Optional: cek apakah berhasil
    if ($query) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
    
}
?>
