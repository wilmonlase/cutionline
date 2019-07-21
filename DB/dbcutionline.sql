/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100315
 Source Host           : localhost:3306
 Source Schema         : dbcutionline

 Target Server Type    : MySQL
 Target Server Version : 100315
 File Encoding         : 65001

 Date: 21/07/2019 11:38:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dbcuti
-- ----------------------------
DROP TABLE IF EXISTS `dbcuti`;
CREATE TABLE `dbcuti`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_cuti` int(1) NULL DEFAULT NULL,
  `jenis_cuti_id` int(2) UNSIGNED NOT NULL,
  `cuti_di` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `negara_cuti` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lama_cuti` int(3) NULL DEFAULT NULL,
  `mulai_cuti_tanggal` date NULL DEFAULT NULL,
  `selesai_cuti_tanggal` date NULL DEFAULT NULL,
  `tujuan_cuti` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_cuti` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nip_atasan` varbinary(18) NOT NULL,
  `alasan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dbcuti
-- ----------------------------
INSERT INTO `dbcuti` VALUES (1, '198407172009031013', 1, 1, 'dalam_negeri', '', 5, '2019-07-21', '2019-07-25', NULL, 'Jl. Rumah', 0x313937313034323032303036303531303031, NULL, '2019-07-22', NULL);
INSERT INTO `dbcuti` VALUES (2, '198407172009031013', 1, 1, 'dalam_negeri', '', 5, '2019-07-21', '2019-07-25', NULL, 'Jl. Rumah', 0x313937313034323032303036303531303031, NULL, '2019-07-21', NULL);
INSERT INTO `dbcuti` VALUES (3, '198810022011011001', 1, 1, 'dalam_negeri', '', 5, '2019-07-21', '2019-07-25', NULL, 'Jl. Rumah baru', 0x313938343037313732303039303331303133, NULL, '2019-07-22', NULL);
INSERT INTO `dbcuti` VALUES (4, '198810022011011001', 1, 1, 'dalam_negeri', '', 5, '2019-07-21', '2019-07-25', NULL, 'Jl. Rumah baru Rumah baru Rumah baru Rumah baru Rumah baru Rumah baru', 0x313938343037313732303039303331303133, NULL, '2019-07-21', NULL);

-- ----------------------------
-- Table structure for jenis_cuti
-- ----------------------------
DROP TABLE IF EXISTS `jenis_cuti`;
CREATE TABLE `jenis_cuti`  (
  `id` int(1) NOT NULL,
  `nama_jenis_cuti` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_cuti
-- ----------------------------
INSERT INTO `jenis_cuti` VALUES (1, 'Cuti Tahunan');

SET FOREIGN_KEY_CHECKS = 1;
