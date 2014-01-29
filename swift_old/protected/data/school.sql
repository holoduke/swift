-- phpMyAdmin SQL Dump
-- version 4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 07:48 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedrijfrelatie`
--

CREATE TABLE IF NOT EXISTS `bedrijfrelatie` (
  `idBedrijfRelatie` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Adres` varchar(45) DEFAULT NULL,
  `Postcode` varchar(45) DEFAULT NULL,
  `Woonplaats` varchar(45) DEFAULT NULL,
  `KVKId` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idBedrijfRelatie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bedrijfrelatie`
--

INSERT INTO `bedrijfrelatie` (`idBedrijfRelatie`, `Naam`, `Adres`, `Postcode`, `Woonplaats`, `KVKId`) VALUES
(1, 'bv B.V.', 'b', 'b', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `bedrijfrelatiecontact`
--

CREATE TABLE IF NOT EXISTS `bedrijfrelatiecontact` (
  `idBedrijfRelatieContact` int(11) NOT NULL AUTO_INCREMENT,
  `Voorletters` varchar(45) DEFAULT NULL,
  `Achternaam` varchar(45) DEFAULT NULL,
  `Geslacht` varchar(1) DEFAULT NULL,
  `Functie` varchar(45) DEFAULT NULL,
  `Telefoon` varchar(45) DEFAULT NULL,
  `EMail` varchar(45) DEFAULT NULL,
  `BedrijfRelatie_idBedrijfRelatie` int(11) NOT NULL,
  `Intecedent_idIntecedent` int(11) NOT NULL,
  PRIMARY KEY (`idBedrijfRelatieContact`),
  KEY `fk_BedrijfRelatieContact_BedrijfRelatie1_idx` (`BedrijfRelatie_idBedrijfRelatie`),
  KEY `fk_BedrijfRelatieContact_Intecedent1_idx` (`Intecedent_idIntecedent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bedrijfrelatiecontact`
--

INSERT INTO `bedrijfrelatiecontact` (`idBedrijfRelatieContact`, `Voorletters`, `Achternaam`, `Geslacht`, `Functie`, `Telefoon`, `EMail`, `BedrijfRelatie_idBedrijfRelatie`, `Intecedent_idIntecedent`) VALUES
(3, 'Peter', 'Gerpot', 'M', 'Weet ik veel', '0', 'a@a.nl', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE IF NOT EXISTS `contract` (
  `idContract` int(11) NOT NULL AUTO_INCREMENT,
  `StartDatum` varchar(45) DEFAULT NULL,
  `UurTarief` double DEFAULT NULL,
  `UurLoon` double DEFAULT NULL,
  `JobFunctie_idJobFunctie` int(11) NOT NULL,
  `BedrijfRelatie_idBedrijfRelatie` int(11) NOT NULL,
  `Uitzendkracht_idUitzendkracht` int(11) NOT NULL,
  `Intecedent_idIntecedent` int(11) NOT NULL,
  PRIMARY KEY (`idContract`),
  KEY `fk_Contract_JobFunctie1_idx` (`JobFunctie_idJobFunctie`),
  KEY `fk_Contract_BedrijfRelatie1_idx` (`BedrijfRelatie_idBedrijfRelatie`),
  KEY `fk_Contract_Uitzendkracht1_idx` (`Uitzendkracht_idUitzendkracht`),
  KEY `fk_Contract_Intecedent1_idx` (`Intecedent_idIntecedent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`idContract`, `StartDatum`, `UurTarief`, `UurLoon`, `JobFunctie_idJobFunctie`, `BedrijfRelatie_idBedrijfRelatie`, `Uitzendkracht_idUitzendkracht`, `Intecedent_idIntecedent`) VALUES
