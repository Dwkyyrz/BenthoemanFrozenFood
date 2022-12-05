-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Des 2022 pada 04.25
-- Versi server: 5.7.24
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frozenfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`idcart`, `idproduct`, `jumlah`, `harga`) VALUES
(1, 1, 3, 25.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `img` varchar(200) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `nama_produk`, `harga`, `img`, `detail`) VALUES
(12, 'supri', 123211, 'vens1.png', 'makanananna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `rule` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `alamat`, `notelp`, `rule`, `time_stamp`) VALUES
(2, 'bima prayoga', 'bima123', 'liebima5@gmail.com', '6eedaeff2ab0a876cfe0bf1600db9207', 'candipari', '983521183', 'client', '2022-11-19 09:31:11'),
(3, 'leo', 'leo123', 'fachry150503@gmail.com', '657b298b04e033810343842f993c9817', 'cppppppp', '9888888', 'client', '2022-11-19 09:32:34'),
(4, 'bima', 'bima123', 'bima@gmail.com', '7fcba392d4dcca33791a44cd892b2112', 'candipari', '812333233', 'client', '2022-11-20 13:37:44'),
(5, 'BIMA PRAYOGA', 'asdfsa', 'asdf@gmail.com', '7fcba392d4dcca33791a44cd892b2112', 'asdf', 'aasdf', 'client', '2022-11-20 13:56:43'),
(6, 'leo', 'leo1', 'liebima5@gmail.com', '657b298b04e033810343842f993c9817', 'cppppppp', '089699948423', 'client', '2022-11-21 14:05:50'),
(7, 'BIMA PRAYOGA', 'bima1234', 'liebima5@gmail.com', '1efdb46c9c7edb360c6464f04849bd50', 'cppppppp', '0879646782', 'client', '2022-11-27 10:27:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
