# Ta-adud
# 📋 Sistem Upload Dokumentasi Izin, Sakit, dan Keterlambatan Karyawan

Sistem ini digunakan untuk mencatat dan menyimpan dokumentasi berupa **gambar + alasan + tanggal** dari karyawan yang izin, sakit, atau terlambat. Bukan sistem absensi penuh, hanya dokumentasi pendukung.

---

## 🧾 Fitur

- Form upload data dan gambar
- Jenis dokumentasi: **izin**, **sakit**, **terlambat**
- Preview gambar langsung di tabel
- Riwayat data ditampilkan dalam tabel
- Validasi input sebelum pengiriman

---

## 🖥️ Antarmuka

**Form Upload:**
- Nama Karyawan
- Tanggal Kejadian
- Jenis Dokumentasi
- Alasan / Keterangan
- Upload Gambar (jpg/png)

**Tabel Riwayat:**
- Menampilkan data input dan preview gambar

---

## 🗄️ Struktur Database

**Database Name**: `db_dokumentasi_karyawan`

### Tabel: `dokumentasi`

| Kolom       | Tipe Data                  | Keterangan                           |
|-------------|----------------------------|--------------------------------------|
| `id`        | INT AUTO_INCREMENT         | Primary Key                          |
| `nama`      | VARCHAR(100)               | Nama Karyawan                        |
| `tanggal`   | DATE                       | Tanggal Kejadian                     |
| `jenis`     | ENUM('izin','sakit','terlambat') | Jenis dokumentasi            |
| `alasan`    | TEXT                       | Penjelasan                           |
| `gambar`    | VARCHAR(255)               | Nama file gambar di server           |
| `created_at`| TIMESTAMP DEFAULT CURRENT_TIMESTAMP | Tanggal input otomatis   |

### SQL:
```sql
CREATE DATABASE IF NOT EXISTS db_dokumentasi_karyawan;
USE db_dokumentasi_karyawan;

CREATE TABLE dokumentasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    tanggal DATE NOT NULL,
    jenis ENUM('izin', 'sakit', 'terlambat') NOT NULL,
    alasan TEXT NOT NULL,
    gambar VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
