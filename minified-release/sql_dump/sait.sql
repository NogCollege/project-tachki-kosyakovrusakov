-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2024 г., 09:53
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogg`
--

CREATE TABLE `catalogg` (
  `id` int NOT NULL,
  `arenda` tinyint(1) NOT NULL DEFAULT '1',
  `nazvan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorod` set('Ногинск','Дубай') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` set('Внедорожник','Бизнес','Премиум','Спорткар','Комфорт') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `god` year NOT NULL,
  `Dvigatel` set('Бензин','Электро','Дизель') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` double DEFAULT NULL,
  `loshadki` int NOT NULL,
  `max` int NOT NULL,
  `mid` int NOT NULL,
  `min` int NOT NULL,
  `opisanie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogg`
--

INSERT INTO `catalogg` (`id`, `arenda`, `nazvan`, `gorod`, `categoria`, `fullname`, `god`, `Dvigatel`, `volume`, `loshadki`, `max`, `mid`, `min`, `opisanie`) VALUES
(2, 1, 'Kia', 'Дубай', 'Внедорожник', 'Kia Sportage', 2022, 'Бензин', 2.4, 150, 7500, 6750, 6000, 'У Kia Sportage смелый и стремительный дизайн. Автомобиль создан с учетом современных технологий, которые позволяют чувствовать себя в дороге еще более уверенно, независимо от того, где вы находитесь и куда стремитесь. Для тех, кто продолжает двигаться. Вдохновение всегда рядом.'),
(3, 1, 'Jaguar', 'Дубай', 'Премиум', 'Jaguar XF', 2012, 'Бензин', 5.5, 163, 6590, 5931, 5272, 'aguar XF 2012 года представляет собой смелый взгляд на сегмент роскошных седанов и обладает богатым характером, который бросается в глаза сразу. Установленная на консоли кнопка запуска пульсирует красным, как будто где-то глубоко внутри бьется настоящее кошачье сердце. Нажатие кнопки приводит к оживлению Jaguar V8, а затем, подобно поднимающемуся занавесу в \"Травиате\", круглый переключатель передач оказывается в ладони водителя и поворачивает на место четыре вентиляционных отверстия. Это автомобильный театр, на фоне которого аналогичные работы различных моделей Audi, BMW и Mercedes-Benz кажутся скучными постановками для вечерних клубов.'),
(4, 1, 'Lexus', 'Ногинск', 'Комфорт', 'Lexus IS', 2018, 'Бензин', 2, 245, 14000, 10200, 8500, 'Благодаря экстравертному стилю Lexus IS выглядит быстрее, чем есть на самом деле, но его спортивное, изысканное шасси подтверждает стремление к спортивной роскоши. Базовая модель с задним приводом оснащена четырехцилиндровым двигателем с турбонаддувом, а версии V-6 доступны с полным приводом. Модель F Sport отличается более агрессивной внешностью и несколькими улучшениями производительности. IS мог бы быть быстрее, а его информационно-развлекательная система - лучше, но его продуманный дизайн и привлекательный характер вождения делают его достойной альтернативой высококонкурентному классу роскошных седанов начального уровня.'),
(5, 1, 'Toyota', 'Дубай', 'Внедорожник', 'Toyota RAV4', 2017, 'Бензин', 3.3, 199, 8500, 7000, 5500, 'oyota RAV4 пятого поколения была представлена на автосалоне в Нью Йорке в марте 2018 года. После модификации автомобиль не только полностью обновился в техническом плане, но и пережил кардинальные изменения внешнего вида. Новая платформа, улучшенные силовые установки, расширенный комплекс безопасности и брутальный внешний вид сделали RAV4 мужественнее как внутри, так и снаружи.'),
(6, 1, 'Mazda', 'Ногинск', 'Премиум', 'Mazda 6', 2021, 'Бензин', 2, 150, 5990, 5391, 4792, 'Динамика важна не только на дороге. Mazda6 стремительно расширяет список инновационных технологий, делающих каждый день за рулем комфортнее и безопаснее. Беспроводное подключение Apple CarPlay/Android Auto, адаптивный круиз-контроль MRCC, полностью светодиодная адаптивная система освещения ALH - узнайте подробнее, как именно Mazda6 ускоряет темп прогресса.'),
(17, 1, 'Bugatti', 'Дубай', 'Спорткар', 'Bugatti Chiron', 2022, 'Бензин', 8, 1500, 20000, 28000, 65000, 'Bugatti Chiron дебютировал на международном ежегодном женевском автосалоне в 2016 году. Автомобиль пришел на смену модели Veyron и был назван в честь автомобильного гонщика Луи-Александра Широна.  Внешность новинки во многом повторяет концепт Vision Gran Turismo, увидевший свет осенью 2015 года. У гиперкара потрясающая оптика головного освещения, состоящая из четырех светодиодных элементов в каждой фаре. Также в глаза бросается небольшая фирменная решетка радиатора, она состоит из множества маленьких сот, обладает хромированной окантовкой и содержит на себе логотип автопроизводителя. Внизу, по краям бампера располагаются большие вытянутые воздухозаборники, они не только придают автомобилю стремительный и агрессивный внешний вид, но также призваны пропускать через себя большие потоки воздуха для охлаждения агрегатов гиперкара.');

-- --------------------------------------------------------

--
-- Структура таблицы `deleted`
--

CREATE TABLE `deleted` (
  `id` int NOT NULL,
  `arenda` tinyint(1) NOT NULL DEFAULT '1',
  `nazvan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gorod` set('Ногинск','Дубай') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `categoria` set('Внедорожник','Бизнес','Премиум','Спорткар','Комфорт') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `god` year NOT NULL,
  `Dvigatel` set('Бензин','Электро','Дизель') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `volume` double DEFAULT NULL,
  `loshadki` int NOT NULL,
  `max` int NOT NULL,
  `mid` int NOT NULL,
  `min` int NOT NULL,
  `opisanie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogg`
--
ALTER TABLE `catalogg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogg`
--
ALTER TABLE `catalogg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `deleted`
--
ALTER TABLE `deleted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
