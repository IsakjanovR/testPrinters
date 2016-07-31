-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2016 г., 22:24
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `printers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `connect`
--

CREATE TABLE `connect` (
  `id_user` tinyint(3) UNSIGNED NOT NULL,
  `session` char(32) NOT NULL,
  `token` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `connect`
--

INSERT INTO `connect` (`id_user`, `session`, `token`) VALUES
(28, '', ''),
(1, '4o6fbv8t265ouo5umyymv3rxjqb14ysu', 'lbyodx0dheo9dt580r6kvcz5w59cla8x'),
(27, '5lxultw3jxwtwhme6mbmbxnwshw0lwrd', '69fri5nj1nmkre365g975gu08f2ge0nu'),
(1, '7ld3tvvnxtz1j2dk5p92naewlzzxwbrh', '1ewdzu507qq6pnc8wp81sg4yt26rz26u'),
(19, '7zgysfs4pe47mlrom9lj92y9o9orfl4k', 'm83luxzd7vltasbe7xx4jzugc6vba8c8'),
(31, '93osjf2gspebeduo6fx6gbr241y2h0le', 'e89r862estk1fmxu0iolu0xhs3a776u0'),
(31, 'd0um4q77zh6dwshibteg94lj5tblzh90', '88olum8pas76ka9c48n3w73pebs3l5hj'),
(26, 'gloucl91cgb8iengh5n5cw49ndfajsf6', 'lwgewvby2hea6wjctv3n3lv4kt89eq00'),
(31, 'i0dldsulik4ebsa7mhxqq248jiiedb4g', '2fl4yb0lwyym9tjfuucp0jhomui2z9j3'),
(31, 'jr17abo8uemjkexe9d8gaqkzihlo82dr', 'cgiy542hi1o1rofvrzwotg6ou2vl492o'),
(29, 'n6nimhpjzt8rquxhbm0lpr7edbqraxa0', 'xo4085x2pfx3b4udibxr9mum13urtdnk'),
(30, 'qla217aqd0cppl7bi23er0ocwj8yx7gl', 'a5l4yxbtfnulmwyr1ts5mx55wd6jrpnq'),
(25, 'qwnbpvuc3qbyzqw5ylxd5jal4999y0rd', 'ah2e6x2a802jj0y3pl1es16hf0prpqh9'),
(20, 'r7o4znuok0jyq7pj6jvg5vydcifd0ca0', 'tp0f0fi6cvbdzucloq4ymck1j25yoova'),
(1, 'tj71svauuurlehs6gf4vhqykf11msejt', 'jf8j47bnibig6w1t3il2q8f22p85jz85'),
(0, 'zvk74qirj2rv7f3vlwnmn47fw5z78ln8', '6jgdol5z7uwvqvffqs0h55ach4jwp8gh');

-- --------------------------------------------------------

--
-- Структура таблицы `format_printer`
--

CREATE TABLE `format_printer` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `format_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `format_printer`
--

INSERT INTO `format_printer` (`id`, `format_name`) VALUES
(1, 'A4'),
(2, 'A3');

-- --------------------------------------------------------

--
-- Структура таблицы `model_printer`
--