(1, '2013-12-18', 10, 5, 1, 1, 1, 1),
(2, '2014-01-09', 3.5, 2.5, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `intecedent`
--

CREATE TABLE IF NOT EXISTS `intecedent` (
  `idIntecedent` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Adres` varchar(45) DEFAULT NULL,
  `Woonplaats` varchar(45) DEFAULT NULL,
  `Telefoon` varchar(45) DEFAULT NULL,
  `EMail` varchar(45) DEFAULT NULL,
  `Geslacht` varchar(1) DEFAULT NULL,
  `IsBeheerder` tinyint(1) DEFAULT NULL,
  `Vestiging_idVestiging` int(11) NOT NULL,
  PRIMARY KEY (`idIntecedent`),
  KEY `fk_Intecedent_Vestiging_idx` (`Vestiging_idVestiging`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `intecedent`
--

INSERT INTO `intecedent` (`idIntecedent`, `Naam`, `Adres`, `Woonplaats`, `Telefoon`, `EMail`, `Geslacht`, `IsBeheerder`, `Vestiging_idVestiging`) VALUES
(1, 'Olaf', 's', 'a', '2', 'o@o.nl', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobfunctie`
--

CREATE TABLE IF NOT EXISTS `jobfunctie` (
  `idJobFunctie` int(11) NOT NULL AUTO_INCREMENT,
  `AantalPersonen` varchar(45) DEFAULT NULL,
  `StartDatum` date DEFAULT NULL,
  `Uren` int(11) DEFAULT NULL,
  `UurTarief` double DEFAULT NULL,
  `WerkSoort_idWerkSoort` int(11) NOT NULL,
  PRIMARY KEY (`idJobFunctie`),
  KEY `fk_JobFunctie_WerkSoort1_idx` (`WerkSoort_idWerkSoort`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobfunctie`
--

INSERT INTO `jobfunctie` (`idJobFunctie`, `AantalPersonen`, `StartDatum`, `Uren`, `UurTarief`, `WerkSoort_idWerkSoort`) VALUES
(1, '4', '2013-12-19', 100, 3.5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uitzendkracht`
--

CREATE TABLE IF NOT EXISTS `uitzendkracht` (
  `idUitzendkracht` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Geslacht` varchar(1) DEFAULT NULL,
  `GeboorteDatum` date DEFAULT NULL,
  `Adres` varchar(45) DEFAULT NULL,
  `Postcode` varchar(45) DEFAULT NULL,
  `Woonplaats` varchar(45) DEFAULT NULL,
  `Telefoon` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Intecedent_idIntecedent` int(11) NOT NULL,
  `Vestiging_idVestiging` int(11) NOT NULL,
  PRIMARY KEY (`idUitzendkracht`),
  KEY `fk_Uitzendkracht_Intecedent1_idx` (`Intecedent_idIntecedent`),
  KEY `fk_Uitzendkracht_Vestiging1_idx` (`Vestiging_idVestiging`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `uitzendkracht`
--

INSERT INTO `uitzendkracht` (`idUitzendkracht`, `Naam`, `Geslacht`, `GeboorteDatum`, `Adres`, `Postcode`, `Woonplaats`, `Telefoon`, `Email`, `Intecedent_idIntecedent`, `Vestiging_idVestiging`) VALUES
(1, 'Kelvin', 'M', '1976-06-17', 's', 'sw', 's', '32', 'a@a.nl', 1, 1),
(2, 'Arie', 'M', '1984-01-12', 'a', '1', 'a', '0', 'o@a.nl', 1, 1),
(3, 'klnsdvlksndv', 'M', '1975-06-18', 'sdv', '234', 'dv', '23', 'sdvf@fdv.nl', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vestiging`
--

CREATE TABLE IF NOT EXISTS `vestiging` (
  `idVestiging` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Adres` varchar(45) DEFAULT NULL,
  `Postcode` varchar(45) DEFAULT NULL,
  `Woonplaats` varchar(45) DEFAULT NULL,
  `Telefoon` varchar(45) DEFAULT NULL,
  `EMail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idVestiging`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vestiging`
--

INSERT INTO `vestiging` (`idVestiging`, `Naam`, `Adres`, `Postcode`, `Woonplaats`, `Telefoon`, `EMail`) VALUES
(1, 'Utrecht', 'Seringstraat 80', '3551TM', 'Utrecht', '030-2444684', 'olafenhilde@xs4all.nl'),
(2, 'Amsterdam', 'Amsterdamstraat 908', '1010AA', 'Amsterdam', '010-2444684', 'amsterdam@amsterdam.nl');

-- --------------------------------------------------------

--
-- Table structure for table `werkbrief`
--

CREATE TABLE IF NOT EXISTS `werkbrief` (
  `idWerkbrief` int(11) NOT NULL AUTO_INCREMENT,
  `Opmerkingen` varchar(45) DEFAULT NULL,
  `InleverDatum` date DEFAULT NULL,
  `Uitzendkracht_idUitzendkracht` int(11) NOT NULL,
  `Contract_idContract` int(11) NOT NULL,
  PRIMARY KEY (`idWerkbrief`),
  KEY `fk_Werkbrief_Uitzendkracht1_idx` (`Uitzendkracht_idUitzendkracht`),
  KEY `fk_Werkbrief_Contract1_idx` (`Contract_idContract`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `werkbriefregels`
--

CREATE TABLE IF NOT EXISTS `werkbriefregels` (
  `idWerkBriefRegels` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` date DEFAULT NULL,
  `AantalUren` int(11) DEFAULT NULL,
  `WerkBriefRegelscol` varchar(45) DEFAULT NULL,
  `Werkbrief_idWerkbrief` int(11) NOT NULL,
  PRIMARY KEY (`idWerkBriefRegels`),
  KEY `fk_WerkBriefRegels_Werkbrief1_idx` (`Werkbrief_idWerkbrief`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `werksoort`
--

CREATE TABLE IF NOT EXISTS `werksoort` (
  `idWerkSoort` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Omschrijving` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idWerkSoort`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `werksoort`
--

INSERT INTO `werksoort` (`idWerkSoort`, `Naam`, `Omschrijving`) VALUES
(1, 'Test', 'Dit is een test werksoort');

-- --------------------------------------------------------

--
-- Table structure for table `werksoortvoorkeur`
--

CREATE TABLE IF NOT EXISTS `werksoortvoorkeur` (
  `idWerkSoortVoorkeur` int(11) NOT NULL AUTO_INCREMENT,
  `Wens` tinyint(1) DEFAULT NULL,
  `Uren` int(11) DEFAULT NULL,
  `Uitzendkracht_idUitzendkracht` int(11) NOT NULL,
  `WerkSoort_idWerkSoort` int(11) NOT NULL,
  PRIMARY KEY (`idWerkSoortVoorkeur`),
  KEY `fk_WerkSoortVoorkeur_Uitzendkracht1_idx` (`Uitzendkracht_idUitzendkracht`),
  KEY `fk_WerkSoortVoorkeur_WerkSoort1_idx` (`WerkSoort_idWerkSoort`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bedrijfrelatiecontact`
--
ALTER TABLE `bedrijfrelatiecontact`
  ADD CONSTRAINT `fk_BedrijfRelatieContact_BedrijfRelatie1` FOREIGN KEY (`BedrijfRelatie_idBedrijfRelatie`) REFERENCES `bedrijfrelatie` (`idBedrijfRelatie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BedrijfRelatieContact_Intecedent1` FOREIGN KEY (`Intecedent_idIntecedent`) REFERENCES `intecedent` (`idIntecedent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `fk_Contract_BedrijfRelatie1` FOREIGN KEY (`BedrijfRelatie_idBedrijfRelatie`) REFERENCES `bedrijfrelatie` (`idBedrijfRelatie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contract_Intecedent1` FOREIGN KEY (`Intecedent_idIntecedent`) REFERENCES `intecedent` (`idIntecedent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contract_JobFunctie1` FOREIGN KEY (`JobFunctie_idJobFunctie`) REFERENCES `jobfunctie` (`idJobFunctie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contract_Uitzendkracht1` FOREIGN KEY (`Uitzendkracht_idUitzendkracht`) REFERENCES `uitzendkracht` (`idUitzendkracht`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `intecedent`
--
ALTER TABLE `intecedent`
  ADD CONSTRAINT `fk_Intecedent_Vestiging` FOREIGN KEY (`Vestiging_idVestiging`) REFERENCES `vestiging` (`idVestiging`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobfunctie`
--
ALTER TABLE `jobfunctie`
  ADD CONSTRAINT `fk_JobFunctie_WerkSoort1` FOREIGN KEY (`WerkSoort_idWerkSoort`) REFERENCES `werksoort` (`idWerkSoort`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uitzendkracht`
--
ALTER TABLE `uitzendkracht`
  ADD CONSTRAINT `fk_Uitzendkracht_Intecedent1` FOREIGN KEY (`Intecedent_idIntecedent`) REFERENCES `intecedent` (`idIntecedent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Uitzendkracht_Vestiging1` FOREIGN KEY (`Vestiging_idVestiging`) REFERENCES `vestiging` (`idVestiging`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `werkbrief`
--
ALTER TABLE `werkbrief`
  ADD CONSTRAINT `fk_Werkbrief_Contract1` FOREIGN KEY (`Contract_idContract`) REFERENCES `contract` (`idContract`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Werkbrief_Uitzendkracht1` FOREIGN KEY (`Uitzendkracht_idUitzendkracht`) REFERENCES `uitzendkracht` (`idUitzendkracht`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `werkbriefregels`
--
ALTER TABLE `werkbriefregels`
  ADD CONSTRAINT `fk_WerkBriefRegels_Werkbrief1` FOREIGN KEY (`Werkbrief_idWerkbrief`) REFERENCES `werkbrief` (`idWerkbrief`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `werksoortvoorkeur`
--
ALTER TABLE `werksoortvoorkeur`
  ADD CONSTRAINT `fk_WerkSoortVoorkeur_Uitzendkracht1` FOREIGN KEY (`Uitzendkracht_idUitzendkracht`) REFERENCES `uitzendkracht` (`idUitzendkracht`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_WerkSoortVoorkeur_WerkSoort1` FOREIGN KEY (`WerkSoort_idWerkSoort`) REFERENCES `werksoort` (`idWerkSoort`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
