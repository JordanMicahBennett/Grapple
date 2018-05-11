
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2013 at 12:42 AM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u116303571_dname`
--

-- --------------------------------------------------------

--
-- Table structure for table `GrappleAppsTable`
--

CREATE TABLE IF NOT EXISTS `GrappleAppsTable` (
  `ItemCoverSource` varchar(5556) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(4556) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(8000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(3240) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemController1Title` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleAppsTable`
--

INSERT INTO `GrappleAppsTable` (`ItemCoverSource`, `ItemTitle`, `ItemDescription`, `ItemSource`, `ItemController1Title`) VALUES
('data/images/core/apples.cover/grapple.app.0.png', 'grapple''', 'grapple browser extension\n\n(1)Drag and drop crx file from download folder to your google chrome extension section. Add to chrome, and you are done!\n\n(2)Right click on any empty space on video page, then grapple active-video!)\n\n(3)Supported videos?\n(general)youtube,veoh,vimeo,dailymotion,metacafe,videobash\n(adult)redtube,porntube,pornhub,youporn,xvideos.xhamster', 'data/apples/0/grapple''.chrome.extension.crx', 'get grapple chrome extension'),
('data/images/core/apples.cover/grapple.app.1.png', 'sync', 'crush grapples together! synchronize your grapple profile with up to 5 grapple buddies...just hope he/she accept your crush request..', '', 'start grapple synchronizer!'),
('data/images/core/apples.cover/grapple.app.2.png', 'future', 'plan your day or week or whatever. Just so you know, the more you delay, the more it ferments!', '', 'start grapple planner''');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleAudioTable`
--

