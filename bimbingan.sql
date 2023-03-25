/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:8889
 Source Schema         : bimbingan

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 25/03/2023 17:51:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bimbingan_kkl_individu
-- ----------------------------
DROP TABLE IF EXISTS `bimbingan_kkl_individu`;
CREATE TABLE `bimbingan_kkl_individu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kkl` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bimbingan_kkl_individu
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_kkl_kelompok
-- ----------------------------
DROP TABLE IF EXISTS `bimbingan_kkl_kelompok`;
CREATE TABLE `bimbingan_kkl_kelompok` (
  `id` int(11) NOT NULL,
  `id_kelompok_kkl` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_kategori` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_kelompok_kkl` (`id_kelompok_kkl`),
  KEY `fk_id_user` (`id_user`),
  CONSTRAINT `fk_id_kelompok_kkl` FOREIGN KEY (`id_kelompok_kkl`) REFERENCES `kelompok_kkl` (`id`),
  CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bimbingan_kkl_kelompok
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_kp
-- ----------------------------
DROP TABLE IF EXISTS `bimbingan_kp`;
CREATE TABLE `bimbingan_kp` (
  `id` bigint(20) NOT NULL,
  `id_kp` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_user` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_kp` (`id_kp`),
  CONSTRAINT `fk_id_kp` FOREIGN KEY (`id_kp`) REFERENCES `kerja_praktek` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bimbingan_kp
-- ----------------------------
BEGIN;
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (56, 36, 'bimbingan 1', NULL, NULL, '2023-01-02 23:07:40', 5);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (57, 36, 'balasan bimbingan 1', NULL, NULL, '2023-01-02 23:11:43', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (58, 36, 'balasan bimbingan 2', NULL, NULL, '2023-01-03 22:53:05', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (59, 36, 'balasan bimbingan 2', NULL, NULL, '2023-01-04 13:15:41', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (60, 36, 'balasan bimbingan 3', NULL, NULL, '2023-01-05 13:16:11', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (61, 36, 'balasan bimbingan 4', NULL, NULL, '2023-01-06 13:23:59', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (62, 36, 'balasan bimbingan 5', NULL, NULL, '2023-01-07 13:24:06', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (63, 36, 'balasan bimbingan 6', NULL, NULL, '2023-01-08 13:24:14', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (64, 36, 'balasan bimbingan 7', NULL, NULL, '2023-01-09 13:24:20', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (65, 36, 'balasan bimbingan 8', NULL, NULL, '2023-01-10 13:24:27', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (66, 36, 'balasan bimbingan 9', NULL, NULL, '2023-01-11 13:24:33', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (67, 36, 'balasan bimbingan 10', NULL, NULL, '2023-01-12 13:24:41', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (70, 36, 'balasan bimbingan 11', NULL, NULL, '2023-01-13 22:46:57', 6);
INSERT INTO `bimbingan_kp` (`id`, `id_kp`, `catatan`, `filename`, `image`, `date`, `id_user`) VALUES (71, 36, 'bimbingan 12', 'SK_Kontrak_1_Jan_s_d__31_Des_20121.pdf', 'files/kerjapraktek/SK_Kontrak_1_Jan_s_d__31_Des_20121.pdf', '2023-01-04 23:00:00', 5);
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `bimbingan_skripsi`;
CREATE TABLE `bimbingan_skripsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skripsi` int(11) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bimbingan_skripsi
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `data` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
BEGIN;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('17knvfuu7140mgfpd8r4ecloq0uissth', '127.0.0.1', 1679739179, '__ci_last_regenerate|i:1679739179;users_groups|a:0:{}functions_privileges|a:0:{}id_user|s:1:\"5\";username|s:8:\"12201766\";group_id|s:1:\"5\";nama|s:14:\"Agus Kresnanto\";user_privileges|a:35:{s:1:\"#\";s:3:\"116\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:32:\"bimbingan/kkl/bimbingan_individu\";s:3:\"165\";s:29:\"bimbingan/kkl/insert_individu\";s:3:\"166\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/insert\";s:3:\"121\";s:29:\"bimbingan/kerjapraktek/lanjut\";s:3:\"127\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/insert\";s:3:\"137\";s:24:\"bimbingan/skripsi/lanjut\";s:3:\"143\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:10:\"daftar/kkl\";s:3:\"155\";s:17:\"daftar/kkl/insert\";s:3:\"156\";s:18:\"daftar/kkl/success\";s:3:\"158\";s:17:\"daftar/kkl/update\";s:3:\"157\";s:14:\"daftar/skripsi\";s:3:\"130\";s:21:\"daftar/skripsi/insert\";s:3:\"131\";s:22:\"daftar/skripsi/success\";s:3:\"134\";s:21:\"daftar/skripsi/update\";s:3:\"132\";s:9:\"dashboard\";s:3:\"115\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/delete\";s:3:\"201\";s:13:\"upload/insert\";s:3:\"199\";s:13:\"upload/update\";s:3:\"200\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4ljcpui0as9b9sff6ueqpsloeh3d0420', '127.0.0.1', 1679739791, '__ci_last_regenerate|i:1679739791;id_user|s:1:\"2\";username|s:5:\"admin\";group_id|s:1:\"1\";nama|s:5:\"admin\";user_privileges|a:72:{s:1:\"#\";s:3:\"168\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:31:\"bimbingan/kerjapraktek/cetak_sk\";s:3:\"129\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/search\";s:3:\"128\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:26:\"bimbingan/skripsi/cetak_sk\";s:3:\"145\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/search\";s:3:\"144\";s:22:\"acc/index_kkl_individu\";s:3:\"182\";s:23:\"acc/result_kkl_individu\";s:3:\"183\";s:22:\"acc/index_kkl_kelompok\";s:3:\"184\";s:23:\"acc/result_kkl_kelompok\";s:3:\"185\";s:3:\"acc\";s:3:\"178\";s:13:\"acc/result_kp\";s:3:\"179\";s:17:\"acc/index_skripsi\";s:3:\"180\";s:18:\"acc/result_skripsi\";s:3:\"181\";s:9:\"functions\";s:2:\"19\";s:16:\"functions/delete\";s:2:\"17\";s:16:\"functions/insert\";s:2:\"18\";s:16:\"functions/update\";s:2:\"16\";s:6:\"groups\";s:1:\"8\";s:23:\"groups/create_privilege\";s:1:\"5\";s:13:\"groups/delete\";s:1:\"4\";s:13:\"groups/insert\";s:1:\"2\";s:13:\"groups/update\";s:1:\"3\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:14:\"daftar/skripsi\";s:3:\"130\";s:5:\"dosen\";s:3:\"151\";s:12:\"dosen/delete\";s:3:\"154\";s:12:\"dosen/insert\";s:3:\"152\";s:12:\"dosen/update\";s:3:\"153\";s:8:\"kelompok\";s:3:\"147\";s:15:\"kelompok/delete\";s:3:\"150\";s:15:\"kelompok/insert\";s:3:\"148\";s:15:\"kelompok/update\";s:3:\"149\";s:28:\"rekap/bimbingan_kkl_individu\";s:3:\"175\";s:25:\"rekap/result_kkl_individu\";s:3:\"176\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:3:\"196\";s:25:\"rekap/result_kkl_kelompok\";s:3:\"197\";s:18:\"rekap/bimbingan_kp\";s:3:\"171\";s:15:\"rekap/result_kp\";s:3:\"172\";s:23:\"rekap/bimbingan_skripsi\";s:3:\"173\";s:20:\"rekap/result_skripsi\";s:3:\"174\";s:5:\"chart\";s:3:\"189\";s:12:\"chart/result\";s:3:\"190\";s:9:\"dashboard\";s:3:\"115\";s:6:\"jadwal\";s:3:\"202\";s:13:\"jadwal/delete\";s:3:\"205\";s:13:\"jadwal/insert\";s:3:\"203\";s:13:\"jadwal/update\";s:3:\"204\";s:10:\"pembayaran\";s:3:\"192\";s:17:\"pembayaran/delete\";s:3:\"195\";s:17:\"pembayaran/insert\";s:3:\"193\";s:17:\"pembayaran/update\";s:3:\"194\";s:5:\"rekap\";s:3:\"187\";s:12:\"rekap/result\";s:3:\"188\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/update\";s:3:\"200\";s:5:\"users\";s:2:\"12\";s:12:\"users/delete\";s:2:\"20\";s:12:\"users/insert\";s:1:\"1\";}users_groups|a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:5:\"Admin\";s:4:\"desc\";s:26:\"Mengatur Perilaku Pengguna\";}}functions_privileges|a:33:{i:0;a:6:{s:4:\"link\";s:14:\"daftar/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"130\";s:4:\"kode\";s:14:\"daftar~skripsi\";s:4:\"icon\";N;}i:1;a:6:{s:4:\"link\";s:5:\"dosen\";s:4:\"desc\";s:5:\"Dosen\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"151\";s:4:\"kode\";s:12:\"master~dosen\";s:4:\"icon\";N;}i:2;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:30:\"<span> Rekap Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"168\";s:4:\"kode\";s:14:\"rekapbimbingan\";s:4:\"icon\";s:26:\"<i class=\"fa fa-list\"></i>\";}i:3;a:6:{s:4:\"link\";s:18:\"rekap/bimbingan_kp\";s:4:\"desc\";s:16:\"Jml Bimbingan KP\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"171\";s:4:\"kode\";s:29:\"rekapbimbingan~jmlbimbingankp\";s:4:\"icon\";N;}i:4;a:6:{s:4:\"link\";s:23:\"rekap/bimbingan_skripsi\";s:4:\"desc\";s:21:\"Jml Bimbingan Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"173\";s:4:\"kode\";s:34:\"rekapbimbingan~jmlbimbinganskripsi\";s:4:\"icon\";N;}i:5;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_individu\";s:4:\"desc\";s:25:\"Jml Bimbingan KKL Indvidu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"175\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklindividu\";s:4:\"icon\";N;}i:6;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Rekap Acc </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"177\";s:4:\"kode\";s:3:\"acc\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:7;a:6:{s:4:\"link\";s:3:\"acc\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"178\";s:4:\"kode\";s:6:\"acc~kp\";s:4:\"icon\";N;}i:8;a:6:{s:4:\"link\";s:17:\"acc/index_skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"180\";s:4:\"kode\";s:11:\"acc~skripsi\";s:4:\"icon\";N;}i:9;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_individu\";s:4:\"desc\";s:12:\"KKL Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"182\";s:4:\"kode\";s:19:\"acc~kkl~kklindividu\";s:4:\"icon\";N;}i:10;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_kelompok\";s:4:\"desc\";s:12:\"KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"184\";s:4:\"kode\";s:19:\"acc~kkl~kklkelompok\";s:4:\"icon\";s:0:\"\";}i:11;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"186\";s:4:\"kode\";s:7:\"acc~kkl\";s:4:\"icon\";N;}i:12;a:6:{s:4:\"link\";s:5:\"rekap\";s:4:\"desc\";s:36:\"<span> Rekap Dosen Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"187\";s:4:\"kode\";s:10:\"rekapdosen\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:13;a:6:{s:4:\"link\";s:5:\"chart\";s:4:\"desc\";s:20:\"<span> Chart </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"189\";s:4:\"kode\";s:5:\"chart\";s:4:\"icon\";s:31:\"<i class=\"fa fa-pie-chart\"></i>\";}i:14;a:6:{s:4:\"link\";s:10:\"pembayaran\";s:4:\"desc\";s:25:\"<span> Pembayaran </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"192\";s:4:\"kode\";s:10:\"pembayaran\";s:4:\"icon\";s:27:\"<i class=\"fa fa-money\"></i>\";}i:15;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:4:\"desc\";s:26:\"Jml Bimbingan KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"196\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklkelompok\";s:4:\"icon\";N;}i:16;a:6:{s:4:\"link\";s:6:\"upload\";s:4:\"desc\";s:20:\"Laporan File Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"198\";s:4:\"kode\";s:11:\"laporanfile\";s:4:\"icon\";N;}i:17;a:6:{s:4:\"link\";s:6:\"jadwal\";s:4:\"desc\";s:6:\"Jadwal\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"202\";s:4:\"kode\";s:6:\"jadwal\";s:4:\"icon\";N;}i:18;a:6:{s:4:\"link\";s:9:\"dashboard\";s:4:\"desc\";s:22:\"<span>Dashboard</span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"115\";s:4:\"kode\";s:9:\"dashboard\";s:4:\"icon\";s:26:\"<i class=\"fa fa-home\"></i>\";}i:19;a:6:{s:4:\"link\";s:6:\"groups\";s:4:\"desc\";s:4:\"Role\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:1:\"8\";s:4:\"kode\";s:8:\"#~groups\";s:4:\"icon\";N;}i:20;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Hak Akses </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"13\";s:4:\"kode\";s:1:\"#\";s:4:\"icon\";s:26:\"<i class=\"fa fa-font\"></i>\";}i:21;a:6:{s:4:\"link\";s:9:\"functions\";s:4:\"desc\";s:8:\"Function\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"19\";s:4:\"kode\";s:11:\"#~functions\";s:4:\"icon\";N;}i:22;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Master </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"146\";s:4:\"kode\";s:6:\"master\";s:4:\"icon\";s:28:\"<i class=\"fa fa-maxcdn\"></i>\";}i:23;a:6:{s:4:\"link\";s:8:\"kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"147\";s:4:\"kode\";s:15:\"master~kelompok\";s:4:\"icon\";N;}i:24;a:6:{s:4:\"link\";s:5:\"users\";s:4:\"desc\";s:19:\"<span> User </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"12\";s:4:\"kode\";s:5:\"users\";s:4:\"icon\";s:26:\"<i class=\"fa fa-user\"></i>\";}i:25;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Daftar </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"116\";s:4:\"kode\";s:6:\"daftar\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:26;a:6:{s:4:\"link\";s:19:\"daftar/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"117\";s:4:\"kode\";s:19:\"daftar~kerjapraktek\";s:4:\"icon\";N;}i:27;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:25:\"<span> Bimbingan </span> \";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"118\";s:4:\"kode\";s:4:\"bimb\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:28;a:6:{s:4:\"link\";s:22:\"bimbingan/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"119\";s:4:\"kode\";s:7:\"bimb~kp\";s:4:\"icon\";N;}i:29;a:6:{s:4:\"link\";s:17:\"bimbingan/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"135\";s:4:\"kode\";s:12:\"bimb~skripsi\";s:4:\"icon\";N;}i:30;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"162\";s:4:\"kode\";s:8:\"bimb~kkl\";s:4:\"icon\";N;}i:31;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/individu\";s:4:\"desc\";s:8:\"Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"163\";s:4:\"kode\";s:17:\"bimb~kkl~individu\";s:4:\"icon\";N;}i:32;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"164\";s:4:\"kode\";s:17:\"bimb~kkl~kelompok\";s:4:\"icon\";N;}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('54k2cu92likpulcf083anfk1hmgbhs15', '127.0.0.1', 1679741413, '__ci_last_regenerate|i:1679741411;id_user|s:1:\"5\";username|s:8:\"12201766\";group_id|s:1:\"5\";nama|s:14:\"Agus Kresnanto\";user_privileges|a:35:{s:1:\"#\";s:3:\"116\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:32:\"bimbingan/kkl/bimbingan_individu\";s:3:\"165\";s:29:\"bimbingan/kkl/insert_individu\";s:3:\"166\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/insert\";s:3:\"121\";s:29:\"bimbingan/kerjapraktek/lanjut\";s:3:\"127\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/insert\";s:3:\"137\";s:24:\"bimbingan/skripsi/lanjut\";s:3:\"143\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:10:\"daftar/kkl\";s:3:\"155\";s:17:\"daftar/kkl/insert\";s:3:\"156\";s:18:\"daftar/kkl/success\";s:3:\"158\";s:17:\"daftar/kkl/update\";s:3:\"157\";s:14:\"daftar/skripsi\";s:3:\"130\";s:21:\"daftar/skripsi/insert\";s:3:\"131\";s:22:\"daftar/skripsi/success\";s:3:\"134\";s:21:\"daftar/skripsi/update\";s:3:\"132\";s:9:\"dashboard\";s:3:\"115\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/delete\";s:3:\"201\";s:13:\"upload/insert\";s:3:\"199\";s:13:\"upload/update\";s:3:\"200\";}users_groups|a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:9:\"Mahasiswa\";s:4:\"desc\";s:9:\"Mahasiswa\";}}functions_privileges|a:12:{i:0;a:6:{s:4:\"link\";s:14:\"daftar/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"130\";s:4:\"kode\";s:14:\"daftar~skripsi\";s:4:\"icon\";N;}i:1;a:6:{s:4:\"link\";s:10:\"daftar/kkl\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"155\";s:4:\"kode\";s:10:\"daftar~kkl\";s:4:\"icon\";N;}i:2;a:6:{s:4:\"link\";s:6:\"upload\";s:4:\"desc\";s:20:\"Laporan File Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"198\";s:4:\"kode\";s:11:\"laporanfile\";s:4:\"icon\";N;}i:3;a:6:{s:4:\"link\";s:9:\"dashboard\";s:4:\"desc\";s:22:\"<span>Dashboard</span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"115\";s:4:\"kode\";s:9:\"dashboard\";s:4:\"icon\";s:26:\"<i class=\"fa fa-home\"></i>\";}i:4;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Daftar </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"116\";s:4:\"kode\";s:6:\"daftar\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:5;a:6:{s:4:\"link\";s:19:\"daftar/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"117\";s:4:\"kode\";s:19:\"daftar~kerjapraktek\";s:4:\"icon\";N;}i:6;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:25:\"<span> Bimbingan </span> \";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"118\";s:4:\"kode\";s:4:\"bimb\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:7;a:6:{s:4:\"link\";s:22:\"bimbingan/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"119\";s:4:\"kode\";s:7:\"bimb~kp\";s:4:\"icon\";N;}i:8;a:6:{s:4:\"link\";s:17:\"bimbingan/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"135\";s:4:\"kode\";s:12:\"bimb~skripsi\";s:4:\"icon\";N;}i:9;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"162\";s:4:\"kode\";s:8:\"bimb~kkl\";s:4:\"icon\";N;}i:10;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/individu\";s:4:\"desc\";s:8:\"Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"163\";s:4:\"kode\";s:17:\"bimb~kkl~individu\";s:4:\"icon\";N;}i:11;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"164\";s:4:\"kode\";s:17:\"bimb~kkl~kelompok\";s:4:\"icon\";N;}}message|s:219:\"<div class=\"alert alert-danger\">\n            <button class=\"close\" data-dismiss=\"alert\"> × </button>\n            <i class=\"fa fa-check-circle\"></i>\n            <strong> Laporan gagal dikirim!!! </strong>\n        </div>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('93scnd1kn6949rttta35g5eu27edbqat', '127.0.0.1', 1679740302, '__ci_last_regenerate|i:1679740302;id_user|s:1:\"2\";username|s:5:\"admin\";group_id|s:1:\"1\";nama|s:5:\"admin\";user_privileges|a:72:{s:1:\"#\";s:3:\"168\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:31:\"bimbingan/kerjapraktek/cetak_sk\";s:3:\"129\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/search\";s:3:\"128\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:26:\"bimbingan/skripsi/cetak_sk\";s:3:\"145\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/search\";s:3:\"144\";s:22:\"acc/index_kkl_individu\";s:3:\"182\";s:23:\"acc/result_kkl_individu\";s:3:\"183\";s:22:\"acc/index_kkl_kelompok\";s:3:\"184\";s:23:\"acc/result_kkl_kelompok\";s:3:\"185\";s:3:\"acc\";s:3:\"178\";s:13:\"acc/result_kp\";s:3:\"179\";s:17:\"acc/index_skripsi\";s:3:\"180\";s:18:\"acc/result_skripsi\";s:3:\"181\";s:9:\"functions\";s:2:\"19\";s:16:\"functions/delete\";s:2:\"17\";s:16:\"functions/insert\";s:2:\"18\";s:16:\"functions/update\";s:2:\"16\";s:6:\"groups\";s:1:\"8\";s:23:\"groups/create_privilege\";s:1:\"5\";s:13:\"groups/delete\";s:1:\"4\";s:13:\"groups/insert\";s:1:\"2\";s:13:\"groups/update\";s:1:\"3\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:14:\"daftar/skripsi\";s:3:\"130\";s:5:\"dosen\";s:3:\"151\";s:12:\"dosen/delete\";s:3:\"154\";s:12:\"dosen/insert\";s:3:\"152\";s:12:\"dosen/update\";s:3:\"153\";s:8:\"kelompok\";s:3:\"147\";s:15:\"kelompok/delete\";s:3:\"150\";s:15:\"kelompok/insert\";s:3:\"148\";s:15:\"kelompok/update\";s:3:\"149\";s:28:\"rekap/bimbingan_kkl_individu\";s:3:\"175\";s:25:\"rekap/result_kkl_individu\";s:3:\"176\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:3:\"196\";s:25:\"rekap/result_kkl_kelompok\";s:3:\"197\";s:18:\"rekap/bimbingan_kp\";s:3:\"171\";s:15:\"rekap/result_kp\";s:3:\"172\";s:23:\"rekap/bimbingan_skripsi\";s:3:\"173\";s:20:\"rekap/result_skripsi\";s:3:\"174\";s:5:\"chart\";s:3:\"189\";s:12:\"chart/result\";s:3:\"190\";s:9:\"dashboard\";s:3:\"115\";s:6:\"jadwal\";s:3:\"202\";s:13:\"jadwal/delete\";s:3:\"205\";s:13:\"jadwal/insert\";s:3:\"203\";s:13:\"jadwal/update\";s:3:\"204\";s:10:\"pembayaran\";s:3:\"192\";s:17:\"pembayaran/delete\";s:3:\"195\";s:17:\"pembayaran/insert\";s:3:\"193\";s:17:\"pembayaran/update\";s:3:\"194\";s:5:\"rekap\";s:3:\"187\";s:12:\"rekap/result\";s:3:\"188\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/update\";s:3:\"200\";s:5:\"users\";s:2:\"12\";s:12:\"users/delete\";s:2:\"20\";s:12:\"users/insert\";s:1:\"1\";}users_groups|a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:5:\"Admin\";s:4:\"desc\";s:26:\"Mengatur Perilaku Pengguna\";}}functions_privileges|a:33:{i:0;a:6:{s:4:\"link\";s:14:\"daftar/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"130\";s:4:\"kode\";s:14:\"daftar~skripsi\";s:4:\"icon\";N;}i:1;a:6:{s:4:\"link\";s:5:\"dosen\";s:4:\"desc\";s:5:\"Dosen\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"151\";s:4:\"kode\";s:12:\"master~dosen\";s:4:\"icon\";N;}i:2;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:30:\"<span> Rekap Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"168\";s:4:\"kode\";s:14:\"rekapbimbingan\";s:4:\"icon\";s:26:\"<i class=\"fa fa-list\"></i>\";}i:3;a:6:{s:4:\"link\";s:18:\"rekap/bimbingan_kp\";s:4:\"desc\";s:16:\"Jml Bimbingan KP\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"171\";s:4:\"kode\";s:29:\"rekapbimbingan~jmlbimbingankp\";s:4:\"icon\";N;}i:4;a:6:{s:4:\"link\";s:23:\"rekap/bimbingan_skripsi\";s:4:\"desc\";s:21:\"Jml Bimbingan Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"173\";s:4:\"kode\";s:34:\"rekapbimbingan~jmlbimbinganskripsi\";s:4:\"icon\";N;}i:5;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_individu\";s:4:\"desc\";s:25:\"Jml Bimbingan KKL Indvidu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"175\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklindividu\";s:4:\"icon\";N;}i:6;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Rekap Acc </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"177\";s:4:\"kode\";s:3:\"acc\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:7;a:6:{s:4:\"link\";s:3:\"acc\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"178\";s:4:\"kode\";s:6:\"acc~kp\";s:4:\"icon\";N;}i:8;a:6:{s:4:\"link\";s:17:\"acc/index_skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"180\";s:4:\"kode\";s:11:\"acc~skripsi\";s:4:\"icon\";N;}i:9;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_individu\";s:4:\"desc\";s:12:\"KKL Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"182\";s:4:\"kode\";s:19:\"acc~kkl~kklindividu\";s:4:\"icon\";N;}i:10;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_kelompok\";s:4:\"desc\";s:12:\"KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"184\";s:4:\"kode\";s:19:\"acc~kkl~kklkelompok\";s:4:\"icon\";s:0:\"\";}i:11;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"186\";s:4:\"kode\";s:7:\"acc~kkl\";s:4:\"icon\";N;}i:12;a:6:{s:4:\"link\";s:5:\"rekap\";s:4:\"desc\";s:36:\"<span> Rekap Dosen Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"187\";s:4:\"kode\";s:10:\"rekapdosen\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:13;a:6:{s:4:\"link\";s:5:\"chart\";s:4:\"desc\";s:20:\"<span> Chart </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"189\";s:4:\"kode\";s:5:\"chart\";s:4:\"icon\";s:31:\"<i class=\"fa fa-pie-chart\"></i>\";}i:14;a:6:{s:4:\"link\";s:10:\"pembayaran\";s:4:\"desc\";s:25:\"<span> Pembayaran </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"192\";s:4:\"kode\";s:10:\"pembayaran\";s:4:\"icon\";s:27:\"<i class=\"fa fa-money\"></i>\";}i:15;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:4:\"desc\";s:26:\"Jml Bimbingan KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"196\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklkelompok\";s:4:\"icon\";N;}i:16;a:6:{s:4:\"link\";s:6:\"upload\";s:4:\"desc\";s:20:\"Laporan File Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"198\";s:4:\"kode\";s:11:\"laporanfile\";s:4:\"icon\";N;}i:17;a:6:{s:4:\"link\";s:6:\"jadwal\";s:4:\"desc\";s:6:\"Jadwal\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"202\";s:4:\"kode\";s:6:\"jadwal\";s:4:\"icon\";N;}i:18;a:6:{s:4:\"link\";s:9:\"dashboard\";s:4:\"desc\";s:22:\"<span>Dashboard</span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"115\";s:4:\"kode\";s:9:\"dashboard\";s:4:\"icon\";s:26:\"<i class=\"fa fa-home\"></i>\";}i:19;a:6:{s:4:\"link\";s:6:\"groups\";s:4:\"desc\";s:4:\"Role\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:1:\"8\";s:4:\"kode\";s:8:\"#~groups\";s:4:\"icon\";N;}i:20;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Hak Akses </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"13\";s:4:\"kode\";s:1:\"#\";s:4:\"icon\";s:26:\"<i class=\"fa fa-font\"></i>\";}i:21;a:6:{s:4:\"link\";s:9:\"functions\";s:4:\"desc\";s:8:\"Function\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"19\";s:4:\"kode\";s:11:\"#~functions\";s:4:\"icon\";N;}i:22;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Master </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"146\";s:4:\"kode\";s:6:\"master\";s:4:\"icon\";s:28:\"<i class=\"fa fa-maxcdn\"></i>\";}i:23;a:6:{s:4:\"link\";s:8:\"kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"147\";s:4:\"kode\";s:15:\"master~kelompok\";s:4:\"icon\";N;}i:24;a:6:{s:4:\"link\";s:5:\"users\";s:4:\"desc\";s:19:\"<span> User </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"12\";s:4:\"kode\";s:5:\"users\";s:4:\"icon\";s:26:\"<i class=\"fa fa-user\"></i>\";}i:25;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Daftar </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"116\";s:4:\"kode\";s:6:\"daftar\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:26;a:6:{s:4:\"link\";s:19:\"daftar/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"117\";s:4:\"kode\";s:19:\"daftar~kerjapraktek\";s:4:\"icon\";N;}i:27;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:25:\"<span> Bimbingan </span> \";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"118\";s:4:\"kode\";s:4:\"bimb\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:28;a:6:{s:4:\"link\";s:22:\"bimbingan/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"119\";s:4:\"kode\";s:7:\"bimb~kp\";s:4:\"icon\";N;}i:29;a:6:{s:4:\"link\";s:17:\"bimbingan/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"135\";s:4:\"kode\";s:12:\"bimb~skripsi\";s:4:\"icon\";N;}i:30;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"162\";s:4:\"kode\";s:8:\"bimb~kkl\";s:4:\"icon\";N;}i:31;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/individu\";s:4:\"desc\";s:8:\"Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"163\";s:4:\"kode\";s:17:\"bimb~kkl~individu\";s:4:\"icon\";N;}i:32;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"164\";s:4:\"kode\";s:17:\"bimb~kkl~kelompok\";s:4:\"icon\";N;}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ck7ksbj2bsbd0v8jj6rn91460li34do9', '127.0.0.1', 1679738728, '__ci_last_regenerate|i:1679738728;users_groups|a:0:{}functions_privileges|a:0:{}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ftd4qm16kb5hqc1c19af7lundnagg32p', '127.0.0.1', 1679738401, '__ci_last_regenerate|i:1679738401;users_groups|a:0:{}functions_privileges|a:0:{}message|s:281:\"<div class=\"alert alert-danger\">\n                        <button class=\"close\" data-dismiss=\"alert\"> × </button>\n                        <i class=\"fa fa-check-circle\"></i>\n                        <strong>Login Gagal! Silahkan Cek Kembali Username dan Password Anda!</strong></div>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gsg146a7lnvl3kim0f21oqo2llb3jsq2', '127.0.0.1', 1679741010, '__ci_last_regenerate|i:1679741010;id_user|s:1:\"2\";username|s:5:\"admin\";group_id|s:1:\"1\";nama|s:5:\"admin\";user_privileges|a:72:{s:1:\"#\";s:3:\"168\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:31:\"bimbingan/kerjapraktek/cetak_sk\";s:3:\"129\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/search\";s:3:\"128\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:26:\"bimbingan/skripsi/cetak_sk\";s:3:\"145\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/search\";s:3:\"144\";s:22:\"acc/index_kkl_individu\";s:3:\"182\";s:23:\"acc/result_kkl_individu\";s:3:\"183\";s:22:\"acc/index_kkl_kelompok\";s:3:\"184\";s:23:\"acc/result_kkl_kelompok\";s:3:\"185\";s:3:\"acc\";s:3:\"178\";s:13:\"acc/result_kp\";s:3:\"179\";s:17:\"acc/index_skripsi\";s:3:\"180\";s:18:\"acc/result_skripsi\";s:3:\"181\";s:9:\"functions\";s:2:\"19\";s:16:\"functions/delete\";s:2:\"17\";s:16:\"functions/insert\";s:2:\"18\";s:16:\"functions/update\";s:2:\"16\";s:6:\"groups\";s:1:\"8\";s:23:\"groups/create_privilege\";s:1:\"5\";s:13:\"groups/delete\";s:1:\"4\";s:13:\"groups/insert\";s:1:\"2\";s:13:\"groups/update\";s:1:\"3\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:14:\"daftar/skripsi\";s:3:\"130\";s:5:\"dosen\";s:3:\"151\";s:12:\"dosen/delete\";s:3:\"154\";s:12:\"dosen/insert\";s:3:\"152\";s:12:\"dosen/update\";s:3:\"153\";s:8:\"kelompok\";s:3:\"147\";s:15:\"kelompok/delete\";s:3:\"150\";s:15:\"kelompok/insert\";s:3:\"148\";s:15:\"kelompok/update\";s:3:\"149\";s:28:\"rekap/bimbingan_kkl_individu\";s:3:\"175\";s:25:\"rekap/result_kkl_individu\";s:3:\"176\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:3:\"196\";s:25:\"rekap/result_kkl_kelompok\";s:3:\"197\";s:18:\"rekap/bimbingan_kp\";s:3:\"171\";s:15:\"rekap/result_kp\";s:3:\"172\";s:23:\"rekap/bimbingan_skripsi\";s:3:\"173\";s:20:\"rekap/result_skripsi\";s:3:\"174\";s:5:\"chart\";s:3:\"189\";s:12:\"chart/result\";s:3:\"190\";s:9:\"dashboard\";s:3:\"115\";s:6:\"jadwal\";s:3:\"202\";s:13:\"jadwal/delete\";s:3:\"205\";s:13:\"jadwal/insert\";s:3:\"203\";s:13:\"jadwal/update\";s:3:\"204\";s:10:\"pembayaran\";s:3:\"192\";s:17:\"pembayaran/delete\";s:3:\"195\";s:17:\"pembayaran/insert\";s:3:\"193\";s:17:\"pembayaran/update\";s:3:\"194\";s:5:\"rekap\";s:3:\"187\";s:12:\"rekap/result\";s:3:\"188\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/update\";s:3:\"200\";s:5:\"users\";s:2:\"12\";s:12:\"users/delete\";s:2:\"20\";s:12:\"users/insert\";s:1:\"1\";}users_groups|a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:5:\"Admin\";s:4:\"desc\";s:26:\"Mengatur Perilaku Pengguna\";}}functions_privileges|a:33:{i:0;a:6:{s:4:\"link\";s:14:\"daftar/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"130\";s:4:\"kode\";s:14:\"daftar~skripsi\";s:4:\"icon\";N;}i:1;a:6:{s:4:\"link\";s:5:\"dosen\";s:4:\"desc\";s:5:\"Dosen\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"151\";s:4:\"kode\";s:12:\"master~dosen\";s:4:\"icon\";N;}i:2;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:30:\"<span> Rekap Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"168\";s:4:\"kode\";s:14:\"rekapbimbingan\";s:4:\"icon\";s:26:\"<i class=\"fa fa-list\"></i>\";}i:3;a:6:{s:4:\"link\";s:18:\"rekap/bimbingan_kp\";s:4:\"desc\";s:16:\"Jml Bimbingan KP\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"171\";s:4:\"kode\";s:29:\"rekapbimbingan~jmlbimbingankp\";s:4:\"icon\";N;}i:4;a:6:{s:4:\"link\";s:23:\"rekap/bimbingan_skripsi\";s:4:\"desc\";s:21:\"Jml Bimbingan Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"173\";s:4:\"kode\";s:34:\"rekapbimbingan~jmlbimbinganskripsi\";s:4:\"icon\";N;}i:5;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_individu\";s:4:\"desc\";s:25:\"Jml Bimbingan KKL Indvidu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"175\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklindividu\";s:4:\"icon\";N;}i:6;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Rekap Acc </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"177\";s:4:\"kode\";s:3:\"acc\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:7;a:6:{s:4:\"link\";s:3:\"acc\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"178\";s:4:\"kode\";s:6:\"acc~kp\";s:4:\"icon\";N;}i:8;a:6:{s:4:\"link\";s:17:\"acc/index_skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"180\";s:4:\"kode\";s:11:\"acc~skripsi\";s:4:\"icon\";N;}i:9;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_individu\";s:4:\"desc\";s:12:\"KKL Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"182\";s:4:\"kode\";s:19:\"acc~kkl~kklindividu\";s:4:\"icon\";N;}i:10;a:6:{s:4:\"link\";s:22:\"acc/index_kkl_kelompok\";s:4:\"desc\";s:12:\"KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"184\";s:4:\"kode\";s:19:\"acc~kkl~kklkelompok\";s:4:\"icon\";s:0:\"\";}i:11;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"186\";s:4:\"kode\";s:7:\"acc~kkl\";s:4:\"icon\";N;}i:12;a:6:{s:4:\"link\";s:5:\"rekap\";s:4:\"desc\";s:36:\"<span> Rekap Dosen Bimbingan </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"187\";s:4:\"kode\";s:10:\"rekapdosen\";s:4:\"icon\";s:36:\"<i class=\"fa fa-check-square-o\"></i>\";}i:13;a:6:{s:4:\"link\";s:5:\"chart\";s:4:\"desc\";s:20:\"<span> Chart </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"189\";s:4:\"kode\";s:5:\"chart\";s:4:\"icon\";s:31:\"<i class=\"fa fa-pie-chart\"></i>\";}i:14;a:6:{s:4:\"link\";s:10:\"pembayaran\";s:4:\"desc\";s:25:\"<span> Pembayaran </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"192\";s:4:\"kode\";s:10:\"pembayaran\";s:4:\"icon\";s:27:\"<i class=\"fa fa-money\"></i>\";}i:15;a:6:{s:4:\"link\";s:28:\"rekap/bimbingan_kkl_kelompok\";s:4:\"desc\";s:26:\"Jml Bimbingan KKL Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"196\";s:4:\"kode\";s:38:\"rekapbimbingan~jmlbimbingankklkelompok\";s:4:\"icon\";N;}i:16;a:6:{s:4:\"link\";s:6:\"upload\";s:4:\"desc\";s:20:\"Laporan File Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"198\";s:4:\"kode\";s:11:\"laporanfile\";s:4:\"icon\";N;}i:17;a:6:{s:4:\"link\";s:6:\"jadwal\";s:4:\"desc\";s:6:\"Jadwal\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"202\";s:4:\"kode\";s:6:\"jadwal\";s:4:\"icon\";N;}i:18;a:6:{s:4:\"link\";s:9:\"dashboard\";s:4:\"desc\";s:22:\"<span>Dashboard</span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"115\";s:4:\"kode\";s:9:\"dashboard\";s:4:\"icon\";s:26:\"<i class=\"fa fa-home\"></i>\";}i:19;a:6:{s:4:\"link\";s:6:\"groups\";s:4:\"desc\";s:4:\"Role\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:1:\"8\";s:4:\"kode\";s:8:\"#~groups\";s:4:\"icon\";N;}i:20;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:24:\"<span> Hak Akses </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"13\";s:4:\"kode\";s:1:\"#\";s:4:\"icon\";s:26:\"<i class=\"fa fa-font\"></i>\";}i:21;a:6:{s:4:\"link\";s:9:\"functions\";s:4:\"desc\";s:8:\"Function\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"19\";s:4:\"kode\";s:11:\"#~functions\";s:4:\"icon\";N;}i:22;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Master </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"146\";s:4:\"kode\";s:6:\"master\";s:4:\"icon\";s:28:\"<i class=\"fa fa-maxcdn\"></i>\";}i:23;a:6:{s:4:\"link\";s:8:\"kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"147\";s:4:\"kode\";s:15:\"master~kelompok\";s:4:\"icon\";N;}i:24;a:6:{s:4:\"link\";s:5:\"users\";s:4:\"desc\";s:19:\"<span> User </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:2:\"12\";s:4:\"kode\";s:5:\"users\";s:4:\"icon\";s:26:\"<i class=\"fa fa-user\"></i>\";}i:25;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Daftar </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"116\";s:4:\"kode\";s:6:\"daftar\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:26;a:6:{s:4:\"link\";s:19:\"daftar/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"117\";s:4:\"kode\";s:19:\"daftar~kerjapraktek\";s:4:\"icon\";N;}i:27;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:25:\"<span> Bimbingan </span> \";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"118\";s:4:\"kode\";s:4:\"bimb\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:28;a:6:{s:4:\"link\";s:22:\"bimbingan/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"119\";s:4:\"kode\";s:7:\"bimb~kp\";s:4:\"icon\";N;}i:29;a:6:{s:4:\"link\";s:17:\"bimbingan/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"135\";s:4:\"kode\";s:12:\"bimb~skripsi\";s:4:\"icon\";N;}i:30;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"162\";s:4:\"kode\";s:8:\"bimb~kkl\";s:4:\"icon\";N;}i:31;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/individu\";s:4:\"desc\";s:8:\"Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"163\";s:4:\"kode\";s:17:\"bimb~kkl~individu\";s:4:\"icon\";N;}i:32;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"164\";s:4:\"kode\";s:17:\"bimb~kkl~kelompok\";s:4:\"icon\";N;}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gvf5k7g56nr9ocabfrq5m9bvu0255clm', '127.0.0.1', 1679741411, '__ci_last_regenerate|i:1679741411;id_user|s:1:\"5\";username|s:8:\"12201766\";group_id|s:1:\"5\";nama|s:14:\"Agus Kresnanto\";user_privileges|a:35:{s:1:\"#\";s:3:\"116\";s:22:\"bimbingan/kkl/individu\";s:3:\"163\";s:32:\"bimbingan/kkl/bimbingan_individu\";s:3:\"165\";s:29:\"bimbingan/kkl/insert_individu\";s:3:\"166\";s:22:\"bimbingan/kkl/kelompok\";s:3:\"164\";s:22:\"bimbingan/kerjapraktek\";s:3:\"119\";s:32:\"bimbingan/kerjapraktek/bimbingan\";s:3:\"120\";s:32:\"bimbingan/kerjapraktek/cetak_pdf\";s:3:\"126\";s:35:\"bimbingan/kerjapraktek/cetak_sk_mhs\";s:3:\"125\";s:29:\"bimbingan/kerjapraktek/detail\";s:3:\"122\";s:31:\"bimbingan/kerjapraktek/download\";s:3:\"123\";s:29:\"bimbingan/kerjapraktek/insert\";s:3:\"121\";s:29:\"bimbingan/kerjapraktek/lanjut\";s:3:\"127\";s:17:\"bimbingan/skripsi\";s:3:\"135\";s:27:\"bimbingan/skripsi/bimbingan\";s:3:\"136\";s:27:\"bimbingan/skripsi/cetak_pdf\";s:3:\"142\";s:30:\"bimbingan/skripsi/cetak_sk_mhs\";s:3:\"141\";s:24:\"bimbingan/skripsi/detail\";s:3:\"138\";s:26:\"bimbingan/skripsi/download\";s:3:\"139\";s:24:\"bimbingan/skripsi/insert\";s:3:\"137\";s:24:\"bimbingan/skripsi/lanjut\";s:3:\"143\";s:19:\"daftar/kerjapraktek\";s:3:\"117\";s:10:\"daftar/kkl\";s:3:\"155\";s:17:\"daftar/kkl/insert\";s:3:\"156\";s:18:\"daftar/kkl/success\";s:3:\"158\";s:17:\"daftar/kkl/update\";s:3:\"157\";s:14:\"daftar/skripsi\";s:3:\"130\";s:21:\"daftar/skripsi/insert\";s:3:\"131\";s:22:\"daftar/skripsi/success\";s:3:\"134\";s:21:\"daftar/skripsi/update\";s:3:\"132\";s:9:\"dashboard\";s:3:\"115\";s:6:\"upload\";s:3:\"198\";s:13:\"upload/delete\";s:3:\"201\";s:13:\"upload/insert\";s:3:\"199\";s:13:\"upload/update\";s:3:\"200\";}users_groups|a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:9:\"Mahasiswa\";s:4:\"desc\";s:9:\"Mahasiswa\";}}functions_privileges|a:12:{i:0;a:6:{s:4:\"link\";s:14:\"daftar/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"130\";s:4:\"kode\";s:14:\"daftar~skripsi\";s:4:\"icon\";N;}i:1;a:6:{s:4:\"link\";s:10:\"daftar/kkl\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"155\";s:4:\"kode\";s:10:\"daftar~kkl\";s:4:\"icon\";N;}i:2;a:6:{s:4:\"link\";s:6:\"upload\";s:4:\"desc\";s:20:\"Laporan File Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"198\";s:4:\"kode\";s:11:\"laporanfile\";s:4:\"icon\";N;}i:3;a:6:{s:4:\"link\";s:9:\"dashboard\";s:4:\"desc\";s:22:\"<span>Dashboard</span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"115\";s:4:\"kode\";s:9:\"dashboard\";s:4:\"icon\";s:26:\"<i class=\"fa fa-home\"></i>\";}i:4;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:21:\"<span> Daftar </span>\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"116\";s:4:\"kode\";s:6:\"daftar\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:5;a:6:{s:4:\"link\";s:19:\"daftar/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"117\";s:4:\"kode\";s:19:\"daftar~kerjapraktek\";s:4:\"icon\";N;}i:6;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:25:\"<span> Bimbingan </span> \";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"118\";s:4:\"kode\";s:4:\"bimb\";s:4:\"icon\";s:28:\"<i class=\"fa fa-folder\"></i>\";}i:7;a:6:{s:4:\"link\";s:22:\"bimbingan/kerjapraktek\";s:4:\"desc\";s:13:\"Kerja Praktek\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"119\";s:4:\"kode\";s:7:\"bimb~kp\";s:4:\"icon\";N;}i:8;a:6:{s:4:\"link\";s:17:\"bimbingan/skripsi\";s:4:\"desc\";s:7:\"Skripsi\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"135\";s:4:\"kode\";s:12:\"bimb~skripsi\";s:4:\"icon\";N;}i:9;a:6:{s:4:\"link\";s:1:\"#\";s:4:\"desc\";s:3:\"KKL\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"162\";s:4:\"kode\";s:8:\"bimb~kkl\";s:4:\"icon\";N;}i:10;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/individu\";s:4:\"desc\";s:8:\"Individu\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"163\";s:4:\"kode\";s:17:\"bimb~kkl~individu\";s:4:\"icon\";N;}i:11;a:6:{s:4:\"link\";s:22:\"bimbingan/kkl/kelompok\";s:4:\"desc\";s:8:\"Kelompok\";s:4:\"menu\";s:1:\"t\";s:2:\"id\";s:3:\"164\";s:4:\"kode\";s:17:\"bimb~kkl~kelompok\";s:4:\"icon\";N;}}');
COMMIT;

-- ----------------------------
-- Table structure for config_krs
-- ----------------------------
DROP TABLE IF EXISTS `config_krs`;
CREATE TABLE `config_krs` (
  `id` smallint(6) NOT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `semester` varchar(1) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_krs
-- ----------------------------
BEGIN;
INSERT INTO `config_krs` (`id`, `tahun`, `semester`, `status`) VALUES (1, 2022, '1', 't');
COMMIT;

-- ----------------------------
-- Table structure for data_studi
-- ----------------------------
DROP TABLE IF EXISTS `data_studi`;
CREATE TABLE `data_studi` (
  `id_krs` int(11) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `id_konversi` smallint(6) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_studi
-- ----------------------------
BEGIN;
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219202', 'Web Statis', 3, 1, 1);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219202', 'Web Statis', 3, 3, 48);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IP219202', 'Web Statis', 3, 3, 95);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219201', 'Pesantren Mahasiswa 2', 0, 1, 3);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (6, 'SK219210', 'Kerja Praktik', 3, NULL, 96);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IK219201', 'Desain Web', 3, 1, 4);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219201', 'Pesantren Mahasiswa 2', 0, 3, 97);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IK219201', 'Desain Web', 3, 3, 98);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IK219205', 'Aljabar Linear', 3, 1, 5);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IK219205', 'Aljabar Linear', 3, 3, 99);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IS219104', 'Matematika Diskrit', 3, 1, 7);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219105', 'Pendidikan Anti Korupsi', 2, 1, 6);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219202', 'Cloud Computing', 3, 1, 8);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SS219106', 'Riset Operasi', 3, 1, 9);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SS219107', 'Agama 3', 3, 1, 10);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219207', 'Cyber Security', 6, 1, 11);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219108', 'Mobile Programming', 4, 3, 12);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219113', 'Desain Berorientasi Objek', 3, 1, 13);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219206', 'Web Service', 4, 1, 14);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SU219103', 'Kewirausahaan 2', 2, 2, 2);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219119', 'Kecerdasan Buatan', 3, 1, 15);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219118', 'Sistem Pendukung Keputusan', 2, 1, 16);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219116', 'Sistem Terdistribusi', 2, 1, 17);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219115', 'Bahasa Indonesia', 3, 1, 18);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IU219105', 'Sistem Pakar', 2, 2, 19);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219209', 'Internet Of Things', 3, 1, 20);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IS219104', 'Matematika Diskrit', 3, 3, 100);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IS219108', 'Bisnis Digital', 2, 1, 21);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219111', 'Agama 2', 2, 1, 22);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219205', 'Data Mining', 2, 1, 23);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219101', 'Pengantar Teknologi Informasi', 3, 1, 24);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219203', 'Algoritma', 4, 1, 25);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IS219101', 'Kewirausahaan 1', 2, 1, 26);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IP219105', 'Pendidikan Anti Korupsi', 2, 3, 101);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IS219102', 'Pancasila', 2, 1, 27);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IU219101', 'Bahasa Inggris 1', 2, 2, 28);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IU219102', 'Logika Informatika', 2, 1, 29);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219204', 'Pemrograman Struktural dan Struktur Data', 6, 2, 30);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IS219103', 'Kewarganegaraan', 2, 1, 31);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219202', 'Cloud Computing', 3, 3, 102);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SU219104', 'Bahasa Inggris 2', 2, 2, 32);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219207', 'Sistem dan Manajemen Basis Data', 4, 2, 33);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219208', 'Agama 1', 2, 1, 34);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219109', 'Pemrograman Berorientasi Objek', 4, 1, 35);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IP219106', 'Sistem Operasi', 3, 1, 36);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219203', 'Jaringan Komputer', 6, 1, 37);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SK219204', 'Pemrograman Web', 4, 2, 38);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219110', 'Arsitektur dan Organisasi Komputer', 3, 1, 39);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219212', 'Interaksi Manusia Komputer', 2, 1, 40);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219214', 'Animasi dan Multimedia', 4, 1, 41);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219117', 'Rekayasa Perangkat Lunak', 6, 2, 42);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SP219220', 'Etika Profesi', 2, 2, 43);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IU219206', 'Metodologi Penelitian', 2, 1, 44);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'SU219107', 'Statistik', 3, 2, 45);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SS219106', 'Riset Operasi', 3, 3, 103);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (1, 'IBB215102', 'Statistik', 2, 1, 46);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SS219107', 'Agama 3', 3, 3, 104);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219207', 'Cyber Security', 6, 3, 105);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219108', 'Mobile Programming', 4, 3, 106);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219113', 'Desain Berorientasi Objek', 3, 3, 107);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219206', 'Web Service', 4, 3, 108);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SU219103', 'Kewirausahaan 2', 2, 3, 109);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219119', 'Kecerdasan Buatan', 3, 3, 110);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219118', 'Sistem Pendukung Keputusan', 2, 3, 111);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219116', 'Sistem Terdistribusi', 2, 3, 112);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219115', 'Bahasa Indonesia', 3, 4, 113);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IU219105', 'Sistem Pakar', 2, 5, 114);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219209', 'Internet Of Things', 3, 5, 115);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IS219108', 'Bisnis Digital', 2, 4, 116);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SP219111', 'Agama 2', 2, 4, 117);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'SK219205', 'Data Mining', 2, 4, 118);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IP219101', 'Pengantar Teknologi Informasi', 3, 4, 119);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IP219203', 'Algoritma', 4, 4, 120);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (5, 'IS219101', 'Kewirausahaan 1', 2, 4, 121);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219201', 'Pesantren Mahasiswa 2', 0, 3, 50);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IK219201', 'Desain Web', 3, 3, 51);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IK219205', 'Aljabar Linear', 3, 3, 52);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IS219104', 'Matematika Diskrit', 3, 3, 53);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219105', 'Pendidikan Anti Korupsi', 2, 3, 54);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219202', 'Cloud Computing', 3, 3, 55);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SS219106', 'Riset Operasi', 3, 3, 56);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SS219107', 'Agama 3', 3, 3, 57);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219207', 'Cyber Security', 6, 3, 58);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219108', 'Mobile Programming', 4, 3, 59);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (4, 'SK219210', 'Kerja Praktek', 3, NULL, 49);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (2, 'SK219210', 'Kerja Praktek', 3, NULL, 47);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219113', 'Desain Berorientasi Objek', 3, 3, 60);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219206', 'Web Service', 4, 3, 61);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SU219103', 'Kewirausahaan 2', 2, 3, 62);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219119', 'Kecerdasan Buatan', 3, 3, 63);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219118', 'Sistem Pendukung Keputusan', 2, 3, 64);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219116', 'Sistem Terdistribusi', 2, 3, 65);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219117', 'Rekayasa Perangkat Lunak', 6, 3, 90);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219220', 'Etika Profesi', 2, 3, 91);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IU219206', 'Metodologi Penelitian', 2, 3, 92);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SU219107', 'Statistik', 3, 3, 93);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IBB215102', 'Statistik', 2, 3, 94);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219115', 'Bahasa Indonesia', 3, 3, 66);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IU219105', 'Sistem Pakar', 2, 3, 67);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219209', 'Internet Of Things', 3, 3, 68);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IS219108', 'Bisnis Digital', 2, 3, 69);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219111', 'Agama 2', 2, 3, 70);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219205', 'Data Mining', 2, 3, 71);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219101', 'Pengantar Teknologi Informasi', 3, 3, 72);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219203', 'Algoritma', 4, 3, 73);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IS219101', 'Kewirausahaan 1', 2, 3, 74);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IS219102', 'Pancasila', 2, 3, 75);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IU219101', 'Bahasa Inggris 1', 2, 3, 76);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IU219102', 'Logika Informatika', 2, 3, 77);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IS219103', 'Kewarganegaraan', 2, 3, 79);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SU219104', 'Bahasa Inggris 2', 2, 3, 80);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219207', 'Sistem dan Manajemen Basis Data', 4, 3, 81);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219208', 'Agama 1', 2, 3, 82);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219109', 'Pemrograman Berorientasi Objek', 4, 3, 83);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219106', 'Sistem Operasi', 3, 3, 84);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219203', 'Jaringan Komputer', 6, 3, 85);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SK219204', 'Pemrograman Web', 4, 3, 86);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219110', 'Arsitektur dan Organisasi Komputer', 3, 3, 87);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219212', 'Interaksi Manusia Komputer', 2, 3, 88);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'SP219214', 'Animasi dan Multimedia', 4, 3, 89);
INSERT INTO `data_studi` (`id_krs`, `kode`, `nama`, `sks`, `id_konversi`, `id`) VALUES (3, 'IP219204', 'Pemrograman Struktural dan Struktur Data', 6, 4, 78);
COMMIT;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id` smallint(6) NOT NULL,
  `nmdos` varchar(255) DEFAULT NULL,
  `gelar_belakang` varchar(50) DEFAULT NULL,
  `gelar_depan` varchar(50) DEFAULT NULL,
  `nodos` varchar(50) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dosen
-- ----------------------------
BEGIN;
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (1, 'Andri Syafrianto', 'S.Kom, M.Cs.', ' ', '201230047', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (2, 'Aris Badaruddin Thoha', 'S.Ag, M.Ag.', ' ', '200110001', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (3, 'Asih Winantu', 'S.Kom, M.Cs.', ' ', '198006132015042001', '198006132015042001');
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (4, 'Dedy Ardiansyah', 'S.Sos, M.AB.', ' ', '200110002', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (5, 'Eko Riswanto', 'ST, M.Cs.', ' ', '197501152005011002', '197501152005011002');
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (6, 'Herdiesel Santoso', 'S.T., S.Kom., M.Cs.', ' ', '201640066', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (7, 'Irfan Nuruddin', 'S.ThI, M.SI.', ' ', '200610020', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (8, 'Minarwati', 'ST. M.Cs.', ' ', '200110006', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (9, 'Momon Muzakkar', 'ST. M.Eng.', ' ', '200110007', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (10, 'Rachmad Sanuri', 'SE., M.Eng.', ' ', '201010032', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (11, 'Siswaya', 'S.Pd.', ' ', '200110008', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (12, 'Sugiyatno', 'S.Kom., M.Kom.', ' ', '201130001', '');
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (13, 'Suparyanto', 'ST. M.Eng.', ' ', '197005042005011001', '197005042005011001');
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (14, 'Untung Subagyo', 'S.Kom. M.Kom.', ' ', '200710023', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (15, 'Wahyu Widodo', 'S.Kom., M.Kom.', ' ', '200910029', NULL);
INSERT INTO `dosen` (`id`, `nmdos`, `gelar_belakang`, `gelar_depan`, `nodos`, `nip`) VALUES (16, 'Yuli Praptomo PHS', 'S.Kom. M.Cs.', ' ', '200110011', NULL);
COMMIT;

-- ----------------------------
-- Table structure for functions
-- ----------------------------
DROP TABLE IF EXISTS `functions`;
CREATE TABLE `functions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `menu` varchar(5) DEFAULT NULL,
  `kode` longtext,
  `icon` varchar(255) DEFAULT NULL,
  `no_urut` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of functions
