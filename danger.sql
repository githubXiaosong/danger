/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danger

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-30 08:48:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '类型1', '2018-07-27 09:36:38', '2018-07-27 09:36:41');
INSERT INTO `categories` VALUES ('2', '类型2', '2018-07-27 09:36:42', '2018-07-27 09:36:43');
INSERT INTO `categories` VALUES ('3', '类型3', '2018-07-27 09:36:42', '2018-07-27 09:36:42');
INSERT INTO `categories` VALUES ('4', '类型4', '2018-07-27 09:36:45', '2018-07-27 09:36:46');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2550) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0:上架  1:下架',
  `cover_uri` varchar(2550) DEFAULT NULL,
  `video_uri` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('1', '第一个测试', '1', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cnxiaosong1234.cnxiaosong1234.cnxiaosong1234.cnxiaosong1234.cnxiaosong1234.cnxiaosong1234.cn', '2018-07-27 10:27:17', '2018-07-27 10:27:17');
INSERT INTO `videos` VALUES ('2', '第二个测试', '1', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:01', '2018-07-27 10:21:01');
INSERT INTO `videos` VALUES ('3', '第三个测试', '1', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:02', '2018-07-27 10:21:02');
INSERT INTO `videos` VALUES ('4', '第四个测试', '1', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:05', '2018-07-27 10:21:05');
INSERT INTO `videos` VALUES ('5', '第五个测试', '2', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:06', '2018-07-27 10:21:06');
INSERT INTO `videos` VALUES ('6', '第六个测试', '2', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:07', '2018-07-27 10:21:07');
INSERT INTO `videos` VALUES ('7', '第七个测试', '2', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:08', '2018-07-27 10:21:08');
INSERT INTO `videos` VALUES ('8', '第八个测试', '2', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:09', '2018-07-27 10:21:09');
INSERT INTO `videos` VALUES ('9', '第九个测试', '3', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:10', '2018-07-27 10:21:10');
INSERT INTO `videos` VALUES ('10', '第十个测试', '3', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '0', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:11', '2018-07-27 10:21:11');
INSERT INTO `videos` VALUES ('11', '第11个测试', '3', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '1', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:12', '2018-07-27 10:21:12');
INSERT INTO `videos` VALUES ('12', '第12个测试', '4', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '1', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:12', '2018-07-27 10:21:12');
INSERT INTO `videos` VALUES ('13', '第13个测试', '4', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '1', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:13', '2018-07-27 10:21:13');
INSERT INTO `videos` VALUES ('14', '第14个测试', '4', '/asstes/img/Penguins.jpg', '/asstes/img/Desert.jpg', '/asstes/img/Hydrangeas.jpg', '/asstes/img/Jellyfish.jpg', '1', 'http://img.zcool.cn/community/0117e2571b8b246ac72538120dd8a4.jpg@1280w_1l_2o_100sh.jpg', 'xiaosong1234.cn', '2018-07-27 10:21:13', '2018-07-27 10:21:13');
