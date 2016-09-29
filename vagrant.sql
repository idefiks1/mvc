/*
Navicat MySQL Data Transfer

Source Server         : vagrant
Source Server Version : 50552
Source Host           : 127.0.0.1:3306
Source Database       : vagrant

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2016-09-29 09:40:11
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('10', '72', 'Ðåãóëÿ&#769;ðíûå âûðàæå&#769;íèÿ (àíãë. regular expressions) — ôîðìàëüíûé ÿçûê ïîèñêà è îñóùåñòâëåíèÿ ìàíèïóëÿöèé ñ ïîäñòðîêàìè â òåêñòå, îñíîâàííûé íà èñïîëüçîâàíèè ìåòàñèìâîëîâ (ñèìâîëîâ-äæîêåðîâ, àíãë. wildcard characters). Äëÿ ïîèñêà èñïîëüçóåòñÿ ñòðîêà-îáðàçåö (àíãë. pattern, ïî-ðóññêè å¸ ÷àñòî íàçûâàþò «øàáëîíîì», «ìàñêîé»)', '2016-09-28');
INSERT INTO `comments` VALUES ('11', '72', 'Ðåãóëÿðíûå âûðàæåíèÿ ïðîèçâåëè ïðîðûâ â ýëåêòðîííîé îáðàáîòêå òåêñòîâ â êîíöå XX âåêà.[èñòî÷íèê íå óêàçàí 292 äíÿ] Íàáîð óòèëèò (âêëþ÷àÿ ðåäàêòîð sed è ôèëüòð grep), ïîñòàâëÿåìûõ â äèñòðèáóòèâàõ UNIX, îäíèì èç ïåðâûõ ñïîñîáñòâîâàë ïîïóëÿðèçàöèè ðåãóëÿðíûõ âûðàæåíèé äëÿ îáðàáîòêè òåêñòîâ. Ìíîãèå ñîâðåìåííûå ÿçûêè ïðîãðàììèðîâàíèÿ èìåþò âñòðîåííóþ ïîääåðæêó ðåãóëÿðíûõ âûðàæåíèé. Ñðåäè íèõ ActionScript, Perl, Java[1],PHP, JavaScript, ÿçûêè ïëàòôîðìû .NET Framework[2], Python, Tcl, Ruby, Lua, Gambas', '2016-09-28');
INSERT INTO `comments` VALUES ('12', '72', 'Åñëè ðåãóëÿðíîå âûðàæåíèå èñïîëüçóåòñÿ äëÿ çàìåíû òåêñòà, òî ðåçóëüòàòîì ðàáîòû áóäåò íîâàÿ òåêñòîâàÿ ñòðîêà, ïðåäñòàâëÿþùàÿ èç ñåáÿ èñõîäíûé òåêñò, èç êîòîðîãî óäàëåíû íàéäåííûå ïîäñòðîêè (ñîïîñòàâëåííûå îáðàçöó), à âìåñòî íèõ ïîäñòàâëåíû ñòðîêè çàìåíû (âîçìîæíî, ìîäèôèöèðîâàííûå çàïîìíåííûìè ïðè ðàçáîðå ãðóïïàìè ñèìâîëîâ èç èñõîäíîãî òåêñòà). ×àñòíûì ñëó÷àåì ìîäèôèêàöèè òåêñòà ÿâëÿåòñÿ óäàëåíèå âñåõ âõîæäåíèé íàéäåííîãî îáðàçöà — äëÿ ÷åãî ñòðîêà çàìåíû óêàçûâàåòñÿ ïóñòîé.', '2016-09-28');

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('71', 'idefiks', 'kostaev_denis@mail.ru', '5f99a035e43fe0590188ea4e56c50862', '6c29793a140a811d0c45ce03c1c93a28', '/data/img/71.jpg', '1');
INSERT INTO `users` VALUES ('72', 'admin', 'idefiks1@gmail.com', '5f99a035e43fe0590188ea4e56c50862', '8e82ab7243b7c66d768f1b8ce1c967eb', '/data/img/72.jpg', '1');