-- ----------------------------
BEGIN;
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (1, 'users/insert', 'Tambah users', 'f', 'users~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (2, 'groups/insert', 'Tambah groups', 'f', '#~groups~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (3, 'groups/update', 'Ubah groups', 'f', '#~groups~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (4, 'groups/delete', 'Hapus groups', 'f', '#~groups~delete', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (5, 'groups/create_privilege', 'Buat privilege groups', 'f', '#~groups~create_privilege', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (8, 'groups', 'Role', 't', '#~groups', NULL, '2');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (12, 'users', '<span> User </span>', 't', 'users', '<i class=\"fa fa-user\"></i>', '4');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (13, '#', '<span> Hak Akses </span>', 't', '#', '<i class=\"fa fa-font\"></i>', '2');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (16, 'functions/update', 'Ubah function', 'f', '#~functions~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (17, 'functions/delete', 'Hapus function', 'f', '#~functions~delete', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (18, 'functions/insert', 'tambah function', 'f', '#~functions~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (19, 'functions', 'Function', 't', '#~functions', NULL, '2');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (20, 'users/delete', 'Hapus users', 'f', 'users~hapus', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (115, 'dashboard', '<span>Dashboard</span>', 't', 'dashboard', '<i class=\"fa fa-home\"></i>', '1');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (116, '#', '<span> Daftar </span>', 't', 'daftar', '<i class=\"fa fa-folder\"></i>', '5');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (117, 'daftar/kerjapraktek', 'Kerja Praktek', 't', 'daftar~kerjapraktek', NULL, '5');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (118, '#', '<span> Bimbingan </span> ', 't', 'bimb', '<i class=\"fa fa-folder\"></i>', '6');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (119, 'bimbingan/kerjapraktek', 'Kerja Praktek', 't', 'bimb~kp', NULL, '6');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (120, 'bimbingan/kerjapraktek/bimbingan', 'bimbingan kerja praktek', 'f', 'bimb~kp~bimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (121, 'bimbingan/kerjapraktek/insert', 'Insert bimbingan kerja praktek', 'f', 'bimb~kp~insertbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (122, 'bimbingan/kerjapraktek/detail', 'Detail bimbingan kerja praktek', 'f', 'bimb~kp~detailbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (123, 'bimbingan/kerjapraktek/download', 'Download dokumen bimbingan kp', 'f', 'bimb~kp~downloadbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (124, 'bimbingan/kerjapraktek/acc', 'Persetujuan Dosen', 'f', 'bimb~kp~persetujuanbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (125, 'bimbingan/kerjapraktek/cetak_sk_mhs', 'Cetak pdf sk mhs', 'f', 'bimb~kp~cetakskmhsbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (126, 'bimbingan/kerjapraktek/cetak_pdf', 'cetak catatan bimbingan', 'f', 'bimb~kp~cetakcatatanbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (127, 'bimbingan/kerjapraktek/lanjut', 'Lanjut Bimbingan MHS', 'f', 'bimb~kp~lanjut', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (128, 'bimbingan/kerjapraktek/search', 'Pencarian bimbingan kp', 'f', 'bimb~kp~bimbingansearch', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (129, 'bimbingan/kerjapraktek/cetak_sk', 'cetak sk bimbingan kp', 'f', 'bimb~kp~cetakskbimbingansemua', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (130, 'daftar/skripsi', 'Skripsi', 't', 'daftar~skripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (131, 'daftar/skripsi/insert', 'insert skripsi', 'f', 'daftar~skripsi~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (132, 'daftar/skripsi/update', 'update daftar skripsi', 'f', 'daftar~skripsi~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (133, 'daftar/skripsi/persetujuan', 'persetujuan kaprodi', 'f', 'daftar~skripsi~persetujuan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (134, 'daftar/skripsi/success', 'sukses pendaftaran skripsi', 'f', 'daftar~skripsi~success', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (135, 'bimbingan/skripsi', 'Skripsi', 't', 'bimb~skripsi', NULL, '7');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (136, 'bimbingan/skripsi/bimbingan', 'bimbingan skripsi', 'f', 'bimb~skripsi~bimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (137, 'bimbingan/skripsi/insert', 'Insert bimbingan skripsi', 'f', 'bimb~skripsi~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (138, 'bimbingan/skripsi/detail', 'Detail bimbingan skripsi', 'f', 'bimb~skripsi~detail', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (139, 'bimbingan/skripsi/download', 'Download dokumen bimbingan skripsi', 'f', 'bimb~skripsi~download', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (140, 'bimbingan/skripsi/acc', 'Persetujuan Dosen', 'f', 'bimb~skripsi~persetujuandosen', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (141, 'bimbingan/skripsi/cetak_sk_mhs', 'Cetak pdf sk skripsi mhs', 'f', 'bimb~skripsi~cetakskskripsimhs', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (142, 'bimbingan/skripsi/cetak_pdf', 'cetak catatan bimbingan skripsi', 'f', 'bimb~skripsi~cetakbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (143, 'bimbingan/skripsi/lanjut', 'Lanjut Bimbingan MHS', 'f', 'bimb~skripsi~lanjut', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (144, 'bimbingan/skripsi/search', 'Pencarian bimbingan skripsi', 'f', 'bimb~skripsi~bimbingansearch', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (145, 'bimbingan/skripsi/cetak_sk', 'cetat sk bimbingan skripsi semua', 'f', 'bimb~skripsi~cetakskskripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (146, '#', '<span> Master </span>', 't', 'master', '<i class=\"fa fa-maxcdn\"></i>', '3');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (147, 'kelompok', 'Kelompok', 't', 'master~kelompok', NULL, '3');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (148, 'kelompok/insert', 'tambah kelompok', 'f', 'master~kelompok~tambah', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (149, 'kelompok/update', 'ubah kelompok', 'f', 'master~kelompok~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (150, 'kelompok/delete', 'hapus kelompok', 'f', 'master~kelompok~hapus', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (151, 'dosen', 'Dosen', 't', 'master~dosen', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (152, 'dosen/insert', 'tambah dosen', 'f', 'master~dosen~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (153, 'dosen/update', 'update dosen', 'f', 'master~dosen~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (154, 'dosen/delete', 'Hapus dosen', 'f', 'master~dosen~hapus', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (155, 'daftar/kkl', 'KKL', 't', 'daftar~kkl', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (156, 'daftar/kkl/insert', 'insert kkl', 'f', 'daftar~kkl~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (157, 'daftar/kkl/update', 'Ubah KKL', 'f', 'daftar~kkl~ubah', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (158, 'daftar/kkl/success', 'pengajuan success', 'f', 'daftar~kkl~success', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (159, 'daftar/kkl/persetujuan', 'persetujuan wakademik', 'f', 'daftar~kkl~individu~persetujuan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (160, 'daftar/kkl/kkl_individu', 'KKL Individu', 't', 'daftar~kkl~individu', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (161, 'daftar/kkl/kkl_kelompok', 'KKL Kelompok', 't', 'daftar~kkl~kelompok', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (162, '#', 'KKL', 't', 'bimb~kkl', NULL, '8');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (163, 'bimbingan/kkl/individu', 'Individu', 't', 'bimb~kkl~individu', NULL, '9');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (164, 'bimbingan/kkl/kelompok', 'Kelompok', 't', 'bimb~kkl~kelompok', NULL, '9');
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (165, 'bimbingan/kkl/bimbingan_individu', 'bimbingan kkl individu', 'f', 'bimb~kkl~individu~listbimbingan', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (166, 'bimbingan/kkl/insert_individu', 'tambah bimbingan individu', 'f', 'bimb~kkl~individu~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (167, 'bimbingan/kkl/set_dosen', 'Seting Dosen', 'f', 'bimb~kkl~kelompok~setdosen', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (168, '#', '<span> Rekap Bimbingan </span>', 't', 'rekapbimbingan', '<i class=\"fa fa-list\"></i>', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (171, 'rekap/bimbingan_kp', 'Jml Bimbingan KP', 't', 'rekapbimbingan~jmlbimbingankp', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (172, 'rekap/result_kp', 'Menampilkan data jml bimbingan kp mhs', 'f', 'rekapbimbingan~jmlbimbingankp~resultkp', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (173, 'rekap/bimbingan_skripsi', 'Jml Bimbingan Skripsi', 't', 'rekapbimbingan~jmlbimbinganskripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (174, 'rekap/result_skripsi', 'Menampilkan data jml bimbingan skripsi mhs', 'f', 'rekapbimbingan~jmlbimbinganskripsi~resultskripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (175, 'rekap/bimbingan_kkl_individu', 'Jml Bimbingan KKL Indvidu', 't', 'rekapbimbingan~jmlbimbingankklindividu', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (176, 'rekap/result_kkl_individu', 'Menampilkan data jml bimbingan kkl individu mhs', 'f', 'rekapbimbingan~jmlbimbingankklindividu~resultkklindividu', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (177, '#', '<span> Rekap Acc </span>', 't', 'acc', '<i class=\"fa fa-check-square-o\"></i>', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (178, 'acc', 'Kerja Praktek', 't', 'acc~kp', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (179, 'acc/result_kp', 'Menampilkan data Acc kerja praktek', 'f', 'acc~kp~result_kp', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (180, 'acc/index_skripsi', 'Skripsi', 't', 'acc~skripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (181, 'acc/result_skripsi', 'Menampilkan data Acc skripsi', 'f', 'acc~skripsi~result_skripsi', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (182, 'acc/index_kkl_individu', 'KKL Individu', 't', 'acc~kkl~kklindividu', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (183, 'acc/result_kkl_individu', 'menampilkan data acc kkl individu', 'f', 'acc~kkl~kklindividu~result_kklindividu', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (184, 'acc/index_kkl_kelompok', 'KKL Kelompok', 't', 'acc~kkl~kklkelompok', '', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (185, 'acc/result_kkl_kelompok', 'menampilkan data acc kkl kelompok', 'f', 'acc~kkl~kklkelompok~result_kelompok', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (186, '#', 'KKL', 't', 'acc~kkl', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (187, 'rekap', '<span> Rekap Dosen Bimbingan </span>', 't', 'rekapdosen', '<i class=\"fa fa-check-square-o\"></i>', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (188, 'rekap/result', 'menampilkan data jumlah mhs bimbingan', 'f', 'rekapdosen~result', '', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (189, 'chart', '<span> Chart </span>', 't', 'chart', '<i class=\"fa fa-pie-chart\"></i>', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (190, 'chart/result', 'chart result', 'f', 'chart~result', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (192, 'pembayaran', '<span> Pembayaran </span>', 't', 'pembayaran', '<i class=\"fa fa-money\"></i>', NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (193, 'pembayaran/insert', 'Tambah pembayaran', 'f', 'pembayaran~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (194, 'pembayaran/update', 'Ubah Pembayaran', 'f', 'pembayaran~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (195, 'pembayaran/delete', 'Hapus Pembayaran', 'f', 'pembayaran~delete', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (196, 'rekap/bimbingan_kkl_kelompok', 'Jml Bimbingan KKL Kelompok', 't', 'rekapbimbingan~jmlbimbingankklkelompok', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (197, 'rekap/result_kkl_kelompok', 'result jml bimbingan kkl kelompok', 'f', 'rekapbimbingan~jmlbimbingankklkelompok~resultkklkelompok', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (198, 'upload', 'Laporan File Skripsi', 't', 'laporanfile', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (199, 'upload/insert', 'tambah laporan skripsi', 'f', 'laporanfile~tambah', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (200, 'upload/update', 'ubah laporan skripsi', 'f', 'laporanfile~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (201, 'upload/delete', 'hapus laporan skripsi', 'f', 'laporanfile~hapus', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (202, 'jadwal', 'Jadwal', 't', 'jadwal', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (203, 'jadwal/insert', 'Tambah jadwal seminar', 'f', 'jadwal~insert', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (204, 'jadwal/update', 'Ubah jadwal', 'f', 'jadwal~update', NULL, NULL);
INSERT INTO `functions` (`id`, `name`, `desc`, `menu`, `kode`, `icon`, `no_urut`) VALUES (205, 'jadwal/delete', 'Hapus jadwal', 'f', 'jadwal~delete', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` smallint(6) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
BEGIN;
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (1, 'Admin', 'Mengatur Perilaku Pengguna');
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (2, 'Kepala Prodi', 'Kepala Prodi');
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (3, 'Wakil Kepala Akademik', 'Pengecekan syarat administrasi');
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (4, 'Dosen', 'Dosen');
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (5, 'Mahasiswa', 'Mahasiswa');
INSERT INTO `groups` (`id`, `name`, `desc`) VALUES (8, 'Keuangan', 'Pengelola keuangan');
COMMIT;

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
BEGIN;
INSERT INTO `jadwal` (`id`, `keterangan`, `filename`, `image`, `date`) VALUES (3, 'adasdsdsdds', 'Batas_Akhir_Nilai_(1)11.pdf', 'files/jadwal/Batas_Akhir_Nilai_(1)11.pdf', '2023-02-15');
COMMIT;

-- ----------------------------
-- Table structure for kelompok
-- ----------------------------
DROP TABLE IF EXISTS `kelompok`;
CREATE TABLE `kelompok` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kelompok
-- ----------------------------
BEGIN;
INSERT INTO `kelompok` (`id`, `nama`) VALUES (2, 'Kelompok 1');
INSERT INTO `kelompok` (`id`, `nama`) VALUES (3, 'Kelompok 2');
COMMIT;

-- ----------------------------
-- Table structure for kelompok_kkl
-- ----------------------------
DROP TABLE IF EXISTS `kelompok_kkl`;
CREATE TABLE `kelompok_kkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelompok` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `approv_dosen` tinyint(1) DEFAULT NULL,
  `time_approv_dosen` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kelompok_kkl
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kelompok_mhs
-- ----------------------------
DROP TABLE IF EXISTS `kelompok_mhs`;
CREATE TABLE `kelompok_mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(11) DEFAULT NULL,
  `id_kkl` int(11) DEFAULT NULL,
  `id_kelompok_kkl` int(11) DEFAULT NULL,
  `ketua` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kelompok_mhs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kerja_praktek
-- ----------------------------
DROP TABLE IF EXISTS `kerja_praktek`;
CREATE TABLE `kerja_praktek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `alamat_kp` varchar(255) DEFAULT NULL,
  `alamat_dihub` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approv_dosen` tinyint(1) DEFAULT NULL,
  `approv_kaprodi` tinyint(1) DEFAULT NULL,
  `telpon` int(11) DEFAULT NULL,
  `status_pendaftar` varchar(50) DEFAULT NULL,
  `time_approv_dosen` timestamp NULL DEFAULT NULL,
  `flag_open` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kerja_praktek
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kkl
-- ----------------------------
DROP TABLE IF EXISTS `kkl`;
CREATE TABLE `kkl` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `kategori` varchar(1) DEFAULT NULL,
  `kemampuan` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approv_wakademik` varchar(5) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `alamat_kkl` varchar(255) DEFAULT NULL,
  `alamat_dihub` varchar(255) DEFAULT NULL,
  `telpon` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kkl
-- ----------------------------
BEGIN;
INSERT INTO `kkl` (`id`, `nim`, `nama`, `tahun`, `semester`, `kelas`, `kategori`, `kemampuan`, `filename`, `image`, `approv_wakademik`, `judul`, `lokasi`, `alamat_kkl`, `alamat_dihub`, `telpon`) VALUES (15, '12201766', 'Agus Kresnanto', 2022, 1, 'malam', 'k', 'Agus Kresnanto', 'Adhok2_1671099439.pdf', 'files/kkl/Adhok2_1671099439.pdf', 't', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 12345678901234);
INSERT INTO `kkl` (`id`, `nim`, `nama`, `tahun`, `semester`, `kelas`, `kategori`, `kemampuan`, `filename`, `image`, `approv_wakademik`, `judul`, `lokasi`, `alamat_kkl`, `alamat_dihub`, `telpon`) VALUES (16, '12201767', 'Andhika', 2022, 1, 'siang', 'i', 'Andhika', 'Adhok2_16710994391.pdf', 'files/kkl/Adhok2_16710994391.pdf', 't', 'Andhika', 'Andhika', 'Andhika', 'Andhika', 12345678912345);
COMMIT;

-- ----------------------------
-- Table structure for komentar_bimbingan_kelompok
-- ----------------------------
DROP TABLE IF EXISTS `komentar_bimbingan_kelompok`;
CREATE TABLE `komentar_bimbingan_kelompok` (
  `id` smallint(6) NOT NULL,
  `id_bimbingan_kkl_kelompok` int(11) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `id_user` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_bimbingan_kkl_kelompok` (`id_bimbingan_kkl_kelompok`),
  CONSTRAINT `fk_id_bimbingan_kkl_kelompok` FOREIGN KEY (`id_bimbingan_kkl_kelompok`) REFERENCES `bimbingan_kkl_kelompok` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of komentar_bimbingan_kelompok
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for konversi_nilai
-- ----------------------------
DROP TABLE IF EXISTS `konversi_nilai`;
CREATE TABLE `konversi_nilai` (
  `id` int(11) NOT NULL,
  `kode_huruf` varchar(2) DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of konversi_nilai
-- ----------------------------
BEGIN;
INSERT INTO `konversi_nilai` (`id`, `kode_huruf`, `bobot`) VALUES (1, 'A', 4);
INSERT INTO `konversi_nilai` (`id`, `kode_huruf`, `bobot`) VALUES (2, 'B', 3);
INSERT INTO `konversi_nilai` (`id`, `kode_huruf`, `bobot`) VALUES (3, 'C', 2);
INSERT INTO `konversi_nilai` (`id`, `kode_huruf`, `bobot`) VALUES (4, 'D', 1);
COMMIT;

-- ----------------------------
-- Table structure for krs
-- ----------------------------
DROP TABLE IF EXISTS `krs`;
CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of krs
-- ----------------------------
BEGIN;
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (1, 1, 2021, 2);
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (2, 1, 2022, 1);
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (3, 2, 2021, 2);
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (4, 2, 2022, 1);
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (5, 3, 2021, 2);
INSERT INTO `krs` (`id`, `id_mhs`, `tahun`, `semester`) VALUES (6, 3, 2022, 1);
COMMIT;

-- ----------------------------
-- Table structure for mhs
-- ----------------------------
DROP TABLE IF EXISTS `mhs`;
CREATE TABLE `mhs` (
  `id` smallint(6) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `namamhs` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `kdpst` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`,`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mhs
-- ----------------------------
BEGIN;
INSERT INTO `mhs` (`id`, `nim`, `namamhs`, `status`, `kdpst`) VALUES (1, '12201766', 'Agus Kresnanto', '1', 1);
INSERT INTO `mhs` (`id`, `nim`, `namamhs`, `status`, `kdpst`) VALUES (2, '12201767', 'Andhika', '1', 1);
INSERT INTO `mhs` (`id`, `nim`, `namamhs`, `status`, `kdpst`) VALUES (3, '12201768', 'Jojo', '1', 1);
COMMIT;

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id` bigint(20) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_pembayaran` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
BEGIN;
INSERT INTO `pembayaran` (`id`, `nim`, `nama`, `jenis_pembayaran`, `tahun`, `semester`) VALUES (2, '12201766', 'Agus Kresnanto', 'Kerja Praktek', 2022, 1);
INSERT INTO `pembayaran` (`id`, `nim`, `nama`, `jenis_pembayaran`, `tahun`, `semester`) VALUES (3, '12201766', 'Agus Kresnanto', 'KKL', 2022, 1);
INSERT INTO `pembayaran` (`id`, `nim`, `nama`, `jenis_pembayaran`, `tahun`, `semester`) VALUES (4, '12201766', 'Agus Kresnanto', 'Skripsi', 2022, 1);
INSERT INTO `pembayaran` (`id`, `nim`, `nama`, `jenis_pembayaran`, `tahun`, `semester`) VALUES (5, '12201767', 'Andhika', 'KKL', 2022, 1);
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_kkl
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing_kkl`;
CREATE TABLE `pembimbing_kkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kkl` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  `approv_dosen` tinyint(1) DEFAULT NULL,
  `time_approv_dosen` timestamp NULL DEFAULT NULL,
  `flag_open` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembimbing_kkl
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_kp
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing_kp`;
CREATE TABLE `pembimbing_kp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kp` int(11) DEFAULT NULL,
  `id_dosen1` int(11) DEFAULT NULL,
  `status1` tinyint(1) DEFAULT NULL,
  `id_dosen2` int(11) DEFAULT NULL,
  `status2` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembimbing_kp
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing_skripsi`;
CREATE TABLE `pembimbing_skripsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skripsi` int(11) DEFAULT NULL,
  `id_dosen1` int(11) DEFAULT NULL,
  `status1` tinyint(1) DEFAULT NULL,
  `id_dosen2` int(11) DEFAULT NULL,
  `status2` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembimbing_skripsi
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `function_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privileges
-- ----------------------------
BEGIN;
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1821, 2, 116);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1822, 2, 117);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1823, 2, 130);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1824, 2, 133);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1825, 2, 118);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1826, 2, 119);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1827, 2, 120);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1828, 2, 126);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1829, 2, 129);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1830, 2, 125);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1831, 2, 122);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1832, 2, 123);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1833, 2, 128);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1834, 2, 135);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1835, 2, 136);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1836, 2, 142);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1837, 2, 145);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1838, 2, 141);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1839, 2, 138);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1840, 2, 139);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1841, 2, 144);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1842, 2, 168);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1843, 2, 175);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1844, 2, 176);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1845, 2, 171);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1846, 2, 172);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1847, 2, 173);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1848, 2, 174);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1849, 2, 177);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1850, 2, 186);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1851, 2, 182);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1852, 2, 183);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1853, 2, 184);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1854, 2, 185);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1855, 2, 178);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1856, 2, 179);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1857, 2, 180);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1858, 2, 181);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1859, 2, 189);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1860, 2, 190);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1861, 2, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1862, 2, 187);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1863, 2, 188);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1946, 3, 177);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1947, 3, 186);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1948, 3, 182);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1949, 3, 183);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1950, 3, 184);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1951, 3, 185);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1952, 3, 118);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1953, 3, 162);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1954, 3, 163);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1955, 3, 164);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1956, 3, 167);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1957, 3, 116);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1958, 3, 155);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1959, 3, 160);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1960, 3, 159);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1961, 3, 161);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (1962, 3, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2307, 8, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2308, 8, 192);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2309, 8, 195);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2310, 8, 193);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2311, 8, 194);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2385, 4, 177);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2386, 4, 186);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2387, 4, 182);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2388, 4, 183);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2389, 4, 184);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2390, 4, 185);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2391, 4, 178);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2392, 4, 179);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2393, 4, 180);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2394, 4, 181);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2395, 4, 118);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2396, 4, 162);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2397, 4, 163);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2398, 4, 165);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2399, 4, 166);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2400, 4, 164);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2401, 4, 119);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2402, 4, 124);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2403, 4, 120);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2404, 4, 126);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2405, 4, 129);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2406, 4, 125);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2407, 4, 122);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2408, 4, 123);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2409, 4, 121);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2410, 4, 135);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2411, 4, 140);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2412, 4, 136);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2413, 4, 142);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2414, 4, 141);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2415, 4, 138);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2416, 4, 139);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2417, 4, 137);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2418, 4, 168);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2419, 4, 175);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2420, 4, 176);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2421, 4, 196);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2422, 4, 197);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2423, 4, 171);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2424, 4, 172);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2425, 4, 173);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2426, 4, 174);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2427, 4, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2503, 5, 118);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2504, 5, 162);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2505, 5, 163);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2506, 5, 165);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2507, 5, 166);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2508, 5, 164);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2509, 5, 119);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2510, 5, 120);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2511, 5, 126);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2512, 5, 125);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2513, 5, 122);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2514, 5, 123);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2515, 5, 121);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2516, 5, 127);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2517, 5, 135);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2518, 5, 136);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2519, 5, 142);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2520, 5, 141);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2521, 5, 138);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2522, 5, 139);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2523, 5, 137);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2524, 5, 143);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2525, 5, 116);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2526, 5, 117);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2527, 5, 155);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2528, 5, 156);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2529, 5, 158);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2530, 5, 157);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2531, 5, 130);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2532, 5, 131);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2533, 5, 134);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2534, 5, 132);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2535, 5, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2536, 5, 198);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2537, 5, 201);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2538, 5, 199);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2539, 5, 200);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2540, 1, 118);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2541, 1, 162);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2542, 1, 163);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2543, 1, 164);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2544, 1, 119);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2545, 1, 120);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2546, 1, 126);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2547, 1, 129);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2548, 1, 125);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2549, 1, 122);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2550, 1, 123);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2551, 1, 128);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2552, 1, 135);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2553, 1, 136);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2554, 1, 142);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2555, 1, 145);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2556, 1, 141);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2557, 1, 138);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2558, 1, 139);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2559, 1, 144);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2560, 1, 177);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2561, 1, 186);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2562, 1, 182);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2563, 1, 183);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2564, 1, 184);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2565, 1, 185);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2566, 1, 178);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2567, 1, 179);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2568, 1, 180);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2569, 1, 181);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2570, 1, 13);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2571, 1, 19);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2572, 1, 17);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2573, 1, 18);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2574, 1, 16);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2575, 1, 8);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2576, 1, 5);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2577, 1, 4);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2578, 1, 2);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2579, 1, 3);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2580, 1, 116);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2581, 1, 117);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2582, 1, 130);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2583, 1, 146);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2584, 1, 151);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2585, 1, 154);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2586, 1, 152);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2587, 1, 153);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2588, 1, 147);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2589, 1, 150);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2590, 1, 148);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2591, 1, 149);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2592, 1, 168);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2593, 1, 175);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2594, 1, 176);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2595, 1, 196);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2596, 1, 197);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2597, 1, 171);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2598, 1, 172);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2599, 1, 173);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2600, 1, 174);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2601, 1, 189);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2602, 1, 190);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2603, 1, 115);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2604, 1, 202);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2605, 1, 205);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2606, 1, 203);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2607, 1, 204);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2608, 1, 192);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2609, 1, 195);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2610, 1, 193);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2611, 1, 194);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2612, 1, 187);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2613, 1, 188);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2614, 1, 198);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2615, 1, 200);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2616, 1, 12);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2617, 1, 20);
INSERT INTO `privileges` (`id`, `group_id`, `function_id`) VALUES (2618, 1, 1);
COMMIT;

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prodi
-- ----------------------------
BEGIN;
INSERT INTO `prodi` (`id`, `nama`) VALUES (1, 'Informatika');
INSERT INTO `prodi` (`id`, `nama`) VALUES (2, 'Sistem Informatika');
COMMIT;

