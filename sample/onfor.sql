-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 09 2017 г., 20:38
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dvd_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dvd`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `topic` varchar(40) not null,
  `result` varchar(40) not null
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `dvd`

--

INSERT INTO `students` (`id`, `name`, `surname`, `grade`, `birth`, `email`,`result`) VALUES
(2, 'Murat', 'Toishibaev', '11B', '05/12/2001', 'mtoishibaev@gmail.com', 'Types of Radiowaves','33/40'),
(11, 'Arafat', 'Matkarimov', '11B', '12/11/2000', 'warface.game.12@mail.ru', 'Types of Radiowaves','31/40'),
(12, 'Tolezhan', 'Kidiraly', '11B', '21/01/2001', 'tolezhan_02@mail.ru', 'Types of Radiowaves','29/40'),
(13, 'Daulet', 'Sergeev', '11B','12/05/2001', 'sergeev.daulet@mail.ru', 'Types of Radiowaves','05/40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
create table if not EXISTS `assessment`(
  `as_id` varchar(40) not null,
  `id` int(5) not null,
  `id_sub` int(5) not null
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

insert into `assessment` (`as_id`,`id`,`id_sub`) VALUES
  (1,2,1),
  (2,11,2),
  (3,12,3),
  (4,13,4);

CREATE TABLE IF NOT EXISTS `subjects` (
  `id_sub` int(5) not null,
  `subject` varchar(20) not null,
  `grade` varchar(12) not null,
  `term` varchar(10) not null,
  `chapter` varchar(30) not null,
  `topic` varchar(40) not null
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;;
--
INSERT INTO `subjects` (`id_sub`,`subject`,`grade`, `term`, `chapter`, `topic`) VALUES
(1,'Physics','12 grade', 'First', 'Radiowaves', 'FM and AM waves hehe'),
(2,'Physics','11 Grade', 'First', 'Radiowaves', 'Types of Radiowaves'),
(3,'Physics','11 Grade', 'Second', 'Termodynamics', 'Iso processes'),
(4,'Physics','12 Grade', 'Second', 'Generators', 'AC and DC Generator'),
(5,'Chemistry', '11 Grade', 'Third', 'Ionization','Adding and ionized elements'),
(6,'Chemistry', '11 Grade', 'Second', 'Electroliz', 'Anod and Catods'),
(7,'Chemistry', '12 grade','First',' Acid and bases', 'Archenius acids and bases theory'),
(8,'ICT','11 grade','fourth', 'Computer elements', 'Processor'),
(9,'ICT', '11 grade', 'Second', 'Programming', 'Html and css'),
(10,'ICT','11 grade','Fourth','Programming','SQL and javascript'),
(11,'ICT','12 grade','First','Security','Types of malware');


CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `birth` varchar(40) not null,
  `email` varchar(50) not null,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`,`birth`,`email`, `firstname`, `surname`, `username`, `password`) VALUES
(1,'11/12/2003','sample@mail.ru' ,'baobab', 'derevo', 'baobab', '123'),
(3, '13/10/2001','example@mail.ru','bb', 'bb', 'bb', '21ad0bd836b90d08f4cf');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dvd`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_sub`);

  alter table `assessment`
  add primary key (`as_id`);
--

--
-- AUTO_INCREMENT для таблицы `dvd`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `users`
ALTER TABLE `assessment`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `subjects`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
