CREATE TABLE `eleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(15) DEFAULT NULL,
  `prenom` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `description` text,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
