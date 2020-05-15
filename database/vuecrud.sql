/*
 Navicat Premium Data Transfer

 Source Server         : laracms_db
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3307
 Source Schema         : vuecrud

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 15/05/2020 20:10:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Slimmy', 'Slimmy@gmail.com', 879987666);
INSERT INTO `users` VALUES (2, 'Mohimmy', 'mohim@mohim.com', 689456464);
INSERT INTO `users` VALUES (6, 'VivaHealt', 'viva@gmail.com', 2147483647);
INSERT INTO `users` VALUES (7, 'Healty Care', 'care@gmail.com', 2147483647);

SET FOREIGN_KEY_CHECKS = 1;
