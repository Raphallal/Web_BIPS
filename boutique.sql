--
-- Structure de la table `boutique`
--

CREATE TABLE IF NOT EXISTS `boutique` (
  `idproduit` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titre` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prixadherent` float(4,2) NOT NULL,
  `prixnonadherent` float(4,2) NOT NULL,
  `envente` tinyint(1) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `boutique`
--

INSERT INTO `boutique` (`idproduit`, `date`, `titre`, `description`, `prixadherent`, `prixnonadherent`, `envente`, `imagepath`) VALUES
(1, '2015-05-01 16:33:36', 'String Polytech', 'Un magnifique string aux couleurs de l''école pour les plus dépravés d''entre vous', 17.00, 20.00, 1, 'images/string.jpg'),
(2, '2015-05-01 16:33:44', 'L''éléphant de polytech', 'Un string éléphant de la plus haute qualité pakistanaise, on peut voir que l''arme est belle est bien', 17.00, 20.00, 1, 'images/string.jpg'),
(3, '2015-05-01 16:33:46', 'String Polytech', 'Un magnifique string aux couleurs de l''école pour les plus dépravés d''entre vous', 17.00, 20.00, 1, 'images/string.jpg'),
(4, '2015-05-01 16:33:48', 'L''éléphant de polytech', 'Un string éléphant de la plus haute qualité pakistanaise, on peut voir que l''arme est belle est bien', 17.00, 20.00, 1, 'images/string.jpg'),
(5, '2015-05-01 16:33:49', 'String Polytech', 'Un magnifique string aux couleurs de l''école pour les plus dépravés d''entre vous', 17.00, 20.00, 1, 'images/string.jpg'),
(6, '2015-05-01 16:33:51', 'L''éléphant de polytech', 'Un string éléphant de la plus haute qualité pakistanaise, on peut voir que l''arme est belle est bien', 17.00, 20.00, 1, 'images/string.jpg'),
(7, '2015-05-01 16:33:52', 'String Polytech', 'Un magnifique string aux couleurs de l''école pour les plus dépravés d''entre vous', 17.00, 20.00, 1, 'images/string.jpg');

-- --------------------------------------------------------
