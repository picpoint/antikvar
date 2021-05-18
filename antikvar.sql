-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2021 г., 22:51
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
(4, 'dens', '2321', 'Серьги', 56700, 'Золотые серьги барыни', 'jewelry', '1621278255_images (1).jpg', '2021-05-17 19:04:15'),
(5, 'arhipserg', '0044', 'Картина', 34500, 'Картина Васнецова \"море море\"', 'painting', '1621278600_images.jpg', '2021-05-17 19:10:00'),
(6, 'arhipserg', '111452_A', 'Картина', 2000, 'Корабль на волнах', 'painting', '1621278660_images.jpg', '2021-05-17 19:11:00'),
(7, 'igormartin', '0001', 'Ларец', 67000, 'Ларец для подарков', 'handmade', '1621278896_52816-512x384.jpg', '2021-05-17 19:14:56'),
(8, 'igormartin', '0001', 'Статуетка', 40500, 'На охоте.\r\nМеталл бронза', 'interyer', '1621279583_2020-06-0906.800.jpg', '2021-05-17 19:26:23'),
(9, 'dens', '001', 'Бокал', 3000, 'боказ позолото', 'other', '1621359820_9051756135.jpg', '2021-05-18 17:43:40');

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
(59, 'Денис', 'Белоцерковцев', 'den', '$2y$10$OElXBH6OvWk8DM1xrvkPQ.zZo1gSM1.XzN77F2XqA6eKdb0BUPWYS'),
(72, 'Слава', 'Мелих', 'slavmel', '$2y$10$i13ozDtDHUf3JW1B3c4qc.S7sGURGtMa8dno.L1o8JG7AWIS20rsa'),
(115, 'bbbbbbb', 'bbb', 'bbb', '$2y$10$FUde29yCxtnWpKNjg.IzwuWmxu5RGg.3TvBe.WyGQqg2WP50EdyKq');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