CREATE TABLE `model_printer` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vendor` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_type` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_function` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_format` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_price_resurse` int(10) UNSIGNED DEFAULT NULL,
  `model_name` varchar(100) NOT NULL,
  `discriprion` text,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `model_printer`
--

INSERT INTO `model_printer` (`id`, `id_vendor`, `id_type`, `id_function`, `id_format`, `id_price_resurse`, `model_name`, `discriprion`, `image`) VALUES
(16, 5, 1, NULL, 1, NULL, 'bizhub 4700P', 'Konica Minolta bizhub 4700P — это монохромный лазерный принтер формата А4. Устройство развивает \r\nскорость печати 47 страниц в минуту формата A4, что позволяет достичь высокого уровня \r\nпроизводительности. Разрешение принтера 1200х1200 dpi гарантирует, что документы будут \r\nвыполнены в идеальном качестве. Konica Minolta bizhub 4700P обладает ЖК-дисплеем с диагональю \r\n2,4″, с помощью анимированного меню на дисплее можно узнать состояние системы и управлять \r\nнастройками устройства.\r\n\r\nKonica Minolta bizhub 4700PKonica Minolta bizhub 4000PKonica Minolta bizhub 3300P\r\nВ принтере есть специальный эко-режим, который дает возможность сэкономить энергию и тонер. В \r\nспящем режиме принтер потребляет 1 Вт. Переход в режим сна можно запрограммировать. Современный \r\nпроцессор и возможность увеличения объема памяти до 1,28 ГБ позволяют bizhub 4700P оперативно \r\nвыполнять все текущее задания. В стандартном комплекте уже есть стартовый тонер-картридж на \r\n6000 отпечатков. Дополнительно можно установить до трех лотков для бумаги различного формата. \r\nТакже к принтеру можно дополнительно заказать модуль Wi-Fi, с помощью него принтер можно \r\nподключить к офисной сети по Wi-Fi. Машина проста в обслуживании и обладает высокой \r\nнадежностью. Устройство обеспечивает оптимальное качество печати в сочетании с высокой \r\nскоростью и доступностью расходных материалов для него.\r\n', '1.jpg'),
(17, 5, 1, NULL, 1, NULL, 'bizhub 3301P', 'Konica Minolta bizhub 3301P — монохромный лазерный принтер формата А4. Эта модель предназначена \r\nдля малых и средних рабочих групп, для предприятий, где постоянно увеличивается \r\nдокументооборот. Устройство обладает современным дизайном и отличными рабочими \r\nхарактеристиками. Скорость печати 33 страницы в минуту формата А4, а также другие параметры \r\nпозволяют удовлетворить потребности разных клиентов, и упростить их каждодневную работу. \r\nУстройство обладает функцией двусторонней печати. Разрешение принтера 1200х1200 dpi \r\nгарантирует, что качество отпечатков будет идеальными.\r\n\r\nОсновное отличие от предыдущей модели принтера bizhub 3300P заключается в поддержке \r\nбеспроводной печати с помощью бесплатного приложения для мобильных устройств PageScope Mobile, \r\nа также поддержке беспроводной печати с помощью технологии AirPrint от Apple.\r\n\r\nВ принтере есть специальный эко-режим, который дает возможность сэкономить энергию и тонер, а \r\nтакже снизить уровень шума за счет ограничения звуковых сигналов. В спящем режиме принтер \r\nпотребляет всего 1 Вт. Переход в режим сна можно запрограммировать. В стандартном комплекте \r\nесть стартовый тонер-картридж на 1500 отпечатков. Можно установить дополнительный лоток для \r\nбумаги, а также заказать модуль Wi-Fi, с помощью которого можно подключить принтер к офисной \r\nсети по Wi-Fi.', 'viotec.ru_2015-12-26_14-09-48.jpg'),
(18, 5, 2, NULL, 1, NULL, 'bizhub C3110', 'Konica Minolta bizhub C3110 — это цветное многофункциональное устройство формата А4 со \r\nскоростью печати до 31 страниц в минуту формата А4, которое включает в себя цветной принтер, \r\nкопир и сканер. Это идеальное решение для проектных команд, небольших офисов или рабочих групп \r\nв составе крупных компаний, которым для обеспечения конфиденциальности информации необходимы \r\nсобственные печатные устройства. Компактное устройство прекрасно дополняет существующий парк \r\nпечатных устройств организации, предлагая отличное качество печати, производительность и \r\nвозможность работы с широким спектром носителей.\r\n<br>\r\nУстройство обеспечивает базовые функции печати, сканирования и копирования, также оно может \r\nбыть оснащено факсовым модулем. Дополнительный подающий лоток повышает производительность и \r\nдаёт возможность работы с бумагами разных типов даже в одном задании. Благодаря своей \r\nкомпактности это универсальное устройство отлично поместится даже в небольшом помещении и \r\nвпишется в любую печатную инфраструктуры, позволяя оперативно выполнять даже самые срочные \r\nзадания.\r\n\r\nВсё более актуальными для работы офисов становятся вопросы оцифровки документов, их хранения и \r\nсовместного использования. С Konica Minolta bizhub C3110 — это просто. Новое МФУ Konica Minolta \r\nформата A4 предлагает сканирование на e-mail с возможностью сохранения на SMB, FTP, жёсткий \r\nдиск и USB-носитель. Стандартный автоподатчик документов для двустороннего сканирования \r\nповышает эффективность работы и экономит время, поскольку не нужно больше переворачивать листы \r\nвручную. Это надёжное и быстрое устройство, стабильно поддерживающее исключительное качество \r\nпечати. Оснащённый отлично зарекомендовавшим себя контроллером печати Emperon от Konica Minolta \r\nновый bizhub даже при двусторонней печати сохраняет 100%-ную скорость работы и высокое качество \r\nизображения.\r\n\r\nKonica Minolta bizhub C3110 — экологичное устройство, его минимальное энергопотребление — менее \r\n3 Вт в режиме энергосбережения действительно впечатляет. Перевести систему в энергосберегающий \r\nрежим легко и просто — достаточно нажать на кнопку. Благодаря этим выдающимся характеристикам и \r\nдругим эко-технологиям устройство прошло строгую сертификацию и было отмечено признанными во \r\nвсём мире знаками Blue Angel и Energy Star.', '5.jpg'),
(19, 5, 2, NULL, 1, NULL, 'bizhub 4050', 'Konica Minolta bizhub 4050 — это монохромное многофункциональное устройство формата А4 со \r\nскоростью печати 47 страниц в минуту, которое включает в себя черно-белый принтер, копир и \r\nсканер. МФУ Konica Minolta bizhub 4050 специально спроектирован для средних и больших рабочих \r\nгрупп, оно идеально впишется в рабочее окружение вместе с другими устройствами Konica Minolta \r\nформата A3. Оборудование предлагает множество функций, обладает повышенной производительностью \r\nи интуитивно понятным интерфейсом.\r\n\r\nФункции и принципы управления системой Konica Minolta bizhub 4050 схожи с функциями \r\nмногофункциональных устройств формата A3, а потому идеально подходят для проектов, в которых \r\nиспользуются устройства формата А3 и А4 совместно с программными решениями. Также как и \r\nустройства Konica Minolta A3 формата, МФУ bizhub 4050 не требует от пользователя специфических \r\nзнаний, все управление осуществляется с помощью 7-дюймового цветного емкостного сенсорного \r\nэкрана.\r\n\r\nKonica Minolta bizhub 4050\r\nKonica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta \r\nbizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050Konica \r\nMinolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub \r\n4050\r\nГлавная / МФУ A4 / Konica Minolta bizhub 4050\r\nKonica Minolta bizhub 4050\r\n\r\n100 363 руб.\r\n\r\nЧерно-белое лазерное МФУ\r\nТип\r\nA4\r\nФормат\r\n40 стр/мин\r\nСкорость печати A4\r\n100 000 стр/мес\r\nМаксимальная нагрузка\r\n20 000 стр\r\nРесурс тонера\r\n5 000 стр\r\nСтартовый картридж\r\nМалые и средние рабочие группы\r\nОбласть применения\r\n12 месяцев или 35 000 стр\r\nГарантия производителя\r\nАртикул: A6VF021 Категория: МФУ A4 Метки: A4, A6VF021, bizhub 4050, Konica Minolta, \r\nКопирование, МФУ, Печать, Сканирование, Черно-белый\r\nОписание\r\nСпецификация\r\nОпции\r\nРасходные материалы\r\nСкачать\r\nПреимущества Konica Minolta bizhub 4050\r\n\r\nСкорость печати A4 (ЧБ): 40 стр/мин\r\nФормат носителей от A6 до A4, пользовательские форматы\r\nШирокая функциональность и простая интеграция с МФУ Konica Minolta А3 формата\r\nГибкое, компактное и лёгкое устройство прекрасно впишется в любое офисное окружение\r\nПростое и интуитивно понятное управление устройством за счёт использования полноцветной \r\nсенсорной панели аналогичной той, которая используется на устройствах Konica Minolta А3 формата\r\nФункциональность\r\n\r\nПечать\r\nКопирование\r\nСканирование\r\nФакс\r\nБезопасность\r\n«Зеленые» технологии\r\nKonica Minolta bizhub 4050 — это монохромное многофункциональное устройство формата А4 со \r\nскоростью печати 47 страниц в минуту, которое включает в себя черно-белый принтер, копир и \r\nсканер. МФУ Konica Minolta bizhub 4050 специально спроектирован для средних и больших рабочих \r\nгрупп, оно идеально впишется в рабочее окружение вместе с другими устройствами Konica Minolta \r\nформата A3. Оборудование предлагает множество функций, обладает повышенной производительностью \r\nи интуитивно понятным интерфейсом.\r\n\r\nФункции и принципы управления системой Konica Minolta bizhub 4050 схожи с функциями \r\nмногофункциональных устройств формата A3, а потому идеально подходят для проектов, в которых \r\nиспользуются устройства формата А3 и А4 совместно с программными решениями. Также как и \r\nустройства Konica Minolta A3 формата, МФУ bizhub 4050 не требует от пользователя специфических \r\nзнаний, все управление осуществляется с помощью 7-дюймового цветного емкостного сенсорного \r\nэкрана.\r\n\r\nKonica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050Konica Minolta \r\nbizhub 4050Konica Minolta bizhub 4050Konica Minolta bizhub 4050\r\nМФУ Konica Minolta bizhub 4050 прекрасно интегрируется практически в любую рабочую среду, \r\nустройство идеально подходит для офисов, которым необходим широкий набор функций, но для \r\nкоторых система А3 слишком велика. Благодаря своей компактности, многофункциональное устройство \r\nотвечает требованиям, предъявляемым к компактным настольным устройствам, однако его гибкость \r\nпозволяет удовлетворить потребности многофункциональных рабочих групп и департаментов.\r\n\r\nИз-за простоты установки система Konica Minolta bizhub 4050 экономит время, так как позволяет \r\nзаказчикам немедленно приступить к использованию многочисленных функций и сконцентрироваться на \r\nих основной деятельности. В стандартную комплектацию Konica Minolta bizhub 4050 входит \r\nавтоподатчик оригиналов, модулем двусторонней печати, сетевая карта и жесткий диск на 320 Гб.', '6.jpg'),
(20, 5, 1, NULL, 1, NULL, 'bizhub C3350', 'Emperon — это кульминация огромных усилий отдела R&D компании Konica Minolta в ответ на \r\nпотребности реальных пользователей, контроллер предоставляет широкие возможности в области \r\nпечати. Emperon Konica Minolta быстро зарекомендовал себя в качестве инновационного контроллера, \r\nкоторый предоставляет собой мощную и производительную архитектуру системы печати. Последнее \r\nпоколение Emperon обладает гибкой системой итерации в печатную инфраструктуру, которая \r\nобеспечивает максимальную совместимость с расширенными функциями печати. Технология Emperon не \r\nтребует установки дополнительного оборудования. Принт-контроллера Emperon™ отвечает за прием и \r\nпостановку в очередь печатных заданий в формате языков описания страниц, за отправку заданий на \r\nпроцессор печати, а также преобразование в растровую графику печатных заданий. Еще принт-\r\nконтроллер преобразует цвета в формат CMYK и отвечает за точное их соответствие.', '2015-08-16_10-35-06.jpg'),
(21, 5, 3, NULL, 2, NULL, 'bizhub C258', 'Konica Minolta bizhub C258 – усовершенствованная полноцветная система печати, отлично \r\nзарекомендовавшая себя линейке устройств bizhub формата А3. Помимо высочайшего качества печати, \r\nнадёжности и производительности, МФУ обеспечивает самый широкий функционал в области мобильной \r\nпечати.\r\n\r\nКроме того, среди ключевых отличий новых систем – поддержка облачных технологий, возможности \r\nперсонализации и интеграции благодаря уникальной программной платформе Konica Minolta. Konica \r\nMinolta bizhub C258 помимо превосходного качества печати, надёжности и производительности на \r\nскорости 30 страниц в минуту, обеспечивает широкий функционал мобильной печати и поддержки \r\nоблачных технологий.\r\n\r\n', 'viotec.ru_2016-01-29_14-29-50.jpg'),
(22, 3, 2, NULL, 2, NULL, 'IMAGERUNNER 2202 ', 'Базовое черно-белое многофункциональное устройство Canon imageRUNNER 2202 формата A3 для \r\nотдельных пользователей и небольших рабочих групп, стремящихся к наиболее рациональному \r\nиспользованию средств. \r\n\r\nimageRUNNER 2202 — это базовое решение для черно-белого копирования формата A3, гибкой локальной \r\nпечати и цветного сканирования через USB. \r\nИдеальное решение для отдельных пользователей и небольших рабочих групп, стремящихся к наиболее \r\nрациональному использованию средств. \r\n\r\n', 'canon_imagerunner_22027.jpg'),
(23, 7, 2, NULL, 2, NULL, 'FS-C8600DN', 'Цветной принтер формата А3, который обеспечивает пользователям высокую гибкость и впечатляющий \r\nнабор функций. Устройство создано на базе долговечных технологий компании KYOCERA и прослужит Вам \r\nв течение длительного времени. Результат - меньше времени на обслуживание и затрат на запасные \r\nчасти.', 'fs-c8600dn.-imagelibitem-Single-Enlarge.imagelibitem.jpg'),
(24, 7, 2, NULL, 2, NULL, 'FS-6970DN', 'Модель FS-6970DN – идеальное решение для рабочих групп, которым необходима печать в самых разных \r\nформатах вплоть до А3. Этот быстрый и компактный принтер предоставляет возможность гибкой работы \r\nс документами благодаря использованию до 6-ти входных лотков. Кроме того этот сетевой принтер, \r\nпредназначенный для рабочих групп, впечатляет примененными в нем средствами защиты и технологией \r\nEcosys, обеспечивающей низкую стоимость печати.', '6970_right_basis_cc1.-imagelibitem-Single-Enlarge.imagelibitem.jpg'),
(25, 5, 3, NULL, 2, NULL, 'bizhub C308', 'Konica Minolta bizhub C308 – усовершенствованная полноцветная система печати, отлично \r\nзарекомендовавшая себя линейке устройств bizhub формата А3.\r\n\r\nПомимо высочайшего качества печати, надёжности и производительности, МФУ обеспечивает самый \r\nширокий функционал в области мобильной печати. Кроме того, среди ключевых отличий новых систем \r\n– поддержка облачных технологий, возможности персонализации и интеграции благодаря уникальной \r\nпрограммной платформе Konica Minolta.\r\n\r\nKonica Minolta bizhub C308 помимо превосходного качества печати, надёжности и \r\nпроизводительности на скорости 30 страниц в минуту, обеспечивает широкий функционал мобильной \r\nпечати и поддержки облачных технологий.\r\n\r\nKonica Minolta bizhub C308\r\nKonica Minolta bizhub C308Konica Minolta bizhub C308Konica Minolta bizhub C308Konica Minolta \r\nbizhub C308Konica Minolta bizhub C308Konica Minolta bizhub C308Konica Minolta bizhub C308Konica \r\nMinolta bizhub C308Konica Minolta bizhub C308Konica Minolta bizhub C308Konica Minolta bizhub \r\nC308\r\nГлавная / МФУ A3 / Konica Minolta bizhub C308\r\nKonica Minolta bizhub C308\r\n\r\nот 313 023 руб.\r\n\r\nЦветное лазерное МФУ\r\nТип\r\nA3\r\nФормат\r\n30 стр/мин\r\nСкорость печати A4\r\n100 000 стр/мес\r\nМаксимальная нагрузка\r\n28 000 стр / 26 000 стр\r\nРесурс тонера (черного/цветного)\r\nНет\r\nСтартовый картридж\r\nБольшие рабочие группы\r\nОбласть применения\r\n12 месяцев или 75 000 стр\r\nГарантия производителя\r\nАртикул: A7PY021 Категория: МФУ A3 Метки: A3, A7PY021, bizhub C308, Копирование, МФУ, Печать, \r\nСканирование, Цветной\r\nОписание\r\nСпецификация\r\nОпции\r\nРасходные материалы\r\nСкачать\r\nПреимущества Konica Minolta bizhub C308\r\n\r\n30/30 страниц в минуту в цвете и Ч/Б\r\nФорматы бумаги: A6-SRA3, пользовательский, баннер до 1,2 м\r\n9-дюймовая сенсорная панель с поддержкой мультитач и областью взаимодействия с мобильными \r\nустройствами (NFC)\r\nСниженное воздействие на окружающую среду благодаря современной технологии, обеспечивающей \r\nнизкое по сравнению с аналогами энергопотребление, что позволяет экономить электроэнергию и \r\nденьги\r\nВысокая безопасность данных благодаря развитому функционалу, снижающему риски потерь данных и \r\nсохраняющему их конфиденциальность\r\nФункциональность\r\n\r\nПечать\r\nКопирование\r\nСканирование\r\nФакс\r\nЯщики\r\nБезопасность\r\n«Зеленые» технологии\r\nФинишные возможности\r\nKonica Minolta bizhub C308 – усовершенствованная полноцветная система печати, отлично \r\nзарекомендовавшая себя линейке устройств bizhub формата А3.\r\n\r\nПомимо высочайшего качества печати, надёжности и производительности, МФУ обеспечивает самый \r\nширокий функционал в области мобильной печати. Кроме того, среди ключевых отличий новых систем \r\n– поддержка облачных технологий, возможности персонализации и интеграции благодаря уникальной \r\nпрограммной платформе Konica Minolta.\r\n\r\nKonica Minolta bizhub C308 помимо превосходного качества печати, надёжности и \r\nпроизводительности на скорости 30 страниц в минуту, обеспечивает широкий функционал мобильной \r\nпечати и поддержки облачных технологий.\r\n\r\nKonica Minolta bizhub C308/C368Konica Minolta bizhub C308/C368Konica Minolta bizhub C308/C368\r\nБлагодаря интуитивно понятной панели управления с интегрированной областью для подключения \r\nмобильных устройств, работа с bizhub C308 проста, удобна и комфортна. Технология Near Field \r\nCommunication (NFC) даёт пользователям возможность подключать bizhub к своим мобильным \r\nустройствам, что обеспечивает удобную аутентификацию, прямую печать документов с мобильного \r\nустройства или сканирование на него без использования ПК.\r\n\r\nБлагодаря новому интерфейсу управление обеими цветными системами стало простым и очень схожим с \r\nуправлением современными смартфонами или планшетами. Чтобы сделать работу с МФУ ещё удобнее, \r\nинтерфейсы панели и драйвера принтера можно индивидуально настроить в соответствии с \r\nпредпочтениями и требованиями каждого пользователя, благодаря этому выполнение стандартных \r\nповседневных задач – печати, сканирования и копирования – становится эффективнее.\r\n\r\nPageScope Mobile App от Konica Minolta – дополнительная возможность повысить мобильность \r\nофисных сотрудников. С помощью этого бесплатного приложения пользователи могут подключить МФУ к \r\nсвоим смартфонам и планшетам и легко печатать документы с мобильных устройств или сканировать \r\nна них, находясь в любом месте офиса.\r\n\r\n', '2015-10-11_18-09-50.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `text` text,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `text`, `image`) VALUES
(1, 'Новое в заправке: Konica Minolta bizhub, Epson Sure Color', '2016-04-29', 'Внушительный список того, что заправляют \r\nв компании «Триколор», пополнился ещё \r\nнесколькими наименованиями: Konica \r\nMinolta bizhub c224e, Konica Minolta \r\nbizhub 4020, Epson Sure Color SC-T3200.', 'flv81d3h.jpg'),
(2, ' СНПЧ на Epson Sure Color T3200, T692, T693', '2016-04-29', 'Большинство сервисных компаний не \r\nставят СНПЧ на аппараты Epson Sure \r\nColor T3200, T692 и T693. Иногда \r\nнекоторые всё-таки пытаются это делать \r\n— но результаты, как правило, \r\nоказываются разочаровывающими. Тем не \r\nменее, «Триколор» успешно справляется \r\nс задачей качественной установки СНПЧ: \r\nс аккуратным размещением, сменными \r\nдемпферами Roland, чипами увеличенного \r\nресурса.\r\n\r\nВ аппаратах Epson Sure Color нельзя \r\nиспользовать бюджетные чернила (они \r\nпортят печатающую головку, а её замена \r\nобходится дорого). Поэтому по \r\nумолчанию мы используем чернила Ink \r\nDonor (США). В данном случае это самый \r\nвыгодный вариант из возможных, но при \r\nжелании можно использовать и \r\nкачественную продукцию других марок — \r\nнапример, OCP.', '1920_1080_20100418011946223461.jpg'),
(3, 'Экобокс в «Триколор-Лиговский»', '2016-04-29', 'Не отставая от всего прогрессивного \r\nчеловечества, компания «Триколор» \r\nпомогает сознательным гражданам \r\nэкологически безвредно избавляться от \r\nбатареек, аккумуляторов и других \r\nэлементов питания. В отделении \r\nкомпании в Свечном переулке появился \r\nЭКОБОКС.', 'i (1).jpg'),
(4, 'Новое: экологичная бумага Smartist', '2016-04-29', '«Триколор» продолжает движение по пути \r\nэкологичности: теперь мы продаем — и \r\nсами используем! — бумагу Smartist \r\nплотностью 70 г/м².\r\n\r\nДаже небольшая разница в плотности \r\n(привычный стандарт офисной бумаги, \r\nкак известно, составляет 80 г/м²) \r\nпозволяет рациональнее использовать \r\nресурсы леса, при этом не влияя на \r\nпроцесс: все принтеры и копировальные \r\nаппараты прекрасно работают с этой \r\nбумагой. Кроме того, она гладкая, \r\nбелая и приятная на ощупь', 'dragon.jpg'),
(5, 'Перепрошивка Samsung SL-M и SL-S', '2016-04-28', 'Новые аппараты Samsung серий SL-M и \r\nSL-S теперь тоже можно перепрошивать!\r\nНа данный момент нет окончательно \r\nготового решения только для SL-M2020, \r\nно мы работаем в этом направлениии.\r\nЗа подробностями обращайтесь в \r\n«Триколор».', 'Samsung_SL-M_SL-S_2.jpg'),
(8, '«Триколор» на Лиговском теперь принимает карты', '2016-04-29', 'Филиал «Триколор-Лиговский» рад \r\nсообщить, что теперь оплата товаров и \r\nуслуг в нём доступна посредством \r\nбанковских карт. Приходите и \r\nнаслаждайтесь не только качеством \r\nприобретённых товаров, но и удобством \r\nрасчёта!', 'Cards_cards_cards.jpg'),
(9, '«Триколор» — против бледной и некачественной печати!', '2016-04-29', 'В последнее время многие (наших \r\nпостоянных клиентов это не коснулось) \r\nстали жаловаться на появление фона при \r\nпечати на монохромных принтерах, а \r\nтакже на бледную печать и другие \r\nдефекты изображения. Особенно часто \r\nжалуются пользователи относительно \r\nновых аппаратов Samsung (использующих \r\nкартриджи MLT-D101S, MLT-D105S/MLT-\r\nD150L и другие), HP (использующих \r\nкартриджи CB435A, CB436A, CE278A, \r\nCE285A и др.), Canon (использующих \r\nкартриджи 712, 713, 728, 725 и др.). \r\nТакже «страдают» понижением качества \r\nцветные аппараты HP Color LaserJet \r\n1600, Color LaserJet 2600 и особенно \r\nColor LaserJet 2605, пришедшие им на \r\nсмену аппараты на картриджах \r\nCB540A/CB541A/CB542A/CB543A, \r\nCB530A/CB531A/CB532A/CB533A и даже \r\nболее мощные \r\nCE410A/CE411A/CE412A/CE413A, а также \r\nаналогичные им аппараты Canon.\r\nПричины этой «беды» различны: от \r\nнекачественных расходных материалов \r\n(стоит отметить, что чаще всего \r\nобращающиеся решили «сэкономить» и \r\nначали использовать «совместимые» \r\nкартриджи вместо «оригинальных») до \r\nобщего, довольно резкого изменения \r\nвлажности — связанного с тем, что \r\nпришла весна.\r\nТак или иначе, в «Триколоре» вам могут \r\nпомочь и с выбором альтернативных \r\nрасходных материалов, и с \r\nобслуживанием вашей оргтехники — так, \r\nчтобы ваш МФУ или принтер не прекращал \r\nрадовать вас отличной печатью. Не \r\nнужно мириться с тем, что экономия \r\nпонижает качество, нужно просто \r\nэкономить «с умом».', 'Monkeys.jpg'),
(10, '«Триколор» в контакте', '2016-04-29', 'Мы хотим знать ваше мнение о нас и \r\nделать выводы о том, как и в каком \r\nнаправлении развиваться, чтобы быть \r\nещё более полезными. Поэтому наряду с \r\nуже известными средствами обратной \r\nсвязи, расположенными на нашем сайте \r\n(форма на странице «Где мы находимся», \r\nкнопка «Написать отзыв на Yell» в \r\nправой колонке), у нас есть группа \r\nВконтакте, где можно оставить \r\nсообщение, запрос или комментарий.\r\nЖдём ваших предложений и впечатлений!', 'Treecolor_at_VK.jpg'),
(11, '«Триколор-Нарвская»: обратный переезд', '2016-04-29', 'Филиал «Триколор-Нарвская» вновь \r\nпереехал на Старопетергофский пр., д. \r\n41, по поводу чего сообщает:\r\n«Дорогие ценители неповторимого \r\nсервиса на “Нарвской”!\r\nВ связи с воссоединением с Крымом и \r\nсокращением бюджета 2014 г. на \r\nобразование доводим до вашего \r\nвнимания, что мы как всегда идем в \r\nногу со временем — минимум раздумий и \r\nувеличение территории — и переезжаем в \r\nболее удобный офис на \r\nСтаропетергофском пр., 41. Эта ранее \r\nпотерянная территория провела \r\nреферендум и решила войти в состав \r\n«Триколоров», ура! Конечно, у нас не \r\nбудет работать ни один телефон и эл. \r\nпочта, но у вас есть контакт наших \r\nболее стабильных коллег в Свечном \r\nпер., 20. И кстати, сервер тоже будет \r\nприостановлен, поэтому несите наличку. \r\nНадо немного потерпеть — так сказали \r\nнаверху».', 'Narvskaya_new_old_address1.jpg'),
(13, 'Проблемы с «официальными перезаправками» Ricoh и их решение', '2016-04-29', 'Относительно недавно компания Ricoh \r\nпоставила на российский рынок \r\nнедорогие персональные принтеры и МФУ. \r\nСреди них такие модели, как Ricoh \r\nAficio SP100, Ricoh Aficio SP200 / \r\nSP202sn / SP203n / SP203sfn, Ricoh \r\nAficio 300DN и другие. Одним из \r\nаргументов в пользу этих аппаратов \r\nявляется то, что, по заявлению \r\nкомпании производителя (Ricoh), \r\nкартриджи к ним можно «официально \r\nперезаправлять».\r\n\r\nНо дело в том, что ни для кого не \r\nсекрет, что компании-производители \r\nоргтехники основную прибыль получают \r\nименно с расходных материалов. И, \r\nможете нам поверить, компания Ricoh — \r\nне исключение, прибыль свою они \r\nупускать не намерены. Поэтому, \r\nодновременно с поступлением на рынок \r\nвышеуказанной ортехники, в продаже \r\nтакже появились оригинальные \r\n«заправочные комплекты», такие как \r\nRicoh SP101E (для линейки SP100). А \r\nвот тут как раз и начинаются нюансы, о \r\nкоторых «забыл» упомянуть \r\nпроизводитель.\r\n\r\nВо-первых, стоимость заправочного \r\nнабора не так низка, как хотелось бы, \r\nа во-вторых, перезаправлять картридж \r\n«бесконечно» всё равно не получится. \r\nЕсли с первым ещё можно смириться в \r\nугоду весьма спорному, на наш взгляд, \r\nутверждению об «опасности» \r\nиспользования НЕоригинального тонера, \r\nто второе обидно с любой стороны. Эти \r\nкартриджи снабжены чипом, который всё \r\nже заблокирует работу уже после 2–3 \r\nперезаправок (в зависимости от \r\nплотности печати), не говоря уже о \r\nтом, что части картриджа изнашиваются, \r\nи в какой-то момент качество печати \r\nстановится неудовлетворительным.\r\n\r\nНу и напоследок, как обычно, хорошая \r\nновость. У нас в «Триколоре» успешно \r\nрешаются любые сложности с картриджами \r\nкомпании Ricoh: как связанные с \r\nмеханической частью картриджа, так и с \r\nпрограммной. При этом заправка \r\nобойдется вам дешевле, чем заправочный \r\nнабор, да и пачкаться в тонере не \r\nпридется — всю работу по рециклингу \r\nкартриджа за вас сделают наши \r\nвысококвалифицированные специалисты.', 'Ricoh_sp200pn_and_its_toner.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `price_resurse`
--

CREATE TABLE `price_resurse` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_models` int(10) UNSIGNED DEFAULT NULL,
  `price_model` int(10) DEFAULT NULL,
  `price_black_cart` int(10) DEFAULT NULL,
  `res_black-cart` int(10) DEFAULT NULL,
  `price_color-cart` int(10) DEFAULT NULL,
  `res_color_cart` int(10) DEFAULT NULL,
  `price_BEP_cart` int(10) DEFAULT NULL,
  `res_BEP_cart` int(10) DEFAULT NULL,
  `price_CEP_cart` int(10) DEFAULT NULL,
  `res_CEP_cart` int(10) DEFAULT NULL,
  `price_trans` int(10) DEFAULT NULL,
  `res_trans` int(10) DEFAULT NULL,
  `price_fuser` int(10) DEFAULT NULL,
  `res_fuser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_resurse`
