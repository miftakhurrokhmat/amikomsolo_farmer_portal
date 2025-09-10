<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMART Tani</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css"
  />
</head>
<body class="font-sans text-gray-800">

  <!-- Navbar -->
<nav class="bg-[#2E7D32] shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
    <!-- Logo -->
    <a
      href="#"
      class="text-2xl font-extrabold text-white flex items-center gap-2 hover:text-green-300 transition"
    >
      🌾 <span>SMART Tani</span>
    </a>
    <!-- Nav Menu -->
    <div class="flex items-center gap-6">
      <a href="#home" class="text-white font-semibold hover:text-green-300 transition">Home</a>
      <a href="#news" class="text-white font-semibold hover:text-green-300 transition">News</a>
      <a href="#contact" class="text-white font-semibold hover:text-green-300 transition">Contact</a>
    </div>
    <!-- Nav Actions -->
    <div class="flex items-center gap-4">
      <a
        href="<?= site_url('login') ?>"
        class="inline-flex items-center gap-2 px-6 py-2 rounded-lg font-semibold 
               border border-green-600 text-green-600 bg-white 
               hover:bg-green-600 hover:text-white 
               transition-all duration-300 shadow-sm hover:shadow-md hover:scale-105"
      >
        <!-- Icon Login -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m12 0l-3-3m3 3l-3 3m6-9V6a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2v-3"/>
        </svg>
        Login
      </a>
    </div>
  </div>
</nav>

  <!-- Hero -->
<section id="home" class="relative bg-[#E8F5E9] py-24">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <!-- Left Content -->
    <div>
      <span class="inline-block px-4 py-1.5 mb-4 text-sm font-medium text-green-700 bg-green-100 rounded-full shadow-sm">
        🌱 Inovasi Pertanian
      </span>
      <h1 class="text-4xl md:text-6xl font-extrabold text-green-900 leading-tight mb-6">
        Solusi Digital <br class="hidden md:block" /> untuk Petani Modern
      </h1>
      <p class="text-lg text-gray-600 mb-8 max-w-lg">
        <?= !empty($about) ? $about : 'Platform untuk membantu petani memasarkan dan mengelola usaha dengan lebih mudah dan efisien.'; ?>
      </p>

      <?php if (!empty($demo)): ?>
      <a
        href="<?= $demo ?>"
        target="_blank"
        class="inline-flex items-center gap-3 px-7 py-3.5 bg-green-600 text-white text-lg font-semibold rounded-full shadow-md hover:scale-105 hover:bg-green-700 hover:shadow-lg transition-all duration-300"
      >
        <i class="fas fa-play-circle text-xl"></i>
        Ujicoba Aplikasi
      </a>
      <?php endif; ?>
    </div>
    <!-- Right Video -->
    <div class="relative group rounded-2xl overflow-hidden shadow-2xl border border-green-100 aspect-video">
      <iframe
        class="absolute top-0 left-0 w-full h-full"
        src="https://www.youtube.com/embed/QByTvkwU-U0"
        allowfullscreen
      ></iframe>
      <!-- Overlay gradient -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent group-hover:from-black/20 transition"></div>
    </div>
  </div>
</section>

<!-- News Section -->
<section id="news" class="relative bg-[#E8F5E9] py-20">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center mb-14">
      <h2 class="text-4xl md:text-5xl font-extrabold text-green-900 mb-4">
        <i class="fas fa-newspaper mr-3 text-green-600"></i> Berita Terkini
      </h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">
        Update informasi terbaru seputar dunia pertanian untuk kamu 🌱
      </p>
    </div>
