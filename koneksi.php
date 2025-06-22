<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_dokumentasi_karyawan";

// Aktifkan mode exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = new mysqli($host, $user, $password, $database);
} catch (Exception $e) {
    // Cari file 500.php di folder saat ini atau parent folders
    $paths = [
        "500.php",
        "../500.php",
        "../../500.php",
        "../../../500.php",
        "../../../../500.php" // Tambah jika struktur folder dalam banget
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            header("Location: $path?error=db");
            exit;
        }
    }

    // Jika tidak ditemukan sama sekali, tampilkan pesan default
    echo "<h2>500 - Database sedang bermasalah</h2>";
    echo "<p>File 500.php tidak ditemukan.</p>";
    exit;
}
?>

