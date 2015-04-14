-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 14 Avril 2015 à 15:32
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bips`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contenu` longtext CHARACTER SET latin1,
  `idpage` int(11) NOT NULL,
  PRIMARY KEY (`idarticle`,`idpage`),
  KEY `idpage` (`idpage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idarticle`, `date`, `titre`, `contenu`, `idpage`) VALUES
(1, '2015-04-03 11:59:19', 'Article de test', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed molestie enim. Donec fermentum nisl a condimentum venenatis. Phasellus tellus magna, ultrices id fermentum id, condimentum vel diam. Aliquam fringilla ante elit, ac auctor quam venenatis et. Vestibulum auctor velit sit amet nulla eleifend, non porta augue eleifend. Vivamus vehicula id neque id faucibus. Sed eleifend id justo varius rutrum. Aliquam sodales ipsum ac ligula scelerisque venenatis. Proin venenatis felis elit, vel congue ipsum iaculis eu.\r\n\r\nMauris id maximus tellus. Nulla venenatis faucibus nibh facilisis laoreet. Donec vestibulum, nisl ut elementum tristique, arcu quam commodo purus, nec facilisis libero nisi convallis neque. Nunc mattis quis nisl et iaculis. Nulla congue nisi odio, a malesuada turpis porta sed. Ut eleifend pulvinar fermentum. Nam et nunc sed massa varius vestibulum vel eget quam. Vestibulum aliquet justo nec augue porttitor, a dignissim nisl gravida.\r\n\r\nNunc aliquet sollicitudin erat, id ultrices massa lacinia sit amet. Duis convallis, nunc quis suscipit dignissim, purus ipsum euismod est, et malesuada dolor nunc non magna. Donec mollis lectus eu sapien viverra, vel congue ipsum dapibus. Ut ultricies mattis condimentum. Morbi in mi mi. Vivamus consectetur vestibulum sapien. Aenean vel nisi quis enim mollis eleifend. Sed convallis enim ex, id laoreet mi tempor in. ', 1),
(1, '2015-04-07 16:17:34', 'Présentation de l''association', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis diam arcu, scelerisque ac urna vel, sagittis pulvinar velit. In at justo a tellus elementum maximus a ut risus. Aenean bibendum congue turpis, in fermentum ipsum sodales id. Quisque fringilla metus ut sem ultricies, in dictum nibh suscipit. Nulla vel orci dignissim enim blandit viverra sit amet vitae nunc. Proin dapibus quam non orci luctus, ultricies malesuada ex sollicitudin. Donec a lorem malesuada, vestibulum turpis sed, pulvinar lacus. Maecenas scelerisque, nulla sed eleifend accumsan, arcu purus semper leo, quis dignissim elit ante ut est. Morbi finibus sollicitudin augue, nec pulvinar libero ullamcorper eget.<br/>\r\nQuisque aliquam augue ipsum, ut aliquam turpis vehicula interdum. Pellentesque at ex at arcu ullamcorper gravida quis eget dolor. Cras pretium placerat tellus feugiat fringilla. Mauris eu lacus ut velit scelerisque auctor sed ac est. Duis lobortis augue augue, luctus porta ipsum pharetra eleifend. Aenean rutrum enim vitae semper feugiat. Suspendisse eu ex pellentesque, faucibus turpis hendrerit, eleifend elit. Nulla scelerisque pellentesque lobortis.<br/>\r\nCurabitur id tellus eget sem ullamcorper commodo sed auctor nisi. Etiam nec bibendum erat. Proin odio tellus, pharetra eget arcu eget, aliquet blandit turpis. Aenean libero nulla, finibus et ipsum consequat, dictum feugiat ex. Nullam ac dolor magna. Etiam eget fermentum mi. Vestibulum fringilla, magna id vulputate maximus, ipsum nunc tincidunt nunc, vel condimentum risus nulla ut tellus. Etiam pellentesque non dolor at commodo. Vestibulum a scelerisque urna. Donec non eros risus. Aenean sit amet lorem ut quam consectetur viverra vitae volutpat quam. Maecenas gravida tristique sapien sit amet dapibus. Mauris dui lorem, hendrerit eu ullamcorper eu, elementum nec quam. Nulla facilisi. Integer sit amet gravida urna.<br/>\r\nFusce pulvinar non neque et ultricies. Duis ut eleifend metus. In commodo neque sit amet tellus sodales fringilla. Duis quis cursus nisi. Etiam efficitur felis sed facilisis tincidunt. Nullam quis diam elementum, molestie eros eget, fringilla eros. Aliquam erat volutpat. Cras eleifend lorem eu fermentum consequat. Nullam quis ex elit. Fusce hendrerit tincidunt purus, id viverra turpis. In hac habitasse platea dictumst. Nullam lobortis, sapien nec blandit luctus, nisl lorem ultrices tortor, ac sodales sapien quam eget risus. Etiam et sem vulputate, ultricies sapien vitae, pretium diam. Integer sollicitudin accumsan metus, id ultricies purus aliquet id. Morbi rutrum, urna vitae efficitur pellentesque, sapien orci consequat libero, sed interdum odio urna a augue. Nullam porta, lorem a egestas commodo, massa tortor hendrerit massa, id fermentum ligula est ac sem.<br/>\r\nNulla vitae viverra nulla. Phasellus pharetra orci viverra velit auctor porta. Morbi mollis sem nec purus eleifend, eget viverra purus bibendum. Vestibulum fringilla ante at porttitor elementum. Fusce maximus suscipit est vel varius. Mauris arcu purus, sodales in augue in, porta tempor erat. Nunc tempus risus a nulla venenatis pretium. Morbi nec nibh et metus tristique vehicula non eget dolor. Duis mattis eros tellus, sed malesuada eros maximus eget. Suspendisse convallis pulvinar convallis. Maecenas rhoncus sollicitudin mi, ac auctor ante vulputate quis. Integer convallis neque in placerat elementum. Morbi eu ullamcorper erat, et consequat dui. ', 2),
(1, '2015-04-07 16:19:15', 'Les clubs de l''école', 'Ici on présente les clubs, c''est trop bien, petit descriptif des clubs, héhé.<br/>\r\nBon voilà quoi.....', 3),
(1, '2015-04-07 16:50:17', 'Casino', 'Popsgames organise un Casino.\r\nVenez nombreux, ça va être cool', 5),
(1, '2015-04-07 16:57:11', 'Les vaches devenues folles', 'C''est en effet aujourd''hui le 7 avril que notre mascotte Buffalo a craqué, marre du froid et de la pluie il a commencé, photos à l''appuie, à danser le limousin, seul lors d''un amphi de peip2.', 6),
(1, '2015-04-14 13:17:40', 'Présentation du BDS', 'Le BDS est le club des sports de polytech.<br/>\r\nIls font pleins de trucs cools.', 7),
(1, '2015-04-14 13:17:40', 'Présentation du CAPPS', 'Club événementiel de l''école.<br/>\r\nUne soirée ou un week-end ? C''est eux qu''il faut voir.', 8),
(1, '2015-04-14 13:20:17', 'Présentation de cinefips', 'Cinefips est le club photos et vidéos de l''école.<br/>\r\nIls font pas grand chose mais on sait qu''ils sont là.', 9),
(1, '2015-04-14 13:20:17', 'Présentaion du Club Actu', 'Le club actu c''est un peu comme le journal de Claire Chazal mais en moins bien.<br/>\r\nDébats et orateurs d''or.', 10),
(1, '2015-04-14 13:23:30', 'Présentaion du club cohésion', 'Le club cohésion est le club qui organise le parrainage et le séminaire de cohésion.<br/>\r\nVous avez trouvé les événements cools ? Rejoignez les vite.', 11),
(1, '2015-04-14 13:23:30', 'Présentation du journal', 'Le journal c''est le club qui est décédé.', 12),
(1, '2015-04-14 13:25:41', 'Présentaion de la KFet', 'La Kfet c''est la où tu te nourriras le midi, y''a de la bonne ambiance et un babyfoot.<br/>\r\nQue demander de plus ?', 13),
(1, '2015-04-14 13:25:41', 'Présentation des pompoms de Paris-Sud', 'Elles sont belles, elles sont bonnes, ce sont nos: POMPOMS', 14),
(1, '2015-04-14 13:26:58', 'Présentation de Popsgames', 'Le meilleur club de l''école, tout simplement.', 15),
(1, '2015-04-14 13:26:58', 'Présentation du SPIPS', 'Le SPIPS c''est quoi ?', 16),
(1, '2015-04-14 13:27:19', 'Présentation de zikifips', 'Le club de musique de l''école.', 17),
(2, '2015-04-03 12:37:07', 'Article de test n°2', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec quam dictum, faucibus nibh lobortis, pulvinar odio. Morbi fringilla velit eget aliquet aliquet. Duis rhoncus lorem nisl, sit amet sagittis erat rhoncus at. Donec id enim nec ipsum dictum euismod eget quis turpis. Etiam nibh ante, pellentesque a neque et, pulvinar posuere ante. Nullam aliquam nibh in lectus iaculis iaculis. Vivamus aliquet non dui quis viverra. In eget turpis ultricies, rutrum neque id, lacinia felis. Mauris massa arcu, tincidunt vitae erat vel, hendrerit ultrices justo. Aliquam vitae fermentum risus. Nulla at nulla sagittis, pulvinar ante molestie, finibus mauris. Curabitur non felis tincidunt, auctor nisl ac, accumsan tortor. Nam tincidunt quis ipsum at commodo. Suspendisse potenti. Nunc dictum lacinia tempus.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin tincidunt luctus felis eu tristique. Duis a nunc mattis felis semper varius eget suscipit nibh. Nullam vulputate turpis sapien, sit amet ullamcorper est vestibulum ut. Pellentesque sit amet metus tempus, laoreet ipsum nec, consectetur purus. Nulla commodo ipsum a lectus placerat, eget tristique quam posuere. Sed ornare felis eget nisl cursus, at interdum mauris luctus. Fusce vel ex orci. Mauris ut magna eros. Fusce sed eros ut orci lobortis finibus. Sed et orci libero. Donec diam neque, viverra vitae venenatis cursus, bibendum vitae dolor. Morbi et sem scelerisque dolor placerat eleifend.\r\n\r\nSed vitae felis at tortor convallis pellentesque tempor eget nisi. Etiam blandit vel dolor et pellentesque. Proin vehicula felis eget nisl rhoncus ultrices. Morbi mollis mattis lectus ac egestas. Vivamus tempor scelerisque faucibus. Nulla semper purus vel nulla ultrices tempus. Ut non euismod quam. Aenean molestie molestie odio. Nam fringilla sapien erat, sit amet maximus libero dapibus et.\r\n\r\nProin elementum dolor sed commodo accumsan. In sed dui lacus. Vivamus in ex tempus, facilisis dui eu, tempus velit. Suspendisse volutpat elementum sapien, sed placerat nulla tempus sed. Proin ex nulla, fermentum eu magna et, ornare scelerisque tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce euismod placerat condimentum. Quisque vitae magna sit amet nisl placerat porta sagittis eget magna. Donec in nibh mauris.\r\n\r\nSed leo enim, tempor in est dictum, suscipit elementum nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eget commodo tortor. Cras sodales libero eu justo elementum lobortis. Curabitur mauris enim, mattis a sollicitudin eu, euismod vel massa. Pellentesque ut dolor non dolor tincidunt congue. Pellentesque nec tellus in leo rutrum porta. Vivamus lectus turpis, scelerisque non condimentum vitae, blandit quis dui. Duis dapibus turpis at purus maximus, a porttitor metus fermentum. ', 1),
(2, '2015-04-03 12:26:57', 'Le COP', 'Le BDS s''associe aux autres écoles polytech et vous envoie au COP.\r\nAlcool, sport et soleil seront présents.', 5),
(2, '2015-04-06 23:00:00', 'Les infos ont perdus le défi', 'Hier soir, un match infos contre matériaux a eu lieu sur le jeu League of Legend de Riot. Les infos étaient confiants, mais devant la décadence de leur équipe ils n''ont rien pu faire.<br/>\r\nLes matéiriaux, fiers de leur victoire ont décidé ça en ridiculisant de pauvres peip1 au babyfoot.', 6);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `idpage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`idpage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`idpage`, `nom`) VALUES
(1, 'index'),
(2, 'bips'),
(3, 'clubs'),
(4, 'boutique'),
(5, 'events'),
(6, 'journal'),
(7, 'bds'),
(8, 'capps'),
(9, 'cinefips'),
(10, 'club actu'),
(11, 'cohesion'),
(12, 'journal'),
(13, 'kfet'),
(14, 'pompom'),
(15, 'popsgames'),
(16, 'spips'),
(17, 'zikifips');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idpage`) REFERENCES `page` (`idpage`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
