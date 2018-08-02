/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danger

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-02 23:21:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '类型1', '2018-07-27 09:36:38', '2018-07-27 09:36:41', '0');
INSERT INTO `categories` VALUES ('2', '类型2', '2018-07-27 09:36:42', '2018-07-27 09:36:43', '0');

-- ----------------------------
-- Table structure for `videos`
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2550) CHARACTER SET utf8 NOT NULL,
  `pop_num` int(10) DEFAULT '0',
  `category_id` int(11) unsigned DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0:上架  1:下架',
  `cover_uri` varchar(2550) DEFAULT NULL,
  `video_uri` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `desc` varchar(2550) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('19', '123132', '0', '1', '0', 'img/GzYEznjMXIumzT1NL8A6ocWXyh6bWVluzVJiLpWX.jpeg', 'http://www.xiaoheju.com/fiml/44360.html', '2018-08-02 23:00:15', '2018-08-02 23:00:15', 'http://www.xiaoheju.com/fiml/44360.htmlhttp://www.xiaoheju.com/fiml/44360.html');
