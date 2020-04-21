-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2019 pada 17.36
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtd_bayar`
--

CREATE TABLE IF NOT EXISTS `mtd_bayar` (
  `kd_mtd` varchar(15) NOT NULL,
  `pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mtd_bayar`
--

INSERT INTO `mtd_bayar` (`kd_mtd`, `pembayaran`) VALUES
('G01', 'Alfamart'),
('V02', 'BCA'),
('V01', 'BNI'),
('G02', 'Indomaret'),
('V03', 'Mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbberangkat`
--

CREATE TABLE IF NOT EXISTS `tbberangkat` (
  `rencent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berangkat` varchar(15) NOT NULL,
  `id_tujuan` varchar(15) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jml_tiket` int(5) NOT NULL,
  `id_rand` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbberangkat`
--

INSERT INTO `tbberangkat` (`rencent`, `id_berangkat`, `id_tujuan`, `tgl_berangkat`, `jml_tiket`, `id_rand`) VALUES
('2019-07-02 15:11:06', 'BK0704', 'BK', '2019-07-04', 2, '891345'),
('2019-07-02 15:11:42', 'BK0704', 'BK', '2019-07-04', 3, '576943'),
('2019-07-02 15:12:30', 'BK0704', 'BK', '2019-07-04', 3, '352603');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbooking`
--

CREATE TABLE IF NOT EXISTS `tbbooking` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_tiket` varchar(15) NOT NULL,
  `kode_booking` varchar(15) NOT NULL,
  `nama_pembooking` varchar(25) NOT NULL,
  `nama_penumpang` varchar(25) NOT NULL,
  `nama_penumpang2` varchar(25) NOT NULL,
  `nama_penumpang3` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `id_rand` varchar(15) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbooking`
--

INSERT INTO `tbbooking` (`waktu`, `id_tiket`, `kode_booking`, `nama_pembooking`, `nama_penumpang`, `nama_penumpang2`, `nama_penumpang3`, `no_hp`, `email`, `id_rand`, `jam`) VALUES
('2019-07-02 15:11:22', 'BK070407', 'BK070407ENG911', 'Aceng', 'Aceng', 'Inyong', '', '085000000911', 'acenganceng@gmail.com', '891345', '07:00:00'),
('2019-07-02 15:12:03', 'BK070407', 'BK070407DUY999', 'Duduy', 'Duduy', 'Jajad', 'Jamed', '012345678999', 'duduy.ahoy@gmail.com', '576943', '07:00:00'),
('2019-07-02 15:15:32', 'BK070407', 'BK070407KIR891', 'Bokir', 'Bokir', 'Oteng', 'Odin', '081234567891', 'borrr@gmail.com', '352603', '07:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdriver`
--

CREATE TABLE IF NOT EXISTS `tbdriver` (
  `nama_driver` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbdriver`
--

INSERT INTO `tbdriver` (`nama_driver`, `username`) VALUES
('Albert', 'al1234'),
('Barry', 'br1234'),
('Dony', 'do1234'),
('Kepala', 'kp1234'),
('Roger', 'rg1234'),
('Steward', 'st1234'),
('Theo', 'th1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjam`
--

CREATE TABLE IF NOT EXISTS `tbjam` (
  `id_jam` varchar(15) NOT NULL,
  `jam` time NOT NULL,
  `pilih_jam` int(2) NOT NULL,
  `indexx` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjam`
--

INSERT INTO `tbjam` (`id_jam`, `jam`, `pilih_jam`, `indexx`) VALUES
('07', '07:00:00', 1, 1),
('09', '09:00:00', 2, 1),
('11', '11:00:00', 1, 2),
('13', '13:00:00', 2, 2),
('16', '16:00:00', 1, 3),
('19', '19:00:00', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbketersediaan`
--

CREATE TABLE IF NOT EXISTS `tbketersediaan` (
  `id` int(11) NOT NULL,
  `id_tiket` varchar(15) NOT NULL,
  `id_jam` varchar(15) NOT NULL,
  `id_berangkat` varchar(15) NOT NULL,
  `jml_tiket` int(5) NOT NULL,
  `id_rand` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbketersediaan`
--

INSERT INTO `tbketersediaan` (`id`, `id_tiket`, `id_jam`, `id_berangkat`, `jml_tiket`, `id_rand`) VALUES
(163, 'BK070407', '07', 'BK0704', 2, '891345'),
(164, 'BK070407', '07', 'BK0704', 3, '576943'),
(165, 'BK070407', '07', 'BK0704', 3, '352603');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkota`
--

CREATE TABLE IF NOT EXISTS `tbkota` (
  `id` int(15) NOT NULL,
  `kota` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkota`
--

INSERT INTO `tbkota` (`id`, `kota`) VALUES
(1, 'Bandung'),
(3, 'Cianjur'),
(2, 'Jakarta'),
(4, 'Karawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkursi`
--

CREATE TABLE IF NOT EXISTS `tbkursi` (
  `id_kursi` varchar(15) NOT NULL,
  `id_tiket` varchar(15) NOT NULL,
  `no_kursi` int(5) NOT NULL,
  `id_rand` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkursi`
--

INSERT INTO `tbkursi` (`id_kursi`, `id_tiket`, `no_kursi`, `id_rand`) VALUES
('BK0704071', 'BK070407', 1, '891345'),
('BK0704072', 'BK070407', 2, '891345'),
('BK0704073', 'BK070407', 3, '576943'),
('BK0704074', 'BK070407', 4, '576943'),
('BK0704075', 'BK070407', 5, '576943'),
('BK0704076', 'BK070407', 6, '352603'),
('BK0704077', 'BK070407', 7, '352603'),
('BK0704078', 'BK070407', 8, '352603');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin`
--

CREATE TABLE IF NOT EXISTS `tblogin` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(25) NOT NULL,
  `id_login` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblogin`
--

INSERT INTO `tblogin` (`username`, `paswd`, `id_login`) VALUES
('al1234', 'driver1234', 'driver'),
('br1234', 'driver1234', 'driver'),
('do1234', 'driver1234', 'driver'),
('kp1234', 'kepala1234', 'kepala'),
('rg1234', 'driver1234', 'driver'),
('st1234', 'driver1234', 'driver'),
('th1234', 'driver1234', 'driver');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpembayaran`
--

CREATE TABLE IF NOT EXISTS `tbpembayaran` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rand` varchar(15) NOT NULL,
  `kode_bayar` varchar(15) NOT NULL,
  `harga` float NOT NULL,
  `jml_tiket` int(5) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kd_mtd` varchar(15) NOT NULL,
  `total_bayar` varchar(6) NOT NULL,
  `tgl_batas` date NOT NULL,
  `kode_otp` int(5) NOT NULL,
  `statusb` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`waktu`, `id_rand`, `kode_bayar`, `harga`, `jml_tiket`, `no_hp`, `kd_mtd`, `total_bayar`, `tgl_batas`, `kode_otp`, `statusb`) VALUES
('2019-07-02 15:11:29', '891345', '6560703911', 50000, 2, '085000000911', 'G02', '102500', '2019-07-03', 986569, 'Belum Bayar'),
('2019-07-02 15:12:10', '576943', '9170703999', 50000, 3, '012345678999', 'G01', '152500', '2019-07-03', 789172, 'Belum Bayar'),
('2019-07-02 15:17:56', '352603', '3140703891', 50000, 3, '081234567891', 'G01', '152500', '2019-07-03', 943145, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtujuan`
--

CREATE TABLE IF NOT EXISTS `tbtujuan` (
  `id_tujuan` varchar(15) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `pilih_jam` int(2) NOT NULL,
  `harga` float NOT NULL,
  `nama_driver` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtujuan`
--

INSERT INTO `tbtujuan` (`id_tujuan`, `asal`, `tujuan`, `pilih_jam`, `harga`, `nama_driver`) VALUES
('BC', 'Bandung', 'Cianjur', 1, 50000, 'Dony'),
('BJ', 'Bandung', 'Jakarta', 1, 75000, 'Albert'),
('BK', 'Bandung', 'Karawang', 1, 50000, 'Theo'),
('CB', 'Cianjur', 'Bandung', 1, 50000, 'Dony'),
('CJ', 'Cianjur', 'Jakarta', 1, 65000, 'Steward'),
('CK', 'Cianjur', 'Karawang', 1, 50000, 'Barry'),
('JB', 'Jakarta', 'Bandung', 2, 75000, 'Albert'),
('JC', 'Jakarta', 'Cianjur', 2, 65000, 'Steward'),
('JK', 'Jakarta', 'Karawang', 2, 65000, 'Roger'),
('KB', 'Karawang', 'Bandung', 2, 50000, 'Theo'),
('KC', 'Karawang', 'Cianjur', 2, 50000, 'Barry'),
('KJ', 'Karawang', 'Jakarta', 2, 65000, 'Roger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtd_bayar`
--
ALTER TABLE `mtd_bayar`
  ADD PRIMARY KEY (`kd_mtd`), ADD KEY `pembayaran` (`pembayaran`);

--
-- Indexes for table `tbberangkat`
--
ALTER TABLE `tbberangkat`
  ADD PRIMARY KEY (`rencent`), ADD KEY `tgl_berangkat` (`tgl_berangkat`), ADD KEY `id_tiket` (`id_tujuan`), ADD KEY `jml_tiket` (`jml_tiket`), ADD KEY `id_berangkat` (`id_berangkat`), ADD KEY `id_rand` (`id_rand`);

--
-- Indexes for table `tbbooking`
--
ALTER TABLE `tbbooking`
  ADD PRIMARY KEY (`waktu`), ADD KEY `nama_pembooking` (`nama_pembooking`), ADD KEY `id_kursi` (`id_tiket`), ADD KEY `kode_booking` (`kode_booking`), ADD KEY `id_rand` (`id_rand`), ADD KEY `jam` (`jam`), ADD KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tbdriver`
--
ALTER TABLE `tbdriver`
  ADD PRIMARY KEY (`nama_driver`) USING BTREE, ADD KEY `username` (`username`);

--
-- Indexes for table `tbjam`
--
ALTER TABLE `tbjam`
  ADD PRIMARY KEY (`id_jam`), ADD KEY `jam` (`jam`), ADD KEY `id_jam` (`id_jam`), ADD KEY `pilih_jam` (`pilih_jam`), ADD KEY `pilih_jam_2` (`pilih_jam`);

--
-- Indexes for table `tbketersediaan`
--
ALTER TABLE `tbketersediaan`
  ADD PRIMARY KEY (`id`), ADD KEY `id_berangkat` (`id_berangkat`), ADD KEY `id_jam` (`id_jam`), ADD KEY `jml_tiket` (`jml_tiket`), ADD KEY `id_tiket` (`id_tiket`), ADD KEY `id_jam_2` (`id_jam`), ADD KEY `id_rand` (`id_rand`);

--
-- Indexes for table `tbkota`
--
ALTER TABLE `tbkota`
  ADD PRIMARY KEY (`id`), ADD KEY `kota` (`kota`);

--
-- Indexes for table `tbkursi`
--
ALTER TABLE `tbkursi`
  ADD PRIMARY KEY (`id_kursi`), ADD KEY `id_tiket` (`id_tiket`), ADD KEY `no_kursi` (`no_kursi`), ADD KEY `id_rand` (`id_rand`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`username`), ADD KEY `username` (`username`), ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`waktu`), ADD KEY `kd_mtd` (`kd_mtd`), ADD KEY `jml_tiket` (`jml_tiket`), ADD KEY `harga` (`harga`), ADD KEY `id_rand` (`id_rand`), ADD KEY `kode_bayar` (`kode_bayar`), ADD KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tbtujuan`
--
ALTER TABLE `tbtujuan`
  ADD PRIMARY KEY (`id_tujuan`), ADD KEY `harga` (`harga`), ADD KEY `nama_driver` (`nama_driver`), ADD KEY `asal` (`asal`), ADD KEY `tujuan` (`tujuan`), ADD KEY `pilih_jam` (`pilih_jam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbketersediaan`
--
ALTER TABLE `tbketersediaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `tbkota`
--
ALTER TABLE `tbkota`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbberangkat`
--
ALTER TABLE `tbberangkat`
ADD CONSTRAINT `tbberangkat_ibfk_1` FOREIGN KEY (`id_tujuan`) REFERENCES `tbtujuan` (`id_tujuan`);

--
-- Ketidakleluasaan untuk tabel `tbbooking`
--
ALTER TABLE `tbbooking`
ADD CONSTRAINT `tbbooking_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tbketersediaan` (`id_tiket`),
ADD CONSTRAINT `tbbooking_ibfk_4` FOREIGN KEY (`id_rand`) REFERENCES `tbberangkat` (`id_rand`),
ADD CONSTRAINT `tbbooking_ibfk_5` FOREIGN KEY (`jam`) REFERENCES `tbjam` (`jam`);

--
-- Ketidakleluasaan untuk tabel `tbketersediaan`
--
ALTER TABLE `tbketersediaan`
ADD CONSTRAINT `tbketersediaan_ibfk_2` FOREIGN KEY (`id_berangkat`) REFERENCES `tbberangkat` (`id_berangkat`),
ADD CONSTRAINT `tbketersediaan_ibfk_3` FOREIGN KEY (`jml_tiket`) REFERENCES `tbberangkat` (`jml_tiket`),
ADD CONSTRAINT `tbketersediaan_ibfk_4` FOREIGN KEY (`id_jam`) REFERENCES `tbjam` (`id_jam`),
ADD CONSTRAINT `tbketersediaan_ibfk_5` FOREIGN KEY (`id_rand`) REFERENCES `tbberangkat` (`id_rand`);

--
-- Ketidakleluasaan untuk tabel `tbkursi`
--
ALTER TABLE `tbkursi`
ADD CONSTRAINT `tbkursi_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tbketersediaan` (`id_tiket`),
ADD CONSTRAINT `tbkursi_ibfk_2` FOREIGN KEY (`id_rand`) REFERENCES `tbberangkat` (`id_rand`);

--
-- Ketidakleluasaan untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
ADD CONSTRAINT `tblogin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbdriver` (`username`);

--
-- Ketidakleluasaan untuk tabel `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
ADD CONSTRAINT `tbpembayaran_ibfk_3` FOREIGN KEY (`kd_mtd`) REFERENCES `mtd_bayar` (`kd_mtd`),
ADD CONSTRAINT `tbpembayaran_ibfk_4` FOREIGN KEY (`harga`) REFERENCES `tbtujuan` (`harga`),
ADD CONSTRAINT `tbpembayaran_ibfk_6` FOREIGN KEY (`jml_tiket`) REFERENCES `tbberangkat` (`jml_tiket`),
ADD CONSTRAINT `tbpembayaran_ibfk_7` FOREIGN KEY (`id_rand`) REFERENCES `tbberangkat` (`id_rand`),
ADD CONSTRAINT `tbpembayaran_ibfk_8` FOREIGN KEY (`no_hp`) REFERENCES `tbbooking` (`no_hp`);

--
-- Ketidakleluasaan untuk tabel `tbtujuan`
--
ALTER TABLE `tbtujuan`
ADD CONSTRAINT `tbtujuan_ibfk_1` FOREIGN KEY (`nama_driver`) REFERENCES `tbdriver` (`nama_driver`),
ADD CONSTRAINT `tbtujuan_ibfk_2` FOREIGN KEY (`asal`) REFERENCES `tbkota` (`kota`),
ADD CONSTRAINT `tbtujuan_ibfk_3` FOREIGN KEY (`tujuan`) REFERENCES `tbkota` (`kota`),
ADD CONSTRAINT `tbtujuan_ibfk_4` FOREIGN KEY (`pilih_jam`) REFERENCES `tbjam` (`pilih_jam`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
