CREATE database IF NOT EXISTS `teacherdb`;
USE `teacherdb`;
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  `tpassword` varchar(50) NOT NULL,
  `tsex` int(1) NOT NULL,
  `tmajor` varchar(50) NOT NULL,
  `tinterest` varchar(50) NOT NULL,
  `toffice` varchar(50) NOT NULL,
  `tphone` varchar(20) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tachieve` text(20000) NOT NULL,
  `tbasicinf` text(20000) NOT NULL,
  `tdata` varchar(25) NOT NULL,
  `tsv` varchar(1000) ,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=01 DEFAULT CHARSET=utf8;
# 目前就职，所在学科


SELECT * from teachers;
<input type="text" class=txt name="tintroduction"/>
$tacnum = $_POST["tacnum"];
$tname = $_POST["tname"];
$tpassword = $_POST["tpassword"];
$tsex = $_POST["tsex"];
$tmajor = $_POST["tmajor"];
$toffice = $_POST["toffice"];
$tphone = $_POST["tphone"];
$temail = $_POST["temail"];
$tachieve = $_POST["tachieve"];

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=01 DEFAULT CHARSET=utf8;



INSERT INTO `students` (  `name` )
                       VALUES
                       (  "fssdq" );

  UPDATE `teachers`  SET `tsv` = "01 23 02 16 01 8 02 14 "
  WHERE `tid` = 1