-- ----------------------------
-- Table structure for sk_kerjapraktek
-- ----------------------------
DROP TABLE IF EXISTS `sk_kerjapraktek`;
CREATE TABLE `sk_kerjapraktek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kp` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sk_kerjapraktek
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for sk_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `sk_skripsi`;
CREATE TABLE `sk_skripsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skripsi` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sk_skripsi
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for skripsi
-- ----------------------------
DROP TABLE IF EXISTS `skripsi`;
CREATE TABLE `skripsi` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  `filename_syarat` varchar(255) DEFAULT NULL,
  `image_syarat` varchar(255) DEFAULT NULL,
  `filename_proposal` varchar(255) DEFAULT NULL,
  `image_proposal` varchar(255) DEFAULT NULL,
  `approv_kaprodi` varchar(5) DEFAULT NULL,
  `approv_dosen` varchar(5) DEFAULT NULL,
  `status_pendaftar` varchar(1) DEFAULT NULL,
  `telpon` bigint(20) DEFAULT NULL,
  `time_approv_dosen` datetime DEFAULT NULL,
  `flag_open` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of skripsi
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status
-- ----------------------------
BEGIN;
INSERT INTO `status` (`id`, `status`) VALUES (1, 'Pengajuan');
INSERT INTO `status` (`id`, `status`) VALUES (2, 'Administrasi');
INSERT INTO `status` (`id`, `status`) VALUES (3, 'Persetujuan Dosen Pembimbing');
INSERT INTO `status` (`id`, `status`) VALUES (4, 'Disetujui');
COMMIT;

