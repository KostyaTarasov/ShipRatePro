-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 09 2023 г., 12:58
-- Версия сервера: 5.7.36
-- Версия PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ship-rate-pro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fast_delivery`
--

DROP TABLE IF EXISTS `fast_delivery`;
CREATE TABLE IF NOT EXISTS `fast_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_kladr` varchar(255) NOT NULL,
  `target_kladr` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `price` float NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `error` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fast_delivery`
--

INSERT INTO `fast_delivery` (`id`, `source_kladr`, `target_kladr`, `weight`, `price`, `delivery_date`, `error`) VALUES
(1, 'КЛАДР_1', 'КЛАДР_2', 1.5, 300, '2023-09-01', ''),
(2, 'КЛАДР_3', 'КЛАДР_4', 2, 400, '2023-09-03', ''),
(3, 'КЛАДР_5', 'КЛАДР_6', 3, 600, '2023-09-05', 'Доставка невозможна');

-- --------------------------------------------------------

--
-- Структура таблицы `slow_delivery`
--

DROP TABLE IF EXISTS `slow_delivery`;
CREATE TABLE IF NOT EXISTS `slow_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_kladr` varchar(255) NOT NULL,
  `target_kladr` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `coefficient` float NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `error` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slow_delivery`
--

INSERT INTO `slow_delivery` (`id`, `source_kladr`, `target_kladr`, `weight`, `coefficient`, `delivery_date`, `error`) VALUES
(1, 'КЛАДР_1', 'КЛАДР_2', 1.5, 1.2, '2023-09-02', ''),
(2, 'КЛАДР_3', 'КЛАДР_4', 2, 1.5, '2023-09-04', ''),
(3, 'КЛАДР_5', 'КЛАДР_6', 3, 2, '2023-09-06', 'Доставка невозможна');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
