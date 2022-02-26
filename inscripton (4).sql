-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 fév. 2022 à 20:12
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscripton`
--

-- --------------------------------------------------------

--
-- Structure de la table `admn`
--

CREATE TABLE `admn` (
  `id` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admn`
--

INSERT INTO `admn` (`id`, `FIRST_NAME`, `last_name`, `username`, `password`) VALUES
(1, 'assia', 'bouamir', 'assia@gmail.com', 'assia');

-- --------------------------------------------------------

--
-- Structure de la table `bac_type`
--

CREATE TABLE `bac_type` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bac_type`
--

INSERT INTO `bac_type` (`id`, `name`) VALUES
(16, 'Lettres'),
(3, 'science agronomique '),
(12, 'science math A'),
(1, 'science math B '),
(14, 'science physique'),
(15, 'SVT');

-- --------------------------------------------------------

--
-- Structure de la table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `bac_year` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `bac_type_id` int(11) DEFAULT NULL,
  `school_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sector`
--

INSERT INTO `sector` (`id`, `name`) VALUES
(3, 'english'),
(2, 'french');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `gender` varchar(28) DEFAULT NULL CHECK (`gender` = 'male' or `gender` = 'female'),
  `nationality` varchar(255) NOT NULL DEFAULT 'Moroccan',
  `birthday` date NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `bac_note` varchar(50) NOT NULL,
  `situation` varchar(55) DEFAULT NULL CHECK (`situation` = 'single' or `situation` = 'Married' or `situation` = 'Divorced'),
  `personal_picture` varchar(255) NOT NULL,
  `bac_recto` varchar(255) NOT NULL,
  `bac_verso` varchar(255) NOT NULL,
  `disabled` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `cin`, `cne`, `email`, `phone`, `adress`, `gender`, `nationality`, `birthday`, `confirm_password`, `password`, `status`, `bac_note`, `situation`, `personal_picture`, `bac_recto`, `bac_verso`, `disabled`) VALUES
(266, 'khadyja', 'rami', 'MC300436', 'k110101587', 'rami.khadyja@gmail.com', '3456789021', 'hhhhhhhhh', 'Male', 'Morocco', '2022-02-15', 'xxx', 'xxx', 'pending', '21', 'Married', 'personal_images/1644531731', 'bac_images/1644531731', 'bac_images/1644531731', 'Visuel'),
(268, 'fatima', 'rami', 'MC3004369', 'k45678902222111', 'khadyjarami026@gmail.com', '0987654321', 'bbbbbb', 'Male', 'Morocco', '2003-02-10', 'vvv', 'vvv', 'pending', '16.50', 'Married', 'personal_images/1644583867', 'bac_images/1644583867', 'bac_images/1644583867', ''),
(271, 'zineb', 'rami', 'MC3456789', 'k567894329', 'ramikhadija1902@gmial.com', '06 78 89 56 45', 'ccccccccccc', 'Male', 'Morocco', '4567-03-12', 'xxxc', 'xxxc', 'pending', '16.50', 'Married', 'personal_images/1644584441', 'bac_images/1644584441', 'bac_images/1644584441', ''),
(276, 'berahim', 'rami', 'MC30868499980', 'k5678943299999', 'khadyjarami04426@gmail.com', '06 82 50 37 37', 'jjjjjjjjjjjjjjjjjj', 'Female', 'Morocco', '0000-00-00', 'jata', 'jata', 'pending', '16.50', 'Divorced', '../personal_images/1644586204WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/1644586204interc2.jpg', '../bac_images/1644586204make2.jpeg', ''),
(278, '9ador', 'fded', 'MC3004364567', 'K567889450', 'khadyjarami03426@gmail.com', '34567890211213', 'vvvvvvvv', 'Male', 'Morocco', '2022-02-16', 'hadi', 'hadi', 'pending', '16.50', 'Divorced', '../personal_images/1644605507WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/16446055076-2.PNG', '../bac_images/1644605507WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', ''),
(279, 'fatima', 'rami', 'MC300436998', 'k5678943290000', 'khadyjarami0440926@gmail.com', '09876543210000', 'hhhhhhhhhhhhhhh', 'Female', 'Morocco', '2022-02-16', 'hhh', 'hhh', 'pending', '16.50', 'Married', '../personal_images/1644703423women1.jpg', '../bac_images/1644703423WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/1644703423women11.jpg', 'Auditif et Visuel '),
(283, '9ador', 'rajel8', 'MC3086845555555555555', 'jjjjjjffffffffffffff', 'ramikhadija1903452@gmial.com', '06 82 50 37 3745', 'hhhhhhhhhhhhhhhhhh', 'Male', 'Morocco', '2022-02-26', 'fff', 'fff', 'pending', '16.50', 'Married', '../personal_images/1644704133women6.jpg', '../bac_images/1644704133WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/16447041333pc1.PNG', 'Moteur et Visuel'),
(284, 'ha.lima', 'amri', 'MC300436324', 'k45678904532', 'halima@gmail.com', '09876543211235', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'Male', 'Morocco', '2022-02-17', 'hhh', 'hhh', 'pending', '16.50', 'Married', '../personal_images/16448802723pc1.PNG', '../bac_images/1644880272WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/1644880272women9.jpg', ''),
(286, 'merym', 'NAJEH', 'MC3004364567567', 'f45733290', 'MERY@GMAIL.COM', '98076954967', '3ta3eta', 'Female', 'Morocco', '2022-02-11', 'khedidij', 'khedidij', 'pending', '16.50', 'Married', '../personal_images/1645358782WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645358782logo est.jpg', '../bac_images/1645358782women3.jpg', ''),
(287, 'helima', 'amri', 'gt5432938', 'k594932019', 'helima@gmail.com', '57684932098', 'khemiss', 'Female', 'Morocco', '2022-02-17', 'helima', 'helima', 'pending', '16.50', 'single', '../personal_images/1645358981women4.jpg', '../bac_images/1645358981WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645358981women4.jpg', ''),
(288, 'rami', 'rami', 'MC4567896543', 'k56789432954678', 'ramiramirami@gmail.com', '06 82 50 37 690', 'fedidnat', 'Female', 'Morocco', '2022-02-18', 'fadi', 'fadi', 'pending', '16.50', 'Married', '../personal_images/1645359267WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645359267WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645359267women12.jpg', ''),
(289, 'sohil', 'sohi', 'bvvfd34567890', 'k110101587345678', 'sohil@gmail.com', '1234543269', 'sadfrt', 'Male', 'Morocco', '2022-02-22', 'var', 'var', 'pending', '16.50', 'Married', '../personal_images/1645380880WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645380880women12.jpg', '../bac_images/1645380880uml.classe.png', ''),
(290, 'agrima', 'jamal', 'k1294493206g', 'fdee345608', 'agrima@gmail.com', '123450695', 'hrttkjfs', 'Male', 'Morocco', '2022-02-17', 'agrima', 'agrima', 'pending', '16.50', 'single', '../personal_images/1645443806make5.jpg', '../bac_images/1645443806make2.jpeg', '../bac_images/1645443806women6.jpg', ''),
(291, 'agrima', 'jamal', 'k1294493206gko132wwjds', 'fdee34560891234', 'agrim9234ia@gmail.com', '123450695l98', 'hrttkjfs', 'Male', 'Morocco', '2022-02-17', 'agrima', 'agrima', 'pending', '16.50', 'single', '../personal_images/1645450100make5.jpg', '../bac_images/1645450100make2.jpeg', '../bac_images/1645450100women6.jpg', ''),
(292, 'soufiane', 'hourri', 'MC3004361234', 'k1123456789', 'soufiane@gmail.com', '34567890212345', 'safi', 'Male', 'Morocco', '2022-02-15', 'soufiane', 'soufiane', 'pending', '16.50', 'single', '../personal_images/1645478743students005_file_719f7f1df7c1661c46f4717ab7dd50db.png', '../bac_images/1645478743students005_file_2ea7efc2c96b827240a51aa05121440c.png', '../bac_images/1645478743students005_file_c8d2368cea34b61eedb0b5269288f10f.png', ''),
(293, 'soufiane', 'hourri', 'MC3004361234des', 'k11234567893211', 'soufiane123@gmail.com', '3456789021234554', 'safi', 'Male', 'Morocco', '2022-02-15', 'soufiane', 'soufiane', 'pending', '16.50', 'single', '../personal_images/1645479737students005_file_719f7f1df7c1661c46f4717ab7dd50db.png', '../bac_images/1645479737students005_file_2ea7efc2c96b827240a51aa05121440c.png', '../bac_images/1645479737students005_file_c8d2368cea34b61eedb0b5269288f10f.png', ''),
(294, 'soufiane', 'hourri', 'MC3004361234desdesx', 'k11234567893211fd', 'soufiane1234@gmail.com', '345678902123445', 'safi', 'Male', 'Morocco', '2022-02-15', 'soufiane', 'soufiane', 'pending', '16.50', 'single', '../personal_images/1645479804students005_file_719f7f1df7c1661c46f4717ab7dd50db.png', '../bac_images/1645479804students005_file_2ea7efc2c96b827240a51aa05121440c.png', '../bac_images/1645479804students005_file_c8d2368cea34b61eedb0b5269288f10f.png', ''),
(295, 'mostapha', 'mostAPHA', 'MC30043612345', 'K56788945012345', 'mostapha@gmail.com', '1234321456', 'france', 'Male', 'Morocco', '2022-02-19', 'jjj', 'jjj', 'pending', '16.50', 'Married', '../personal_images/1645480006tree.jpg', '../bac_images/1645480006WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645480006swi1 (1).PNG', ''),
(297, 'zineb', 'rami', 'MC3004361234wsse3', 'K567889450oooo', 'zineb2019@gmail.com', '09876543212345', 'safisafi', 'Male', 'Morocco', '2022-02-18', 'rami', 'rami', 'pending', '16.50', 'Married', '../personal_images/1645803014pc4.jpg', '../bac_images/1645803014WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/1645803014interface.jpg', ''),
(298, 'hhhhhh', 'hhhhhh', 'MC456789433ws', 'k1101015871111111111111111111111111', 'ramww2q2wi.khadyja@gmail.com', '3456789021xxse3', 'vfccdss', 'Male', 'Morocco', '2022-02-04', 'ccc', 'ccc', 'pending', '16.50', 'single', '../personal_images/1645803186sww2.PNG', '../bac_images/1645803186women11.jpg', '../bac_images/1645803186make10.jpg', ''),
(299, 'sksko', 'bbnggeicfd', 'g221386574', 'h122848fhf', 'ranufhdc@gmail.com', '327492374833823', 'ghgtfhrjcjd', 'Female', 'Morocco', '2022-02-18', 'rafi', 'rafi', 'pending', '21', 'single', '../personal_images/1645803631WhatsApp Image 2022-02-03 at 12.30.28 AM.jpeg', '../bac_images/1645803631woem8.jpg', '../bac_images/16458036313pc1.PNG', ''),
(300, 'berahim', 'fded', 'MC456789312543', 'k4567890VGFRT', '3E43@GMAIL.COM', '4544444', 'hhhhhhhhhhhhhhhhhhh', 'Male', 'Morocco', '2022-02-24', 'qwe', 'qwe', 'pending', '16.50', 'Married', '../personal_images/1645812114WhatsApp Image 2022-02-03 at 12.30.28 AM.jpg', '../bac_images/1645812114interface.jpg', '../bac_images/1645812114ping.jpg', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bac_type`
--
ALTER TABLE `bac_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_registration_bac_type` (`bac_type_id`),
  ADD KEY `FK_registration_sector` (`sector_id`),
  ADD KEY `FK_registration_student` (`student_id`);

--
-- Index pour la table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cne` (`cne`),
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bac_type`
--
ALTER TABLE `bac_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT pour la table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `FK_registration_bac_type` FOREIGN KEY (`bac_type_id`) REFERENCES `bac_type` (`id`),
  ADD CONSTRAINT `FK_registration_sector` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`id`),
  ADD CONSTRAINT `FK_registration_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
