-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 02 2020 г., 19:46
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
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` date NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password_again` varchar(10) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `usersass`
--

INSERT INTO `usersass` (`id`, `login`, `firstname`, `lastname`, `sex`, `age`, `password`, `password_again`, `status`) VALUES
(1, 'admin', 'Владимир', 'Жданов', '23', '1996-09-04', '123123', '123123', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usersass`
--
ALTER TABLE `usersass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usersass`
--
ALTER TABLE `usersass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
