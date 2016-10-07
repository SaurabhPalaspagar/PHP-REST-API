CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`ID`)
)
