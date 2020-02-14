-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 01:36 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a_saran`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
`id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(88) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(0, 'null'),
(1, 'Keuangan'),
(2, 'Administrasi'),
(3, 'Kemahasiswaan'),
(5, 'Bagian Umum'),
(6, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `balas`
--

CREATE TABLE IF NOT EXISTS `balas` (
`id_balas` int(11) NOT NULL,
  `id_email` int(11) NOT NULL,
  `id_saran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email_pengirim` varchar(99) NOT NULL,
  `email_penerima` varchar(88) NOT NULL,
  `isi_balasan` text NOT NULL,
  `jam` varchar(33) NOT NULL,
  `tanggal` varchar(88) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `balas`
--

INSERT INTO `balas` (`id_balas`, `id_email`, `id_saran`, `id_user`, `email_pengirim`, `email_penerima`, `isi_balasan`, `jam`, `tanggal`) VALUES
(1, 9, 8, 112, 'mail@adminkotaksaran.com', 'mail@adminkotaksaran.com', 'Terimakasih atas respon nya ', '22:07:34', '2016-07-20'),
(2, 11, 11, 112, 'mail@adminkotaksaran.com', 'mail@adminkotaksaran.com', 'Terimkasih.. semoga ke depan semakin baik', '22:07:48', '2016-07-20'),
(3, 17, 21, 111, 'mail@adminkotaksaran.com', 'mail@adminkotaksaran.com', 'Terimakasih telah di tanggapi saran saya.. semoga ke depan semakin baik', '14:08:27', '2016-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `out_email`
--

CREATE TABLE IF NOT EXISTS `out_email` (
`id_email` int(11) NOT NULL,
  `id_saran` int(11) NOT NULL,
  `email_penerima` varchar(55) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email_pengirim` varchar(66) NOT NULL,
  `level` varchar(77) NOT NULL,
  `isi_pesan` text NOT NULL,
  `clock` varchar(22) NOT NULL,
  `date` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `out_email`
--

INSERT INTO `out_email` (`id_email`, `id_saran`, `email_penerima`, `id_user`, `email_pengirim`, `level`, `isi_pesan`, `clock`, `date`) VALUES
(14, 14, 'melia@gmail.com', 0, 'mail@adminkotaksaran.com', '0', 'ohh.. iya.. kemarin memang telah di rencanakan akan di perbaiki.. terimkasih telah di ingatkan', '23:07:24', '2016-07-20'),
(17, 21, 'aisyah@gmail.com', 111, 'mail@adminkotaksaran.com', 'bagian Keuangan', 'Terimakasih atas saran yang anda kirimkan ke bagian keuangan, kami segera menindaklanjuti saran anda', '14:08:06', '2016-08-07'),
(18, 28, 'melia@gmail.com', 115, 'mail@adminkotaksaran.com', 'bagian Administrator', 'good', '00:08:02', '2016-08-08'),
(19, 24, 'melia@gmail.com', 115, 'mail@adminkotaksaran.com', 'bagian Keuangan', 'maksudnya?', '06:08:11', '2016-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(77) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(0, 'null'),
(1, 'T. Sipil'),
(2, 'T. Informatika'),
(3, 'Adm. Bisnis'),
(4, 'T. Mesin'),
(5, 'Bahasa Inggris Bisnis'),
(6, 'T. Elektro'),
(7, 'T. Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `tsaran`
--

CREATE TABLE IF NOT EXISTS `tsaran` (
`id_saran` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` varchar(89) DEFAULT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(22) NOT NULL,
  `jam` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tsaran`
--

INSERT INTO `tsaran` (`id_saran`, `id_bagian`, `id_prodi`, `id_user`, `level`, `isi`, `tanggal`, `jam`) VALUES
(17, 1, 2, 114, 'Mahasiswa', 'Harap di tingkatkan kembali, system e money di bidang terkait, karena masih banyak potensi penyelewengan dana', '2016-07-21', '06:07:41'),
(18, 6, 1, 108, 'Anggota', 'Manajemen di bidang pendidikan sudah cukup baik, akan tetapi perlu di tingkatkan lagi system informasi akademiknya', '2016-07-21', '07:07:08'),
(19, 2, 2, 116, 'Dosen', 'Manajemen informasi di bagian administrasi masih manual banget, perlu di tingkatkan lagi, agar status kampus setara dengan kampus-kampus favorite', '2016-07-21', '07:07:09'),
(20, 6, 6, 116, 'Dosen', 'Dalam prodi bahasa jepang, banyak sekali system yang error, terutama e-learning nya yang tidak upto date dan selalu gagal login', '2016-07-21', '08:07:31'),
(21, 1, 1, 111, 'Karyawan', 'Untuk Management pembayaran di bagian ini kurang terorganisir, harap di tingkatkan lagi pelayanan nya', '2016-08-07', '13:08:51'),
(22, 3, 6, 111, 'Karyawan', 'Harap di perbaiki kembali system penerimaan karyawan di bagian HRD, kayaknya banyak tenaga kerja yang berpotensi tidak bisa masuk di perusahaan ini', '2016-08-07', '14:08:20'),
(24, 1, 0, 115, 'Mahasiswa', 'ww', '2016-08-07', '22:08:41'),
(26, 1, 0, 115, 'Mahasiswa', 'gg', '2016-08-07', '22:08:59'),
(27, 1, 0, 115, 'Mahasiswa', 'ww', '2016-08-07', '22:08:17'),
(28, 3, 3, 115, 'Mahasiswa', 'www', '2016-08-07', '22:08:31'),
(29, 3, 0, 116, 'Dosen', 'bagus', '2016-08-08', '06:08:50'),
(30, 0, 2, 117, 'Anggota', 'bagus kerjanya', '2016-08-08', '06:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(5) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(66) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'sekolah',
  `id_bagian` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=128 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `level`, `id_bagian`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Melia Utami', '', 'superuser', 0),
(113, 'said', 'b7b791e873f143d5318310e59022175d', 'said@gmail.com', 'Said ahmad', 'bkls', 'anggota', 0),
(108, 'hakim', 'c96041081de85714712a79319cb2be5f', 'hakimalfatih4@gmail.com', 'Hakim Al Fatih', 'Desa Tempel Kec. Wedung', 'anggota', 0),
(112, 'annisa', 'c9d2cce909ea37234be8af1a1f958805', 'annisa65@gmail.com', 'Annisa OK', ' Desa rindu berat. riau', 'anggota', 0),
(111, 'aisyah', '26bb533df5747c7a3f2a9cc48a8cf3ee', 'aisyah@gmail.com', 'Aisyah Az Zahra', 'Tempel Wedung', 'karyawan', 0),
(114, 'firda', '5ed291923179b73cbc6ef968b35361ff', 'firdawahida@gmail.com', 'Firda Wahida', 'Tempel ', 'mahasiswa', 0),
(115, 'melia', '7ca5f6cf2c5f7b06ff7cbe975ad99e05', 'melia@gmail.com', 'Melia Utami', 'Bengkalis', 'mahasiswa', 0),
(116, 'dewi', 'ed1d859c50262701d92e5cbf39652792', 'dewi@gmail.com', 'Dewi Cahyani', 'Padang Sumbar', 'dosen', 0),
(117, 'utami', '7e011c80e602960d00a65e5153cf9275', 'utamai@gmail.com', 'Utami Melia', 'Bengkalis Riau Sumbar', 'anggota', 0),
(120, 'salsa', '0143c1e8e97da861c623ff508a441c54', 'salsa@gmail.com', 'salsaaa', 'kota sini', '', 1),
(121, 'rifqi', '72561baf6079c338cc2dd68e98d52055', 'rifqi@gmail.com', 'Rifqi Arrofiq', 'Kota sana', '', 3),
(122, 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi@gmail.com', 'Budi Waseso', 'Palangkaraya', '', 6),
(123, 'dani', '55b7e8b895d047537e672250dd781555', 'dani@gmail.com', 'Dani ahmad', 'Jepara Jawa Tengah', '', 5),
(124, 'arif', '0ff6c3ace16359e41e37d40b8301d67f', 'arif@gmail.com', 'Arif Rahman', 'Kendari Sultra', '', 2),
(125, 'hasan', 'fc3f318fba8b3c1502bece62a27712df', 'hasan@gmail.com', 'Hasan Assegaf', 'Aceh', 'dosen', 0),
(127, 'ds', '522748524ad010358705b6852b81be4c', 'ds@mail.com', 'ds', 'ds', 'anggota', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
 ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `balas`
--
ALTER TABLE `balas`
 ADD PRIMARY KEY (`id_balas`);

--
-- Indexes for table `out_email`
--
ALTER TABLE `out_email`
 ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tsaran`
--
ALTER TABLE `tsaran`
 ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `balas`
--
ALTER TABLE `balas`
MODIFY `id_balas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `out_email`
--
ALTER TABLE `out_email`
MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tsaran`
--
ALTER TABLE `tsaran`
MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
