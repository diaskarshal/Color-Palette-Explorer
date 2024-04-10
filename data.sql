-- phpMyAdmin SQL
-- Host: 127.0.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:00";

-- Database: `data`
-- Table `db`

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `palette` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
