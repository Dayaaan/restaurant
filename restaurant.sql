-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2018 at 03:24 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `seat_number` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `created_at`, `seat_number`, `booking_date`, `booking_time`, `user_id`) VALUES
(1, '2018-06-19 15:21:56', 1, '2018-01-01', '12:00:00', 16),
(2, '2018-06-25 14:27:01', 3, '2018-04-01', '12:00:00', 16),
(3, '2018-06-26 11:17:29', 1, '2018-01-01', '12:00:00', 16);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `status`) VALUES
(147, 16, '2018-06-26 14:30:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `priceHT` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`id`, `product_id`, `order_id`, `priceHT`, `quantity`) VALUES
(138, 1, 147, '2.50', 4),
(139, 2, 147, '4.58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priceHT` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `priceHT`, `quantity`, `image`, `created_at`, `update_at`) VALUES
(1, 'Coca Cola', 'Hum le Coca cola avec 10 morceaux de sucre et tout plein de caféine', '2.50', 50, '/images/meals/coca.jpg', '2018-06-15 15:11:00', '2018-06-15 15:11:00'),
(2, 'Bagel Thon', 'Ces petits pains, d\'une dizaine de centimètres de diamètre originaires d\'Europe centrale ou orientale ont suivi les immigrants juifs d\'Europe de l\'Est aux États-Unis et au Canada où ils sont servis garnis de fromage blanc..', '4.58', 20, '/images/meals/bagel_thon.jpg', '2018-06-15 00:00:00', '2018-06-15 00:00:00'),
(3, 'Bacon Cheeseburger', 'Ce délicieux cheeseburger contient un steak haché viande française de 150g ainsi que d\'un buns grillé juste comme il faut, le tout accompagné de frites fraîches maison !', '10.42', 50, '/images/meals/bacon_cheeseburger.jpg', '2018-06-17 00:00:00', '2018-06-17 00:00:00'),
(4, 'Carrot Cake', 'Le carrot cake maison ravira les plus gourmands et les puristes : tous les ingrédients sont naturels ! À consommer sans modération', '5.64', 20, '/images/meals/carrot_cake.jpg', '2018-06-17 01:00:00', '2018-06-17 01:00:00'),
(5, 'Donut Chocolat', 'Les donuts sont fabriqués le matin même et sont recouvert d\'une délicieuse sauce au chocolat !', '5.16', 50, '/images/meals/chocolate_donut.jpg', '2018-06-17 02:00:00', '2018-06-17 02:00:00'),
(6, 'Milshake', 'Notre milkshake bien crémeux contient des morceaux d\'Oréos et est accompagné de crème chantilly et de smarties en guise de topping. Il éblouira vos papilles !', '4.45', 20, '/images/meals/milkshake.jpg', '2018-06-18 00:00:00', '2018-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `birthday`, `email`, `password`, `address`, `city`, `zipcode`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Martin', 'Nguyen', '1989-12-06', 'martin@gmail.com', 'martin', '3 Boulevard Jules Verne', 'Rezé', '44400', '652145228', '2018-06-15 00:00:00', '2018-06-15 00:00:00'),
(9, 'Paul', 'Logan', '1940-01-01', 'logan@gmail.com', '$2y$10$NUWRwC/JLDTPYCohosVuleDm/u0N4cBCCnIW.inXUCmcGckvzYPJe', '3 bd jules verne Logan44-', 'Nantes', '44300', '0240506555', '2018-06-18 16:15:10', '2018-06-18 16:15:10'),
(11, 'dayfez', 'Dayan', '1940-01-01', 'dayan@gmail.com', '$2y$10$pSIW9elBaFSFkq0V058IHe9gSS0ILmQSS11varL2Y.nwdrstFrQAe', 'fezfz', 'fezfez', '44400', '4400', '2018-06-18 21:43:56', '2018-06-18 21:43:56'),
(12, 'sacha', 'Sacha', '1940-01-01', 'sacha@gmail.com', '$2y$10$0l4.0t/69k3i8b4qyv0Yqu3RKVpqE2yFWXpX/yu6wzSrZZgeITJqG', 'fezfez', 'fezfze', 'fezfe', 'fezfze', '2018-06-19 11:56:23', '2018-06-19 11:56:23'),
(13, 'fezfez', 'fezfz', '1940-01-01', 'fefe@gmail.com', '$2y$10$rEYnR7o/vLGLfO50CiSitORDiXxGzzOhcrOmkl1wB3akO73BRFyQq', 'fezfez', 'fezfz', 'fez', 'fzef', '2018-06-19 11:57:47', '2018-06-19 11:57:47'),
(14, 'Albert', 'Albert', '1940-01-01', 'Albert@gmail.com', '$2y$10$DSUVyCe2Ibr.Vz2OS50RK.0N3ArsTBzitIGBmblZqgxJXNmYeUzWm', 'Albert', 'Albert', 'Alber', 'Albert', '2018-06-19 12:12:08', '2018-06-19 12:12:08'),
(15, 'zfez', 'fez', '1940-01-01', 'fezfz@gmail.com', '$2y$10$pHJqX/eLGEoMs2wOAkpd/eWwRYQevuSzqFoxGe4nltge6SOuwKzsi', 'ezfezf', 'fezf', 'ezfez', 'fezfez', '2018-06-19 15:12:38', '2018-06-19 15:12:38'),
(16, 'Martin', 'Martin', '1940-01-01', 'MartinV@gmail.com', '$2y$10$/ytTVx9BscyFoFKeaUicW.9M8cjPCYyLr7LBosTQDTpmZAD27jDlS', 'Martin', 'Martin', '44400', '0240506554', '2018-06-19 15:15:14', '2018-06-19 15:15:14'),
(17, 'fezfez', 'fezfez', '1940-01-01', 'fezfze@gmail.com', '$2y$10$BGEW91JStLQloKaOGyCFt..LgaOz7Yl8AAnOgmuHSTiyaKrC3ISly', 'fezfez', 'fezf', 'zef', 'ezfez', '2018-06-19 15:21:38', '2018-06-19 15:21:38'),
(18, 'Bernard', 'Jean', '1942-04-05', 'jeanbernard@gmail.com', '$2y$10$gOnuZWv0aw5riG89biGdoufYgLwfsmMP83oR.HqRUBRA2Csvi1RIi', '3 bd jules verne', 'nantes', '44300', '852545220', '2018-06-19 15:28:30', '2018-06-19 15:28:30'),
(19, 'Nguyen', 'Dayan', '1940-01-01', 'Dayaaan@gmail.com', '$2y$10$8R6ILXxbRbYSPowMiE5ozOCbD38rMLDcOlLsVq4AIjLByjIRW0MwO', 'Dayan', 'Reze', '44400', '0240505441', '2018-06-26 11:28:38', '2018-06-26 11:28:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_line_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
