/*
 Navicat Premium Data Transfer

 Source Server         : local xampp
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost:3306
 Source Schema         : assg2_test

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 07/08/2019 14:38:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for state_select
-- ----------------------------
DROP TABLE IF EXISTS `state_select`;
CREATE TABLE `state_select`  (
  `select_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`select_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 85 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for states
-- ----------------------------
DROP TABLE IF EXISTS `states`;
CREATE TABLE `states`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of states
-- ----------------------------
INSERT INTO `states` VALUES (1, 'Johor');
INSERT INTO `states` VALUES (2, 'Melaka');
INSERT INTO `states` VALUES (3, 'Negeri Sembilan');
INSERT INTO `states` VALUES (4, 'Kuala Lumpur');
INSERT INTO `states` VALUES (5, 'Selangor');
INSERT INTO `states` VALUES (6, 'Perak');
INSERT INTO `states` VALUES (7, 'Kedah');
INSERT INTO `states` VALUES (8, 'Pahang');
INSERT INTO `states` VALUES (9, 'Kelantan');
INSERT INTO `states` VALUES (10, 'Terengganu');

SET FOREIGN_KEY_CHECKS = 1;
