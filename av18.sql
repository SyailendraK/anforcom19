-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 07:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `av18`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `content`, `pic`, `created_at`) VALUES
(1, 'Close REG', 'wkwkw', 'berita-close-reg-(2018-09-19)(05-39-51am).jpg', '2018-09-19 03:39:52'),
(2, 'wkwk', 'wkwk', 'berita-wkwk-(2018-09-19)(05-41-04am).jpg', '2018-09-19 03:41:04'),
(3, 'Open REG', 'wwkwk', 'berita-open-reg-(2018-09-19)(05-41-25am).png', '2018-09-19 03:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `email_ketua` varchar(255) NOT NULL,
  `nim_ketua` varchar(50) NOT NULL,
  `ktm_ketua` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_anggota1` varchar(50) DEFAULT NULL,
  `nim_anggota1` varchar(50) DEFAULT NULL,
  `ktm_anggota1` varchar(255) DEFAULT NULL,
  `nama_anggota2` varchar(50) DEFAULT NULL,
  `nim_anggota2` varchar(50) DEFAULT NULL,
  `ktm_anggota2` varchar(255) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `prototipe` varchar(255) DEFAULT NULL,
  `link_prototipe` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(50) DEFAULT NULL,
  `verifikasi` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama_pt`, `nama_tim`, `nama_ketua`, `email_ketua`, `nim_ketua`, `ktm_ketua`, `password`, `nama_anggota1`, `nim_anggota1`, `ktm_anggota1`, `nama_anggota2`, `nim_anggota2`, `ktm_anggota2`, `proposal`, `prototipe`, `link_prototipe`, `video`, `bukti_pembayaran`, `verifikasi`, `created_at`) VALUES
(7, 'Universitas Diponegorose', 'Team12', 'Ketua', 'team1@gmail.com', '1', 'team1.png', '18051998', 'Anggota 1', '3', 'team11.png', 'Anggota 2', '2323', 'team12.png', NULL, 'prototipe--(2018-07-08)(07-35-11pm).zip', 'http://www.test.com', 'http://www.test.com', 'team1.png', 1, '2018-07-04 15:00:57'),
(8, 'UNDIP', 'WakandaForeva', 'Hehe', 'wakanda@foreva.com', '123', 'tetew3.png', 'wkwk', 'tes', '1231234', 'picture5.jpeg', 'Xixi', '2353543', 'pexels-photo-860379.jpeg', 'proposal-wakandaforeva-(2018-07-29)(03-07-52pm).pdf', 'xinput1_3.zip', 'https://wahaha', 'http://www.test.com', NULL, 1, '2018-07-05 06:16:45'),
(9, '123', '123', '123', 'team1@gmail.coms', '123', '1231.jpg', '18051998', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-07-08 19:38:43'),
(10, 'Universitas Harpard', 'team999', 'Steve Jobs', 'email@ketua.com', '24010316140116', 'team999.png', 'wkwk', '', '', NULL, '', '', NULL, 'proposal-team999-(2018-07-09)(03-11-38pm).pdf', 'color-swatches.zip', 'http://KOPAWLKA', 'http://www.test.com', 'team9993.jpg', 1, '2018-07-09 12:35:43'),
(11, 'aaa', 'awd2', 'kang bhecahgq', 'adaw@a', '233', 'awd2.jpg', 'aaaaaaaa', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-07-25 13:21:56'),
(12, 'aaa', 'awd22', 'kang bhecahgq', 'adaw@aa', '233', 'awd22.png', 'wwwwwwww', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-07-25 13:23:07'),
(13, 'Institut Teknologi California', 'WakandaForeva', 'Steve Jobs', 'tes@18818', '24010316140116', 'wakandaforeva.png', 'wkwkwkwk1', 'kocaq', '24010316140116', 'wakandaforeva1.png', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-09-07 09:09:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
