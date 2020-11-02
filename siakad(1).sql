-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2019 at 09:57 
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irur');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(64) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `fasilitas` varchar(125) NOT NULL,
  `jumlah` varchar(4) NOT NULL,
  `kondisi` varchar(125) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`, `jumlah`, `kondisi`) VALUES
(1, 'Ruang Kelas', '345', 'Sangat Buruk'),
(3, 'Kantin', '20', 'Sangat Bagus'),
(4, 'Kamar Mandi', '23', 'Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `keterangan`, `photo`) VALUES
(1, 'Bersih Bersih Kelas', 'Hari ini 27 November 2019 , siswa-siswi melakukan bersih-bersih massal di sekitar lingkungan kelas.', 'people1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL,
  `nig` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(125) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nig`, `nama_guru`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`) VALUES
(1, '12345890', 'Ahmad Karim', 'Purwokerto', 'Laki-Laki', 'AhmadK@gamil.com', '0826625369', 'food-2085075_128001.png'),
(2, '187329990', 'Ahmad Basir', 'Cihonje', 'Laki-Laki', 'AhmadBasir@gmail.com', '087732583750', 'food-2085075_1280.png');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(1, 'Rizal Fathur Rahman', 'Rizal@gmail.com', 'Mohon Informasi PPDB Online'),
(5, 'Test', 'Test@gmail.com', 'Test'),
(6, 'Rizal', 'rizalfathur998@gmail.com', 'Mohon Kerja Samanya'),
(7, 'Solih Ganteng', 'sholihganteng105@gmail.com', 'Ngewu itu penting');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telp`) VALUES
(1, 'SMK MANUSA', 'Jl. Ajibarang-Bumiayu N0.27 Pekuncen', 'manusa@gmail.com', '(+12) 23667');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(1, 'fas fa-university', 'Penerimaan Siswa Baru  yA', 'Penerimaan Siswa Baru dimulai 19 Agustus 2019											'),
(2, 'fas fa-user', 'Penerimaan Karyawan Baru ', 'Penerimaan Karyawan Baru Dimulai Tanggal 29 Januari 2019						\r\n					'),
(4, 'fas fa-wallet', 'Pembayaran Administrasi Pendaftaran', '						\r\n		Pembayaran Administrasi Pendaftaran Dimulai Tanggal 29 November 2019\r\n\r\n			'),
(5, 'fas fa-door-open', 'Pembukaan Pintu Sekolah', 'Pemasangan Pintu Sekolah , Karena Kita Mau Sekolah Bukan Bertamu											');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(4) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'TKJD', 'TEKNIK KOMPUTER DAN JARINGAN DASAR'),
(2, 'RPL', 'REKAYASA PERANGKAT LUNAK'),
(5, 'TKRO', 'TEKNIK KENDARAAN RINGAN OTOMOTIF'),
(8, 'TAV', 'TEKNIK AUDIO VIDEO'),
(9, 'TBSM', 'TEKNIK BISNIS SEPEDA MOTOR'),
(10, 'TEI', 'TEKNIK ELEKTRONIKA INDUSTRI'),
(11, 'TAB', 'Teknik Alat Berat');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `icon`, `keterangan`) VALUES
(1, 'fas fa-envelope', '(53164) manusa@fax-mail.com'),
(2, 'fab fa-facebook', 'facebook.com/manusa'),
(3, 'fab fa-youtube', 'youtube.com/Manusa12iw'),
(4, 'fab fa-whatsapp', '083844514417');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_ak` int(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `nilai` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_ak`, `nis`, `kode_mapel`, `nilai`) VALUES
(1, 1, '181001', 'MP003', '100'),
(3, 1, '181001', 'MP004', '85'),
(4, 1, '181001', 'MP002', '80'),
(5, 1, '181002', 'MP003', ''),
(6, 1, '181002', 'MP002', ''),
(7, 1, '181001', 'MTK', '80'),
(8, 1, '181001', 'PKN', '100'),
(9, 1, '181002', 'MTK', '89'),
(10, 1, '181002', 'PKN', '87'),
(11, 1, '12334', 'PAI', '85'),
(12, 1, '12334', 'MTK', '78'),
(13, 1, '181001', 'PAI', '45');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kode_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`, `semester`, `nama_prodi`) VALUES
('MTK', 'Matematika', 1, 'Teknik Informatika'),
('PAI', 'Pendidikan Agama Islam', 1, 'Machine Engineering'),
('PKN', 'Pendidikan Kewarganegaraan', 1, 'Machine Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `kode_jurusan` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `kode_jurusan`) VALUES
(3, 'DB', 'Database', 'RPL'),
(4, 'PK', 'Pengkabelan', 'TKJ'),
(5, 'PWPB', 'Pemrograman Web Perangkat Bergerak', 'RPL'),
(6, 'TI', 'Teknik Informatika', 'RPL'),
(7, 'ME', 'Machine Engineering', 'TKRO');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `nama_prodi` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_prodi`, `photo`) VALUES
(10, '181001', 'Akhmad Khasri Abdul Muthallib', 'Glempang,Pekuncen,Banyumas', 'Aris@gmail.com', '087766574654', 'Banyumas', '2019-10-09', 'Laki-Laki', 'Teknik Informatika', 'people4.jpg'),
(11, '181002', 'Firman Hidayatullah', 'Glempang,Pekuncen,Banyumas', 'Firman@gmail.com', '081244569752', 'Banyumas', '2019-10-25', 'Laki-Laki', 'Database', 'people5.jpg'),
(12, '12345', 'Rokuro Enmado', 'Magano', 'kegare@gmail.com', '0896356276278', 'Magan0', '1867-11-14', 'Laki-Laki', 'Database', 'people9.jpg'),
(13, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(14, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(15, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(16, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(17, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(18, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(19, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(20, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(21, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(22, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(23, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(24, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(25, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(26, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(27, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(28, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(29, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(30, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(31, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(32, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(33, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(34, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(35, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(36, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(37, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(38, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(39, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(40, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(41, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(42, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(43, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(44, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(45, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(46, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(47, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(48, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(49, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(50, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(51, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(52, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(53, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(54, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(55, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(56, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(57, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(58, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(59, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(60, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(61, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(62, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(63, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(64, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(65, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(66, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(67, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(68, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(69, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(70, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(71, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(72, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(73, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(74, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(75, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(76, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(77, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(78, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(79, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(80, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(81, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(82, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(83, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(84, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(85, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(86, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(87, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(88, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(89, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(90, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(91, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(92, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(93, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(94, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(95, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(96, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(97, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(98, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(99, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(100, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(101, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(102, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(103, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(104, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(105, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(106, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(107, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(108, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(109, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(110, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(111, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(112, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(113, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(114, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(115, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(116, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(117, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(118, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(119, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(120, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(121, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(122, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(123, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(124, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(125, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(126, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(127, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(128, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(129, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(130, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(131, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(132, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(133, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(134, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(135, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(136, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(137, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(138, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(139, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(140, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(141, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(142, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(143, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(144, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(145, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(146, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(147, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(148, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(149, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(150, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(151, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(152, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(153, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(154, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(155, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg'),
(156, '1810847', 'Rizal Fathur', 'Glempang', 'Rizal@gmail.com', '0838444514417', 'purworejo', '2019-11-27', 'laki-laki', 'Pengkabelan', 'people5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE IF NOT EXISTS `tahun_akademik` (
  `id_thn_ak` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_ak`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2019/2020', 'Ganjil', 'Aktif'),
(2, '2019/2020', 'Genap', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `transkrip_nilai`
--

CREATE TABLE IF NOT EXISTS `transkrip_nilai` (
  `id_transkrip` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transkrip_nilai`
--

INSERT INTO `transkrip_nilai` (`id_transkrip`, `nis`, `kode_mapel`, `nilai`) VALUES
(1, '181001', 'MP003', '100'),
(2, '181001', 'MP004', '85'),
(3, '181001', 'MP002', '80'),
(4, '181001', 'MTK', '80'),
(5, '181001', 'PKN', '100'),
(6, '181001', 'PAI', '45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blockir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blockir`, `id_sessions`) VALUES
(6, 'ADMIN', '706f24650e4960e82513e6722a9918d6', 'Rizal@gmail.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'Basuki', 'afa2fbffbd65c887d2f4be4a8003ea3b', 'Basuki@gmail.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'admin123', 'admin123', 'admin3@gmail.com', 'admin', 'N', ''),
(9, 'testing', 'ae2b1fca515949e5d54fb22b8ed95575', 'testing@gmail.com', 'admin', 'Y', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_ak`);

--
-- Indexes for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  ADD PRIMARY KEY (`id_transkrip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_ak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  MODIFY `id_transkrip` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
