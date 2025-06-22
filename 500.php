<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>500 - Kesalahan Server</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card shadow text-center">
      <div class="card-body">
        <h1 class="display-4 text-danger">500</h1>
        <h4 class="mb-3">Database sedang bermasalah</h4>
        <p class="text-muted">
          Kami tidak dapat menghubungi database saat ini.<br>
          Silakan coba beberapa saat lagi.
        </p>
        <?php
          // Coba ambil URL sebelumnya dari header
          $previousUrl = $_SERVER['HTTP_REFERER'] ?? '';
        ?>
        <?php if ($previousUrl): ?>
          <a href="<?= htmlspecialchars($previousUrl) ?>" class="btn btn-secondary mt-3">Coba Lagi</a>
        <?php else: ?>
          <a href="javascript:location.reload();" class="btn btn-secondary mt-3">Coba Lagi</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
