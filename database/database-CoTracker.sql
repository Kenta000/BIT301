CREATE DATABASE CoTracker;
use CoTracker;
CREATE TABLE `kits` (
  `officerID` varchar(15) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ;

CREATE TABLE `officers` (
  `officerID` varchar(10) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `position` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`officerID`)
) ;

CREATE TABLE `patients` (
  `patientID` varchar(15) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `patientType` varchar(15) DEFAULT NULL,
  `symptoms` varchar(40) DEFAULT NULL
) ;

CREATE TABLE `testcenters` (
  `name` varchar(20) DEFAULT NULL,
  `officerID` varchar(20) DEFAULT NULL,
  `centerID` varchar(10) NOT NULL,
  PRIMARY KEY (`centerID`)
) ;

CREATE TABLE `tests` (
  `testID` varchar(10) DEFAULT NULL,
  `patientID` varchar(15) DEFAULT NULL,
  `testerID` varchar(15) DEFAULT NULL,
  `testDate` date DEFAULT NULL,
  `resultDate` date DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL
) ;
