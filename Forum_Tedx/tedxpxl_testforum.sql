-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 20 mei 2015 om 00:50
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `tedxpxl_testforum`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cibb_categories`
--

CREATE TABLE IF NOT EXISTS `cibb_categories` (
`id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `publish` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cibb_categories`
--

INSERT INTO `cibb_categories` (`id`, `parent_id`, `name`, `slug`, `date_added`, `date_edit`, `publish`) VALUES
(12, 11, 'PHP', 'php', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 13, 'CSS', 'css', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 12, 'Beginner & Installation', 'php-beginner-installation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 12, 'Session, Cookie, Security', 'php-session-cookie-security', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 12, 'File & Image Manipulation', 'php-file-image-manipulation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 14, 'Responsive Layout', 'css-responsive-layout', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 14, 'Beginner', 'css-beginner', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 14, 'Effect, Animation, Gradient', 'css-effect-animation-gradient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 11, 'Javascript', 'javascript', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 21, 'Jquery', 'jquery', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 0, 'Julio', 'julio', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(25, 24, 'is the beste ', 'awesome', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(26, 25, 'en het sexieste ', 'sexy boy', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cibb_posts`
--

CREATE TABLE IF NOT EXISTS `cibb_posts` (
`id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `reply_to_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cibb_posts`
--

INSERT INTO `cibb_posts` (`id`, `thread_id`, `reply_to_id`, `author_id`, `post`, `date_add`, `date_edit`) VALUES
(55, 4, 0, 0, 'dfg', '2012-08-13 05:30:17', '0000-00-00 00:00:00'),
(59, 7, 0, 5, 'I would like all the resulting methods to be included in the RDoc documentation. Is there an RDoc directive which "manually" adds a method to the list of methods for the class? I can''t find one.', '2012-08-13 06:33:48', '0000-00-00 00:00:00'),
(61, 9, 0, 5, '\r\n0\r\nvotes\r\n0\r\nanswers\r\n37 views\r\ntransfer (add/remove) php array values between 2 divs\r\nI have a normal div, having an input textbox which can be edited manually. I want to add/remove php values from another div having a set of php array values (from a query). Each value have an [Add] or ...', '2012-08-13 06:38:03', '0000-00-00 00:00:00'),
(62, 10, 0, 5, 'My first cry for help here. Not sure if my title is properly explicit but it''s the only one I can come up with right now. I''ve been at it for 2 days now and I have read so many different things that I ...', '2012-08-13 06:38:42', '0000-00-00 00:00:00'),
(63, 11, 0, 5, 'How can I remove ''index.php'' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:', '2012-08-13 07:16:03', '0000-00-00 00:00:00'),
(64, 7, 0, 5, 'fghghgthrth', '2012-08-13 07:34:58', '0000-00-00 00:00:00'),
(66, 7, 0, 5, 'ewfwef', '2012-08-13 08:18:47', '0000-00-00 00:00:00'),
(67, 2, 2, 5, 'eyewyy', '2012-08-13 10:40:09', '0000-00-00 00:00:00'),
(68, 2, 67, 5, '123123123', '2012-08-13 10:40:40', '0000-00-00 00:00:00'),
(69, 2, 2, 5, '123213321', '2012-08-13 10:40:53', '0000-00-00 00:00:00'),
(70, 2, 2, 5, 'yjtyjtyjytjytjyjt', '2012-08-13 11:02:40', '0000-00-00 00:00:00'),
(71, 11, 63, 5, 'backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:', '2012-08-13 11:15:20', '0000-00-00 00:00:00'),
(72, 11, 63, 5, 'posted by admin "How can I remove ''index.php'' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:"\r\n                        ', '2012-08-13 13:20:35', '0000-00-00 00:00:00'),
(73, 2, 0, 0, '<b>efwefwefew</b><br>', '2012-08-14 05:09:21', '0000-00-00 00:00:00'),
(74, 2, 0, 5, '<p>sdfadfadff</p>', '2012-08-14 05:10:46', '0000-00-00 00:00:00'),
(75, 2, 0, 5, '<p><b>Initial contentsadf</b></p>', '2012-08-14 05:10:53', '0000-00-00 00:00:00'),
(76, 11, 71, 5, 'posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></p><p>eefwfwefwefwef<i><br></i></p>', '2012-08-14 05:58:30', '0000-00-00 00:00:00'),
(77, 11, 71, 5, '<div style="font-size:11px; padding:5px;">posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></p>rtyretyery<br></div>', '2012-08-14 05:59:46', '0000-00-00 00:00:00'),
(78, 11, 76, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></i></p><p><i>eefwfwefwefwefrety</i></p><p><i><i>rtyretyrty<br></i></i></p><p></p></div>', '2012-08-14 06:01:35', '0000-00-00 00:00:00'),
(79, 11, 63, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>How can I remove ''index.php'' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></p></div>rtyrtyreyryreyertyrey', '2012-08-14 06:02:20', '0000-00-00 00:00:00'),
(80, 11, 76, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></i></p><p><i>eefwfwefwefwef<i><br></i></i></p><p></p></div><br>retyretyeryertyre ret yretyer ty', '2012-08-14 06:02:46', '0000-00-00 00:00:00'),
(81, 11, 80, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>&lt;div style="font-size:11px; background: #e3e3e3;padding:5px;"&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;p&gt;&lt;i&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;i&gt;backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;eefwfwefwefwef&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;br&gt;retyretyeryertyre ret yretyer ty</i></p></div>', '2012-08-14 06:03:48', '0000-00-00 00:00:00'),
(82, 11, 63, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>How can I remove ''index.php'' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here''s what''s in my routes.php file:</i></p></div>rtyrety', '2012-08-14 06:06:20', '0000-00-00 00:00:00'),
(83, 2, 23, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>656u5556656u</i></p></div><br>sfsss', '2012-08-14 06:09:56', '0000-00-00 00:00:00'),
(84, 2, 83, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;"><i>posted by @admin656u5556656usfsss</i></div><br>sfsfss', '2012-08-14 06:10:20', '0000-00-00 00:00:00'),
(85, 12, 0, 5, '<p><b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg" class="js-rewrite-sha" itemprop="url"><span itemprop="title">jwysiwyg</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg/tree/master/help" class="js-rewrite-sha" itemscope="url"><span itemprop="title">help</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg/tree/master/help/examples" class="js-rewrite-sha" itemscope="url"><span itemprop="title">examples</span></a></span> / <strong class="final-path">10-custom-controls.html</strong></p>', '2012-08-14 06:15:57', '0000-00-00 00:00:00'),
(86, 12, 85, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>jwysiwyg / help / examples / 10-custom-controls.html</i></p></div><br>how', '2012-08-14 06:15:58', '0000-00-00 00:00:00'),
(87, 13, 0, 5, '<p style="margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, ''Liberation Sans'', ''DejaVu Sans'', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; ">I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .</p><p style="margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, ''Liberation Sans'', ''DejaVu Sans'', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; ">This is how I would like for it to look:</p>', '2012-08-14 06:43:59', '0000-00-00 00:00:00'),
(88, 13, 87, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>fyuytuityutyutyu', '2012-08-14 13:22:47', '0000-00-00 00:00:00'),
(89, 2, 0, 5, 'fghfghfgh', '2012-08-15 04:40:45', '0000-00-00 00:00:00'),
(90, 9, 61, 5, 'which can be edited manually. I want to add/remove php values from \r\nanother div having a set of php array values (from a query). Each value \r\nhave an [Add', '2012-08-15 07:30:44', '0000-00-00 00:00:00'),
(91, 13, 0, 5, 'yytyu', '2012-12-02 03:23:57', '0000-00-00 00:00:00'),
(92, 13, 87, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>iuiyio', '2012-12-02 03:24:08', '0000-00-00 00:00:00'),
(93, 14, 0, 9, 'Dit is een leuke test omg die pagina is fucking vet jongeuuh', '2015-05-19 23:24:14', '0000-00-00 00:00:00'),
(94, 14, 0, 9, 'Ja da vind ik ook jongeuhhh', '2015-05-19 23:49:23', '0000-00-00 00:00:00'),
(95, 15, 0, 9, 'En ook nog eens de slimste&nbsp;', '2015-05-20 00:42:49', '0000-00-00 00:00:00'),
(96, 15, 0, 9, '<ul style="font-family: Verdana; font-size: 13px;"><li><b><i>eenz zie<sub>n of diebolt<a href="www.google.be"> fun</a><code>&nbsp;</code></sub></i></b></li></ul><div><font face="monospace"><span style="font-size: 10.8333330154419px;"><b><code><i><br>&lt;body&gt;</i></code></b></span></font></div><div><font face="monospace"><span style="font-size: 10.8333330154419px;"><b><code><i>&lt;p&gt; is geweldig &lt;/p&gt;<br>&lt;/body&gt;</i></code></b></span></font></div>', '2015-05-20 00:42:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cibb_roles`
--

CREATE TABLE IF NOT EXISTS `cibb_roles` (
`id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `admin_area` int(1) NOT NULL DEFAULT '0',
  `thread_create` int(1) NOT NULL DEFAULT '0',
  `thread_edit` int(1) NOT NULL DEFAULT '0',
  `thread_delete` int(1) NOT NULL DEFAULT '0',
  `post_create` int(1) NOT NULL DEFAULT '0',
  `post_edit` int(1) NOT NULL DEFAULT '0',
  `post_delete` int(1) NOT NULL DEFAULT '0',
  `role_create` int(1) NOT NULL DEFAULT '0',
  `role_edit` int(1) NOT NULL DEFAULT '0',
  `role_delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cibb_roles`
--

INSERT INTO `cibb_roles` (`id`, `role`, `admin_area`, `thread_create`, `thread_edit`, `thread_delete`, `post_create`, `post_edit`, `post_delete`, `role_create`, `role_edit`, `role_delete`) VALUES
(2, 'administrator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'Normal User', 0, 1, 1, 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cibb_threads`
--

CREATE TABLE IF NOT EXISTS `cibb_threads` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `date_last_post` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cibb_threads`
--

INSERT INTO `cibb_threads` (`id`, `category_id`, `title`, `slug`, `date_add`, `date_edit`, `date_last_post`) VALUES
(14, 19, 'Ik ben gewoon geniaal', 'ik-ben-gewoon-geniaal', '2015-05-19 23:24:14', '0000-00-00 00:00:00', '2015-05-19 23:24:14'),
(15, 26, 'Alles werkt normaal', 'alles-werkt-normaal', '2015-05-20 00:42:49', '0000-00-00 00:00:00', '2015-05-20 00:42:49');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cibb_users`
--

CREATE TABLE IF NOT EXISTS `cibb_users` (
`id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cibb_users`
--

INSERT INTO `cibb_users` (`id`, `role_id`, `username`, `password`) VALUES
(5, 2, 'admin', 'OB/PIUSaRe7l7rgYbDvipT6LN0BUq+hQZ0+W3NRSj7KoSpXRy/RwfaM+k/yAWtLh/MGbgsPmamlTwOjP+9Ef6Q=='),
(9, 2, 'bobette', '4TLsrhFlZy6/LtQY1tCPlWFxqm30Afco6lS47UJk2qqIDh1+Tbub7B131/8X/kQTGj6NWgXMJ9hRY3HERev0GA==');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cibb_categories`
--
ALTER TABLE `cibb_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cibb_posts`
--
ALTER TABLE `cibb_posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cibb_roles`
--
ALTER TABLE `cibb_roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cibb_threads`
--
ALTER TABLE `cibb_threads`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cibb_users`
--
ALTER TABLE `cibb_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cibb_categories`
--
ALTER TABLE `cibb_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT voor een tabel `cibb_posts`
--
ALTER TABLE `cibb_posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT voor een tabel `cibb_roles`
--
ALTER TABLE `cibb_roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `cibb_threads`
--
ALTER TABLE `cibb_threads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `cibb_users`
--
ALTER TABLE `cibb_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
