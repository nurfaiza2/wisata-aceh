-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2023 at 09:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint UNSIGNED NOT NULL,
  `dest_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `dest_name`, `dest_category`, `dest_location`, `dest_cover`, `dest_desc`, `created_at`, `updated_at`) VALUES
(2, 'Mesjid Raya Baiturrahman', 'Religi', 'Jl. Moh. Jam No.1, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh', '1703574143_1.jpg', 'Masjid Raya Baiturrahman dibangun pada 1022H/1612M di bawah kepemimpinan Sultan Iskandar Muda dari Kesultanan Aceh Darussalam. Sejak awal, Masjid Raya Baiturrahman tidak hanya diperuntukkan untuk kegiatan ibadah saja. Mengutip dari tirto.id, masjid ini menjadi pusat pendidikan ilmu agama Islam pada masa Kesultanan Aceh. Menurut Hasymy (dalam Abubakar 2020: 3), perguruan tinggi Masjid Raya Baiturrahman atau juga yang dikenal dengan nama Al-Jamiah Baitturahman memiliki 15 Fakultas. Para pengajarnya tidak hanya berasal dari kalangan ulama/sarjana dari Aceh saja, tetapi didatangkan juga dari Turki, Arab, Persia, India, dan beberapa negara lain.', '2023-12-26 00:02:23', '2023-12-26 00:02:23'),
(3, 'Pantai Lampuuk', 'Nature and Outdoor', 'Desa Meunasah Masjid, Kecamatan Lhoknga, Kabupaten Aceh Besar, Provinsi Aceh', '1703574352_Pantai-Lampuuk.jpg', 'Pantai Lampuuk terletak di Kecamatan Lhoknga, Aceh Besar. Kawasan wisata ini merupakan salah satu wisata alam yang terkenal di Aceh. Maka tak heran, pantai ini selalu ramai dikunjungi wisatawan, baik wisatawan lokal maupun mancanegara. Pengunjung tidak hanya datang di hari libur melainkan juga di hari kerja, mereka ingin menikmati pesona alam di pantai ini.', '2023-12-26 00:05:52', '2023-12-26 00:05:52'),
(4, 'Museum Tsunami', 'Museum', 'Jl. Sultan Iskandar Muda No.3, Sukaramai, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '1703574565_5a0a33c34a00a-museum-tsunami-aceh_1265_711.jpg', 'Museum ini berdiri pada tahun 2008 bulan Februari. Perancang Museum ini adalah Ridwan Kamil yang saat ini menjabat sebagai Gubernur Jawa Barat. Beliau membuat desain yang memenangkan sayembara tingkat internasional pada tahun 2007 dalam rangka memperingati peristiwa tsunami tahun 2004.', '2023-12-26 00:09:25', '2023-12-26 00:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `dest_photos`
--

CREATE TABLE `dest_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `destinasi_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventbarus`
--

CREATE TABLE `eventbarus` (
  `id` bigint UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_location`, `tanggal_mulai`, `tanggal_akhir`, `event_cover`, `event_desc`, `event_penyelenggara`, `created_at`, `updated_at`) VALUES
(2, 'Pacuan Kuda', 'Bener Meriah', '25 Desember 2023', '30 Desember 2023', '1703576806_serunya-pacuan-kuda-paku-alam-cup-ajang-balapan-kuda-se-nusantara.jpg', 'Pacuan kuda adalah salah satu jenis olahraga yang mengutamakan keterampilan seseorang dalam menunggang, mengendarai, berlari atau melompat menggunakan kuda. Berkuda atau sering juga disebut Equestrian bisa dilakukan tidak sekadar melatih kekuatan fisik seperti keseimbangan dan koordinasi tubuh saja, tapi olahraga horseback riding ini juga bisa berguna untuk terapi kesehatan mental.', 'Pemerintah Kabupaten Bener Meriah', '2023-12-26 00:46:46', '2023-12-26 00:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_19_134140_create_destinations_table', 1),
(6, '2023_02_20_095356_create_dest_photos_table', 1),
(7, '2023_03_10_221758_create_photodests_table', 1),
(8, '2023_03_19_055414_create_eventbarus_table', 1),
(9, '2023_03_19_055827_create_photoeventbarus_table', 1),
(10, '2023_03_21_011333_create_events_table', 1),
(11, '2023_03_21_011415_create_photoevents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photodests`
--

CREATE TABLE `photodests` (
  `id` bigint UNSIGNED NOT NULL,
  `destination_id` bigint UNSIGNED NOT NULL,
  `destphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photodests`
--

INSERT INTO `photodests` (`id`, `destination_id`, `destphoto`, `created_at`, `updated_at`) VALUES
(1, 1, '1703569597_yyyyy.png', '2023-12-25 22:46:37', '2023-12-25 22:46:37'),
(2, 2, '1703574143_1.jpg', '2023-12-26 00:02:23', '2023-12-26 00:02:23'),
(3, 3, '1703574352_Pantai-Lampuuk.jpg', '2023-12-26 00:05:52', '2023-12-26 00:05:52'),
(4, 4, '1703574565_5a0a33c34a00a-museum-tsunami-aceh_1265_711.jpg', '2023-12-26 00:09:25', '2023-12-26 00:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `photoeventbarus`
--

CREATE TABLE `photoeventbarus` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `eventphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photoevents`
--

CREATE TABLE `photoevents` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `eventphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photoevents`
--

INSERT INTO `photoevents` (`id`, `event_id`, `eventphoto`, `created_at`, `updated_at`) VALUES
(1, 1, '1703570346_testttt.png', '2023-12-25 22:59:06', '2023-12-25 22:59:06'),
(2, 2, '1703576806_serunya-pacuan-kuda-paku-alam-cup-ajang-balapan-kuda-se-nusantara.jpg', '2023-12-26 00:46:46', '2023-12-26 00:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'administrator', NULL, '$2y$10$uvjiU836kpksJ9XLbrF1a.XuMtgskwo2HX97Ru/Grmh1o9m/Thm06', NULL, '2023-12-25 22:45:30', '2023-12-25 22:45:30'),
(2, 'test', 'test@admin.com', 'contributor', NULL, '$2y$10$46NEO4PtSmENirEW2iMk5eptzktGJHX2v8.Gdgg6h4GT0TIC2Xmc.', NULL, '2023-12-25 22:55:44', '2023-12-25 22:55:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dest_photos`
--
ALTER TABLE `dest_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dest_photos_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `eventbarus`
--
ALTER TABLE `eventbarus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photodests`
--
ALTER TABLE `photodests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photoeventbarus`
--
ALTER TABLE `photoeventbarus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photoevents`
--
ALTER TABLE `photoevents`
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
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dest_photos`
--
ALTER TABLE `dest_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventbarus`
--
ALTER TABLE `eventbarus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photodests`
--
ALTER TABLE `photodests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photoeventbarus`
--
ALTER TABLE `photoeventbarus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photoevents`
--
ALTER TABLE `photoevents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dest_photos`
--
ALTER TABLE `dest_photos`
  ADD CONSTRAINT `dest_photos_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
