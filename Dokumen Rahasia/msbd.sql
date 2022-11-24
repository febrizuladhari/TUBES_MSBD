-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 07:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Kategori` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Lokasi` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Supplier` char(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `Kategori` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_Kategori` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_rusaks`
--

CREATE TABLE `laporan_rusaks` (
  `id` int(11) NOT NULL,
  `id_Barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_User` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_barangs`
--

CREATE TABLE `lokasi_barangs` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Outlet` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_20_044705_create_barangs_table', 1),
(5, '2022_11_20_044705_create_kategoris_table', 1),
(6, '2022_11_20_044705_create_laporan_rusaks_table', 1),
(7, '2022_11_20_044705_create_lokasi_barangs_table', 1),
(8, '2022_11_20_044705_create_outlets_table', 1),
(9, '2022_11_20_044705_create_perbaikans_table', 1),
(10, '2022_11_20_044705_create_req_pembelians_table', 1),
(11, '2022_11_20_044705_create_req_peminjamans_table', 1),
(12, '2022_11_20_044705_create_suppliers_table', 1),
(13, '2022_11_20_044705_create_tabel_perpindahans_table', 1),
(14, '2022_11_20_044705_create_users_table', 1),
(15, '2022_11_20_044706_add_foreign_keys_to_barangs_table', 1),
(16, '2022_11_20_044706_add_foreign_keys_to_laporan_rusaks_table', 1),
(17, '2022_11_20_044706_add_foreign_keys_to_lokasi_barangs_table', 1),
(18, '2022_11_20_044706_add_foreign_keys_to_outlets_table', 1),
(19, '2022_11_20_044706_add_foreign_keys_to_perbaikans_table', 1),
(20, '2022_11_20_044706_add_foreign_keys_to_req_pembelians_table', 1),
(21, '2022_11_20_044706_add_foreign_keys_to_req_peminjamans_table', 1),
(22, '2022_11_20_044706_add_foreign_keys_to_tabel_perpindahans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `perbaikans`
--

CREATE TABLE `perbaikans` (
  `id` int(11) NOT NULL,
  `id_Barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Keluar` date NOT NULL,
  `Tanggal_Kembali` date NOT NULL,
  `Lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `req_pembelians`
--

CREATE TABLE `req_pembelians` (
  `id` int(11) NOT NULL,
  `id_Kategori` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_User` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama Barang` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `req_peminjamans`
--

CREATE TABLE `req_peminjamans` (
  `id_User` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Diperlukan` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_perpindahans`
--

CREATE TABLE `tabel_perpindahans` (
  `id` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Keluar` date NOT NULL,
  `id_Barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Outlet_Peminjam` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_User` char(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` enum('superadmin','admin','staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jenis_Kelamin` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_Telp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Outlet` char(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Kategori` (`id_Kategori`,`id_Lokasi`,`id_Supplier`),
  ADD KEY `id_Supplier` (`id_Supplier`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`Kategori`);

--
-- Indexes for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Barang` (`id_Barang`,`id_User`),
  ADD KEY `id_User` (`id_User`);

--
-- Indexes for table `lokasi_barangs`
--
ALTER TABLE `lokasi_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Outlet` (`id_Outlet`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Barang` (`id_Barang`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `req_pembelians`
--
ALTER TABLE `req_pembelians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Kategori` (`id_Kategori`,`id_User`);

--
-- Indexes for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_User` (`id_User`,`id_Barang`),
  ADD KEY `id_Barang` (`id_Barang`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_perpindahans`
--
ALTER TABLE `tabel_perpindahans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Barang` (`id_Barang`,`id_Outlet_Peminjam`,`id_User`),
  ADD KEY `id_Outlet_Peminjam` (`id_Outlet_Peminjam`),
  ADD KEY `id_User` (`id_User`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `perbaikans`
--
ALTER TABLE `perbaikans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req_pembelians`
--
ALTER TABLE `req_pembelians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_ibfk_1` FOREIGN KEY (`id_Kategori`) REFERENCES `kategoris` (`Kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barangs_ibfk_2` FOREIGN KEY (`id_Supplier`) REFERENCES `suppliers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  ADD CONSTRAINT `laporan_rusaks_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lokasi_barangs`
--
ALTER TABLE `lokasi_barangs`
  ADD CONSTRAINT `lokasi_barangs_ibfk_1` FOREIGN KEY (`id_Outlet`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `outlets`
--
ALTER TABLE `outlets`
  ADD CONSTRAINT `outlets_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lokasi_barangs` (`id_Outlet`) ON UPDATE CASCADE;

--
-- Constraints for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD CONSTRAINT `perbaikans_ibfk_1` FOREIGN KEY (`id_Barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `req_pembelians`
--
ALTER TABLE `req_pembelians`
  ADD CONSTRAINT `req_pembelians_ibfk_1` FOREIGN KEY (`id_Kategori`) REFERENCES `kategoris` (`Kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  ADD CONSTRAINT `req_peminjamans_ibfk_1` FOREIGN KEY (`id_Barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `req_peminjamans_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tabel_perpindahans`
--
ALTER TABLE `tabel_perpindahans`
  ADD CONSTRAINT `tabel_perpindahans_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_perpindahans_ibfk_2` FOREIGN KEY (`id_Outlet_Peminjam`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_perpindahans_ibfk_3` FOREIGN KEY (`id_Barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