--

INSERT INTO `price_resurse` (`id`, `id_models`, `price_model`, `price_black_cart`, `res_black-cart`, `price_color-cart`, `res_color_cart`, `price_BEP_cart`, `res_BEP_cart`, `price_CEP_cart`, `res_CEP_cart`, `price_trans`, `res_trans`, `price_fuser`, `res_fuser`) VALUES
(12, 18, 97108, 8913, 5000, 8913, 5000, 6000, 15000, 6000, 15000, 8115, 100000, 10000, 100000),
(13, 17, 55000, 10850, 5000, 10850, 5000, 6000, 10000, 6000, 10000, 15000, 300000, 20000, 150000),
(14, 25, 150000, 15000, 25000, 15000, 25000, 12000, 50000, 12000, 50000, 300000, 500000, 150000, 500000),
(15, 22, 60000, 2500, 3000, 4500, 2500, 4500, 2500, 1500, 10000, 6000, 50000, 4000, 35000),
(16, 21, 600000, 3000, 10000, 8000, 10000, 8000, 19000, 4000, 19000, 9000, 25000, 7900, 25000),
(17, 24, 95000, 4000, 9700, 1, 1, 35000, 150000, 1, 1, 25000, 60000, 15000, 45000),
(18, 23, 950000, 12000, 20000, 12000, 20000, 6000, 40000, 6000, 40000, 22000, 44000, 14000, 320000),
(19, 16, 27000, 7000, 12000, 1, 1, 3000, 22000, 1, 1, 1, 1, 250000, 350000),
(20, 19, 65000, 3500, 7000, 1, 1, 2500, 7000, 1, 1, 1, 1, 25000, 35000),
(21, 20, 85000, 3900, 6500, 1, 1, 5500, 6700, 1, 1, 23000, 50000, 19000, 30000);

