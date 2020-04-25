-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 25 2020 г., 21:53
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lastlover`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usersass`
--

CREATE TABLE `usersass` (
  `id` int(255) NOT NULL DEFAULT 1,
  `login` varchar(50) DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `sex` int(2) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Таблица с зарегестрированными пользователями\r\n';

--
-- Дамп данных таблицы `usersass`
--

INSERT INTO `usersass` (`id`, `login`, `firstname`, `lastname`, `sex`, `birthday`, `Password`) VALUES
(1, 'Razor6644', '123123123', '123123123', 0, '2020-04-06', '123123213213');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usersass`
--
ALTER TABLE `usersass`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
