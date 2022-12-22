-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:28 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `showAdmin` ()   SELECT * FROM users WHERE level = 'admin'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showBorrowItems` ()   SELECT * FROM view_barang WHERE view_barang.status = 'Dipinjam'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showDamagedItems` ()   SELECT * FROM view_barang WHERE view_barang.status = 'Rusak'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showGoodItems` ()   SELECT * FROM view_barang WHERE view_barang.status = 'GOOD'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showRepairItems` ()   SELECT * FROM view_barang WHERE view_barang.status = 'Perbaikan'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showStaff` ()   SELECT * FROM users WHERE users.level = 'staff'$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_rak` bigint(20) UNSIGNED NOT NULL,
  `id_supplier` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `id_kategori`, `id_rak`, `id_supplier`) VALUES
('12345', 'Komputer PC HP Core Duo', 1, 2, 1),
('12346', 'Komputer PC Acer Core Duo Ram 8GB SSD 250GB', 1, 1, 1),
('12347', 'Komputer PC DELL Core Duo Ram 8GB SSD 250GB', 1, 1, 1),
('12348', 'Komputer PC Acer Core Duo Ram 8GB SSD 250GB', 1, 31, 1),
('12349', 'Komputer PC HP Core Duo Ram 4GB HDD 250GB LED 16inch', 1, 31, 1),
('12350', 'Komputer PC Samsung Core Duo Ram 4GB SSD 250GB', 1, 31, 1),
('13561', 'Komputer PC Samsung Core Duo Ram 4GB SSD 250GB', 1, 1, 1),
('13562', 'Komputer PC Asus Core Duo Ram 4GB SSD 250GB', 1, 1, 1),
('13563', 'PC Apple iMac [MRT42ID/A]/Core i5-3.0Ghz/8GB/1TB/VGA 4GB/21.5″/MacOS', 1, 1, 1),
('13564', 'Komputer PC DELL Core Duo Ram 8GB SSD 250GB', 1, 31, 1),
('13565', 'Komputer PC Asus Core Duo Ram 4GB SSD 250GB', 1, 31, 1),
('13566', 'PC Apple iMac [MRT42ID/A]/Core i5-3.0Ghz/8GB/1TB/VGA 4GB/21.5″/MacOS', 1, 31, 1),
('14561', 'Komputer PC HP Core Duo Ram 8GB SSD 250GB', 1, 1, 1),
('14562', 'Komputer PC HP Core Duo Ram 8GB SSD 250GB', 1, 31, 1),
('16161', 'Printer Cannon PIXMA G670', 1, 3, 2),
('16162', 'Printer Cannon PIXMA G670', 1, 32, 2),
('17121', 'HP DeskJet Ink Advantage 2776 All-in-One Printer (7HZ99B)', 1, 3, 4),
('17122', 'Canon Printer PIXMA TS5370 Pink', 1, 3, 4),
('17123', 'Printer Cannon MP 287 MP 237 dan MP 258', 1, 3, 4),
('17124', 'Canon Printer PIXMA MG2570S All In One', 1, 3, 4),
('17125', 'Printer Epson L210', 1, 3, 4),
('17126', 'Canon Multifunction Ink Jet Printer MG2570S', 1, 3, 4),
('17127', 'Canon Printer PIXMA TS5370 Pink', 1, 32, 4),
('17128', 'HP DeskJet Ink Advantage 2776 All-in-One Printer (7HZ99B)', 1, 32, 4),
('17129', 'Canon Printer PIXMA MG2570S ALL IN ONE', 1, 32, 4),
('17130', 'Printer Canon MP 287 MP 237 dan MP 258', 1, 32, 4),
('17131', 'Canon Multifunction Ink Jet Printer MG2570S', 1, 32, 4),
('17132', 'Printer Epson L210', 1, 32, 4),
('17511', 'Cash Drawer EPPOS RJ- 11 (37 x 33 Cm )', 1, 2, 3),
('17512', 'Cash Drawer Blueprint CD-BPL02 34x36x10,8 Cm', 1, 2, 3),
('17513', 'VSC Cash Drawer 37 X 33 Cm 4K4C RJ11 CD 320', 1, 2, 3),
('17514', 'Cash Drawer Kassen K410 K-410', 1, 2, 3),
('17515', 'Cash Drawer CD320 RJ-11', 1, 2, 3),
('17516', 'Sharkpos CD320 Cash Drawer Mini Laci Uang', 1, 2, 3),
('17517', 'Cash Drawer Blueprint CD-BPL02 34x36x10,8 Cm', 1, 31, 3),
('17518', 'Cash Drawer EPPOS RJ- 11 (37 x 33 Cm)', 1, 31, 3),
('17519', 'Cash Drawer Kassen K410 K-410', 1, 31, 3),
('17520', 'VSC Cash Drawer 37 X 33 Cm 4K4C RJ11 CD 320', 1, 31, 3),
('17521', 'Sharkpos CD320 Cash Drawer Mini Laci Uang', 1, 31, 3),
('17522', 'Cash Drawer CD320 RJ-11', 1, 31, 3),
('18181', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 9, 13),
('18182', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 9, 13),
('18183', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 9, 13),
('18184', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 9, 13),
('18185', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 36, 13),
('18186', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 36, 13),
('18187', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 36, 13),
('18188', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 36, 13),
('18189', 'Camera CCTV Hikvision DS-2CE76D0T-EXIPF', 1, 36, 13),
('18321', 'Barcode Printer Thermal XPrinter XP-420U Support 110MM', 1, 3, 5),
('18322', 'Printer Barcode Label Thermal Portabel IWare PB-582', 1, 3, 5),
('18323', 'Printer Bluetooth Thermal 80MM', 1, 3, 5),
('18324', 'Printer Bluetooth Mini Portable Printer Thermal 58MM', 1, 3, 5),
('18325', 'Printer Barcode XPrinter XP460BT USB Bluetooth Thermal', 1, 3, 5),
('18326', 'Portable Mini Printer Bluetooth EPPOS EP5881 58mm', 1, 3, 5),
('18327', 'Barcode Printer Thermal XPrinter XP-420U Support 110MM', 1, 32, 5),
('18328', 'Printer Barcode Label Thermal Portabel IWare PB-582', 1, 32, 5),
('18329', 'Printer Bluetooth Mini Portable Printer Thermal 58MM', 1, 32, 5),
('18330', 'Printer Bluetooth Thermal 80MM', 1, 32, 5),
('18331', 'Portable Mini Printer Bluetooth EPPOS EP5881 58mm', 1, 32, 5),
('18332', 'Printer Barcode XPrinter XP460BT USB Bluetooth Thermal', 1, 32, 5),
('19201', 'Office Chair', 2, 11, 6),
('19202', 'Kursi Kantor Hidrolik', 2, 11, 6),
('19203', 'Kursi Gaming', 2, 11, 6),
('19204', 'Kursi Lipat Portable', 2, 11, 6),
('19205', 'Kursi Taman', 2, 11, 6),
('19206', 'Stool Chair', 2, 11, 6),
('19207', 'Office Chair', 2, 41, 6),
('19208', 'Kursi Kantor Hidrolik', 2, 41, 6),
('19209', 'Kursi Lipat Portable', 2, 41, 6),
('19210', 'Kursi Gaming', 2, 41, 6),
('19211', 'Stool Chair', 2, 41, 6),
('19212', 'Kursi Taman', 2, 41, 6),
('20201', 'Switch Hub TP Link 5 Port', 1, 4, 7),
('20202', 'Switch Hub TP Link 8 Port', 1, 4, 7),
('20203', 'Switch Hub TP Link 16 Port', 1, 4, 7),
('20204', 'Switch Hub TP Link 5 Port', 1, 33, 7),
('20205', 'Switch Hub TP Link 8 Port', 1, 33, 7),
('20206', 'Switch Hub TP Link 16 Port', 1, 33, 7),
('21201', 'TP-Link EN020-F5 Wireless Router', 1, 4, 8),
('21202', 'TP-Link TL-WR940N 450 Mbps Wireless N Router', 1, 4, 8),
('21203', 'AX1800 Dual-Band Wifi 6 Router', 1, 4, 8),
('21204', 'TP-Link EN020-F5 Wireless Router', 1, 33, 8),
('21205', 'TP-Link TL-WR940N 450 Mbps Wireless N Router', 1, 33, 8),
('21206', 'AX1800 Dual-Band Wifi 6 Router', 1, 33, 8),
('23201', 'Scanner Cannon', 1, 5, 9),
('23202', 'Scanner Epson ', 1, 5, 9),
('23203', 'Scanner HP', 1, 5, 9),
('23204', 'Scanner Cannon', 1, 34, 9),
('23205', 'Scanner Epson', 1, 34, 9),
('23206', 'Scanner HP', 1, 34, 9),
('24201', 'CyberPower VP1000ELCD UPS System', 1, 6, 10),
('24202', 'Prolink PRO700SFC UPS System', 1, 6, 10),
('24203', 'Inforce UPS IF 650WA', 1, 6, 10),
('24204', 'CyberPower VP1000ELCD UPS System', 1, 34, 10),
('24205', 'Prolink PRO700SFC UPS System', 1, 34, 10),
('24206', 'Inforce UPS IF 650WA', 1, 34, 10),
('25201', 'Stabilizer Matsunaga Stavol 3000 watt', 1, 7, 11),
('25202', 'Stabilizer Sako SVC-500 VA', 1, 7, 11),
('25203', 'Inforce Stavolt Motor SVC 500VA Stabilizer', 1, 7, 11),
('25204', 'Stabilizer Matsunaga Stavol 3000 watt', 1, 35, 11),
('25205', 'Stabilizer Sako SVC-500 VA', 1, 35, 11),
('25206', 'Inforce Stavolt Motor SVC 500VA Stabilizer', 1, 35, 11),
('26201', 'Samsung 70 Crystal UHD BU8100', 1, 8, 12),
('26202', 'LG OLED evo C2 83 inch 4K Smart TV', 1, 8, 12),
('26203', 'Panasonic OLED TV TH-65LZ2000G', 1, 8, 12),
('26204', 'Samsung 70\" Crystal UHD BU8100', 1, 35, 12),
('26205', 'LG OLED evo C2 83 inch 4K Smart TV', 1, 35, 12),
('26206', 'Panasonic OLED TV TH-65LZ2000G', 1, 35, 12),
('30101', 'DVR 4 Channel Cooper Up To 1080P', 1, 9, 14),
('30102', 'DVR 4 Channel Cooper Up To 1080P', 1, 9, 14),
('30103', 'DVR 4 Channel Cooper Up To 1080P', 1, 9, 14),
('30104', 'DVR 4 Channel Cooper Up To 1080P', 1, 37, 14),
('30105', 'DVR 4 Channel Cooper Up To 1080P', 1, 37, 14),
('40101', 'Toshiba Canvio Premium 2 TB', 1, 9, 11),
('40102', 'Toshiba Canvio Premium 2 TB', 1, 9, 11),
('40103', 'Toshiba Canvio Premium 2 TB', 1, 37, 11),
('40104', 'Toshiba Canvio Premium 2 TB', 1, 37, 11),
('50101', 'Hartech Diesel Genset', 1, 9, 15),
('501015', 'Hartech Diesel Genset', 1, 37, 15),
('50102', 'Hartech Diesel Genset', 1, 9, 15),
('50103', 'Hartech Diesel Genset', 1, 9, 15),
('50104', 'Hartech Diesel Genset', 1, 37, 15),
('50106', 'Hartech Diesel Genset', 1, 37, 15),
('60101', 'Krisbow Tangga Multi Fungsi', 2, 12, 16),
('60102', 'Tangga Lipat Fortuna Altima', 2, 12, 16),
('60103', 'Tangga Aluminium Lipat Talux', 2, 12, 16),
('60104', 'Tangga Aluminium Lipat Talux', 2, 12, 16),
('60105', 'Krisbow Tangga Multi Fungsi', 2, 42, 16),
('60106', 'Tangga Lipat Fortuna Altima', 2, 42, 16),
('60107', 'Tangga Aluminium Lipat Talux', 2, 42, 16),
('60108', 'Tangga Aluminium Lipat Talux', 2, 42, 16);

