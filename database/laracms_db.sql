-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 01:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `nama_produk` varchar(45) NOT NULL,
  `harga_satuan` decimal(10,2) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `subtotal` decimal(15,2) NOT NULL DEFAULT 0.00,
  `nota_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`nama_produk`, `harga_satuan`, `kuantitas`, `subtotal`, `nota_id`, `produk_id`) VALUES
('Taro', '5000.00', 1, '5000.00', 16, 1),
('Rebo', '15000.00', 1, '15000.00', 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `total` decimal(20,2) NOT NULL,
  `ppn` decimal(5,2) NOT NULL,
  `tagihan` decimal(20,2) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `nama_customer` varchar(65) DEFAULT NULL,
  `jenis_faktur` varchar(15) NOT NULL COMMENT 'penjualan = customer beli secara online.\npembelian = pihat toko belanja barang ke distributor.',
  `id_pegawai` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(65) DEFAULT NULL,
  `status_transaksi` varchar(45) NOT NULL COMMENT 'cancel\npending\nsuccess'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id`, `tanggal`, `total`, `ppn`, `tagihan`, `id_customer`, `nama_customer`, `jenis_faktur`, `id_pegawai`, `nama_pegawai`, `status_transaksi`) VALUES
(7, NULL, '0.00', '10.00', '0.00', NULL, NULL, 'penjualan', NULL, NULL, 'success'),
(8, NULL, '0.00', '10.00', '0.00', NULL, NULL, 'penjualan', NULL, NULL, 'success'),
(9, NULL, '0.00', '10.00', '0.00', NULL, NULL, 'penjualan', NULL, NULL, 'pending'),
(16, NULL, '0.00', '10.00', '0.00', 3, 'putra', 'penjualan', NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `preview`
--

CREATE TABLE `preview` (
  `id` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `t_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `thumbnail`, `harga`, `deskripsi`, `stok`, `kategori_id`) VALUES
(1, 'Taro', '/assets/image/taro.png', '5000.00', NULL, 10, 1),
(2, 'Rebo', '/assets/image/rebo.jpg', '15000.00', NULL, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

CREATE TABLE `t_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `url` varchar(200) NOT NULL,
  `t_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`id`, `nama`, `url`, `t_role_id`) VALUES
(1, 'Dashboard', '/manager/dashboard', 1),
(2, 'Home', '/', 3),
(3, 'About', '/about', 3),
(4, 'Contact', '/contact', 3),
(5, 'Shop', '/shopping', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_nota`
--

CREATE TABLE `t_nota` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nota`
--

INSERT INTO `t_nota` (`id`, `tanggal`, `subtotal`) VALUES
(1, '2020-03-12', '10000'),
(2, '2020-03-20', '10000'),
(3, '2020-02-20', '5000'),
(4, '2020-02-11', '5000'),
(5, '2020-01-16', '4000'),
(6, '2020-04-01', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `t_posts`
--

CREATE TABLE `t_posts` (
  `id` varchar(65) NOT NULL,
  `title` varchar(65) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `category` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_posts`
--

INSERT INTO `t_posts` (`id`, `title`, `content`, `category`) VALUES
('2222222', '2222222', '2222222', 'blog'),
('about', 'About', 'Ini halaman about', 'page'),
('contact', 'Contact', 'Ini halaman contact', 'page'),
('home', 'Home', 'Ini halaman home', 'page'),
('honda-indonesia-jajaki-kemungkinan-ekspor-ke-australia', 'Honda Indonesia Jajaki Kemungkinan Ekspor ke Australia', ' PT Honda Prospect Motor (HPM) tengah merundingkan secara internal terkait dengan rencana ekspor ke Australia. Hal ini menyusul ratifikasi perjanjian Indonesia-Australia Comprehensive Economic Partenership Agreement (IE-CEPA) telah selesai.\r\n\r\nAdanya perj', 'blog'),
('minim-kafein-benarkah-kopi-decaf-lebih-aman-untuk-kesehatan', 'Minim Kafein, Benarkah Kopi Decaf Lebih Aman untuk Kesehatan?', ' Kopi tanpa kafein atau decaf jadi solusi bagi penggemar minuman ini tapi sensitif terhadap kafein. Kopi ini juga jadi pilihan ibu hamil dan menyusui atau mereka yang memiliki gangguan kecemasan. \r\n\r\nKopi ini sebenarnya sama dengan kopi biasa, hanya kafei', 'blog'),
('seberapa-aman-berwisata-ke-sekitar-gunung-merapi', 'Seberapa Aman Berwisata ke Sekitar Gunung Merapi?', 'Pekan lalu, Gunung Merapi mengalami erupsi freatik. Gunung Merapi memang sulit ditebak, diam lalu tiba-tiba \"batuk\" -- setelah sekian lama tidak ada aktivitas yang signifikan. Erupsi freatik ini memang merepotkan. Pasalnya, pada saat bukan hari libur pun,', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `nama`, `foto`, `harga`, `stok`) VALUES
(1, 'Oreo', 'assets/produk/oreo.jpg', 5000, 10),
(2, 'Pop Mie', 'assets/produk/popmie.jpg', 5000, 50),
(3, 'Indomie', 'assets/produk/indomie.jpg', 2500, 80);

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`id`, `nama`) VALUES
(1, 'Manager'),
(2, 'Employee'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `t_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama`, `email`, `password`, `status`, `t_role_id`) VALUES
(1, 'dika', 'dika@gmail.com', '123456', 'active', 1),
(2, 'fajar', 'fajar@gmail.com', '123456', 'active', 2),
(3, 'putra', 'putra@gmail.com', '123456', 'active', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`nota_id`,`produk_id`),
  ADD KEY `fk_keranjang_nota1_idx` (`nota_id`),
  ADD KEY `fk_keranjang_produk1_idx` (`produk_id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `preview`
--
ALTER TABLE `preview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_preview_t_produk1_idx` (`t_produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_t_produk_kategori1_idx` (`kategori_id`);

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_t_menu_t_roole1_idx` (`t_role_id`);

--
-- Indexes for table `t_nota`
--
ALTER TABLE `t_nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_posts`
--
ALTER TABLE `t_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_t_user_t_roole_idx` (`t_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `preview`
--
ALTER TABLE `preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_nota`
--
ALTER TABLE `t_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_keranjang_nota1` FOREIGN KEY (`nota_id`) REFERENCES `nota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_keranjang_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preview`
--
ALTER TABLE `preview`
  ADD CONSTRAINT `fk_preview_t_produk1` FOREIGN KEY (`t_produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_t_produk_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD CONSTRAINT `fk_t_menu_t_roole1` FOREIGN KEY (`t_role_id`) REFERENCES `t_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `fk_t_user_t_roole` FOREIGN KEY (`t_role_id`) REFERENCES `t_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
