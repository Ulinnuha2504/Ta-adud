<?php
include 'koneksi.php';

$targetDir = "admin/arsip/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$id_karyawan = $_POST['nama_civitas'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis_dokumentasi'];
$alasan = $_POST['keterangan'];

$id_karyawan_padded = str_pad($id_karyawan, 3, '0', STR_PAD_LEFT);

$cekQuery = "SELECT * FROM dokumentasi WHERE id_karyawan = '$id_karyawan' AND tanggal = '$tanggal'";
$cekResult = mysqli_query($koneksi, $cekQuery);

if (mysqli_num_rows($cekResult) > 0) {
    echo "<script>
        alert('Data dokumentasi untuk tanggal ini sudah pernah diupload oleh karyawan ini.');
        window.location.href = './present';

    </script>";
    exit;
}

$fileInput = $_FILES['bukti_dokumentasi'];
$fileName = $fileInput['name'];
$fileTmp = $fileInput['tmp_name'];
$fileSize = $fileInput['size'];
$fileError = $fileInput['error'];
$fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

$allowedExt = ['jpg', 'jpeg', 'png'];

if (in_array($fileExt, $allowedExt)) {
    if ($fileError === 0) {
        if ($fileSize <= 5 * 1024 * 1024) {
            $tanggalFormatted = str_replace("-", "", $tanggal);
            $newFileName = $tanggalFormatted . $id_karyawan_padded . "." . $fileExt;
            $destination = $targetDir . $newFileName;

            if (move_uploaded_file($fileTmp, $destination)) {
                $query = "INSERT INTO dokumentasi (id_karyawan, tanggal, jenis, alasan, gambar) 
                          VALUES ('$id_karyawan', '$tanggal', '$jenis', '$alasan', '$newFileName')";
                $result = mysqli_query($koneksi, $query);

                if ($result) {
                    echo "<script>
                        alert('Data berhasil disimpan.');
                        window.location.href = './present';
                    </script>";
                } else {
                    echo "<script>
                        alert('Gagal menyimpan data ke database.');
                        window.history.back();
                    </script>";
                }

            } else {
                echo "<script>
                    alert('Gagal memindahkan file.');
                    window.history.back();
                </script>";
            }
        } else {
            echo "<script>
                alert('Ukuran file terlalu besar. Maksimal 5MB.');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Terjadi kesalahan saat upload file.');
            window.history.back();
        </script>";
    }
} else {
    echo "<script>
        alert('Jenis file tidak diperbolehkan. Hanya JPG, JPEG, PNG.');
        window.history.back();
    </script>";
}
?>