--
-- Triggers `barangs`
--
DELIMITER $$
CREATE TRIGGER `log_delete_barang` AFTER DELETE ON `barangs` FOR EACH ROW BEGIN
            INSERT INTO log_delete_barangs SET id_barang = old.id, nama_deleted = old.nama, 
                        id_kategori_deleted = old.id_kategori, id_rak_deleted = old.id_rak,
                        id_supplier_deleted = old.id_supplier, deleted_at = now();
        END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `log_update_barang` BEFORE UPDATE ON `barangs` FOR EACH ROW BEGIN
            INSERT INTO log_update_barangs SET id_barang = old.id, nama_updated = new.nama, nama_old = old.nama, 
                        id_kategori_updated = new.id_kategori, id_kategori_old = old.id_kategori, 
                        id_Rak_updated = new.id_rak, id_Rak_old = old.id_rak,
                        id_Supplier_updated = new.id_supplier, id_Supplier_old = old.id_supplier, updated_at = now();
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `history_perpindahans`
--

CREATE TABLE `history_perpindahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet_peminjam` bigint(20) UNSIGNED NOT NULL,
  `tanggal_keluar` timestamp NULL DEFAULT NULL,
  `tanggal_kembali` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_rusak`
--

CREATE TABLE `history_rusak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rusak` timestamp NULL DEFAULT NULL,
  `tanggal_bagus` timestamp NULL DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`) VALUES
