-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Agu 2019 pada 06.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `tanggal_info` date NOT NULL,
  `judul_info` varchar(50) NOT NULL,
  `gambar` int(128) NOT NULL,
  `deskripsi_info` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `tanggal_info`, `judul_info`, `gambar`, `deskripsi_info`) VALUES
(13, '2019-07-08', 'Acara Sukuran', 0, 'Acara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara SukuranAcara Sukuran'),
(14, '2019-07-11', 'angel', 0, 'gshgxjhgxh'),
(15, '2019-07-14', 'JJJJJK', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(16, '2019-07-20', 'UYUI', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(17, '2019-07-07', 'GFGGG', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(18, '2019-07-20', 'DFFF', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(19, '2019-07-26', 'BBBBH', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(20, '2019-07-22', 'FGFGFHGH', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(21, '2019-07-20', 'BNBMNBMBNMBMNBM', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(22, '2019-07-02', 'HFJHFKGH', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(23, '2019-07-13', 'GFGGG', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(24, '2019-07-17', '989UII', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!VV'),
(25, '2019-07-26', 'RRT', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!'),
(26, '2019-07-11', 'DFFF', 0, 'AKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!VVVVVAKU PALING CANTIK TITIK!!!!AKU PALING CANTIK TITIK!!!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `subjek_kontak` varchar(128) NOT NULL,
  `pesan_kontak` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `subjek_kontak`, `pesan_kontak`) VALUES
(1, 'Ikhlasul amal', 'ikhlasul0507@gmail.com', 'Saran', 'kepada pln diharapkan lebih baik lagi pelayanannya !'),
(2, 'Okti Permata sari', 'oktipermatasari00@gmail.com', 'Ucapan Terima kasih', 'kepada pln terima kasih '),
(3, 'h', 'h', 'h', ''),
(4, 'Isannuddin', 'isan@gmail.com', 'Masukan', 'Pesansaya'),
(5, 'ega ', 'wijays9911@gmail.com', 'Mati Lampu', 'kurang terang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kritik_saran`
--

CREATE TABLE `tbl_kritik_saran` (
  `id_kritik_saran` int(10) NOT NULL,
  `tanggal_kritik_saran` date NOT NULL,
  `email_kritik_saran` varchar(50) NOT NULL,
  `nomor_pengunjung` varchar(11) NOT NULL,
  `handphone_kritik_saran` int(15) NOT NULL,
  `nama_kritik_saran` varchar(50) NOT NULL,
  `kritik_saran` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kritik_saran`
--

INSERT INTO `tbl_kritik_saran` (`id_kritik_saran`, `tanggal_kritik_saran`, `email_kritik_saran`, `nomor_pengunjung`, `handphone_kritik_saran`, `nama_kritik_saran`, `kritik_saran`) VALUES
(3, '2019-07-05', 'ikhlasul0507@gmail.com', '', 1234456, 'ibnu', '1qwqwq'),
(7, '2019-07-05', 'gaisa@gmail.com', '', 12345, 'GAISANI', 'KEPADA PLN AGAK LEBIH CANTIK LAGI'),
(18, '2019-07-05', 'Isan@gmail.com', '', 2147483647, 'Muhammad Ikrom', 'pln'),
(19, '2019-07-05', 'oktipermatasari00@gmail.com', '', 1212121, 'Okti Permata Sari', 'pLN ADLAAH TERBAIK'),
(33, '2019-07-10', 'selvi@gmail.com', '', 2147483647, 'Selviani', 'a'),
(34, '2019-07-10', 'selvi@gmail.com', '', 2147483647, 'Selviani', 'pln'),
(35, '2019-07-10', 'selvi@gmail.com', '', 2147483647, 'Selviani', 'hh'),
(36, '2019-07-10', 'selvi@gmail.com', 'pln010', 2147483647, 'Selviani', 'k'),
(37, '2019-07-05', 'Isan@gmail.com', '', 2147483647, 'Muhammad Ikrom', 'j'),
(38, '2019-07-04', 'ega@gmail.com', '', 12345, 'Ega su', 'j'),
(39, '2019-07-04', 'ega@gmail.com', '', 12345, 'Ega su', 'j'),
(40, '2019-07-04', 'Roni@gmail.com', 'pln003', 4567890, 'Roni Putra Sriwijaya', 'pln'),
(41, '2019-07-10', 'maudy@gmail.com', 'pln011', 2147483647, 'Maudy Ayunda', 'pln itu bagus yah'),
(42, '2019-07-17', 'maudi@gmail.com', 'PLN012', 812, 'maudy', 'PERLUU DUIT'),
(43, '2019-07-04', 'daffapasemah@gmail.com', 'PLN015', 2147483647, 'M daffa alghifari pasemah', 'Pelayanaannya sangat bagus sekali, tidak ada kritik dan saran dalam hal ini saya ucapkan terima kasih yaa...'),
(44, '2019-07-09', '', 'PLN016', 0, 'Angel Cantik', 'baguss sekali bosque'),
(45, '2019-07-16', 'angel@yahoo.com', 'PLN017', 2147483647, 'Angel cantik', 'PLN KEREN'),
(46, '2019-07-16', 'azzahcute@yahoo.com', 'PLN018', 2147483647, 'Azzah tiara yasmin', 'PLN PELAYANANNYA BAGUS BANGET'),
(47, '2019-07-13', 'arita@gmail.com', 'PLN019', 2147483647, 'Arita Ramadhani', 'GOKIL ABIS PLN MAH'),
(48, '2019-07-26', 'deagaul@gmail.com', 'PLN020', 2147483647, 'Dhea tamara', 'GAULLL BANGET PLN CUY'),
(49, '2019-07-29', 'egacantiq@gmail.com', 'PLN021', 2147483647, 'Egaa swarta', 'WONDERFULL'),
(50, '2019-07-24', 'amall@gmail.com', 'PLN022', 2147483647, 'amaludin', 'PLN MURMER'),
(51, '2019-07-01', 'lise@gmail.com', 'PLN023', 2147483647, 'Lise laila', 'TINGKATKAN LAGI PELAYANANNYA'),
(52, '2019-10-18', 'kevin@gmail.com', 'PLN024', 2147483647, 'Kevin', 'LUAR BIASA SAYA SANGAT PUASSS'),
(53, '2019-07-07', 'bai@gmail.com', 'PLN025', 2147483647, 'baihaqi', 'PELAYANANNYA WARBIAZZA'),
(54, '2019-07-31', 'firki@gmail.com', 'PLN026', 2147483647, 'm rifki', 'KEREEEEN BOS'),
(55, '2019-07-31', 'firki@gmail.com', 'PLN026', 2147483647, 'm rifki', 'GDHGHJFHJ'),
(56, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'DHCHDVHVCHVHCVHVHCVHVC'),
(57, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'HGFHGHHBVCBBVHGEDGHGJGJJBJBHHHBHBH'),
(58, '2019-07-06', 'noval@gmail.com', 'PLN028', 2147483647, 'noval wahyudi', 'KEZELLL'),
(59, '2019-07-14', 'yuli@gmail.com', 'PLN029', 2147483647, 'yuliana', 'FGHGJHFJKFHJKFDHK'),
(60, '2019-07-31', 'firki@gmail.com', 'PLN026', 2147483647, 'm rifki', 'GVGB GB'),
(61, '2019-07-04', 'daffapasemah@gmail.com', 'PLN015', 2147483647, 'M daffa alghifari pasemah', 'KERENNN'),
(62, '2019-07-16', 'azzahcute@yahoo.com', 'PLN018', 2147483647, 'Azzah tiara yasmin', 'SSXSRTRF'),
(63, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'GTHHJS'),
(64, '2019-07-16', 'angel@yahoo.com', 'PLN017', 2147483647, 'Angel cantik', 'RGTGTHJJ'),
(65, '2019-07-09', '', 'PLN016', 0, 'Angel Cantik', 'KJJFRRJKHJKHKJ'),
(66, '2019-07-13', 'arita@gmail.com', 'PLN019', 2147483647, 'Arita Ramadhani', 'YESSSS'),
(67, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'NOOOOOOOOOOOOOOOOO'),
(68, '2019-07-16', 'azzahcute@yahoo.com', 'PLN018', 2147483647, 'Azzah tiara yasmin', 'YUPPPPPPPPP'),
(69, '2019-07-04', 'daffapasemah@gmail.com', 'PLN015', 2147483647, 'M daffa alghifari pasemah', 'YEWWWWWWWWWW'),
(70, '2019-07-13', 'arita@gmail.com', 'PLN019', 2147483647, 'Arita Ramadhani', 'KKKKKKKKRIKKK'),
(71, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'I DONT CARE'),
(72, '2019-07-31', 'firki@gmail.com', 'PLN026', 2147483647, 'm rifki', 'KEZELLL DECH'),
(73, '2019-07-09', '', 'PLN016', 0, 'Angel Cantik', 'UHUYYYY'),
(74, '2019-07-13', 'arita@gmail.com', 'PLN019', 2147483647, 'Arita Ramadhani', 'JEEEEEEEEEE'),
(75, '2019-07-10', 'herli@gmail.com', 'pln053', 769978787, 'herli', 'pln adalah pilihan terbaik'),
(76, '2019-07-11', 'baiti@gmail.com', 'pln054', 2147483647, 'Batinai', 'amal ganteng'),
(77, '2019-07-11', 'baiti@gmail.com', 'pln054', 2147483647, 'Batinai', 'amal ganteng'),
(78, '2019-07-11', 'endang@gmail.com', 'pln055', 46567890, 'endang', 'pln itu ancur lupa '),
(79, '2019-08-15', 'amal@gmail.com', 'pln056', 3254678, 'ikhlasul amal', 'pln baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `tanggal_pengunjung` date NOT NULL,
  `email_pengunjung` varchar(50) NOT NULL,
  `nomor_pengunjung` varchar(11) NOT NULL,
  `handphone_pengunjung` int(15) NOT NULL,
  `nama_pengunjung` varchar(100) NOT NULL,
  `asal_pengunjung` varchar(100) NOT NULL,
  `jenis_kelamin_pengunjung` varchar(20) NOT NULL,
  `keperluan_pengunjung` varchar(100) NOT NULL,
  `pekerjaan_pengunjung` varchar(110) NOT NULL,
  `tujuan_pengunjung` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `tanggal_pengunjung`, `email_pengunjung`, `nomor_pengunjung`, `handphone_pengunjung`, `nama_pengunjung`, `asal_pengunjung`, `jenis_kelamin_pengunjung`, `keperluan_pengunjung`, `pekerjaan_pengunjung`, `tujuan_pengunjung`) VALUES
(45, '2019-07-10', 'maudy@gmail.com', 'PLN011', 2147483647, 'Maudy Ayunda', 'PLG', 'Laki-laki', 'Magang', 'Ayam', 'Bagian Operasi Distribusi'),
(46, '2019-07-17', 'maudi@gmail.com', 'PLN012', 812, 'maudy', 'banyuwangi', 'Laki-laki', 'show', 'dj', 'Other'),
(47, '2019-07-11', 'AMAL@GMAIL.COM', 'PLN013', 4567890, 'Amal ganeng', 'alsjals', 'Laki-laki', 'sldhk', 'lshdks', 'Bagian Operasi Distribusi'),
(48, '2019-07-10', 'selvi@gmail.com', 'PLN014', 2147483647, 'Selviani', 'muara enim', 'Laki-laki', 'akjsad', 'weerw', 'Bagian SCADA & Telekomunikasi'),
(49, '2019-07-04', 'daffapasemah@gmail.com', 'PLN015', 2147483647, 'M daffa alghifari pasemah', 'Jakarta', 'Laki-laki', 'Meeting ', 'Manager', 'Other'),
(50, '2019-07-09', '', 'PLN016', 0, 'Angel Cantik', '', 'Laki-laki', '', '', 'Bagian Operasi Distribusi'),
(51, '2019-07-16', 'angel@yahoo.com', 'PLN017', 2147483647, 'Angel cantik', 'Jakarta', 'Laki-laki', 'Minta makan', 'Dosen', 'Bagian SCADA & Telekomunikasi'),
(52, '2019-07-16', 'azzahcute@yahoo.com', 'PLN018', 2147483647, 'Azzah tiara yasmin', 'Palembang', 'Perempuan', 'Magang', 'Pelajar', 'Bagian Operasi Distribusi'),
(53, '2019-07-13', 'arita@gmail.com', 'PLN019', 2147483647, 'Arita Ramadhani', 'Bali', 'Perempuan', 'Rapat', 'Mahasiswi', 'Bagian SCADA & Telekomunikasi'),
(54, '2019-07-26', 'deagaul@gmail.com', 'PLN020', 2147483647, 'Dhea tamara', 'muara enim', 'Perempuan', 'magang', 'Dosen', 'Bagian Operasi Distribusi'),
(55, '2019-07-29', 'egacantiq@gmail.com', 'PLN021', 2147483647, 'Egaa swarta', 'Lahat', 'Laki-laki', 'Pemasangan', 'HRD', 'Other'),
(56, '2019-07-24', 'amall@gmail.com', 'PLN022', 2147483647, 'amaludin', 'Pagaralam', 'Laki-laki', 'Makan bareng', 'Teknisi', 'Bagian Operasi Distribusi'),
(57, '2019-07-01', 'lise@gmail.com', 'PLN023', 2147483647, 'Lise laila', 'oki', 'Perempuan', 'bukber', 'Mahasiswa', 'Other'),
(58, '2019-10-18', 'kevin@gmail.com', 'PLN024', 2147483647, 'Kevin', 'Kayu agung', 'Perempuan', 'mencuri data perusahaan', 'Satpam', 'Bagian SCADA & Telekomunikasi'),
(59, '2019-07-07', 'bai@gmail.com', 'PLN025', 2147483647, 'baihaqi', 'padang pariaman', 'Laki-laki', 'ngutangi mas ke pegawai', 'bos emas', 'Other'),
(60, '2019-07-31', 'firki@gmail.com', 'PLN026', 2147483647, 'm rifki', 'jombang', 'Laki-laki', 'bukber', 'teknisi', 'Bagian Operasi Distribusi'),
(61, '2019-07-19', 'farel@gmail.com', 'PLN027', 2147483647, 'farell', 'india', 'Laki-laki', 'masak', 'chef', 'Other'),
(62, '2019-07-06', 'noval@gmail.com', 'PLN028', 2147483647, 'noval wahyudi', 'palembang', 'Laki-laki', 'mukbang', 'gamer', 'Bagian Operasi Distribusi'),
(63, '2019-07-14', 'yuli@gmail.com', 'PLN029', 2147483647, 'yuliana', 'plg', 'Laki-laki', 'makan', 'traveler', 'Bagian Operasi Distribusi'),
(64, '2019-07-19', 'sss@gmail.com', 'PLN030', 2147483647, 'SELVI', 'plg', 'Perempuan', 'bercanda', 'BOS', 'Bagian Operasi Distribusi'),
(65, '2019-07-20', 'rr@gmail.com', 'PLN031', 2147483647, 'hayu', 'malang', 'Perempuan', 'mandi ', 'psg', 'Other'),
(66, '2019-07-24', 'yy@gmail.com', 'PLN032', 2147483647, 'yudha', 'medan', 'Laki-laki', 'bukber', 'karyawan', 'Other'),
(67, '2019-07-07', 'yah@gmail.com', 'PLN033', 2147483647, 'baban', 'bekasi', 'Laki-laki', 'mukbang', 'koki', 'Other'),
(68, '2019-07-28', 'dada@gmail.com', 'PLN034', 2147483647, 'Dadang', 'makasar', 'Laki-laki', 'absensi', 'koki', 'Other'),
(69, '2019-07-13', 'vv@gmail.com', 'PLN035', 2147483647, 'juju', 'palembang', 'Laki-laki', 'magang', 'pembantu ', 'Other'),
(70, '2019-07-29', 'tata@gmail.com', 'PLN036', 2147483647, 'yayak', 'malang', 'Perempuan', 'makan', 'wo', 'Other'),
(71, '2019-07-04', 'yaa@gmail.com', 'PLN037', 2147483647, 'lalak', 'indramayu', 'Perempuan', 'mencari jodoh', 'bencong salon', 'Bagian SCADA & Telekomunikasi'),
(72, '2019-07-26', 'yub@gmail.com', 'PLN038', 2147483647, 'yayang', 'magelang', 'Perempuan', 'makan', 'kestari', 'Bagian Operasi Distribusi'),
(73, '2019-07-03', 'ffh@gmail.com', 'PLN039', 2147483647, 'tata', 'oki', 'Perempuan', 'mandi', 'jualan sayur', 'Bagian Operasi Distribusi'),
(74, '2019-07-14', 'hh@gmail.com', 'PLN040', 2147483647, 'living', 'medan', 'Laki-laki', 'mukbang', 'ojol', 'Bagian Operasi Distribusi'),
(75, '2019-07-13', 'hahah@gmail.com', 'PLN041', 2147483647, 'yuyun', 'oku', 'Perempuan', 'magang', 'tni', 'Bagian Operasi Distribusi'),
(76, '2019-07-19', 'cc@gmail.com', 'PLN042', 2147483647, 'tantan', 'pekanbaru', 'Perempuan', 'magang', 'koki', 'Bagian Operasi Distribusi'),
(77, '2019-07-22', 'rr@gmail.com', 'PLN043', 2147483647, 'rere', 'jakarta', 'Laki-laki', 'magang', 'baslon', 'Bagian Operasi Distribusi'),
(78, '2019-07-04', 'tt@gmail.com', 'PLN044', 657787678, 'wewen', 'bandung', 'Perempuan', 'bisnis', 'ustazah', 'Bagian SCADA & Telekomunikasi'),
(79, '2019-07-18', 'bb@gmail.com', 'PLN045', 2147483647, 'zazak', 'pariaman', 'Perempuan', 'mengganggu', 'pelakor', 'Bagian SCADA & Telekomunikasi'),
(80, '2019-07-26', 'tt@gmail.com', 'PLN046', 2147483647, 'yuyuk', 'lampung', 'Laki-laki', 'minjem uang', 'polisi', 'Bagian SCADA & Telekomunikasi'),
(81, '2019-07-30', 'tr@gmail.com', 'PLN047', 2147483647, 'tatan', 'medan', 'Laki-laki', 'ke satpam', 'pns', 'Bagian SCADA & Telekomunikasi'),
(82, '2019-07-12', 'bb@gmail.com', 'PLN048', 2147483647, 'nana', 'martapuro', 'Laki-laki', 'minjem duit', 'tkw', 'Bagian SCADA & Telekomunikasi'),
(83, '2019-07-18', 'bb@gmail.com', 'PLN049', 2147483647, 'nini', 'pariaman', 'Laki-laki', 'magang', 'twi', 'Bagian SCADA & Telekomunikasi'),
(84, '2019-07-28', 'qq@gmail.com', 'PLN050', 2147483647, 'yuyun', 'bandung', 'Perempuan', 'magang', 'kajur', 'Bagian SCADA & Telekomunikasi'),
(85, '2019-07-19', 'gg@gmail.com', 'PLN051', 2147483647, 'gilang', 'jakarta', 'Laki-laki', 'konser', 'artis', 'Bagian SCADA & Telekomunikasi'),
(86, '2019-07-26', 'tt@gmail.com', 'PLN052', 2147483647, 'fitri', 'mandarin', 'Perempuan', 'kontrak', 'penyanyi', 'Bagian SCADA & Telekomunikasi'),
(87, '2019-07-10', 'herli@gmail.com', 'PLN053', 769978787, 'herli', 'hotsot', 'Laki-laki', 'anter seblak', 'tukang seblak', 'Bagian Operasi Distribusi'),
(88, '2019-07-11', 'baiti@gmail.com', 'PLN054', 2147483647, 'Batinai', 'lemabang', 'Perempuan', 'mancing', 'tukang pancing', 'Bagian SCADA & Telekomunikasi'),
(89, '2019-08-12', 'angel@gmail.com', 'PLN055', 34576890, 'angel', 'pagralam', 'Perempuan', 'kakskd', 'adsads', 'Bagian SCADA & Telekomunikasi'),
(90, '2019-08-15', 'amal@gmail.com', 'PLN056', 3254678, 'ikhlasul amal', 'polsri', 'Laki-laki', 'mengurus magang', 'mahasiswa', 'Bagian Operasi Distribusi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nim_user` int(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `nim_user`, `email_user`, `password_user`) VALUES
(1, 'amal', 123, 'amal@gmail.com', '123'),
(2, 'angel', 12345, 'angel@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`),
  ADD UNIQUE KEY `email_kontak` (`email_kontak`);

--
-- Indexes for table `tbl_kritik_saran`
--
ALTER TABLE `tbl_kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`),
  ADD UNIQUE KEY `id_kritik_saran` (`id_kritik_saran`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`,`nomor_pengunjung`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_kritik_saran`
--
ALTER TABLE `tbl_kritik_saran`
  MODIFY `id_kritik_saran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
