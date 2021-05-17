-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2021 г., 20:28
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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articule` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `user`, `articule`, `name`, `price`, `description`, `category`, `photo`, `date_of_create`) VALUES
(1, '', '314564357', 'Швецарский франк', 12000, 'Франк выпуска 1873 года. В отличном состоянии', 'coins', '', '0000-00-00 00:00:00'),
(2, '', '64590054', 'Карта Орловской области', 3567, 'Карта Орловской области выпуска 1643 года', 'maps', '', '0000-00-00 00:00:00'),
(3, 'dens', '111452_A', 'Бокал', 1577, 'Бокал образца 1800 г', 'dishes', '1621273853_unnamed.jpg', '2021-05-17 17:51:21'),
(4, 'dens', '12458P', 'Патифон', 47899, 'Патифон петра великого', 'tech', '1621274125_unnamed.png', '2021-05-17 17:55:25'),
(5, 'dens', '0001', 'Чайник', 5800, 'Чайник династии \"дзын\"', 'dishes', '1621274530_IMG_4467-1.jpg', '2021-05-17 18:02:10'),
(6, 'dens', '0001', 'Чайник', 3000, 'Чайничек', 'other', '1621274567_IMG_4467-1.jpg', '2021-05-17 18:02:47');

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
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
