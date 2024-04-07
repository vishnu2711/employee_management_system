
CREATE DATABASE `ezyro_36322541_project_edm`;
USE `ezyro_36322541_project_edm`;


CREATE TABLE IF NOT EXISTS `employee` (
   `EmpID` varchar(20) NOT NULL,
  `aadharno` varchar(12) NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `address` longtext NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `qualification` varchar(18) NOT NULL,
  `emprole` varchar(20) NOT NULL,
  PRIMARY KEY (`EmpID`)
) ;


INSERT INTO `employee` (`EmpID`,`aadharno`, `name`, `fathername`, `address`, `country`, `city`, `state`, `email`, `mobile`, `qualification`, `emprole`) VALUES
('145','292591345037', 'Dhanamjay', 'Rama', 'tirupati', 'India', 'Chittoor', 'Andhra Pradesh', 'kanipakkamdhanamjay@gmail.com', '8919451934', 'M.Tech', 'Trainer');
