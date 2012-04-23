-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 22 2012 г., 14:05
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
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articles` text COLLATE cp1251_general_cs,
  `title_comment` text COLLATE cp1251_general_cs,
  `text_comment` text COLLATE cp1251_general_cs,
  `id_user_of_comment` text COLLATE cp1251_general_cs,
  `date_of_public` text COLLATE cp1251_general_cs,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `id_articles`, `title_comment`, `text_comment`, `id_user_of_comment`, `date_of_public`) VALUES
(1, '45', 'good', 'very good', '29', '1334922033'),
(2, '45', 'no bed, no bed!!', 'gooooooood', '29', '1334922135'),
(10, '46', 'kasha is the best', 'Kasha is a cereal commonly eaten in Eastern Europe. In English, kasha generally refers to buckwheat groats, but in Slavic Europe, it refers to porridge in genera', '29', '1334926730'),
(11, '48', 'My dream', 'i am not see dream!!!!!!!', '9', '1334929175'),
(12, '49', 'WIKI', 'WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI WIKI', '9', '1334929580'),
(13, '49', 'i;huigkjhglhjbl', 'i;huigkjhglhjblhjb', '9', '1334929626'),
(14, '49', 'bbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '9', '1334929765'),
(15, '54', 'jhgjhg', 'bhvnb', '29', '1335005320'),
(28, '45', 'bed', 'very bed\r\n!', '9', '1335035900'),
(29, '45', 'yy', 's', '9', '1335043367'),
(30, '45', 'df', 'dfgfdgf', '9', '1335049623'),
(31, '45', 'lknjlk', 'n.,', '9', '1335049866'),
(32, '49', '', '', '9', '1335050960'),
(33, '48', 'lkn', 'lkn', '9', '1335084417');

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
  `read more` text COLLATE cp1251_general_cs NOT NULL,
  `please regisration` text COLLATE cp1251_general_cs NOT NULL,
  `confirm the password:` text COLLATE cp1251_general_cs NOT NULL,
  `email:` text COLLATE cp1251_general_cs NOT NULL,
  `rating:` text COLLATE cp1251_general_cs NOT NULL,
  `rating is empty` text COLLATE cp1251_general_cs NOT NULL,
  `edit page` text COLLATE cp1251_general_cs NOT NULL,
  `profile deleted` text COLLATE cp1251_general_cs NOT NULL,
  `translation` text COLLATE cp1251_general_cs NOT NULL,
  `home` text COLLATE cp1251_general_cs NOT NULL,
  `blocked` text COLLATE cp1251_general_cs NOT NULL,
  `editor` text COLLATE cp1251_general_cs NOT NULL,
  `edit` text COLLATE cp1251_general_cs NOT NULL,
  `delete` text COLLATE cp1251_general_cs NOT NULL,
  `back` text COLLATE cp1251_general_cs NOT NULL,
  `static` text COLLATE cp1251_general_cs NOT NULL,
  `you profile is blocked` text COLLATE cp1251_general_cs NOT NULL,
  `avatar:` text COLLATE cp1251_general_cs NOT NULL,
  `first name:` text COLLATE cp1251_general_cs NOT NULL,
  `last name:` text COLLATE cp1251_general_cs NOT NULL,
  `latest activity:` text COLLATE cp1251_general_cs NOT NULL,
  `date of registration:` text COLLATE cp1251_general_cs NOT NULL,
  `delete profile` text COLLATE cp1251_general_cs NOT NULL,
  `comment field is not filled` text COLLATE cp1251_general_cs NOT NULL,
  `enter title` text COLLATE cp1251_general_cs NOT NULL,
  `enter comment` text COLLATE cp1251_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `user`, `login`, `pass`, `enter`, `reg`, `toreg`, `ua`, `ru`, `en`, `exit`, `adminmenu`, `addpage`, `delpage`, `entertitle`, `entertext`, `send`, `guest`, `invalidpass`, `dublicate`, `lang`, `admin`, `role`, `read more`, `please regisration`, `confirm the password:`, `email:`, `rating:`, `rating is empty`, `edit page`, `profile deleted`, `translation`, `home`, `blocked`, `editor`, `edit`, `delete`, `back`, `static`, `you profile is blocked`, `avatar:`, `first name:`, `last name:`, `latest activity:`, `date of registration:`, `delete profile`, `comment field is not filled`, `enter title`, `enter comment`) VALUES
(1, 'Користувач:', 'Логін:', 'Пароль:', 'Вхід', 'Реєстрація', 'Зареєстровано:', 'укр', 'рус', 'анг', 'Вихід', 'Адмін меню', 'Додати сторінку', 'Видалити сторінку', 'Введіть назву сторінки', 'Введіть текст сторінки', 'Відправити', 'Гість', 'Не вірний логін або пароль', 'Такий логін вже використовується', 'ua', 'Адмін:', 'Роль користувачів', 'Читати все', 'Будь ласка зареєструйтеся', 'Підтвердіть пароль:', 'Електронна пошта:', 'Оцінка:', 'За даний матеріал ще ніхто не голосував', 'Редагувати сторінку', 'Профіль видалений', 'Переклад', 'Головна', 'Блокований', 'Редактор', 'Редагувати', 'Видалити', 'Назад', 'Статичний', 'Твій профіль заблоковано', 'Аватар:', 'Ім''я', 'Прізвище', 'Остання активність:', 'Дата реєстрації:', 'Видалити профіль', 'Поле коментаря не заповнене', 'Введіть заголовок', 'Введіть коментар'),
(2, 'Пользователь:', 'Логин:', 'Пароль:', 'Вход', 'Регистрация', 'Зарегистрировано:', 'укр', 'рус', 'анг', 'Выход', 'Админ меню', 'Добавить страницу', 'Удалить страницу', 'Введите название страницы', 'Введите текст страницы', 'Отправить', 'Гость', 'Не верный логин или пароль', 'Такой логин уже используется', 'ru', 'Админ:', 'Роль пользователей', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'User:', 'Login:', 'Password:', 'Enter', 'Registration', 'Sign up:', 'ua', 'ru', 'en', 'Exit', 'Admin menu', 'Add page', 'Delete page', 'Enter the title of the page', 'Enter the text of the page', 'Send', 'Guest', 'Wrong username or password', 'This username is already in use', 'en', 'Administrator:', 'Role of users', 'Read more', 'Please regisration', 'Confirm the password:', 'Email:', 'Rating:', 'Rating is empty', 'Edit page', 'Profile deleted', 'Translation', 'Home', 'Blocked', 'Editor', 'Edit', 'Delete', 'Back', 'Static', 'You profile is blocked', 'Avatar:', 'First name:', 'Last name:', 'Latest activity:', 'Date of registration:', 'Delete profile', 'Comment field is not filled text', 'Enter title', 'Enter comment');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE cp1251_general_cs NOT NULL,
  `text` text COLLATE cp1251_general_cs NOT NULL,
  `titleen` text COLLATE cp1251_general_cs,
  `texten` text COLLATE cp1251_general_cs,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `text`, `titleen`, `texten`) VALUES
(45, 'Жантель', 'Жантель (фр. Gentelles) — муніципалітет у Франції, у регіоні Пікардія, департамент Сомма. Населення — 497 осіб (2009).\r\nМуніципалітет розташований на відстані близько 115 км на північ від Парижа, 13 км на південний схід від Ам''єна.', 'Gentelles', 'The village has been known by various name through its history: Gentilla, Gentella, Gentle, Gentela, Gentelles, Gentilles, Le Gendalle and finally Gentelles.\r\nIt was the first town to be given to the abbey of Corbie by Clovis II and Saint Bathilde.\r\nOn November 27, 1870, during the Franco-Prussian War, Gentelles was the scene of a skirmish between the 20th Battalion of Chasseurs and the Germans. There were 25 fatalities, of which 12 were French, who are buried in the cemetery, where later a memorial was erected.\r\nDuring World War I, the village was at the centre of fighting during the Battle of the Somme and was all but destroyed.'),
(46, 'Каша', 'Каша — страва з розварених у воді, бульйоні чи молоці зерен або крупи злаків, рідше — бобових, іноді з такими добавками як сіль, цукор, приправи, мед, свіжі та сушені фрукти, варення.\r\nКаша — одна з найдавніших страв, широко виготовлялася та вживалася слов''янськими народами і в кінці ХІХ ст., побутує і зараз.\r\nВ Україні кашу виготовляли з пшона, гречки, ячменю, пшениці, вівса, кукурудзи, пізніше рису. Товчені зерна відокремлювали від луски, одержуючи чисту крупу за допомогою шеретування у круподерках або товчення у ступах. При цьому крупа могла лишатися цілою або перетворювалася на дрібну січку. Крупи готували до варіння по-різному: ячмінь, пшоно, кукурудзу, пшеницю мили, гречку і овес підсмажували до золотавого кольору. За консистенцією каши були круті й рідкі. Для крутих каш крупів і води брали приблизно у такій пропорції: гречки — 1:2; пшона-- 1:2,5; пшениці — 1:3 тощо. Перед тим, як саджати у піч, каши солили. Старовинний спосіб приготування смачної розсипчастої гречаної каші передписував смажити крупи у невеликій кількості смальцю, а опісля варити, як звичайно. Каша пріла у печі досить довго. Це була повсякденна обідня страва, друга після борщу. Готували кашу й на сніданок, і на вечерю. Круту кашу засмачували смальцем, олією, маслом, молоком, запивали кисляком. Пшоняну або кукурудзяну кашу, запечену з молоком, цукром та яйцями, готували на родинні урочистості.\r\nРідку кашу (розмазню) варили для дітей, хворих або у ті весняні дні, коли кінчалися запаси продуктів. Для підвищення калорійності її готували на молоці, сироватці, маслянці. З цих же крупів готували й зовсім рідкі страви — круп''яні юшки.\r\nКашу з гречки й пшона були поширені на всій території України, кукурудзяна — на південному заході та в Карпатах, вівсяна — у деяких районах Полісся й Західного Прикарпаття, ячна — також на всій території, але більшою мірою на Лівобережжі. Пшенична Каша була менш популярною, оскільки пшеницю майже повністю переробляли на борошно. З початку XX ст. у селянському побуті з''явилася рисова крупа, але значного поширення вона набула лише у повоєнні роки. Найулюбленішою на всій Україні була все ж гречана каша: Гречана каша — то матір наша, а хлібець житній — то батько рідний.', 'Kasha', 'Kasha is a cereal commonly eaten in Eastern Europe. In English, kasha generally refers to buckwheat groats, but in Slavic Europe, it refers to porridge in general and can be made from any cereal, especially buckwheat, wheat, barley, oats, millet and rye. At least a thousand years old, kasha is one of the oldest known dishes in Eastern European Slavic cuisine'),
(48, 'Основна функція сну', 'Основна функція сну — це відновлення фізичних та психічних сил, яке дозволяє максимально адаптуватися до зміни умов зовнішнього і внутрішнього середовищ. Сон становить собою чергування різних функціональних станів головного мозку, а не є «відпочинком» для головного мозку, як вважали раніше. Під час сну перебудовується мозкова діяльність, яка потрібна для переробки і консолідації інформації, що потрапила в період неспання, переведення її із проміжної в довготривалу пам''ять.\r\nАктивність нейронів у різних відділах кори великого мозку і глибинних структурах мозку під час сну лишається практично такою ж, як і при неспанні.', 'Main function of dream', 'The multiple theories proposed to explain the function of sleep reflect the as-yet incomplete understanding of the subject. (When asked, after 50 years of research, what he knew about the reason people sleep William Dement, founder of Stanford University''s Sleep Research Center, answered, &quot;As far as I know, the only reason we need to sleep that is really, really solid is because we get sleepy.&quot;) It is likely that sleep evolved to fulfill some primeval function and took on multiple functions over time[citation needed] (analogous to the larynx, which controls the passage of food and air, but descended over time to develop speech capabilities).\r\nIf sleep were not essential, one would expect to find:\r\nAnimal species that do not sleep at all\r\nAnimals that do not need recovery sleep when they stay awake longer than usual\r\nAnimals that suffer no serious consequences as a result of lack of sleep'),
(49, 'Вікі', 'Вікі — це веб-сайт (або інша гіпертекстова збірка документів), що дозволяє користувачам змінювати самостійно вміст сторінок через браузер, використовуючи спрощену і зручнішу, порівняно з HTML, вікі-розмітку тексту.\r\nТермін Вікі може також стосуватися спільного програмного забезпечення (collaborative software), яке створюється для створення такого сайту.\r\nТерміни Вікі (з великої літери) та ВікіВікіВеб (WikiWikiWeb) часом використовують, щоб сказати конкретно про Portland Pattern Repository — перший вікі в історії. Прихильники такого використання пропонують використовувати слово з малої літери для вікі-сайтів загалом.\r\nСлово вікі походить з гавайської мови й означає «хуткий» або «швидкий».', 'Wiki', 'A wiki is a website whose users can add, modify, or delete its content via a web browser using a simplified markup language or a rich-text editor. Wikis are typically powered by wiki software and are often created collaboratively by multiple users. Examples include community websites, corporate intranets, knowledge management systems, and notetaking.\r\nWikis may serve many different purposes. Some permit control over different functions (levels of access). For example, editing rights may permit changing, adding or removing material. Others may permit access without enforcing access control. Other rules may also be imposed for organizing content.\r\nWard Cunningham, the developer of the first wiki software, WikiWikiWeb, originally described it as &quot;the simplest online database that could possibly work.&quot;[4] &quot;Wiki&quot; is a Hawaiian word meaning &quot;fast&quot; or &quot;quick&quot;');

-- --------------------------------------------------------

--
-- Структура таблицы `rating_articles`
--

CREATE TABLE IF NOT EXISTS `rating_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articles` text COLLATE cp1251_general_cs,
  `id_user` text COLLATE cp1251_general_cs,
  `user_rating` text COLLATE cp1251_general_cs,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `rating_articles`
--

INSERT INTO `rating_articles` (`id`, `id_articles`, `id_user`, `user_rating`) VALUES
(8, '46', '29', '4'),
(11, '56', '29', '3'),
(20, '46', '9', '1'),
(21, '49', '29', '5'),
(26, '59', '9', '4'),
(33, '60', '9', '3'),
(34, '49', '9', '2'),
(38, '63', '29', '3'),
(39, '62', '29', '4'),
(42, '48', '31', '3'),
(43, '48', '33', '3'),
(44, '48', '9', '3'),
(45, '48', '29', '1'),
(46, '45', '29', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE cp1251_general_cs NOT NULL,
  `pass` text COLLATE cp1251_general_cs NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `fname` text COLLATE cp1251_general_cs,
  `lname` text COLLATE cp1251_general_cs,
  `email` text COLLATE cp1251_general_cs,
  `img` text COLLATE cp1251_general_cs,
  `logined` text COLLATE cp1251_general_cs,
  `registered` text COLLATE cp1251_general_cs,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=40 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `status`, `fname`, `lname`, `email`, `img`, `logined`, `registered`) VALUES
(9, 'user1', 'a722c63db8ec8625af6cf71cb8c2d939', 1, '1g', '2222 j', 'hggvh', 'user1', '1335090938', NULL),
(18, 'doom', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL, NULL, '', NULL, NULL, '1334785710'),
(19, 'vasya', '3fc0a7acf087f549ac2b266baf94b8b1', 0, 'oleg!', 'kornelyuk.', 'vasya@pupkin.com.ua', 'vasya', '1334817600', '1334815292'),
(26, 'john', 'a66e44736e753d4533746ced572ca821', 1, '', '', '', '', NULL, '1334901048'),
(28, 'mather', '28a29e6e62eab139ef0a84e3c15d67ae', 2, '', '', 'mather_father@mail.ru', '', '1334905990', '1334904516'),
(29, 'root', '7b24afc8bc80e548d66c4e7ff72171c5', 3, 'root', 'under!', 'root@somemail.ru', 'root', '1335091919', '1334910309'),
(30, 'u', '7b774effe4a349c6dd82ad4f4f21d34c', 1, NULL, NULL, 'u', NULL, '1335083741', '1335083201'),
(32, 'head', '96e89a298e0a9f469b9ae458d6afae9f', 1, NULL, NULL, '', NULL, NULL, '1335083927'),
(33, 'nerd', '73ae356a65a0fc82b3bcf8504ce7b18b', 1, NULL, NULL, '', NULL, '1335084527', '1335084080'),
(34, 'qwert', 'a384b6463fc216a5f8ecb6670f86456a', 1, NULL, NULL, '', NULL, NULL, '1335084183'),
(35, 'key', '3c6e0b8a9c15224a8228b9a98ca1531d', 1, '', '', '', 'key', NULL, '1335084556');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
