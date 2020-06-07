-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2020 г., 16:30
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
-- База данных: `last_love`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `data_birth` date NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` int(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `data_birth`, `login`, `password`, `status`, `sex`, `avatar`, `image`) VALUES
(564, 'Владимир', 'Жданов', '2020-06-01', 'admin_vova', '123123', 0, 'Мужской', '', ''),
(565, 'Владимир', '333', '2020-06-02', '123123', '232323', 0, 'Мужской', '', ''),
(566, 'Владимир', '333', '2020-06-02', '123321', '123321', 0, 'Мужской', '', ''),
(567, '2222', '2222', '2020-06-02', '2222', '2222', 0, 'Мужской', '', ''),
(568, '444', '444', '2020-06-03', '444', '444', 0, 'Мужской', 'e6fa57cd8f2cedfc1f91373780997d4b.jpeg', ''),
(569, '111', '111', '2020-06-01', '111', '111', 0, 'Женский', 'c7ab2422c6712398ad376746b5d41c86.jpeg', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
