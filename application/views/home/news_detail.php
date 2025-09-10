<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $news_detail['title']; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
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
  <div class="max-w-4xl mx-auto px-6 py-12 space-y-8">
    
    <!-- Card Header (Judul + Info) -->
    <div class="bg-white border rounded-2xl p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-2">
          <?= $news_detail['title']; ?>
        </h1>
        <p class="text-sm text-gray-500">
          Dipublikasikan pada 
          <span class="font-medium text-green-600">
            <?= date('d M Y', strtotime($news_detail['created_at'])); ?>
          </span>
        </p>
      </div>
   <div
  class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium
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
    <div class="bg-white border rounded-2xl p-8">
      <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed mb-6">
        <?= $news_detail['content']; ?>
      </div>

      <!-- Tombol back -->
      <div>
        <a href="<?= site_url('home'); ?>"
          class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full 
                 bg-green-600 text-white font-medium shadow-md 
                 hover:bg-green-700 hover:shadow-lg hover:scale-105 
                 transition-all duration-300">
          ← Kembali ke Daftar Berita
        </a>
      </div>
    </div>
  </div>
</body>

</html>
