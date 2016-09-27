-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Septembre 2016 à 15:20
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `speedymarket_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `codeA` varchar(25) NOT NULL,
  `codeC` varchar(25) NOT NULL,
  PRIMARY KEY (`codeA`,`codeC`),
  KEY `FK_appartenir_codeC` (`codeC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `appartenir`
--

INSERT INTO `appartenir` (`codeA`, `codeC`) VALUES
('BOISSO_ALC_001', 'BOISSO_ALC'),
('BOISSO_ALC_002', 'BOISSO_ALC'),
('BOISSO_ALC_003', 'BOISSO_ALC'),
('BOISSO_ALC_004', 'BOISSO_ALC'),
('BOISSO_ALC_005', 'BOISSO_ALC'),
('BOISSO_ALC_006', 'BOISSO_ALC'),
('BOISSO_ALC_007', 'BOISSO_ALC'),
('BOISSO_ALC_008', 'BOISSO_ALC'),
('BOISSO_ALC_009', 'BOISSO_ALC'),
('BOISSO_ALC_010', 'BOISSO_ALC'),
('BOISSO_ALC_011', 'BOISSO_ALC'),
('BOISSO_ALC_012', 'BOISSO_ALC'),
('BOISSO_ALC_013', 'BOISSO_ALC'),
('BOISSO_ALC_014', 'BOISSO_ALC'),
('BOISSO_ALC_015', 'BOISSO_ALC'),
('BOISSO_ALC_016', 'BOISSO_ALC'),
('BOISSO_ALC_017', 'BOISSO_ALC'),
('BOISSO_ALC_018', 'BOISSO_ALC'),
('BOISSO_ALC_019', 'BOISSO_ALC'),
('BOISSO_ALC_020', 'BOISSO_ALC'),
('BOISSO_ALC_021', 'BOISSO_ALC'),
('BOISSO_ALC_022', 'BOISSO_ALC'),
('BOISSO_ALC_023', 'BOISSO_ALC'),
('BOISSO_ALC_024', 'BOISSO_ALC'),
('BOISSO_ALC_025', 'BOISSO_ALC'),
('BOISSO_ALC_026', 'BOISSO_ALC'),
('BOISSO_ALC_027', 'BOISSO_ALC'),
('BOISSO_ALC_028', 'BOISSO_ALC'),
('BOISSO_ALC_029', 'BOISSO_ALC'),
('BOISSO_ALC_030', 'BOISSO_ALC'),
('BOISSO_NON_001', 'BOISSO_NON'),
('BOISSO_NON_002', 'BOISSO_NON'),
('BOISSO_NON_003', 'BOISSO_NON'),
('BOISSO_NON_004', 'BOISSO_NON'),
('BOISSO_NON_005', 'BOISSO_NON'),
('BOISSO_NON_006', 'BOISSO_NON'),
('BOISSO_NON_007', 'BOISSO_NON'),
('BOISSO_NON_008', 'BOISSO_NON'),
('BOISSO_NON_009', 'BOISSO_NON'),
('BOISSO_NON_010', 'BOISSO_NON'),
('BOISSO_NON_011', 'BOISSO_NON'),
('BOISSO_NON_012', 'BOISSO_NON'),
('BOISSO_NON_013', 'BOISSO_NON'),
('BOISSO_NON_014', 'BOISSO_NON'),
('BOISSO_NON_015', 'BOISSO_NON'),
('BOISSO_NON_016', 'BOISSO_NON'),
('BOISSO_NON_017', 'BOISSO_NON'),
('BOISSO_NON_018', 'BOISSO_NON'),
('BOISSO_NON_019', 'BOISSO_NON'),
('BOISSO_NON_020', 'BOISSO_NON'),
('BOISSO_NON_021', 'BOISSO_NON'),
('BOISSO_NON_022', 'BOISSO_NON'),
('BOISSO_NON_023', 'BOISSO_NON'),
('BOISSO_NON_024', 'BOISSO_NON'),
('BOISSO_NON_025', 'BOISSO_NON'),
('BOISSO_NON_026', 'BOISSO_NON'),
('BOISSO_NON_027', 'BOISSO_NON'),
('BOISSO_NON_028', 'BOISSO_NON'),
('BOISSO_NON_029', 'BOISSO_NON'),
('BOISSO_NON_030', 'BOISSO_NON'),
('CONBOC_BOC_001', 'CONBOC_BOC'),
('CONBOC_BOC_002', 'CONBOC_BOC'),
('CONBOC_BOC_003', 'CONBOC_BOC'),
('CONBOC_BOC_004', 'CONBOC_BOC'),
('CONBOC_BOC_005', 'CONBOC_BOC'),
('CONBOC_BOC_006', 'CONBOC_BOC'),
('CONBOC_BOC_007', 'CONBOC_BOC'),
('CONBOC_BOC_008', 'CONBOC_BOC'),
('CONBOC_BOC_009', 'CONBOC_BOC'),
('CONBOC_BOC_010', 'CONBOC_BOC'),
('CONBOC_BOC_011', 'CONBOC_BOC'),
('CONBOC_BOC_012', 'CONBOC_BOC'),
('CONBOC_BOC_013', 'CONBOC_BOC'),
('CONBOC_BOC_014', 'CONBOC_BOC'),
('CONBOC_BOC_015', 'CONBOC_BOC'),
('CONBOC_CON_001', 'CONBOC_CON'),
('CONBOC_CON_002', 'CONBOC_CON'),
('CONBOC_CON_003', 'CONBOC_CON'),
('CONBOC_CON_004', 'CONBOC_CON'),
('CONBOC_CON_005', 'CONBOC_CON'),
('CONBOC_CON_006', 'CONBOC_CON'),
('CONBOC_CON_007', 'CONBOC_CON'),
('CONBOC_CON_008', 'CONBOC_CON'),
('CONBOC_CON_009', 'CONBOC_CON'),
('CONBOC_CON_010', 'CONBOC_CON'),
('CONBOC_CON_011', 'CONBOC_CON'),
('CONBOC_CON_012', 'CONBOC_CON'),
('CONBOC_CON_013', 'CONBOC_CON'),
('CONBOC_CON_014', 'CONBOC_CON'),
('CONBOC_CON_015', 'CONBOC_CON'),
('FRULEG_FRU_001', 'FRULEG_FRU'),
('FRULEG_FRU_002', 'FRULEG_FRU'),
('FRULEG_FRU_003', 'FRULEG_FRU'),
('FRULEG_FRU_004', 'FRULEG_FRU'),
('FRULEG_FRU_005', 'FRULEG_FRU'),
('FRULEG_FRU_006', 'FRULEG_FRU'),
('FRULEG_FRU_007', 'FRULEG_FRU'),
('FRULEG_FRU_008', 'FRULEG_FRU'),
('FRULEG_FRU_009', 'FRULEG_FRU'),
('FRULEG_FRU_010', 'FRULEG_FRU'),
('FRULEG_FRU_011', 'FRULEG_FRU'),
('FRULEG_FRU_012', 'FRULEG_FRU'),
('FRULEG_FRU_013', 'FRULEG_FRU'),
('FRULEG_FRU_014', 'FRULEG_FRU'),
('FRULEG_FRU_015', 'FRULEG_FRU'),
('FRULEG_LEG_001', 'FRULEG_LEG'),
('FRULEG_LEG_002', 'FRULEG_LEG'),
('FRULEG_LEG_003', 'FRULEG_LEG'),
('FRULEG_LEG_004', 'FRULEG_LEG'),
('FRULEG_LEG_005', 'FRULEG_LEG'),
('FRULEG_LEG_006', 'FRULEG_LEG'),
('FRULEG_LEG_007', 'FRULEG_LEG'),
('FRULEG_LEG_008', 'FRULEG_LEG'),
('FRULEG_LEG_009', 'FRULEG_LEG'),
('FRULEG_LEG_010', 'FRULEG_LEG'),
('FRULEG_LEG_011', 'FRULEG_LEG'),
('FRULEG_LEG_012', 'FRULEG_LEG'),
('FRULEG_LEG_013', 'FRULEG_LEG'),
('FRULEG_LEG_014', 'FRULEG_LEG'),
('FRULEG_LEG_015', 'FRULEG_LEG'),
('VIAPOI_POI_002', 'VIAPOI_POI'),
('VIAPOI_POI_003', 'VIAPOI_POI'),
('VIAPOI_POI_006', 'VIAPOI_POI'),
('VIAPOI_POI_007', 'VIAPOI_POI'),
('VIAPOI_POI_008', 'VIAPOI_POI'),
('VIAPOI_POI_009', 'VIAPOI_POI'),
('VIAPOI_POI_010', 'VIAPOI_POI'),
('VIAPOI_POI_011', 'VIAPOI_POI'),
('VIAPOI_POI_013', 'VIAPOI_POI'),
('VIAPOI_POI_014', 'VIAPOI_POI'),
('VIAPOI_VIA_001', 'VIAPOI_VIA'),
('VIAPOI_VIA_002', 'VIAPOI_VIA'),
('VIAPOI_VIA_003', 'VIAPOI_VIA'),
('VIAPOI_VIA_005', 'VIAPOI_VIA'),
('VIAPOI_VIA_008', 'VIAPOI_VIA'),
('VIAPOI_VIA_009', 'VIAPOI_VIA'),
('VIAPOI_VIA_010', 'VIAPOI_VIA'),
('VIAPOI_VIA_011', 'VIAPOI_VIA'),
('VIAPOI_VIA_012', 'VIAPOI_VIA'),
('VIAPOI_VIA_014', 'VIAPOI_VIA');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `qte` float DEFAULT NULL,
  `codeA` varchar(25) NOT NULL,
  `codeC` varchar(50) NOT NULL,
  PRIMARY KEY (`codeA`,`codeC`),
  KEY `FK_contenir_codeC` (`codeC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenir`
--

INSERT INTO `contenir` (`qte`, `codeA`, `codeC`) VALUES
(2, 'BOISSO_ALC_010', 'dd034ea0cae5ef1ff46dd70a7f955d49'),
(4, 'CONBOC_BOC_001', '05eb7a3b6171abe3a07ec0c3afa3a73e'),
(6, 'CONBOC_BOC_001', '22a24c57890142361dce04441dccca64'),
(2, 'CONBOC_BOC_003', '05eb7a3b6171abe3a07ec0c3afa3a73e'),
(6, 'CONBOC_BOC_003', '22a24c57890142361dce04441dccca64'),
(39, 'CONBOC_BOC_004', '22a24c57890142361dce04441dccca64'),
(6, 'CONBOC_BOC_009', '05eb7a3b6171abe3a07ec0c3afa3a73e'),
(4, 'CONBOC_BOC_009', '22a24c57890142361dce04441dccca64'),
(6, 'FRULEG_FRU_002', 'dd034ea0cae5ef1ff46dd70a7f955d49'),
(4, 'FRULEG_LEG_012', 'dd034ea0cae5ef1ff46dd70a7f955d49'),
(2, 'VIAPOI_VIA_001', 'dd034ea0cae5ef1ff46dd70a7f955d49');

-- --------------------------------------------------------

--
-- Structure de la table `tb_article`
--

DROP TABLE IF EXISTS `tb_article`;
CREATE TABLE IF NOT EXISTS `tb_article` (
  `codeA` varchar(25) NOT NULL,
  `libelleA` varchar(25) DEFAULT NULL,
  `descriptionA` varchar(200) DEFAULT NULL,
  `qtestockA` float DEFAULT NULL,
  `prixhtA` float NOT NULL,
  `photoA` varchar(100) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`codeA`),
  KEY `FK_tb_article_code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_article`
--

INSERT INTO `tb_article` (`codeA`, `libelleA`, `descriptionA`, `qtestockA`, `prixhtA`, `photoA`, `label`, `code`) VALUES
('BOISSO_ALC_001', 'Vin blanc', 'Vin blanc de Jurançon', 5, 10, 'jurancon.png', NULL, NULL),
('BOISSO_ALC_002', 'Vin rouge', 'Vin rouge l''éscudé Béarn', 10, 2, 'rouge_escude.png', NULL, NULL),
('BOISSO_ALC_003', 'Vin rosé', 'Vin rosé l''éscudé Béarn', 5, 5, 'rose_escude.png', NULL, NULL),
('BOISSO_ALC_004', 'Vin pettillant', 'Vin blanc de Jurançon pétillant', 22, 12, NULL, NULL, NULL),
('BOISSO_ALC_005', 'Champagne', 'Import de Champagne', 50, 20, NULL, NULL, NULL),
('BOISSO_ALC_006', 'Poiré', 'Poiré du Pays Basque', 60, 2, NULL, NULL, NULL),
('BOISSO_ALC_007', 'Cidre', 'Cidre du Pays Basque', 55, 2, 'cidre.png', NULL, NULL),
('BOISSO_ALC_008', 'Whisky Bourbon', 'Whisky Bourbon De Bretagne', 85, 18, NULL, NULL, NULL),
('BOISSO_ALC_009', 'Biere Basque', 'Bière Basque de Hendaye', 24, 4, NULL, NULL, NULL),
('BOISSO_ALC_010', 'Bière Béarnaise', 'Bière Béarnaise de la Brasserie Béarnaise', 26, 5, 'shuc.png', NULL, NULL),
('BOISSO_ALC_011', 'Bière Béarnaise Bio', 'Bière d''Oloron Bio', 22, 4, NULL, 'AB', NULL),
('BOISSO_ALC_012', 'Bière Basque Bio', 'Bière Basque Bio de Biarritz', 22, 5, NULL, 'AB', NULL),
('BOISSO_ALC_013', 'Bière Landaise', 'Bière Landaise, Dax', 33, 4, NULL, NULL, NULL),
('BOISSO_ALC_014', 'Bière Landaise Bio', 'Bière Landaise Bio, Mont de Marasan', 55, 5, NULL, 'AB', NULL),
('BOISSO_ALC_015', 'Rhum Brun', 'Rhum Brun equitable de guadeloupe', 48, 10, NULL, 'Equitable', NULL),
('BOISSO_ALC_016', 'Rhum Blanc', 'Rhum Blanc equitable de martinique', 56, 11, NULL, 'Equitable', NULL),
('BOISSO_ALC_017', 'Manzana', 'Manzana', 52, 9, NULL, NULL, NULL),
('BOISSO_ALC_018', 'Buret', 'Buret disponible qu''en saison du Béarn', 85, 5, NULL, NULL, NULL),
('BOISSO_ALC_019', 'Sangria', 'Sangria au rouge de L''éscudé et fruits Béarnais', 69, 6, NULL, NULL, NULL),
('BOISSO_ALC_020', 'Vodka', 'Vodka import du Dombass', 6, 10, NULL, NULL, NULL),
('BOISSO_ALC_021', 'Pastis', 'Annis fermenté', 52, 10, NULL, NULL, NULL),
('BOISSO_ALC_022', 'Chartreuse', 'Soigne tout mal', 3, 16, NULL, NULL, NULL),
('BOISSO_ALC_023', 'Pissanbon', 'Alcool de Bannane a boire moderement', 25, 13, NULL, NULL, NULL),
('BOISSO_ALC_024', 'Whisky Malt', 'Whisky Malt de Bretagne', 26, 20, NULL, NULL, NULL),
('BOISSO_ALC_025', 'Cointreau', 'Alcool de riche', 36, 50, NULL, NULL, NULL),
('BOISSO_ALC_026', 'Absynthe', 'Alcool dénaturé par la lois', 95, 21, NULL, NULL, NULL),
('BOISSO_ALC_027', 'Floc', 'Floc de gascogne', 85, 13, NULL, NULL, NULL),
('BOISSO_ALC_028', 'Porto', 'Porto Blanc du Portugal', 75, 13, NULL, NULL, NULL),
('BOISSO_ALC_029', 'Ratafia', 'Ratafia', 58, 15, NULL, NULL, NULL),
('BOISSO_ALC_030', 'Saké', 'Saké Japonnais', 96, 16, NULL, NULL, NULL),
('BOISSO_NON_001', 'Eau', 'Eau', 100, 1, NULL, NULL, NULL),
('BOISSO_NON_002', 'Jus de pomme', 'Jus de pomme', 100, 2, NULL, 'AB', NULL),
('BOISSO_NON_003', 'Jus d''orange', 'Jus d''orange', 100, 2, NULL, 'AB', NULL),
('BOISSO_NON_004', 'Jus de raisin', 'Jus de raisin', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_005', 'Jus d''ananas', 'Jus d''ananas', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_006', 'Cola', 'Cola', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_007', 'Jus de poire', 'Jus de poire', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_008', 'Jus de pêche', 'Jus de pêche', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_009', 'Eau gaseuze', 'Eau gaseuze', 100, 1, NULL, NULL, NULL),
('BOISSO_NON_010', 'Limonade', 'Limonade', 100, 1, 'limonade.png', NULL, NULL),
('BOISSO_NON_011', 'Jus de tomate', 'Jus de tomate', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_012', 'Jus de kiwi', 'Jus de kiwi', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_013', 'Boisson énergisante', 'Boisson énergisante', 100, 3, NULL, NULL, NULL),
('BOISSO_NON_014', 'Gazpacho', 'Gazpacho', 100, 2, 'gaspacho.png', NULL, NULL),
('BOISSO_NON_015', 'Jus de banane', 'Jus de banane', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_016', 'Multi-fruit', 'Multi-fruit', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_017', 'Sirop de menthe', 'Sirop de menthe', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_018', 'Sirop de grenadine', 'Sirop de grenadine', 100, 2, 'sirop_grenadine.png', NULL, NULL),
('BOISSO_NON_019', 'Sirop de pêche', 'Sirop de pêche', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_020', 'Sirop d''orange', 'Sirop d''orange', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_021', 'Sirop de citron', 'Sirop de citron', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_022', 'Sirop de fraise', 'Sirop de fraise', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_023', 'Sirop de casis', 'Sirop de casis', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_024', 'Jus de pruneau', 'Jus de pruneau', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_025', 'Sirop de vanille', 'Sirop de vanille', 100, 3, NULL, NULL, NULL),
('BOISSO_NON_026', 'Jus de fraise', 'Jus de fraise', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_027', 'Jus de nashis', 'Jus de nashis', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_028', 'Jus pomme-kiwi', 'Jus pomme-kiwi', 100, 2, 'jus_pomme_kiwi.png', NULL, NULL),
('BOISSO_NON_029', 'Jus pomme-poire', 'Jus pomme-poire', 100, 2, NULL, NULL, NULL),
('BOISSO_NON_030', 'Jus pomme-banane', 'Jus pomme-banane', 100, 2, NULL, NULL, NULL),
('CONBOC_BOC_001', 'Confiture de figue', 'Miam la bonne confiture de maman', 42, 3, 'confture_figue.png', 'bio', NULL),
('CONBOC_BOC_002', 'Confiture de coing', 'Olé olé la confiture', 50, 3, NULL, 'non-bio', NULL),
('CONBOC_BOC_003', 'Paté de campagne', 'Avec des vrais morceaux de lapin à l''interieur', 22, 1, 'pate_de_campagne.png', 'non-bio', NULL),
('CONBOC_BOC_004', 'Terrine de canard', 'Le plaisir de la viande, les plumes en moins', 99, 3, 'terrine_canard.png', 'non-bio', NULL),
('CONBOC_BOC_005', 'Confit de porc', 'Tout est bon dans le cochon', 70, 5, NULL, 'non-bio', NULL),
('CONBOC_BOC_006', 'Soupe de légumes', 'Sans additifs ni conservateurs', 22, 3, NULL, 'bio', NULL),
('CONBOC_BOC_007', 'Soupe de tomate', 'Tomate poivron courgette oignon patate carotte', 33, 3, NULL, 'bio', NULL),
('CONBOC_BOC_008', 'Manchons de canard', 'Le canard qui nous vient du Nord', 11, 5, NULL, 'non-bio', NULL),
('CONBOC_BOC_009', 'Moutarde', 'Celle de Mauléon, pas celle de Dijon', 44, 3, 'moutarde.png', 'bio', NULL),
('CONBOC_BOC_010', 'Mayonnaise', 'C''est de la merde c''est polyphosphaté', 69, 3, NULL, 'bio', NULL),
('CONBOC_BOC_011', 'Mirabelles à l''eau de vie', 'Des prunes et de l''alcool, idéal pour l''hiver', 70, 6, NULL, 'bio', NULL),
('CONBOC_BOC_012', 'Compote de pomme poire', 'Tout est dans le titre', 81, 5, NULL, 'bio', NULL),
('CONBOC_BOC_013', 'Terrine de st-jaques', 'Une régalade pour les grands comme les petits', 112, 6, NULL, 'non-bio', NULL),
('CONBOC_BOC_014', 'Rillettes de maquereaux', 'Du poisson écraser à l''interieur d''un bocal', 26, 5, NULL, 'non-bio', NULL),
('CONBOC_BOC_015', 'Caldeirada en conserve', 'Poisson légumes et épices', 30, 6, NULL, 'non-bio', NULL),
('CONBOC_CON_001', 'Cœurs d''artichauds', NULL, 50, 3, NULL, 'Bio', NULL),
('CONBOC_CON_002', 'Ratatouille', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_003', 'Aubergines', NULL, 50, 3, '', 'Bio', NULL),
('CONBOC_CON_004', 'Terrines aux cèpes', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_005', 'Raviolis', NULL, 50, 3, NULL, 'Bio', NULL),
('CONBOC_CON_006', 'Flageolets', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_007', 'Tomates séchées', NULL, 50, 3, 'tomates_sechees.png', 'Bio', NULL),
('CONBOC_CON_008', 'Haricots rouges', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_009', 'Pois chiches', NULL, 50, 3, NULL, 'Bio', NULL),
('CONBOC_CON_010', 'Haricots verts', NULL, 50, 3, 'haricots_verts.png', 'Non bio', NULL),
('CONBOC_CON_011', 'Champignons', 'Champignons de paris', 50, 3, 'champignon.png', 'Bio', NULL),
('CONBOC_CON_012', 'Epinards', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_013', 'Haricots beurre', NULL, 50, 3, NULL, 'Bio', NULL),
('CONBOC_CON_014', 'Carottes rapées', NULL, 50, 3, NULL, 'Non bio', NULL),
('CONBOC_CON_015', 'Maïs', NULL, 50, 3, NULL, 'Bio', NULL),
('FRULEG_FRU_001', 'Fraise', 'Fruit rouge', 25, 4, 'fraise.png', NULL, NULL),
('FRULEG_FRU_002', 'Banane', 'Fruit exotique', 50, 4, 'banane.png', NULL, NULL),
('FRULEG_FRU_003', 'Pomme', 'Fruit classique', 70, 3, 'pomme.png', NULL, NULL),
('FRULEG_FRU_004', 'Poire', 'Fruit classique', 46, 3, 'poire.png', NULL, NULL),
('FRULEG_FRU_005', 'Ananas', 'Fruit exotique', 24, 7, NULL, NULL, NULL),
('FRULEG_FRU_006', 'Melon', 'Fruit exotique', 10, 4, 'melon.png', NULL, NULL),
('FRULEG_FRU_007', 'Orange', 'Fruit classique', 53, 3, NULL, NULL, NULL),
('FRULEG_FRU_008', 'Clementine', 'Fruit classique', 25, 6, NULL, NULL, NULL),
('FRULEG_FRU_009', 'Cerise', 'Fruit rouge', 45, 8, NULL, NULL, NULL),
('FRULEG_FRU_010', 'Pamplemousse', 'Fruit exotique', 24, 4, 'pamplemousse.png', NULL, NULL),
('FRULEG_FRU_011', 'Kiwi', 'Fruit exotique', 80, 3, 'kiwis.png', NULL, NULL),
('FRULEG_FRU_012', 'Raisin', 'Fruit classique', 64, 6, NULL, NULL, NULL),
('FRULEG_FRU_013', 'Peche', 'Fruit classique', 84, 2, NULL, NULL, NULL),
('FRULEG_FRU_014', 'Prune', 'Fruit classique', 60, 3, NULL, NULL, NULL),
('FRULEG_FRU_015', 'Mangue', 'Fruit exotique', 70, 8, NULL, NULL, NULL),
('FRULEG_LEG_001', 'Courgette', NULL, 53, 4, NULL, NULL, NULL),
('FRULEG_LEG_002', 'Potimarron', NULL, 25, 4, 'potimarron.png', NULL, NULL),
('FRULEG_LEG_003', 'Asperge', NULL, 45, 3, NULL, NULL, NULL),
('FRULEG_LEG_004', 'Epinard', NULL, 24, 6, NULL, NULL, NULL),
('FRULEG_LEG_005', 'Blette', NULL, 80, 8, NULL, NULL, NULL),
('FRULEG_LEG_006', 'Carotte', NULL, 25, 6, 'carottes.png', NULL, NULL),
('FRULEG_LEG_007', 'Haricot', NULL, 50, 4, NULL, NULL, NULL),
('FRULEG_LEG_008', 'Oignon', NULL, 70, 4, NULL, NULL, NULL),
('FRULEG_LEG_009', 'Ail', NULL, 46, 8, NULL, NULL, NULL),
('FRULEG_LEG_010', 'Choux', NULL, 24, 4, NULL, NULL, NULL),
('FRULEG_LEG_011', 'Betterave', NULL, 10, 3, NULL, NULL, NULL),
('FRULEG_LEG_012', 'Aubergine', NULL, 53, 6, 'aubergine.png', NULL, NULL),
('FRULEG_LEG_013', 'Poivron', NULL, 25, 4, 'poivron.png', NULL, NULL),
('FRULEG_LEG_014', 'Laitue', NULL, 45, 4, NULL, NULL, NULL),
('FRULEG_LEG_015', 'Piment', NULL, 70, 3, NULL, NULL, NULL),
('VIAPOI_POI_002', 'Éperlans', 'À fricasser', 1280, 14, NULL, NULL, NULL),
('VIAPOI_POI_003', 'Dorade', 'Aux câpres ', 30, 34, 'dorade.png', NULL, NULL),
('VIAPOI_POI_006', 'Truites', 'Truites d''élevage', 51, 22, NULL, NULL, NULL),
('VIAPOI_POI_007', 'Carpe', 'Lac de Biscarosse', 16, 14, NULL, 'Bio', NULL),
('VIAPOI_POI_008', 'Filet de cabillaud', 'Mer Baltique', 89, 20, 'cabillaud.png', '100% colin', NULL),
('VIAPOI_POI_009', 'Crevettes', 'Petites crevettes roses', 200, 15, NULL, NULL, NULL),
('VIAPOI_POI_010', 'Filet de lieu noir', 'Mer du Nord', 25, 18, NULL, '100% Hydrocarbures', NULL),
('VIAPOI_POI_011', 'Filet de limande', 'Limande meunière', 29, 10, NULL, 'Bio', NULL),
('VIAPOI_POI_013', 'Sardines', 'Serrées au fond de leur boite', 114, 6, 'sardine.png', 'En boite', NULL),
('VIAPOI_POI_014', 'Pavé de saumon', 'Saumon d''élevage', 21, 30, NULL, 'Né en piscine', NULL),
('VIAPOI_VIA_001', 'Boeuf', 'Viande bovine française', 20, 18, 'viande_boeuf.png', 'Label Rouge', NULL),
('VIAPOI_VIA_002', 'Jambon blanc', 'Jambon blanc', 45, 43, 'jambon_blanc.png', NULL, NULL),
('VIAPOI_VIA_003', 'Lardon fumé', 'Porc breton ', 6, 9, NULL, 'Viande française', NULL),
('VIAPOI_VIA_004', 'Terrine de canard', 'Canard landais AOC', 15, 5, 'terrine_canard.png', NULL, NULL),
('VIAPOI_VIA_005', 'Lapin ', 'Lapinou elevé en plein air', 128, 14, 'lapin.png', 'Sauvage, c''est bon', NULL),
('VIAPOI_VIA_008', 'Poulet fermier', 'Poulet femier entier', 100, 12, 'poulet.png', 'Label Rouge', NULL),
('VIAPOI_VIA_009', 'Canard des Landes', 'Canard des Landes', 34, 14, NULL, NULL, NULL),
('VIAPOI_VIA_010', 'Escalopes de Dinde', 'Escalopes de Dinde', 1228, 42, 'escaloppes_dinde.png', 'Dinde française', NULL),
('VIAPOI_VIA_011', 'Blancs de Poulet', 'Blancs de Poulet', 998, 15, NULL, NULL, NULL),
('VIAPOI_VIA_012', 'Magrets de canard', 'Magrets de canard x2', 35, 35, 'magret_canard.png', 'Gras', NULL),
('VIAPOI_VIA_014', 'Poularde', 'De la Forêt de Bastard AOC', 34, 23, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_categorie`
--

DROP TABLE IF EXISTS `tb_categorie`;
CREATE TABLE IF NOT EXISTS `tb_categorie` (
  `codeC` varchar(25) NOT NULL,
  `libelleC` varchar(25) DEFAULT NULL,
  `codeC_parent` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`codeC`),
  KEY `FK_tb_categorie_codeC_parent` (`codeC_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_categorie`
--

INSERT INTO `tb_categorie` (`codeC`, `libelleC`, `codeC_parent`) VALUES
('', '', NULL),
('BOISSO', 'Boissons', NULL),
('BOISSO_ALC', 'Boissons Alcoolisées', 'BOISSO'),
('BOISSO_NON', 'Boissons Non alcoolisées', 'BOISSO'),
('CONBOC', 'Conserves et Bocaux', ''),
('CONBOC_BOC', 'Bocaux', 'CONBOC'),
('CONBOC_CON', 'Conserves', 'CONBOC'),
('EPISAL', 'Epicerie salée', ''),
('EPISAL_APE', 'Apéro', 'EPISAL'),
('EPISAL_AUT', 'Autre', 'EPISAL'),
('EPISUC', 'Epicerie Sucrée', NULL),
('EPISUC_BIS', 'Biscuits', 'EPISUC'),
('EPISUC_CON', 'Confiserie', 'EPISUC'),
('FRULEG', 'Fruits et Légumes', NULL),
('FRULEG_FRU', 'Fruits', 'FRULEG'),
('FRULEG_LEG', 'Légumes', 'FRULEG'),
('PROLAI', 'Produits Laitiers', NULL),
('PROLAI_FRO', 'Fromages', 'PROLAI'),
('PROLAI_LAI', 'Lait', 'PROLAI'),
('PROLAI_YAO', 'Yaourts', 'PROLAI'),
('PROSEC', 'Produits Secs', NULL),
('PROSEC_CON', 'Condiments', 'PROSEC'),
('PROSEC_FEC', 'Féculents', 'PROSEC'),
('VIAPOI', 'Viandes et Poissons', NULL),
('VIAPOI_POI', 'Poissons', 'VIAPOI'),
('VIAPOI_VIA', 'Viandes', 'VIAPOI');

-- --------------------------------------------------------

--
-- Structure de la table `tb_client`
--

DROP TABLE IF EXISTS `tb_client`;
CREATE TABLE IF NOT EXISTS `tb_client` (
  `dateinscription` date DEFAULT NULL,
  `code` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_commande`
--

DROP TABLE IF EXISTS `tb_commande`;
CREATE TABLE IF NOT EXISTS `tb_commande` (
  `codeC` varchar(50) NOT NULL,
  `dateC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statutC` int(11) DEFAULT NULL,
  `dateretraitC` date DEFAULT NULL,
  `heureretraitC` time DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`codeC`),
  KEY `FK_tb_commande_code` (`code`),
  KEY `statutC` (`statutC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_commande`
--

INSERT INTO `tb_commande` (`codeC`, `dateC`, `statutC`, `dateretraitC`, `heureretraitC`, `code`) VALUES
('05eb7a3b6171abe3a07ec0c3afa3a73e', '2016-09-27 13:21:33', NULL, NULL, NULL, NULL),
('22a24c57890142361dce04441dccca64', '2016-09-27 12:25:41', NULL, NULL, NULL, NULL),
('dd034ea0cae5ef1ff46dd70a7f955d49', '2016-09-27 12:38:18', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_employe`
--

DROP TABLE IF EXISTS `tb_employe`;
CREATE TABLE IF NOT EXISTS `tb_employe` (
  `code` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_personne`
--

DROP TABLE IF EXISTS `tb_personne`;
CREATE TABLE IF NOT EXISTS `tb_personne` (
  `code` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_personne`
--

INSERT INTO `tb_personne` (`code`, `mail`, `mdp`, `tel`, `nom`) VALUES
('', 'toto@toto.fr', 'toto', NULL, NULL),
('CLIENT_0001', 'yahiatene-box2@hotmail.fr', 'tpdev2016', '0698989898', 'TOTO'),
('CLIENT_0002', 'Alex@hotmail.fr', 'tpdev1620', '0698414198', 'TATA');

-- --------------------------------------------------------

--
-- Structure de la table `tb_producteur`
--

DROP TABLE IF EXISTS `tb_producteur`;
CREATE TABLE IF NOT EXISTS `tb_producteur` (
  `photoP` varchar(100) DEFAULT NULL,
  `raisonsocP` varchar(25) DEFAULT NULL,
  `code` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_statut`
--

DROP TABLE IF EXISTS `tb_statut`;
CREATE TABLE IF NOT EXISTS `tb_statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_statut`
--

INSERT INTO `tb_statut` (`id_statut`, `libelle`) VALUES
(3, 'Nouveau statut');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v`
--
DROP VIEW IF EXISTS `v`;
CREATE TABLE IF NOT EXISTS `v` (
`codeA` varchar(25)
,`libelleA` varchar(25)
,`descriptionA` varchar(200)
,`qtestockA` float
,`prixhtA` float
,`photoA` varchar(100)
,`label` varchar(100)
,`code` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v`
--
DROP TABLE IF EXISTS `v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v`  AS  select `tb_article`.`codeA` AS `codeA`,`tb_article`.`libelleA` AS `libelleA`,`tb_article`.`descriptionA` AS `descriptionA`,`tb_article`.`qtestockA` AS `qtestockA`,`tb_article`.`prixhtA` AS `prixhtA`,`tb_article`.`photoA` AS `photoA`,`tb_article`.`label` AS `label`,`tb_article`.`code` AS `code` from `tb_article` ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `FK_appartenir_codeA` FOREIGN KEY (`codeA`) REFERENCES `tb_article` (`codeA`),
  ADD CONSTRAINT `FK_appartenir_codeC` FOREIGN KEY (`codeC`) REFERENCES `tb_categorie` (`codeC`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_contenir_codeA` FOREIGN KEY (`codeA`) REFERENCES `tb_article` (`codeA`),
  ADD CONSTRAINT `FK_contenir_codeC` FOREIGN KEY (`codeC`) REFERENCES `tb_commande` (`codeC`);

--
-- Contraintes pour la table `tb_article`
--
ALTER TABLE `tb_article`
  ADD CONSTRAINT `FK_tb_article_code` FOREIGN KEY (`code`) REFERENCES `tb_personne` (`code`);

--
-- Contraintes pour la table `tb_categorie`
--
ALTER TABLE `tb_categorie`
  ADD CONSTRAINT `FK_tb_categorie_codeC_parent` FOREIGN KEY (`codeC_parent`) REFERENCES `tb_categorie` (`codeC`);

--
-- Contraintes pour la table `tb_client`
--
ALTER TABLE `tb_client`
  ADD CONSTRAINT `FK_tb_client_code` FOREIGN KEY (`code`) REFERENCES `tb_personne` (`code`);

--
-- Contraintes pour la table `tb_commande`
--
ALTER TABLE `tb_commande`
  ADD CONSTRAINT `FK_` FOREIGN KEY (`statutC`) REFERENCES `tb_statut` (`id_statut`),
  ADD CONSTRAINT `FK_tb_commande_code` FOREIGN KEY (`code`) REFERENCES `tb_personne` (`code`);

--
-- Contraintes pour la table `tb_employe`
--
ALTER TABLE `tb_employe`
  ADD CONSTRAINT `FK_tb_employe_code` FOREIGN KEY (`code`) REFERENCES `tb_personne` (`code`);

--
-- Contraintes pour la table `tb_producteur`
--
ALTER TABLE `tb_producteur`
  ADD CONSTRAINT `FK_tb_producteur_code` FOREIGN KEY (`code`) REFERENCES `tb_personne` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
