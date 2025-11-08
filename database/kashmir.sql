-- Kashmir Database (Simplified & Clean)

CREATE DATABASE IF NOT EXISTS `kashmir` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kashmir`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table: bookhotel
CREATE TABLE `bookhotel` (
  `id` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(100) NOT NULL,
  `rtype` varchar(20) NOT NULL,
  `ccnum` bigint NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `room` tinyint NOT NULL,
  `crcnum` bigint NOT NULL,
  `bank` varchar(100) NOT NULL,
  `cpin` tinyint NOT NULL,
  `amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: bookshikara
CREATE TABLE `bookshikara` (
  `id` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(50) NOT NULL,
  `ccnum` bigint UNSIGNED NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `crcnum` bigint UNSIGNED NOT NULL,
  `bank` varchar(100) NOT NULL,
  `cpin` tinyint UNSIGNED NOT NULL,
  `amount` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: foodorder
CREATE TABLE `foodorder` (
  `id` varchar(255) NOT NULL,
  `food` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ceid` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: foods
CREATE TABLE `foods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Property` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_No` bigint UNSIGNED NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Pic1` varchar(255) NOT NULL,
  `Pic2` varchar(255) NOT NULL,
  `Pic3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table: hotels
CREATE TABLE `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `breakfast` enum('Yes','No') NOT NULL,
  `lunch` enum('Yes','No') NOT NULL,
  `dinner` enum('Yes','No') NOT NULL,
  `wifi` enum('Yes','No') NOT NULL,
  `ac` enum('Yes','No') NOT NULL,
  `kitchen` enum('Yes','No') NOT NULL,
  `pic1` varchar(255) DEFAULT NULL,
  `pic2` varchar(255) DEFAULT NULL,
  `pic3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: places
CREATE TABLE `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pop1` varchar(20) NOT NULL,
  `pop2` varchar(20) NOT NULL,
  `pop3` varchar(20) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `detail` mediumtext NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table: shik
CREATE TABLE `shik` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint NOT NULL,
  `city` varchar(25) NOT NULL,
  `Pic1` varchar(255) NOT NULL,
  `Pic2` varchar(255) NOT NULL,
  `Pic3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table: users
CREATE TABLE `users` (
  `s_no` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert single user
INSERT INTO `users` (`s_no`, `username`, `password`, `create_time`) VALUES
(1, 'hameem', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NOW());
