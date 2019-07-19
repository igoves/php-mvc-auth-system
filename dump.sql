
USE `test`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `users`;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `forename` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `surname` varchar(100) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `forename`, `password`, `salt`, `surname`, `phone`, `description`, `picture`) VALUES
(1, 'admin@mail.com', 'Admin3', 'ea2959d87ea2974afcd45c6224d2e5322bc349db8e65f8a3c7460e2a8fb9a883', '>TrKAx^/<E^+aX!-5K|}pL!Po9(gH_Fr', 'Admin', '', '', ''),
(2, '1@1.com', 'aasd', '277d1f5ae91dac89890cc3c914182e261c9c0181d3302a5bf94981eebb4b0cb7', 'rJRxR%1N.udmQjmIsUyfWs.5l$Yo<JG\\', 'asdf', '', '', ''),
(3, '2@2.com', 'fgfghf', '1c7bec49964bf28241888e324fe30238f5c43b59470d2400507b6f3896d3690d', 'f.)rf,*>\"F.fsr\\$0/6O*[u/RZ##I\\J2', 'sadfas', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_cookies`
--

CREATE TABLE `user_cookies` (
  `id` bigint(20) NOT NULL,
  `hash` text NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_cookies`
--
ALTER TABLE `user_cookies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_cookies_user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `user_cookies`
--
ALTER TABLE `user_cookies`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user_cookies`
--
ALTER TABLE `user_cookies`
  ADD CONSTRAINT `user_cookies_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
