-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2022 pada 06.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bipolar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aturan`
--

CREATE TABLE `tb_aturan` (
  `kode_aturan` varchar(15) NOT NULL,
  `kode_penyakit` varchar(50) NOT NULL,
  `kode_gejala` varchar(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_aturan`
--

INSERT INTO `tb_aturan` (`kode_aturan`, `kode_penyakit`, `kode_gejala`, `nilai`) VALUES
('a1', 'P01', 'G01', 0.9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dashboard`
--

CREATE TABLE `tb_dashboard` (
  `kode_dashboard` int(11) NOT NULL,
  `nama_dashboard` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dashboard`
--

INSERT INTO `tb_dashboard` (`kode_dashboard`, `nama_dashboard`) VALUES
(1, 'Sistem Pakar digunakan untuk menyelesaikan masalah dengan menggunakan basis pengetahuan dan mesin inferensi berdasarkan pengetahuan dari seorang pakar. Sistem Pakar ini digunakan untuk mendiagnosis gangguan awal bipolar berdasarkan basis pengetahuan dari gangguan tersebut. Tujuan dari penelitian ini adalah untuk mendapatkan tingkat keakuratan yang tinggi dan untuk membantu Pakar (dokter kejiwaan). Pada penelitian ini digunakan metode Naive Bayes. \r\nMenurut Oslan dan Delen dalam (Kurniawan, Afif F, 2013) Naïve Bayes merupakan pengklasifikasian dengan metode probabilitas dan statistik yang dikemukakan oleh ilmuan Inggris Thomas Bayes yaitu dengan memprediksi masa depan bedasarkan data dari masa lalu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(11) NOT NULL,
  `nama_gejala` varchar(500) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`, `nilai`) VALUES
('G01', 'Pernah merasa memiliki energi lebih besar dan sangat bersemangat untuk melakukan aktivitas sekurangnya 7 hari berturut-turut', 0.9),
('G02', 'Pernah merasa memiliki energi lebih besar dan sangat bersemangat untuk melakukan aktivitas sekurangnya 4 hari berturut-turut', 0.8),
('G03', 'Merasa sangat senang hampir setiap saat selama 7 hari atau lebih', 0.7),
('G04', 'Merasa sangat senang hampir setiap saat sekurangnya 4 hari secara berturut-turut', 0.6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

CREATE TABLE `tb_info` (
  `kode_info` int(11) NOT NULL,
  `nama_info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`kode_info`, `nama_info`) VALUES
(1, 'Gangguan Bipolar adalah suatu gangguan yang berhubungan dengan perubahan suasana hati mulai dari posisi terendah depresif/tertekan ke tertinggi/manik.\r\nPenyebab pasti gangguan bipolar tidak diketahui, namun kombinasi genetika, lingkungan, serta struktur dan senyawa kimia pada otak yang berubah mungkin berperan atas terjadinya gangguan.\r\nEpisode manik dapat mencakup gejala seperti energi tinggi, jam tidur yang kurang, dan sering berkhayal. Episode depresi dapat meliputi gejala seperti energi rendah, motivasi rendah, dan kehilangan minat dalam aktivitas sehari-hari. Episode mood terjadi selama beberapa hari hingga berbulan-bulan sekaligus dan mungkin juga terkait dengan pikiran untuk bunuh diri.\r\nPenanganan biasanya seumur hidup dan sering melibatkan kombinasi obat serta psikoterapis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(15) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
('P01', 'Bipolar Tipe 1', 0.9),
('P02', 'Bipolar Tipe 2', 0.7),
('P03', 'Bipolar Tipe 3', 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `nama`, `role`, `password`) VALUES
('andara', 'nis', 'admin', 'winata'),
('ekky', 'mauladani', 'user', '123456'),
('eza', 'nesha', 'admin', 'eza1234'),
('ezaaa', 'winata', 'user', 'mmm'),
('reza', 'doang', 'user', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  ADD PRIMARY KEY (`kode_aturan`),
  ADD KEY `kode_penyakit` (`kode_penyakit`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indeks untuk tabel `tb_dashboard`
--
ALTER TABLE `tb_dashboard`
  ADD PRIMARY KEY (`kode_dashboard`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`kode_info`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  ADD CONSTRAINT `tb_aturan_ibfk_1` FOREIGN KEY (`kode_penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`),
  ADD CONSTRAINT `tb_aturan_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
