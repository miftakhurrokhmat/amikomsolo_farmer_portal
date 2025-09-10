-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2025 at 03:09 AM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `created_at`) VALUES
(4, 'Serangan Hawar Daun Bakteri Ancam Produksi Padi, Potensi Gagal Panen hingga 70%', 'Hawar Daun Bakteri (HDB), atau dikenal petani dengan nama kresek, semakin menjadi momok bagi produksi padi di berbagai daerah. Penyakit yang disebabkan bakteri Xanthomonas oryzae pv. oryzae ini dapat menyerang sejak fase bibit hingga menjelang panen. Serangan dini membuat tanaman muda layu dan mati, sedangkan infeksi pada fase generatif mengakibatkan gabah hampa.<br/><br/>\r\n\r\nPara ahli mengingatkan bahwa HDB tidak hanya menurunkan hasil, tetapi juga mengganggu kualitas bulir padi. Penelitian menyebutkan, kehilangan hasil akibat HDB bisa mencapai 30–50 persen, bahkan hingga 70–80 persen bila serangan terjadi pada musim hujan dengan curah hujan tinggi. Kondisi kelembaban berlebih dan pemupukan nitrogen berlebihan menjadi pemicu utama berkembangnya penyakit ini.<br/><br/>\r\n\r\nKasus serangan HDB dilaporkan meningkat di beberapa provinsi penghasil padi, terutama ketika petani menggunakan varietas rentan tanpa perlindungan yang memadai. Bakteri penyebab penyakit ini dapat bertahan melalui benih maupun percikan air hujan, sehingga penyebarannya sangat cepat di lapangan.<br/><br/>\r\n\r\nUpaya pencegahan sebenarnya telah banyak direkomendasikan. Petani dianjurkan menggunakan varietas tahan seperti Inpari 6 atau Ciliwung, mengatur jarak tanam dengan pola jajar legowo, serta melakukan pengairan berselang untuk mengurangi kelembaban. Selain itu, pemupukan berimbang dengan menambahkan kalium penting dilakukan agar dinding sel tanaman lebih kuat menghadapi serangan patogen.<br/><br/>\r\n\r\nJika serangan sudah meluas, petani disarankan menggunakan bakterisida sesuai rekomendasi, meski langkah ini hanya sebagai pilihan terakhir. Pakar pertanian menekankan bahwa strategi terbaik adalah pengendalian terpadu—mengombinasikan varietas tahan, sanitasi lahan, pemupukan berimbang, dan agen hayati—agar risiko gagal panen bisa ditekan seminimal mungkin.', '2025-09-10 03:03:29'),
(5, 'Penyakit Blas Kian Meluas, Petani Diimbau Gunakan Varietas Tahan dan Tanam Serempak', 'Penyakit blas akibat jamur Pyricularia oryzae semakin meluas di sejumlah daerah, terutama pada musim hujan. Penyakit ini dikenal sangat merugikan karena dapat menyerang hampir seluruh bagian tanaman padi, termasuk daun, batang, dan leher malai. Serangan pada leher malai sangat berbahaya karena menyebabkan bulir gabah tidak terisi sehingga hasil panen berkurang drastis.<br/><br/>\r\n\r\nStudi di Sukabumi, Jawa Barat, menunjukkan bahwa serangan blas daun bisa mencapai intensitas 55 persen, sementara blas leher sekitar 37 persen. Kondisi tersebut berpotensi menurunkan hasil panen hingga 61 persen pada varietas rentan seperti Ciherang. Pada kondisi ekstrem, serangan blas bisa menyebabkan puso atau gagal panen total.<br/><br/>\r\n\r\nPara pakar menjelaskan bahwa kelembaban tinggi, suhu malam yang sejuk, serta adanya embun tebal merupakan kondisi ideal bagi perkembangan penyakit blas. Selain itu, penggunaan pupuk nitrogen berlebihan dan jarak tanam rapat juga memperparah risiko serangan. Tidak heran, penyakit ini sering muncul pada lahan intensif dengan pengelolaan kurang seimbang.<br/><br/>\r\n\r\nSolusi utama untuk menekan serangan blas adalah penggunaan varietas tahan yang ditanam secara bergiliran agar ketahanan tidak cepat patah. Petani juga dianjurkan melakukan penanaman serempak untuk memutus siklus hidup patogen. Pengaturan waktu tanam agar tidak bertepatan dengan puncak musim hujan dinilai sangat membantu mengurangi risiko.<br/><br/>\r\n\r\nSelain itu, pengendalian dengan fungisida seperti trisiklazol atau campuran difekonazol-propikonazol dapat dilakukan di daerah endemik. Namun, penggunaan fungisida harus bijak agar tidak menimbulkan resistensi. Pendekatan terpadu dengan mengombinasikan varietas tahan, sanitasi lahan, pemupukan berimbang, dan agen hayati diyakini sebagai langkah paling berkelanjutan.', '2025-09-10 03:05:46'),
(6, 'Bercak Coklat Jadi Indikator Kesuburan Tanah, Kehilangan Hasil Bisa Tembus 90%', 'Penyakit bercak coklat pada padi, yang disebabkan jamur Bipolaris oryzae, kini dipandang bukan sekadar ancaman hasil, melainkan juga indikator kesehatan tanah. Gejalanya berupa bercak oval berwarna coklat gelap pada daun hingga bulir gabah, yang dapat menyatu dan menyebabkan daun mengering seperti terbakar. Pada gabah, infeksi ini menurunkan kualitas dan harga jual secara signifikan.<br/><br/>\r\n\r\nDalam kasus berat, terutama di lahan dengan nutrisi rendah, bercak coklat dapat menyebabkan kehilangan hasil hingga 45 persen. Beberapa laporan bahkan menyebutkan potensi kerugian mencapai 90 persen bila tanaman ditanam di tanah miskin hara tanpa pengelolaan yang baik. Penyakit ini dikenal sebagai “penyakit tanaman lapar” karena erat kaitannya dengan kondisi fisiologis tanaman yang lemah akibat kekurangan nutrisi.<br/><br/>\r\n\r\nPeneliti menjelaskan bahwa kekurangan unsur kalium, silika, dan mangan membuat tanaman lebih rentan terserang bercak coklat. Stres air akibat kekeringan juga memperparah kondisi, sehingga tanaman semakin tidak mampu melawan infeksi jamur. Benih terinfeksi dan sisa jerami sakit menjadi sumber inokulum utama yang mempercepat penyebaran penyakit ini.<br/><br/>\r\n\r\nUpaya pengendalian difokuskan pada perbaikan kesuburan tanah melalui pemupukan berimbang, penambahan bahan organik, serta penggunaan varietas tahan. Sanitasi lahan dengan membenamkan atau membakar jerami sakit juga penting untuk mengurangi sumber penyakit.<br/><br/>\r\n\r\nSelain itu, pemanfaatan agen hayati seperti Bacillus atau Pseudomonas fluorescens semakin banyak direkomendasikan. Jika serangan sudah parah, fungisida dapat digunakan sebagai solusi terakhir. Dengan pendekatan terpadu, bercak coklat dapat ditekan sekaligus memperbaiki kesehatan tanah dan daya tahan tanaman jangka panjang.', '2025-09-10 03:06:39'),
(7, 'Hawar Pelepah Ditetapkan sebagai Penyakit Padi Paling Merusak Kedua di Dunia', 'Hawar pelepah akibat jamur Rhizoctonia solani kini menempati posisi sebagai penyakit padi paling merusak kedua setelah blas. Penyakit ini berkembang pada pelepah bawah dekat permukaan air lalu menyebar ke atas, membuat daun kering dan tanaman mudah rebah. Infeksi berat juga mengganggu pengisian gabah sehingga hasil panen menurun drastis.<br/><br/>\r\n\r\nLaporan penelitian menyebutkan, rata-rata kerugian akibat hawar pelepah mencapai 6 persen di Asia, namun pada kasus parah bisa mencapai 70 persen atau bahkan gagal panen. Di Indonesia, intensitas serangan dilaporkan meningkat di lahan intensif dengan varietas unggul pendek dan anakan banyak, yang menciptakan kanopi rapat dan lembab—kondisi ideal bagi patogen.\r\n\r\nFaktor pemicu utama penyakit ini adalah kelembaban tinggi, suhu hangat, dan pemupukan nitrogen berlebihan. Penanaman dengan jarak rapat semakin memperburuk iklim mikro di sawah. Kondisi inilah yang membuat hawar pelepah disebut sebagai “penyakit buatan manusia” karena diperparah oleh intensifikasi pertanian modern.<br/><br/>\r\n\r\nSolusi pengendalian yang dianjurkan meliputi penggunaan pola tanam jajar legowo, pengelolaan air berselang, serta pemupukan berimbang. Setelah panen, sisa jerami sebaiknya dibenamkan ke tanah untuk mengurangi sklerotia jamur yang menjadi sumber penyakit di musim berikutnya.<br/><br/>\r\n\r\nSelain itu, agen hayati seperti Trichoderma dan Bacillus subtilis terbukti efektif menekan perkembangan penyakit sekaligus merangsang pertumbuhan tanaman. Penyemprotan fungisida bisa dilakukan bila serangan sudah meluas, namun pakar pertanian mengingatkan bahwa pendekatan proaktif melalui manajemen budidaya jauh lebih berkelanjutan.<br/><br/>', '2025-09-10 03:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'about', 'Smart Tani adalah sebuah platform inovatif yang dirancang untuk mendukung para petani melalui pemanfaatan teknologi modern. Platform ini menyediakan akses terhadap berita terkini seputar pertanian serta menghadirkan solusi praktis dari para pakar. Dengan dukungan kecerdasan buatan (AI), Smart Tani mampu membantu petani dalam mengidentifikasi berbagai masalah pertanian dan menawarkan solusi yang tepat.'),
(2, 'contact', '{\"alamat\":\"Jl. Veteran, Dusun I, Singopuran, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57163\",\"telepon\":\"085848934922\",\"email\":\"amikomsolo@amikomsolo.ac.id\"}'),
(3, 'demo', 'https://aitani.kampusriset.org');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Administrator', 'admin@example.com', '0192023a7bbd73250516f069df18b500'),
(2, 'User Demo', 'user@example.com', '6ad14ba9986e3615423dfca256d04e3f'),
(3, 'Miftakhurrokhmat', 'miftakhurrokhmat@alumni.uii.ac.id', '2a0c22d3d3f2a236d4c79a37333771d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
