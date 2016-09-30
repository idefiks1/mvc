/*
Navicat MySQL Data Transfer

Source Server         : vagrant
Source Server Version : 50552
Source Host           : 127.0.0.1:3306
Source Database       : vagrant

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2016-09-30 15:57:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(4) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('19', '71', 'My comment', 'В некоторых реализациях квантификаторам в регулярных выражениях соответствует максимально длинная строка из возможных (квантификаторы являются жадными, англ. greedy). Это может оказаться значительной проблемой. Например, часто ожидают, что выражение (<.*>) найдёт в тексте теги HTML. Однако если в тексте есть более одного HTML-тега, то этому выражению соответствует целиком строка, содержащая множество тегов.', '2016-09-29');
INSERT INTO `comments` VALUES ('21', '80', 'Answer', 'Также общей проблемой как жадных, так и ленивых выражений являются точки возврата для перебора вариантов выражения. Точки ставятся после каждой итерации квантификатора. Если интерпретатор не нашёл соответствия после квантификатора, то он начинает возвращаться по всем установленным точкам, пересчитывая оттуда выражение по-другому.', '2016-09-29');
INSERT INTO `comments` VALUES ('102', '86', 'Answer', 'My answer...', '2016-09-30');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `hash` varchar(32) NOT NULL,
  `img` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('71', 'idefiks', 'kostaev_denis@mail.ru', '5f99a035e43fe0590188ea4e56c50862', '6c29793a140a811d0c45ce03c1c93a28', '/data/img/71.jpg', '1');
INSERT INTO `users` VALUES ('80', 'admin', 'idefiks1@gmail.com', '5f99a035e43fe0590188ea4e56c50862', '8b6dd7db9af49e67306feb59a8bdc52c', '/data/img/80.jpg', '1');
INSERT INTO `users` VALUES ('86', 'test', 'idefiks1@rambler.ru', '5f99a035e43fe0590188ea4e56c50862', '0d7de1aca9299fe63f3e0041f02638a3', '/data/img/86.jpg', '1');
