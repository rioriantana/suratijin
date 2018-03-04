-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2018 pada 17.31
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_ijin_magang`
--

CREATE TABLE `detail_ijin_magang` (
  `id` int(11) NOT NULL,
  `id_magang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `topik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_magang`
--

CREATE TABLE `ijin_magang` (
  `id` int(11) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `alamat_kepada` longtext NOT NULL,
  `tempat_penelitian` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL,
  `nip_pembimbing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_penelitian`
--

CREATE TABLE `ijin_penelitian` (
  `id` int(11) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `alamat_kepada` longtext NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `topik` longtext NOT NULL,
  `tempat_penelitian` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nama_pembimbing` varchar(50) NOT NULL,
  `nip_pembimbing` varchar(30) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_pinjam_alat`
--

CREATE TABLE `ijin_pinjam_alat` (
  `id` int(11) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `alamat_kepada` longtext NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `topik` longtext NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL,
  `nip_pembimbing` varchar(30) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `tempat_instansi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_ijin_magang`
--
ALTER TABLE `detail_ijin_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijin_magang`
--
ALTER TABLE `ijin_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijin_penelitian`
--
ALTER TABLE `ijin_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijin_pinjam_alat`
--
ALTER TABLE `ijin_pinjam_alat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_ijin_magang`
--
ALTER TABLE `detail_ijin_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_magang`
--
ALTER TABLE `ijin_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_penelitian`
--
ALTER TABLE `ijin_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_pinjam_alat`
--
ALTER TABLE `ijin_pinjam_alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
