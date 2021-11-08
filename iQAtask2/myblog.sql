-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2010 at 12:13 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `Nama` text NOT NULL,
  `Password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Nama`, `Password`, `email`) VALUES
('wardana', '7bf2fdbe4e28bf4a7ea60e6d0e2af546', 'wbanjarish@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblartikel`
--

CREATE TABLE IF NOT EXISTS `tblartikel` (
  `Judul` text NOT NULL,
  `Isi` text NOT NULL,
  `Tgl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblartikel`
--

INSERT INTO `tblartikel` (`Judul`, `Isi`, `Tgl`) VALUES
('PHP', 'Dalam dunia pemrograman website ada banyak sekali bahasa pemrograman yang bisa digunakan. Salah satu bahasa pemrograman yang sangat terkenal dan banyak sekali digunakan oleh para pembuat website adalah PHP (akronimnya: Hypertext Preprocessor) dengannya website menjadi dinamis (karena kandungan website tersebut dapat berbasis database).', '2010-06-26'),
('EVALUASI PROYEK', 'Proyek adalah suatu rangkaian aktivitas yang direncanakan untuk mendapatkan benefit/manfaat dalam jangka waktu tertentu.\r\nStudi kelayakan dan evaluasi proyek bertujuan menilai kelayakan suatu gagasan usaha/proyek. Hasil penilaian digunakan sebagai bahan pertimbangan bagi pengambil keputusan untuk menolak atau menerima usaha/proyek yang direncanakan.', '2010-03-03'),
('Sistem Informasi Keuangan', 'Subsistem CBIS yang memberikan informasi kepada orang di dalam / di luar perusahaan mengenai masalah keuangan perusahaan\r\nInformasi berbentuk laporan periodik, khusus, hasil simulasi matematika, komunikasi elektronik, dan saran dari sistem pakar\r\nBerisi 3 subsistem input dan 3 subsistem output\r\nSubsistem output berisi berbegai jenis perangkat lunak yang mengubah isi database menjadi informasi\r\n', '2010-03-03'),
('Analis Sistem', 'Menurut Yogiyanto (1995) analisis sistem adalah penguraian dari suatu sistem informasi yang utuh kedalam bagian?bagian komponennya dengan maksud untuk mengidentifikasikan dan mengevaluasi permasalahan, kesempatan, hambatan yang terjadi dan kebutuhan yang diharapkan sehingga dapat diusulkan perbaikan.\r\nAnalis sistem secara sistematis menilai bagaimana fungsi bisnis dengan cara mengamati proses input dan pengolahan data serta proses output informasi untuk membantu peningkatan proses organisasional.', '2010-03-03'),
('SISTEM KOMPUTER', 'Supaya komputer dapat digunakan untuk mengolah data, maka harus berbentuk suatu sistem yang disebut dengan sistem komputer. Secara umum, sistem terdiri dari elemen?elemen yang saling berhubungan membentuk satu kesatuan untuk melaksanakan suatu tujuan pokok dari sistem tersebut.\r\nTujuan pokok dari sistem komputer adalah mengolah data untuk menghasilkan informasi sehingga perlu didukung oleh elemen?elemen yang terdiri dari perangkat keras (hardware), perangkat lunak (software), dan brainware. Perangkat keras adalah peralatan komputer itu sendiri, perangkat lunak adalah program yang berisi perintah?perintah untuk melakukan proses tertentu, dan brainware adalah manusia yang terlibat di dalam mengoperasikan serta mengatur sistem komputer.\r\nKetiga elemen sistem komputer tersebut harus saling berhubungan dan membentuk satu kesatuan. Perangkat keras tanpa perangkat lunak tidak akan berarti apa?apa, hanya berupa benda mati. Kedua perangkat keras dan lunak juga tidak dapat berfungsi jika tidak ada manusia yang mengoperasikannya.', '2010-03-03'),
('KOMPUTER', 'Komputer berasal dari bahasa latin computare yang mengandung arti menghitung. Karena luasnya bidang garapan ilmu komputer, para pakar dan peneliti sedikit berbeda dalam mendefinisikan termininologi komputer.\r\nMenurut Hamacher , komputer adalah mesin penghitung elektronik yang cepat dan dapat menerima informasi input digital, kemudian memprosesnya sesuai dengan program yang tersimpan di memorinya, dan menghasilkan output berupa informasi.\r\nMenurut Blissmer , komputer adalah suatu alat elektonik yang mampu melakukan beberapa tugas sebagai berikut:\r\n? menerima input\r\n? memproses input tadi sesuai dengan programnya', '2010-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE IF NOT EXISTS `tblgallery` (
  `Judul` text NOT NULL,
  `Isi` text NOT NULL,
  `nFile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`Judul`, `Isi`, `nFile`) VALUES
('Avatar', 'The matrix', 'avatar.jpg'),
('Petir', 'Wallpaper Petir', 'ElectrifyXP.jpg'),
('Buih', 'Wallpaper Buih', 'Sept05_1280.jpg'),
('Gadis', 'Senyummu itu....', 'artwork4-1600x1200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblguest`
--

CREATE TABLE IF NOT EXISTS `tblguest` (
  `Nama` text NOT NULL,
  `Email` text NOT NULL,
  `Komentar` text NOT NULL,
  `Tgl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguest`
--

INSERT INTO `tblguest` (`Nama`, `Email`, `Komentar`, `Tgl`) VALUES
('Nazela', 'notemail@yahoo.com', 'Kita lihat ya', '2010-03-24'),
('Ivan', 'Ivan3d@yahoo.com', 'Ikutan testing juga ah', '2010-03-22'),
('Wardana', 'Wbanjarish@yahoo.com', 'Ini hanya testing bukutamu dengan fasilitas pagination, captcha dan validasi form', '2010-03-18'),
('Endi Maulana', 'EndiBest@yahoo.com', 'Coba ikut ya', '2010-03-23'),
('''Inayah''', '''Inayahbaby@yahoo.com''', '''Minta susu''', '2010-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbllink`
--

CREATE TABLE IF NOT EXISTS `tbllink` (
  `Judul` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllink`
--

INSERT INTO `tbllink` (`Judul`, `Link`) VALUES
('Yahoo.com', 'www.yahoo.com'),
('Google.com', 'www.google.com'),
('Elexmedia', 'www.elexmedia.co.id');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
