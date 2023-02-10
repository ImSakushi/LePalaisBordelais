-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 10 fév. 2023 à 23:46
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `BLOGART23`
--

-- --------------------------------------------------------

--
-- Structure de la table `ARTICLE`
--

CREATE TABLE `ARTICLE` (
  `numArt` int(8) NOT NULL,
  `dtCreArt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ARTICLE`
--

INSERT INTO `ARTICLE` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(1, '2022-12-08 23:00:00', 'Top 10 des plus grands chefs de Bordeaux', 'Bordeaux, la ville du vin, est également connue pour ses restaurants de haute qualité et ses talents culinaires. ', 'La cuisine de Bordeaux est une fusion de traditions culinaires françaises et de saveurs locales.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Des chefs très forts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Un talent inné', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Pour le mot de la fin : Bruno Monnier, président de Culturespace, affirme que ses équipes et lui ont travaillé d’arrache pied pour imaginer et concevoir la nouvelle base sous marine.', 'image.jpg', 2),
(3, '2022-12-21 23:00:00', 'Le Quatrième Mur, un restaurant pour les grands et les petits', 'Le fameux restaurant de Etchebest a enfin ouvert. Sera-t-il à la hauteur des attentes.', 'En arrivant, son crâne luisant éclate notre vue. Ce qui n\'enlève pas le mérite de ce resto.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Un plat à la hauteur des attentes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Un final époustouflant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. ', 'le-quatrieme-mur-brasserie.jpg', 3),
(4, '2023-02-09 23:00:00', 'Préparer des huîtres d\'Arcachon comme un pro !', 'Si vous aimez les huîtres fraîches et que vous voulez apprendre à les préparer comme un pro, vous êtes au bon endroit. ', 'Les huîtres d\'Arcachon sont réputées pour leur goût unique et délicieux.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Non odio euismod lacinia at. Nibh sed pulvinar proin gravida. Cursus sit amet dictum sit amet.', 'La préparation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Non odio euismod lacinia at. Nibh sed pulvinar proin gravida. Cursus sit amet dictum sit amet.', 'La dégustation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Non odio euismod lacinia at. Nibh sed pulvinar proin gravida. Cursus sit amet dictum sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing.', 'huitres-du-bassin-d-arcachon.png', 3),
(5, '2023-01-26 23:00:00', 'L\'histoire de la gastronomie bordelaise au dernier siècle', 'La gastronomie bordelaise est une des plus riches et diversifiées de France, avec des influences du terroir bordelais et de l\'histoire de la région.', 'De la cuisine traditionnelle de la campagne à la cuisine raffinée de la ville.', 'CET ARTICLE EST UN BONUS ET NE COMPTE PAS ----\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper.', 'L\'influence de la cuisine du sud-ouest de la France', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. Ultrices mi tempus imperdiet nulla', 'Les plats typiques de la cuisine bordelaise', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Euismod lacinia at quis risus sed vulputate odio ut. Donec pretium vulputate sapien nec sagittis. Feugiat in ante metus dictum at tempor commodo ullamcorper. Mi in nulla posuere sollicitudin aliquam ultrices. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat id. Ipsum nunc aliquet bibendum enim. Sit amet consectetur adipiscing elit ut aliquam purus. Ultrices mi tempus imperdiet nulla malesuada ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh venenatis cras sed felis eget velit aliquet. Gravida neque convallis a cras semper auctor neque. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. ', '24.jpg', 3),
(25, '2023-02-01 23:00:00', 'Grégor, un Allemand autant amoureux de Bordeaux que de sa femme', 'Grégor, 56 ans, est tombé amoureux de bordeaux au point d\'ouvrir une boutique sur les spécialités de la ville.', 'Si Grégor est venu à Bordeaux, c\'est pour une bonne raison : il est tombé amoureux d\'une française.', 'On rêve tous de rencontrer une ou un étranger et de tout plaquer pour lui non ? C’est ce que Grégor a eu la chance de vivre. En 2009, il a alors décidé de quitter son pays natal, l’Allemagne, pour emménager en France avec la femme de sa vie. Une fois arrivé, il est tombé sous le charme de notre magnifique ville qu’est Bordeaux. De ses ruelles et ses avenues, de son architecture, de sa beauté, de sa culture et son histoire, mais surtout de sa gastronomie et de ses spécialités. Quand on parle avec lui, on se rend compte tout de suite qu’il aime la ville où il habite. C’est pour ça qu’il y habite encore aujourd’hui. Malheureusement, lorsqu’on arrive dans un nouveau pays, on fait face à un problème majeur : trouver un travail. Après deux ans à y avoir réfléchi, il se lance dans un nouveau projet, créer une boutique pour que tout le monde puisse goûter les spécialités bordelaises. Parce que oui, c’est ça qui le rend heureux, pouvoir faire en sorte que tous ceux qui viennent puissent repartir avec un souvenir à déguster et à le faire découvrir à leurs amis. Même moi, il m\'a fait découvrir des spécialités que je n’avais encore jamais mangées.', 'Un projet rien qu’à lui', 'C’est en 2012 que Bordeaux Shop ouvre enfin. Sa petite boutique dans la Bouffard entre l\'hôtel de ville et la place Gambetta accueille enfin ses premiers clients. Pendant cinq ans, c\'est le rêve pour lui, son projet fonctionne à merveille. Des particuliers qui viennent acheter des coffrets avec leurs spécialités préférées, des bouteilles de vin et des petits mets sucrés. Mais surtout de plus en plus de professionnels, des hôtels, des châteaux, des supermarchés, des tabacs, des entreprises privées, tous présents pour ses produits ! Et je peux vous dire qu’ils ont l\'air bons ses coffrets, j’ai failli en acheter. Tout son travail est enfin récompensé, et je trouve qu’il le mérite bien après deux années entières à travailler sans savoir si son projet va fonctionner. Fin 2017, sa motivation a baissé et le travail s\'accumule, Grégor décide de fermer sa boutique physique pour se concentrer sur les ventes professionnelles et la boutique en ligne. Les ventes dans la boutique ne représentant que 5% du chiffre d\'affaires, ce n’est plus assez rentable pour lui vu le temps qu’il y passe. Peut-être que plus tard, si quelqu’un d’assez motivé pour gérer une boutique physique se présente à lui, Bordeaux Shop reviendra dans nos rues, peut-être vous, qui sait ?', 'La gastronomie de Bordeaux vu par un Allemand', 'Depuis maintenant 14 ans, qu’il vit dans la région bordelaise, il a eu la chance de goûter de nombreuses spécialités du coin. Vous vous demandez sûrement quelle est sa spécialité préférée ? C’est le vin ! Et oui, Grégor est un bon vivant. Avoir sa bouteille de vin rouge avec son entrecôte pleine de gros sel ou ses huîtres est devenu obligatoire pour lui. Et sur ce point-là, je suis complètement d’accord avec lui, un petit verre de vin pour accompagner son repas, il n\'y a rien de meilleur. C’est notamment pour cela qu’il travaille avec des châteaux, cela lui permet de découvrir et d’en apprendre toujours plus sur les différents vins bordelais. Il est plutôt malin, je vous l’accorde. Pour lui, la gastronomie bordelaise et du Sud-Ouest, c’est le canard, l\'entrecôte, les crustacés, les huîtres, mais surtout des produits frais. C’est grâce à tous ces aliments que Grégor est devenu une référence en termes de spécialités gastronomiques dans la ville et qu’il a pu ouvrir sa propre boutique. Pour qu’aujourd’hui, il puisse vivre grâce à son propre projet et sa propre affaire. Et je peux vous dire que les bouchons de Bordeaux qu’il vend sont vraiment délicieux.', 'Grégor est vraiment quelqu’un de super avec toujours le sourire aux lèvres, en plus on sent qu’il aime ce qu’il fait et qu’il a travaillé dur pour en arriver jusque-là. Alors la prochaine fois que vous achetez un coffret-cadeaux avec du vin ou des mets gastronomiques, peu importe ou dans la ville, dites-vous que c’est surement grâce à Grégor !', 'cannele.webp', 2),
(26, '2023-02-10 10:34:27', 'Bordeaux S.O Good, le festival qui m’a marqué à jamais.', 'Un festival qui combine bonheur et saveur, Bordeaux S.O Good à l’honneur.', 'Combiner sourires et souvenirs pour que tout le monde puisse en jouir ! S.O Go l\'a bien compris.', 'Ce salon m’a fait re-découvrir une toute nouvelle culture gastronomique saupoudrée d’un art de vivre bien typique de cette région Sud-Ouest qui renferme mes souvenirs depuis ma plus tendre enfance. C’est pour moi un réel mariage entre l\'art et la culture avec une dimension sociétale de la gastronomie. L’année où j\'y fus, on était au total plus de 60 000 passionnés par le monde culinaire à participer à cet événement. Ce jour-là, nous étions de tous les âges et de tous les groupes, des familles aux amis en passant par les jeunes et les moins jeunes. Tous émerveillés par les 18 banquets proposés par les 120 producteurs, tous réunis pour célébrer le riche patrimoine gastronomique de Bordeaux. J’ai même pu y croiser Richard Coconnier, grâce à qui l\'événement existe, un homme aussi drôle que sympathique. Il était le premier, assiette en main, à vouloir se régaler. \r\nJe pense vraiment que c’est un événement incontournable pour tous les curieux des cuisines de la région comme vous et moi, et cela, tout en passant un moment agréable et festif en bonne compagnie. \r\n', 'Une expérience à un air d’Italie ', 'En novembre 2018, j’ai eu la chance d\'assister à la dernière édition en date du festival Bordeaux S.O Good, qui mettait en valeur la gastronomie et les produits italiens. La soirée d\'ouverture, intitulée Dolce Vita (nom plein de sobriété), était présentée par le célèbre chef Pierre Gagnaire et trois autres chefs étoilés italiens. Cet événement se déroulait au Palais de la Bourse de Bordeaux. Nous étions près de 750 personnes présentes. Dans une ambiance de terrasse, pleine de soleil, des Fiat 500 et des vespas colorées décoraient le palais. Nous avons été accueillis par des tables remplies de plats et d\'aliments italiens, comme si l’air méditerranéen avait voyagé jusqu\'à Bordeaux. J\'ai pu déguster des olives fraîches directement importées d\'Italie, ainsi qu\'un limoncello fait maison, une liqueur de citron surprenante que je ne connaissais pas. Ayant moi-même visité l\'Italie l\'année précédente, cette soirée était une véritable expérience de voyage culinaire, me faisant sentir comme si j\'étais de retour dans ce pays rempli de soleil et de saveurs. En ressortant de cette soirée, j\'ai été impressionné par la qualité et la variété des produits italiens présentés, ainsi que par l\'ambiance chaleureuse et ensoleillée créée pour l\'occasion. C\'était une expérience gastronomique inoubliable que je recommande à tous les amateurs de cuisine et de voyage culinaire.', 'Comme un retour en arrière ', 'Enfant, j’avais une passion pour la cuisine, j’aimais comment de simples plats, faits avec amour, me transportaient, me faisaient voyager dans le monde entier. Ma famille n’a jamais eu assez d’argent pour pouvoir voyager, mon père était cuisinier et rentrait tard la nuit, rare étaient les jours où il me souhaitait une bonne nuit. Mais les rares jours où j\'étais debout, il trouvait toujours un moyen de me ramener un plat qu’il avait cuisiné dans la cuisine du restaurant. Mon tout premier souvenir d’un de ses plats était de simples pâtes à la bolognaise, un plat si simple que ma mère faisait très souvent, et pourtant, ce plat dégageait autre chose, il dégageait un air de voyage, je le mangeais et tous mes problèmes s’envolaient. Durant cette soirée de novembre 2018, ce sentiment m\'est revenu, j’étais redevenu un enfant de 10 ans, seul avec mon père dans la cuisine, savourant ce plat d’un autre pays. Cet événement m’a redonné cette passion culinaire perdue, à peine l’événement fini, j’avais déjà hâte de voir le sujet du prochain, voir dans quelle partie du monde ces chefs allaient me faire visiter. ', 'Malheureusement, depuis 2020 en raison de la pandémie, S.O Good c’est fini, et c’est à mon plus grand regret. Je rêve de son retour et de pouvoir de nouveau explorer les saveurs du monde entier à travers ce festival, pas vous ? Je souhaite seulement qu’il revienne pour que vous puissiez vivre ce que j’ai vécu. ', 'bbbb.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `numCom` int(10) NOT NULL,
  `dtCreCom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int(8) NOT NULL,
  `numMemb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `COMMENT`
--

INSERT INTO `COMMENT` (`numCom`, `dtCreCom`, `libCom`, `attModOK`, `dtModCom`, `notifComKOAff`, `delLogiq`, `numArt`, `numMemb`) VALUES
(62, '2023-02-10 09:41:24', 'grave !', 0, '0000-00-00 00:00:00', NULL, 0, 5, 7),
(66, '2023-02-10 10:23:42', 'J\'adore Grégor, il a l\'air super attachant !', 0, '0000-00-00 00:00:00', NULL, 0, 25, 10),
(67, '2023-02-10 10:24:04', 'ça m\'a donné envie de cannelés tout ça', 0, '0000-00-00 00:00:00', NULL, 0, 25, 4),
(68, '2023-02-10 10:25:07', 'Mais nan ?! C\'est méga intéressant', 0, '0000-00-00 00:00:00', NULL, 0, 5, 4),
(69, '2023-02-10 12:34:05', 'Super article !', 0, '0000-00-00 00:00:00', NULL, 0, 26, 10),
(70, '2023-02-10 12:34:35', 'J\'adore ce festival aussi ! (ps: hier c’était mon anniv loll)', 0, '0000-00-00 00:00:00', NULL, 0, 26, 11),
(71, '2023-02-10 13:09:50', 'Super article !', 0, '0000-00-00 00:00:00', NULL, 0, 25, 12),
(72, '2023-02-10 20:46:10', 'Je veux que ce festival revienne svpp', 0, '0000-00-00 00:00:00', NULL, 0, 26, 9),
(73, '2023-02-10 23:22:10', 'Encore à cause du COVID. ça dégoute.', 0, '0000-00-00 00:00:00', NULL, 0, 26, 14),
(74, '2023-02-10 23:24:55', 'ça mérite un 20/20 !', 0, '0000-00-00 00:00:00', NULL, 0, 25, 12);

-- --------------------------------------------------------

--
-- Structure de la table `LIKEART`
--

CREATE TABLE `LIKEART` (
  `numMemb` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeA` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `LIKEART`
--

INSERT INTO `LIKEART` (`numMemb`, `numArt`, `likeA`) VALUES
(1, 1, 1),
(2, 1, 0),
(2, 3, 1),
(3, 1, 1),
(3, 3, 1),
(4, 5, 1),
(7, 25, 1),
(7, 26, 1),
(9, 26, 1),
(11, 26, 1),
(12, 25, 1),
(14, 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `MEMBRE`
--

CREATE TABLE `MEMBRE` (
  `numMemb` int(10) NOT NULL,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MEMBRE`
--

INSERT INTO `MEMBRE` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(1, 'Phil', 'Collins', 'Phil09', '$2y$10$ztqEgx74cEdsDyUVIxNHGed5ew0crXI6jxmOZkBhlFAeFyMb6tjY2', 'Phil09@gmail.com', '2023-02-09 08:57:36', 1),
(2, 'Julie', 'La Rousse', 'juju1989', '$2y$10$AQ7RN/XJ2PrlS9Qmcnn.3.LCULuvYd94ZBx19AO0rMwZzzzRwj5H2', 'julie@gmail.com', '2023-02-09 08:57:11', 2),
(3, 'David', 'Bowie', 'dav33B', '$2y$10$MCs5BXX1kWtxsBmJiFt.Ru3TnNCspUFVy0lJV1Vy4AFRO0hBvheE6', 'david.bowie@gmail.com', '2023-02-08 23:00:00', 2),
(4, 'Pablo', 'CASOLA', 'Sakushi', '$2y$10$TSTtApnqpaJgilBmCc6Y1ugmKFirl493zytYh4OztkoxlaUPI0E8y', 'casola.pablo971@gmail.com', '2023-02-09 08:56:32', 3),
(6, 'Pablo', 'Julien', 'Gwendal2', '$2y$10$vhAnOmbU04.SoYxQ/KFiv.76/yk70aoZlecoN.fKeutC9F.g08Oyi', 'gwen@gmail.com', '2023-02-09 08:55:48', 3),
(7, 'admin', 'admin', 'admin', '$2y$10$hlzVZGBLLKAwP.BJawqo6.Gd26MkbosPpKq3c0Dz0lslAixX43x5G', 'admin@admin.com', '2023-02-09 08:55:25', 1),
(9, 'Julien', 'PETITBOIS', 'Daichi', '$2y$10$MllbT9UgRIoUmB9/UduccOl.VI02oqa5teMy.Awg94ss9.lM37mlC', 'julienpetitbois@gmail.com', '2023-02-08 23:00:00', 3),
(10, 'Carlos', 'GONCALVES', 'CarlosGONCALVO', '$2y$10$ESFogyX4/1M2y0Bl/fZtM.JmvWoAUTc7hMdmlWmnjyk99WLHrH/12', 'carlosgoncalves@gmail.com', '2023-02-08 23:00:00', 3),
(11, 'Jojo', 'StYgnan', 'JosephineSTYGNAN', '$2y$10$7gTp7EtQTMJqRNPgEr..ee5LoMJnyUI94dJY8I0EVgNrWXpbigZsi', 'josephine@gmail.com', '2023-02-10 12:29:32', 3),
(12, 'Martine', 'BORNERIE', 'MartineBORNERIE', '$2y$10$wnPwGSH8YhDJwkBhKeMB4O35FVSRZ1U.COtN/G3APl.V9ip/zt/OK', 'martine@gmail.com', '2023-02-09 23:00:00', 1),
(13, 'Astrid', 'CHAPRON', 'AstridCHAPRON', '$2y$10$IIW8DZHHC339o90WBQdJ6OiCF3zfg4.L4y8e5dVExGB4ufMues9Sm', 'astrid@gmail.com', '2023-02-10 23:19:18', 3),
(14, 'Lucas', 'HOTTIN', 'SeanR', '$2y$10$l92Sp8YhJlnZdycMPb2pge3cQCdZ8b/yHs4Cqi1sIJ3nd2EWGXU5m', 'lucashottin@gmail.com', '2023-02-10 23:21:30', 3);

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLE`
--

CREATE TABLE `MOTCLE` (
  `numMotCle` int(8) NOT NULL,
  `libMotCle` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MOTCLE`
--

INSERT INTO `MOTCLE` (`numMotCle`, `libMotCle`) VALUES
(1, 'Bordeaux'),
(2, 'Gastronomie'),
(3, 'Festival culinaire'),
(4, 'Histoire'),
(5, 'Recette'),
(6, 'Restaurant'),
(7, 'Spécialité'),
(8, 'Amour'),
(9, 'Boutique'),
(10, 'Bouffe');

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLEARTICLE`
--

CREATE TABLE `MOTCLEARTICLE` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MOTCLEARTICLE`
--

INSERT INTO `MOTCLEARTICLE` (`numArt`, `numMotCle`) VALUES
(1, 1),
(1, 3),
(1, 5),
(1, 6),
(3, 1),
(3, 2),
(3, 6),
(3, 7),
(4, 1),
(4, 2),
(4, 5),
(4, 7),
(5, 1),
(5, 2),
(5, 4),
(5, 7),
(25, 1),
(25, 2),
(25, 7),
(25, 8),
(25, 9),
(26, 1),
(26, 2),
(26, 3),
(26, 4),
(26, 7);

-- --------------------------------------------------------

--
-- Structure de la table `STATUT`
--

CREATE TABLE `STATUT` (
  `numStat` int(5) NOT NULL,
  `libStat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `STATUT`
--

INSERT INTO `STATUT` (`numStat`, `libStat`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `THEMATIQUE`
--

CREATE TABLE `THEMATIQUE` (
  `numThem` int(10) NOT NULL,
  `libThem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `THEMATIQUE`
--

INSERT INTO `THEMATIQUE` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé'),
(3, 'Le mouvement émergeant'),
(4, 'L\'insolite / le clin d\'oeil');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`numArt`),
  ADD KEY `ARTICLE_FK` (`numArt`),
  ADD KEY `FK_ASSOCIATION_1` (`numThem`);

--
-- Index pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`numCom`),
  ADD KEY `COMMENT_FK` (`numCom`),
  ADD KEY `FK_ASSOCIATION_2` (`numArt`),
  ADD KEY `FK_ASSOCIATION_3` (`numMemb`);

--
-- Index pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD PRIMARY KEY (`numMemb`,`numArt`),
  ADD KEY `LIKEART_FK` (`numMemb`,`numArt`),
  ADD KEY `FK_LIKEART1` (`numArt`);

--
-- Index pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD PRIMARY KEY (`numMemb`),
  ADD KEY `MEMBRE_FK` (`numMemb`),
  ADD KEY `FK_ASSOCIATION_4` (`numStat`);

--
-- Index pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  ADD PRIMARY KEY (`numMotCle`),
  ADD KEY `MOTCLE_FK` (`numMotCle`);

--
-- Index pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD PRIMARY KEY (`numArt`,`numMotCle`),
  ADD KEY `MOTCLEARTICLE_FK` (`numArt`),
  ADD KEY `MOTCLEARTICLE2_FK` (`numMotCle`);

--
-- Index pour la table `STATUT`
--
ALTER TABLE `STATUT`
  ADD PRIMARY KEY (`numStat`),
  ADD KEY `STATUT_FK` (`numStat`);

--
-- Index pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  ADD PRIMARY KEY (`numThem`),
  ADD KEY `THEMATIQUE_FK` (`numThem`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  MODIFY `numArt` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `numCom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  MODIFY `numMemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  MODIFY `numMotCle` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `STATUT`
--
ALTER TABLE `STATUT`
  MODIFY `numStat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  MODIFY `numThem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `THEMATIQUE` (`numThem`);

--
-- Contraintes pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `STATUT` (`numStat`);

--
-- Contraintes pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `MOTCLE` (`numMotCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
