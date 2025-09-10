<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMART Tani</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
  <style>
    .hero {
      padding: 100px 0;
      background: linear-gradient(135deg, #e6ffe6 0%, #f6fff6 100%);
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .video-wrapper {
      position: relative;
      padding-top: 56.25%;
      border-radius: 12px;
      overflow: hidden;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .news-card {
      transition: all 0.2s ease-in-out;
    }

    .news-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">🌾 SMART Tani</a>
      <div class="ms-auto">
        <a href="<?= site_url('login') ?>" class="btn btn-outline-success btn-sm">Login</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <h1>Solusi Digital untuk Petani</h1>
          <p class="lead"><?= !empty($about) ? $about : 'Platform untuk membantu petani memasarkan dan mengelola usaha.'; ?></p>
          <?php if (!empty($demo)): ?>
            <a href="<?= $demo ?>" target="_blank" class="btn btn-success btn-lg">
              <i class="fas fa-play-circle"></i> Ujicoba Aplikasi
            </a>
          <?php endif; ?>
        </div>
        <div class="col-md-6">
          <div class="video-wrapper shadow">
            <iframe src="https://www.youtube.com/embed/QByTvkwU-U0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section class="container my-5">
    <h3 class="mb-4"><i class="fas fa-newspaper"></i> Berita Terkini</h3>
    <div class="row">
      <?php if (!empty($news)): foreach ($news as $n): ?>
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm news-card">
              <?php if (!empty($n->thumbnail)): ?>
                <img
                  src="<?= base_url('uploads/news/' . htmlspecialchars($n->thumbnail)) ?>"
                  class="card-img-top"
                  alt="<?= htmlspecialchars($n->title) ?>"
                  loading="lazy">
              <?php endif; ?>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= htmlspecialchars($n->title) ?></h5>
                <small class="text-muted mb-2"><?= date('d M Y H:i', strtotime($n->created_at)) ?></small>
                <p class="card-text flex-grow-1">
                  <?php
                  // Trim konten tanpa memotong kata
                  $trimmed = mb_substr($n->content, 0, 120, 'UTF-8');
                  if (mb_strlen($n->content, 'UTF-8') > 120) {
                    $lastSpace = mb_strrpos($trimmed, ' ', 0, 'UTF-8');
                    $trimmed = mb_substr($trimmed, 0, $lastSpace, 'UTF-8') . '...';
                  }
                  echo nl2br(htmlspecialchars($trimmed));
                  ?>
                </p>
                <a href="<?= site_url('home/news_detail/' . $n->id) ?>" class="btn btn-success btn-sm mt-auto">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach;
      else: ?>
        <div class="col-12">
          <div class="alert alert-info">Belum ada berita.</div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
      <?= $pagination ?? '' ?>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h3 class="mb-4"><i class="fas fa-address-book"></i> Kontak</h3>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm h-100 text-center p-3">
            <i class="fas fa-map-marker-alt fa-2x text-success mb-3"></i>
            <h6 class="fw-bold">Alamat</h6>
            <p><?= htmlspecialchars($contact['alamat'] ?? '-') ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm h-100 text-center p-3">
            <i class="fas fa-phone fa-2x text-success mb-3"></i>
            <h6 class="fw-bold">Telepon</h6>
            <p><?= htmlspecialchars($contact['telepon'] ?? '-') ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm h-100 text-center p-3">
            <i class="fas fa-envelope fa-2x text-success mb-3"></i>
            <h6 class="fw-bold">Email</h6>
            <p><?= htmlspecialchars($contact['email'] ?? '-') ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4 bg-dark text-light">
    &copy; <?= date('Y') ?> SMART Tani. All rights reserved.
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>