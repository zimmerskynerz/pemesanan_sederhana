-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 09.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_rena`
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
(13, '2020-11-09', 'sudah sampai proses perakitan', 1),
(13, '2020-11-12', 'PROSES PENGIRIMAN', 1),
(13, '2020-11-12', 'TERKIRIM', 14),
(14, '2020-11-12', 'sampai pengecatan', 1),
(14, '2020-11-12', 'PROSES PENGIRIMAN', 1),
(14, '2020-11-12', 'TERKIRIM', 30),
(15, '2020-07-11', 'pengecatan', 1),
(15, '2020-07-11', 'PROSES PENGIRIMAN', 1),
(15, '2020-07-11', 'TERKIRIM', 18),
(16, '2020-11-13', 'proses perakitan', 1),
(16, '2020-11-13', 'PROSES PENGIRIMAN', 1),
(16, '2020-11-13', 'TERKIRIM', 44),
(17, '2020-11-17', 'Proses pengelasan', 1),
(18, '2020-11-18', 'PROSES PENGIRIMAN', 1),
(18, '2020-11-18', 'TERKIRIM', 30),
(19, '2020-11-20', 'pengecatan ', 1),
(19, '2020-11-20', 'PROSES PENGIRIMAN', 1),
(19, '2020-11-20', 'TERKIRIM', 35),
(20, '2020-11-20', 'proses pembentukan bentuk kaca', 1),
(20, '2020-11-20', 'PROSES PENGIRIMAN', 1),
(20, '2020-11-20', 'TERKIRIM', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `kd_brg` int(9) NOT NULL,
  `harga` int(9) NOT NULL,
  `jml_beli` int(5) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_transaksi`, `kd_brg`, `harga`, `jml_beli`, `keterangan`) VALUES
