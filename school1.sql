-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2019 г., 08:38
-- Версия сервера: 10.3.15-MariaDB
-- Версия PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `woprosi1`
--

CREATE TABLE `woprosi1` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(2500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `woprosi1`
--

INSERT INTO `woprosi1` (`id`, `name`, `email`, `phone`, `question`) VALUES
(46, 'Мазылу Кристина', 'franairone2662@gmail.com', '+37379197084', 'привет'),
(52, 'Зубенко Михаил', 'zubenko1984@mail.ru', '+37368459978', 'Можно ли получиться расписание уроков для старших классов на электронную почту?'),
(53, 'Черненко Алёна', 'alionachern1994@gmail.com', '+37379125866', 'Какие кружки предоставляет школа для учащихся?'),
(54, 'Панков Валерий', 'valeriipank4554@gmail.com', '+37379451256', 'Есть ли учителя, которых проводят дополнительные занятия?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `woprosi1`
--
ALTER TABLE `woprosi1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `woprosi1`
--
ALTER TABLE `woprosi1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
