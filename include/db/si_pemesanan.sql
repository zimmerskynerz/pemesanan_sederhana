-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 17.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pemesanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_proses`
--

CREATE TABLE `rinci_proses` (
  `id_transaksi` int(9) NOT NULL,
  `tgl_proses` date NOT NULL,
  `ket_proses` text NOT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_proses`
--

INSERT INTO `rinci_proses` (`id_transaksi`, `tgl_proses`, `ket_proses`, `id_user`) VALUES
(2, '2020-04-19', 'ket_lain', 6),
(2, '2020-04-19', 'PROSES PENGIRIMAN', 6),
(2, '2020-04-19', 'TERKIRIM', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `kd_brg` int(9) NOT NULL,
  `luas` int(3) NOT NULL,
  `harga` int(9) NOT NULL,
  `jml_beli` int(5) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_transaksi`, `kd_brg`, `luas`, `harga`, `jml_beli`, `keterangan`) VALUES
(2, 1, 8, 6400000, 12, 'asdasdasd'),
(2, 1, 75, 15000000, 3, 'sdfsdfsdfdfs'),
(3, 2, 1, 2500000, 1, 'Warna Hijau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_kategori` int(5) DEFAULT NULL,
  `kd_brg` int(9) NOT NULL,
  `nm_brg` text NOT NULL,
  `hrg_brg` int(11) NOT NULL,
  `luas` float NOT NULL,
  `detail` text NOT NULL,
  `foto` text DEFAULT NULL,
  `status` enum('TERSEDIA','KOSONG') NOT NULL DEFAULT 'TERSEDIA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_kategori`, `kd_brg`, `nm_brg`, `hrg_brg`, `luas`, `detail`, `foto`, `status`) VALUES
(2, 1, 'Meja Belajar Anak', 200000, 3, 'Boh de, mumet sirahku', 'product-1.jpg', 'TERSEDIA'),
(3, 2, 'Kursi Clasic Brown', 2500000, 1, 'Ukuran tidak berpengaruh, silahkan isi semua dengan 1 untuk Panjang, Lebar, dan Tinggi', '19042020160355foto_kursi_tamu_minimalis_scaled.jpg', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nm_kategori` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('ADA','HAPUS') NOT NULL DEFAULT 'ADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `keterangan`, `status`) VALUES
(2, 'Meja Lipat', 'Meja dari besi dan bisa dilipat', 'ADA'),
(3, 'Paket Lengkap Tamu', 'Berisi Paket Untuk Ruang Tamu', 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jml_harga` int(11) DEFAULT NULL,
  `bayar` enum('LUNAS','CREDIT','PROSES') DEFAULT NULL,
  `status` enum('MENUNGGU','PROSES','DIKIRIM','TERKIRIM') NOT NULL DEFAULT 'MENUNGGU',
  `foto` text DEFAULT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tgl_transaksi`, `jml_harga`, `bayar`, `status`, `foto`, `id_user`) VALUES
(2, '2020-04-19', 21400000, 'LUNAS', 'TERKIRIM', '19042020122417harpaan.jpg', 5),
(3, '2020-04-19', 2500000, 'LUNAS', 'PROSES', '19042020160515Inilah Kelebihan Dari Kursi Taman Besi Minimalis yang Wajib Anda Ketahui.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nm_user` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` text DEFAULT NULL,
  `level` enum('PEMILIK','ADMIN','GUDANG','MEMBER') NOT NULL,
  `status` enum('ADA','HAPUS') NOT NULL DEFAULT 'ADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`, `nm_user`, `tgl_lahir`, `alamat`, `no_hp`, `level`, `status`) VALUES
(1, 'admin', '12345', 'renawijaya@gmail.com', 'Rena', '1997-02-23', 'Ds. Jatikulon, Kec. Mejobo, Kab. Kudus', '87231232442', 'ADMIN', 'ADA'),
(2, 'tegar', '12345', 'tegar@gmail.com', 'Tegar Islami', '1996-02-23', 'Jklaksldasklda', '895411547434', 'MEMBER', 'ADA'),
(3, '201653002', 'dian', 'rena22wijaya@gmail.com', '4444', '2020-04-20', 'dfsdsfdfsdfs', '8112904711', 'ADMIN', 'HAPUS'),
(4, 'rama', '123', 'rama@gmail.com2', 'rama2', '1997-02-23', 'sdkfjlskdfjksdl2', '871222322221', 'MEMBER', 'HAPUS'),
(5, 'zimmerskynerz', 'SALOKU123abc', 'ajiw100@gmail.com', 'Aji Wijaya', '0000-00-00', 'Ds. Sumber - Bulusan No. 69, Kudus', '0895411547434', 'MEMBER', 'ADA'),
(6, 'gudang', '1234', 'gudang@rizki.com', 'gudang', '2020-04-14', 'Gudnag Warehouse semarang', '871261616661', 'GUDANG', 'ADA'),
(7, 'pemilik', '1234', 'pemilik@gmail.com', 'PEMILIK', NULL, 'Pemilik', '089123123234', 'PEMILIK', 'ADA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rinci_proses`
--
ALTER TABLE `rinci_proses`
  ADD KEY `id_user2` (`id_user`),
  ADD KEY `id_tr` (`id_transaksi`);

--
-- Indeks untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD KEY `id_transaksi2` (`id_transaksi`),
  ADD KEY `id_brg` (`kd_brg`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_brg`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `kd_brg` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rinci_proses`
--
ALTER TABLE `rinci_proses`
  ADD CONSTRAINT `id_tr` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD CONSTRAINT `id_brg` FOREIGN KEY (`kd_brg`) REFERENCES `tbl_barang` (`kd_brg`),
  ADD CONSTRAINT `id_transaksi2` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
