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
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" enctype="multipart/form-data">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="nama-civitas" class="pb-2">Nama Civitas</label>
                <select name="nama_civitas" id="nama-civitas" class="form-control" required>
                  <option value="">-- Pilih Nama Ustadzah --</option>
                  <option value="Ustadzah Lala">Ustadzah Lala</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="tanggal-kejadian" class="pb-2">Tanggal Kejadian</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal-kejadian" required>
              </div>

              <div class="col-md-6">
                <label for="jenis-dokumentasi" class="pb-2">Jenis Dokumentasi</label>
                <select name="jenis_dokumentasi" id="jenis-dokumentasi" class="form-control" required>
                  <option value="">-- Pilih Jenis Dokumentasi --</option>
                  <option value="Izin">Izin</option>
                  <option value="Sakit">Sakit</option>
                  <option value="Terlambat">Terlambat</option>
                  <option value="Tidak Absen">Tidak Absen</option>
                  <option value="Cuti">Cuti</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="bukti-dokumentasi" class="pb-2">Upload Bukti Dokumentasi (PNG/JPG)</label>
                <input type="file" class="form-control" name="bukti_dokumentasi" id="bukti-dokumentasi" accept=".png,.jpg,.jpeg" required>
              </div>

              <div class="col-md-12">
                <label for="preview" class="pb-2">Preview</label>
                <div id="preview-image"></div> <!-- Preview Gambar yang di upload -->
              </div>
              <div class="col-md-12">
                <label for="keterangan" class="pb-2">Keterangan/Alasan</label>
                <textarea class="form-control" name="keterangan" rows="5" id="keterangan" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
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

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
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
  </script>

</body>

</html>