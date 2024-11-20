-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Nov 2024 pada 02.19
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbird`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_kegiatan`
--

CREATE TABLE `anggota_kegiatan` (
  `id_anggota_kegiatan` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `id_jemaat` int(11) DEFAULT NULL,
  `tanggal_daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_verifikasi` enum('Menunggu','Diterima','Ditolak') DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(10) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `status` enum('Menikah','Belum Menikah') DEFAULT 'Belum Menikah',
  `status_verifikasi` enum('Terverifikasi','Belum Terverifikasi') DEFAULT 'Belum Terverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_sosial`
--

CREATE TABLE `kegiatan_sosial` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `tempat_pelaksanaan` varchar(255) DEFAULT NULL,
  `waktu_pelaksanaan` datetime DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mezbah_keluarga`
--

CREATE TABLE `mezbah_keluarga` (
  `id_mezbah` int(11) NOT NULL,
  `nama_mezbah` varchar(100) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayan_profetik`
--

CREATE TABLE `pelayan_profetik` (
  `id_pelayan` int(10) NOT NULL,
  `id_jemaat` int(10) NOT NULL,
  `nama_pelayan` varchar(50) NOT NULL,
  `tipe_ibadah` enum('ibadah raya','sekolah minggu') NOT NULL,
  `keahlian_ibadahraya_1` enum('WL','singers','multimedia','usher','tamborine','perjamuan','doa') NOT NULL,
  `keahlian_ibadahraya_2` enum('--','WL','singers','multimedia','usher','tamborine','perjamuan','doa') NOT NULL,
  `keahlian_ibadahraya_3` enum('--','WL','singers','multimedia','usher','tamborine','perjamuan','doa') NOT NULL,
  `keahlian_ibadahraya_4` enum('--','WL','singers','multimedia','usher','tamborine','perjamuan','doa') NOT NULL,
  `keahlian_ibadahraya_5` enum('--','WL','singers','multimedia','usher','tamborine','perjamuan','doa') NOT NULL,
  `skor_keahlianibadahraya_1` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahlianibadahraya_2` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahlianibadahraya_3` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahlianibadahraya_4` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahlianibadahraya_5` enum('0','1','2','3','4','5') NOT NULL,
  `keahlian_sekolahminggu_1` enum('--','WL','singers','pendamping','kameramen','firman') NOT NULL,
  `keahlian_sekolahminggu_2` enum('--','WL','singers','pendamping','kameramen','firman') NOT NULL,
  `keahlian_sekolahminggu_3` enum('--','WL','singers','pendamping','kameramen','firman') NOT NULL,
  `keahlian_sekolahminggu_4` enum('--','WL','singers','pendamping','kameramen','firman') NOT NULL,
  `keahlian_sekolahminggu_5` enum('--','WL','singers','pendamping','kameramen','firman') NOT NULL,
  `skor_keahliansekolahminggu_1` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahliansekolahminggu_2` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahliansekolahminggu_3` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahliansekolahminggu_4` enum('0','1','2','3','4','5') NOT NULL,
  `skor_keahliansekolahminggu_5` enum('0','1','2','3','4','5') NOT NULL,
  `status_verifikasi` enum('Terverifikasi','Belum Terverifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayan_sosial`
--

CREATE TABLE `pelayan_sosial` (
  `nama_pelayan` varchar(50) NOT NULL,
  `id_pelayan` int(10) NOT NULL,
  `id_jemaat` int(10) NOT NULL,
  `keahlian_sosial` set('donasi','pendoa','kesehatan','perkunjungan','penginjilan') NOT NULL,
  `status_verifikasi` enum('Terverifikasi','Belum Terverifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_mezbah`
--

CREATE TABLE `pendaftaran_mezbah` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_jemaat` int(11) DEFAULT NULL,
  `id_mezbah` int(11) DEFAULT NULL,
  `tanggal_daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_verifikasi` enum('Menunggu','Diterima','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `warta_jemaat`
--

CREATE TABLE `warta_jemaat` (
  `id_warta` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `nama_ibadah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pelayan` varchar(255) NOT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota_kegiatan`
--
ALTER TABLE `anggota_kegiatan`
  ADD PRIMARY KEY (`id_anggota_kegiatan`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `id_jemaat` (`id_jemaat`);

--
-- Indeks untuk tabel `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id_jemaat`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nama_depan` (`nama_depan`),
  ADD UNIQUE KEY `nama_belakang` (`nama_belakang`);

--
-- Indeks untuk tabel `kegiatan_sosial`
--
ALTER TABLE `kegiatan_sosial`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `mezbah_keluarga`
--
ALTER TABLE `mezbah_keluarga`
  ADD PRIMARY KEY (`id_mezbah`);

--
-- Indeks untuk tabel `pelayan_profetik`
--
ALTER TABLE `pelayan_profetik`
  ADD PRIMARY KEY (`id_pelayan`),
  ADD KEY `id_jemaat` (`id_jemaat`),
  ADD KEY `nama_pelayan` (`nama_pelayan`);

--
-- Indeks untuk tabel `pelayan_sosial`
--
ALTER TABLE `pelayan_sosial`
  ADD PRIMARY KEY (`id_pelayan`),
  ADD UNIQUE KEY `id_jemaat` (`id_jemaat`),
  ADD UNIQUE KEY `nama_pelayan` (`nama_pelayan`);

--
-- Indeks untuk tabel `pendaftaran_mezbah`
--
ALTER TABLE `pendaftaran_mezbah`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_jemaat` (`id_jemaat`),
  ADD KEY `id_mezbah` (`id_mezbah`);

--
-- Indeks untuk tabel `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  ADD PRIMARY KEY (`id_warta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota_kegiatan`
--
ALTER TABLE `anggota_kegiatan`
  MODIFY `id_anggota_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan_sosial`
--
ALTER TABLE `kegiatan_sosial`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mezbah_keluarga`
--
ALTER TABLE `mezbah_keluarga`
  MODIFY `id_mezbah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelayan_profetik`
--
ALTER TABLE `pelayan_profetik`
  MODIFY `id_pelayan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelayan_sosial`
--
ALTER TABLE `pelayan_sosial`
  MODIFY `id_pelayan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_mezbah`
--
ALTER TABLE `pendaftaran_mezbah`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_kegiatan`
--
ALTER TABLE `anggota_kegiatan`
  ADD CONSTRAINT `anggota_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_sosial` (`id_kegiatan`),
  ADD CONSTRAINT `anggota_kegiatan_ibfk_2` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Ketidakleluasaan untuk tabel `pelayan_profetik`
--
ALTER TABLE `pelayan_profetik`
  ADD CONSTRAINT `pelayan_profetik_ibfk_1` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pelayan_profetik_ibfk_2` FOREIGN KEY (`nama_pelayan`) REFERENCES `jemaat` (`nama_depan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `pelayan_sosial`
--
ALTER TABLE `pelayan_sosial`
  ADD CONSTRAINT `pelayan_sosial_ibfk_1` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pelayan_sosial_ibfk_2` FOREIGN KEY (`nama_pelayan`) REFERENCES `jemaat` (`nama_depan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `pendaftaran_mezbah`
--
ALTER TABLE `pendaftaran_mezbah`
  ADD CONSTRAINT `pendaftaran_mezbah_ibfk_1` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`),
  ADD CONSTRAINT `pendaftaran_mezbah_ibfk_2` FOREIGN KEY (`id_mezbah`) REFERENCES `mezbah_keluarga` (`id_mezbah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
