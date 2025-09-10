-- --------------------------------------------------------
-- Admin Panel Pertanian - Database Schema
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS db_farmer CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE db_farmer;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Administrator', 'admin@example.com', MD5('admin123'));

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NOT NULL,
  `content` TEXT NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `news` (`title`, `content`) VALUES
('Selamat Datang di Portal Pertanian', 'Ini adalah berita pertama di admin panel.'),
('Panen Raya 2025', 'Petani melaporkan hasil panen meningkat 20% dibanding tahun lalu.');

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `key` VARCHAR(50) NOT NULL UNIQUE,
  `value` TEXT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `settings` (`key`, `value`) VALUES
('about', 'Kami adalah platform untuk membantu petani memasarkan produk mereka.'),
('contact', '{"alamat":"Jl. Pertanian No.1","telepon":"08123456789","email":"info@pertanian.com"}'),
('demo', 'https://demo.pertanian.com');
