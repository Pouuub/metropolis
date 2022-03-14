-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 14 mars 2022 à 07:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `metropolisvod`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(11) NOT NULL,
  `nom_acteur` varchar(255) NOT NULL,
  `prenom_acteur` varchar(255) NOT NULL,
  `age_acteur` int(11) NOT NULL,
  `naissance_acteur` date NOT NULL,
  `nationnalite_acteur` varchar(255) NOT NULL,
  `photo_acteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `prenom_acteur`, `age_acteur`, `naissance_acteur`, `nationnalite_acteur`, `photo_acteur`) VALUES
(1, 'Chalamet', 'Timothée', 25, '1995-12-27', 'Français Américain', 'timothee_chalamet'),
(2, 'Coleman', 'Zendaya', 25, '1996-09-01', 'États-unienne', 'zendaya_coleman'),
(3, 'Ferguson', 'Rebecca', 38, '1983-10-19', 'Suédoise', 'rebecca_ferguson'),
(4, 'Momoa', 'Jason', 42, '1979-08-01', 'États-unien', 'jason_momoa'),
(5, 'Isaac', 'Oscar', 42, '1979-03-09', 'Guatémaltèque États-unien', 'oscar_isaac'),
(6, 'Worthington', 'Sam', 45, '1976-08-02', 'Australien', 'sam_worthington'),
(7, 'Saldana', 'Zoe', 43, '1978-06-19', 'États-unienne Dominicaine', 'zoe_saldana'),
(8, 'Lang', 'Stephen', 69, '1952-07-11', 'États-unien', 'stephen_lang'),
(9, 'Gosling', 'Ryan', 41, '1980-11-12', 'Canadien', 'ryan_gosling'),
(10, 'Ford', 'Harrison', 79, '1942-07-13', 'États-unien', 'harrison_ford'),
(11, 'de Armas', 'Ana', 33, '1988-04-30', 'Cubaine Espagnole', 'ana_de_armas'),
(12, 'Bautista', 'David', 53, '1969-01-18', 'États-unien', 'david_bautista'),
(13, 'Leto', 'Jared', 50, '1971-12-26', 'États-unien', 'jared_leto'),
(14, 'DiCaprio', 'Leonardo', 47, '1974-11-11', 'États-unien', 'leonardo_dicaprio'),
(15, 'Winslet', 'Kate', 46, '1975-10-05', 'Britannique', 'kate_winslet'),
(16, 'Page', 'Elliot', 35, '1987-02-21', 'Canadien', 'elliot_page'),
(17, 'Hardy', 'Tom', 44, '1977-09-15', 'Britannique', 'tom_hardy'),
(18, 'Cotillard', 'Marion', 46, '1975-09-30', 'Française', 'marion_cotillard'),
(19, 'McConaughey', 'Matthew', 52, '1969-11-04', 'États-unien', 'matthew-mcconaughey'),
(20, 'Hathaway', 'Anne', 39, '1982-11-12', 'États-unienne', 'anna_hathaway'),
(21, 'Caine', 'Michael', 88, '1933-03-14', 'Britannique', 'michael_caine'),
(22, 'Reeves', 'Keanu', 57, '1964-09-02', 'Canadien', 'keanu_reeves'),
(23, 'Fishburne', 'Laurence', 60, '1961-07-30', 'États-unien', 'laurence_fishburne'),
(24, 'Moss', 'Carrie-Anne', 54, '1967-08-21', 'Canadienne', 'carrie-anne_moss'),
(25, 'Paradis', 'Venessa', 49, '1972-12-22', 'Française', 'venessa_paradis'),
(26, 'Chedid', 'Matthieu', 50, '1971-12-21', 'Français', 'matthieu_chedid'),
(27, 'Taylor-Joy', 'Anya', 25, '1996-04-16', 'États-unienne', 'anya_taylor-joy'),
(28, 'McKenzie', 'Thomasin', 21, '2000-07-26', 'Néo-Zélandaise', 'thomasin_mckenzie');

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`id_genre`, `id_film`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(1, 6),
(3, 6),
(1, 7),
(2, 7),
(1, 8),
(4, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `favorise`
--

CREATE TABLE `favorise` (
  `id_film` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `titre_film` varchar(255) NOT NULL,
  `date_film` int(11) NOT NULL,
  `note_film` int(11) NOT NULL,
  `classification_film` int(11) NOT NULL,
  `duree_film` int(11) NOT NULL,
  `synopsis_film` varchar(2500) NOT NULL,
  `info_film` varchar(2500) NOT NULL,
  `affiche_film` varchar(255) NOT NULL,
  `ba_film` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `titre_film`, `date_film`, `note_film`, `classification_film`, `duree_film`, `synopsis_film`, `info_film`, `affiche_film`, `ba_film`) VALUES
(2, 'Dune', 2021, 97, 13, 155, 'L\'histoire de Paul Atreides, jeune homme aussi doué que brillant, voué à connaître un destin hors du commun qui le dépasse totalement. Car s\'il veut préserver l\'avenir de sa famille et de son peuple, il devra se rendre sur la planète la plus dangereuse de l\'univers – la seule à même de fournir la ressource la plus précieuse au monde, capable de décupler la puissance de l\'humanité. Tandis que des forces maléfiques se disputent le contrôle de cette planète, seuls ceux qui parviennent à dominer leur peur pourront survivre…', 'Dans un futur lointain de l\'humanité, le Duc Leto Atréides reçoit de l’Empereur Shaddam IV le fief de la très profitable et très dangereuse planète désertique Arrakis. Également connue sous le nom de « Dune », cette planète est la seule source de la substance la plus précieuse de l\'Imperium, « l’Épice », une drogue qui prolonge la vie humaine, immunise contre les poisons et procure des facultés mentales surhumaines. L’Épice rend notamment possible la navigation interstellaire, base de toute l\'économie impériale.\r\n\r\nBien que Leto sache que cette opportunité est un piège complexe tendu par ses ennemis, la baronnie Harkonnen qui s\'est enrichie pendant 80 ans grâce à l\'exploitation de l’Épice, il emmène avec lui sa concubine Bene Gesserit, Dame Jessica, son jeune fils et héritier Paul et ses soldats les plus fiables sur Arrakis. Leto prend le contrôle de l\'extraction d’Épice, rendue périlleuse par la présence de vers de sable géants qui attaquent toute source de vibrations. Mais, après une trahison amère, Paul et Jessica arrivent jusqu’aux Fremen, le peuple autochtone d\'Arrakis qui vit dans le désert profond de la planète. Les Fremen sont dans l\'attente du Mahdi, le messie qui suscitera le soulèvement et les libérera de l\'oppression de l\'Imperium.', 'dune.jpeg', 'v=CjVqieIWGjM'),
(3, 'Avatar', 2009, 95, 12, 162, 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l\'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des \" pilotes \" humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l\'ADN humain avec celui des Na\'vi, les autochtones de Pandora.\r\nSous sa forme d\'avatar, Jake peut de nouveau marcher. On lui confie une mission d\'infiltration auprès des Na\'vi, devenus un obstacle trop conséquent à l\'exploitation du précieux minerai. Mais tout va changer lorsque Neytiri, une très belle Na\'vi, sauve la vie de Jake...', 'Avatar est un film de science-fiction américain réalisé par James Cameron, sorti en 2009. Il s\'agit du premier film de la franchise cinématographique Avatar.\r\nL’action se déroule en 21543 sur Pandora, une des lunes de Polyphème, une planète géante gazeuse en orbite autour d\'Alpha Centauri A, le système stellaire le plus proche de la Terre. L’exolune, recouverte d’une jungle luxuriante, est le théâtre du choc entre des humains, venus exploiter un minerai rare susceptible de résoudre la crise énergétique sur Terre, et la population autochtone, les Na’vis, qui vivent en parfaite symbiose avec leur environnement et tentent de se défendre face à l’invasion militarisée.', 'avatar.jpeg', 'v=O1CzgULNRGs'),
(4, 'Blade Runner 2049', 2017, 89, 15, 163, 'En 2049, des humanoïdes issus du génie biologique, appelés réplicants, ont été intégrés dans la société pour assurer la survie de l\'humanité. K, l\'un des plus récents modèles conçus pour obéir, travaille comme blade runner au LAPD. Son travail consiste surtout à pourchasser et éliminer les anciens modèles délinquants. Il mène une vie monotone où son seul plaisir est la compagnie de sa « petite amie » holographique, Joi.', 'Blade Runner 2049 est un film de science-fiction américain réalisé par Denis Villeneuve, sorti en 2017. Il fait suite au film Blade Runner, réalisé par Ridley Scott (producteur de cette suite), sorti en 1982 et adapté du roman Les androïdes rêvent-ils de moutons électriques ? de Philip K. Dick.', 'blade_runner_2049.jpeg', 'v=5qZ2rXccrvw'),
(5, 'Titanic', 1997, 87, 8, 194, 'Southampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le \"Titanic\", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.', 'Titanic est un film dramatique américain écrit, produit et réalisé par James Cameron, sorti en 1997.\r\n\r\nIntégrant à la fois des aspects historiques et fictifs, le film est basé sur le récit du naufrage du RMS Titanic et met en vedette Leonardo DiCaprio et Kate Winslet.', 'titanic.jpeg', 'v=3gK_2XdjOdY'),
(6, 'Inception', 2010, 96, 13, 148, 'Dans un futur proche, les États-Unis ont développé ce qui est appelé le « rêve partagé », une méthode permettant d\'influencer l\'inconscient d\'une victime pendant qu\'elle rêve, donc à partir de son subconscient. Des « extracteurs » s\'immiscent alors dans ce rêve, qu\'ils ont préalablement modelé et qu\'ils peuvent contrôler, afin d\'y voler des informations sensibles stockées dans le subconscient de la cible. C\'est dans cette nouvelle technique que se sont lancés Dominic Cobb et sa femme, Mal. Ensemble, ils ont exploré les possibilités de cette technique et l\'ont améliorée, leur permettant d\'emboîter les rêves les uns dans les autres, accentuant la confusion et donc diminuant la méfiance de la victime.', 'Inception ou Origine au Canada, est un thriller de science-fiction américano-britannique écrit, réalisé et produit par Christopher Nolan, sorti en 2010.', 'inception.jpeg', 'v=CPTIgILtna8'),
(7, 'Interstellar', 2014, 96, 13, 169, 'Alors que la Terre se meurt, une équipe d\'astronautes franchit un trou de ver apparu près de Saturne et conduisant à une autre galaxie, afin d\'explorer un nouveau système stellaire et dans l\'espoir de trouver une planète habitable et y établir une colonie spatiale pour sauver l\'humanité.', 'Interstellar, ou Interstellaire au Québec et au Nouveau-Brunswick, est un film de science-fiction britannico-américain produit, écrit et réalisé par Christopher Nolan, sorti en 2014.', 'interstellar.jpeg', 'v=VaOijhK3CRU'),
(8, 'Matrix', 1999, 96, 13, 136, 'Thomas A. Anderson, un jeune informaticien connu dans le monde du hacking sous le pseudonyme de Neo, est contacté via son ordinateur par ce qu’il pense être un groupe de hackers. Ils lui font découvrir que le monde dans lequel il vit n’est qu’un monde virtuel appelé la Matrice, à l\'intérieur duquel les êtres humains sont gardés inconsciemment sous contrôle.', 'Matrix ou La Matrice au Québec et au Nouveau-Brunswick (The Matrix) est un film de science-fiction de type « cyberfilm » australo-américain écrit et réalisé par les Wachowski et sorti en 1999.', 'matrix.jpeg', 'v=8xx91zoASLY'),
(9, 'Un monstre à Paris', 2011, 95, 6, 82, 'L\'intrigue se déroule à Paris durant la crue de la Seine de 1910. Émile, un timide projectionniste de cinéma, se passionne pour le tournage de films, et est amoureux de sa collaboratrice, Maud, à qui il n\'ose cependant avouer ses sentiments. Émile a pour ami Raoul, un livreur et inventeur exubérant, qui se déplace dans un tacot bardé de bricolages improbables et surnommé Catherine. Raoul a pour amie d\'enfance Lucille, une chanteuse de cabaret qui se produit à « L\'Oiseau rare ». Lucille a du succès et sa tante fait tout pour la pousser dans les bras du préfet de police Victor Maynott, homme riche et puissant, mais dévoré par l\'orgueil et l\'ambition.', 'Un monstre à Paris est un long métrage d\'animation français réalisé par Bibo Bergeron, sorti en France le 12 octobre 2011. C\'est un film d\'animation en images de synthèse utilisant également la technique du cinéma en relief.', 'un_monstre_a_paris.jpeg', 'v=qab4EQDYC-E'),
(10, 'LAST NIGHT IN SOHO', 2021, 97, 16, 117, 'Une créatrice de mode est mystérieusement capable de se rendre dans les années 1960, où elle rencontre un chanteur. Cependant, le luxe qu\'elle découvre n\'est pas tout ce qu\'il semble être, et les rêves du passé commencent à se transformer en quelque chose de bien plus sombre.', 'LAST NIGHT IN SOHO met en scène l’histoire d’une jeune femme passionnée de mode et de design qui parvient mystérieusement à retourner dans les années 60 où elle rencontre son idole, une éblouissante jeune star montante. Mais le Londres des années 60 n’est pas ce qu’il parait, et le temps semble se désagréger entrainant de sombres répercussions.', 'last_night_in_soho.jpeg', 'v=UTklLZF0d9s');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre_nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre_nom`) VALUES
(1, 'SF'),
(2, 'Drame'),
(3, 'Thriller'),
(4, 'Animation');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `id_film` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jouer`
--

INSERT INTO `jouer` (`id_film`, `id_acteur`) VALUES
(2, 1),
(7, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 6),
(3, 7),
(3, 8),
(4, 9),
(4, 10),
(4, 11),
(2, 12),
(4, 12),
(4, 13),
(5, 14),
(6, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(8, 23),
(8, 24),
(9, 25),
(9, 26),
(10, 27),
(10, 28);

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

CREATE TABLE `realiser` (
  `id_realisateur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realiser`
--

INSERT INTO `realiser` (`id_realisateur`, `id_film`) VALUES
(1, 2),
(2, 3),
(1, 4),
(2, 5),
(3, 6),
(3, 7),
(4, 8),
(5, 8),
(6, 9),
(7, 10);

-- --------------------------------------------------------

--
-- Structure de la table `realisteur`
--

CREATE TABLE `realisteur` (
  `id_realisateur` int(11) NOT NULL,
  `nom_realisateur` varchar(255) NOT NULL,
  `prenom_realisateur` varchar(255) NOT NULL,
  `age_realisateur` int(11) NOT NULL,
  `naissance_realisateur` date NOT NULL,
  `nationnalite_realisateur` varchar(255) NOT NULL,
  `photo_realisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisteur`
--

INSERT INTO `realisteur` (`id_realisateur`, `nom_realisateur`, `prenom_realisateur`, `age_realisateur`, `naissance_realisateur`, `nationnalite_realisateur`, `photo_realisateur`) VALUES
(1, 'Villeneuve', 'Denis', 54, '1967-10-03', 'Canadien', 'denis_villeneuve'),
(2, 'Cameron', 'James', 67, '1954-08-16', 'Canadien', 'james_cameron'),
(3, 'Nolan', 'Christopher', 51, '1970-07-30', 'Britannique États-unien', 'christopher_nolan'),
(4, 'Wachowski', 'Lana', 56, '1965-06-21', 'État-unienne', 'lana_wachowski'),
(5, 'Wachowski', 'Lilly', 54, '1967-12-29', 'État-unienne', 'lilly_wachowski'),
(6, 'Bergeron', 'Bibo', 56, '1965-07-14', 'Français', 'bibo_bergeron'),
(7, 'Wright', 'Edgar', 47, '1974-04-18', 'Britannique', 'edgar_wright');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'client'),
(2, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `ip_user` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_user` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `password_user`, `ip_user`, `date_inscription`, `email_user`, `id_role`) VALUES
(3, 'Jordan', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', '::1', '2022-03-08 11:50:34', 'jordan.moulin@laposte.net', 1),
(4, 'Anthony', 'f0393febe8baaa55e32f7be2a7cc180bf34e52137d99e056c817a9c07b8f239a', '::1', '2022-03-08 11:52:20', 'anthony.tourolle08@gmail.com', 1),
(9, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '::1', '2022-03-08 13:50:33', 'admin@admin.com', 2),
(10, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '::1', '2022-03-08 17:34:29', 'admin2@admin.com', 2),
(11, 'Quentin', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', '::1', '2022-03-09 11:56:34', 'a@a.com', 1),
(12, 'abcde', '36bbe50ed96841d10443bcb670d6554f0a34b761be67ec9c4a8ad2c0c44ca42c', '::1', '2022-03-09 20:50:13', 'abcde@abcde.com', 1),
(13, 'aa', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', '::1', '2022-03-09 20:51:11', 'aa@as.com', 1),
(14, 'zadazd', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', '::1', '2022-03-10 15:34:08', 'adda@ada.dza', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`id_genre`,`id_film`),
  ADD KEY `appartient_film0_FK` (`id_film`);

--
-- Index pour la table `favorise`
--
ALTER TABLE `favorise`
  ADD PRIMARY KEY (`id_film`,`id_user`),
  ADD KEY `favorise_users0_FK` (`id_user`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`id_film`,`id_acteur`),
  ADD KEY `jouer_acteur0_FK` (`id_acteur`);

--
-- Index pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD PRIMARY KEY (`id_realisateur`,`id_film`),
  ADD KEY `realiser_film0_FK` (`id_film`);

--
-- Index pour la table `realisteur`
--
ALTER TABLE `realisteur`
  ADD PRIMARY KEY (`id_realisateur`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_role_FK` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `realisteur`
--
ALTER TABLE `realisteur`
  MODIFY `id_realisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `appartient_genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Contraintes pour la table `favorise`
--
ALTER TABLE `favorise`
  ADD CONSTRAINT `favorise_film_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `favorise_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `jouer_acteur0_FK` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `jouer_film_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `realiser_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `realiser_realisteur_FK` FOREIGN KEY (`id_realisateur`) REFERENCES `realisteur` (`id_realisateur`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);