-- ----------------------------
-- Table structure for upload
-- ----------------------------
DROP TABLE IF EXISTS `upload`;
CREATE TABLE `upload` (
  `id` bigint(20) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  `filename_cover` varchar(255) DEFAULT NULL,
  `image_cover` varchar(255) DEFAULT NULL,
  `filename_pengesahan` varchar(255) DEFAULT NULL,
  `image_pengesahan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upload
-- ----------------------------
BEGIN;
INSERT INTO `upload` (`id`, `nim`, `nama`, `judul`, `tahun`, `semester`, `filename_cover`, `image_cover`, `filename_pengesahan`, `image_pengesahan`) VALUES (2, '12201767', 'Andhika', 'sdsad', 2022, 1, '07022023_Sinkronisasi_Tata_Kelola_PK_Aset.pdf', 'files/upload/07022023_Sinkronisasi_Tata_Kelola_PK_Aset.pdf', 'Permohonan_input_KRS_an_Mamelia.pdf', 'files/upload/Permohonan_input_KRS_an_Mamelia.pdf');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `is_active` varchar(5) DEFAULT NULL,
  `waktu_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (2, 'admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2023-03-25 17:13:36');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (3, 'kaprodi', 'Kepala Program Studi', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2023-02-09 11:30:16');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (5, '12201766', 'Agus Kresnanto', 'e1b20a09c73c75df671e8d96d2b8408b56cbe82b', NULL, 't', '2023-03-25 17:43:49');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (6, '201230047', 'Andri Syafrianto, S.Kom, M.Cs.', 'ff712bd71e46fb1ea0bc478de61283b094094d27', NULL, 't', '2023-02-09 11:28:38');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (7, 'waka', 'wakil kepala akademik', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2023-02-09 11:29:45');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (8, '12201767', 'Andhika', '690d4e585487baf1712cf7278b846a9bb0accb7d', NULL, 't', '2023-02-14 15:29:42');
INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `password`, `id_prodi`, `is_active`, `waktu_login`) VALUES (9, '12201768', 'Jojo', '15f2d3a7dab60b2f808a20c96e092ebf08e01622', NULL, 't', '2022-11-29 16:40:15');
COMMIT;

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` smallint(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
BEGIN;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (2, 2, 1);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (3, 3, 2);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (4, 4, 1);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (5, 5, 5);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (6, 6, 4);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (7, 7, 3);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (8, 8, 5);
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (9, 9, 5);
COMMIT;

-- ----------------------------
-- Table structure for view_jadwal
-- ----------------------------
DROP TABLE IF EXISTS `view_jadwal`;
CREATE TABLE `view_jadwal` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_jadwal` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of view_jadwal
-- ----------------------------
BEGIN;
INSERT INTO `view_jadwal` (`id`, `id_user`, `id_jadwal`) VALUES (3, 5, 3);
INSERT INTO `view_jadwal` (`id`, `id_user`, `id_jadwal`) VALUES (4, 8, 3);
INSERT INTO `view_jadwal` (`id`, `id_user`, `id_jadwal`) VALUES (7, 9, NULL);
INSERT INTO `view_jadwal` (`id`, `id_user`, `id_jadwal`) VALUES (8, 9, 3);
COMMIT;