<!-- News Grid -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
  <?php if (!empty($news)): foreach ($news as $n): ?>
  <div
    class="bg-white border-2 border-[#2E7D32] rounded-3xl shadow-lg overflow-hidden 
           hover:shadow-2xl transition-transform duration-300 hover:-translate-y-2 flex flex-col"
  >
    <?php if (!empty($n->thumbnail)): ?>
    <div class="h-56 overflow-hidden">
      <img
        src="<?= base_url('uploads/news/' . htmlspecialchars($n->thumbnail)) ?>"
        alt="<?= htmlspecialchars($n->title) ?>"
        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
        loading="lazy"
      />
    </div>
    <?php endif; ?>
    <div class="p-7 flex flex-col flex-grow">
      <h5 class="font-bold text-xl text-[#2E7D32] mb-3 line-clamp-2">
        <?= htmlspecialchars($n->title) ?>
      </h5>
      <small class="text-green-700 mb-4 flex items-center gap-2 text-sm">
        <i class="far fa-clock"></i>
        <?= date('d M Y H:i', strtotime($n->created_at)) ?>
      </small>
      <p class="text-gray-700 flex-grow leading-relaxed line-clamp-3">
        <?php
          $trimmed = mb_substr($n->content, 0, 120, 'UTF-8');
          if (mb_strlen($n->content, 'UTF-8') > 120) {
            $lastSpace = mb_strrpos($trimmed, ' ', 0, 'UTF-8');
            $trimmed = mb_substr($trimmed, 0, $lastSpace, 'UTF-8') . '...';
          }
          echo nl2br(htmlspecialchars($trimmed));
        ?>
      </p>
      <a
        href="<?= site_url('home/news_detail/' . $n->id) ?>"
        class="mt-6 inline-flex items-center justify-center gap-2 px-6 py-2.5 border-2 border-[#2E7D32] 
               text-[#2E7D32] font-semibold rounded-full hover:bg-[#2E7D32] hover:text-white transition-all duration-300"
      >
        Baca Selengkapnya <i class="fas fa-arrow-right text-sm"></i>
      </a>
    </div>
  </div>
  <?php endforeach; else: ?>
  <div class="col-span-3 text-center text-gray-500">
    <i class="fas fa-info-circle mr-2"></i> Belum ada berita.
  </div>
  <?php endif; ?>
</div>
<!-- Pagination -->
<div class="mt-14 flex justify-center">
  <nav class="flex items-center gap-2 text-green-700">
    <?= $pagination ?? '' ?>
  </nav>
</div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="relative bg-[#E8F5E9] py-20 ">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">
    <!-- Left Info -->
    <div>
      <h3 class="text-4xl font-extrabold text-green-900 mb-6">
        🌱 Hubungi <span class="text-green-700">SMART Tani</span>
      </h3>
      <p class="text-gray-600 text-lg leading-relaxed mb-10">
        Kami selalu siap mendengar pertanyaan, saran, atau kerjasama darimu.  
        Jangan ragu untuk menghubungi kami melalui detail berikut:
      </p>
      <ul class="space-y-6">
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p class="text-gray-700">
            <?= htmlspecialchars($contact['alamat'] ?? '-') ?>
          </p>
        </li>
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600">
            <i class="fas fa-phone"></i>
          </div>
          <p class="text-gray-700 mt-2">
            <?= htmlspecialchars($contact['telepon'] ?? '-') ?>
          </p>
        </li>
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600">
            <i class="fas fa-envelope"></i>
          </div>
          <p class="text-gray-700 mt-2">
            <?= htmlspecialchars($contact['email'] ?? '-') ?>
          </p>
        </li>
      </ul>
    </div>
    <!-- Right Form -->
    <div class="bg-white/70 backdrop-blur-md rounded-3xl shadow-lg p-10">
      <h4 class="text-2xl font-semibold text-green-800 mb-6">Kirim Pesan</h4>
      <form action="#" method="post" class="space-y-5">
        <input type="text" placeholder="Nama" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none" />
        <input type="email" placeholder="Email" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none" />
        <textarea placeholder="Pesanmu..." rows="4" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none"></textarea>
        <button type="submit" class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
          Kirim Pesan
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-green-700 text-white text-center py-6 border-t border-green-200">
  &copy; <?= date('Y') ?> SMART Tani. All rights reserved.
</footer>
</body>
</html>
