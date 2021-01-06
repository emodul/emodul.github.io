-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 12.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formlogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'guru', 'guru1', '12345', 'guru'),
(4, 'admin2', 'admin2', '12345', 'admin'),
(8, 'admin1', 'admin1', '123', 'admin'),
(22, 'guru2', 'guru2', '123', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aij`
--

CREATE TABLE `tbl_aij` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_asj`
--

CREATE TABLE `tbl_asj` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bindo`
--

CREATE TABLE `tbl_bindo` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bingg`
--

CREATE TABLE `tbl_bingg` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dg`
--

CREATE TABLE `tbl_dg` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fisika`
--

CREATE TABLE `tbl_fisika` (
  `id` int(11) NOT NULL,
  `judul` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `nama_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kimia`
--

CREATE TABLE `tbl_kimia` (
  `id` int(11) NOT NULL,
  `judul` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `nama_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komdas`
--

CREATE TABLE `tbl_komdas` (
  `id` int(11) NOT NULL,
  `judul` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `nama_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kwu`
--

CREATE TABLE `tbl_kwu` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mtk`
--

CREATE TABLE `tbl_mtk` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pancasila`
--

CREATE TABLE `tbl_pancasila` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemdas`
--

CREATE TABLE `tbl_pemdas` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjas`
--

CREATE TABLE `tbl_penjas` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_seni`
--

CREATE TABLE `tbl_seni` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_simulasi`
--

CREATE TABLE `tbl_simulasi` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siskom`
--

CREATE TABLE `tbl_siskom` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wan`
--

CREATE TABLE `tbl_wan` (
  `id` int(100) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_aij`
--
ALTER TABLE `tbl_aij`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_asj`
--
ALTER TABLE `tbl_asj`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bindo`
--
ALTER TABLE `tbl_bindo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bingg`
--
ALTER TABLE `tbl_bingg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dg`
--
ALTER TABLE `tbl_dg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_fisika`
--
ALTER TABLE `tbl_fisika`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kimia`
--
ALTER TABLE `tbl_kimia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_komdas`
--
ALTER TABLE `tbl_komdas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kwu`
--
ALTER TABLE `tbl_kwu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mtk`
--
ALTER TABLE `tbl_mtk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pancasila`
--
ALTER TABLE `tbl_pancasila`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pemdas`
--
ALTER TABLE `tbl_pemdas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penjas`
--
ALTER TABLE `tbl_penjas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_seni`
--
ALTER TABLE `tbl_seni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_simulasi`
--
ALTER TABLE `tbl_simulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siskom`
--
ALTER TABLE `tbl_siskom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_wan`
--
ALTER TABLE `tbl_wan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_aij`
--
ALTER TABLE `tbl_aij`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_asj`
--
ALTER TABLE `tbl_asj`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_bindo`
--
ALTER TABLE `tbl_bindo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_bingg`
--
ALTER TABLE `tbl_bingg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_dg`
--
ALTER TABLE `tbl_dg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_fisika`
--
ALTER TABLE `tbl_fisika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kimia`
--
ALTER TABLE `tbl_kimia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_komdas`
--
ALTER TABLE `tbl_komdas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kwu`
--
ALTER TABLE `tbl_kwu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_mtk`
--
ALTER TABLE `tbl_mtk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pancasila`
--
ALTER TABLE `tbl_pancasila`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemdas`
--
ALTER TABLE `tbl_pemdas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjas`
--
ALTER TABLE `tbl_penjas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_seni`
--
ALTER TABLE `tbl_seni`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_simulasi`
--
ALTER TABLE `tbl_simulasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_siskom`
--
ALTER TABLE `tbl_siskom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_wan`
--
ALTER TABLE `tbl_wan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
