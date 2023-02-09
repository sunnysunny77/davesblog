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

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(1, 'Lorem ipsum', 'Aliquam purus ipsum, imperdiet sed mi sit amet, aliquet aliquam lorem.', 'Pellentesque quis lectus sollicitudin, mattis tellus aliquet, condimentum dui. Aenean non elit a dolor sollicitudin tincidunt vel sed dolor. Ut auctor augue ligula, vitae malesuada ex ultrices nec. Nunc non lorem ut eros laoreet auctor. Aenean eget mi at ex semper malesuada ut at nunc. Praesent sit amet leo ut erat consectetur blandit. Morbi sodales lobortis mi, nec placerat libero. Nulla malesuada cursus condimentum. Maecenas vitae suscipit turpis. Mauris nulla metus, malesuada ac egestas sit amet, aliquet quis est. Quisque vestibulum neque quis odio convallis, sit amet ornare tellus dapibus. Duis id arcu finibus quam lobortis rutrum ut at eros. Pellentesque vitae porttitor neque.

Morbi at ante turpis. Praesent varius lorem et enim fringilla, et placerat ligula molestie. Cras nec pharetra turpis, vitae porttitor odio. Donec vehicula tristique blandit. Morbi pretium augue nisl, sed varius tortor venenatis sed. Etiam et finibus est, vel tempus tellus. Fusce cursus dapibus leo posuere suscipit. Nulla lobortis consectetur arcu vitae dignissim. Sed pulvinar velit metus, id rutrum neque rhoncus sed. Praesent vel molestie augue. Integer vitae eleifend felis. Etiam sed egestas dolor. Quisque leo nulla, fringilla ut sodales eu, pharetra eu est. Suspendisse hendrerit tellus tempus luctus laoreet.

Sed porta nec nibh a pulvinar. Duis ullamcorper lobortis ligula vel dictum. Nam pulvinar lectus nec condimentum auctor. Nam eget luctus eros. Nam leo elit, rutrum sit amet sollicitudin vel, bibendum quis leo. Nulla condimentum felis sed neque elementum molestie. Sed sit amet facilisis turpis. Aenean magna est, semper et volutpat id, ultricies a augue. Phasellus eleifend erat quis arcu elementum, a tincidunt neque sodales. Sed neque libero, efficitur sed purus et, varius euismod ligula. Maecenas et sodales risus. Aenean sit amet arcu semper, convallis magna ac, efficitur metus. Mauris consectetur, ipsum ac consectetur dignissim, justo est consequat massa, vitae efficitur elit nisl sed leo. Nulla ultricies, eros at feugiat vulputate, risus leo ornare elit, a malesuada diam ipsum ac purus.', '2013-05-29 00:00:00'),
(2, 'Lorem ipsum', 'Aliquam purus ipsum, imperdiet sed mi sit amet, aliquet aliquam lorem.', 'Pellentesque quis lectus sollicitudin, mattis tellus aliquet, condimentum dui. Aenean non elit a dolor sollicitudin tincidunt vel sed dolor. Ut auctor augue ligula, vitae malesuada ex ultrices nec. Nunc non lorem ut eros laoreet auctor. Aenean eget mi at ex semper malesuada ut at nunc. Praesent sit amet leo ut erat consectetur blandit. Morbi sodales lobortis mi, nec placerat libero. Nulla malesuada cursus condimentum. Maecenas vitae suscipit turpis. Mauris nulla metus, malesuada ac egestas sit amet, aliquet quis est. Quisque vestibulum neque quis odio convallis, sit amet ornare tellus dapibus. Duis id arcu finibus quam lobortis rutrum ut at eros. Pellentesque vitae porttitor neque.

Morbi at ante turpis. Praesent varius lorem et enim fringilla, et placerat ligula molestie. Cras nec pharetra turpis, vitae porttitor odio. Donec vehicula tristique blandit. Morbi pretium augue nisl, sed varius tortor venenatis sed. Etiam et finibus est, vel tempus tellus. Fusce cursus dapibus leo posuere suscipit. Nulla lobortis consectetur arcu vitae dignissim. Sed pulvinar velit metus, id rutrum neque rhoncus sed. Praesent vel molestie augue. Integer vitae eleifend felis. Etiam sed egestas dolor. Quisque leo nulla, fringilla ut sodales eu, pharetra eu est. Suspendisse hendrerit tellus tempus luctus laoreet.

Sed porta nec nibh a pulvinar. Duis ullamcorper lobortis ligula vel dictum. Nam pulvinar lectus nec condimentum auctor. Nam eget luctus eros. Nam leo elit, rutrum sit amet sollicitudin vel, bibendum quis leo. Nulla condimentum felis sed neque elementum molestie. Sed sit amet facilisis turpis. Aenean magna est, semper et volutpat id, ultricies a augue. Phasellus eleifend erat quis arcu elementum, a tincidunt neque sodales. Sed neque libero, efficitur sed purus et, varius euismod ligula. Maecenas et sodales risus. Aenean sit amet arcu semper, convallis magna ac, efficitur metus. Mauris consectetur, ipsum ac consectetur dignissim, justo est consequat massa, vitae efficitur elit nisl sed leo. Nulla ultricies, eros at feugiat vulputate, risus leo ornare elit, a malesuada diam ipsum ac purus.', '2013-05-29 00:00:00'),
(3, 'Lorem ipsum', 'Aliquam purus ipsum, imperdiet sed mi sit amet, aliquet aliquam lorem.', 'Pellentesque quis lectus sollicitudin, mattis tellus aliquet, condimentum dui. Aenean non elit a dolor sollicitudin tincidunt vel sed dolor. Ut auctor augue ligula, vitae malesuada ex ultrices nec. Nunc non lorem ut eros laoreet auctor. Aenean eget mi at ex semper malesuada ut at nunc. Praesent sit amet leo ut erat consectetur blandit. Morbi sodales lobortis mi, nec placerat libero. Nulla malesuada cursus condimentum. Maecenas vitae suscipit turpis. Mauris nulla metus, malesuada ac egestas sit amet, aliquet quis est. Quisque vestibulum neque quis odio convallis, sit amet ornare tellus dapibus. Duis id arcu finibus quam lobortis rutrum ut at eros. Pellentesque vitae porttitor neque.

Morbi at ante turpis. Praesent varius lorem et enim fringilla, et placerat ligula molestie. Cras nec pharetra turpis, vitae porttitor odio. Donec vehicula tristique blandit. Morbi pretium augue nisl, sed varius tortor venenatis sed. Etiam et finibus est, vel tempus tellus. Fusce cursus dapibus leo posuere suscipit. Nulla lobortis consectetur arcu vitae dignissim. Sed pulvinar velit metus, id rutrum neque rhoncus sed. Praesent vel molestie augue. Integer vitae eleifend felis. Etiam sed egestas dolor. Quisque leo nulla, fringilla ut sodales eu, pharetra eu est. Suspendisse hendrerit tellus tempus luctus laoreet.

Sed porta nec nibh a pulvinar. Duis ullamcorper lobortis ligula vel dictum. Nam pulvinar lectus nec condimentum auctor. Nam eget luctus eros. Nam leo elit, rutrum sit amet sollicitudin vel, bibendum quis leo. Nulla condimentum felis sed neque elementum molestie. Sed sit amet facilisis turpis. Aenean magna est, semper et volutpat id, ultricies a augue. Phasellus eleifend erat quis arcu elementum, a tincidunt neque sodales. Sed neque libero, efficitur sed purus et, varius euismod ligula. Maecenas et sodales risus. Aenean sit amet arcu semper, convallis magna ac, efficitur metus. Mauris consectetur, ipsum ac consectetur dignissim, justo est consequat massa, vitae efficitur elit nisl sed leo. Nulla ultricies, eros at feugiat vulputate, risus leo ornare elit, a malesuada diam ipsum ac purus.', '2013-05-29 00:00:00'),
(4, 'Lorem ipsum', 'Aliquam purus ipsum, imperdiet sed mi sit amet, aliquet aliquam lorem.', 'Pellentesque quis lectus sollicitudin, mattis tellus aliquet, condimentum dui. Aenean non elit a dolor sollicitudin tincidunt vel sed dolor. Ut auctor augue ligula, vitae malesuada ex ultrices nec. Nunc non lorem ut eros laoreet auctor. Aenean eget mi at ex semper malesuada ut at nunc. Praesent sit amet leo ut erat consectetur blandit. Morbi sodales lobortis mi, nec placerat libero. Nulla malesuada cursus condimentum. Maecenas vitae suscipit turpis. Mauris nulla metus, malesuada ac egestas sit amet, aliquet quis est. Quisque vestibulum neque quis odio convallis, sit amet ornare tellus dapibus. Duis id arcu finibus quam lobortis rutrum ut at eros. Pellentesque vitae porttitor neque.

Morbi at ante turpis. Praesent varius lorem et enim fringilla, et placerat ligula molestie. Cras nec pharetra turpis, vitae porttitor odio. Donec vehicula tristique blandit. Morbi pretium augue nisl, sed varius tortor venenatis sed. Etiam et finibus est, vel tempus tellus. Fusce cursus dapibus leo posuere suscipit. Nulla lobortis consectetur arcu vitae dignissim. Sed pulvinar velit metus, id rutrum neque rhoncus sed. Praesent vel molestie augue. Integer vitae eleifend felis. Etiam sed egestas dolor. Quisque leo nulla, fringilla ut sodales eu, pharetra eu est. Suspendisse hendrerit tellus tempus luctus laoreet.

Sed porta nec nibh a pulvinar. Duis ullamcorper lobortis ligula vel dictum. Nam pulvinar lectus nec condimentum auctor. Nam eget luctus eros. Nam leo elit, rutrum sit amet sollicitudin vel, bibendum quis leo. Nulla condimentum felis sed neque elementum molestie. Sed sit amet facilisis turpis. Aenean magna est, semper et volutpat id, ultricies a augue. Phasellus eleifend erat quis arcu elementum, a tincidunt neque sodales. Sed neque libero, efficitur sed purus et, varius euismod ligula. Maecenas et sodales risus. Aenean sit amet arcu semper, convallis magna ac, efficitur metus. Mauris consectetur, ipsum ac consectetur dignissim, justo est consequat massa, vitae efficitur elit nisl sed leo. Nulla ultricies, eros at feugiat vulputate, risus leo ornare elit, a malesuada diam ipsum ac purus.', '2013-05-29 00:00:00');