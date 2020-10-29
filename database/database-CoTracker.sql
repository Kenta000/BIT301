CREATE DATABASE CoTracker;
use CoTracker;
CREATE TABLE `users` (
  `userID` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `position` varchar(15) DEFAULT NULL,
  `centerID` varchar(10) DEFAULT NULL,
  `patientType` varchar(15) DEFAULT NULL,
  `symptoms` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ;

CREATE TABLE `kits` (
  `kitID` varchar(15) not null,
  `officerID` varchar(15) not null,
  `name` varchar(15) not null,
  `stock` int(11) DEFAULT 0,
  PRIMARY KEY (`KitID`),
  FOREIGN KEY (`officerID`) references `users`(`userID`)
) ;

CREATE TABLE `testcenters` (
  `name` varchar(20) NOT NULL,
  `officerID` varchar(20) NOT NULL,
  `centerID` varchar(10) NOT NULL,
  PRIMARY KEY (`centerID`),
  FOREIGN KEY (`officerID`) references `users`(`userID`)
) ;

CREATE TABLE `tests` (
  `testID` varchar(10) NOT NULL,
  `patientID` varchar(15) NOT NULL,
  `testerID` varchar(15) NOT NULL,
  `testDate` date NOT NULL,
  `resultDate` date DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  FOREIGN KEY (`patientID`) references `users`(`userID`),
  FOREIGN KEY (`testerID`) references `users`(`userID`),
  PRIMARY KEY (`testID`)
) ;
INSERT INTO `users` VALUES ("U001","manager","manager","manager","Manager",NULL,NULL,NULL);
