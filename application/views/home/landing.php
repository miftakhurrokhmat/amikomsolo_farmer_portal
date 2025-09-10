<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMART Tani</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css"
  />
</head>
<body class="font-sans text-gray-800">

 <!-- Navbar -->
<nav class="bg-[#2E7D32] shadow-md sticky top-0 z-50" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
    <!-- Logo -->
    <a
      href="#"
      class="text-2xl font-extrabold text-white flex items-center gap-2 hover:text-green-300 transition"
    >
      🌾 <span>SMART Tani</span>
    </a>

    <!-- Hamburger Button (mobile only) -->
    <button 
      @click="open = !open"
      class="md:hidden text-white hover:text-green-300 focus:outline-none"
    >
      <svg xmlns="http://www.w3.org/2000/svg" 
           class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path :class="{ 'hidden': open, 'block': !open }" class="block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
        <path :class="{ 'block': open, 'hidden': !open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Nav Menu (desktop) -->
    <div class="hidden md:flex items-center gap-6">
      <a href="#home" class="text-white font-semibold hover:text-green-300 transition">Home</a>
      <a href="#news" class="text-white font-semibold hover:text-green-300 transition">News</a>
      <a href="#contact" class="text-white font-semibold hover:text-green-300 transition">Contact</a>
    </div>

    <!-- Nav Actions (desktop) -->
    <div class="hidden md:flex items-center gap-4">
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
          <path stroke-linecap="round" stroke-linejoin="round" 
                d="M15 12H3m12 0l-3-3m3 3l-3 3m6-9V6a2 2 0 012-2h2a2 2 0 
                   012 2v12a2 2 0 01-2 2h-2a2 2 0 
                   01-2-2v-3"/>
        </svg>
        Login
      </a>
    </div>
  </div>

  <!-- Mobile Menu (dropdown) -->
  <div x-show="open" class="md:hidden bg-[#2E7D32] px-6 py-4 space-y-4">
    <a href="#home" class="block text-white font-semibold hover:text-green-300 transition">Home</a>
    <a href="#news" class="block text-white font-semibold hover:text-green-300 transition">News</a>
    <a href="#contact" class="block text-white font-semibold hover:text-green-300 transition">Contact</a>
    <a
      href="<?= site_url('login') ?>"
      class="block w-full text-center px-6 py-2 rounded-lg font-semibold 
             border border-green-600 text-green-600 bg-white 
             hover:bg-green-600 hover:text-white 
             transition-all duration-300 shadow-sm hover:shadow-md hover:scale-105"
    >
      Login
    </a>
  </div>
</nav>