-- ----------------------------
-- View structure for v_bimbingan_dosen_kkl
-- ----------------------------
DROP VIEW IF EXISTS `v_bimbingan_dosen_kkl`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bimbingan_dosen_kkl` AS select `bimbingan`.`kkl`.`id` AS `id_kkl`,`bimbingan`.`kkl`.`nim` AS `nim`,`bimbingan`.`kkl`.`nama` AS `nama`,`bimbingan`.`kkl`.`judul` AS `judul`,`bimbingan`.`kkl`.`lokasi` AS `lokasi`,`bimbingan`.`kkl`.`alamat_kkl` AS `alamat_kkl`,`bimbingan`.`kkl`.`alamat_dihub` AS `alamat_dihub`,`bimbingan`.`kkl`.`image` AS `image`,`bimbingan`.`kkl`.`telpon` AS `telpon`,`bimbingan`.`kkl`.`tahun` AS `tahun`,`bimbingan`.`kkl`.`semester` AS `semester`,`bimbingan`.`kkl`.`approv_wakademik` AS `approv_wakademik`,`pk`.`approv_dosen` AS `approv_dosen`,concat((`pk`.`tgl_awal` or ' s.d ' or `pk`.`tgl_akhir`)) AS `tanggal`,`pk`.`tgl_akhir` AS `end`,`pk`.`no_sk` AS `no_sk`,`pk`.`flag_open` AS `flag_open`,`d`.`nodos` AS `npp_dosen`,(case when (`pk`.`id_dosen` is not null) then concat((`d`.`gelar_depan` or ' ' or `d`.`nmdos` or ', ' or `d`.`gelar_belakang`)) else 'dosen belum diset' end) AS `dosen`,`v_bimb`.`id_user` AS `id_user` from (((`bimbingan`.`kkl` left join `bimbingan`.`pembimbing_kkl` `pk` on((`pk`.`id_kkl` = `bimbingan`.`kkl`.`id`))) left join `bimbingan`.`dosen` `d` on((`d`.`id` = `pk`.`id_dosen`))) left join (select `bs`.`id_kkl` AS `id_kkl`,`bs`.`id_user` AS `id_user` from `bimbingan`.`bimbingan_kkl_individu` `bs` order by `bs`.`id` desc limit 1) `v_bimb` on((`v_bimb`.`id_kkl` = `bimbingan`.`kkl`.`id`))) where ((`bimbingan`.`kkl`.`approv_wakademik` = TRUE) and (`bimbingan`.`kkl`.`kategori` = 'i')) order by `bimbingan`.`kkl`.`id`;

-- ----------------------------
-- View structure for v_bimbingan_dosen_kkl_kelompok
-- ----------------------------
DROP VIEW IF EXISTS `v_bimbingan_dosen_kkl_kelompok`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bimbingan_dosen_kkl_kelompok` AS select `kk`.`id` AS `id_kelompok_kkl`,`kk`.`tahun` AS `tahun`,`kk`.`semester` AS `semester`,`k`.`nama` AS `nm_kelompok`,`d`.`nodos` AS `npp_dosen`,(case when (`kk`.`id_dosen` is not null) then concat((`d`.`gelar_depan` or ' ' or `d`.`nmdos` or ', ' or `d`.`gelar_belakang`)) else 'dosen belum diset' end) AS `dosen`,concat((`kk`.`tgl_awal` or ' s.d ' or `kk`.`tgl_akhir`)) AS `tanggal`,(select count(0) AS `jumlah` from `kelompok_mhs` where (`kelompok_mhs`.`id_kelompok_kkl` = `kk`.`id`)) AS `peserta` from ((`kelompok_kkl` `kk` left join `kelompok` `k` on((`k`.`id` = `kk`.`id_kelompok`))) left join `dosen` `d` on((`d`.`id` = `kk`.`id_dosen`)));

