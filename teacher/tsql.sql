CREATE database IF NOT EXISTS `teacherdb`;
USE `teacherdb`;
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  `tpassword` varchar(50) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tintroduction` varchar(50) NOT NULL,
  `tdata` varchar(25) NOT NULL,

  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=01 DEFAULT CHARSET=utf8;

SELECT * from teachers;
<input type="text" class=txt name="tintroduction"/>