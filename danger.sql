/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danger

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-30 17:00:37
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('15', 'ccccc', '1', 'img/RVtSfb8IessoQtSaTIBHALyLdgyDnnX1XyOz2yDt.jpeg', 'img/f13ZsY69gsGe94dULwR1dRwPocWTb9mTWrTO0wDM.jpeg', 'img/lWpxgWdhWFLuypCP5Z3Ncu05GUdJ0sxnnBGf2EGr.jpeg', 'img/iALSq2lyQs19jK3qlMHD4YV9se51pmdmOXbUOBi3.jpeg', '0', 'img/rULJUIokVlw67IVaSAThuDZoMRdbUsXUAlqwKBLN.jpeg', 'https://github.com/githubXiaosong/fitness-room', '2018-07-30 16:52:28', '2018-07-30 16:52:28');
INSERT INTO `videos` VALUES ('16', 'bbbbbbbbbbbb', '2', 'img/TcTk14EbT9CxwJ6nRGB7UbNFQvDbrswxHv8oVksu.jpeg', 'img/mWXjqvuv9uH0a0GnWX4MHdhmGzUJ8qTALjaCFT0S.jpeg', 'img/2cpv6LUJPrh6reRXZIpWewNLOPHt6x9ysOy7Gm3O.jpeg', 'img/Fdp0vxhjgoJblc8GznDsxEGAOmBaeaCkdfAg9oV3.jpeg', '0', 'img/H6wz2N81vKZkskSd7tuBiG8ssaKD2cYYJdxIShW2.jpeg', 'http://naotu.baidu.com/file/81bbf949f877b4295cf1ca228d652641', '2018-07-30 16:56:49', '2018-07-30 16:56:49');
