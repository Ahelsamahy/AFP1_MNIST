-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- G?p: 127.0.0.1
-- L?trehoz?s ideje: 2021. Okt 04. 21:16
-- Kiszolg?l? verzi?ja: 10.4.19-MariaDB
-- PHP verzi?: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS afp1_mnist
CREATE OR REPLACE DATABASE afp1_mnist;
USE afp1_mnist;


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL CHECK (`email` LIKE '_%@_%._%'),
  `user_lvl` int NOT NULL DEFAULT 0 CHECK (`user_lvl` < 2),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`, `user_lvl`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

CREATE TABLE `mnist_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `location` varchar(255) NOT NULL,
  UNIQUE(`location`),
  `estimated_value` int,
) ENGINE=INNODB DEFAULT CHARSET=latin1;

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `image_id` int(11) NOT NULL,
  FOREIGN KEY (`image_id`) REFERENCES mnist_images(id),
  `user_id` int(11),
  FOREIGN KEY (`user_id`) REFERENCES users(id),
  `value` int CHECK (`value` >= 0 AND `value` <= 9),
  `submmited_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