-- ----------------------------
-- View structure for v_bimbingan_dosen_kp
-- ----------------------------
DROP VIEW IF EXISTS `v_bimbingan_dosen_kp`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bimbingan_dosen_kp` AS select `kp`.`id` AS `id_kp`,`kp`.`nim` AS `nim`,`kp`.`nama` AS `nama`,`kp`.`judul` AS `judul`,`kp`.`lokasi` AS `lokasi`,`kp`.`alamat_kp` AS `alamat_kp`,`kp`.`alamat_dihub` AS `alamat_dihub`,`kp`.`image` AS `image`,`kp`.`telpon` AS `telpon`,`kp`.`tahun` AS `tahun`,`kp`.`semester` AS `semester`,`kp`.`approv_kaprodi` AS `approv_kaprodi`,`kp`.`approv_dosen` AS `approv_dosen`,`kp`.`status_pendaftar` AS `status_pendaftar`,`kp`.`flag_open` AS `flag_open`,concat((`sk`.`tgl_awal` or ' s.d ' or `sk`.`tgl_akhir`)) AS `tanggal`,`sk`.`tgl_akhir` AS `end`,(case when (`pk`.`status1` = TRUE) then concat((`d1`.`gelar_depan` or ' ' or `d1`.`nmdos` or ', ' or `d1`.`gelar_belakang`)) when (`pk`.`status2` = TRUE) then concat((`d2`.`gelar_depan` or ' ' or `d2`.`nmdos` or ', ' or `d2`.`gelar_belakang`)) else 'dosen belum disetujui' end) AS `dosen`,(case when (`pk`.`status1` = TRUE) then `d1`.`nodos` when (`pk`.`status2` = TRUE) then `d2`.`nodos` else '' end) AS `npp_dosen`,`v_bimb`.`id_user` AS `id_user` from ((((((`bimbingan`.`kerja_praktek` `kp` left join `bimbingan`.`pembimbing_kp` `pk` on((`pk`.`id_kp` = `kp`.`id`))) left join `bimbingan`.`dosen` `d1` on((`d1`.`id` = `pk`.`id_dosen1`))) left join `bimbingan`.`dosen` `d2` on((`d2`.`id` = `pk`.`id_dosen2`))) left join (select max(`bimbingan`.`sk_kerjapraktek`.`id`) AS `id_sk`,`bimbingan`.`sk_kerjapraktek`.`id_kp` AS `id_kp` from `bimbingan`.`sk_kerjapraktek` group by `bimbingan`.`sk_kerjapraktek`.`id_kp`) `skp` on((`skp`.`id_kp` = `kp`.`id`))) left join `bimbingan`.`sk_kerjapraktek` `sk` on((`sk`.`id` = `skp`.`id_sk`))) left join (select `bk`.`id_kp` AS `id_kp`,`bk`.`id_user` AS `id_user` from (`bimbingan`.`bimbingan_kp` `bk` left join `bimbingan`.`kerja_praktek` `kp_1` on((`kp_1`.`id` = `bk`.`id_kp`))) where isnull(`kp_1`.`approv_dosen`) order by `bk`.`id` desc limit 1) `v_bimb` on((`v_bimb`.`id_kp` = `kp`.`id`))) where (`kp`.`approv_kaprodi` = TRUE) order by `kp`.`id`;

-- ----------------------------
-- View structure for v_bimbingan_dosen_skripsi
-- ----------------------------
DROP VIEW IF EXISTS `v_bimbingan_dosen_skripsi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bimbingan_dosen_skripsi` AS select `s`.`id` AS `id_skripsi`,`s`.`nim` AS `nim`,`s`.`nama` AS `nama`,`s`.`judul` AS `judul`,`s`.`image_syarat` AS `image_syarat`,`s`.`image_proposal` AS `image_proposal`,`s`.`telpon` AS `telpon`,`s`.`tahun` AS `tahun`,`s`.`semester` AS `semester`,`s`.`approv_kaprodi` AS `approv_kaprodi`,`s`.`approv_dosen` AS `approv_dosen`,`s`.`status_pendaftar` AS `status_pendaftar`,`s`.`flag_open` AS `flag_open`,concat((`sk`.`tgl_awal` or ' s.d ' or `sk`.`tgl_akhir`)) AS `tanggal`,`sk`.`tgl_akhir` AS `end`,(case when (`pk`.`status1` = TRUE) then concat((`d1`.`gelar_depan` or '' or `d1`.`nmdos` or ', ' or `d1`.`gelar_belakang`)) when (`pk`.`status2` = TRUE) then concat((`d2`.`gelar_depan` or '' or `d2`.`nmdos` or ', ' or `d2`.`gelar_belakang`)) else 'dosen belum disetujui' end) AS `dosen`,(case when (`pk`.`status1` = TRUE) then `d1`.`nodos` when (`pk`.`status2` = TRUE) then `d2`.`nodos` else '' end) AS `npp_dosen`,`v_bimb`.`id_user` AS `id_user` from ((((((`bimbingan`.`skripsi` `s` left join `bimbingan`.`pembimbing_skripsi` `pk` on((`pk`.`id_skripsi` = `s`.`id`))) left join `bimbingan`.`dosen` `d1` on((`d1`.`id` = `pk`.`id_dosen1`))) left join `bimbingan`.`dosen` `d2` on((`d2`.`id` = `pk`.`id_dosen2`))) left join (select max(`bimbingan`.`sk_skripsi`.`id`) AS `id_sk`,`bimbingan`.`sk_skripsi`.`id_skripsi` AS `id_skripsi` from `bimbingan`.`sk_skripsi` group by `bimbingan`.`sk_skripsi`.`id_skripsi`) `skp` on((`skp`.`id_skripsi` = `s`.`id`))) left join `bimbingan`.`sk_skripsi` `sk` on((`sk`.`id` = `skp`.`id_sk`))) left join (select `bs`.`id_skripsi` AS `id_skripsi`,`bs`.`id_user` AS `id_user` from (`bimbingan`.`bimbingan_skripsi` `bs` left join `bimbingan`.`skripsi` `s_1` on((`s_1`.`id` = `bs`.`id_skripsi`))) where isnull(`s_1`.`approv_dosen`) order by `bs`.`id` desc limit 1) `v_bimb` on((`v_bimb`.`id_skripsi` = `s`.`id`))) where (`s`.`approv_kaprodi` = TRUE) order by `s`.`id`;

-- ----------------------------
-- View structure for v_bimbingan_mhs_kelompok_kkl
-- ----------------------------
DROP VIEW IF EXISTS `v_bimbingan_mhs_kelompok_kkl`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bimbingan_mhs_kelompok_kkl` AS select `k`.`nama` AS `nm_kelompok`,`kkl`.`nim` AS `nim`,`kkl`.`nama` AS `nama`,`kkl`.`judul` AS `judul`,`kkl`.`lokasi` AS `lokasi`,`km`.`ketua` AS `ketua`,`km`.`id_kelompok_kkl` AS `id_kelompok_kkl`,`kk`.`tahun` AS `tahun`,`kk`.`semester` AS `semester`,`kk`.`approv_dosen` AS `approv_dosen`,concat((`kk`.`tgl_awal` or ' s.d ' or `kk`.`tgl_akhir`)) AS `tanggal`,`kk`.`tgl_akhir` AS `end`,`d`.`nodos` AS `npp_dosen`,(case when (`kk`.`id_dosen` is not null) then concat((`d`.`gelar_depan` or '' or `d`.`nmdos` or ', ' or `d`.`gelar_belakang`)) else 'dosen belum diset' end) AS `dosen` from ((((`kkl` left join `kelompok_mhs` `km` on((`km`.`id_kkl` = `kkl`.`id`))) left join `kelompok_kkl` `kk` on((`kk`.`id` = `km`.`id_kelompok_kkl`))) left join `kelompok` `k` on((`k`.`id` = `kk`.`id_kelompok`))) left join `dosen` `d` on((`d`.`id` = `kk`.`id_dosen`))) where (`kkl`.`kategori` = 'k') order by `k`.`id`,`kkl`.`nim`;

