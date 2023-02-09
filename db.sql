CREATE DATABASE databasedb;

USE databasedb;

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
   PRIMARY KEY (`memberID`)
);

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com');

CREATE TABLE `mimetypes` ( 
    mimetype_id TINYINT UNSIGNED AUTO_INCREMENT, 
    mimetype VARCHAR(50) NOT NULL UNIQUE,
    PRIMARY KEY (`mimetype_id`)
);

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text DEFAULT NULL,
  `postCont` text DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `filename` VARCHAR(255) DEFAULT NULL,
  `filedata` MEDIUMBLOB,
  `mimetype_id` TINYINT UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`postID`),
  FOREIGN KEY (`mimetype_id`) REFERENCES `mimetypes`(`mimetype_id`) 
);