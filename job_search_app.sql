-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2023 pada 14.05
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_search_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, '2023-07-30 02:26:45', '2023-07-30 02:26:45'),
(2, 7, 3, '2023-07-30 03:33:32', '2023-07-30 03:33:32'),
(3, 7, 2, '2023-07-30 03:34:25', '2023-07-30 03:34:25'),
(4, 2, 1, '2023-07-30 04:10:53', '2023-07-30 04:10:53'),
(5, 8, 2, '2023-07-30 05:53:56', '2023-07-30 05:53:56'),
(6, 2, 1, '2023-07-30 08:05:20', '2023-07-30 08:05:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Akuntansi/Keuangan', 'Berkaitan dengan pengelolaan dan analisis keuangan suatu organisasi, perusahaan, atau individu. Ini melibatkan pengumpulan, pengelolaan, dan interpretasi informasi keuangan untuk menyusun laporan keuangan yang akurat. Halo', '2023-07-27 21:06:15', '2023-07-30 08:11:42'),
(2, 'Komputer/Teknologi Informasi', 'Sektor yang mencakup segala hal yang berhubungan dengan penggunaan, pengelolaan, dan pengembangan teknologi komputer serta sistem informasi.', '2023-07-27 21:18:12', '2023-07-28 02:02:58'),
(3, 'Penjualan/Pemasaran', 'Bidang pekerjaan yang bertujuan untuk mempromosikan, menjual, dan mendistribusikan produk atau layanan suatu perusahaan kepada pelanggan atau konsumen potensial.', '2023-07-27 21:19:54', '2023-07-27 21:19:54'),
(4, 'Seni/Media/Komunikasi', 'Bidang yang mencakup berbagai jenis pekerjaan yang berfokus pada ekspresi kreatif, komunikasi visual, dan penyampaian pesan kepada khalayak melalui berbagai media.', '2023-07-27 21:21:39', '2023-07-27 21:21:39'),
(5, 'Hotel/Restoran', 'Sektor industri yang berfokus pada penyediaan layanan makanan, minuman, dan akomodasi untuk pelanggan.', '2023-07-27 21:23:17', '2023-07-27 21:23:17'),
(8, 'Olivia Craig', 'Ad ab qui voluptas i', '2023-07-28 16:08:13', '2023-07-28 16:08:13'),
(9, 'Ruby Brown', 'Consequuntur velit d', '2023-07-28 16:08:21', '2023-07-28 16:08:21'),
(10, 'Beau Cantrell', 'Sapiente hic quidem', '2023-07-28 16:08:31', '2023-07-28 16:08:31'),
(11, 'Bevis James', 'Nesciunt cupiditate', '2023-07-28 16:08:39', '2023-07-28 16:08:39'),
(13, 'Nichole Albert', 'Suscipit sit dolorem', '2023-07-30 08:10:01', '2023-07-30 08:10:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cvs`
--

INSERT INTO `cvs` (`id`, `gender`, `birthplace`, `birthdate`, `address`, `telephone`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'laki-laki', 'Cupiditate sint in', '2020-05-05', 'Et suscipit a consec', '12', '1690729618.jpg', 2, '2023-07-29 23:12:38', '2023-07-30 08:06:58'),
(4, 'Consequuntur repelle', 'Voluptatem Cupidata', '2005-10-09', 'Aspernatur omnis ven', '72', '1690704661.jpg', 6, '2023-07-30 01:11:01', '2023-07-30 01:11:01'),
(5, 'Enim suscipit sit l', 'Neque laboris perspi', '1986-01-27', 'Adipisicing doloremq', '28', '1690706768.jpg', 7, '2023-07-30 01:46:08', '2023-07-30 01:46:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_masuk` int(11) NOT NULL,
  `th_lulus` int(11) NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `tingkat`, `institusi`, `jurusan`, `th_masuk`, `th_lulus`, `cvs_id`, `created_at`, `updated_at`) VALUES
(1, 'Fugiat in sunt ver', 'Enim debitis illo to', 'Et odio molestiae ut', 35, 61, 3, '2023-07-29 23:36:06', '2023-07-29 23:36:06'),
(4, 'Reiciendis dolorum a', 'Labore laborum Mole', 'Aute ipsum voluptate', 64, 27, 4, '2023-07-30 01:11:12', '2023-07-30 01:11:12'),
(5, 'Velit anim aut volup', 'Tempore mollitia es', 'Velit impedit labor', 83, 1, 4, '2023-07-30 01:13:09', '2023-07-30 01:13:09'),
(6, 'SMA oy', 'Non voluptatum recus', 'Aut ut et commodo ma', 61, 2003, 5, '2023-07-30 01:46:40', '2023-07-30 02:55:13'),
(8, 'Voluptatum occaecat', 'Officia harum aute c', 'Officia laudantium', 83, 89, 3, '2023-07-30 08:07:46', '2023-07-30 08:07:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jobdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `experiences`
--

INSERT INTO `experiences` (`id`, `perusahaan`, `posisi`, `tgl_masuk`, `tgl_keluar`, `jobdesc`, `cvs_id`, `created_at`, `updated_at`) VALUES
(1, 'Ullam quia officia pak', 'Delectus exercitati', '1975-03-06', '1998-03-09', 'Cum odit libero dese', 3, '2023-07-30 01:32:25', '2023-07-30 04:11:15'),
(3, 'Numquam et voluptate', 'Aliqua Duis labore jhkhkhkhk', '1992-08-26', '2018-08-13', 'Rem unde quia conseq', 5, '2023-07-30 02:39:42', '2023-07-30 03:12:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `close_date` date NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `requirements`, `location`, `close_date`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 'Sint tenetur offici', 'Ipsa eaque sunt eli', 'Qui quis dolore cupi', 'Mollitia tempore id', '1992-10-20', 5, '2023-07-28 03:00:36', '2023-07-28 03:00:36'),
(2, 'Accounting Staff', '● Perform identification and validation of transactions on income and expenses that have occurred and henceforth will be processed for accounting records of all transactions.\r\n● Carry out journaling input process for all income and expense transactions that occur both from operational cash and banks to the School Integration System.\r\n● Process journal prints out documents by attaching evidence from the transactions journal.\r\n● Classify the amount of income based on existing data sources.\r\n● Perform bank reconciliation process.\r\n● Perform document archiving process from transaction evidence that has been completed with the recording process.', '● Aged around 25 - 35 Years Old.\r\n● Candidates must possess at least Diploma Degree (D3) in Accounting or Finance or equivalent.\r\n● Minimum of two years experience as an Accounting Staff.\r\n● Computer literate (Esp. Microsoft Excel).\r\n● Familiar with Accounting software such as Accurate, Zahir, SAP Business One, MASERP, etc.\r\n● Have experience making an Accounting Journal.\r\n● Holding a Brevet A &amp; B Certificate is more likely.', 'Insan Cendekia Madani - Tangerang', '2023-08-17', 1, '2023-07-28 03:03:32', '2023-07-28 08:30:24'),
(3, 'ACCOUNTING', '1. Melakukan pembukuan keuangan perusahaan\r\n2. Memposting jurnal operasional\r\n3. Membuat dan menyajikan laporan keuangan\r\n4.Menginput data jurnal akuntansi\r\n5.Melakukan Verifikasi dokumen\r\n6.Rekonsiliasi dan penyesuaian data\r\n7.Melakukan audit laporan\r\n8.Menghitung gaji karyawan', '1. Minimal 3 tahun pengalaman bekerja\r\n2. Mengerti alur kas perusahaan dan spt pajak\r\n3. Bagi yang bisa menggunakan sistem accounting (Accurate)\r\n4. Bagi yang bisa bergabung secepatnya lebih diutamakan\r\n5.Bisa bahasa mandarin atau bahasa inggris akan menjadi nilai plus\r\n6.Tanggung Jawab, disiplin dan teliti', 'PT JIANG PING LISTRIK - Jakarta Barat', '2023-08-12', 1, '2023-07-28 03:06:21', '2023-07-28 08:31:22'),
(6, 'Quasi numquam quam c', 'Id eligendi odio dol', 'Molestiae quisquam q', 'Vel nobis ut rerum n', '1996-12-06', 3, '2023-07-29 03:12:37', '2023-07-29 03:12:37'),
(7, 'Incidunt magnam err', 'Quia lorem est et u', 'Est necessitatibus v', 'Et esse expedita om', '2006-05-04', 5, '2023-07-29 03:12:50', '2023-07-29 03:12:50'),
(8, 'Enim occaecat unde i', 'Repellendus Volupta', 'Quasi dolor at aliqu', 'Et voluptas libero s', '2013-03-24', 3, '2023-07-29 03:12:59', '2023-07-29 03:12:59'),
(9, 'Sed et elit quis vo', 'Dolorem voluptatem i', 'Cupiditate magna mag', 'Qui voluptatibus bea', '1982-12-19', 4, '2023-07-29 03:13:08', '2023-07-29 03:13:08'),
(10, 'Accusantium dolore n', 'Autem eius numquam q', 'Autem quam quae et s', 'Eius voluptate enim', '2003-07-23', 3, '2023-07-29 19:01:02', '2023-07-29 19:01:02'),
(11, 'Ea earum laboris max', 'Labore numquam ipsa', 'Eligendi dolor dolor', 'Sunt sint elit pe', '1996-04-12', 11, '2023-07-29 19:02:26', '2023-07-29 19:02:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2023_07_27_152338_create_cvs_table', 1),
(26, '2023_07_27_152413_create_experiences_table', 1),
(27, '2023_07_27_152432_create_education_table', 1),
(28, '2023_07_27_152447_create_categories_table', 1),
(29, '2023_07_27_152529_create_jobs_table', 1),
(30, '2023_07_27_152547_create_applications_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Malik Benton', 'koxibutofu@mailinator.com', '$2y$10$FolG1YJqFzqO3HQguRq6jeDS9vCEjLUNKn0CB/OgB6NXdIvl80W7e', 'pelamar', NULL, NULL, '2023-07-28 16:04:43', '2023-07-28 16:04:43'),
(2, 'Bayu Hadi Leksana', 'bayuhadi863@gmail.com', '$2y$10$E0qTFjXwIJXgvxjmth7ZVeoyUnTl9hc5UBrccGK6r6pcDFZGm9kL.', 'pelamar', NULL, NULL, '2023-07-29 02:52:26', '2023-07-29 02:52:26'),
(3, 'Bayu Hadi Leksana', 'coloneurban@gmail.com', '$2y$10$Gblmeq9jJQsGAR9I5G9AuOOg4QcANQwhMEiPDSL4mcBpkJXx5.sc2', 'admin', NULL, NULL, '2023-07-29 02:52:26', '2023-07-29 02:52:26'),
(4, 'Chelsea Moran', 'zynuhyl@mailinator.com', '$2y$10$Jn3GGOxl6Bjk1KE3Vb0FSOQZ055.S70ybKWIboWeIacydwMG3MyOO', 'pelamar', NULL, NULL, '2023-07-29 19:10:12', '2023-07-29 19:10:12'),
(5, 'Wilma Johnson', 'femyvawa@mailinator.com', '$2y$10$5oXnPsAnMOmfH4hAumDfQeUscdqQTm/HtVXw8nJh9oSS50mln3h4e', 'pelamar', NULL, NULL, '2023-07-30 00:26:13', '2023-07-30 00:26:13'),
(6, 'Chelsea Hensley', 'vokyvol@mailinator.com', '$2y$10$crzH853Efjn6PDqXfPi33e0w9Y/C2hNX9ZQrkhcXjLcPYIalRBogC', 'pelamar', NULL, NULL, '2023-07-30 00:58:55', '2023-07-30 00:58:55'),
(7, 'Michael Woodard', 'bayu@gmail.com', '$2y$10$08CqN07V.wxC.nGpHlOu4OL18PADF0CondoQ.RulgAcO/QoTIrhb.', 'pelamar', NULL, NULL, '2023-07-30 01:40:19', '2023-07-30 01:40:19'),
(8, 'Violet Roach', 'xesaxixe@mailinator.com', '$2y$10$T4.5d/FF48OmdnJz0yCAfuNrww8/bqtAfI9ez9GdHbWntaj6ihZWC', 'pelamar', NULL, NULL, '2023-07-30 04:11:49', '2023-07-30 04:11:49'),
(9, 'Alec Holloway', 'bisupyfe@mailinator.com', '$2y$10$Y1GB70O/g.qKJSj0VuYtZOUzfufIEfzqcot3eHS6yj1JvrIZVIBmi', 'pelamar', NULL, NULL, '2023-07-30 05:43:02', '2023-07-30 05:43:02'),
(10, 'Gage Peck', 'bocamejifi@mailinator.com', '$2y$10$TwxIKnnr3aTCb4p9HqiqSeYb1VSiAJTV6XK6HvDWdx6OiVx3exxo6', 'pelamar', NULL, NULL, '2023-07-30 08:00:25', '2023-07-30 08:00:25'),
(11, 'Mary Jacobs', 'vuvy@mailinator.com', '$2y$10$uiMFYwkHlVHQcyvKiPt5lOhlIVICIADfc2i0hfmoLyEkb7uqGQAvC', 'pelamar', NULL, NULL, '2023-07-30 08:03:32', '2023-07-30 08:03:32'),
(12, 'Zahir Bryant', 'jupydyh@mailinator.com', '$2y$10$NraXLuj2.e/hoBTCdGYW1OBlN2BB/rBCOAGjoR0XZ4U1qIUe8S8Wa', 'admin', NULL, NULL, '2023-07-30 08:13:15', '2023-07-30 08:13:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_user_id_foreign` (`user_id`),
  ADD KEY `applications_job_id_foreign` (`job_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cvs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_cvs_id_foreign` (`cvs_id`);

--
-- Indeks untuk tabel `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_cvs_id_foreign` (`cvs_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_categories_id_foreign` (`categories_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`);

--
-- Ketidakleluasaan untuk tabel `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`);

--
-- Ketidakleluasaan untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