-- ----------------------------
-- View structure for v_pembayaran
-- ----------------------------
DROP VIEW IF EXISTS `v_pembayaran`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_pembayaran` AS select `p`.`id` AS `id`,`p`.`tahun` AS `tahun`,`p`.`semester` AS `semester`,`p`.`jenis_pembayaran` AS `jenis_pembayaran`,`m`.`nim` AS `nim`,`m`.`namamhs` AS `namamhs`,`m`.`kdpst` AS `kdpst`,(case when ((`kp`.`approv_dosen` = TRUE) and (`p`.`jenis_pembayaran` = 'Kerja Praktek')) then 't' when ((`s`.`approv_dosen` = TRUE) and (`p`.`jenis_pembayaran` = 'Skripsi')) then 't' when ((`v_kkl`.`approv_dosen` = TRUE) and (`p`.`jenis_pembayaran` = 'KKL')) then 't' when ((`v_kkl_kel`.`approv_dosen` = TRUE) and (`p`.`jenis_pembayaran` = 'KKL')) then 't' else NULL end) AS `approv_dosen` from (((((`bimbingan`.`pembayaran` `p` left join `bimbingan`.`mhs` `m` on((`m`.`nim` = `p`.`nim`))) left join `bimbingan`.`kerja_praktek` `kp` on((`kp`.`nim` = `m`.`nim`))) left join `bimbingan`.`skripsi` `s` on((`s`.`nim` = `m`.`nim`))) left join (select `bimbingan`.`kkl`.`nim` AS `nim`,`pk`.`approv_dosen` AS `approv_dosen` from (`bimbingan`.`kkl` left join `bimbingan`.`pembimbing_kkl` `pk` on((`pk`.`id_kkl` = `bimbingan`.`kkl`.`id`)))) `v_kkl` on((`v_kkl`.`nim` = `m`.`nim`))) left join (select `bimbingan`.`kkl`.`nim` AS `nim`,`kk`.`approv_dosen` AS `approv_dosen` from ((((`bimbingan`.`kkl` left join `bimbingan`.`kelompok_mhs` `km` on((`km`.`id_kkl` = `bimbingan`.`kkl`.`id`))) left join `bimbingan`.`kelompok_kkl` `kk` on((`kk`.`id` = `km`.`id_kelompok_kkl`))) left join `bimbingan`.`kelompok` `k` on((`k`.`id` = `kk`.`id_kelompok`))) left join `bimbingan`.`dosen` `d` on((`d`.`id` = `kk`.`id_dosen`))) where (`bimbingan`.`kkl`.`kategori` = 'k')) `v_kkl_kel` on((`v_kkl_kel`.`nim` = `m`.`nim`)));

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_kkl_individu
-- ----------------------------
DROP VIEW IF EXISTS `v_rekap_count_jml_bimbingan_kkl_individu`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_rekap_count_jml_bimbingan_kkl_individu` AS select (case when isnull(`v_bimb`.`jml_bimbingan`) then '0' else `v_bimb`.`jml_bimbingan` end) AS `jml_bimbingan`,`bimbingan`.`kkl`.`nim` AS `nim`,`bimbingan`.`kkl`.`nama` AS `nama`,`bimbingan`.`kkl`.`judul` AS `judul`,`bimbingan`.`kkl`.`lokasi` AS `lokasi`,`bimbingan`.`kkl`.`tahun` AS `tahun`,`bimbingan`.`kkl`.`semester` AS `semester`,`pk`.`tgl_awal` AS `tgl_awal`,cast(`pk`.`time_approv_dosen` as date) AS `tgl_approv`,concat((`d`.`gelar_depan` or ' ' or `d`.`nmdos` or ', ' or `d`.`gelar_belakang`)) AS `dosen`,`d`.`nodos` AS `npp_dosen`,`bimbingan`.`kkl`.`id` AS `id_kkl` from (((`bimbingan`.`kkl` left join `bimbingan`.`pembimbing_kkl` `pk` on((`pk`.`id_kkl` = `bimbingan`.`kkl`.`id`))) left join `bimbingan`.`dosen` `d` on((`d`.`id` = `pk`.`id_dosen`))) left join (select count(`v_bk`.`id_kkl`) AS `jml_bimbingan`,`v_bk`.`id_kkl` AS `id_kkl` from (select count(`bk`.`id`) AS `jml_bimbingan`,`bk`.`id_kkl` AS `id_kkl` from ((`bimbingan`.`bimbingan_kkl_individu` `bk` left join `bimbingan`.`users` `u` on((`u`.`id` = `bk`.`id_user`))) left join `bimbingan`.`users_groups` `ug` on((`ug`.`user_id` = `u`.`id`))) where (`ug`.`group_id` = 4) group by `bk`.`id_kkl`,`bk`.`date`) `v_bk` group by `v_bk`.`id_kkl`) `v_bimb` on((`v_bimb`.`id_kkl` = `bimbingan`.`kkl`.`id`))) where (isnull(`pk`.`approv_dosen`) and (`bimbingan`.`kkl`.`kategori` = 'i')) order by `bimbingan`.`kkl`.`tahun` desc,`bimbingan`.`kkl`.`semester` desc,`bimbingan`.`kkl`.`nim`;

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_kkl_kelompok
-- ----------------------------
DROP VIEW IF EXISTS `v_rekap_count_jml_bimbingan_kkl_kelompok`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_rekap_count_jml_bimbingan_kkl_kelompok` AS select (case when isnull(`v_bimb`.`jml_bimbingan`) then '0' else `v_bimb`.`jml_bimbingan` end) AS `jml_bimbingan`,`k`.`nama` AS `nm_kelompok`,`kk`.`tahun` AS `tahun`,`kk`.`semester` AS `semester`,`kk`.`tgl_awal` AS `tgl_awal`,cast(`kk`.`time_approv_dosen` as date) AS `tgl_approv`,concat((`d`.`gelar_depan` or ' ' or `d`.`nmdos` or ', ' or `d`.`gelar_belakang`)) AS `dosen`,`d`.`nodos` AS `npp_dosen`,count(`km`.`nim`) AS `jml_mhs`,`kk`.`id` AS `id_kelompok_kkl` from ((((`bimbingan`.`kelompok_mhs` `km` left join `bimbingan`.`kelompok_kkl` `kk` on((`kk`.`id` = `km`.`id_kelompok_kkl`))) left join `bimbingan`.`kelompok` `k` on((`k`.`id` = `kk`.`id_kelompok`))) left join `bimbingan`.`dosen` `d` on((`d`.`id` = `kk`.`id_dosen`))) left join (select count(`v_bk`.`id_kelompok_kkl`) AS `jml_bimbingan`,`v_bk`.`id_kelompok_kkl` AS `id_kelompok_kkl` from (select `bk`.`id_kelompok_kkl` AS `id_kelompok_kkl`,`bk`.`date` AS `date` from ((`bimbingan`.`bimbingan_kkl_kelompok` `bk` left join `bimbingan`.`users` `u` on((`u`.`id` = `bk`.`id_user`))) left join `bimbingan`.`users_groups` `ug` on((`ug`.`user_id` = `u`.`id`))) where (`ug`.`group_id` = 4) group by `bk`.`id_kelompok_kkl`,`bk`.`date`) `v_bk` group by `v_bk`.`id_kelompok_kkl`) `v_bimb` on((`v_bimb`.`id_kelompok_kkl` = `kk`.`id`))) where isnull(`kk`.`approv_dosen`) group by `k`.`nama`,`kk`.`tahun`,`kk`.`semester`,`kk`.`tgl_awal`,`v_bimb`.`jml_bimbingan`,`kk`.`time_approv_dosen`,`d`.`gelar_depan`,`d`.`nmdos`,`d`.`gelar_belakang`,`d`.`nodos`,`kk`.`id` order by `kk`.`tahun` desc,`kk`.`semester` desc;

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_kp
-- ----------------------------
DROP VIEW IF EXISTS `v_rekap_count_jml_bimbingan_kp`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_rekap_count_jml_bimbingan_kp` AS select (case when isnull(`v_bimb`.`jml_bimbingan`) then '0' else `v_bimb`.`jml_bimbingan` end) AS `jml_bimbingan`,`s`.`nim` AS `nim`,`s`.`nama` AS `nama`,`s`.`judul` AS `judul`,`s`.`tahun` AS `tahun`,`s`.`semester` AS `semester`,(case when (`pk`.`status1` = TRUE) then concat((`d1`.`gelar_depan` or ' ' or `d1`.`nmdos` or ', ' or `d1`.`gelar_belakang`)) when (`pk`.`status2` = TRUE) then concat((`d2`.`gelar_depan` or ' ' or `d2`.`nmdos` or ', ' or `d2`.`gelar_belakang`)) else 'dosen belum disetujui' end) AS `dosen`,(case when (`pk`.`status1` = TRUE) then `d1`.`nodos` when (`pk`.`status2` = TRUE) then `d2`.`nodos` else '' end) AS `npp_dosen` from ((((`bimbingan`.`kerja_praktek` `s` left join `bimbingan`.`pembimbing_kp` `pk` on((`pk`.`id_kp` = `s`.`id`))) left join `bimbingan`.`dosen` `d1` on((`d1`.`id` = `pk`.`id_dosen1`))) left join `bimbingan`.`dosen` `d2` on((`d2`.`id` = `pk`.`id_dosen2`))) left join (select count(`v_bk`.`id_kp`) AS `jml_bimbingan`,`v_bk`.`id_kp` AS `id_kp` from (select `bk`.`id_kp` AS `id_kp`,`bk`.`date` AS `date` from ((`bimbingan`.`bimbingan_kp` `bk` left join `bimbingan`.`users` `u` on((`u`.`id` = `bk`.`id_user`))) left join `bimbingan`.`users_groups` `ug` on((`ug`.`user_id` = `u`.`id`))) where (`ug`.`group_id` = 4) group by `bk`.`id_kp`,`bk`.`date`) `v_bk` group by `v_bk`.`id_kp`) `v_bimb` on((`v_bimb`.`id_kp` = `s`.`id`))) where isnull(`s`.`approv_dosen`);

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_skripsi
-- ----------------------------
DROP VIEW IF EXISTS `v_rekap_count_jml_bimbingan_skripsi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_rekap_count_jml_bimbingan_skripsi` AS select (case when isnull(`v_bimb`.`jml_bimbingan`) then '0' else `v_bimb`.`jml_bimbingan` end) AS `jml_bimbingan`,`s`.`nim` AS `nim`,`s`.`nama` AS `nama`,`s`.`judul` AS `judul`,`s`.`tahun` AS `tahun`,`s`.`semester` AS `semester`,(case when (`pk`.`status1` = TRUE) then concat((`d1`.`gelar_depan` or ' ' or `d1`.`nmdos` or ', ' or `d1`.`gelar_belakang`)) when (`pk`.`status2` = TRUE) then concat((`d2`.`gelar_depan` or ' ' or `d2`.`nmdos` or ', ' or `d2`.`gelar_belakang`)) else 'dosen belum disetujui' end) AS `dosen`,(case when (`pk`.`status1` = TRUE) then `d1`.`nodos` when (`pk`.`status2` = TRUE) then `d2`.`nodos` else '' end) AS `npp_dosen` from ((((`bimbingan`.`skripsi` `s` left join `bimbingan`.`pembimbing_skripsi` `pk` on((`pk`.`id_skripsi` = `s`.`id`))) left join `bimbingan`.`dosen` `d1` on((`d1`.`id` = `pk`.`id_dosen1`))) left join `bimbingan`.`dosen` `d2` on((`d2`.`id` = `pk`.`id_dosen2`))) left join (select count(`v_bk`.`id_skripsi`) AS `jml_bimbingan`,`v_bk`.`id_skripsi` AS `id_skripsi` from (select `bk`.`id_skripsi` AS `id_skripsi`,`bk`.`date` AS `date` from ((`bimbingan`.`bimbingan_skripsi` `bk` left join `bimbingan`.`users` `u` on((`u`.`id` = `bk`.`id_user`))) left join `bimbingan`.`users_groups` `ug` on((`ug`.`user_id` = `u`.`id`))) where (`ug`.`group_id` = 4) group by `bk`.`id_skripsi`,`bk`.`date`) `v_bk` group by `v_bk`.`id_skripsi`) `v_bimb` on((`v_bimb`.`id_skripsi` = `s`.`id`))) where isnull(`s`.`approv_dosen`);

SET FOREIGN_KEY_CHECKS = 1;
