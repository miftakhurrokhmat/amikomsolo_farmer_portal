<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $news_detail['title']; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
   
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

  <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8 sm:py-12 space-y-6 sm:space-y-8">
  <!-- Card Header (Judul + Info) -->
  <div class="bg-white border rounded-2xl p-6 sm:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <div class="flex-1">
      <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-2">
        <?= $news_detail['title']; ?>
      </h1>
      <p class="text-xs sm:text-sm text-gray-500">
        Dipublikasikan pada 
        <span class="font-medium text-green-600">
          <?= date('d M Y', strtotime($news_detail['created_at'])); ?>
        </span>
      </p>
    </div>

    <!-- Badge News -->
    <div
      class="inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium
             bg-green-50 text-green-700 border border-green-200 shadow-sm whitespace-nowrap
             hover:bg-green-100 hover:shadow-md transition-all duration-300"
    >
      <!-- Icon Koran -->
      <svg xmlns="http://www.w3.org/2000/svg" 
           class="w-4 h-4 text-green-600" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" 
              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l6 6v8a2 2 0 01-2 2z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M13 8h1m-4 4h5m-5 4h5" />
      </svg>
      News #<?= $news_detail['id']; ?>
    </div>
  </div>

  <!-- Card Konten -->
  <div class="bg-white border rounded-2xl p-6 sm:p-8">
    <div class="prose prose-base sm:prose-lg max-w-none text-gray-700 leading-relaxed mb-6">
      <?= $news_detail['content']; ?>
    </div>
    <!-- Tombol back -->
    <div>
      <a href="<?= site_url('home'); ?>"
        class="inline-flex items-center gap-2 px-4 sm:px-5 py-2 rounded-full 
               bg-green-600 text-white text-sm sm:text-base font-medium shadow-md 
               hover:bg-green-700 hover:shadow-lg hover:scale-105 
               transition-all duration-300">
        ← Kembali ke Daftar Berita
      </a>
    </div>
  </div>
</div>

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
