-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 29 2018 г., 16:10
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `faststart`
--
CREATE DATABASE IF NOT EXISTS `faststart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `faststart`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `pass`, `email`, `date_created`, `role`) VALUES
(12, 'Vasya', 'vasyan97', 'vasiliy12@mail.ru', '2018-11-20 16:34:17', 1),
(13, 'Ivan', 'qweqweqwe', 'grozny@yandex.ru', '2018-11-20 16:37:03', 1),
(14, 'David', '12345678', 'davidka@google.yandex', '2018-11-20 16:38:46', 1),
(16, '12Putin', 'asdasd', 'putin12@gmail.com', '2018-11-20 16:40:38', 1),
(17, 'Hello', 'zxc123', 'helloworld@mail.ru', '2018-11-20 16:41:22', 1),
(34, 'Valera', 'valera111', 'valerianka@list.ru', '2018-11-20 20:19:00', 1),
(36, 'Admin', 'admin', 'admin@faststart.ru', '2018-11-20 20:20:48', 1),
(37, 'Moder', 'moder', 'moder@faststart.ru', '2018-11-20 20:21:40', 1),
(39, 'Arkadiy990', 'fhrfif111', 'arkadiy2002@yandex.ru', '2018-11-20 20:30:07', 1),
(40, 'SNikers', 'vsemprivet', 'chocolate@gmail.com', '2018-11-20 20:31:13', 1),
(41, 'Twix', 'twixxx', 'twix@mail.ru', '2018-11-20 20:36:22', 1),
(42, 'Mars', 'qwertyu', 'mars@mail.ru', '2018-11-20 20:49:25', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
