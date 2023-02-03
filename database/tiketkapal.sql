-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2023 pada 01.22
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketkapal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL,
  `kategori_kapal` int(11) NOT NULL,
  `gambar_kapal` varchar(100) NOT NULL,
  `tujuan_kapal` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `nama_kapal`, `kategori_kapal`, `gambar_kapal`, `tujuan_kapal`, `harga`) VALUES
(3, 'Zada Hela', 15, 'assets/img/kapal/Zada Pict (1).jpg', 30, '8000000'),
(7, 'La Nissa', 16, 'assets/img/kapal/La Nissa Pict (1).jpeg', 31, '10000000'),
(8, 'Arua', 16, 'assets/img/kapal/Arua Pict (1).jpeg', 34, '25000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori_kapal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori_kapal`) VALUES
(1, 'vvip'),
(5, 'slepper'),
(15, 'luxury'),
(16, 'super vvip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `pembayaran`, `nomor`, `gambar`) VALUES
(1, 'gopay', '085231046663', 'assets/img/pembayaran/1631493logo-black780x390.jpg'),
(9, 'dana', '085231046663', 'assets/img/pembayaran/dana.png'),
(10, 'linkaja', '085231046663', 'assets/img/pembayaran/linkaja.png'),
(12, 'shopeepay', '085231046663', 'assets/img/pembayaran/1081027ebaed20dc6155d99946411a8721f1de6224d0b646a5c767072dfb1afb.png'),
(13, 'bca', '085231046663', 'assets/img/pembayaran/1200px-Bank_Central_Asia.svg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kapal_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  `tgl_aktif` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `user_id`, `kapal_id`, `pembayaran_id`, `tgl_aktif`, `tgl_berakhir`, `status`) VALUES
(4, 43, 7, 10, '2023-01-29', '2023-01-29', 1),
(5, 45, 7, 12, '2023-01-31', '2023-01-31', 1),
(6, 46, 8, 13, '2023-02-01', '2023-02-01', 1),
(9, 42, 8, 12, '2023-02-02', '2023-02-02', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `dekripsi` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `tujuan`, `dekripsi`, `kategori_id`, `foto`) VALUES
(30, 'Raja Ampat', 'bagus', 16, 'assets/img/tujuan/Raja Ampat.jpg'),
(31, 'Kanawa island', 'kanawa island', 16, 'assets/img/tujuan/Kanawa Island (1).jpg'),
(32, 'Mahoro Island', 'pulau indah', 15, 'assets/img/tujuan/Mahoro Island (1).jpg'),
(33, 'Manjarite Island', 'bagus sekali', 1, 'assets/img/tujuan/Manjarite Island (2).jpg'),
(34, 'Padar Island', 'bagus sekali', 16, 'assets/img/tujuan/Padar Island (1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `kelamin`, `email`, `username`, `password`, `no_telepon`, `foto`, `role`) VALUES
(24, 'admin', 'L', 'admin@easthorizontrip.co.id', 'admin', 'b93d83634de0b8143a418f91495b4fdb', '085231046663', '../assets/img/team/585e4bf3cb11b227491c339a.png', 'admin'),
(26, 'usertest', 'L', 'usertest@gmail.com', 'usertest', '8bc2ef369ba36349e5d85dcc8f955948', '085231046663', '../assets/img/team/ryan.png', 'admin'),
(33, 'pelem', 'L', 'pelem@gmail.com', 'pelem', 'e2c2f9110ea532e5e633e7abf1947b81', '085231046663', '../assets/img/team/image 1.png', 'pembeli'),
(34, 'susu', 'L', 'susu@gmail.com', 'susu', 'fed2d5a9a0a9a867d22fd966ec97b83e', '8938983477834', '../assets/img/team/image 4.png', 'pembeli'),
(42, 'vania', 'P', 'vania@gmail.com', 'vanisa', 'daa79954d11cbcd25c91dda710bb7f94', '9098877865675', '../assets/img/team/image 3.png', 'pembeli'),
(43, 'zakia', 'L', 'zakia@gmail.com', 'zakia', 'test123', '085231046663', '../assets/img/team/WhatsApp Image 2022-11-25 at 15.13.17.jpeg', 'pembeli'),
(45, 'rama', 'L', 'rama@gmail.com', 'rama', '36226b453eb255f672f118a1ecc1e4ec', '74838934793734789', '../assets/img/team/585e4bf3cb11b227491c339a.png', 'pembeli'),
(46, 'tesio', 'L', 'tesio@gmail.com', 'tesio', '3ea4d95290a98b3a2842cab6ffc11002', '085231046663', '../assets/img/team/WhatsApp Image 2023-01-29 at 20.08.36.jpeg', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`) USING BTREE,
  ADD KEY `fk_kapal_kategori` (`kategori_kapal`),
  ADD KEY `fk_kapal_tujuan` (`tujuan_kapal`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kapal_id` (`kapal_id`),
  ADD KEY `pembayaran_id` (`pembayaran_id`);

--
-- Indeks untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`),
  ADD KEY `fk_tujuan_kategori1` (`kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD CONSTRAINT `fk_kapal_kategori` FOREIGN KEY (`kategori_kapal`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kapal_tujuan` FOREIGN KEY (`tujuan_kapal`) REFERENCES `tujuan` (`id_tujuan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`kapal_id`) REFERENCES `kapal` (`id_kapal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemesanan_ibfk_6` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD CONSTRAINT `fk_tujuan_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
