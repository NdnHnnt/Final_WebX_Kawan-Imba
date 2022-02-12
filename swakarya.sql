-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2022 at 01:47 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swakarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assign_id` int(11) NOT NULL,
  `assign_user` int(11) NOT NULL,
  `assign_event` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assign_id`, `assign_user`, `assign_event`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 4, 2),
(5, 4, 3),
(6, 1, 1),
(7, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_des` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_des`) VALUES
(1, 'Pernak-pernik'),
(2, 'Seni'),
(3, 'Makanan dan Minuman'),
(4, 'Kerajinan Tangan'),
(5, 'Tradisional'),
(6, 'Modern');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_creator` int(5) NOT NULL,
  `event_type` int(11) DEFAULT NULL,
  `event_name` varchar(128) DEFAULT NULL,
  `event_date` varchar(128) NOT NULL,
  `event_loc` varchar(128) NOT NULL,
  `event_des` varchar(512) NOT NULL,
  `event_pic` varchar(128) NOT NULL,
  `event_contact` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_creator`, `event_type`, `event_name`, `event_date`, `event_loc`, `event_des`, `event_pic`, `event_contact`) VALUES
(1, 2, 2, 'Festival Aksesoris Surabaya', '10 Februari 2021 - 17 Februari 2021', 'Grand City Surabaya', 'Sebuah Festival Pemasaran Aksesoris oleh usaha kecil di Surabaya.  Featuring: Rebana Group &Tari Club.  Silahkan hubungi 081xxxxxxxxxx (Hana) melalui WhatsApp untuk pemesanan dan reservasi slot.', '1644672489_land_3.jpg', '08111111111'),
(2, 4, 2, 'Festival Kalung Surabaya', '1 Februari 2021 - 14 Februari 2021', 'Alun-alun Surabaya', 'Festival Kalung Surabaya', '1644673034_land_3.jpg', '081111111111'),
(3, 4, 1, 'Ngopi Bareng Jeng Nia', '10 Februari 2021', 'Zoom Meeting', 'Ngopi Bareng', '1644673098_land_2.jpg', '081111111111'),
(4, 1, 1, 'Pelatihan Branding by Swakarya', '8 Februari 2021', 'Zoom Meeting', 'Pelatihan Branding', '1644673328_land_2.jpg', '081111111111');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_des` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_des`) VALUES
(1, 'Tidak Langsung'),
(2, 'Langsung'),
(3, 'Langsung & Tidak Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_cat1` int(3) DEFAULT NULL,
  `user_nama` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_loc` varchar(256) DEFAULT NULL,
  `user_insta` varchar(128) DEFAULT NULL,
  `user_wa` varchar(128) DEFAULT NULL,
  `user_telegram` varchar(128) DEFAULT NULL,
  `user_shop` varchar(128) DEFAULT NULL,
  `user_pic` varchar(200) NOT NULL,
  `user_des` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_cat1`, `user_nama`, `user_email`, `user_password`, `user_loc`, `user_insta`, `user_wa`, `user_telegram`, `user_shop`, `user_pic`, `user_des`) VALUES
(1, 1, 'Manik-manik Cantik', 'manik@mail.com', 'e2e735edee93b141f8db7d861af5ba90', 'Surabaya, Jawa Timur', 'manik_manik_cantik', '123456789', '123456789', 'manik_manik_cantik', '1644671311_land_1.jpg', 'Usaha pembuatan aksesoris terkini dari manik-manik oleh sekelompok ibu-ibu rumah tangga.'),
(2, 1, 'Emak-emak Makrame', 'emak@mail.com', '2c66b812cd06c2f232bf0426d8108f89', 'Surabaya, Jawa Timur', 'mak_rame', '081xxxxxxxxx', '081xxxxxxxxx', 'toko_makrame1.com', '1644671503_land_5.jpg', 'Usaha pembuatan makrame oleh ibu-ibu di Jawa Timur. Usaha ini melibatkan makrame sebagai hasil tangan yang bernilai jual tinggi.'),
(3, 4, 'Topi Saya Bundar', 'topi@mail.com', '7fa0a7a9c6e15ca051b1c94e932769f6', 'Mojokerto, Jawa Timur', 'topi-topi', '081xxxxxxxxx', '081xxxxxxxxx', 'topi-topi-shop', '1644671663_land_4.jpg', 'Kerajinan pembuatan topi di Mojokerto.'),
(4, 4, 'Meronce-roncean', 'meronce@mail.com', '571b7c2486d438684edd78d13d8ae72b', 'Mojokerto, Jawa Timur', '', '', '', '', '1644672250_index_11.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
