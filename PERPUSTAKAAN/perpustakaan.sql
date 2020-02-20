-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 03:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nim`, `nama`, `jurusan`, `kelas`) VALUES
(1800001, 'sukirman hendra', 'Teknik Informatika', 'rpl 1 a'),
(1800002, 'hendra sukirman', 'Teknik Informatika', 'ti 1 a'),
(1800003, 'cecep markucep', 'Teknik Pendingin dan Tata Udara', 'tp 1 a'),
(1800004, 'coba 1', 'Keperawatan', 'keperawatan jeh'),
(1800005, 'coba 2', 'Keperawatan', 'keperawatan 2'),
(1800006, 'coba 3', 'Keperawatan', 'keperawatan 3'),
(1800007, 'coba 4', 'Keperawatan', 'keperawatan 4'),
(1805009, 'Dimas Adriansyah Pamungkas', 'Teknik Informatika', 'D4 RPL 2A'),
(1805015, 'ilham', 'Teknik Informatika', 'D4 RPL 2A'),
(1805025, 'Maulani', 'Teknik Informatika', 'D4'),
(1805028, 'Wahyu Ramadhan', 'Teknik Informatika', 'D4 - Rekayasa Perangkat Lunak'),
(1805029, 'Yoga Rizki Pratama', 'Teknik Informatika', 'D4 - Rekayasa Perangkat Lunak'),
(1905029, 'Yogi Kusumo Diningrat', 'Teknik Mesin', 'TM 1 B');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_buku` int(100) NOT NULL,
  `sinopsis` varchar(300) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `jumlah_buku`, `sinopsis`, `penerbit`, `pengarang`, `tahun_buku`) VALUES
(0, 'Harimau', 33, 'harimau yang lapar', 'Gramedia', 'maung', 1999),
(2, 'judul2', 2, 'sinopsis2', 'penerbit2', 'pengarang2', 2002),
(11, 'senja', 20, 'sinopsis buku senja', 'gramedia', 'senja setiawan', 1969);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_transaksi` int(20) NOT NULL,
  `nim` int(20) NOT NULL,
  `id` int(11) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pustakawan`
--

CREATE TABLE `pustakawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pustakawan`
--

INSERT INTO `pustakawan` (`id`, `nama`, `jk`, `alamat`) VALUES
(3, 'sdsdsd', 'Laki-laki', 'hehe'),
(4, 'Aldini', 'Perempuan', 'Majalengka'),
(5, 'wwdwd', 'Laki-laki', 'wwdwd'),
(6, 'yogagirngg', 'Laki-laki', 'girrngg'),
(7, 'aalalalallalal', 'Laki-laki', 'aaaaaa'),
(8, 'pustakawan1', 'Laki-laki', 'celeng');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Yoga Rizki Pratama', 'yoga', 'yoga123', 'pustakawan'),
(2, 'Maulana Ilham Ginanjar', 'ilham', 'ilham123', 'anggota'),
(3, 'Maulana Singgih Iskandar', 'singgih', 'singgih123', 'anggota'),
(4, 'wwdwd', 'hehe', 'hehe123', 'anggota'),
(5, 'yogagirngg', 'yone', 'y1', 'anggota'),
(6, 'Yogi Kusumo Diningrat', '1905029', 'polindra123', 'anggota'),
(7, 'aalalalallalal', 'arara', 'arara123', 'pustakawan'),
(8, 'yoga', '1805029', 'hehe123', 'pustakawan'),
(9, 'Yogax', '18050297', 'polindra123', 'anggota'),
(10, 'pustakawan1', 'pustakawan', '111', 'pustakawan'),
(11, 'senja', 'senja', 'senja123', 'pustakawan'),
(12, 'senja', '18000089', 'polindra123', 'anggota'),
(13, 'Maulana', '1805025', 'polindra123', 'anggota'),
(14, 'Maulana', '1805025', 'polindra123', 'anggota'),
(15, 'ilham', '1805015', 'polindra123', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `relasi_buku` (`id_buku`),
  ADD KEY `relasi_nim` (`nim`),
  ADD KEY `id` (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pustakawan`
--
ALTER TABLE `pustakawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pustakawan` (`id`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `anggota` (`nim`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
