-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2017 pada 03.48
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bayarin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `nama` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `noktp` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `saldo` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`nama`, `email`, `id`, `password`, `nohp`, `noktp`, `alamat`, `saldo`) VALUES
(NULL, 'rizqiphd@g', 'mmmm', '123456', '081226269692', NULL, NULL, 0),
(NULL, 'rizqiphd@gmail.com', 'rizqiphd', '123456', '081226269692', NULL, NULL, 150000),
(NULL, 'rizqisupernova@gmail', 'rizqisupernova', '123456', '081226269692', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_voucher`
--

CREATE TABLE `tb_voucher` (
  `kode` varchar(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_voucher`
--

INSERT INTO `tb_voucher` (`kode`, `nominal`, `status`) VALUES
('', 0, NULL),
('0000', 90000, NULL),
('123456', 50000, NULL),
('akuBisa', 100000, NULL),
('akudewe', 20000, NULL),
('bayarRumah', 100000, NULL),
('buatJajan', 100000, NULL),
('buatMakan', 100000, NULL),
('buatManul', 90000, NULL),
('buatMingguIni', 100000, NULL),
('buatSaya', 120000, NULL),
('buatU', 100000, NULL),
('buatUmum', 100000, NULL),
('cobaVoucher', 100000, NULL),
('jualan', 100000, NULL),
('jualSepatu', 150000, NULL),
('seratusribu', 100000, NULL),
('uangMuka', 100000, NULL),
('uangSaku', 100000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_voucher`
--
ALTER TABLE `tb_voucher`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