CREATE TABLE IF NOT EXISTS `GrappleAudioTable` (
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemStream` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDateCreated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemPublicationStatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleAudioTable`
--

INSERT INTO `GrappleAudioTable` (`UserEmail`, `UserName`, `ItemSource`, `ItemStream`, `ItemTitle`, `ItemDescription`, `ItemDateCreated`, `ItemBouquetName`, `ItemPublicationStatus`) VALUES
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.developphp.com/view_lesson.php?v=534', 'http://www.developphp.com/lesson_files/audio_files/Scurvy_Pirate.mp3', 'ds', 'sdsdds', '2013-10-08 04:19:37', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.htmlgoodies.com/primers/html/article.php/3920991/HTML5-Primer-How-To-Use-the-Audio-Tag.htm', 'http://upload.wikimedia.org/wikipedia/commons/c/c8/Example.ogg', 'ds', 'dsds', '2013-10-08 04:35:03', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.position-absolute.com/articles/introduction-to-the-html5-audio-tag-javascript-manipulation/', 'http://www.position-relative.net/creation/audiotag/Mogwai2009-04-29_acidjack_t16.ogg', 'Untitled', ' ', '2013-10-29 08:45:00', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.position-absolute.com/articles/introduction-to-the-html5-audio-tag-javascript-manipulation/', 'http://www.position-relative.net/creation/audiotag/Mogwai2009-04-29_acidjack_t16.ogg', 'woops same audio!', ' ', '2013-10-29 08:45:42', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.quackit.com/html_5/tags/html_audio_tag.cfm', 'http://www.quackit.com/music/good_enough.mp3', 'html_5_audio_Test', ' ', '2013-11-06 09:53:39', '', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleCocktailTable`
--

CREATE TABLE IF NOT EXISTS `GrappleCocktailTable` (
  `ItemCoverSource` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemController0Title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemController1Title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `GrappleCocktailTable`
--

INSERT INTO `GrappleCocktailTable` (`ItemCoverSource`, `ItemTitle`, `ItemDescription`, `ItemController0Title`, `ItemController1Title`) VALUES
('data/images/core/cocktail.cover/grapple.cocktail.cover.0.png', '', '', 'show all texts', 'hide all texts'),
('data/images/core/cocktail.cover/grapple.cocktail.cover.1.png', '', '', 'show all urls', 'hide all urls'),
('data/images/core/cocktail.cover/grapple.cocktail.cover.2.png', '', '', 'show all images', 'hide all images'),
('data/images/core/cocktail.cover/grapple.cocktail.cover.3.png', '', '', 'show all audios', 'hide all audios'),
('data/images/core/cocktail.cover/grapple.cocktail.cover.4.png', '', '', 'show all videos', 'hide all videos');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleCoreTable`
--

CREATE TABLE IF NOT EXISTS `GrappleCoreTable` (
  `UserName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserPassword` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserBiography` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserProfileImageStream` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleCoreTable`
--

INSERT INTO `GrappleCoreTable` (`UserName`, `UserEmail`, `UserPassword`, `UserBiography`, `UserProfileImageStream`) VALUES
('Jordan Micah Bennett', 'jordanmicahbennett@gmail.com', 'vision', 'none', 'data/user.data/jordanmicahbennett@gmail.com/profile.picture.png'),
('Toni-Ann Lindo', 'toniannlindo27@gmail.com', 'babyboy2', 'none', 'data/user.data/toniannlindo27@gmail.com/profile.picture.png'),
('Edogowa Conan', 'conan@gmail.com', 'sherlock', 'none', 'data/user.data/conan@gmail.com/profile.picture.png'),
('jon', 'and_Ram_eda@hotmail.com', 'rubbish', 'none', 'data/user.data/and_Ram_eda@hotmail.com/profile.picture.png'),
('raomikai', 'ra-omi@hotmail.com', 'grapple2013', 'none', 'data/user.data/ra-omi@hotmail.com/profile.picture.png'),
('unibrain', 'unibrain@gmail.com', 'uni.vision', 'none', 'data/user.data/unibrain@gmail.com/profile.picture.png'),
('nekoaris', 'andreharris3d@yahoo.com', 'anapple', 'none', 'data/user.data/andreharris3d@yahoo.com/profile.picture.png'),
('Steven', 'groves_4@msn.com', '123456', 'none', 'data/user.data/groves_4@msn.com/profile.picture.png'),
('GrapeGod', 'grapple@gmail.com', 'grapple!', 'none', 'data/user.data/grapple@gmail.com/profile.picture.png'),
('Akosua', 'bakerkousa@gmail.com', 'mrwiles', 'none', 'data/user.data/bakerkousa@gmail.com/profile.picture.png'),
('giomarcello', 'giomarcello@gmail.com', 'giomarcello', 'none', 'data/user.data/giomarcello@gmail.com/profile.picture.png'),
('Karreen', 'karreenharris@gmail.com', 'wowwowwow', 'none', 'data/user.data/karreenharris@gmail.com/profile.picture.png'),
('kellesiae', 'kellesiae@yahoo.com', 'kimmoni', 'none', 'data/user.data/kellesiae@yahoo.com/profile.picture.png'),
('Britt Bratt', 'bailey.brittaney@gmail.com', 'grapplepassword', 'none', 'data/user.data/bailey.brittaney@gmail.com/profile.picture.png'),
('GrapeWhore', 'grapplewhore@gmail.com', 'grapple!', 'none', 'data/user.data/grapplewhore@gmail.com/profile.picture.png'),
('gorgeous', 'gorgeous@gmail.com', 'gorgeous!', 'none', 'data/user.data/gorgeous@gmail.com/profile.picture.png'),
('SexyLisa', 'sexylisa@gmail.com', 'sexylisa!', 'none', 'data/user.data/sexylisa@gmail.com/profile.picture.png'),
('Shawnietish', 'shawneil.b@live.com', 'tinker', 'none', 'data/user.data/shawneil.b@live.com/profile.picture.png'),
('dpsilver', 'dpsilver@yahoo.com', '7819ruby', 'none', 'data/user.data/dpsilver@yahoo.com/profile.picture.png'),
('DrLenique', 'lataeviaelizabeth@yahoo.com', 'doctorll1992', 'none', 'data/user.data/lataeviaelizabeth@yahoo.com/profile.picture.png'),
('Tish', 'shawneil.b@live.com', 'tinkerbell', 'none', 'data/user.data/shawneil.b@live.com/profile.picture.png'),
('Stonekidd', 'radcliffestone@gmail.com', 'silver91', 'none', 'data/user.data/radcliffestone@gmail.com/profile.picture.png'),
('Dangles', 'hypedanny_dan@hotmail.com', 'grapp92', 'none', 'data/user.data/hypedanny_dan@hotmail.com/profile.picture.png'),
('jordanisanidiot', 'jordanisanidiot', 'jordanisanidiot', 'none', 'data/user.data/jordanisanidiot/profile.picture.png'),
('kemthegrey', 'kematimorgan@gmail.com', 'kematikatty', 'none', 'data/user.data/kematimorgan@gmail.com/profile.picture.png');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleImageTable`
--

CREATE TABLE IF NOT EXISTS `GrappleImageTable` (
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemStream` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDateCreated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemPublicationStatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleImageTable`
--

INSERT INTO `GrappleImageTable` (`UserEmail`, `UserName`, `ItemSource`, `ItemStream`, `ItemTitle`, `ItemDescription`, `ItemDateCreated`, `ItemBouquetName`, `ItemPublicationStatus`) VALUES
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://cache.gawkerassets.com/assets/images/4/2011/09/quantum_01.jpg', 'http://cache.gawkerassets.com/assets/images/4/2011/09/quantum_01.jpg', 'ds', 'ds', '2013-10-07 04:43:39', '', 'public'),
('kellesiae@yahoo.com', 'kellesiae', 'http://3.bp.blogspot.com/-YsUFeohqHe4/TaMZqWbshDI/AAAAAAAABCM/_JdPNbJFISg/s640/untitled.bmp', 'http://3.bp.blogspot.com/-YsUFeohqHe4/TaMZqWbshDI/AAAAAAAABCM/_JdPNbJFISg/s640/untitled.bmp', 'sexy thick choolate', ' ', '2013-10-30 21:35:07', '', 'private'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://1.bp.blogspot.com/_BEEM-0xDBAg/Sgx1gq0wy_I/AAAAAAAAA5g/hm-ZdUPIwSk/s400/2.jpg', 'http://1.bp.blogspot.com/_BEEM-0xDBAg/Sgx1gq0wy_I/AAAAAAAAA5g/hm-ZdUPIwSk/s400/2.jpg', 'ddd', 'ddd', '2013-10-07 05:19:39', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://de.acidcow.com/pics/20091007/types_of_butts_04.jpg', 'http://de.acidcow.com/pics/20091007/types_of_butts_04.jpg', 'dsf', 'dfd', '2013-10-07 05:23:30', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://4.bp.blogspot.com/-yNYROZsznOc/UieC80b4g4I/AAAAAAAACn4/TDEibZtH-TY/s320/1347082728__morena gostosa peita bundao coxao.jpg', 'http://4.bp.blogspot.com/-yNYROZsznOc/UieC80b4g4I/AAAAAAAACn4/TDEibZtH-TY/s320/1347082728__morena gostosa peita bundao coxao.jpg', 'ddff', 'dfdf', '2013-10-07 05:31:19', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://4.bp.blogspot.com/-yNYROZsznOc/UieC80b4g4I/AAAAAAAACn4/TDEibZtH-TY/s320/1347082728__morena gostosa peita bundao coxao.jpg', 'http://4.bp.blogspot.com/-yNYROZsznOc/UieC80b4g4I/AAAAAAAACn4/TDEibZtH-TY/s320/1347082728__morena gostosa peita bundao coxao.jpg', 'dsds', ' dsds', '2013-10-07 05:35:56', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.nature.com/news/2011/110531/images/news474018a-i1.0.jpg', 'http://www.nature.com/news/2011/110531/images/news474018a-i1.0.jpg', 'ddd', 'ddd', '2013-10-07 07:56:26', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://th00.deviantart.net/fs70/200H/f/2013/126/6/2/alien_technology_by_unibrain-d64alue.png', 'http://th00.deviantart.net/fs70/200H/f/2013/126/6/2/alien_technology_by_unibrain-d64alue.png', 'god-interface', ' ', '2013-11-06 09:53:26', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://images.ted.com/images/ted/f9e53c7bb152b2e5c8c07e5a199e4d14d17baac6_389x292.jpg', 'http://images.ted.com/images/ted/f9e53c7bb152b2e5c8c07e5a199e4d14d17baac6_389x292.jpg', 'dsds', ' dsds', '2013-10-07 21:55:29', '', 'public'),
('karreenharris@gmail.com', 'Karreen', 'http://www.mangareader.net/280-19781-10/kimi-ni-todoke/chapter-2.html', 'http://i25.mangareader.net/kimi-ni-todoke/2/kimi-ni-todoke-454349.jpg', 'Untitled', ' ', '2013-10-30 21:05:28', '', 'public'),
('giomarcello@gmail.com', 'giomarcello', 'http://eofdreams.com/data_images/dreams/image/image-02.jpg', 'http://eofdreams.com/data_images/dreams/image/image-02.jpg', 'conbstellation', ' stuff', '2013-10-30 20:39:52', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', 'http://www.dwavesys.com/en/dw_homepage.html', 'http://www.dwavesys.com/en/images/homebanner1_new4.jpg', 'Untitled', ' ', '2013-10-14 07:35:09', '', 'private'),
('conan@gmail.com', 'Edogowa Conan', 'http://www.askamathematician.com/wp-content/uploads/2010/07/QEDmotion.jpg', 'http://www.askamathematician.com/wp-content/uploads/2010/07/QEDmotion.jpg', 'tytr', ' fd', '2013-10-17 19:30:57', '', 'public'),
('and_Ram_eda@hotmail.com', 'jon', 'https://www.google.com.jm/search?hl=en', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQPufM5SNw0qbbssOzRVJL3bAxL_XkAaT_rOqCzAa1u76dtue9CVA', 'Untitled', ' ', '2013-10-19 08:21:16', '', 'public'),
('and_Ram_eda@hotmail.com', 'jon', 'http://grapple.yzi.me/', 'http://grapple.yzi.me/data/user.data/and_Ram_eda2hotmail.com/profile.picture.png', 'Untitled', ' ', '2013-10-19 08:46:40', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.facebook.com/photo.php?fbid=10202246581268160', 'https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-prn2/q71/1375864_10202246581268160_682891867_n.jpg', 'Untitled', ' ', '2013-10-20 07:14:38', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://th03.deviantart.net/fs71/PRE/f/2013/202/5/0/unicortex_humanoid_phi_by_unibrain-d6ei7y4.png', 'http://th03.deviantart.net/fs71/PRE/f/2013/202/5/0/unicortex_humanoid_phi_by_unibrain-d6ei7y4.png', 'd', 'd', '2013-10-26 01:51:47', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.costcentral.com/product-images-new/unibrain-2036.jpg', 'http://www.costcentral.com/product-images-new/unibrain-2036.jpg', 'Untitled', ' ', '2013-10-26 01:52:29', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.cienciakanija.com/wp-content/uploads/070504_Quantum_mechanics.jpg', 'http://www.cienciakanija.com/wp-content/uploads/070504_Quantum_mechanics.jpg', 'Untitled', ' ', '2013-10-28 02:07:36', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://theconnectivist-img.s3.amazonaws.com/wp-content/uploads/2013/05/QuantumInternetHero-1300x681.jpg', 'http://theconnectivist-img.s3.amazonaws.com/wp-content/uploads/2013/05/QuantumInternetHero-1300x681.jpg', 'Untitled', ' ', '2013-10-28 02:08:15', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.dailygalaxy.com/.a/6a00d8341bf7f753ef019affc63311970d-pi', 'http://www.dailygalaxy.com/.a/6a00d8341bf7f753ef019affc63311970d-pi', 'Untitled', ' ', '2013-10-28 02:09:17', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://users.wpi.edu/~dberenson/courses/fall13ai/robotai.jpg', 'http://users.wpi.edu/~dberenson/courses/fall13ai/robotai.jpg', 'Untitled', ' ', '2013-10-28 02:10:20', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://pansci.tw/wp-content/uploads/2012/12/1289550410_img0.jpeg', 'http://pansci.tw/wp-content/uploads/2012/12/1289550410_img0.jpeg', 'Untitled', ' ', '2013-10-28 02:11:16', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://eofdreams.com/data_images/dreams/image/image-02.jpg', 'http://eofdreams.com/data_images/dreams/image/image-02.jpg', 'Untitled', ' ', '2013-10-28 16:49:34', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.mangapark.com/manga/Magi/c201v2/all', 'http://a.mpcdn.net/manga/p/6085/462696/8.jpg', 'Untitled', ' ', '2013-10-29 18:49:23', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://physiology.med.cornell.edu/faculty/nirenberg/lab/', 'http://physiology.med.cornell.edu/faculty/nirenberg/lab/images/cajal3.jpg', 'Untitled', ' ', '2013-11-04 14:38:33', '', 'public'),
('gorgeous@gmail.com', 'gorgeous', 'http://reas.com/surface/', 'http://reas.com/surface/reas_surface_0.jpg', '_gorgeous-design-capture', ' _gorgeous-design-capture', '2013-11-11 07:49:18', '', 'public'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.bravomilf.com/naughtyamerica/sinnamon-love-naughtyamerica/sexy-ebony-teacher-fucking-lika-a-bitch/04.jpg', 'http://www.bravomilf.com/naughtyamerica/sinnamon-love-naughtyamerica/sexy-ebony-teacher-fucking-lika-a-bitch/04.jpg', 'yum!', 'dam!', '2013-11-07 04:06:35', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://img100.xvideos.com/videos/thumbslll/1a/40/3f/1a403f7a62654e1bf3d95baea55a5222/1a403f7a62654e1bf3d95baea55a5222.20.jpg', 'http://img100.xvideos.com/videos/thumbslll/1a/40/3f/1a403f7a62654e1bf3d95baea55a5222/1a403f7a62654e1bf3d95baea55a5222.20.jpg', 'nice spread!', 'dam that spread though !', '2013-11-07 04:13:33', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://images.galleries.pornpros.com/galleries.40ozbounce.com/htdocs/pb02/pb02_kapristyles/03.jpg', 'http://images.galleries.pornpros.com/galleries.40ozbounce.com/htdocs/pb02/pb02_kapristyles/03.jpg', 'Untitled', ' ', '2013-11-07 06:05:28', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://images.galleries.pornpros.com/galleries.40ozbounce.com/htdocs/pb02/pb02_kapristyles/05.jpg', 'http://images.galleries.pornpros.com/galleries.40ozbounce.com/htdocs/pb02/pb02_kapristyles/05.jpg', 'Untitled', ' ', '2013-11-07 06:05:43', '', 'private'),
('', '', 'http://reas.com/surface/', 'http://reas.com/surface/reas_surface_0.jpg', '_gorgeous-design-capture', 'gorgeous.com design ', '2013-11-11 07:44:21', '', 'private'),
('tester@gmail.com', 'tester', 'http://static6.depositphotos.com/1001545/621/v/950/depositphotos_6217994-Plastic-Person-Icon-with-Speech-Bubble-and-Tie.jpg', 'http://static6.depositphotos.com/1001545/621/v/950/depositphotos_6217994-Plastic-Person-Icon-with-Speech-Bubble-and-Tie.jpg', 'nice_profile_picture', ' ', '2013-11-13 07:07:53', '', 'public'),
('tester@gmail.com', 'tester', 'http://i0.kym-cdn.com/photos/images/original/000/051/726/17-i-lol.jpg?1318992465', 'http://i0.kym-cdn.com/photos/images/original/000/051/726/17-i-lol.jpg?1318992465', 'dd', ' ', '2013-11-11 11:07:29', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://upload.wikimedia.org/wikipedia/commons/3/3e/Fried-Chicken-Leg.jpg', 'http://upload.wikimedia.org/wikipedia/commons/3/3e/Fried-Chicken-Leg.jpg', 'Untitled', ' ', '2013-11-12 15:41:22', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://vintageillustrations.org/hash/bigthumbs/2/0/d/d/20dd-vector-grape-with-leaf-ink-drawing-vector-illustration-142893397.jpg', '', 'Untitled', ' ', '2013-11-14 02:02:10', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://grapple.yzi.me/', 'http://grapple.yzi.me/data/images/header/grapple.super.tab.item.2.png', 'Untitled', ' ', '2013-11-17 19:35:40', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'https://www.google.com.jm/search?q=ps4', 'http://wimages.vr-zone.net/2013/08/PS4.jpg', 'cool ps4 image!', ' ', '2013-11-19 02:44:50', '', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleItemBouquetNameCollectionTable`
--

CREATE TABLE IF NOT EXISTS `GrappleItemBouquetNameCollectionTable` (
  `UserEmail` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetNameCollectionItem` varchar(9000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleItemBouquetNameCollectionTable`
--

INSERT INTO `GrappleItemBouquetNameCollectionTable` (`UserEmail`, `ItemBouquetNameCollectionItem`, `ItemType`) VALUES
('gorgeous@gmail.com', 'tstuff0', 'text'),
('gorgeous@gmail.com', 'tstuff1', 'text'),
('gorgeous@gmail.com', 'vstuff0', 'video'),
('gorgeous@gmail.com', 'vstuff1', 'video'),
('grapple@gmail.com', 'tstuff1', 'text'),
('grapple@gmail.com', 'tstuff0', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleMessageTable`
--

CREATE TABLE IF NOT EXISTS `GrappleMessageTable` (
  `UserEmail` varchar(232) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserMessageTitle` varchar(323) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserMessage` varchar(323) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserMessageDate` varchar(343) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GrappleMyCocktailTable`
--

CREATE TABLE IF NOT EXISTS `GrappleMyCocktailTable` (
  `ItemCoverSource` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemController0Title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ItemController1Title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `GrappleMyCocktailTable`
--

INSERT INTO `GrappleMyCocktailTable` (`ItemCoverSource`, `ItemTitle`, `ItemDescription`, `ItemController0Title`, `ItemController1Title`) VALUES
('data/images/core/my.cocktail.cover/grapple.my.cocktail.cover.0.png', '', '', 'show all texts', 'hide all texts'),
('data/images/core/my.cocktail.cover/grapple.my.cocktail.cover.1.png', '', '', 'show all urls', 'hide all urls'),
('data/images/core/my.cocktail.cover/grapple.my.cocktail.cover.2.png', '', '', 'show all images', 'hide all images'),
('data/images/core/my.cocktail.cover/grapple.my.cocktail.cover.3.png', '', '', 'show all audios', 'hide all audios'),
('data/images/core/my.cocktail.cover/grapple.my.cocktail.cover.4.png', '', '', 'show all videos', 'hide all videos');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleTextTable`
--

CREATE TABLE IF NOT EXISTS `GrappleTextTable` (
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemStream` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDateCreated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemPublicationStatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleTextTable`
--

INSERT INTO `GrappleTextTable` (`UserEmail`, `UserName`, `ItemSource`, `ItemStream`, `ItemTitle`, `ItemDescription`, `ItemDateCreated`, `ItemBouquetName`, `ItemPublicationStatus`) VALUES
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.kurzweilai.net/', 'e self-assembled titanium dioxide (TiO2) nanotube', 'kurz', ' what?', '2013-09-28 08:52:01', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.kurzweilai.net/', 'Dental implants are posts, usually made of titanium, that are surgically placed into the jawbone and topped with artificial teeth.', 'wtf?', ' something...', '2013-09-28 09:40:38', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'About Quanta', 'df', ' dfdf', '2013-10-13 05:28:46', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'About Quanta', 'ddd', 'ddd', '2013-10-13 05:27:27', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'heila Nirenberg Department o', 'dsf', 'fdfd ', '2013-10-07 21:53:28', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://my.opera.com/community/forums/topic.dml?id=1060532', 'thanks tamil, the other did the trick for me', 'yeah!', 'hello!', '2013-09-29 20:33:59', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'chrome-extension://akcmookiampodjjemccjfameoipggjeb/_generated_background_page.html', '500 qubits', 'ddd', 'dsds', '2013-10-07 05:32:57', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/search?output=search', ' baby name Shiela. Meaning of Shiela. What does Shiela mean? Shiela origin. Information abou', 'test', 'fuck!', '2013-10-02 09:54:08', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', 'http://en.wikipedia.org/wiki/Theory_of_everything', 'A theory of everything (ToE) or final theory is any theory in the realm o', '5grt', 'uy', '2013-10-17 19:31:26', '', 'public'),
('kellesiae@yahoo.com', 'kellesiae', 'http://ourvle2.mona.uwi.edu/mod/assignment/view.php?id=76870', 'pload a single jar', 'wow', ' ', '2013-10-30 21:32:05', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'chrome-extension://gddljhoopdnenflinglbpbahojmkkcje/_generated_background_page.html', 'theoretical', 'dd', ' ddd', '2013-10-07 04:15:38', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'About Quanta', 'dd', 'ddd', '2013-10-13 05:29:11', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', 'http://en.wikipedia.org/wiki/Theory_of_everything', 'ces, the weak, strong and electromagnetic interactions. A primary stumbling block in the construction of a ToE is that straightforward attempts to apply quant', 'fd', ' gf', '2013-10-17 19:31:33', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', 'http://en.wikipedia.org/wiki/Theory_of_everything', 'amously suggested that a sufficiently powerful intellect could, if it knew the position and velocity of every particle at a given time, along with the laws of nature, calculate the position of any par', ' v', ' vvbvc', '2013-10-17 19:31:42', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.facebook.com/messages/jonathan.roberts.311', 'then cut a bed', 'd', ' d', '2013-10-19 08:53:35', '', 'public'),
('and_Ram_eda2hotmail.com', 'jon', 'https://www.facebook.com/messages/jonathan.roberts.311', 'u know next week is the next meeting right?', 'Untitled', ' ', '2013-10-19 08:55:06', '', 'public'),
('and_Ram_eda2hotmail.com', 'jon', 'https://www.facebook.com/messages/jonathan.roberts.311', 'make ppl start using it and give feedbacks', 'f', 'f', '2013-10-19 08:55:38', '', 'public'),
('and_Ram_eda2hotmail.com', 'jon', 'https://www.facebook.com/messages/jonathan.roberts.311', 'and behind a veil', 'd', ' d', '2013-10-19 08:56:51', '', 'public'),
('and_Ram_eda2hotmail.com', 'jon', 'https://www.facebook.com/messages/jonathan.roberts.311', 'check your grapple lol', 'Untitled', ' ', '2013-10-19 08:57:14', '', 'public'),
('and_Ram_eda2hotmail.com', 'jon', 'http://lame.sourceforge.net/', 'arted around mid-1998. Mike Cheng started it as a patch against the 8hz-MP3 encoder sources. After some quality concerns raised by others, he decided to start from scratch based on the dist10 sources.', 'Untitled', ' ', '2013-10-19 09:04:18', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.yourprops.com/movieprops/default/4746273d06d34/I-Robot-Sonny-Bust-1.jpg', 'the props', 'Untitled', ' ', '2013-10-20 07:05:10', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.facebook.com/photo.php?fbid=10202246581268160', 'welcome to facebook', 'Untitled', ' ', '2013-10-20 07:10:30', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.facebook.com/photo.php?fbid=10202246581268160', 'u are so rachet', 'Untitled', ' ', '2013-10-20 07:12:07', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://sourceforge.net/projects/wampserver/postdownload?source=dlp', 'downloading WampServer. Checkout screenshots, reviews, and', 'fd', ' trhe', '2013-10-22 15:44:04', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.tor.com/stories/2013/09/our-final-invention-excerpt', 'gently inferring that our ASI is a fair dealer', 'Untitled', ' ', '2013-10-23 23:50:21', '', 'public'),
('groves_4@msn.com', 'Steven', 'http://www.stumbleupon.com/su/2xD6tR/: rdSpAhc:iOosnI7j/sanctuaries.noaa.gov/pgallery/pgchannel/human/whalewatching_300.jpg/', 'nutriculi turitopsis is immortal!', 'Untitled', ' ', '2013-10-28 00:20:58', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.a-i.com/', 'ew form of life. Our expanding web site is an essential part of the emerging global discussion about artificial intelligence. On this website, we showcase the state of the art in pattern-matching conv', 'Untitled', ' ', '2013-10-28 02:11:54', '', 'public'),
('karreenharris@gmail.com', 'Karreen', 'http://www.thefreedictionary.com/scenery', 'natural features', 'khgyycfr', ' ', '2013-10-30 21:06:09', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.kurzweilai.net/', 'Vicarious, a startup developing artificial intelligence software, today announced that its algorithms can now reliably', 'Untitled', ' ', '2013-10-28 02:12:59', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.kurzweilai.net/', 'an entire chapter of The Singularity is Near to the risks of advanced technologies.There, he wrote that despite his reputation as a technolog', 'Untitled', ' ', '2013-10-28 02:13:37', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.kurzweilai.net/', 'cedures. Funding for these projects totals approximately $2.4 million over the next five years, subject to the availability of f', 'Untitled', ' ', '2013-10-28 02:14:14', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'https://www.google.com.jm/?gws_rd=cr', 'Wiktionary, the free dictionary. Text may refer to: Contents. 1 Computers and electronics; 2 Arts an', 'Untitled', ' ', '2013-10-28 06:31:08', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'he free di', 'Untitled', ' ', '2013-10-28 06:32:05', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', ' Phones, Ringtones,', 'Untitled', ' ', '2013-10-28 06:32:43', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://cs.union.edu/~striegnk/learn-prolog-now/html/node90.html', 'another built in', 'Untitled', ' ', '2013-10-28 16:49:18', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://arstechnica.com/gadgets/2013/10/officially-announced-lg-g-flex-and-a-healing-factor/', 'horses', 'Untitled', ' ', '2013-10-28 16:50:48', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://spectrum.ieee.org/whitepaper/materials-matter-the-material-selection-process', 'Fact is, materials selection gets complicated. The relationship between the internal ', 'Untitled', ' ', '2013-10-29 08:31:43', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://spectrum.ieee.org/whitepaper/materials-matter-the-material-selection-process', 'To shed light on the situation', 'shedding light', ' ', '2013-10-29 08:33:13', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.html5rocks.com/en/tutorials/video/basics/', 'http://www.html5rocks.com/en/tutorials/video/basics/', 'okay..', ' ', '2013-10-29 08:41:59', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.html5rocks.com/en/tutorials/video/basics/', 'http://www.html5rocks.com/en/tutorials/video/basics/', 'Untitled', ' ', '2013-10-29 08:42:24', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.position-absolute.com/articles/introduction-to-the-html5-audio-tag-javascript-manipulation/', '', 'Untitled', ' ', '2013-10-29 08:43:10', '', 'public'),
('giomarcello@gmail.com', 'giomarcello', 'http://en.wikipedia.org/wiki/Image', 'Images may be two-dimensional, such as a photograph, screen display, and as well as a three-dimensional, such as a', 'Untitled', ' ', '2013-10-30 20:41:21', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://en.wikipedia.org/wiki/Grape', 'naturally on the skins of grapes, lead', 'Untitled', ' ', '2013-10-29 19:13:09', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://en.wikipedia.org/wiki/Grape', 'naturally on the skins of grapes, lead', 'Untitled', ' ', '2013-10-29 19:13:09', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=teqIjl55Hjs', 'Grease', 'Untitled', ' ', '2013-11-06 09:22:28', '', 'public'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://en.wikipedia.org/wiki/List_of_African-American_pornographic_actors', 'This is a list of notable African-American pornographic actors, sorted by last name.', 'what a sexy list', 'dam_sexy_list_indeed', '2013-11-07 04:07:13', '', 'private'),
('gorgeous@gmail.com', 'gorgeous', 'http://en.wikipedia.org/wiki/Gorgeous', 'Gorgeous', 'Untitled', ' ', '2013-11-11 08:16:01', '', 'public'),
('gorgeous@gmail.com', 'gorgeous', 'https://www.google.com.jm/?gws_rd=cr', 'beautiful', 'dam', ' ', '2013-11-11 08:16:45', '', 'public'),
('tester@gmail.com', 'tester', 'https://www.google.com.jm/?gws_rd=cr', 'eague of Legends is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and Mac OS X, inspired by the mod Defens', 'Untitled', '', '2013-11-11 11:03:40', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://stackoverflow.com/questions/2536873/how-can-i-set-size-of-a-button', 'and Y (two first parameters of the GridLayout constructor) specify the number of rows and columns in the grid (respectively). You may leave one of them as 0 if you want that value to be unbounded.', 'Untitled', '', '2013-11-29 19:05:36', '', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleUrlTable`
--

CREATE TABLE IF NOT EXISTS `GrappleUrlTable` (
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemStream` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDateCreated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemPublicationStatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleUrlTable`
--

INSERT INTO `GrappleUrlTable` (`UserEmail`, `UserName`, `ItemSource`, `ItemStream`, `ItemTitle`, `ItemDescription`, `ItemDateCreated`, `ItemBouquetName`, `ItemPublicationStatus`) VALUES
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://my.opera.com/community/forums/topic.dml?id=1060532', 'http://my.opera.com/krompirko/', 'hello!', ' dam!', '2013-09-29 20:35:09', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://my.opera.com/community/forums/topic.dml?id=1060532', 'http://my.opera.com/krompirko/', 'dam', ' dam2', '2013-09-29 20:45:27', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'https://www.google.com.jm/?gws_rd=cr', 'jordan', ' dam', '2013-09-29 20:56:15', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/search?biw=1567', 'http://www.google.com.jm/url?sa=i', 'quantum pc', ' pc', '2013-09-29 21:13:38', '', 'public'),
('giomarcello@gmail.com', 'giomarcello', 'http://en.wikipedia.org/wiki/Image', 'http://en.wikipedia.org/wiki/Wikipedia:About', 'nice!', ' ', '2013-10-30 20:43:17', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'https://www.youtube.com/watch?v=duKL2dAJN6I', 'https://www.youtube.com/watch?v=duKL2dAJN6I', 'Untitled', ' ', '2013-10-30 02:54:55', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'https://vimeo.com/78055024', 'https://vimeo.com/78055024', 'elegance incarnate', ' ', '2013-10-30 04:40:48', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://developer.chrome.com/extensions/getstarted.html', 'http://developer.chrome.com/extensions/getstarted.html', 'chrome tut', 'yeah!', '2013-10-07 07:54:14', '', 'public'),
('and_Ram_eda@hotmail.com', 'jon', 'http://en.wikipedia.org/wiki/Food', 'http://en.wikipedia.org/wiki/Food_and_Agriculture_Organization', 'Untitled', ' ', '2013-10-08 07:54:44', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.dwavesys.com/en/videos.html', 'http://www.dwavesys.com/en/videos.html', 'dam', ' dddd', '2013-10-11 06:26:33', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.google.com.jm/?gws_rd=cr', 'https://www.google.com.jm/?gws_rd=cr', 'Untitled', ' ', '2013-10-17 19:26:08', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Untitled', ' ', '2013-10-18 11:04:48', '', 'public'),
('conan@gmail.com', 'Edogowa Conan', '', 'http://musicmp3.ru/artist_virgin__album_ficca.html', 'Untitled', ' ', '2013-10-18 14:44:33', '', 'public'),
('and_Ram_eda@hotmail.com', 'jon', 'https://www.google.com.jm/search?hl=en', 'http://www.google.com.jm/imgres?hl=en', 'Untitled', ' ', '2013-10-19 08:19:38', '', 'public'),
('and_Ram_eda@hotmail.com', 'jon', 'https://www.google.com.jm/search?hl=en', 'http://www.google.com.jm/imgres?hl=en', 'Untitled', ' ', '2013-10-19 08:19:57', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.picresize.com/results', 'http://www.picresize.com/results', 'd', ' dd', '2013-10-19 10:59:35', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.timeanddate.com/worldclock/city.html?n=120', 'http://www.timeanddate.com/worldclock/full.html', 'g', ' hh', '2013-10-19 22:25:17', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'https://www.facebook.com/?ref=tn_tnmn', 'https://www.facebook.com/sabrinamonique.tapper', 'Untitled', ' ', '2013-10-23 21:47:05', '', 'public'),
('unibrain@gmail.com', 'unibrain', 'http://www.nwanime.com/galilei-donna-episode-3/video/a66ad5baa2cb420da2af/mirrorfbdbcb30d620f0a265d2/', 'http://www.nwanime.com/galilei-donna-episode-3/video/a66ad5baa2cb420da2af/mirrorfbdbcb30d620f0a265d2/', 'Untitled', ' ', '2013-10-26 03:18:30', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://cpanel.2freehosting.com/advanced/phpmyadmin', 'http://cpanel.2freehosting.com/advanced/phpmyadmin', 'Untitled', ' ', '2013-10-28 02:02:43', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.kurzweilai.net/vicarious-ai-breaks-captcha-turing-test', 'http://www.kurzweilai.net/vicarious-ai-breaks-captcha-turing-test', 'Untitled', ' ', '2013-10-29 02:07:24', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.kurzweilai.net/vicarious-ai-breaks-captcha-turing-test', 'http://www.kurzweilai.net/vicarious-ai-breaks-captcha-turing-test', 'Untitled', ' ', '2013-10-29 02:07:41', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.pinterest.com/', 'http://www.pinterest.com/', 'Untitled', ' ', '2013-10-29 08:39:08', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'https://vimeo.com/', 'https://vimeo.com/', 'i like vimeo!', ' ', '2013-10-29 08:39:01', '', 'public'),
('kellesiae@yahoo.com', 'kellesiae', 'http://www.digiceljamaica.com/en/services/funstuff/webtext', 'http://www.digiceljamaica.com/en/services/funstuff/webtext', 'Untitled', ' ', '2013-10-30 21:34:01', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.youtube.com/watch?v=1mjlM_RnsVE', 'http://www.youtube.com/watch?v=1mjlM_RnsVE', 'Untitled', ' ', '2013-11-03 11:17:04', '', 'public'),
('grapple@gmail.com', 'GrappleGod', 'http://www.youtube.com/watch?v=Z8eXaXoUJRQ', 'http://www.youtube.com/watch?v=Z8eXaXoUJRQ', 'Untitled', ' ', '2013-11-03 11:18:29', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'https://bitly.com/', 'https://bitly.com/a/sign_up', 'bitly? lol', ' ', '2013-11-06 09:53:14', '', 'public'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.ebonysex.xxx/fuck-me-buddy-33675_14.html', 'http://www.ebonysex.xxx/fuck-me-buddy-33675_14.html', 'dam!', ' ', '2013-11-07 06:04:36', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.bravomilf.com/naughtyamerica/sinnamon-love-naughtyamerica/sexy-ebony-teacher-fucking-lika-a-bitch/', 'http://www.bravomamas.com/pornreviews/reviews/naughtyamerica', 'this is a must fap_', 'sexy teacha slut bitch make cocky rise haadah dan diamond', '2013-11-07 04:11:57', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.google.com.jm/imgres?biw=1600', 'http://www.google.com.jm/url?sa=i', 'nice_spread!', ' ', '2013-11-07 04:17:18', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.bigassmovs.com/black/brownbunnieshd/190/brownbunnieshd_tox.html', 'http://www.bigassmovs.com/black/brownbunnieshd/190/brownbunnieshd_tox.html', 'phat pussy', ' ', '2013-11-07 06:06:56', '', 'private'),
('gorgeous@gmail.com', 'gorgeous', 'http://indiemaps.com/blog/2011/04/dymaxion-projection-in-openlayers/', 'http://indiemaps.com/blog/2011/04/dymaxion-projection-in-openlayers/', '_gorgeous-code', 'code-behind-layout', '2013-11-11 08:02:03', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.photofacefun.com/photoframes/', 'http://www.photofacefun.com/photoframes/', 'good photo manipulation site', 'PHOT_MANIPULATION_MAX!\r\n ', '2013-11-18 19:16:17', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.frameshow.com/ecard_application/photo_frame_ecards.php?caller=gallery', 'http://www.frameshow.com/ecard_application/photo_frame_ecards.php?caller=gallery', 'latest photo frame editor', ' ', '2013-11-18 19:22:37', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://imgur.com/gallery/FnZdw', 'http://imgur.com/gallery/FnZdw', 'Untitled', 'wierd and cool', '2013-12-01 16:16:20', '', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `GrappleVideoTable`
--

CREATE TABLE IF NOT EXISTS `GrappleVideoTable` (
  `UserEmail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSource` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemStream` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDescription` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemDateCreated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemBouquetName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemPublicationStatus` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `GrappleVideoTable`
--

INSERT INTO `GrappleVideoTable` (`UserEmail`, `UserName`, `ItemSource`, `ItemStream`, `ItemTitle`, `ItemDescription`, `ItemDateCreated`, `ItemBouquetName`, `ItemPublicationStatus`) VALUES
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=u5bR1GkSwkk', 'http://www.youtube.com/embed/u5bR1GkSwkk', 'youtube-sample', ' ', '2013-11-03 23:04:23', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://vimeo.com/77984632', 'https://player.vimeo.com/video/77984632', 'vimeo-sample', ' ', '2013-11-03 23:07:04', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.dailymotion.com/video/x16jge5_2012-los-angeles-limo-before-after_shortfilms', 'http://www.dailymotion.com/embed/video/x16jge5_2012-los-angeles-limo-before-after_shortfilms', 'dailymotion-sample', ' ', '2013-11-04 00:02:03', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.metacafe.com/watch/11116077/epic_meal_time_fastfood_scarecrow/', 'http://www.metacafe.com/fplayer/11116077/epic_meal_time_fastfood_scarecrow/.swf', 'metacafe-sample', ' ', '2013-11-04 00:39:46', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.videobash.com/video_show/generous-spouse-634501', 'http://www.videobash.com/embed/generous-spouse-634501', 'videobash-sample', ' ', '2013-11-04 00:56:41', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=omRRpEywZzs', 'http://www.youtube.com/embed/omRRpEywZzs', 'Untitled', ' ', '2013-11-04 14:38:43', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.youtube.com/watch?v=Ee9l3umk7u4', 'http://www.youtube.com/embed/Ee9l3umk7u4', 'Untitled', ' ', '2013-11-04 18:12:27', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.veoh.com/watch/v17332713n8ECEdkp', '', 'Untitled', ' ', '2013-11-04 18:13:41', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.youtube.com/watch?v=ounm0fwRHkM', 'http://www.youtube.com/embed/ounm0fwRHkM', 'Untitled', ' ', '2013-11-04 18:16:37', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=teqIjl55Hjs', 'http://www.youtube.com/embed/teqIjl55Hjs', 'girls on_fire', ' ', '2013-11-06 09:53:54', '', 'public'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://xhamster.com/movies/669831/pretty_black_teen_strips_amp_dances_the_nasty_way.html', 'http://xhamster.com/xembed.php?video=669831', 'dam though!', 'she make man cocky rise like forest fire', '2013-11-07 04:04:03', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://xhamster.com/movies/1085213/latina_teen_stripping_and_dancing.html', 'http://xhamster.com/xembed.php?video=1085213', 'random latina', 'privacy test', '2013-11-07 04:12:37', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://www.xnxx.com/video4699350/sexy_ebony_bitch_jada_nacole_gets_fucked', '', 'Sexy ebony bitch Jada Nacole gets fucked', ' ', '2013-11-07 05:57:54', '', 'private'),
('grapplewhore@gmail.com', 'GrapeWhore', 'http://xhamster.com/movies/1249695/ass_twerking_black_teen_is_a_butt_naked_freak_ameman.html', 'http://xhamster.com/xembed.php?video=1249695', 'bomboclaat', ' ', '2013-11-07 06:53:07', '', 'private'),
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=wYlADKGs2rk', 'http://www.youtube.com/embed/wYlADKGs2rk', 'ebulient-denial_', 'this construct is invalid. ', '2013-11-11 04:09:11', '', 'public'),
('tester@gmail.com', 'tester', 'http://www.youtube.com/watch?v=RkTDilC-860', 'http://www.youtube.com/embed/RkTDilC-860', 'Untitled', ' ', '2013-11-11 11:06:06', '', 'public'),
('tester@gmail.com', 'tester', 'http://www.youtube.com/watch?v=wYlADKGs2rk', 'http://www.youtube.com/embed/wYlADKGs2rk', 'Untitled', ' ', '2013-11-11 11:09:55', '', 'public'),
('tester@gmail.com', 'tester', 'http://www.videobash.com/video_show/baby-dancing-to-shakira-17595', 'http://www.videobash.com/embed/baby-dancing-to-shakira-17595', 'babie', 'gooo goo gah gah', '2013-11-11 15:44:42', '', 'public'),
('tester@gmail.com', 'tester', 'http://apple.mmgn.com/lib/Images/Articles/normal/Mac-Tip-3---Insert-the-Apple-Symbol-into-Text-1.jpg', '', 'not grapple', 'this is not a grapple', '2013-11-11 15:45:33', '', 'private'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.youtube.com/', 'http://www.youtube.com/embed/undefined', 'Untitled', ' ', '2013-11-12 15:31:57', '', 'public'),
('grapple@gmail.com', 'GrapeGod', 'http://www.youtube.com/watch?v=mR7PWpIwoYM', 'http://www.youtube.com/embed/mR7PWpIwoYM', 'T.I ft. Kanye West & Eminem - Creatures [Music Video]', ' T.I ft. Kanye West & Eminem - Creatures [Music Video]', '2013-11-13 18:39:28', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.youtube.com/watch?v=GhlRmIkqVaw', 'http://www.youtube.com/embed/GhlRmIkqVaw', 'Code Lyoko Episode 19; Frontier (FULL)', ' Code Lyoko Episode 19; Frontier (FULL)', '2013-11-14 18:09:51', '', 'public'),
('jordanmicahbennett@gmail.com', 'Jordan Micah Bennett', 'http://www.youtube.com/watch?v=PJ8lytdk6bs', 'http://www.youtube.com/embed/PJ8lytdk6bs', 'bundalele', ' ', '2013-11-14 18:11:45', '', 'private'),
('kematimorgan@gmail.com', 'kemthegrey', 'http://www.youtube.com/watch?v=JY9mrKR5SkA', 'http://www.youtube.com/embed/JY9mrKR5SkA', 'Moto GP classic', ' ', '2013-11-27 00:19:01', '', 'public');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
