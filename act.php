<?php
// Panggil koneksi database
include 'koneksi.php';

// Pastikan folder tujuan upload ada
$targetDir = "admin/arsip/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Ambil data dari form
$id_karyawan = $_POST['nama_civitas'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis_dokumentasi'];
$alasan = $_POST['keterangan'];

// Padding identitas supaya 3 digit
$id_karyawan_padded = str_pad($id_karyawan, 3, '0', STR_PAD_LEFT);

// --- Validasi apakah data sudah ada ---
$cekQuery = "SELECT * FROM dokumentasi WHERE id_karyawan = '$id_karyawan' AND tanggal = '$tanggal'";
$cekResult = mysqli_query($koneksi, $cekQuery);

if (mysqli_num_rows($cekResult) > 0) {
    // Data sudah ada
    echo "Data dokumentasi untuk tanggal ini sudah pernah diupload oleh karyawan ini.";
    exit; // hentikan proses
}

// File Upload
$fileInput = $_FILES['bukti_dokumentasi'];
$fileName = $fileInput['name'];
$fileTmp = $fileInput['tmp_name'];
$fileSize = $fileInput['size'];
$fileError = $fileInput['error'];
$fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Validasi ekstensi file
$allowedExt = ['jpg', 'jpeg', 'png'];

if (in_array($fileExt, $allowedExt)) {
    if ($fileError === 0) {
        if ($fileSize <= 5 * 1024 * 1024) { // Maks 5MB
            // Format nama file baru
            $tanggalFormatted = str_replace("-", "", $tanggal);
            $newFileName = $tanggalFormatted . $id_karyawan_padded . "." . $fileExt;
            $destination = $targetDir . $newFileName;

            // Pindahkan file
            if (move_uploaded_file($fileTmp, $destination)) {
                
                // Simpan ke database
                $query = "INSERT INTO dokumentasi (id_karyawan, tanggal, jenis, alasan, gambar) 
                          VALUES ('$id_karyawan', '$tanggal', '$jenis', '$alasan', '$newFileName')";
                
                $result = mysqli_query($koneksi, $query);

                if ($result) {
                    echo "Data berhasil disimpan.";
                } else {
                    echo "Gagal menyimpan data ke database: " . mysqli_error($koneksi);
                }

            } else {
                echo "Gagal memindahkan file.";
            }
        } else {
            echo "Ukuran file terlalu besar. Maksimal 5MB.";
        }
    } else {
        echo "Terjadi kesalahan saat upload file.";
    }
} else {
    echo "Jenis file tidak diperbolehkan. Hanya JPG, JPEG, PNG.";
}
?>