(13, 2, 400000, 1, 'Warna catnya putih'),
(14, 2, 800000, 2, ''),
(15, 4, 500000, 1, 'sesuai produk'),
(16, 2, 400000, 1, 'warna merah'),
(16, 5, 80000, 1, 'Sesuai katalog'),
(17, 2, 400000, 1, 'Cat putih'),
(18, 6, 800000, 1, 'sesuai keterangan'),
(19, 10, 400000, 1, 'sesuai keterangan gambar'),
(20, 6, 800000, 1, 'sesuai keterangan gambar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_kategori` int(5) DEFAULT NULL,
  `kd_brg` int(9) NOT NULL,
  `nm_brg` text NOT NULL,
  `hrg_brg` int(11) NOT NULL,
  `detail` text NOT NULL,
  `foto` text DEFAULT NULL,
  `status` enum('TERSEDIA','KOSONG') NOT NULL DEFAULT 'TERSEDIA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_kategori`, `kd_brg`, `nm_brg`, `hrg_brg`, `detail`, `foto`, `status`) VALUES
(3, 2, 'Larberg', 400000, 'Dimensi (1500x40x40cm), finishing (cat spray)', '09112020164102WhatsApp Image 2020-09-16 at 15.59.45.jpeg', 'TERSEDIA'),
(4, 4, 'Standing Mirror', 500000, 'Lama pengerjaan sekitar 3 hari, Dimensi (50x150cm), kaca (3mm)', '25062020035658univeristy_mirror.webp', 'TERSEDIA'),
(4, 5, 'Aesthetic mirror', 80000, 'Dimensi (20x25cm), Kaca (3mm)', '09112020074923WhatsApp Image 2020-09-16 at 15.59.44.jpeg', 'TERSEDIA'),
(4, 6, 'Cermin Lingkaran', 800000, 'Dimensi (85x85cm), Kaca (5mm), Finishing (cat spray)', '09112020075123eb551a9f-b2fd-4434-8eaf-3eb57ba26cf3.jpg', 'TERSEDIA'),
(2, 7, 'Meja Lipat', 1000000, 'Lama pengerjaan 5 hari, dimensi (150x50x75cm)', '091120201436441394376_19065267-bba1-4872-841b-34f500dfc964.jpg', 'TERSEDIA'),
(2, 8, 'Meja Laci', 1200000, 'Lama pengerjaan 5 hari, dimensi (80x80x40cm)', '09112020150202IMG-20200916-WA0188.jpg', 'TERSEDIA'),
(2, 9, 'Nakas Minimalis', 750000, 'Lama pengerjaan 5 hari, dimensi (60x40x50cm)', '09112020151043ddddddd.jpg', 'TERSEDIA'),
(5, 10, 'Kursi Gold', 400000, 'Lama pengerjaan 5 hari, dimensi (40x40x100cm)', '09112020153045IMG-20200916-WA0190.jpg', 'TERSEDIA'),
(6, 11, 'White Board', 375000, 'Lama pengerjaan 3 hari, dimensi (60x120cm), papan (multiplek & melaminto)', '09112020161143ffff.jpg', 'TERSEDIA'),
(6, 12, 'Black Board', 375000, 'Lama pengerjaan 3 hari, dimensi (60x120cm)', '09112020161213WhatsApp Image 2020-09-16 at 15.59.47.jpeg', 'TERSEDIA'),
(2, 13, 'Meja Shabby', 250000, 'Lama pengerjaan 3 hari, diameter (59cm), tinggi (50cm)', '091120201625563856450_0e3314e8-e383-46f4-9c27-0b17ceb4ac39_1080_1080.jpg', 'TERSEDIA');

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
(2, 'Meja ', 'Semua jenis meja ', 'ADA'),
(3, 'Rak ', 'Semua jenis rak', 'ADA'),
(4, 'Cermin', 'Semua jenis cermin kaca', 'ADA'),
(5, 'Kursi', 'Semua jenis kursi ', 'ADA'),
(6, 'Papantulis', 'Semua jenis papantulis', 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jml_harga` int(11) DEFAULT NULL,
  `bayar` enum('LUNAS','PROSES','PALSU') DEFAULT NULL,
  `status` enum('MENUNGGU','PROSES','DIKIRIM','TERKIRIM','KONFIRMASI','GAGAL','DITERIMA') NOT NULL DEFAULT 'MENUNGGU',
  `foto` text DEFAULT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tgl_transaksi`, `jml_harga`, `bayar`, `status`, `foto`, `id_user`) VALUES
(13, '2020-11-09', 400000, 'LUNAS', 'TERKIRIM', '091120201658165677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 14),
(14, '2020-11-12', 800000, 'LUNAS', 'TERKIRIM', '121120201916285677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 30),
(15, '2020-07-11', 500000, 'LUNAS', 'TERKIRIM', '110720202044345677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 18),
(16, '2020-11-13', 480000, 'LUNAS', 'TERKIRIM', '131120200243115677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 44),
(17, '2020-11-17', 400000, 'LUNAS', 'DITERIMA', '171120201823025677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 14),
(18, '2020-11-18', 800000, 'LUNAS', 'TERKIRIM', '181120201306495677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 30),
(19, '2020-11-20', 400000, 'LUNAS', 'TERKIRIM', '201120200020175677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 35),
(20, '2020-11-20', 800000, 'LUNAS', 'TERKIRIM', '201120200247355677080_cf2ef623-8e05-4c90-80ec-0a6edb107d3e_648_648.jpg', 35);

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
  `alamat` text DEFAULT NULL,
  `no_hp` text DEFAULT NULL,
  `level` enum('PEMILIK','ADMIN','KONSUMEN') NOT NULL,
  `status` enum('ADA','HAPUS') NOT NULL DEFAULT 'ADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`, `nm_user`, `alamat`, `no_hp`, `level`, `status`) VALUES
(1, 'admin', '12345', 'renaafida04@gmail.com', 'Rena', 'Ds. Jatikulon, Kec. Mejobo, Kab. Kudus', '087231232442', 'ADMIN', 'ADA'),
(7, 'pemilik', '1234', 'pemilik@gmail.com', 'SAIFUL HUDA', 'Pemilik', '089123123234', 'PEMILIK', 'ADA'),
(9, 'KEVAN', '12345', 'kevan@gmail.com', 'KEVAN', 'BAE', '08521035210', 'KONSUMEN', 'ADA'),
(14, 'Aida', '12345', 'aida88@gmail.com', 'Aida Dwi Fitria', 'Jepara', '089627727522', 'KONSUMEN', 'ADA'),
(15, 'dian apriana', '12345', 'dian@gmail.com', 'dian apriana', 'gebog', '085727118572', 'KONSUMEN', 'ADA'),
(16, 'ajiw100', 'SALOKU123abc', 'ajiwartono@gmail.com', 'ajiwartono', 'Kudus', '08976526356', 'KONSUMEN', 'ADA'),
(17, 'satria', 'SALOKU123abc', 'satria@gmail.com', 'Satria Dwi Kurniawan', 'Kudus', '084448383888', 'KONSUMEN', 'ADA'),
(18, 'mukhlis', '12345', 'mukhlisfiliyang@gmail.com', 'mukhlis filiyang putra', 'pengkol jepara', '089786553113', 'KONSUMEN', 'ADA'),
(19, 'fauzi', '12345', 'fauzi77@gmail.com', 'Ahmad Fauzi', 'Pati', '085713134926', 'KONSUMEN', 'ADA'),
(20, 'vania', '12345', 'vania07@gamil.com', 'vania angraeni', 'Gondosari Gebog Kudus', '087771573000', 'KONSUMEN', 'ADA'),
(21, 'anang', '12345', 'anangsaff_@gmail.com', 'anang safrianto', 'Karangmalang', '081557711111', 'KONSUMEN', 'ADA'),
(22, 'sutamar', '12345', 'sutamar09@gmail.com', 'sutamar', 'Dawe Kudus', '0859165975997', 'KONSUMEN', 'ADA'),
(23, 'muhdhor', '12345', 'alimuhdhor00@gmail.com', 'ali muhdhor', 'mlati lor, kudus', '088215231570', 'KONSUMEN', 'ADA'),
(24, 'brilyan', '12345', 'brilyan_annas@gmail.com', 'brilyan choirul annas', 'Ds. panjang', '089525047828', 'KONSUMEN', 'ADA'),
(25, 'afiz', '12345', 'afzrfqi@gmail.com', 'afiz rifqi', 'padurenan gebog kudus', '08571230071', 'KONSUMEN', 'ADA'),
(26, 'bagus', '12345', 'bagus_sukma@gmail.com', 'bagus sukma nugraha', 'Kaliwungu kudus', '08910656989', 'KONSUMEN', 'ADA'),
(27, 'sulaiman', '12345', 'sulaimanjy@gmail.com', 'sulaiman jaya', 'gribig kudus', '082346970416', 'KONSUMEN', 'ADA'),
(28, 'Chafidz', '12345', 'chafidz_rahmad@gmail.com', 'chafidz rahmadiyansyah', 'menawan gebog kudus', '087856270544', 'KONSUMEN', 'ADA'),
(29, 'ivan', '12345', 'farizqi@gmail.com', 'ivan farizqi', 'Ds. Besito ', '089668482183', 'KONSUMEN', 'ADA'),
(30, 'faris', '12345', 'salaman1000@gmail.com', 'salman alfarisi', 'Ds. gemiring kidul, nalumsari', '085875677858', 'KONSUMEN', 'ADA'),
(31, 'irul', '12345', 'choianam8@gmail.com', 'choirul anam', 'Desa mijen kaliwungu kudus', '085757117569', 'KONSUMEN', 'ADA'),
(32, 'luthfi', '12345', 'abdullah_luthfi@gmail.com', 'abdullah luthfi', 'Ds. pelemkerep, mayong, jepara', '0899901196790', 'KONSUMEN', 'ADA'),
(33, 'neneng ', '12345', 'nenengsetyaputri@gmail.com', 'neneng setya putri', 'kayuapu, bae kudus', '085611563330', 'KONSUMEN', 'ADA'),
(34, 'hendri', '12345', 'hendriputra@gmail.com', 'hendri saputro', 'Ds. Pringtulis, Nalumsari, Jepara', '087661553188', 'KONSUMEN', 'ADA'),
(35, 'zulham', '12345', 'zulham_luthfi@gmail.com', 'M. zulham luthfi', 'Ds. Tunggul, Nalumsari, Jepara', '085665443112', 'KONSUMEN', 'ADA'),
(36, 'manda', '12345', 'fermanda_nda@gmail.com', 'romandho fermanda', 'Ds. Muryolobo, Nalumsari, Jepara', '081223456113', 'KONSUMEN', 'ADA'),
(37, 'luqman', '12345', 'luqmanhakim@gmail.com', 'luqman hakim', 'Ds. Bate Gede, Nalumsari, Jepara', '085677890011', 'KONSUMEN', 'ADA'),
(38, 'syihab', '12345', 'syihabuddin04@gmail.com', 'M. Syihabuddin', 'Ds. Jurang, Nalumsari, Jepara', '085113123566', 'KONSUMEN', 'ADA'),
(39, 'said', '12345', 'nursaid12@gmail.com', 'nur said', 'Ds. Jepang Pakis, Kudus', '087556899001', 'KONSUMEN', 'ADA'),
(40, 'cholis', '12345', 'm.cholis@gmail.com', 'muhammad cholis', 'Ds. Mlati Norowito, Kota, Kudus', '087115661711', 'KONSUMEN', 'ADA'),
(41, 'andika', '12345', 'baskara.m@gmail.com', 'muhammad andika baskara', 'Ds. Tritis, Nalumsari, Jepara', '081555226117', 'KONSUMEN', 'ADA'),
(42, 'evan', '12345', 'evan_ahmad@gmail.com', 'ahmad evan sayyidan', 'Ds. Prambatan Kidul, Kaliwungu, Kudus', '089566422114', 'KONSUMEN', 'ADA'),
(43, 'wawa', '12345', 'nashwa10@gmail.com', 'aisyah nashwa salsabilla', 'Ds. Garung Lor, Kaliwungu, Kudus', '087112455123', 'KONSUMEN', 'ADA'),
(44, 'armantio', '12345', 'armantiibrahim44@gmail.com', 'armantio ibrahim', 'Gondosari Gebog Kudus', '089765263568', 'KONSUMEN', 'ADA');

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
  MODIFY `kd_brg` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
