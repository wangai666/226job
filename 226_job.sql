/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 226_job

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-02-02 18:51:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 226_job
-- ----------------------------
DROP TABLE IF EXISTS `226_job`;
CREATE TABLE `226_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL DEFAULT '',
  `job_name` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `work_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0全职，1实习，2兼职',
  `job_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0进行中，1已结束',
  `job_edu` varchar(20) NOT NULL,
  `job_welf` varchar(100) NOT NULL,
  `job_number` int(3) NOT NULL,
  `job_desc` text NOT NULL,
  `job_req` text NOT NULL,
  `job_email` varchar(100) NOT NULL,
  `click` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 226_job
-- ----------------------------