<!-- Hero -->
<section id="home" class="relative bg-[#E8F5E9] py-16 md:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-12 items-center">
    <!-- Left Content -->
    <div class="text-center md:text-left">
      <span class="inline-block px-4 py-1.5 mb-4 text-sm font-medium text-green-700 bg-green-100 rounded-full shadow-sm">
        🌱 Inovasi Pertanian
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-green-900 leading-tight mb-6">
        Solusi Digital 
        <br class="hidden md:block" /> 
        untuk Petani Modern
      </h1>
      <p class="text-base sm:text-lg text-gray-600 mb-8 max-w-xl mx-auto md:mx-0">
        <?= !empty($about) ? $about : 'Platform untuk membantu petani memasarkan dan mengelola usaha dengan lebih mudah dan efisien.'; ?>
      </p>
      <?php if (!empty($demo)): ?>
      <a
        href="<?= $demo ?>"
        target="_blank"
        class="inline-flex items-center gap-2 px-6 py-3 bg-green-600 text-white text-base sm:text-lg font-semibold rounded-full shadow-md hover:scale-105 hover:bg-green-700 hover:shadow-lg transition-all duration-300"
      >
        <i class="fas fa-play-circle text-lg sm:text-xl"></i>
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
<section id="news" class="relative bg-[#E8F5E9] py-12 sm:py-16 md:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <!-- Section Header -->
    <div class="text-center mb-10 sm:mb-14">
      <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-green-900 mb-3 sm:mb-4">
        <i class="fas fa-newspaper mr-2 sm:mr-3 text-green-600"></i> Berita Terkini
      </h2>
      <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
        Update informasi terbaru seputar dunia pertanian untuk kamu 🌱
      </p>
    </div>
    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-10">
      <?php if (!empty($news)): foreach ($news as $n): ?>
      <div
        class="bg-white border-2 border-[#2E7D32] rounded-2xl sm:rounded-3xl shadow-lg overflow-hidden 
               hover:shadow-2xl transition-transform duration-300 hover:-translate-y-2 flex flex-col"
      >
        <?php if (!empty($n->thumbnail)): ?>
        <div class="h-40 sm:h-52 md:h-56 overflow-hidden">
          <img
            src="<?= base_url('uploads/news/' . htmlspecialchars($n->thumbnail)) ?>"
            alt="<?= htmlspecialchars($n->title) ?>"
            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
            loading="lazy"
          />
        </div>
        <?php endif; ?>
        <div class="p-5 sm:p-7 flex flex-col flex-grow">
          <h5 class="font-bold text-lg sm:text-xl text-[#2E7D32] mb-2 sm:mb-3 line-clamp-2">
            <?= htmlspecialchars($n->title) ?>
          </h5>
          <small class="text-green-700 mb-3 sm:mb-4 flex items-center gap-1.5 text-xs sm:text-sm">
            <i class="far fa-clock"></i>
            <?= date('d M Y H:i', strtotime($n->created_at)) ?>
          </small>
          <p class="text-gray-700 flex-grow leading-relaxed text-sm sm:text-base line-clamp-3">
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
            class="mt-5 sm:mt-6 inline-flex items-center justify-center gap-2 px-4 sm:px-6 py-2 sm:py-2.5 border-2 border-[#2E7D32] 
                   text-[#2E7D32] text-sm sm:text-base font-semibold rounded-full 
                   hover:bg-[#2E7D32] hover:text-white transition-all duration-300"
          >
            Baca Selengkapnya <i class="fas fa-arrow-right text-xs sm:text-sm"></i>
          </a>
        </div>
      </div>
      <?php endforeach; else: ?>
      <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-500 text-sm sm:text-base">
        <i class="fas fa-info-circle mr-1 sm:mr-2"></i> Belum ada berita.
      </div>
      <?php endif; ?>
    </div>
    <!-- Pagination -->
    <div class="mt-10 sm:mt-14 flex justify-center">
      <nav class="flex items-center gap-2 text-green-700 text-sm sm:text-base">
        <?= $pagination ?? '' ?>
      </nav>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="relative bg-[#E8F5E9] py-16 sm:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14 items-center">
    <!-- Left Info -->
    <div>
      <h3 class="text-3xl sm:text-4xl font-extrabold text-green-900 mb-6 text-center md:text-left">
        🌱 Hubungi <span class="text-green-700">SMART Tani</span>
      </h3>
      <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-10 text-center md:text-left">
        Kami selalu siap mendengar pertanyaan, saran, atau kerjasama darimu.  
        Jangan ragu untuk menghubungi kami melalui detail berikut:
      </p>
      <ul class="space-y-6">
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600 shrink-0">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <p class="text-gray-700 text-sm sm:text-base">
            <?= htmlspecialchars($contact['alamat'] ?? '-') ?>
          </p>
        </li>
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600 shrink-0">
            <i class="fas fa-phone"></i>
          </div>
          <p class="text-gray-700 text-sm sm:text-base mt-2">
            <?= htmlspecialchars($contact['telepon'] ?? '-') ?>
          </p>
        </li>
        <li class="flex items-start gap-4">
          <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600 shrink-0">
            <i class="fas fa-envelope"></i>
          </div>
          <p class="text-gray-700 text-sm sm:text-base mt-2">
            <?= htmlspecialchars($contact['email'] ?? '-') ?>
          </p>
        </li>
      </ul>
    </div>
    <!-- Right Form -->
    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-10">
      <h4 class="text-xl sm:text-2xl font-semibold text-green-800 mb-6 text-center md:text-left">
        Kirim Pesan
      </h4>
      <form action="#" method="post" class="space-y-5">
        <input type="text" placeholder="Nama" 
          class="w-full px-4 sm:px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none text-sm sm:text-base" />
        <input type="email" placeholder="Email" 
          class="w-full px-4 sm:px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none text-sm sm:text-base" />
        <textarea placeholder="Pesanmu..." rows="4" 
          class="w-full px-4 sm:px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 outline-none text-sm sm:text-base"></textarea>
        <button type="submit" 
          class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
          Kirim Pesan
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-green-700 text-white border-t border-green-200 py-4 sm:py-6">
  <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-sm sm:text-base">
    <!-- Copyright -->
    <p class="text-center sm:text-left">
      &copy; <?= date('Y') ?> <span class="font-semibold">SMART Tani</span>. All rights reserved.
    </p>
    <!-- (Optional) Extra Links -->
    <div class="flex gap-4 text-center sm:text-right">
      <a href="#" class="hover:underline">Privacy Policy</a>
      <a href="#" class="hover:underline">Terms of Service</a>
    </div>
  </div>
</footer>

</body>
</html>
