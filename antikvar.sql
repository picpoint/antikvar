-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2021 г., 08:51
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `antikvar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `login`, `password`) VALUES
(54, 'Семёнов', 'Сеня', 'senya', '$2y$10$gf5tIxQzA0I.RlVTXiVFWO8jC35Ik4XFs6VZm6NEKqqUwCP2xMFJO'),
(55, 'Петров', 'Пётр', 'petropetr', '$2y$10$4x8MY1FHRw7OPyUzsEIRv.4O3KKt7ow/3gfP4io0nNAaPCe460L9u'),
(56, 'Денис', 'Денисов', 'dens', '$2y$10$68Xqzf5FT9xiPQMhY7yWp..uiy5FWNbdPdWEA2hSDEhroonJ2lBCy'),
(57, 'Игорь', 'Мартынюк', 'igormartin', '$2y$10$BH0lD3J8wj/7Q3Iok/1w9u1UvF2z/Lw53Er/aMgINjVVOqq7/0ur2'),
(58, 'Сергей', 'Архипов', 'arhipserg', '$2y$10$hiRpIoRBHrU2loqDVXYfh..DdANmmxlKUvfu2NzF2H97VIEhv9WkC'),
(59, 'Денис', 'Белоцерковцев', 'den', '$2y$10$OElXBH6OvWk8DM1xrvkPQ.zZo1gSM1.XzN77F2XqA6eKdb0BUPWYS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
