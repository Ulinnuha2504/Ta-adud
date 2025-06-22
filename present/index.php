<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Allyn | TA'ADUD</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <!-- Select 2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Ta'adud</h1>
      </a>

      <nav id="navmenu" class="navmenu">
       
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="../">Back to Home</a>
    </div>
  </header>

  <main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Dokumentasi</span>
        <h2>Form</h2>
        <p>Mohon sertakan alasan / keterangan yang valid</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-12">
            <?php
              include "../koneksi.php";
              $qdata = mysqli_query($koneksi,"SELECT id_karyawan as identitas, panggilan_karyawan as nama FROM karyawan ORDER by nama ASC;")
            ?>
     <form action="../act.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  <div class="row g-3">
    <div class="col-md-6">
      <label for="nama-civitas" class="form-label">Nama Civitas</label>
      <select name="nama_civitas" id="nama-civitas" class="form-select" required>
        <option value="">-- Pilih Nama Civitas --</option>
        <?php while($data = mysqli_fetch_array($qdata)) { ?>
          <option value="<?= $data['identitas']; ?>"><?= $data['nama']; ?></option>
        <?php } ?>
      </select>
      <div class="invalid-feedback">Silakan pilih nama civitas.</div>
    </div>

    <div class="col-md-6">
      <label for="tanggal-kejadian" class="form-label">Tanggal Kejadian</label>
      <input type="date" class="form-control" name="tanggal" id="tanggal-kejadian" required>
      <div class="invalid-feedback">Tanggal wajib diisi.</div>
    </div>

    <div class="col-md-6">
      <label for="jenis-dokumentasi" class="form-label">Jenis Dokumentasi</label>
      <select name="jenis_dokumentasi" id="jenis-dokumentasi" class="form-select" required>
        <option value="">-- Pilih Jenis Dokumentasi --</option>
        <option value="Izin">Izin</option>
        <option value="Sakit">Sakit</option>
        <option value="Terlambat">Terlambat</option>
        <option value="Tidak Absen">Tidak Absen</option>
        <option value="Cuti">Cuti</option>
      </select>
      <div class="invalid-feedback">Jenis dokumentasi harus dipilih.</div>
    </div>

    <div class="col-md-6">
      <label for="bukti-dokumentasi" class="form-label">Upload Bukti Dokumentasi (PNG/JPG)</label>
      <input type="file" class="form-control" name="bukti_dokumentasi" id="bukti-dokumentasi" accept=".png,.jpg,.jpeg" required>
      <div class="invalid-feedback">Silakan upload bukti dalam format gambar.</div>
    </div>

    <div class="col-12">
      <label class="form-label">Preview Gambar</label>
      <div id="preview-image" class="border rounded p-2" style="min-height:100px;"></div>
    </div>

    <div class="col-12">
      <label for="keterangan" class="form-label">Keterangan/Alasan</label>
      <textarea class="form-control" name="keterangan" id="keterangan" rows="4" required></textarea>
      <div class="invalid-feedback">Keterangan harus diisi.</div>
    </div>

    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary mt-3">Kirim</button>
    </div>
  </div>
</form>

          </div><!-- End Contact Form -->
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Ta'adud</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Kota Salatiga</p>
            <p>Jawa Tengah</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 81229474752</span></p>
            <p><strong>Email:</strong> <span>ulinnuhaulin48@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cipta Web Organization</p>
          <div class="social-links d-flex">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Ta'adud</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      Develop by <a href="https://ulinnuha.my.id">Mauliannurzaidani
      </div>
    </div>

  </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- SELECT 2 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
document.getElementById("bukti-dokumentasi").addEventListener("change", function (event) {
  const preview = document.getElementById("preview-image");
  preview.innerHTML = ""; // Bersihkan preview sebelumnya
  const file = event.target.files[0];
  if (file && file.type.match("image.*")) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const img = document.createElement("img");
      img.src = e.target.result;
      img.classList.add("img-fluid", "rounded", "mt-2");
      img.style.maxHeight = "300px";
      preview.appendChild(img);
    };
    reader.readAsDataURL(file);
  }
});
</script>
  <!-- <script>
document.getElementById('bukti-dokumentasi').addEventListener('change', function(event) {
  const preview = document.getElementById('preview-image');
  preview.innerHTML = ''; // Kosongkan dulu preview sebelumnya

  const file = event.target.files[0];

  if(file) {
    // Validasi tipe file
    const fileType = file.type;
    const validImageTypes = ['image/jpeg', 'image/png'];
    if (!validImageTypes.includes(fileType)) {
      alert('Hanya file PNG atau JPG yang diizinkan.');
      event.target.value = ''; // Reset input file
      return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
      const img = document.createElement('img');
      img.src = e.target.result;
      img.style.maxWidth = '300px';
      img.style.maxHeight = '300px';
      img.style.marginTop = '10px';
      preview.appendChild(img);
    }
    reader.readAsDataURL(file);
  }
});
  </script> -->

</body>

</html>