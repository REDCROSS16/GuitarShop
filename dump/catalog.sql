-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 02 2022 г., 14:34
-- Версия сервера: 10.1.44-MariaDB
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double UNSIGNED NOT NULL DEFAULT '0',
  `old_price` double UNSIGNED NOT NULL DEFAULT '0',
  `hit` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `sale` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `content`, `img`, `price`, `old_price`, `hit`, `sale`) VALUES
(1, 'CORT AD810M Акустическая гитара', 'cort-ad810m-akusticeskaya-gitara', 'Описание гитары CORT AD810M Акустическая гитара', '1.jpg', 2799, 3142, 1, 1),
(2, 'Crafter D6/N Акустическая гитара', 'crafter-d6n-akusticeskaya-gitara', 'Описание гитары Crafter D6/N Акустическая гитара', '2.jpg', 12626, 0, 1, 0),
(3, 'Crafter D7/N Акустическая гитара', 'crafter-d7n-akusticeskaya-gitara', 'Описание гитары Crafter D7/N Акустическая гитара', '3.jpg', 13338, 0, 1, 0),
(4, 'Crafter D8/N Акустическая гитара', 'crafter-d8n-akusticeskaya-gitara', 'Описание гитары Crafter D8/N Акустическая гитара', '4.jpg', 13794, 0, 0, 0),
(5, 'Crafter D8/TS Акустическая гитара', 'crafter-d8ts-akusticeskaya-gitara', 'Описание гитары Crafter D8/TS Акустическая гитара', '5.jpg', 14165, 0, 0, 0),
(6, 'Crafter GA30/N Акустическая гитара', 'crafter-ga30n-akusticeskaya-gitara', 'Описание гитары Crafter GA30/N Акустическая гитара', '6.jpg', 22059, 0, 0, 0),
(7, 'Crafter GA45/N Акустическая гитара', 'crafter-ga45n-akusticeskaya-gitara', 'Описание гитары', '7.jpg', 27075, 0, 0, 0),
(8, 'CRAFTER GA6/N Акустическая гитара', 'crafter-ga6n-akusticeskaya-gitara', 'Описание гитары CRAFTER GA6/N Акустическая гитара', '8.jpg', 12654, 0, 0, 0),
(9, 'CRAFTER GA7/N акустическая гитара', 'crafter-ga7n-akusticeskaya-gitara', 'Описание гитары CRAFTER GA7/N акустическая гитара', '9.jpg', 13367, 0, 0, 0),
(10, 'CRAFTER GA8/BK акустическая гитара', 'crafter-ga8bk-akusticeskaya-gitara', 'Описание гитары CRAFTER GA8/BK акустическая гитара', '10.jpg', 13794, 0, 0, 0),
(11, 'CRAFTER GA8/N Акустическая гитара', 'crafter-ga8n-akusticeskaya-gitara', 'Описание гитары CRAFTER GA8/N Акустическая гитара', '11.jpg', 13794, 0, 0, 0),
(12, 'Crafter HiLITE-T CD/N Акустическая гитара', 'crafter-hilite-t-cdn-akusticeskaya-gitara', 'Описание гитары Crafter HiLITE-T CD/N Акустическая гитара', '12.jpg', 10175, 0, 0, 0),
(13, 'Crafter J15/N акустическая гитара', 'crafter-j15n-akusticeskaya-gitara', 'Описание гитары Crafter J15/N акустическая гитара', '13.jpg', 16743, 0, 0, 0),
(14, 'CRAFTER J18/N акустическая гитара. джамбо', 'crafter-j18n-akusticeskaya-gitara-dzambo', 'Описание гитары CRAFTER J18/N акустическая гитара. джамбо', '14.jpg', 17271, 0, 0, 0),
(15, 'Crafter LITE-D SP/N Акустическая гитара', 'crafter-lite-d-spn-akusticeskaya-gitara', 'Описание гитары Crafter LITE-D SP/N Акустическая гитара', '15.jpg', 10545, 0, 0, 0),
(16, 'Crafter MD-42/TR Акустическая гитара', 'crafter-md-42tr-akusticeskaya-gitara', 'Описание гитары Crafter MD-42/TR Акустическая гитара', '16.jpg', 9006, 0, 0, 0),
(17, 'CRAFTER TA070/Light Amber Акустическая гитара', 'crafter-ta070light-amber-akusticeskaya-gitara', 'Описание гитары CRAFTER TA070/Light Amber Акустическая гитара', 'no-image.png', 20378, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
