-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_profile
CREATE DATABASE IF NOT EXISTS `db_profile` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_profile`;

-- Dumping structure for table db_profile.artikels
CREATE TABLE IF NOT EXISTS `artikels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.artikels: ~10 rows (approximately)
INSERT INTO `artikels` (`id`, `title`, `description`, `content`, `image`, `published_date`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Pentingnya Medical Check-Up Rutin', 'Medical Check-Up (MCU) adalah pemeriksaan kesehatan secara menyeluruh yang dilakukan secara berkala untuk mendeteksi dini berbagai penyakit.', 'Medical Check-Up (MCU) merupakan salah satu langkah pencegahan yang sangat penting dalam menjaga kesehatan. Dengan melakukan MCU secara rutin, kita dapat mendeteksi dini berbagai penyakit seperti diabetes, hipertensi, kolesterol tinggi, dan bahkan kanker. Pemeriksaan ini meliputi tes darah, urine, EKG, rontgen dada, dan konsultasi dengan dokter spesialis. Amanah Medical Centre menyediakan paket MCU lengkap dengan harga terjangkau dan fasilitas modern.', 'mcu.jpg', '2025-11-17', 1, '2025-11-17 00:19:32', '2025-11-17 00:19:32'),
	(2, 'Gejala Jantung yang Perlu Diwaspadai', 'Mengenali gejala penyakit jantung sejak dini dapat menyelamatkan nyawa. Simak tanda-tanda yang perlu Anda ketahui.', 'Penyakit jantung merupakan salah satu penyebab kematian tertinggi di Indonesia. Gejala yang sering muncul meliputi nyeri dada, sesak napas, palpitasi, kelelahan berlebihan, dan pembengkakan pada kaki. Faktor risiko seperti merokok, hipertensi, diabetes, dan pola makan tidak sehat dapat meningkatkan risiko terkena penyakit ini. Lakukan pemeriksaan jantung secara rutin dan konsultasikan dengan dokter spesialis jantung di Amanah Medical Centre.', 'gejala-jantung.webp', '2025-11-16', 1, '2025-11-17 00:19:32', '2025-11-17 00:19:32'),
	(3, 'Tips Menjaga Pola Sehat di Era Digital', 'Dalam era digital saat ini, menjaga kesehatan fisik dan mental menjadi tantangan tersendiri. Berikut tips praktisnya.', 'Era digital membawa banyak kemudahan namun juga risiko kesehatan seperti mata lelah, postur tubuh yang buruk, dan stres. Untuk menjaga kesehatan, lakukan olahraga minimal 30 menit per hari, istirahatkan mata setiap 20 menit saat bekerja di depan komputer, konsumsi makanan sehat, dan kelola stres dengan meditasi atau hobi. Amanah Medical Centre siap membantu Anda dengan program kesehatan holistik yang terintegrasi.', 'tips-menjaga-pola-sehat.webp', '2025-11-15', 1, '2025-11-17 00:19:32', '2025-11-17 00:19:32'),
	(4, 'Manfaat Olahraga untuk Kesehatan Mental', 'Olahraga tidak hanya baik untuk tubuh, tetapi juga sangat bermanfaat untuk kesehatan mental dan psikologis.', 'Olahraga teratur dapat meningkatkan produksi endorfin yang dikenal sebagai hormon kebahagiaan, mengurangi stres, meningkatkan kualitas tidur, dan meningkatkan kepercayaan diri. Jenis olahraga yang direkomendasikan meliputi jalan kaki, jogging, yoga, dan renang. Mulailah dengan olahraga ringan dan konsisten. Konsultasikan dengan dokter sebelum memulai program olahraga, terutama jika Anda memiliki kondisi kesehatan tertentu.', 'olahraga-mental.jpg', '2025-11-14', 1, '2025-11-17 00:19:32', '2025-11-17 00:19:32'),
	(5, 'Pentingnya Vaksinasi untuk Semua Usia', 'Vaksinasi bukan hanya untuk anak-anak, tetapi juga penting untuk orang dewasa dan lansia.', 'Vaksinasi membantu tubuh membangun kekebalan terhadap berbagai penyakit menular. Untuk orang dewasa, vaksinasi influenza, pneumokokus, dan hepatitis sangat dianjurkan. Vaksin COVID-19 juga masih penting untuk menjaga kekebalan komunitas. Amanah Medical Centre menyediakan layanan vaksinasi lengkap dengan jadwal yang fleksibel dan harga terjangkau. Jangan tunda vaksinasi demi kesehatan Anda dan keluarga.', 'vaksinasi.jpg', '2025-11-13', 1, '2025-11-17 00:19:32', '2025-11-17 00:19:32'),
	(6, 'Pentingnya Medical Check-Up Rutin', 'Medical Check-Up (MCU) adalah pemeriksaan kesehatan secara menyeluruh yang dilakukan secara berkala untuk mendeteksi dini berbagai penyakit.', 'Medical Check-Up (MCU) merupakan salah satu langkah pencegahan yang sangat penting dalam menjaga kesehatan. Dengan melakukan MCU secara rutin, kita dapat mendeteksi dini berbagai penyakit seperti diabetes, hipertensi, kolesterol tinggi, dan bahkan kanker. Pemeriksaan ini meliputi tes darah, urine, EKG, rontgen dada, dan konsultasi dengan dokter spesialis. Amanah Medical Centre menyediakan paket MCU lengkap dengan harga terjangkau dan fasilitas modern.', 'mcu.jpg', '2025-12-01', 1, '2025-12-01 00:02:39', '2025-12-01 00:02:39'),
	(7, 'Gejala Jantung yang Perlu Diwaspadai', 'Mengenali gejala penyakit jantung sejak dini dapat menyelamatkan nyawa. Simak tanda-tanda yang perlu Anda ketahui.', 'Penyakit jantung merupakan salah satu penyebab kematian tertinggi di Indonesia. Gejala yang sering muncul meliputi nyeri dada, sesak napas, palpitasi, kelelahan berlebihan, dan pembengkakan pada kaki. Faktor risiko seperti merokok, hipertensi, diabetes, dan pola makan tidak sehat dapat meningkatkan risiko terkena penyakit ini. Lakukan pemeriksaan jantung secara rutin dan konsultasikan dengan dokter spesialis jantung di Amanah Medical Centre.', 'gejala-jantung.webp', '2025-11-30', 1, '2025-12-01 00:02:39', '2025-12-01 00:02:39'),
	(8, 'Tips Menjaga Pola Sehat di Era Digital', 'Dalam era digital saat ini, menjaga kesehatan fisik dan mental menjadi tantangan tersendiri. Berikut tips praktisnya.', 'Era digital membawa banyak kemudahan namun juga risiko kesehatan seperti mata lelah, postur tubuh yang buruk, dan stres. Untuk menjaga kesehatan, lakukan olahraga minimal 30 menit per hari, istirahatkan mata setiap 20 menit saat bekerja di depan komputer, konsumsi makanan sehat, dan kelola stres dengan meditasi atau hobi. Amanah Medical Centre siap membantu Anda dengan program kesehatan holistik yang terintegrasi.', 'tips-menjaga-pola-sehat.webp', '2025-11-29', 1, '2025-12-01 00:02:39', '2025-12-01 00:02:39'),
	(9, 'Manfaat Olahraga untuk Kesehatan Mental', 'Olahraga tidak hanya baik untuk tubuh, tetapi juga sangat bermanfaat untuk kesehatan mental dan psikologis.', 'Olahraga teratur dapat meningkatkan produksi endorfin yang dikenal sebagai hormon kebahagiaan, mengurangi stres, meningkatkan kualitas tidur, dan meningkatkan kepercayaan diri. Jenis olahraga yang direkomendasikan meliputi jalan kaki, jogging, yoga, dan renang. Mulailah dengan olahraga ringan dan konsisten. Konsultasikan dengan dokter sebelum memulai program olahraga, terutama jika Anda memiliki kondisi kesehatan tertentu.', 'olahraga-mental.jpg', '2025-11-28', 1, '2025-12-01 00:02:39', '2025-12-01 00:02:39'),
	(10, 'Pentingnya Vaksinasi untuk Semua Usia', 'Vaksinasi bukan hanya untuk anak-anak, tetapi juga penting untuk orang dewasa dan lansia.', 'Vaksinasi membantu tubuh membangun kekebalan terhadap berbagai penyakit menular. Untuk orang dewasa, vaksinasi influenza, pneumokokus, dan hepatitis sangat dianjurkan. Vaksin COVID-19 juga masih penting untuk menjaga kekebalan komunitas. Amanah Medical Centre menyediakan layanan vaksinasi lengkap dengan jadwal yang fleksibel dan harga terjangkau. Jangan tunda vaksinasi demi kesehatan Anda dan keluarga.', 'vaksinasi.jpg', '2025-11-27', 1, '2025-12-01 00:02:39', '2025-12-01 00:02:39');

-- Dumping structure for table db_profile.beds
CREATE TABLE IF NOT EXISTS `beds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('available','occupied','maintenance') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.beds: ~0 rows (approximately)

-- Dumping structure for table db_profile.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.cache: ~0 rows (approximately)

-- Dumping structure for table db_profile.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.cache_locks: ~0 rows (approximately)

-- Dumping structure for table db_profile.doctors
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.doctors: ~94 rows (approximately)
INSERT INTO `doctors` (`id`, `name`, `poli`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'dr. Choirul Anam, Sp.A (K), M.Biomed', 'SPESIALIS ANAK', '1763382688.png', 'web.jadwal.dokter1', '1', '2025-11-17 08:01:27', '2025-11-17 04:31:28'),
	(2, 'Prof. Dr. dr. Edi Hartoyo, Sp.A(K)', 'SPESIALIS ANAK', 'doktor2.jpg', 'web.jadwal.dokter2', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(4, 'dr. Khalida Fetriyani Ningsih, M.Sc, Sp.A, Subsp. Kardio (K)', 'SPESIALIS ANAK', 'doktor4.jpg', 'web.jadwal.dokter4', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(5, 'dr. Galih Rahman, Sp.A', 'SPESIALIS ANAK', 'doktor5.jpg', 'web.jadwal.dokter5', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(6, 'dr. Pudji Andayani, Sp.A(K)', 'SPESIALIS ANAK', 'doktor6.jpg', 'web.jadwal.dokter6', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(7, 'dr. Priyanti Kisworini, M.Kes, Sp.A (K)', 'SPESIALIS ANAK', '1763464108.png', 'web.jadwal.dokter7', '1', '2025-11-17 08:01:27', '2025-11-18 03:08:28'),
	(8, 'dr. Valentina Nicolas, Sp.A', 'SPESIALIS ANAK', '1763436788.png', 'web.jadwal.dokter8', '1', '2025-11-17 08:01:27', '2025-11-17 19:33:08'),
	(9, 'dr. Wulan Dewi, Sp. A, K-Hom', 'SPESIALIS ANAK', 'doktor3.jpg', 'web.jadwal.dokter9', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(10, 'dr. Jefry Albari Tribowo, Sp. And', 'SPESIALIS ANDROLOGI', 'doktor4.jpg', 'web.jadwal.dokter10', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(11, 'dr. Fathia Febriyasy, Sp.An, M.Kes', 'SPESIALIS ANESTESI', 'doktor5.jpg', 'web.jadwal.dokter11', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(12, 'dr. Mahendratama P. Adhi, Sp.An-Ti Subsp. An. Ped. (CK)', 'SPESIALIS ANESTESI', 'doktor6.jpg', 'web.jadwal.dokter12', '0', '2025-11-17 08:01:27', '2025-11-21 01:34:37'),
	(13, 'dr. Rapto Hardian Sp.An-Ti, Subsp. An. Kv (K)', 'SPESIALIS ANESTESI', '1763716629.png', 'web.jadwal.dokter13', '1', '2025-11-17 08:01:27', '2025-11-21 01:17:09'),
	(14, 'dr. Rohmantuah Trada Purba, Sp.An-TI', 'SPESIALIS ANESTESI', '1763464187.png', 'web.jadwal.dokter14', '1', '2025-11-17 08:01:27', '2025-11-18 03:09:47'),
	(15, 'dr. Audi Ardansyah, Sp.BS (K)', 'SPESIALIS BEDAH', '1763464225.png', 'web.jadwal.dokter15', '1', '2025-11-17 08:01:27', '2025-11-18 03:10:25'),
	(16, 'dr. Ahmad Gozali, Sp. BTKV (K)-VE', 'SPESIALIS BEDAH', '1763716381.png', 'web.jadwal.dokter16', '1', '2025-11-17 08:01:27', '2025-11-21 01:13:01'),
	(17, 'dr. Agus Suhendar Sp. BS (K)', 'SPESIALIS BEDAH', 'doktor5.jpg', 'web.jadwal.dokter17', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(18, 'Dr.dr.Darma PTR Maluegha,Sp.BP-RE (K-WOUND)', 'SPESIALIS BEDAH', 'doktor6.jpg', 'web.jadwal.dokter18', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(19, 'dr. Ferry Chandra Satriawan, Sp.BS', 'SPESIALIS BEDAH', '1763716462.png', 'web.jadwal.dokter19', '1', '2025-11-17 08:01:27', '2025-11-21 01:14:22'),
	(20, 'DR. dr. Hery Poerwosusanta, Sp.B, Sp.BA, SubSp.DA (K) FICS', 'SPESIALIS BEDAH', 'doktor2.jpg', 'web.jadwal.dokter20', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(21, 'dr. Mohammad Syarif Hidayat, Sp.B, FICS', 'SPESIALIS BEDAH', 'doktor3.jpg', 'web.jadwal.dokter21', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(22, 'dr. Nadia Tamara P, M.Kedklin, Sp. BP-RE', 'SPESIALIS BEDAH', 'doktor4.jpg', 'web.jadwal.dokter22', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(23, 'dr. Oscar Tri Joko Putra.,Sp.B.,MH.Kes.', 'SPESIALIS BEDAH', '1763450811.png', 'web.jadwal.dokter23', '1', '2025-11-17 08:01:27', '2025-11-17 23:26:51'),
	(24, 'dr. R. M. Ardani Fitriansyah SY, Sp.B-KBD', 'SPESIALIS BEDAH', '1763450785.png', 'web.jadwal.dokter24', '1', '2025-11-17 08:01:27', '2025-11-17 23:26:25'),
	(25, 'Dr. dr. Iwan Aflanie, M.Kes., Sp.F.', 'SPESIALIS FORENSIK', 'doktor1.jpg', 'web.jadwal.dokter25', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(26, 'drg. Adianto Prasetyo', 'SPESIALIS GIGI', '1763450519.png', 'web.jadwal.dokter26', '1', '2025-11-17 08:01:27', '2025-11-17 23:21:59'),
	(27, 'drg. Bayu Indra', 'SPESIALIS GIGI', 'doktor3.jpg', 'web.jadwal.dokter27', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(28, 'drg. Bugi Luminta', 'SPESIALIS GIGI', 'doktor4.jpg', 'web.jadwal.dokter28', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(29, 'drg. Buyung Maglenda, Sp.KG', 'SPESIALIS GIGI', 'doktor5.jpg', 'web.jadwal.dokter29', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(30, 'drg. Harmadji Kurniadi', 'SPESIALIS GIGI', 'doktor6.jpg', 'web.jadwal.dokter30', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(31, 'drg. Melisa Budipramana, Sp.ORTH', 'SPESIALIS GIGI', 'doktor1.jpg', 'web.jadwal.dokter31', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(32, 'drg. Miko M, Sp.BM', 'SPESIALIS GIGI', 'doktor2.jpg', 'web.jadwal.dokter32', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(33, 'drg. Mohammad Wildan, Sp.BM', 'SPESIALIS GIGI', '1763450470.png', 'web.jadwal.dokter33', '1', '2025-11-17 08:01:27', '2025-11-17 23:21:10'),
	(34, 'drg. Norlaila Sarifah, Sp. RKG', 'SPESIALIS GIGI', '1763716534.png', 'web.jadwal.dokter34', '1', '2025-11-17 08:01:27', '2025-11-21 01:15:34'),
	(35, 'drg. Rachmat Tri Rizky Ananda, Sp.Perio', 'SPESIALIS GIGI', '1763450496.png', 'web.jadwal.dokter35', '1', '2025-11-17 08:01:27', '2025-11-17 23:21:36'),
	(36, 'drg. Siti Fatimah Narindyah', 'SPESIALIS GIGI', '1763464363.png', 'web.jadwal.dokter36', '1', '2025-11-17 08:01:27', '2025-11-18 03:12:43'),
	(37, 'drg. Dwiki Azhar', 'SPESIALIS GIGI', '1763450537.png', 'web.jadwal.dokter37', '1', '2025-11-17 08:01:27', '2025-11-17 23:22:17'),
	(38, 'drg.Gandis,Sp.GA', 'SPESIALIS GIGI', '1763716478.png', 'web.jadwal.dokter38', '1', '2025-11-17 08:01:27', '2025-11-21 01:14:38'),
	(39, 'dr. Yunita Lidya Istiqomah, Sp.GK', 'SPESIALIS GIZI KLINIK', '1763450613.png', 'web.jadwal.dokter39', '1', '2025-11-17 08:01:27', '2025-11-17 23:23:33'),
	(40, 'DR. dr. Dwi Laksono Adiputro, Sp.JP(K), FIHA, FAsCC, FAPSC', 'SPESIALIS JANTUNG', '1763464409.png', 'web.jadwal.dokter40', '1', '2025-11-17 08:01:27', '2025-11-18 03:13:29'),
	(41, 'dr. Intan Yustikasari, Sp.JP (K), FIHA, FAsCC', 'SPESIALIS JANTUNG', 'doktor5.jpg', 'web.jadwal.dokter41', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(42, 'dr. Hj.Putri Kusuma Dewi, Sp.JP(K),FIAH, FAsCC', 'SPESIALIS JANTUNG', 'doktor6.jpg', 'web.jadwal.dokter42', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(43, 'dr. Chalid Muamar A.M, Sp.O.G', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor1.jpg', 'web.jadwal.dokter43', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(44, 'dr. Ferry Armanza, Sp.OG (K) Onk', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor2.jpg', 'web.jadwal.dokter44', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(45, 'dr. Hermin Sabaruddin Sp. OG', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor3.jpg', 'web.jadwal.dokter45', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(46, 'Dr. dr. Hardian Syauqi, Sp.OG, SubSp.FER', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor4.jpg', 'web.jadwal.dokter46', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(47, 'dr. Iwan Darma Putra, Sp.OG, Supsp.FER', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor5.jpg', 'web.jadwal.dokter47', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(48, 'dr. Muhammad Robyanoor Ahyadi Radam, Sp.OG(K)-KFM', 'SPESIALIS KANDUNGAN & KEBIDANAN', '1763716657.png', 'web.jadwal.dokter48', '1', '2025-11-17 08:01:27', '2025-11-21 01:17:37'),
	(49, 'dr. Noor Aida Ariani, Sp.OG', 'SPESIALIS KANDUNGAN & KEBIDANAN', 'doktor1.jpg', 'web.jadwal.dokter49', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(50, 'dr. Nadya, Sp. OG', 'SPESIALIS KANDUNGAN & KEBIDANAN', '1763716515.png', 'web.jadwal.dokter50', '1', '2025-11-17 08:01:27', '2025-11-21 01:15:15'),
	(51, 'dr. Syaiful Fadilah, Sp.KJ', 'SPESIALIS KEJIWAAN', '1763716689.png', 'web.jadwal.dokter51', '1', '2025-11-17 08:01:27', '2025-11-21 01:18:09'),
	(52, 'dr. Alfred Setyono, Sp.D.V.E', 'SPESIALIS KULIT & KELAMIN', '1763450763.png', 'web.jadwal.dokter52', '1', '2025-11-17 08:01:27', '2025-11-17 23:26:03'),
	(53, 'dr. Dwiana Savitri,Sp.KK, FINSDV, FAADV.', 'SPESIALIS KULIT & KELAMIN', '1763716404.png', 'web.jadwal.dokter53', '1', '2025-11-17 08:01:27', '2025-11-21 01:13:24'),
	(54, 'dr. Novia Rizki Amalia, Sp. DVE', 'SPESIALIS KULIT & KELAMIN', 'doktor6.jpg', 'web.jadwal.dokter54', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(55, 'dr. Agus Fitrian Noor Razak, Sp.M(K)', 'SPESIALIS MATA', 'doktor1.jpg', 'web.jadwal.dokter55', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(56, 'dr. Alfi Mutammima, Sp.M (K) Retina', 'SPESIALIS MATA', 'doktor2.jpg', 'web.jadwal.dokter56', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(57, 'dr. Etty Eko Setyowati, Sp.M-KVR', 'SPESIALIS MATA', 'doktor3.jpg', 'web.jadwal.dokter57', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(58, 'dr. Febriani Yohana, Sp. M', 'SPESIALIS MATA', 'doktor4.jpg', 'web.jadwal.dokter58', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(59, 'dr. Pardawan, Sp. M', 'SPESIALIS MATA', '1763716562.png', 'web.jadwal.dokter59', '1', '2025-11-17 08:01:27', '2025-11-21 01:16:02'),
	(60, 'dr. Sulistiyo Rinny, Sp. M', 'SPESIALIS MATA', 'doktor6.jpg', 'web.jadwal.dokter60', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(61, 'dr. Fakhrurrazy, M.Kes, Sp.S.', 'SPESIALIS NEUROLOGI', '1763716444.png', 'web.jadwal.dokter61', '1', '2025-11-17 08:01:27', '2025-11-21 01:14:04'),
	(62, 'dr. H. Hasyim Fachir, Sp.S', 'SPESIALIS NEUROLOGI', 'doktor2.jpg', 'web.jadwal.dokter62', '0', '2025-11-17 08:01:27', '2025-12-05 01:04:55'),
	(63, 'dr. Hana Humaira Fachir, Sp.N', 'SPESIALIS NEUROLOGI', '1763436550.png', 'web.jadwal.dokter63', '1', '2025-11-17 08:01:27', '2025-11-17 19:29:10'),
	(64, 'dr. Muhammad Welly Dafif, Sp.S (K)', 'SPESIALIS NEUROLOGI', 'doktor4.jpg', 'web.jadwal.dokter64', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(65, 'dr. Tara Wandhita Usman Sp. N', 'SPESIALIS NEUROLOGI', 'doktor5.jpg', 'web.jadwal.dokter65', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(66, 'dr. Hj. Essy Dwi Damayanthi, Sp.OT., Subsp.C.O (K), AIFO-K', 'SPESIALIS ORTOPEDI', '1763716426.png', 'web.jadwal.dokter66', '1', '2025-11-17 08:01:27', '2025-11-21 01:13:46'),
	(67, 'dr. Muhammad Ichwan Noorrafiqi, Sp. OT', 'SPESIALIS ORTOPEDI', '1763436836.png', 'web.jadwal.dokter67', '1', '2025-11-17 08:01:27', '2025-11-17 19:33:56'),
	(68, 'dr. M. Wibowo Ariyanto, Sp.OT (K)', 'SPESIALIS ORTOPEDI', '1763716714.png', 'web.jadwal.dokter68', '1', '2025-11-17 08:01:27', '2025-11-21 01:18:34'),
	(69, 'Dr. dr. Izaak Zulkarnain Akbar Sp. OT', 'SPESIALIS ORTOPEDI', 'doktor3.jpg', 'web.jadwal.dokter69', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(70, 'Prof. dr. Zairin Noor, Sp.OT (K), MM-Surgery', 'SPESIALIS ORTOPEDI', 'doktor4.jpg', 'web.jadwal.dokter70', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(71, 'dr. Ali Assagaf, Sp. P(K)', 'SPESIALIS PARU', 'doktor5.jpg', 'web.jadwal.dokter71', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(72, 'dr. Ira Nurrasyidah Sp. P(K)', 'SPESIALIS PARU', 'doktor6.jpg', 'web.jadwal.dokter72', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(73, 'dr. Syarifah Fatimah, Sp. P', 'SPESIALIS PARU', 'doktor1.jpg', 'web.jadwal.dokter73', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(74, 'dr. Abimanyu, Sp.PD-KGEH, FINASIM', 'SPESIALIS PENYAKIT DALAM', '1763716360.png', 'web.jadwal.dokter74', '1', '2025-11-17 08:01:27', '2025-11-21 01:12:40'),
	(75, 'dr. H. A. Soefyani, SpPD, K-GEH, FINASIM', 'SPESIALIS PENYAKIT DALAM', '1763716675.png', 'web.jadwal.dokter75', '1', '2025-11-17 08:01:27', '2025-11-21 01:17:55'),
	(76, 'dr. Arif Nur Widodo, Sp.PD, K-GEH, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor4.jpg', 'web.jadwal.dokter76', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(77, 'Dr. Djallalluddin, MKes, PKK, SpPD, KKV, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor5.jpg', 'web.jadwal.dokter77', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(78, 'dr. Fauzia Noor Liani Sp. PD K-EMD, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor6.jpg', 'web.jadwal.dokter78', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(79, 'Dr. dr. I Nyoman Suarjana, Sp.PD, K-R, FINASIM', 'SPESIALIS PENYAKIT DALAM', '1763716494.png', 'web.jadwal.dokter79', '1', '2025-11-17 08:01:27', '2025-11-21 01:14:54'),
	(80, 'dr. Mony Chrysti Rehuli Sembiring, Sp.PD', 'SPESIALIS PENYAKIT DALAM', '1763436519.png', 'web.jadwal.dokter80', '1', '2025-11-17 08:01:27', '2025-11-17 19:28:39'),
	(81, 'Dr. dr. Muhammad Darwin Prenggono, SpPD-KHOM. FINASIM.', 'SPESIALIS PENYAKIT DALAM', 'doktor3.jpg', 'web.jadwal.dokter81', '0', '2025-11-17 08:01:27', '2025-12-05 05:00:46'),
	(82, 'dr. Meldy Muzada Elfa Sp. PD K-Ger, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor4.jpg', 'web.jadwal.dokter82', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(83, 'Dr. dr. M. Rudiansyah, M.Kes, Sp.PD, K-GH, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor5.jpg', 'web.jadwal.dokter83', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(84, 'dr. Nurul Aina, Sp.PD, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor6.jpg', 'web.jadwal.dokter84', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(85, 'dr. Nani Zaitun, Sp. PD, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor1.jpg', 'web.jadwal.dokter85', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(86, 'dr.Oldi Dedya Sp. PD K-P, FINASIM', 'SPESIALIS PENYAKIT DALAM', 'doktor2.jpg', 'web.jadwal.dokter86', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(87, 'dr. Wiwit Agung Sri Nur Cahyawati, Sp.PD, K-GER, FINASIM', 'SPESIALIS PENYAKIT DALAM', '1763716731.png', 'web.jadwal.dokter87', '1', '2025-11-17 08:01:27', '2025-11-21 01:18:51'),
	(88, 'dr. Muh. Siddik, Sp.KFR, NM (K), FEMG', 'SPESIALIS REHAB MEDIK', 'doktor4.jpg', 'web.jadwal.dokter88', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(89, 'dr. Putri Endyana, Sp.KFR', 'SPESIALIS REHAB MEDIK', '1763716606.png', 'web.jadwal.dokter89', '1', '2025-11-17 08:01:27', '2025-11-21 01:16:46'),
	(90, 'dr. Ramlah, Sp.KFR.', 'SPESIALIS REHAB MEDIK', 'doktor6.jpg', 'web.jadwal.dokter90', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(91, 'DR. dr. Achmad Rofi\'i, Sp.THT-KL', 'SPESIALIS TELINGA HIDUNG & TENGGOROKAN', 'doktor1.jpg', 'web.jadwal.dokter91', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(92, 'dr. Rusina Hayati, Sp.T.H.T.B.K.L, Sub.Sp.Onk(K)', 'SPESIALIS TELINGA HIDUNG & TENGGOROKAN', '1763450662.png', 'web.jadwal.dokter92', '1', '2025-11-17 08:01:27', '2025-11-17 23:24:22'),
	(93, 'dr. Hamita, SP. THT-KL', 'SPESIALIS TELINGA HIDUNG & TENGGOROKAN', '1763464605.png', 'web.jadwal.dokter93', '1', '2025-11-17 08:01:27', '2025-11-18 03:16:45'),
	(94, 'Dr. dr. Eka Yudha Rahman, Sp. U(K)', 'SPESIALIS UROLOGI', 'doktor4.jpg', 'web.jadwal.dokter94', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27'),
	(95, 'dr. Noor Riza Perdana, Sp.U, MARS', 'SPESIALIS UROLOGI', 'doktor5.jpg', 'web.jadwal.dokter95', '0', '2025-11-17 08:01:27', '2025-11-17 08:01:27');

-- Dumping structure for table db_profile.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_profile.info_beds
CREATE TABLE IF NOT EXISTS `info_beds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `sub_nama` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_profile.info_beds: ~19 rows (approximately)
INSERT INTO `info_beds` (`id`, `nama`, `sub_nama`, `jumlah`) VALUES
	(1, 'INTENSIVE', 'ICU - ICCU', '6'),
	(2, 'ISOLASI', 'IGD', '1'),
	(3, 'OBSERVASI', 'IGD', '5'),
	(4, 'PONEK', 'IGD', '2'),
	(5, 'RESUSITASI', 'IGD', '1'),
	(6, 'TINDAKAN', 'IGD', '1'),
	(7, 'AMETHYST', 'ISOLASI KELAS 1', '8'),
	(8, 'AMETHYST', 'ISOLASI VIP', '4'),
	(9, 'SAPPHIRE', 'KELAS 1', '20'),
	(10, 'EMERALD', 'KELAS STANDARD', '40'),
	(11, 'DIAMOND', 'KELAS VIP', '1'),
	(12, 'RUBY', 'KELAS VIP', '13'),
	(13, 'DIAMOND', 'KELAS VVIP', '2'),
	(14, 'NICU', 'NICU', '2'),
	(15, 'PERINA', 'PERINA', '2'),
	(16, 'AMETHYST', 'RUANG TINDAKAN', '1'),
	(17, 'OBSERVASI', 'VK', '2'),
	(18, 'TINDAKAN', 'VK', '4'),
	(19, 'VK VVIP', 'VK', '2');

-- Dumping structure for table db_profile.jadwal_dokter
CREATE TABLE IF NOT EXISTS `jadwal_dokter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_doctors` int DEFAULT NULL,
  `FMDDOKTERN` varchar(255) DEFAULT NULL,
  `FMJShift` varchar(50) DEFAULT NULL,
  `FMJHari01` varchar(50) DEFAULT NULL,
  `FMJHari02` varchar(50) DEFAULT NULL,
  `FMJHari03` varchar(50) DEFAULT NULL,
  `FMJHari04` varchar(50) DEFAULT NULL,
  `FMJHari05` varchar(50) DEFAULT NULL,
  `FMJHari06` varchar(50) DEFAULT NULL,
  `FMJHari07` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_profile.jadwal_dokter: ~80 rows (approximately)
INSERT INTO `jadwal_dokter` (`id`, `id_doctors`, `FMDDOKTERN`, `FMJShift`, `FMJHari01`, `FMJHari02`, `FMJHari03`, `FMJHari04`, `FMJHari05`, `FMJHari06`, `FMJHari07`) VALUES
	(1, 15, 'dr. Audi Ardansyah Sp.BS (K)', 'SORE', NULL, '19.00 - 21.00', NULL, '19.00 - 21.00', NULL, NULL, NULL),
	(2, 74, 'dr. Abimanyu Sp.PD-KGEH FINASIM', 'SORE', NULL, '16.00 - 18.00', NULL, '16.00 - 18.00', NULL, '16.00 - 18.00', NULL),
	(3, 71, 'dr. Ali Assagaf Sp. P(K)', 'PAGI', NULL, NULL, '10.00 - 12.00', NULL, '10.00 - 12.00', NULL, '10.00 - 12.00'),
	(4, 55, 'dr. Agus Fitrian Noor Razak Sp.M(K)', 'PAGI', NULL, '09.00 - 11.00', NULL, '09.00 - 11.00', NULL, NULL, NULL),
	(5, 76, 'dr. Arif Nur Widodo Sp.PD K-GEH FINASIM', 'SORE', NULL, '16:00 - 18:00', '16:00 - 18:00', '16:00 - 18:30', '16:00 - 18:00', '16:00 - 18:00', '16:00 - 18:00'),
	(6, 26, 'drg. Adianto Prasetyo', 'PAGI', '10:30 - 12:00', '08:00 - 13:00', '08:00 - 13:00', '08:00 - 15:30', '08:00 - 13:00', '08:00 - 15:30', '08:00 - 15:30'),
	(7, 26, 'drg. Adianto Prasetyo', 'SORE', NULL, '15.30 - 21.00', '18.00 - 21.00', '15.30 - 21.00', '18.00 - 21.00', '15.30 - 21.00', NULL),
	(8, 91, 'DR. dr. Achmad Rofi`i Sp.THT-KL', 'SORE', NULL, '15.00 - 17.00', '15.00 - 17.00', '15.00 - 17.00', NULL, NULL, NULL),
	(9, 52, 'dr. Alfred Setyono Sp.D.V.E', 'SORE', NULL, NULL, '16.00 - 17.30', NULL, '16.00 - 17.30', NULL, NULL),
	(10, NULL, 'dr. Devi Astri Kusuwardani Sp.Rad', 'SORE', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59'),
	(11, NULL, 'dr. Devi Astri Kusuwardani Sp.Rad', 'PAGI', '00:00 - 12:00', '00:00 - 12:00', '00:00 - 12:00', '00:00 - 12:00', '00:00 - 12:00', '00:00 - 12:00', '00:00 - 12:00'),
	(12, NULL, 'dr. Vina Dwiana SavitriSp.KK FINSDV FAADV.', 'SORE', NULL, '13.00 - 15.00', NULL, '13.00 - 15.00', NULL, '13.00 - 15.00', NULL),
	(13, 66, 'dr. Hj. Essy Dwi Damayanthi Sp.OT. Subsp.C.O (K) AIFO-K', 'SORE', NULL, '14.00 - 16.00', NULL, '19.00 - 20.00', NULL, NULL, '14.00 - 16.00'),
	(14, 19, 'dr. Ferry Armanza Sp.OG (K) Onk', 'SORE', NULL, '15:00 - 18:00', NULL, '15:00 - 18:00', NULL, '15.00 - 18.00', NULL),
	(15, 61, 'dr. Fakhrurrazy M.Kes Sp.S.', 'SORE', NULL, '17.00 - 21.00', NULL, '17.00 - 21.00', NULL, '17.00 - 21.00', NULL),
	(16, 78, 'dr. Fauzia Noor Liani Sp. PD K-EMD FINASIM', 'SORE', NULL, '14:00-16:00', '14:00-16:00', '14:00-16:00', '14:00-16:00', NULL, NULL),
	(17, 45, 'dr. Hermin Sabaruddin Sp. OG', 'SORE', NULL, NULL, '15:00 - 18:00', '15:00 - 18:00', NULL, '15:00 - 18:00', NULL),
	(18, 63, 'dr. Hana Humaira Fachir Sp.N', 'PAGI', NULL, NULL, '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00', NULL, NULL),
	(19, NULL, 'dr. Ikhwanda Angga Lubis', 'PAGI', NULL, '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00'),
	(20, 25, 'dr. Iwan Darma Putra Sp.OG Supsp.FER', 'SORE', NULL, '19.00 - 21.00', NULL, '19.00 - 20.00', NULL, NULL, NULL),
	(21, NULL, 'Dr dr Ika Kustiyah Oktaviyanti M.Kes Sp.PA.', 'SORE', NULL, '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 19.00', '16.00 - 19.00', '16.00 - 18.00'),
	(22, NULL, 'Dr dr Ika Kustiyah Oktaviyanti M.Kes Sp.PA.', 'SORE', NULL, NULL, '11.00 - 17.00', '19.00 - 21.00', '13.00 - 17.00', '11.00 - 17.00', '14.00 - 16.00'),
	(23, 41, 'dr. Intan Yustikasari Sp.JP (K) FIHA FAsCC', 'SORE', NULL, '12.00 - 14.00', '12.00 - 14.00', '12.00 - 14.00', '12.00 - 14.00', '18.00 - 20.00', '18.00 - 20.00'),
	(24, 10, 'dr. Jefry Albari Tribowo Sp. And', 'SORE', NULL, NULL, '17.00 - 19.00', NULL, '17.00 - 19.00', NULL, NULL),
	(25, 4, 'dr. Khalida Fetriyani Ningsih M.Sc Sp.A Subsp. Kardio (K)', 'SORE', NULL, NULL, '14.00 - 18.00', NULL, '14.00 - 18.00', NULL, '14.00 - 19.00'),
	(26, NULL, 'dr. Luthfy Mahatma Hadi Sp.Rad (KI)', 'PAGI', NULL, '00.00-12.00', '00.00-12.00', '00.00-12.00', '00.00-12.00', '00.00-12.00', '00.00-12.00'),
	(27, NULL, 'dr. Luthfy Mahatma Hadi Sp.Rad (KI)', 'SORE', NULL, '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59', '12.01 - 23.59'),
	(28, 48, 'dr. Muhammad Robyanoor Ahyadi Radam Sp.OG(K)-KFM', 'SORE', NULL, NULL, '18:00 - 20:00', NULL, '18:00 - 20:00', NULL, NULL),
	(29, 80, 'dr. Mony Chrysti Rehuli Sembiring Sp.PD', 'PAGI', NULL, '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00'),
	(30, 64, 'dr. Muhammad Welly Dafif Sp.S (K)', 'SORE', NULL, '14.00 - 16.00', NULL, NULL, '14.00 - 17.00', NULL, NULL),
	(31, 67, 'dr. Muhammad Ichwan Noorrafiqi Sp. OT', 'PAGI', NULL, '08:00 - 13:00', '08:00 - 13:00', '08:00 - 13:00', '08:00 - 13:00', '08:00 - 11:00', '08.00 - 11.00'),
	(32, NULL, 'dr. Muhammad Sibra Mallisi', 'SORE', '13:00 - 17:00', '13:00 - 17:00', '13:00 - 17:00', '13:00 - 17:00', '13:00 - 17:00', '13:00 - 17:00', '13:00 - 17:00'),
	(33, NULL, 'dr. Muhammad Sibra Mallisi', 'PAGI', NULL, '07.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00', '08.00 - 12.00'),
	(34, NULL, 'dr. Muh. Siddik Sp.KFR NM (K) FEMG', 'SORE', NULL, '17.00 - 20.00', '14.00 - 17.00', '17.00 - 20.00', '14.00 - 17.00', '17.00 - 20.00', NULL),
	(35, NULL, 'dr. Muhammad Rangga Adhityawarman', 'PAGI', '09:00 - 12:00', '09:00 - 12:00', '09:00 - 12:00', '09:00 - 12:00', '09:00 - 12:00', '09:00 - 12:00', '09:00 - 12:00'),
	(36, 33, 'drg. Mohammad Wildan Sp.BM', 'SORE', NULL, '15:30 - 21:00', '18.00 - 21.00', '15:30 - 21:00', '18:00 - 21:00', '15:30 - 21:00', NULL),
	(37, NULL, 'dr. Muhammad Zulfi Karami Fachir', 'PAGI', NULL, NULL, NULL, NULL, NULL, NULL, '07.00 - 12.00'),
	(38, 50, 'dr. Nadya Sp. OG', 'PAGI', NULL, '08:00 - 14:00', '08:00 - 14:00', '08:00 - 14:00', '08:00 - 14:00', '08:00 - 14:00', NULL),
	(39, 95, 'dr. Noor Riza Perdana Sp.U MARS', 'SORE', NULL, '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00'),
	(40, 54, 'dr. Novia Rizki Amalia Sp. DVE', 'PAGI', NULL, NULL, '10.00 - 12.00', NULL, '10.00 - 12.00', NULL, '10.00 - 12.00'),
	(41, 86, 'dr.Oldi Dedya Sp. PD K-P FINASIM', 'SORE', NULL, NULL, NULL, NULL, NULL, '16.00 - 18.00', NULL),
	(42, 23, 'dr. Oscar Tri Joko Putra.Sp.B.MH.Kes.', 'PAGI', NULL, '08.00 - 14:00', NULL, '09.00 - 12.00', '08.00 - 14.00', NULL, '09.00 - 12.00'),
	(43, 23, 'dr. Oscar Tri Joko Putra.Sp.B.MH.Kes.', 'SORE', NULL, NULL, '15.00 - 20.00', '18.00 - 20.00', '15.00 - 17.00', '15.00 - 20.00', '18.00 - 20.00'),
	(44, 6, 'dr. Pudji Andayani Sp.A(K)', 'SORE', NULL, '18.00 - 21.00', NULL, '18.00 - 21.00', NULL, '18.00 - 21.00', NULL),
	(45, NULL, 'dr. Pirel Aulia Baravia Borneo D.A', 'PAGI', NULL, '07:00 - 13:00', '07:00 - 13:00', '07:00 - 13:00', '07:00 - 13:00', '07:00 - 13:00', '07:00 - 13:00'),
	(46, NULL, 'dr. Pirel Aulia Baravia Borneo D.A', 'SORE', NULL, '15:00 - 18:00', '15:00 - 18:00', '15:00 - 18:00', '15:00 - 18:00', '15:00 - 18:00', '15:00 - 18:00'),
	(47, 59, 'dr. Pardawan Sp. M', 'PAGI', NULL, NULL, '12.00 - 14.00', NULL, '09.00 - 11.00', NULL, NULL),
	(48, 59, 'dr. Pardawan Sp. M', 'SORE', NULL, '19.00 - 21.00', '19.00 - 21.00', '19.00 - 21.00', '19.00 - 21.00', NULL, NULL),
	(49, 42, 'dr. Hj.Putri Kusuma Dewi Sp.JP(K)FIAH FAsCC', 'SORE', NULL, '16.00 - 18.00', '14.00 -17.00', '16.00 - 18.00', '14.00 -17.00', '16.00 - 18.00', NULL),
	(50, 89, 'dr. Putri Endyana Sp.KFR', 'SORE', NULL, '13.00 - 17.00', NULL, '13.00 - 17.00', NULL, '15.00 - 17.00', NULL),
	(51, 7, 'dr. Priyanti Kisworini M.Kes Sp.A (K)', 'PAGI', NULL, '09.00 - 11.00', NULL, '09.00 - 11.00', NULL, '09.00 - 12.00', NULL),
	(52, 7, 'dr. Priyanti Kisworini M.Kes Sp.A (K)', 'SORE', NULL, NULL, '18.00 - 21.00', NULL, '18.00 - 21.00', NULL, '18.00 - 21.00'),
	(53, 92, 'dr. Rusina Hayati Sp.T.H.T.B.K.L Sub.Sp.Onk(K)', 'SORE', NULL, NULL, NULL, NULL, '15.00 - 17.00', '15.00 - 17.00', '15.00 - 17.00'),
	(54, 24, 'dr. R. M. Ardani Fitriansyah SY Sp.B-KBD', 'SORE', NULL, NULL, '15:00 - 17:00', NULL, '15:00 - 17:00', NULL, NULL),
	(55, 35, 'drg. Rachmat Tri Rizky Ananda Sp.Perio', 'SORE', '08:00 - 12:00', NULL, NULL, NULL, '18:00 - 21:00', '15:30 - 21:00', '15:30 - 21:00'),
	(56, 90, 'dr. Ramlah Sp.KFR.', 'SORE', NULL, NULL, '17.00 - 19.00', NULL, '17.00 - 19.00', NULL, '13.30 - 15.30'),
	(57, NULL, 'dr. Riza Pablessi', 'PAGI', NULL, '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00'),
	(58, NULL, 'dr. Riza Pablessi', 'PAGI', NULL, '07:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00', '10:00 - 13:00'),
	(59, NULL, 'dr. Riza Pablessi', 'SORE', NULL, '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00'),
	(60, 14, 'dr. Rohmantuah Trada Purba Sp.An-TI', 'PAGI', NULL, NULL, NULL, NULL, '09.00 - 12.00', NULL, NULL),
	(61, 36, 'drg. Siti Fatimah Narindyah', 'SORE', NULL, '13.00 - 15.30', '13.00 - 18.00', NULL, NULL, '13.00 - 15.30', '15.30 - 21.00'),
	(62, 73, 'dr. Syarifah Fatimah Sp. P', 'SORE', NULL, '19.00 - 21.00', '19.00 - 21.00', '19.00 - 21.00', '16.00 - 20.00', '18.00 - 20.00', NULL),
	(63, 51, 'dr. Syaiful Fadilah Sp.KJ', 'SORE', NULL, '14.00 - 16.00', '14.00 - 16.00', NULL, '14.00 - 16.00', NULL, NULL),
	(64, 60, 'dr. Sulistiyo Rinny Sp. M', 'PAGI', NULL, '08.00 - 14.00', '08.00 - 14.00', NULL, '08.00 - 14.00', '08.00 - 14.00', '08.00 - 14.00'),
	(65, 8, 'dr. Valentina Nicolas Sp.A', 'SORE', NULL, '14:00 - 16:00', NULL, '14:00 - 16:00', NULL, '14:00 - 16:00', NULL),
	(66, 87, 'dr. Wiwit Agung Sri Nur Cahyawati Sp.PD K-GER FINASIM', 'SORE', NULL, '18.30 - 20.30', NULL, '19.00 - 21.00', NULL, '18.30 - 20.30', NULL),
	(67, 68, 'dr. M. Wibowo Ariyanto Sp.OT (K)', 'SORE', NULL, '12.00 - 14.00', NULL, NULL, '15.00 - 17.00', '15.00 - 17.00', NULL),
	(68, NULL, 'dr. Wivina Riza Devi Sp.PK (K).', 'PAGI', '07.00 - 12.00', '07:00 - 12:00', '07:00 - 12:00', '07:00 - 12:00', '07:00 - 12:00', '07:00 - 12:00', '07:00 - 12:00'),
	(69, NULL, 'dr. Wivina Riza Devi Sp.PK (K).', 'SORE', NULL, '13.00 - 18.00', '13.00 - 18.00', '13.00 - 20.00', '13.00 - 20.00', '13.00 - 18.00', '13.00 - 18.00'),
	(70, NULL, 'dr. Wien Vibrizata Farcytianingrum', 'PAGI', NULL, '07:00 12:00', '07:00 12:00', '07:00 12:00', '07:00 12:00', '07:00 12:00', '07:00 12:00'),
	(71, NULL, 'dr. Wien Vibrizata Farcytianingrum', 'SORE', NULL, '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00'),
	(72, NULL, 'dr. Wien Vibrizata Farcytianingrum', 'SORE', NULL, '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00', '13:00 - 19:00'),
	(73, 70, 'Prof. dr. Zairin Noor Sp.OT (K) MM-Surgery', 'SORE', NULL, NULL, '14.00 - 16.00', NULL, '14.00 - 16.00', NULL, NULL),
	(74, NULL, 'dr. Muhammad Rediansyah Pratama', 'SORE', NULL, '13:00 - 16:00', NULL, NULL, NULL, NULL, NULL),
	(75, NULL, 'dr. Muhammad Rediansyah Pratama', 'PAGI', NULL, '07:00 - 12:00', NULL, '07:00 - 12:00', '07:00 - 12:00', NULL, '07:00 - 12:00'),
	(76, NULL, 'dr. Angga Setya Budi', 'PAGI', NULL, '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00', '07.00 - 12.00'),
	(77, 37, 'drg. Dwiki Azhar', 'PAGI', '08:00 - 10:30', '10:30 - 15:30', '08:00 - 15:30', '08:00 - 13:00', '08:00 - 13:30', '08:00 - 13:00', '08:00 - 15:30'),
	(78, 38, 'drg.Gandis Harumi, Sp.Pros', 'SORE', NULL, NULL, '18.00 - 21.00', '15.30 - 21.00', NULL, NULL, NULL),
	(79, 93, 'dr. Hamita SP. THT-KL', 'PAGI', '10.00 - 12.00', '10.00 - 12.00', NULL, '10.00 - 12.00', NULL, NULL, NULL),
	(80, NULL, 'drg. Teguh Hadianto SpKG., M.Kes', 'SORE', NULL, NULL, NULL, NULL, NULL, NULL, '13.00 - 15.30');

-- Dumping structure for table db_profile.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.jobs: ~0 rows (approximately)

-- Dumping structure for table db_profile.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.job_batches: ~0 rows (approximately)

-- Dumping structure for table db_profile.karirs
CREATE TABLE IF NOT EXISTS `karirs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('open','closed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `responsibilities` text COLLATE utf8mb4_unicode_ci,
  `application_deadline` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.karirs: ~5 rows (approximately)
INSERT INTO `karirs` (`id`, `title`, `description`, `location`, `status`, `requirements`, `responsibilities`, `application_deadline`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Perawat ICU', 'Bergabunglah dengan tim perawat ICU kami untuk memberikan perawatan intensif kepada pasien kritis.', 'RS Amanah Medical Centre', '', '• Sarjana Keperawatan (S.Kep)\\n• STR aktif\\n• Sertifikat BLS dan ACLS\\n• Pengalaman minimal 2 tahun di ICU\\n• Kemampuan bekerja dalam tim', '• Memberikan perawatan intensif kepada pasien kritis\\n• Monitoring kondisi pasien 24 jam\\n• Kolaborasi dengan tim medis\\n• Dokumentasi perawatan pasien', '2025-12-17', 1, '2025-11-17 00:19:12', '2025-12-03 22:58:35'),
	(2, 'Administrasi Rekam Medis', 'Posisi untuk mengelola dan memelihara rekam medis pasien dengan akurat dan efisien.', 'RS Amanah Medical Centre', 'closed', '• Diploma/Sarjana Administrasi\\n• Pengalaman di bidang kesehatan minimal 1 tahun\\n• Mahir menggunakan komputer dan software medis\\n• Teliti dan bertanggung jawab', '• Mengelola arsip rekam medis pasien\\n• Memastikan keakuratan data pasien\\n• Menjaga kerahasiaan informasi medis\\n• Koordinasi dengan departemen terkait', '2025-12-02', 1, '2025-11-17 00:19:12', '2025-11-17 00:19:12'),
	(3, 'IT Support', 'Bergabunglah dengan tim IT untuk mendukung infrastruktur teknologi informasi rumah sakit.', 'RS Amanah Medical Centre', 'open', '• Sarjana Teknik Informatika/Sistem Informasi\\n• Pengalaman minimal 2 tahun di bidang IT\\n• Pengetahuan jaringan dan server\\n• Kemampuan troubleshooting hardware/software', '• Maintenance sistem IT rumah sakit\\n• Troubleshooting hardware dan software\\n• Support user dan training\\n• Pengembangan sistem informasi', '2026-01-01', 1, '2025-11-17 00:19:12', '2025-11-17 00:19:12'),
	(4, 'Dokter Umum', 'Posisi untuk dokter umum yang berdedikasi dalam memberikan pelayanan kesehatan primer.', 'RS Amanah Medical Centre', 'open', '• STR dan SIP aktif\\n• Sarjana Kedokteran (S.Ked)\\n• Pengalaman klinis minimal 3 tahun\\n• Kemampuan komunikasi yang baik', '• Pemeriksaan dan diagnosis pasien\\n• Memberikan resep dan terapi\\n• Konsultasi kesehatan\\n• Koordinasi dengan spesialis', '2026-01-16', 1, '2025-11-17 00:19:12', '2025-11-17 00:19:12'),
	(5, 'Apoteker', 'Bergabunglah dengan tim farmasi untuk memastikan pengelolaan obat yang aman dan efektif.', 'RS Amanah Medical Centre', 'open', '• Sarjana Farmasi (S.Farm)\\n• STR aktif\\n• Pengalaman di apotek rumah sakit minimal 2 tahun\\n• Pengetahuan tentang regulasi obat', '• Pengelolaan stok obat\\n• Pelayanan resep\\n• Konsultasi penggunaan obat\\n• Monitoring efek samping obat', '2025-12-17', 1, '2025-11-17 00:19:12', '2025-11-17 00:19:12');

-- Dumping structure for table db_profile.kritik_saran
CREATE TABLE IF NOT EXISTS `kritik_saran` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kritik` text COLLATE utf8mb4_unicode_ci,
  `saran` text COLLATE utf8mb4_unicode_ci,
  `jenis` enum('kritik','saran','keduanya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','dibaca','ditanggapi') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.kritik_saran: ~5 rows (approximately)
INSERT INTO `kritik_saran` (`id`, `nama`, `email`, `telepon`, `kritik`, `saran`, `jenis`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Ahmad Rahman', 'ahmad.rahman@example.com', '081234567890', 'Pelayanan di rumah sakit ini sangat lambat. Saya menunggu lebih dari 2 jam untuk mendapatkan antrian dokter.', 'Harus ada sistem antrian yang lebih efisien dan informasi yang lebih jelas tentang waktu tunggu.', 'keduanya', 'pending', '2025-11-17 00:19:52', '2025-11-17 00:19:52'),
	(2, 'Siti Nurhaliza', 'siti.nurhaliza@example.com', '081987654321', NULL, 'Tambahkan lebih banyak dokter spesialis jantung karena antrian selalu penuh.', 'saran', 'dibaca', '2025-11-17 00:19:52', '2025-11-17 00:19:52'),
	(3, 'Budi Santoso', 'budi.santoso@example.com', NULL, 'Fasilitas parkir sangat terbatas dan sering terjadi kemacetan.', NULL, 'kritik', 'ditanggapi', '2025-11-17 00:19:52', '2025-11-17 00:19:52'),
	(4, 'Maya Sari', 'maya.sari@example.com', '081345678901', 'Ruangan tunggu kurang bersih dan bau.', 'Perbaiki sistem kebersihan dan tambahkan ventilasi yang lebih baik.', 'keduanya', 'pending', '2025-11-17 00:19:52', '2025-11-17 00:19:52'),
	(5, 'Rizki Pratama', 'rizki.pratama@example.com', '081234567891', NULL, 'Buat aplikasi mobile untuk pendaftaran online dan tracking antrian.', 'saran', 'dibaca', '2025-11-17 00:19:52', '2025-11-17 00:19:52');

-- Dumping structure for table db_profile.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.migrations: ~11 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(14, '0001_01_01_000000_create_users_table', 1),
	(15, '0001_01_01_000001_create_cache_table', 1),
	(16, '0001_01_01_000002_create_jobs_table', 1),
	(17, '2025_11_16_012922_create_doctors_table', 1),
	(18, '2025_11_16_020709_create_kritik_saran_table', 1),
	(19, '2025_11_16_041109_create_promos_table', 1),
	(20, '2025_11_16_041448_create_artikels_table', 1),
	(21, '2025_11_16_043921_create_karirs_table', 1),
	(22, '2025_11_16_045319_add_role_to_users_table', 1),
	(23, '2025_11_16_060628_add_username_to_users_table', 1),
	(24, '2025_11_17_045347_create_beds_table', 1);

-- Dumping structure for table db_profile.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_profile.promos
CREATE TABLE IF NOT EXISTS `promos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `valid_until` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.promos: ~8 rows (approximately)
INSERT INTO `promos` (`id`, `title`, `description`, `image`, `price`, `valid_until`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Medical Check-Up Jantung', 'Dapatkan promo MCU Jantung dengan diskon 20% untuk pemeriksaan jantung lengkap di Amanah Medical Centre. Promo berlaku hingga 31 Desember 2025, hubungi Call Centre untuk informasi dan pendaftaran.', '1763707740.jpg', 750000.00, '2025-12-31', 1, '2025-11-17 00:20:12', '2025-11-20 22:49:00'),
	(2, 'Promo Operasi Gigi Bungsu', 'Dapatkan diskon 15% untuk Operasi Gigi Bungsu di Amanah Medical Centre dengan kuota terbatas setiap bulan. Promo berlaku hingga 31 Desember 2025, hubungi Call Centre untuk info lebih lanjut.', '1763705116.jpg', 500000.00, '2025-12-31', 1, '2025-11-17 00:20:12', '2025-11-20 22:42:42'),
	(3, 'Perawatan Gigi & Bedah Mulut', 'Diskon 30% untuk perawatan gigi lengkap, scaling, dan konsultasi spesialis bedah mulut.', '1763705126.jpg', 300000.00, '2025-12-15', 1, '2025-11-17 00:20:12', '2025-11-20 22:05:26'),
	(4, 'Eye Center Check-Up', 'Pemeriksaan mata komprehensif dengan teknologi terkini dan konsultasi spesialis mata.', '1763705140.jpg', 400000.00, '2025-12-20', 1, '2025-11-17 00:20:12', '2025-11-20 22:05:40'),
	(5, 'Cardiovascular Screening', 'Paket screening jantung lengkap termasuk EKG, Echo, dan konsultasi kardiologis.', '1763705153.jpg', 600000.00, '2025-12-25', 1, '2025-11-17 00:20:12', '2025-11-20 22:05:53'),
	(6, 'Maternity Care Package', 'Paket perawatan kehamilan lengkap dari trimester pertama hingga persalinan.', '1763705163.jpg', 2500000.00, '2025-12-31', 1, '2025-11-17 00:20:12', '2025-11-20 22:06:03'),
	(7, 'Tindakan Inseminasi – Langkah Awal Menuju Kehadiran Buah Hati', 'Layanan inseminasi Amanah Fertility Centre hadir untuk membantu pasangan mewujudkan impian memiliki anak dengan prosedur yang aman dan profesional', '1763955559.jpg', 4500000.00, '2025-12-31', 1, '2025-11-23 19:39:19', '2025-11-23 19:39:19'),
	(8, 'Fertility Check – Langkah Awal Merencanakan Kehamilan', 'Pemeriksaan fertilitas di Amanah Fertility Centre membantu pasangan mengetahui kondisi kesehatan reproduksi secara menyeluruh melalui paket Standard dan Premium.', '1763955660.jpg', 2300000.00, '2025-12-31', 1, '2025-11-23 19:41:01', '2025-11-23 19:41:01');

-- Dumping structure for table db_profile.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.sessions: ~2 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('0EGA6doeTQAv5nt3uNEx0Wj4kdgVSIGHTe5xC7vw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEtNaUZ2WGNtUjlkN3Nyb2VtR3FxOGpQWGF5Y2M5dFcwcVpzQno4RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvZmlsZS9wdWJsaWMvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765081479),
	('3V14y6KhntABSshSqm2cnDoUUfxxmhA0s35SrbMB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmZ5dU9LRTdtY09ta2dZSXFHSjRMYlpmemJHRE0wUUlOd3ZpMVBzeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvZmlsZS9wdWJsaWMvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765076274);

-- Dumping structure for table db_profile.used_beds
CREATE TABLE IF NOT EXISTS `used_beds` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `sub_nama` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_profile.used_beds: ~2 rows (approximately)
INSERT INTO `used_beds` (`id`, `nama`, `sub_nama`, `jumlah`) VALUES
	(1, 'EMERALD', 'KELAS STANDARD', '1'),
	(2, 'NICU', 'NICU', '1'),
	(3, 'SAPPHIRE', 'KELAS 1', '1');

-- Dumping structure for table db_profile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_profile.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `username`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin@rsamanah.com', 'admin', 'admin', NULL, '$2y$12$5PUwUY03rmUVEkVkdQLOIe3K76wgMuCce/Psji9Po0..zFHA5Rv0i', NULL, '2025-11-19 20:39:48', '2025-11-19 20:39:48');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
