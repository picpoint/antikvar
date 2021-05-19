-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2021 г., 09:02
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
(10, 'dens', '0001', 'Шкатулка', 150000, 'Шкатулка позолоченная, выпуска 1735 года.\r\nВ отличном состоянии', 'interyer', '1621402430_0_e19d9_9c4657f_XL.jpg', '2021-05-19 05:33:50'),
(12, 'dens', '0002', 'Бумажный рубль', 1500, 'Советский бумажный рубль 1991г.', 'bons', '1621402631_SUR_1_1991_F-03f997e4.jpeg', '2021-05-19 05:37:11'),
(13, 'dens', '5535Ч', 'Часы карманные', 45000, 'Часы карманные, без цепочки.\r\nПозолота. Выпуск 1735 года. В отличном состоянии, ходят.', 'tech', '1621402770_2020-06-0901.800.jpg', '2021-05-19 05:39:30'),
(14, 'igormartin', '3200525B', '100 000 Пессо', 50000, '100 000 Песо, аргентинская купюра, выпуска 1850 года. На купюре изображён аргентинский монарх Сельве де Саинт', 'bons', '1621402992_388f392146c76ab49498aad641c6c209.jpg', '2021-05-19 05:43:12'),
(15, 'igormartin', '898763В', 'Самовар', 75300, 'Медный самовар, времён Екатерины II\r\n', 'dishes', '1621403086_samovar.jpg', '2021-05-19 05:44:46'),
(16, 'arhipserg', '6522_R', 'Кольцо', 4363, 'Серебряное кольцо. Выпуск Страна Америка, год 1913. ', 'jewelry', '1621403346_-.jpg_220x220.jpg', '2021-05-19 05:49:06'),
(17, 'arhipserg', '55CDR', 'Светильник', 6500, 'Винтажный светильник, выпуск 1975г в рабочем состоянии.', 'tech', '1621403426_1190515.jpg', '2021-05-19 05:50:26'),
(18, 'arhipserg', 'Ч11241', 'Часы ', 4700, 'Часы домашние, наполочные, советские, в хорошем качестве, рабочие.', 'tech', '1621403994_1613812615027_bulletin.jpg', '2021-05-19 05:59:54'),
(19, 'arhipserg', '87555', 'Аметист', 36000, 'Аметист кристалл', 'interyer', '1621404144_watermark-default.jpg', '2021-05-19 06:02:24');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