-- --------------------------------------------------------

--
-- Структура таблицы `type_printer`
--

CREATE TABLE `type_printer` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_printer`
--

INSERT INTO `type_printer` (`id`, `type_name`) VALUES
(1, 'Черно-белый лазерный принтер'),
(2, 'Черно-белое лазерное МФУ'),
(3, 'Цветное лазерное МФУ'),
(4, 'Цветной лазерный принтер'),
(5, 'Струйное МФУ'),
(6, 'Стуйный принтер');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` tinyint(3) NOT NULL,
  `login` varchar(16) NOT NULL,
  `pass` char(32) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avtar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `first_name`, `last_name`, `email`, `avtar`) VALUES
(31, 'rustam', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `vendor_printer`
--

CREATE TABLE `vendor_printer` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `vend_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vendor_printer`
--

INSERT INTO `vendor_printer` (`id`, `vend_name`) VALUES
(1, 'Oki'),
(2, 'Epson'),
(3, 'Canon'),
(4, 'Sharp'),
(5, 'Konica Minolta'),
(6, 'HP'),
(7, 'Kyocera');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `connect`
--
ALTER TABLE `connect`
  ADD PRIMARY KEY (`session`,`token`);

--
-- Индексы таблицы `format_printer`
--
ALTER TABLE `format_printer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_printer`
--
ALTER TABLE `model_printer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vendor` (`id_vendor`,`id_type`,`id_function`,`id_format`,`id_price_resurse`),
  ADD KEY `model_ibfk_2` (`id_type`),
  ADD KEY `model_ibfk_3` (`id_function`),
  ADD KEY `model_ibfk_4` (`id_format`),
  ADD KEY `id_price_resurse` (`id_price_resurse`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price_resurse`
--
ALTER TABLE `price_resurse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_models` (`id_models`);

--
-- Индексы таблицы `type_printer`
--
ALTER TABLE `type_printer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vendor_printer`
--
ALTER TABLE `vendor_printer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `format_printer`
--
ALTER TABLE `format_printer`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `model_printer`
--
ALTER TABLE `model_printer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `price_resurse`
--
ALTER TABLE `price_resurse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `type_printer`
--
ALTER TABLE `type_printer`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `vendor_printer`
--
ALTER TABLE `vendor_printer`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_printer`
--
ALTER TABLE `model_printer`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor_printer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `model_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_printer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `model_ibfk_4` FOREIGN KEY (`id_format`) REFERENCES `format_printer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `model_printer_ibfk_1` FOREIGN KEY (`id_price_resurse`) REFERENCES `price_resurse` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `price_resurse`
--
ALTER TABLE `price_resurse`
  ADD CONSTRAINT `price_resurce_ibfk_1` FOREIGN KEY (`id_models`) REFERENCES `model_printer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
