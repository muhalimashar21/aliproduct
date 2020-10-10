-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 17.41
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text DEFAULT NULL,
  `product_point` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_image`, `product_point`, `created_at`, `updated_at`) VALUES
(38, 'BONEKA', 'dsfsdfs', 'logo.png', '1', '2020-10-08 20:01:53', '2020-10-08 20:01:53'),
(42, 'BONEKA', 'sdfds', 'al.jpg', '1', '2020-10-09 00:06:38', '2020-10-09 00:06:38'),
(43, 'q', 's', 'bg.png', '1', '2020-10-09 00:57:03', '2020-10-09 00:57:03'),
(44, 'BONEKA', 'fffdd', 'tw.png', '1', '2020-10-09 01:03:14', '2020-10-09 01:03:14'),
(46, 's', 's', 'ig.png', '1', '2020-10-09 01:42:12', '2020-10-09 01:42:12'),
(48, 'a', 'a', 'images/uuZgDPmHeIhxjRLRaCZUF57rCVIk4uzmF5zfakEX.png', '1', '2020-10-10 08:01:11', '2020-10-10 08:01:11'),
(49, 'as', 'as', 'images/IQlxYbPmaWwW8l2eL9qSkMsqBrf8P4nkdfA4iCB0.png', '1', '2020-10-10 08:09:37', '2020-10-10 08:09:37'),
(50, 'BONEKA', 'ss', 'images/ZnQEZx504m3itpWyZTi2LgcFvMsDWN0qLsfp1Eqi.png', '1', '2020-10-10 08:11:20', '2020-10-10 08:11:20'),
(54, 'aaa', 'aaa', NULL, '1', '2020-10-10 08:24:11', '2020-10-10 08:30:34'),
(56, 'Android', 'Androidss', 'images/Th2KxMwUBKcm2mMbmjK514GL4wyzaKEMzltDY5GF.jpeg', '0', '2020-10-10 08:36:38', '2020-10-10 08:36:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
