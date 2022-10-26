-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for stipram_pasca
CREATE DATABASE IF NOT EXISTS `stipram_pasca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stipram_pasca`;

-- Dumping structure for table stipram_pasca.facillities
CREATE TABLE IF NOT EXISTS `facillities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `facillity_type_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.facillities: ~0 rows (approximately)
/*!40000 ALTER TABLE `facillities` DISABLE KEYS */;
/*!40000 ALTER TABLE `facillities` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.facillities_image
CREATE TABLE IF NOT EXISTS `facillities_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facillities_id` int(11) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.facillities_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `facillities_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `facillities_image` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.facillities_type
CREATE TABLE IF NOT EXISTS `facillities_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.facillities_type: ~4 rows (approximately)
/*!40000 ALTER TABLE `facillities_type` DISABLE KEYS */;
INSERT INTO `facillities_type` (`id`, `name`) VALUES
	(1, 'Gedung'),
	(2, 'Interior'),
	(3, 'Transportasi'),
	(4, 'Hotel'),
	(5, 'Perpustakaan');
/*!40000 ALTER TABLE `facillities_type` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `menu_id` tinyint(4) DEFAULT NULL,
  `sub_menu_id` tinyint(4) DEFAULT NULL,
  `segment` varchar(50) NOT NULL DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.menu: ~39 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `menu_id`, `sub_menu_id`, `segment`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, NULL, NULL, 'beranda', 'Beranda', '', '', 1),
	(2, NULL, NULL, 'akademik', 'Akademik', '', '', 1),
	(3, NULL, NULL, 'Tentang PPS', 'Tentang PPS', '', '', 1),
	(4, NULL, NULL, 'Program studi', 'Program Studi', '', '', 1),
	(5, NULL, NULL, 'Mahasiswa', 'Mahasiswa', '', '', 1),
	(6, NULL, NULL, 'Pendaftaran', 'Pendaftaran', '', '', 1),
	(7, NULL, NULL, 'Informasi', 'Informasi', '', '', 1),
	(8, NULL, NULL, 'Galery', 'Galery', '', '', 1),
	(9, 2, NULL, 'Jadwal Perkuliahan', 'Jadwal Perkuliahan', '', '', 1),
	(10, 2, NULL, 'Jadwal Ujian Semester', 'Jadwal Ujian Smester', '', '', 1),
	(11, 2, NULL, 'Jadwal Seminar Tesis', 'Jadwal Seminar Tesis', '', '', 1),
	(12, 2, NULL, 'RPS', 'RPS', '', '', 1),
	(13, 2, NULL, 'Ejurnal STIPRAM', 'Ejurnal STIPRAM', '', '', 1),
	(14, 3, NULL, 'Visi & Misi', 'Visi & Misi', '', '', 1),
	(15, 3, NULL, 'Tentang PPS Stipram', 'Tentang PPS Stipram', '', '', 1),
	(16, 3, NULL, 'Akreditas', 'Akreditas', '', '', 1),
	(17, 3, NULL, 'Staf', 'Staf', '', '', 1),
	(18, 3, 17, 'Pengelola', 'Pengelola', '', '', 1),
	(19, 3, 17, 'Kepakaran', 'Data Dosen dan Kepakaran', '', '', 1),
	(20, 3, NULL, 'Sarana & Prasarana', 'Sarana & Prasarana', '', '', 1),
	(21, 3, NULL, 'Prestasi Mahasiswa', 'Prestasi Mahasiswa', '', '', 1),
	(22, 3, NULL, 'Artikel', 'Artikel', '', '', 1),
	(23, 4, NULL, 'Magister', 'Program Magister', '', '', 1),
	(24, 4, NULL, 'Doktor', 'Program Doktor', '', '', 1),
	(25, 5, NULL, 'Pengajuan Topik Tesis', 'Pengajuan Topik Tesis', '', '', 1),
	(26, 5, NULL, 'Pengajuan Topik Disertasi', 'Pengajuan Topik Disertasi', '', '', 1),
	(27, 5, NULL, 'Usulan Dosen Pembimbing Tesis', 'Usulan Dosen Pembimbing Tesis', '', '', 1),
	(28, 5, NULL, 'Usulan Dosen Pembimbing Disertasi', 'Usulan Dosen Pembimbing Disertasi', '', '', 1),
	(29, 5, NULL, 'Form Evaluasi Perkuliahan', 'Form Evaluasi Perkuliahan', '', '', 1),
	(30, 5, NULL, 'Layanan Aduan', 'Layanan Aduan', '', '', 1),
	(31, 6, NULL, ' Biaya Kuliah', ' Biaya Kuliah', '', '', 1),
	(32, 6, NULL, 'Pendaftaran Seminar', 'Pendaftaran Seminar', '', '', 1),
	(33, 6, NULL, 'Pendaftaran', 'Pendaftaran', '', '', 1),
	(34, 7, NULL, 'Informasi Publik STIPRAM', 'Informasi Publik STIPRAM', '', '', 1),
	(35, 7, NULL, 'Berita', 'Berita', '', '', 1),
	(36, 7, NULL, 'Agenda', 'Agenda', '', '', 1),
	(37, 7, NULL, 'Pengumuman', 'Pengumuman', '', '', 1),
	(38, 8, NULL, 'Dokumentasi', 'Dokumentasi', '', '', 1),
	(39, 8, NULL, 'Video', 'Video', '', '', 1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) DEFAULT NULL,
  `detail` int(11) DEFAULT NULL,
  `url_image` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.staffs
CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `golongan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `kepakaran` varchar(150) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.staffs: ~18 rows (approximately)
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
INSERT INTO `staffs` (`id`, `name`, `golongan`, `jabatan`, `kepakaran`, `image`) VALUES
	(1, 'Prof. Dr. Azril Azahari, Ph.D', '', '', 'Pendidikan Pariwisata', '4.jpg'),
	(2, 'Prof. John JOI Ihalauw, Ph.D', '', '', 'Manajemen Pariwisata', '6.jpg'),
	(3, 'Dr. Tony Hendratono, M.M.', '', '', 'Manajemen Operasional Pariwisata', '8.jpg'),
	(4, 'Dr. Suhendroyono, M.M., M.M.Par, CHE', '', '', 'Arsitektur, Penataan Ruang, Destinasi Wisata', ''),
	(5, 'Dr. Damiasih, M.M., M.M.Par, CHE', '', '', 'Bahasa Perancis, Manajemen Pariwisata', '9.jpg'),
	(6, 'Dr. Andin Rusmini, AM.Keb., S.H., M.H., CHE', '', '', 'Hukum Bisnis', ''),
	(7, 'Dr. Sarbini, M.Phil', '', '', 'Filsafat Pariwisata', '3.jpg'),
	(8, 'Dr. Amiluhur Soeroso, M.M., M.Sc, CHE', '', '', 'Ekowisata, Manajemen Warisan Alam dan Budaya, Ekonomi Budaya', '10.jpg'),
	(9, 'Dr. Nining Yuniati, S.S., M.M.', '', '', 'MICE, Arkeologi, Heritage Management', '1.jpg'),
	(10, 'Dr. Nur Widiyanto, M.A', '', '', 'Antropologi, Kebudayaan', '2.jpg'),
	(11, 'Tutut Heriawan Ph.D', '', '', 'Matematika, Filsafat', ''),
	(12, 'Dr. (Cand) Tarsisius Catur Budi Nugroho SE., MM', '', '', 'Manajemen Organisasi, Manajemen Sumberdaya Manusia Pariwisata', ''),
	(13, 'Dr. (Cand.) Primantoro S.Si,M.Sc.', '', '', 'Penataan Ruang, Pengembangan wilayah, Destinasi Wisata', ''),
	(14, 'Dr. (cand) Hani Ernawati SE., MBA', '', '', 'Manajemen Pemasaran Pariwisata', ''),
	(15, 'Dr. (cand) Pipin Kusumawati S.Pi., M.Biotech', '', '', 'Gastronomy Tourism, Ilmu pangan', ''),
	(16, 'Dr.Ir.Aldi Wisnumurti Sarwono S.S., M.Hum', '', '', 'Bahasa Inggris, Bangunan Sipil, Manajemen Pariwisata', ''),
	(17, 'Dr. Lastiani Warih Wulandari, S.E.,M.M', '', '', 'SPA, Pariwasata berbasis masyarakat', ''),
	(18, 'Dr. Dwiyono Rudi Susanto, S.E., M.M., CHE', '', '', 'Manajemen Keuangan, Manajemen Pariwisata', '11.jpg');
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;

-- Dumping structure for table stipram_pasca.testimony
CREATE TABLE IF NOT EXISTS `testimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) DEFAULT NULL,
  `testimony` int(11) DEFAULT NULL,
  `image` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stipram_pasca.testimony: ~0 rows (approximately)
/*!40000 ALTER TABLE `testimony` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimony` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