(1, 'elektronik'),
(2, 'homeware');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_rusaks`
--

CREATE TABLE `laporan_rusaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_rusaks`
--

INSERT INTO `laporan_rusaks` (`id`, `id_barang`, `id_user`, `tanggal`, `catatan`) VALUES
(2, '12345', 3, '2022-12-20 18:17:49', 'Tidak Berfungsi'),
(3, '12347', 3, '2022-12-20 18:18:28', 'Blue Screen'),
(4, '19206', 3, '2022-12-20 18:21:15', 'Kursi Bolong');

-- --------------------------------------------------------

--
-- Table structure for table `log_delete_barangs`
--

CREATE TABLE `log_delete_barangs` (
  `id` int(11) NOT NULL,
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori_deleted` bigint(20) UNSIGNED NOT NULL,
  `id_rak_deleted` bigint(20) UNSIGNED NOT NULL,
  `id_supplier_deleted` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_delete_users`
--

CREATE TABLE `log_delete_users` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_deleted` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_deleted` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_deleted` enum('superadmin','admin','staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_deleted` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_deleted` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_deleted` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet_deleted` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_update_barangs`
--

CREATE TABLE `log_update_barangs` (
  `id` int(11) NOT NULL,
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_updated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori_updated` bigint(20) UNSIGNED NOT NULL,
  `id_kategori_old` bigint(20) UNSIGNED NOT NULL,
  `id_Rak_updated` bigint(20) UNSIGNED NOT NULL,
  `id_Rak_old` bigint(20) UNSIGNED NOT NULL,
  `id_Supplier_updated` bigint(20) UNSIGNED NOT NULL,
  `id_Supplier_old` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_update_barangs`
--

INSERT INTO `log_update_barangs` (`id`, `id_barang`, `nama_updated`, `nama_old`, `id_kategori_updated`, `id_kategori_old`, `id_Rak_updated`, `id_Rak_old`, `id_Supplier_updated`, `id_Supplier_old`, `updated_at`) VALUES
(1, '12345', 'Komputer PC HP Core Duo', 'Komputer PC HP Core Duo Ram 4GB HDD 250GB LED 16inch', 1, 1, 2, 2, 1, 1, '2022-12-20 15:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `log_update_users`
--

CREATE TABLE `log_update_users` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_updated` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_old` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_updated` enum('superadmin','admin','staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_old` enum('superadmin','admin','staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_updated` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_old` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_updated` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_old` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_updated` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_old` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet_updated` bigint(20) UNSIGNED NOT NULL,
  `id_outlet_old` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_gudangs`
--

CREATE TABLE `lokasi_gudangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `gudang` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi_gudangs`
--

INSERT INTO `lokasi_gudangs` (`id`, `id_outlet`, `gudang`) VALUES
(1, 1, 'lantai 1'),
(2, 1, 'lantai 2'),
(3, 1, 'lantai 3'),
(4, 2, 'lantai 1'),
(5, 2, 'lantai 2'),
(6, 2, 'lantai 3');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_raks`
--

CREATE TABLE `lokasi_raks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` bigint(20) UNSIGNED NOT NULL,
  `rak` char(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi_raks`
--

INSERT INTO `lokasi_raks` (`id`, `id_gudang`, `rak`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3'),
(4, 1, '4'),
(5, 1, '5'),
(6, 1, '6'),
(7, 1, '7'),
(8, 1, '8'),
(9, 1, '9'),
(10, 1, '10'),
(11, 2, '1'),
(12, 2, '2'),
(13, 2, '3'),
(14, 2, '4'),
(15, 2, '5'),
(16, 2, '6'),
(17, 2, '7'),
(18, 2, '8'),
(19, 2, '9'),
(20, 2, '10'),
(21, 3, '1'),
(22, 3, '2'),
(23, 3, '3'),
(24, 3, '4'),
(25, 3, '5'),
(26, 3, '6'),
(27, 3, '7'),
(28, 3, '8'),
(29, 3, '9'),
(30, 3, '10'),
(31, 4, '1'),
(32, 4, '2'),
(33, 4, '3'),
(34, 4, '4'),
(35, 4, '5'),
(36, 4, '6'),
(37, 4, '7'),
(38, 4, '8'),
(39, 4, '9'),
(40, 4, '10'),
(41, 5, '1'),
(42, 5, '2'),
(43, 5, '3'),
(44, 5, '4'),
(45, 5, '5'),
(46, 5, '6'),
(47, 5, '7'),
(48, 5, '8'),
(49, 5, '9'),
(50, 5, '10'),
(51, 6, '1'),
(52, 6, '2'),
(53, 6, '3'),
(54, 6, '4'),
(55, 6, '5'),
(56, 6, '6'),
(57, 6, '7'),
(58, 6, '8'),
(59, 6, '9'),
(60, 6, '10');

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
(99, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(100, '2022_11_23_140340_create_barangs_table', 1),
(101, '2022_11_23_140340_create_history_perpindahans_table', 1),
(102, '2022_11_23_140340_create_history_rusak_table', 1),
(103, '2022_11_23_140340_create_kategoris_table', 1),
(104, '2022_11_23_140340_create_laporan_rusaks_table', 1),
(105, '2022_11_23_140340_create_lokasi_gudangs_table', 1),
(106, '2022_11_23_140340_create_lokasi_raks_table', 1),
(107, '2022_11_23_140340_create_outlets_table', 1),
(108, '2022_11_23_140340_create_perbaikans_table', 1),
(109, '2022_11_23_140340_create_perpindahans_table', 1),
(110, '2022_11_23_140340_create_req_pembelians_table', 1),
(111, '2022_11_23_140340_create_req_peminjamans_table', 1),
(112, '2022_11_23_140340_create_suppliers_table', 1),
(113, '2022_11_23_140340_create_users_table', 1),
(114, '2022_12_03_104651_add_foreign_keys_to_barangs_table', 1),
(115, '2022_12_03_104651_add_foreign_keys_to_history_perpindahans_table', 1),
(116, '2022_12_03_104651_add_foreign_keys_to_history_rusak_table', 1),
(117, '2022_12_03_104651_add_foreign_keys_to_laporan_rusaks_table', 1),
(118, '2022_12_03_104651_add_foreign_keys_to_lokasi_gudangs_table', 1),
(119, '2022_12_03_104651_add_foreign_keys_to_lokasi_raks_table', 1),
(120, '2022_12_03_104651_add_foreign_keys_to_perbaikans_table', 1),
(121, '2022_12_03_104651_add_foreign_keys_to_perpindahans_table', 1),
(122, '2022_12_03_104651_add_foreign_keys_to_req_pembelians_table', 1),
(123, '2022_12_03_104651_add_foreign_keys_to_req_peminjamans_table', 1),
(124, '2022_12_03_104651_add_foreign_keys_to_users_table', 1),
(125, '2022_12_03_104651_create_view_barang_view', 1),
(126, '2022_12_03_104651_create_view_reqpeminjaman_view', 1),
(127, '2022_12_03_104651_create_view_rusak_view', 1),
(128, '2022_12_07_131126_create_view_reqpembelian_view', 1),
(129, '2022_12_16_074038_create_view_rak_view', 1),
(130, '2022_12_18_032104_create_view_dipinjam_view', 1),
(131, '2022_12_20_124756_create_log_delete_barangs_table', 1),
(132, '2022_12_20_124756_create_log_delete_users_table', 1),
(133, '2022_12_20_124756_create_log_update_barangs_table', 1),
(134, '2022_12_20_124953_create_log_update_users_table', 1),
(135, '2022_12_19_080344_create_trigger', 2);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`id`, `nama`) VALUES
(1, 'Bina Karya Swalayan'),
(2, 'Bina Marindal Swalayan');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikans`
--

CREATE TABLE `perbaikans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perbaikans`
--

INSERT INTO `perbaikans` (`id`, `id_barang`, `tanggal_keluar`, `tanggal_kembali`, `lokasi`, `catatan`) VALUES
(1, '12346', '2022-12-20', '2022-12-23', 'evveav', 'rusak bos');

-- --------------------------------------------------------

--
-- Table structure for table `perpindahans`
--

CREATE TABLE `perpindahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_barang` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet_peminjam` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perpindahans`
--

INSERT INTO `perpindahans` (`id`, `tanggal_keluar`, `id_barang`, `id_outlet_peminjam`, `id_user`) VALUES
(1, '2022-12-20 18:27:07', '12348', 1, 3);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `req_pembelians`
--

INSERT INTO `req_pembelians` (`id`, `id_kategori`, `id_user`, `nama_barang`) VALUES
(1, 2, 3, 'Sapu Lantai'),
(2, 2, 3, 'Meja Kaca'),
(3, 1, 3, 'Cleaning Bot'),
(4, 1, 3, 'Vacuum Cleaner Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `req_peminjamans`
--

CREATE TABLE `req_peminjamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_rak_peminjam` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_diperlukan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `req_peminjamans`
--

INSERT INTO `req_peminjamans` (`id`, `id_user`, `id_kategori`, `id_rak_peminjam`, `nama_barang`, `tanggal_diperlukan`) VALUES
(1, 3, 1, 1, 'Vaccum Cleaner', '2022-12-21 01:11:00'),
(2, 3, 2, 13, 'Kain Pel', '2022-12-21 01:12:00'),
(3, 3, 2, 25, 'Meja Barang', '2022-12-21 01:13:00'),
(4, 3, 2, 24, 'Kursi Duduk', '2022-12-21 01:14:00'),
(5, 3, 1, 2, 'Kasir Elektronik', '2022-12-21 01:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`) VALUES
(1, 'PT Dayamega Pratama'),
(2, 'PT Dayamega Pratama'),
(3, 'Panda Retail Solutions'),
(4, 'Supermassive Indonesia'),
(5, 'Barcode Zone'),
(6, 'PT Wira Utama'),
(7, 'PX Official Store'),
(8, 'Vanilla Elektronic'),
(9, 'Jona Elektronic'),
(10, 'Surya Computer'),
(11, 'Jona Elektronic'),
(12, 'Abdul Store'),
(13, 'Hikvision CCTV Medan'),
(14, 'PT. Multi Kreasi Lestarindo'),
(15, 'CV. Bintang Mulia Abadi'),
(16, 'Toko Jaya Win');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('superadmin','admin','staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `jenis_kelamin`, `alamat`, `no_telp`, `id_outlet`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan', 'jonathan', '$2y$10$aeJ2162U1yRUCgAEyy37VOvcVUIBIJ//ksF8uoCh.VBYTW9Zvz4mm', 'superadmin', 'P', 'Medan', '0812123123123', 1, NULL, NULL, NULL),
(2, 'Febri', 'febri', '$2y$10$sXg.HLhXyYtK9IkNsxmh2ON9TPp04UB9XatYOsnkbnG8YwC1niq.u', 'admin', 'P', 'Sunggal', '089812341234', 2, NULL, NULL, NULL),
(3, 'Fairuz', 'fairuz', '$2y$10$VWWkTHXl9R2Ww1V8INyKwOQ1QjE5V4qViLRfwpTRdX0Bpyfo1YGOq', 'staff', 'P', 'Binjai', '085278946547', 1, NULL, NULL, NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `log_delete_user` AFTER DELETE ON `users` FOR EACH ROW BEGIN
            INSERT INTO log_delete_users SET id_user = old.id, nama_deleted = old.nama, 
                        username_deleted = old.username, level_deleted = old.level,
                        jenis_kelamin_deleted = old.jenis_kelamin, alamat_deleted = old.alamat,
                        no_telp_deleted = old.no_telp, id_outlet_deleted = old.id_outlet, deleted_at = now();
        END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `log_update_user` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
            INSERT INTO log_update_users SET id_user = old.id, nama_updated = new.nama, nama_old = old.nama, 
                        level_updated = new.level, level_old = old.level, 
                        jenis_kelamin_updated = new.jenis_kelamin, jenis_kelamin_old = old.jenis_kelamin,
                        alamat_updated = new.alamat, alamat_old = old.alamat,
                        no_telp_updated = new.no_telp, no_telp_old = old.no_telp,
                        id_Outlet_updated = new.id_outlet, id_Outlet_old = old.id_outlet, updated_at = now();
        END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `validasi_level_user` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
                IF NEW.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Added";
                END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `validasi_level_user_2` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
                IF NEW.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Added";
                END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `validasi_level_user_3` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
                IF OLD.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Deleted";
                END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `validasi_username` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
                IF OLD.username != NEW.username
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Username Cannot be Edited";
                END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang`
-- (See below for the actual view)
--
CREATE TABLE `view_barang` (
`id` char(6)
,`Nama` varchar(255)
,`id_Kategori` bigint(20) unsigned
,`Kategori` varchar(255)
,`id_Rak` bigint(20) unsigned
,`Rak` char(3)
,`id_Gudang` bigint(20) unsigned
,`Gudang` text
,`id_Outlet` bigint(20) unsigned
,`Outlet` text
,`Status` varchar(9)
,`id_Supplier` bigint(20) unsigned
,`Supplier` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dipinjam`
-- (See below for the actual view)
--
CREATE TABLE `view_dipinjam` (
`id_barang` char(6)
,`nama_barang` varchar(255)
,`id_outlet_peminjam` bigint(20) unsigned
,`outlet_peminjam` text
,`id_rak_asal` bigint(20) unsigned
,`rak_asal` char(3)
,`id_gudang_asal` bigint(20) unsigned
,`gudang_asal` text
,`id_outlet_asal` bigint(20) unsigned
,`outlet_asal` text
,`tanggal_keluar` timestamp
,`id_user` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rak`
-- (See below for the actual view)
--
CREATE TABLE `view_rak` (
`id_rak` bigint(20) unsigned
,`rak` char(3)
,`id_gudang` bigint(20) unsigned
,`gudang` text
,`id_outlet` bigint(20) unsigned
,`outlet` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reqpembelian`
-- (See below for the actual view)
--
CREATE TABLE `view_reqpembelian` (
`id` bigint(20) unsigned
,`nama_barang` varchar(255)
,`id_kategori` bigint(20) unsigned
,`nama_kategori` varchar(255)
,`id_user` bigint(20) unsigned
,`nama_user` text
,`id_outlet` bigint(20) unsigned
,`nama_outlet` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reqpeminjaman`
-- (See below for the actual view)
--
CREATE TABLE `view_reqpeminjaman` (
`id` bigint(20) unsigned
,`id_kategori` bigint(20) unsigned
,`kategori` varchar(255)
,`id_user` bigint(20) unsigned
,`USER` text
,`id_rak` bigint(20) unsigned
,`rak` char(3)
,`id_gudang` bigint(20) unsigned
,`gudang` text
,`id_outlet` bigint(20) unsigned
,`outlet` text
,`nama_barang` varchar(255)
,`tanggal_diperlukan` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rusak`
-- (See below for the actual view)
--
CREATE TABLE `view_rusak` (
`id` char(5)
,`nama_barang` varchar(255)
,`kategori` varchar(255)
,`rak` char(3)
,`gudang` text
,`nama` text
);

-- --------------------------------------------------------

--
-- Structure for view `view_barang`
--
DROP TABLE IF EXISTS `view_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang`  AS SELECT `barangs`.`id` AS `id`, `barangs`.`nama` AS `Nama`, `kategoris`.`id` AS `id_Kategori`, `kategoris`.`nama_kategori` AS `Kategori`, `lokasi_raks`.`id` AS `id_Rak`, `lokasi_raks`.`rak` AS `Rak`, `lokasi_gudangs`.`id` AS `id_Gudang`, `lokasi_gudangs`.`gudang` AS `Gudang`, `outlets`.`id` AS `id_Outlet`, `outlets`.`nama` AS `Outlet`, CASE WHEN (select exists(select `barangs`.`id` from `perbaikans` where `barangs`.`id` = `perbaikans`.`id_barang` limit 1)) = 1 THEN 'Perbaikan' WHEN (select exists(select `barangs`.`id` from `laporan_rusaks` where `barangs`.`id` = `laporan_rusaks`.`id_barang` limit 1)) = 1 THEN 'Rusak' WHEN (select exists(select `barangs`.`id` from `perpindahans` where `barangs`.`id` = `perpindahans`.`id_barang` limit 1)) = 1 THEN 'Dipinjam' ELSE 'GOOD' END AS `Status`, `suppliers`.`id` AS `id_Supplier`, `suppliers`.`nama` AS `Supplier` FROM (((((`barangs` left join `kategoris` on(`barangs`.`id_kategori` = `kategoris`.`id`)) left join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) left join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) left join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`)) left join `suppliers` on(`barangs`.`id_supplier` = `suppliers`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_dipinjam`
--
DROP TABLE IF EXISTS `view_dipinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dipinjam`  AS SELECT `barangs`.`id` AS `id_barang`, `barangs`.`nama` AS `nama_barang`, `outlets_alias1`.`id` AS `id_outlet_peminjam`, `outlets_alias1`.`nama` AS `outlet_peminjam`, `lokasi_raks`.`id` AS `id_rak_asal`, `lokasi_raks`.`rak` AS `rak_asal`, `lokasi_gudangs`.`id` AS `id_gudang_asal`, `lokasi_gudangs`.`gudang` AS `gudang_asal`, `outlets_alias2`.`id` AS `id_outlet_asal`, `outlets_alias2`.`nama` AS `outlet_asal`, `perpindahans`.`tanggal_keluar` AS `tanggal_keluar`, `perpindahans`.`id_user` AS `id_user` FROM (((((`perpindahans` left join `outlets` `outlets_alias1` on(`perpindahans`.`id_outlet_peminjam` = `outlets_alias1`.`id`)) left join `barangs` on(`perpindahans`.`id_barang` = `barangs`.`id`)) left join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) left join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) left join `outlets` `outlets_alias2` on(`lokasi_gudangs`.`id_outlet` = `outlets_alias2`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_rak`
--
DROP TABLE IF EXISTS `view_rak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rak`  AS SELECT `lokasi_raks`.`id` AS `id_rak`, `lokasi_raks`.`rak` AS `rak`, `lokasi_gudangs`.`id` AS `id_gudang`, `lokasi_gudangs`.`gudang` AS `gudang`, `outlets`.`id` AS `id_outlet`, `outlets`.`nama` AS `outlet` FROM ((`lokasi_raks` left join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) left join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_reqpembelian`
--
DROP TABLE IF EXISTS `view_reqpembelian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reqpembelian`  AS SELECT `req_pembelians`.`id` AS `id`, `req_pembelians`.`nama_barang` AS `nama_barang`, `kategoris`.`id` AS `id_kategori`, `kategoris`.`nama_kategori` AS `nama_kategori`, `users`.`id` AS `id_user`, `users`.`nama` AS `nama_user`, `outlets`.`id` AS `id_outlet`, `outlets`.`nama` AS `nama_outlet` FROM (((`req_pembelians` left join `kategoris` on(`req_pembelians`.`id_kategori` = `kategoris`.`id`)) left join `users` on(`req_pembelians`.`id_user` = `users`.`id`)) left join `outlets` on(`users`.`id_outlet` = `outlets`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_reqpeminjaman`
--
DROP TABLE IF EXISTS `view_reqpeminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reqpeminjaman`  AS SELECT `req_peminjamans`.`id` AS `id`, `kategoris`.`id` AS `id_kategori`, `kategoris`.`nama_kategori` AS `kategori`, `users`.`id` AS `id_user`, `users`.`nama` AS `USER`, `lokasi_raks`.`id` AS `id_rak`, `lokasi_raks`.`rak` AS `rak`, `lokasi_gudangs`.`id` AS `id_gudang`, `lokasi_gudangs`.`gudang` AS `gudang`, `outlets`.`id` AS `id_outlet`, `outlets`.`nama` AS `outlet`, `req_peminjamans`.`nama_barang` AS `nama_barang`, `req_peminjamans`.`tanggal_diperlukan` AS `tanggal_diperlukan` FROM (((((`lokasi_raks` join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`)) join `req_peminjamans` on(`lokasi_raks`.`id` = `req_peminjamans`.`id_rak_peminjam`)) join `kategoris` on(`req_peminjamans`.`id_kategori` = `kategoris`.`id`)) join `users` on(`req_peminjamans`.`id_user` = `users`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_rusak`
--
DROP TABLE IF EXISTS `view_rusak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rusak`  AS SELECT `laporan_rusaks`.`id_barang` AS `id`, `barangs`.`nama` AS `nama_barang`, `kategoris`.`nama_kategori` AS `kategori`, `lokasi_raks`.`rak` AS `rak`, `lokasi_gudangs`.`gudang` AS `gudang`, `outlets`.`nama` AS `nama` FROM (((((`laporan_rusaks` join `barangs` on(`laporan_rusaks`.`id_barang` = `barangs`.`id`)) join `kategoris` on(`barangs`.`id_kategori` = `kategoris`.`id`)) join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_rak` (`id_rak`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `history_perpindahans`
--
ALTER TABLE `history_perpindahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`,`id_outlet_peminjam`,`id_user`),
  ADD KEY `id_outlet_peminjam` (`id_outlet_peminjam`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `history_rusak`
--
ALTER TABLE `history_rusak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_kategori_unique` (`nama_kategori`);

--
-- Indexes for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `log_delete_barangs`
--
ALTER TABLE `log_delete_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_delete_users`
--
ALTER TABLE `log_delete_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_update_barangs`
--
ALTER TABLE `log_update_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_update_users`
--
ALTER TABLE `log_update_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_gudangs`
--
ALTER TABLE `lokasi_gudangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `lokasi_raks`
--
ALTER TABLE `lokasi_raks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gudang` (`id_gudang`);

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
-- Indexes for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `perpindahans`
--
ALTER TABLE `perpindahans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perpindahans_id_barang_unique` (`id_barang`),
  ADD UNIQUE KEY `id_barang` (`id_barang`),
  ADD KEY `id_outlet_peminjam` (`id_outlet_peminjam`),
  ADD KEY `id_user` (`id_user`);

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
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_gudang_peminjam` (`id_rak_peminjam`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_no_telp_unique` (`no_telp`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_perpindahans`
--
ALTER TABLE `history_perpindahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_delete_barangs`
--
ALTER TABLE `log_delete_barangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_delete_users`
--
ALTER TABLE `log_delete_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_update_barangs`
--
ALTER TABLE `log_update_barangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_update_users`
--
ALTER TABLE `log_update_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi_gudangs`
--
ALTER TABLE `lokasi_gudangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lokasi_raks`
--
ALTER TABLE `lokasi_raks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perbaikans`
--
ALTER TABLE `perbaikans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perpindahans`
--
ALTER TABLE `perpindahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req_pembelians`
--
ALTER TABLE `req_pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barangs_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barangs_ibfk_3` FOREIGN KEY (`id_rak`) REFERENCES `lokasi_raks` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `history_perpindahans`
--
ALTER TABLE `history_perpindahans`
  ADD CONSTRAINT `history_perpindahans_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `history_perpindahans_ibfk_2` FOREIGN KEY (`id_outlet_peminjam`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `history_perpindahans_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `history_rusak`
--
ALTER TABLE `history_rusak`
  ADD CONSTRAINT `history_rusak_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `laporan_rusaks`
--
ALTER TABLE `laporan_rusaks`
  ADD CONSTRAINT `laporan_rusaks_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_rusaks_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lokasi_gudangs`
--
ALTER TABLE `lokasi_gudangs`
  ADD CONSTRAINT `lokasi_gudangs_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lokasi_raks`
--
ALTER TABLE `lokasi_raks`
  ADD CONSTRAINT `lokasi_raks_ibfk_1` FOREIGN KEY (`id_gudang`) REFERENCES `lokasi_gudangs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perbaikans`
--
ALTER TABLE `perbaikans`
  ADD CONSTRAINT `perbaikans_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `perpindahans`
--
ALTER TABLE `perpindahans`
  ADD CONSTRAINT `perpindahans_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `perpindahans_ibfk_2` FOREIGN KEY (`id_outlet_peminjam`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `perpindahans_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `req_pembelians`
--
ALTER TABLE `req_pembelians`
  ADD CONSTRAINT `req_pembelians_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `req_peminjamans`
--
ALTER TABLE `req_peminjamans`
  ADD CONSTRAINT `req_peminjamans_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `req_peminjamans_ibfk_3` FOREIGN KEY (`id_rak_peminjam`) REFERENCES `lokasi_raks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `req_peminjamans_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlets` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
