-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 17 2012 г., 13:19
-- Версия сервера: 5.5.21
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `noname`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text CHARACTER SET cp1251,
  `login` text COLLATE cp1251_general_cs NOT NULL,
  `pass` text COLLATE cp1251_general_cs NOT NULL,
  `enter` text COLLATE cp1251_general_cs NOT NULL,
  `reg` text COLLATE cp1251_general_cs NOT NULL,
  `toreg` text COLLATE cp1251_general_cs NOT NULL,
  `ua` text COLLATE cp1251_general_cs NOT NULL,
  `ru` text COLLATE cp1251_general_cs NOT NULL,
  `en` text COLLATE cp1251_general_cs NOT NULL,
  `exit` text COLLATE cp1251_general_cs NOT NULL,
  `adminmenu` text COLLATE cp1251_general_cs NOT NULL,
  `addpage` text COLLATE cp1251_general_cs NOT NULL,
  `delpage` text COLLATE cp1251_general_cs NOT NULL,
  `entertitle` text COLLATE cp1251_general_cs NOT NULL,
  `entertext` text COLLATE cp1251_general_cs NOT NULL,
  `send` text COLLATE cp1251_general_cs NOT NULL,
  `guest` text COLLATE cp1251_general_cs NOT NULL,
  `invalidpass` text COLLATE cp1251_general_cs NOT NULL,
  `dublicate` text COLLATE cp1251_general_cs NOT NULL,
  `lang` text COLLATE cp1251_general_cs NOT NULL,
  `admin` text COLLATE cp1251_general_cs NOT NULL,
  `role` text COLLATE cp1251_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `user`, `login`, `pass`, `enter`, `reg`, `toreg`, `ua`, `ru`, `en`, `exit`, `adminmenu`, `addpage`, `delpage`, `entertitle`, `entertext`, `send`, `guest`, `invalidpass`, `dublicate`, `lang`, `admin`, `role`) VALUES
(1, 'Користувач:', 'Логін:', 'Пароль:', 'Вхід', 'Реєстрація', 'Зареєстровано:', 'укр', 'рус', 'анг', 'Вихід', 'Адмін меню', 'Додати сторінку', 'Видалити сторінку', 'Введіть назву сторінки', 'Введіть текст сторінки', 'Відправити', 'Гість', 'Не вірний логін або пароль', 'Такий логін вже використовується', 'ua', 'Адмін:', 'Роль користувачів'),
(2, 'Пользователь:', 'Логин:', 'Пароль:', 'Вход', 'Регистрация', 'Зарегистрировано:', 'укр', 'рус', 'анг', 'Выход', 'Админ меню', 'Добавить страницу', 'Удалить страницу', 'Введите название страницы', 'Введите текст страницы', 'Отправить', 'Гость', 'Не верный логин или пароль', 'Такой логин уже используется', 'ru', 'Админ:', 'Роль пользователей'),
(3, 'User:', 'Login:', 'Password:', 'Enter', 'Registration', 'Sign up:', 'ua', 'ru', 'en', 'Exit', 'Admin menu', 'Add page', 'Delete page', 'Enter the title of the page', 'Enter the text of the page', 'Send', 'Guest', 'Wrong username or password', 'This username is already in use', 'en', 'Admin:', 'Role of users');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE cp1251_general_cs NOT NULL,
  `text` text COLLATE cp1251_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `text`) VALUES
(27, 'Сторінка українською', 'текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською текст українською'),
(28, 'Страница на руском', 'текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском текст на руском'),
(29, 'Page in English', 'page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english page in english');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE cp1251_general_cs NOT NULL,
  `pass` text COLLATE cp1251_general_cs NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `status`) VALUES
(4, 'root', '7b24afc8bc80e548d66c4e7ff72171c5', 1),
(5, 'victor', 'dfe6ab4ef7f6bb02a17c73f365fd85eb', 0),
(7, 'user3', '3afc79b597f88a72528e864cf81856d2', 0),
(8, 'bob', '9f9d51bc70ef21ca5c14f307980a29d8', 0),
(9, 'user1', 'a722c63db8ec8625af6cf71cb8c2d939', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
