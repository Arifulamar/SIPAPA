-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2022 pada 08.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipapa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(12) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pasien` varchar(120) NOT NULL,
  `umur_pasien` int(2) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `nama_suami` varchar(32) NOT NULL,
  `no_bpjs` int(13) NOT NULL,
  `hpht` varchar(12) NOT NULL,
  `ttp` varchar(12) NOT NULL,
  `diagnosa` varchar(120) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `tekanan_darah_sistole` varchar(12) NOT NULL,
  `tekanan_darah_diastole` varchar(12) NOT NULL,
  `lila` int(2) NOT NULL,
  `denyut_jantung_janin` varchar(12) NOT NULL,
  `presentasi_janin` varchar(6) NOT NULL,
  `pemberian_tablet_fe` varchar(24) NOT NULL,
  `tanggal_fe` date DEFAULT NULL,
  `imunisasi_tt_1` varchar(15) NOT NULL,
  `tanggal_tt_1` date DEFAULT NULL,
  `imunisasi_tt_2` varchar(15) NOT NULL,
  `tanggal_tt_2` date DEFAULT NULL,
  `hb` varchar(15) NOT NULL,
  `protein_urine` varchar(15) NOT NULL,
  `golongan_darah` varchar(6) NOT NULL,
  `hiv` varchar(7) NOT NULL,
  `sipilis` varchar(7) NOT NULL,
  `gula_darah` varchar(7) NOT NULL,
  `asam_urat` varchar(7) NOT NULL,
  `kolesterol` varchar(7) NOT NULL,
  `tata_laksana` varchar(32) NOT NULL,
  `terapi_wicara` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
