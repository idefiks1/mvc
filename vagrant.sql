/*
Navicat MySQL Data Transfer

Source Server         : vagrant
Source Server Version : 50552
Source Host           : 127.0.0.1:3306
Source Database       : vagrant

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2016-09-29 11:39:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(4) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('15', '74', 'Если регулярное выражение используется для замены текста, то результатом работы будет новая текстовая строка, представляющая из себя исходный текст, из которого удалены найденные подстроки (сопоставленные образцу), а вместо них подставлены строки замены (возможно, модифицированные запомненными при разборе группами символов из исходного текста). Частным случаем модификации текста является удаление всех вхождений найденного образца — для чего строка замены указывается пустой.', '2016-09-29');
INSERT INTO `comments` VALUES ('16', '74', 'Регуля́рные выраже́ния (англ. regular expressions) — формальный язык поиска и осуществления манипуляций с подстроками в тексте, основанный на использовании метасимволов (символов-джокеров, англ. wildcard characters). Для поиска используется строка-образец (англ. pattern, по-русски её часто называют «шаблоном», «маской»), состоящая из символов и метасимволов и задающая правило поиска. Для манипуляций с текстом дополнительно задаётся строка замены, которая также может содержать в себе специальные ', '2016-09-29');
INSERT INTO `comments` VALUES ('17', '74', 'Регулярные выражения произвели прорыв в электронной обработке текстов в конце XX века.[источник не указан 292 дня] Набор утилит (включая редактор sed и фильтр grep), поставляемых в дистрибутивах UNIX, одним из первых способствовал популяризации регулярных выражений для обработки текстов. Многие современные языки программирования имеют встроенную поддержку регулярных выражений. Среди них ActionScript, Perl, Java[1],PHP, JavaScript, языки платформы .NET Framework[2], Python, Tcl, Ruby, Lua, Gambas', '2016-09-29');

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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('71', 'idefiks', 'kostaev_denis@mail.ru', '5f99a035e43fe0590188ea4e56c50862', '6c29793a140a811d0c45ce03c1c93a28', '/data/img/71.jpg', '1');
INSERT INTO `users` VALUES ('72', 'admin', 'idefiks1@gmail.com', '5f99a035e43fe0590188ea4e56c50862', '8e82ab7243b7c66d768f1b8ce1c967eb', '/data/img/72.jpg', '1');
INSERT INTO `users` VALUES ('74', 'test', 'idefiks1@rambler.ru', '5f99a035e43fe0590188ea4e56c50862', '884d247c6f65a96a7da4d1105d584ddd', '/data/img/74.jpg', '1');
