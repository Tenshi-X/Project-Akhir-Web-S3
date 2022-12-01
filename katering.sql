-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 04:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katering`
--

-- --------------------------------------------------------

--
-- Table structure for table `lauk`
--

CREATE TABLE `lauk` (
  `id_lauk` int(11) NOT NULL,
  `lauk` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lauk`
--

INSERT INTO `lauk` (`id_lauk`, `lauk`, `deskripsi`) VALUES
(1, 'Ayam Goreng', 'Olahan ayam dari Sesa Catering dengan daging ayam berkualitas, dibumbui dengan rempah pilihan, dimasak dengan sepenuh hati, dan digoreng secukupnya sehingga dihasilkan Ayam Goreng yang lezat dengan rasa bumbu yang meresap sampai ke tulang.'),
(2, 'Ayam Teriyaki', 'Olahan ayam dari Sesa Catering dengan perpaduan daging ayam berkualitas, cita rasa khas Jepang, serta olahan saus berkualitas ala SeSa Catering. Daging ayam dipotong dadu, sehingga memudahkan acara santap dengan kerabat. Daging ayam dimasak dengan sepenuh hati, sehingga dihasilkan Ayam Teriyaki yang lezat dengan rasa bumbu yang meresap.'),
(3, 'Ayam Panggang', 'Olahan ayam dari Sesa Catering dengan daging ayam berkualitas, dibumbui dengan rempah pilihan, dimasak dengan sepenuh hati, dan dipanggang dengan sepenuh hati sehingga dihasilkan Ayam Panggang yang menggugah selera, tidak overcook, dan rasa bumbunya meresap sampai ke tulang.'),
(4, 'Lele Goreng', 'Olahan ikan lele dari Sesa Catering dengan lele berkualitas, dibumbui dengan rempah pilihan, dimasak dengan sepenuh hati, dan digoreng secukupnya sehingga dihasilkan Lele Goreng yang lezat dengan rasa bumbunya meresap.'),
(5, 'Lele Panggang', 'Olahan ikan lele dari Sesa Catering dengan lele berkualitas, dibumbui dengan rempah pilihan, dimasak dengan sepenuh hati, dan dipanggang secukupnya sehingga dihasilkan Lele Panggang yang lezat dan rasa bumbu yang meresap.'),
(6, 'Telur Ceplok Balado', 'Olahan telur dari Sesa Catering dengan telur ayam berkualitas, digoreng dengan hati-hati dan dibumbui dengan sempurna menggunakan sambal ala SeSa Catering yang berasal dari rempah-rempah pilihan sehingga dihasilkan Telur Ceplok Balado yang lezat dengan rasa bumbu yang meresap.'),
(7, 'Telur Bacem', 'Olahan telur dari Sesa Catering dengan telur ayam berkualitas, direbus dengan hati-hati dan dibumbui dengan sempurna menggunakan kecap, gula jawa, dan bumbu lain ala SeSa Catering yang berasal dari rempah-rempah pilihan sehingga dihasilkan Telur Bacem yang lezat dengan rasa bumbu yang meresap.'),
(8, 'Daging Sapi Bumbu Teriyaki', 'Olahan daging sapi dari Sesa Catering dengan perpaduan daging sapi berkualitas, cita rasa khas Jepang, serta olahan saus berkualitas ala SeSa Catering. Daging sapi dipotong dadu, sehingga memudahkan acara santap dengan kerabat. Daging sapi dimasak dengan sepenuh hati, sehingga dihasilkan Daging Sapi Teriyaki yang lezat dengan rasa bumbu yang meresap.'),
(9, 'Daging Sapi Bumbu Rendang', 'Olahan daging sapi dari Sesa Catering dengan perpaduan daging sapi berkualitas dan cita rasa khas Minangkabau. Daging sapi dimasak dengan sepenuh hati menggunakan suhu rendah dalam waktu lama, dibumbui dengan santan serta rempah-rempah lain ala SeSa Catering, sehingga dihasilkan Daging Sapi Rendang yang lezat dengan rasa bumbu yang meresap.'),
(10, 'Daging Sapi Bumbu Rawon', 'Olahan daging sapi dari Sesa Catering dengan perpaduan daging sapi berkualitas dan cita rasa khas Jawa bagian timur. Daging sapi dipotong dadu, sehingga memudahkan acara santap dengan kerabat. Daging sapi dimasak dengan sepenuh hati dengan kluwak dan rempah-rempah lain ala SeSa Catering, sehingga dihasilkan Daging Sapi Rawon yang lezat dengan rasa bumbu yang meresap.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `nama_menu` varchar(50) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_lauk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `desk_menu1` text NOT NULL,
  `desk_menu2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`nama_menu`, `id_menu`, `id_lauk`, `harga`, `desk_menu1`, `desk_menu2`) VALUES
('Nasi Kotak Ayam Goreng', 1, 1, 35000, '- Nasi kotak dengan lauk Ayam Goreng', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Ayam Teriyaki', 2, 2, 18000, '- Nasi kotak dengan lauk Ayam Teriyaki\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Ayam Panggang', 3, 3, 25000, '- Nasi kotak dengan lauk Ayam Panggang\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Ikan Lele Goreng', 4, 4, 23000, '- Nasi kotak dengan lauk Lele Goreng\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Ikan Lele Panggang', 5, 5, 20000, '- Nasi kotak dengan lauk Ikan Lele Panggang\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Telur Ceplok Balado', 6, 6, 28000, '- Nasi kotak dengan lauk Telur Ceplok Balado', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Telur Bacem', 7, 7, 20000, '- Nasi kotak dengan lauk Telur Bacem\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Daging Sapi Bumbu Teriyaki', 8, 8, 18000, '- Nasi kotak dengan lauk Daging Sapi Bumbu Teriyaki\r\n', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Daging Sapi Bumbu Rendang', 9, 9, 25000, '- Nasi kotak dengan lauk Daging Sapi Bumbu Rendang', '- Sudah termasuk sayur dan minuman'),
('Nasi Kotak Daging Sapi Bumbu Rawon', 10, 10, 25000, '- Nasi kotak dengan lauk Daging Sapi Bumbu Rawon', '- Sudah termasuk sayur dan minuman');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `minuman` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `minuman`, `deskripsi`) VALUES
(1, 'Teh Original', 'Teh kemasan keluaran SeSa Catering dari daun teh berkualitas dengan cita rasa yang khas dan manis yang pas. '),
(2, 'Teh Rasa Lemon', 'Teh kemasan keluaran SeSa Catering dari daun teh berkualitas dengan cita rasa yang khas dan manis yang pas. Sekarang hadir dengan varian rasa lemon yang menyegarkan.'),
(3, 'Teh Rasa Apel', 'Teh kemasan keluaran SeSa Catering dari daun teh berkualitas dengan cita rasa yang khas dan manis yang pas. Sekarang hadir dengan varian rasa apel yang menyenangkan.'),
(4, 'Teh Rasa Mint', 'Teh kemasan keluaran SeSa Catering dari daun teh berkualitas dengan cita rasa yang khas dan manis yang pas. Sekarang hadir dengan varian rasa daun mint yang menyejukkan.'),
(5, 'Air Mineral', 'Tersedia dalam kemasan botol ukuran 500ml');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_lauk` int(11) NOT NULL,
  `id_sayur` int(11) NOT NULL,
  `id_minuman` int(11) NOT NULL,
  `porsi` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tgl_acara` date NOT NULL,
  `waktu_acara` time NOT NULL,
  `tglwaktu_pesan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_menu`, `id_lauk`, `id_sayur`, `id_minuman`, `porsi`, `id_status`, `tgl_acara`, `waktu_acara`, `tglwaktu_pesan`) VALUES
(10, 3, 3, 3, 3, 3, 10, 2, '2022-12-02', '00:00:00', '2022-11-30 00:48:20'),
(11, 3, 4, 4, 1, 1, 9, 2, '2022-12-03', '00:00:00', '2022-11-30 01:15:53'),
(13, 3, 7, 7, 3, 3, 40, 2, '2022-12-06', '00:00:00', '2022-11-30 01:17:56'),
(14, 3, 9, 9, 3, 5, 60, 2, '2022-12-02', '00:00:00', '2022-11-30 01:18:08'),
(15, 6, 6, 6, 5, 3, 60, 1, '2022-12-09', '00:00:00', '2022-11-30 01:18:39'),
(16, 7, 3, 3, 1, 1, 5, 2, '2023-01-07', '11:00:00', '2022-12-01 09:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `id_sayur` int(11) NOT NULL,
  `sayur` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`id_sayur`, `sayur`, `deskripsi`) VALUES
(1, 'Tumis Kangkung', 'Olahan sayur dari Sesa Catering dengan perpaduan kangkung berkualitas serta bumbu pilihan ala SeSa Catering. Dimasak dengan sepenuh hati, sehingga dihasilkan Tumis Kangkung yang lezat dan bergizi dengan rasa bumbu yang meresap.'),
(2, 'Capcay', 'Olahan sayur dari Sesa Catering dengan perpaduan beragam sayur berkualitas, irisan sosis, serta bumbu pilihan ala SeSa Catering. Dimasak dengan sepenuh hati, sehingga dihasilkan Capcay yang lezat dan bergizi dengan rasa bumbu yang meresap.'),
(3, 'Tumis Tauge', 'Olahan sayur dari Sesa Catering dengan perpaduan tauge berkualitas serta bumbu pilihan ala SeSa Catering. Dimasak dengan sepenuh hati, sehingga dihasilkan Tumis Tauge yang lezat dan bergizi dengan rasa bumbu yang meresap.'),
(4, 'Tumis Labu Siem', 'Olahan sayur dari Sesa Catering dengan perpaduan labu siem berkualitas serta bumbu pilihan ala SeSa Catering. Dimasak dengan sepenuh hati, sehingga dihasilkan Tumis Labu Siem yang lezat dan bergizi dengan rasa bumbu yang meresap.'),
(5, 'Tumis Tempe Kacang Panjang', 'Olahan sayur dari Sesa Catering dengan perpaduan tempe dan kacagn panjang berkualitas serta bumbu pilihan ala SeSa Catering. Dimasak dengan sepenuh hati, sehingga dihasilkan Tumis Tempe Kacang Panjang yang lezat dan bergizi dengan rasa bumbu yang meresap.');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`, `keterangan`) VALUES
(1, 'BB', 'Belum Bayar'),
(2, 'SL', 'Sudah Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `tanggal_lunas` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pesanan`, `tanggal_lunas`) VALUES
(2, 10, '2022-11-30'),
(3, 11, '2022-11-30'),
(4, 13, '2022-11-30'),
(5, 14, '2022-12-01'),
(6, 16, '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `no_hp`, `alamat`) VALUES
(1, 'nisa', 'kape', '08580341533', 'Kasihan, Bantul, DIY'),
(2, 'kape', 'nisa', '0858034XXXX', 'Condongcatur, Sleman, DIY'),
(3, 'Seva', 'seva', '085XXXXXXXX', 'Seturan'),
(6, 'admin', 'admin', '08463635475', 'temanggung'),
(7, 'Khairunnisa', 'karima', '08512345678', 'Alkid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lauk`
--
ALTER TABLE `lauk`
  ADD PRIMARY KEY (`id_lauk`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_lauk` (`id_lauk`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_lauk` (`id_lauk`),
  ADD KEY `id_sayur` (`id_sayur`),
  ADD KEY `id_minuman` (`id_minuman`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`id_sayur`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lauk`
--
ALTER TABLE `lauk`
  MODIFY `id_lauk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sayur`
--
ALTER TABLE `sayur`
  MODIFY `id_sayur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_lauk`) REFERENCES `lauk` (`id_lauk`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_lauk`) REFERENCES `lauk` (`id_lauk`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_sayur`) REFERENCES `sayur` (`id_sayur`),
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id_minuman`),
  ADD CONSTRAINT `pesanan_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `pesanan_ibfk_6` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `pesanan_ibfk_7` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
