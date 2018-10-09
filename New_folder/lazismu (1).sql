-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Okt 2018 pada 15.57
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazismu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusis`
--

CREATE TABLE `distribusis` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `tujuan_id` int(11) NOT NULL,
  `farm_id` int(11) DEFAULT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berat_permintaan` int(11) DEFAULT NULL,
  `biaya_pengiriman` int(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `distribusis`
--

INSERT INTO `distribusis` (`id`, `admin_id`, `tujuan_id`, `farm_id`, `jenis_hewan`, `berat_permintaan`, `biaya_pengiriman`) VALUES
(20, 23, 9, 3, 'kambing', 3, 6250),
(22, 23, 6, 3, 'kambing', 6, 6250),
(25, 23, 7, 3, 'kambing', 3, 10750),
(26, 23, 2, 3, 'kambing', 4, 9875),
(29, 23, 3, 3, 'kambing', 5, 9625),
(30, 23, 5, 3, 'kambing', 4, 10000),
(32, 23, 2, 4, 'kambing', 4, 10625),
(33, 23, 3, 4, 'kambing', 5, 11146),
(34, 23, 5, 4, 'kambing', 4, 10250),
(35, 23, 7, 4, 'kambing', 3, 10250),
(36, 24, 9, 4, 'kambing', 3, 6250),
(37, 24, 6, 4, 'kambing', 6, 6250),
(38, 23, 2, 3, 'sapi', 5, 25000),
(39, 23, 2, 4, 'sapi', 5, 20000),
(40, 23, 3, 3, 'sapi', 6, 25000),
(41, 24, 3, 4, 'sapi', 6, 45000),
(42, 24, 5, 3, 'sapi', 5, 7000),
(43, 24, 5, 4, 'sapi', 5, 6250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `farms`
--

CREATE TABLE `farms` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jumlah_kambing` int(11) DEFAULT NULL,
  `jumlah_sapi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `farms`
--

INSERT INTO `farms` (`id`, `nama`, `alamat`, `jumlah_kambing`, `jumlah_sapi`) VALUES
(3, 'amm glagah', 'glagah sari', 13, 10),
(4, 'amm kota gede', 'kota gede', 12, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil__distribusis`
--

CREATE TABLE `hasil__distribusis` (
  `id` int(10) UNSIGNED NOT NULL,
  `distribusi_id` int(10) UNSIGNED NOT NULL,
  `berat_pengiriman` int(11) DEFAULT NULL,
  `total_biayaOperasional` int(11) DEFAULT NULL,
  `Tahun` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_08_080609_create_distribusis_table', 1),
(4, '2018_05_09_092835_create_hasil__distribusis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuans`
--

CREATE TABLE `tujuans` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tujuans`
--

INSERT INTO `tujuans` (`id`, `alamat`) VALUES
(2, 'Nurul Mustaqim'),
(3, 'Darussalam'),
(5, 'Nurul Iman'),
(6, 'Panti Asuhan Mafaza'),
(7, 'Al-hikmah'),
(9, 'Tuna Netra PH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `jabatan`) VALUES
(1, 'dzaky', 'd@gmail.com', '$2y$10$S0.iVQdc3suMF8F5dRuN6.6xvvGKyrNojtIUb4e55noROiHyYXypG', NULL, '2018-05-12 11:11:03', '2018-05-12 11:11:03', ''),
(2, 'linda', 'lindadwilestari95@gmail.com', '$2y$10$Q1RyWeNuZKdJPKVFoErYMuBYcsfdTlkoog.EsFlmbbSQa5/zzm4du', NULL, '2018-05-13 05:59:13', '2018-05-13 05:59:13', ''),
(3, 'Garfield Yost', 'ymurazik@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'lwiGVWlbql', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(4, 'Helga Kuhlman', 'wnader@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'G4hxuPoiZt', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(5, 'Floy Trantow', 'isaac.stiedemann@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'VsQTTIMl44', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(6, 'Geovanni Larkin II', 'fausto77@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'h28qvLL4Pd', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(7, 'Magali Grimes', 'kuhic.frederick@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'YGl4z1Kkyf', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(8, 'Hailey Boyer', 'akutch@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'ImW3RoXMHP', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(9, 'Daren Spencer', 'qlarson@example.com', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'GY3AU1glKC', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(10, 'Ben Price', 'elangworth@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'gqm9E4EjHs', '2018-05-13 07:26:27', '2018-05-13 07:26:27', ''),
(11, 'Prof. Junior Zulauf IV', 'arnoldo.murazik@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'TEahGD0a7f', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(12, 'Taryn Buckridge IV', 'lkiehn@example.com', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'k7uBW6KZ43', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(13, 'Emilia Senger', 'lucile.kautzer@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'S43Nbb9c3G', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(14, 'Alejandrin Bartoletti', 'adams.annamae@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'Sqhn2DBcUw', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(15, 'Krista Blick', 'kenyatta04@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'hmoh1aTC2W', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(16, 'Jarrell Homenick', 'alysha44@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'n6YDTEEAZu', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(17, 'Meta Hoeger IV', 'mkilback@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', '8DitkI3SBd', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(18, 'Dale Boehm', 'makenna79@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'MU19AXgscd', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(19, 'Leora McDermott', 'jwolff@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'eN4DUXOHFq', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(20, 'Marcellus Vandervort', 'emerald15@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'BWQOJx1bNs', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(21, 'Manuel Johns IV', 'qlarson@example.org', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', '9JtECSiDvH', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(22, 'Ardith Schimmel', 'jnitzsche@example.net', '$2y$10$xGBY4CHaYfcOiRZk5/VxQepioiqsaGDXuCI01pzLyVCuwxBaO739W', 'SJnyfwbw5v', '2018-05-13 07:26:28', '2018-05-13 07:26:28', ''),
(23, 'linda', 'lindadwilestari@ymail.com', '$2y$10$5gl23CgZBrV9zWgkSocc..n7WGRAbJF5DOYilAUBziwgrWhubeOsi', 'vWssDSH78krzGTm9Qe0RYt4ecwhXSNHu8pLjBlfGkVRTmufztNalvJtPFolo', '2018-05-14 06:19:22', '2018-08-09 08:59:35', ''),
(24, 'desy', 'desy@gmail.com', '$2y$10$cQpVkCql.Z0ZgpGcqNUb6Of861Co04pj/7n7cBoJV1MkUd6w/fi/m', 'pMtbZqApz2rQuHNnAWelJwmDVebE90En6STtRAkX8uh2bl0wnsLcipZc49Ir', '2018-08-03 07:47:23', '2018-09-24 01:19:12', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribusis`
--
ALTER TABLE `distribusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distribusis_admin_id_foreign` (`admin_id`),
  ADD KEY `tujuan_id` (`tujuan_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil__distribusis`
--
ALTER TABLE `hasil__distribusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil__distribusis_distribusi_id_foreign` (`distribusi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribusis`
--
ALTER TABLE `distribusis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hasil__distribusis`
--
ALTER TABLE `hasil__distribusis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  ADD CONSTRAINT `distribusis_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distribusis_ibfk_1` FOREIGN KEY (`tujuan_id`) REFERENCES `tujuans` (`id`),
  ADD CONSTRAINT `distribusis_ibfk_2` FOREIGN KEY (`farm_id`) REFERENCES `farms` (`id`);

--
-- Ketidakleluasaan untuk tabel `hasil__distribusis`
--
ALTER TABLE `hasil__distribusis`
  ADD CONSTRAINT `hasil__distribusis_distribusi_id_foreign` FOREIGN KEY (`distribusi_id`) REFERENCES `distribusis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
