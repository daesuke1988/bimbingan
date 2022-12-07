/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : PostgreSQL
 Source Server Version : 120012
 Source Host           : localhost:5432
 Source Catalog        : bimbingan_kp
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 120012
 File Encoding         : 65001

 Date: 06/12/2022 22:54:52
*/


-- ----------------------------
-- Sequence structure for bimbingan_kkl_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."bimbingan_kkl_id_seq";
CREATE SEQUENCE "public"."bimbingan_kkl_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."bimbingan_kkl_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for bimbingan_kp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."bimbingan_kp_id_seq";
CREATE SEQUENCE "public"."bimbingan_kp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
ALTER SEQUENCE "public"."bimbingan_kp_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for bimbingan_skripsi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."bimbingan_skripsi_id_seq";
CREATE SEQUENCE "public"."bimbingan_skripsi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."bimbingan_skripsi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for config_krs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."config_krs_id_seq";
CREATE SEQUENCE "public"."config_krs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."config_krs_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for data_studi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."data_studi_id_seq";
CREATE SEQUENCE "public"."data_studi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."data_studi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for dosen_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."dosen_id_seq";
CREATE SEQUENCE "public"."dosen_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."dosen_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for functions_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."functions_id_seq";
CREATE SEQUENCE "public"."functions_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."functions_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for groups_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."groups_id_seq";
CREATE SEQUENCE "public"."groups_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."groups_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for kelompok_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."kelompok_id_seq";
CREATE SEQUENCE "public"."kelompok_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."kelompok_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for kelompok_kkl_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."kelompok_kkl_id_seq";
CREATE SEQUENCE "public"."kelompok_kkl_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."kelompok_kkl_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for kelompok_mhs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."kelompok_mhs_id_seq";
CREATE SEQUENCE "public"."kelompok_mhs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."kelompok_mhs_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for kerja_praktek_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."kerja_praktek_id_seq";
CREATE SEQUENCE "public"."kerja_praktek_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."kerja_praktek_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for kkl_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."kkl_id_seq";
CREATE SEQUENCE "public"."kkl_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."kkl_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for komentar_bimbingan_kelompok_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."komentar_bimbingan_kelompok_id_seq";
CREATE SEQUENCE "public"."komentar_bimbingan_kelompok_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."komentar_bimbingan_kelompok_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for konversi_nilai_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."konversi_nilai_id_seq";
CREATE SEQUENCE "public"."konversi_nilai_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."konversi_nilai_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for krs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."krs_id_seq";
CREATE SEQUENCE "public"."krs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."krs_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for mhs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."mhs_id_seq";
CREATE SEQUENCE "public"."mhs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."mhs_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for pembimbing_kkl_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pembimbing_kkl_id_seq";
CREATE SEQUENCE "public"."pembimbing_kkl_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."pembimbing_kkl_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for pembimbing_kp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pembimbing_kp_id_seq";
CREATE SEQUENCE "public"."pembimbing_kp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."pembimbing_kp_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for pembimbing_skripsi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."pembimbing_skripsi_id_seq";
CREATE SEQUENCE "public"."pembimbing_skripsi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."pembimbing_skripsi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for privileges_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."privileges_id_seq";
CREATE SEQUENCE "public"."privileges_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."privileges_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for prodi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."prodi_id_seq";
CREATE SEQUENCE "public"."prodi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."prodi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for sk_kerjapraktek_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."sk_kerjapraktek_id_seq";
CREATE SEQUENCE "public"."sk_kerjapraktek_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."sk_kerjapraktek_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for sk_skripsi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."sk_skripsi_id_seq";
CREATE SEQUENCE "public"."sk_skripsi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."sk_skripsi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for skripsi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."skripsi_id_seq";
CREATE SEQUENCE "public"."skripsi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."skripsi_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for status_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."status_id_seq";
CREATE SEQUENCE "public"."status_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."status_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for user_groups_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."user_groups_id_seq";
CREATE SEQUENCE "public"."user_groups_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;
ALTER SEQUENCE "public"."user_groups_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
ALTER SEQUENCE "public"."users_id_seq" OWNER TO "daesuke";

-- ----------------------------
-- Table structure for bimbingan_kkl_individu
-- ----------------------------
DROP TABLE IF EXISTS "public"."bimbingan_kkl_individu";
CREATE TABLE "public"."bimbingan_kkl_individu" (
  "id" int4 NOT NULL DEFAULT nextval('bimbingan_kkl_id_seq'::regclass),
  "id_kkl" int4,
  "catatan" varchar(255) COLLATE "pg_catalog"."default",
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "id_user" int4,
  "date" date DEFAULT now()
)
;
ALTER TABLE "public"."bimbingan_kkl_individu" OWNER TO "daesuke";

-- ----------------------------
-- Records of bimbingan_kkl_individu
-- ----------------------------
BEGIN;
INSERT INTO "public"."bimbingan_kkl_individu" ("id", "id_kkl", "catatan", "filename", "image", "id_user", "date") VALUES (13, 12, 'bimbingan 1', NULL, NULL, 5, '2022-11-21');
INSERT INTO "public"."bimbingan_kkl_individu" ("id", "id_kkl", "catatan", "filename", "image", "id_user", "date") VALUES (14, 12, 'balas 1', NULL, NULL, 6, '2022-11-21');
INSERT INTO "public"."bimbingan_kkl_individu" ("id", "id_kkl", "catatan", "filename", "image", "id_user", "date") VALUES (15, 12, 'bimbingan 2333', NULL, NULL, 6, '2022-11-21');
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_kkl_kelompok
-- ----------------------------
DROP TABLE IF EXISTS "public"."bimbingan_kkl_kelompok";
CREATE TABLE "public"."bimbingan_kkl_kelompok" (
  "id" int4 NOT NULL DEFAULT nextval('bimbingan_kkl_id_seq'::regclass),
  "id_kelompok_kkl" int4,
  "catatan" varchar(255) COLLATE "pg_catalog"."default",
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "id_user" int4,
  "date" date DEFAULT now(),
  "id_kategori" char(1) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."bimbingan_kkl_kelompok" OWNER TO "daesuke";

-- ----------------------------
-- Records of bimbingan_kkl_kelompok
-- ----------------------------
BEGIN;
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (16, 11, 'b kelompok 1', NULL, NULL, 9, '2022-11-21', 'k');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (17, 11, 'ib individu 1', NULL, NULL, 9, '2022-11-21', 'i');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (18, 11, 'balas kelompok 1', NULL, NULL, 6, '2022-11-21', 'k');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (19, 11, 'bimibngan 2', NULL, NULL, 8, '2022-11-21', 'k');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (20, 11, 'individu 2', NULL, NULL, 8, '2022-11-21', 'k');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (21, 11, 'individu 22', NULL, NULL, 8, '2022-11-21', 'i');
INSERT INTO "public"."bimbingan_kkl_kelompok" ("id", "id_kelompok_kkl", "catatan", "filename", "image", "id_user", "date", "id_kategori") VALUES (22, 11, 'balas kelompok 1 ke 2', NULL, NULL, 6, '2022-11-21', 'k');
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_kp
-- ----------------------------
DROP TABLE IF EXISTS "public"."bimbingan_kp";
CREATE TABLE "public"."bimbingan_kp" (
  "id" int8 NOT NULL DEFAULT nextval('bimbingan_kp_id_seq'::regclass),
  "id_kp" int4,
  "catatan" varchar(255) COLLATE "pg_catalog"."default",
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "date" timestamp(6) DEFAULT now(),
  "id_user" int2
)
;
ALTER TABLE "public"."bimbingan_kp" OWNER TO "daesuke";

-- ----------------------------
-- Records of bimbingan_kp
-- ----------------------------
BEGIN;
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (20, 32, 'bimbingan 1', NULL, NULL, '2022-11-21 09:52:20.002062', 5);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (21, 32, 'bimbingan 2', NULL, NULL, '2022-11-21 09:52:27.065584', 5);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (22, 32, 'balasa 1', NULL, NULL, '2022-11-21 13:39:31.897305', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (23, 32, 'bimbingan 3', NULL, NULL, '2022-11-21 13:48:01.265441', 5);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (24, 32, 'balasan 2', NULL, NULL, '2022-11-21 14:52:04.255843', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (25, 32, 'bimbingan 4', NULL, NULL, '2022-11-21 14:56:48.900712', 5);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (26, 32, 'fghjkl;''', NULL, NULL, '2022-11-27 21:30:42.220146', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (27, 32, 'vbmn,.', NULL, NULL, '2022-11-27 21:30:54.546409', 5);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (28, 32, 'ghbjnkl,;.', NULL, NULL, '2022-11-27 21:31:01.022811', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (29, 32, 'asdsad', NULL, NULL, '2022-11-27 21:41:21.978604', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (30, 32, 'asdasdasd', NULL, NULL, '2022-11-27 21:41:26.536093', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (31, 32, 'asdasdasd', NULL, NULL, '2022-11-27 21:41:31.07757', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (32, 32, 'asdsadad', NULL, NULL, '2022-11-27 21:41:35.709727', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (33, 32, 'adsasdsad', NULL, NULL, '2022-11-27 21:41:40.343194', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (34, 32, 'adsasdasd', NULL, NULL, '2022-11-27 21:41:44.67069', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (35, 32, 'adasdadasdasd', NULL, NULL, '2022-11-27 21:41:49.061204', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (36, 32, 'asdasdsad', NULL, NULL, '2022-11-27 21:41:55.427063', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (37, 34, '1', NULL, NULL, '2022-11-29 16:41:29.645612', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (38, 34, '2', NULL, NULL, '2022-11-29 16:41:37.607577', 9);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (39, 34, 'wqqweqweqw', NULL, NULL, '2022-11-29 16:42:46.287534', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (40, 34, 'qwewqeqwe', NULL, NULL, '2022-11-29 16:42:51.314566', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (41, 34, 'qweqeqwe', NULL, NULL, '2022-11-29 16:42:58.795586', 9);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (42, 34, 'asdasd', NULL, NULL, '2022-11-29 16:44:03.788737', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (43, 34, 'sdad', NULL, NULL, '2022-11-29 16:44:07.749089', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (44, 34, 'sdasd', NULL, NULL, '2022-11-29 16:44:11.713524', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (45, 34, 'asdasd', NULL, NULL, '2022-11-29 16:44:17.943016', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (46, 34, 'asdasd', NULL, NULL, '2022-11-29 16:44:21.732419', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (47, 34, 'asdasd', NULL, NULL, '2022-11-29 16:44:38.009957', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (48, 34, 'asdasdad', NULL, NULL, '2022-11-29 16:44:42.078839', 6);
INSERT INTO "public"."bimbingan_kp" ("id", "id_kp", "catatan", "filename", "image", "date", "id_user") VALUES (50, 34, 'asdsdsadadasd', 'PRINT_SYOIFUL.docx', 'files/kerjapraktek/PRINT_SYOIFUL.docx', '2022-11-30 21:38:18.462441', 6);
COMMIT;

-- ----------------------------
-- Table structure for bimbingan_skripsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."bimbingan_skripsi";
CREATE TABLE "public"."bimbingan_skripsi" (
  "id" int2 NOT NULL DEFAULT nextval('bimbingan_skripsi_id_seq'::regclass),
  "id_skripsi" int4,
  "catatan" varchar(255) COLLATE "pg_catalog"."default",
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "id_user" int8,
  "date" timestamp(6) DEFAULT now()
)
;
ALTER TABLE "public"."bimbingan_skripsi" OWNER TO "daesuke";

-- ----------------------------
-- Records of bimbingan_skripsi
-- ----------------------------
BEGIN;
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (4, 7, 'bimbingan 1', NULL, NULL, 5, '2022-11-21 15:42:10.132192');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (5, 7, 'balas 1', NULL, NULL, 6, '2022-11-21 16:06:47.447483');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (6, 7, 'bimbingan 2', NULL, NULL, 5, '2022-11-21 16:10:04.458868');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (7, 7, '1', NULL, NULL, 6, '2022-11-27 22:49:37.755281');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (8, 7, '2', NULL, NULL, 6, '2022-11-27 22:49:44.799882');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (9, 7, '3', NULL, NULL, 6, '2022-11-27 22:49:49.458485');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (10, 7, '5', NULL, NULL, 6, '2022-11-27 22:49:53.668591');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (11, 7, '6', NULL, NULL, 6, '2022-11-27 22:49:58.13135');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (12, 7, '7', NULL, NULL, 6, '2022-11-27 22:50:02.430656');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (13, 7, '8', NULL, NULL, 6, '2022-11-27 22:50:06.443802');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (14, 7, '9', NULL, NULL, 6, '2022-11-27 22:50:10.79855');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (15, 7, '10', NULL, NULL, 6, '2022-11-27 22:50:26.886846');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (16, 7, '10', NULL, NULL, 6, '2022-11-27 22:50:28.151405');
INSERT INTO "public"."bimbingan_skripsi" ("id", "id_skripsi", "catatan", "filename", "image", "id_user", "date") VALUES (17, 7, '123123123213', NULL, NULL, 6, '2022-11-27 22:50:40.476262');
COMMIT;

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS "public"."ci_sessions";
CREATE TABLE "public"."ci_sessions" (
  "id" varchar(128) COLLATE "pg_catalog"."default" NOT NULL,
  "ip_address" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "timestamp" int8 NOT NULL DEFAULT 0,
  "data" text COLLATE "pg_catalog"."default" NOT NULL DEFAULT ''::text
)
;
ALTER TABLE "public"."ci_sessions" OWNER TO "daesuke";

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
BEGIN;
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('79v93ugkestih14038e8ls61ne56ibqf', '127.0.0.1', 1670337421, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM3NDIxOw==');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('6u7lkeelpkjj5e390nom27f44rct22ks', '127.0.0.1', 1670339318, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM5MzE4O2lkX3VzZXJ8czoxOiI2Ijt1c2VybmFtZXxzOjk6IjIwMTIzMDA0NyI7Z3JvdXBfaWR8czoxOiI0IjtuYW1hfHM6MzA6IkFuZHJpIFN5YWZyaWFudG8sIFMuS29tLCBNLkNzLiI7dXNlcl9wcml2aWxlZ2VzfGE6Mzc6e3M6MToiIyI7czozOiIxNjIiO3M6Mjg6InJla2FwL2JpbWJpbmdhbl9ra2xfaW5kaXZpZHUiO3M6MzoiMTc1IjtzOjI1OiJyZWthcC9yZXN1bHRfa2tsX2luZGl2aWR1IjtzOjM6IjE3NiI7czoxODoicmVrYXAvYmltYmluZ2FuX2twIjtzOjM6IjE3MSI7czoxNToicmVrYXAvcmVzdWx0X2twIjtzOjM6IjE3MiI7czoyMzoicmVrYXAvYmltYmluZ2FuX3Nrcmlwc2kiO3M6MzoiMTczIjtzOjIwOiJyZWthcC9yZXN1bHRfc2tyaXBzaSI7czozOiIxNzQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czoyMjoiYmltYmluZ2FuL2trbC9pbmRpdmlkdSI7czozOiIxNjMiO3M6MzI6ImJpbWJpbmdhbi9ra2wvYmltYmluZ2FuX2luZGl2aWR1IjtzOjM6IjE2NSI7czoyOToiYmltYmluZ2FuL2trbC9pbnNlcnRfaW5kaXZpZHUiO3M6MzoiMTY2IjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MjY6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYWNjIjtzOjM6IjEyNCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9iaW1iaW5nYW4iO3M6MzoiMTIwIjtzOjMyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3BkZiI7czozOiIxMjYiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvY2V0YWtfc2siO3M6MzoiMTI5IjtzOjM1OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrX21ocyI7czozOiIxMjUiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZGV0YWlsIjtzOjM6IjEyMiI7czozMToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9kb3dubG9hZCI7czozOiIxMjMiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvaW5zZXJ0IjtzOjM6IjEyMSI7czoxNzoiYmltYmluZ2FuL3Nrcmlwc2kiO3M6MzoiMTM1IjtzOjIxOiJiaW1iaW5nYW4vc2tyaXBzaS9hY2MiO3M6MzoiMTQwIjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9iaW1iaW5nYW4iO3M6MzoiMTM2IjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19wZGYiO3M6MzoiMTQyIjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL2luc2VydCI7czozOiIxMzciO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7fXVzZXJzX2dyb3Vwc3xhOjE6e2k6MDtPOjg6InN0ZENsYXNzIjozOntzOjI6ImlkIjtzOjE6IjQiO3M6NDoibmFtZSI7czo1OiJEb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjt9fWZ1bmN0aW9uc19wcml2aWxlZ2VzfGE6MTc6e2k6MDthOjY6e3M6NDoibGluayI7czo5OiJkYXNoYm9hcmQiO3M6NDoiZGVzYyI7czoyMjoiPHNwYW4+RGFzaGJvYXJkPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE1IjtzOjQ6ImtvZGUiO3M6OToiZGFzaGJvYXJkIjtzOjQ6Imljb24iO3M6MjY6IjxpIGNsYXNzPSJmYSBmYS1ob21lIj48L2k+Ijt9aToxO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExOSI7czo0OiJrb2RlIjtzOjc6ImJpbWJ+a3AiO3M6NDoiaWNvbiI7Tjt9aToyO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czoyNToiPHNwYW4+IEJpbWJpbmdhbiA8L3NwYW4+ICI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE4IjtzOjQ6ImtvZGUiO3M6NDoiYmltYiI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MiI7czo0OiJrb2RlIjtzOjg6ImJpbWJ+a2tsIjtzOjQ6Imljb24iO047fWk6NTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2trbC9rZWxvbXBvayI7czo0OiJkZXNjIjtzOjg6IktlbG9tcG9rIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjQiO3M6NDoia29kZSI7czoxNzoiYmltYn5ra2x+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MzoiYWNjIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3OCI7czo0OiJrb2RlIjtzOjY6ImFjY35rcCI7czo0OiJpY29uIjtOO31pOjg7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo5O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjEwO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjEyO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToxNDthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fWk6MTU7YTo2OntzOjQ6ImxpbmsiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6NDoiZGVzYyI7czoxMjoiS0tMIEluZGl2aWR1IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODIiO3M6NDoia29kZSI7czoxOToiYWNjfmtrbH5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE2O2E6Njp7czo0OiJsaW5rIjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6NDoiZGVzYyI7czoxNjoiSm1sIEJpbWJpbmdhbiBLUCI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTcxIjtzOjQ6ImtvZGUiO3M6Mjk6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbmtwIjtzOjQ6Imljb24iO047fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('hgqrvnmhc2kicgpqacgl9iinj286jhfa', '127.0.0.1', 1670338295, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM4Mjk1O2lkX3VzZXJ8czoxOiIyIjt1c2VybmFtZXxzOjU6ImFkbWluIjtncm91cF9pZHxzOjE6IjEiO25hbWF8czo1OiJhZG1pbiI7dXNlcl9wcml2aWxlZ2VzfGE6NjA6e3M6MToiIyI7czozOiIxNjgiO3M6MjI6ImJpbWJpbmdhbi9ra2wvaW5kaXZpZHUiO3M6MzoiMTYzIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MzI6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYmltYmluZ2FuIjtzOjM6IjEyMCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19wZGYiO3M6MzoiMTI2IjtzOjMxOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrIjtzOjM6IjEyOSI7czozNToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19za19taHMiO3M6MzoiMTI1IjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2RldGFpbCI7czozOiIxMjIiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZG93bmxvYWQiO3M6MzoiMTIzIjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL3NlYXJjaCI7czozOiIxMjgiO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjM6IjEzNSI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvYmltYmluZ2FuIjtzOjM6IjEzNiI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfcGRmIjtzOjM6IjE0MiI7czoyNjoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfc2siO3M6MzoiMTQ1IjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL3NlYXJjaCI7czozOiIxNDQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czo5OiJmdW5jdGlvbnMiO3M6MjoiMTkiO3M6MTY6ImZ1bmN0aW9ucy9kZWxldGUiO3M6MjoiMTciO3M6MTY6ImZ1bmN0aW9ucy9pbnNlcnQiO3M6MjoiMTgiO3M6MTY6ImZ1bmN0aW9ucy91cGRhdGUiO3M6MjoiMTYiO3M6NjoiZ3JvdXBzIjtzOjE6IjgiO3M6MjM6Imdyb3Vwcy9jcmVhdGVfcHJpdmlsZWdlIjtzOjE6IjUiO3M6MTM6Imdyb3Vwcy9kZWxldGUiO3M6MToiNCI7czoxMzoiZ3JvdXBzL2luc2VydCI7czoxOiIyIjtzOjEzOiJncm91cHMvdXBkYXRlIjtzOjE6IjMiO3M6MTk6ImRhZnRhci9rZXJqYXByYWt0ZWsiO3M6MzoiMTE3IjtzOjE0OiJkYWZ0YXIvc2tyaXBzaSI7czozOiIxMzAiO3M6NToiZG9zZW4iO3M6MzoiMTUxIjtzOjEyOiJkb3Nlbi9kZWxldGUiO3M6MzoiMTU0IjtzOjEyOiJkb3Nlbi9pbnNlcnQiO3M6MzoiMTUyIjtzOjEyOiJkb3Nlbi91cGRhdGUiO3M6MzoiMTUzIjtzOjg6ImtlbG9tcG9rIjtzOjM6IjE0NyI7czoxNToia2Vsb21wb2svZGVsZXRlIjtzOjM6IjE1MCI7czoxNToia2Vsb21wb2svaW5zZXJ0IjtzOjM6IjE0OCI7czoxNToia2Vsb21wb2svdXBkYXRlIjtzOjM6IjE0OSI7czoyODoicmVrYXAvYmltYmluZ2FuX2trbF9pbmRpdmlkdSI7czozOiIxNzUiO3M6MjU6InJla2FwL3Jlc3VsdF9ra2xfaW5kaXZpZHUiO3M6MzoiMTc2IjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6MzoiMTcxIjtzOjE1OiJyZWthcC9yZXN1bHRfa3AiO3M6MzoiMTcyIjtzOjIzOiJyZWthcC9iaW1iaW5nYW5fc2tyaXBzaSI7czozOiIxNzMiO3M6MjA6InJla2FwL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE3NCI7czo1OiJjaGFydCI7czozOiIxODkiO3M6MTI6ImNoYXJ0L3Jlc3VsdCI7czozOiIxOTAiO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7czo1OiJyZWthcCI7czozOiIxODciO3M6MTI6InJla2FwL3Jlc3VsdCI7czozOiIxODgiO3M6NToidXNlcnMiO3M6MjoiMTIiO3M6MTI6InVzZXJzL2RlbGV0ZSI7czoyOiIyMCI7czoxMjoidXNlcnMvaW5zZXJ0IjtzOjE6IjEiO311c2Vyc19ncm91cHN8YToxOntpOjA7Tzo4OiJzdGRDbGFzcyI6Mzp7czoyOiJpZCI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NToiQWRtaW4iO3M6NDoiZGVzYyI7czoyNjoiTWVuZ2F0dXIgUGVyaWxha3UgUGVuZ2d1bmEiO319ZnVuY3Rpb25zX3ByaXZpbGVnZXN8YToyOTp7aTowO2E6Njp7czo0OiJsaW5rIjtzOjk6ImRhc2hib2FyZCI7czo0OiJkZXNjIjtzOjIyOiI8c3Bhbj5EYXNoYm9hcmQ8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTUiO3M6NDoia29kZSI7czo5OiJkYXNoYm9hcmQiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWhvbWUiPjwvaT4iO31pOjE7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjE4OiI8c3Bhbj4gQXBwIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEzIjtzOjQ6ImtvZGUiO3M6MToiIyI7czo0OiJpY29uIjtzOjI2OiI8aSBjbGFzcz0iZmEgZmEtZm9udCI+PC9pPiI7fWk6MjthOjY6e3M6NDoibGluayI7czo5OiJmdW5jdGlvbnMiO3M6NDoiZGVzYyI7czo4OiJGdW5jdGlvbiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MjoiMTkiO3M6NDoia29kZSI7czoxMToiI35mdW5jdGlvbnMiO3M6NDoiaWNvbiI7Tjt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjY6Imdyb3VwcyI7czo0OiJkZXNjIjtzOjQ6IlJvbGUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjE6IjgiO3M6NDoia29kZSI7czo4OiIjfmdyb3VwcyI7czo0OiJpY29uIjtOO31pOjQ7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gTWFzdGVyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NiI7czo0OiJrb2RlIjtzOjY6Im1hc3RlciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtbWF4Y2RuIj48L2k+Ijt9aTo1O2E6Njp7czo0OiJsaW5rIjtzOjg6ImtlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NyI7czo0OiJrb2RlIjtzOjE1OiJtYXN0ZXJ+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjU6InVzZXJzIjtzOjQ6ImRlc2MiO3M6MTk6IjxzcGFuPiBVc2VyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEyIjtzOjQ6ImtvZGUiO3M6NToidXNlcnMiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLXVzZXIiPjwvaT4iO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gRGFmdGFyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNiI7czo0OiJrb2RlIjtzOjY6ImRhZnRhciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTo4O2E6Njp7czo0OiJsaW5rIjtzOjE5OiJkYWZ0YXIva2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNyI7czo0OiJrb2RlIjtzOjE5OiJkYWZ0YXJ+a2VyamFwcmFrdGVrIjtzOjQ6Imljb24iO047fWk6OTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czo0OiJkZXNjIjtzOjEzOiJLZXJqYSBQcmFrdGVrIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTkiO3M6NDoia29kZSI7czo3OiJiaW1ifmtwIjtzOjQ6Imljb24iO047fWk6MTA7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjI1OiI8c3Bhbj4gQmltYmluZ2FuIDwvc3Bhbj4gIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTgiO3M6NDoia29kZSI7czo0OiJiaW1iIjtzOjQ6Imljb24iO3M6Mjg6IjxpIGNsYXNzPSJmYSBmYS1mb2xkZXIiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToxMjthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MzoiS0tMIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjIiO3M6NDoia29kZSI7czo4OiJiaW1ifmtrbCI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2NCI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5rZWxvbXBvayI7czo0OiJpY29uIjtOO31pOjE0O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE1O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBJbmRpdmlkdSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTgyIjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsaW5kaXZpZHUiO3M6NDoiaWNvbiI7Tjt9aToxNjthOjY6e3M6NDoibGluayI7czo1OiJjaGFydCI7czo0OiJkZXNjIjtzOjIwOiI8c3Bhbj4gQ2hhcnQgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg5IjtzOjQ6ImtvZGUiO3M6NToiY2hhcnQiO3M6NDoiaWNvbiI7czozMToiPGkgY2xhc3M9ImZhIGZhLXBpZS1jaGFydCI+PC9pPiI7fWk6MTc7YTo2OntzOjQ6ImxpbmsiO3M6MTg6InJla2FwL2JpbWJpbmdhbl9rcCI7czo0OiJkZXNjIjtzOjE2OiJKbWwgQmltYmluZ2FuIEtQIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNzEiO3M6NDoia29kZSI7czoyOToicmVrYXBiaW1iaW5nYW5+am1sYmltYmluZ2Fua3AiO3M6NDoiaWNvbiI7Tjt9aToxODthOjY6e3M6NDoibGluayI7czozOiJhY2MiO3M6NDoiZGVzYyI7czoxMzoiS2VyamEgUHJha3RlayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc4IjtzOjQ6ImtvZGUiO3M6NjoiYWNjfmtwIjtzOjQ6Imljb24iO047fWk6MTk7YTo2OntzOjQ6ImxpbmsiO3M6MTQ6ImRhZnRhci9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6NzoiU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTMwIjtzOjQ6ImtvZGUiO3M6MTQ6ImRhZnRhcn5za3JpcHNpIjtzOjQ6Imljb24iO047fWk6MjA7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToyMTthOjY6e3M6NDoibGluayI7czo1OiJkb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNTEiO3M6NDoia29kZSI7czoxMjoibWFzdGVyfmRvc2VuIjtzOjQ6Imljb24iO047fWk6MjI7YTo2OntzOjQ6ImxpbmsiO3M6NToicmVrYXAiO3M6NDoiZGVzYyI7czozNjoiPHNwYW4+IFJla2FwIERvc2VuIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODciO3M6NDoia29kZSI7czoxMDoicmVrYXBkb3NlbiI7czo0OiJpY29uIjtzOjI3OiI8aSBjbGFzcz0iZmEgZmEtbW9uZXkiPjwvaT4iO31pOjIzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjI0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjI1O2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjI2O2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjI3O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToyODthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('hljtlb3kq7r375r43q4bil64ln6584sl', '127.0.0.1', 1670341790, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzQxNzc5O2lkX3VzZXJ8czoxOiI2Ijt1c2VybmFtZXxzOjk6IjIwMTIzMDA0NyI7Z3JvdXBfaWR8czoxOiI0IjtuYW1hfHM6MzA6IkFuZHJpIFN5YWZyaWFudG8sIFMuS29tLCBNLkNzLiI7dXNlcl9wcml2aWxlZ2VzfGE6Mzc6e3M6MToiIyI7czozOiIxNjIiO3M6Mjg6InJla2FwL2JpbWJpbmdhbl9ra2xfaW5kaXZpZHUiO3M6MzoiMTc1IjtzOjI1OiJyZWthcC9yZXN1bHRfa2tsX2luZGl2aWR1IjtzOjM6IjE3NiI7czoxODoicmVrYXAvYmltYmluZ2FuX2twIjtzOjM6IjE3MSI7czoxNToicmVrYXAvcmVzdWx0X2twIjtzOjM6IjE3MiI7czoyMzoicmVrYXAvYmltYmluZ2FuX3Nrcmlwc2kiO3M6MzoiMTczIjtzOjIwOiJyZWthcC9yZXN1bHRfc2tyaXBzaSI7czozOiIxNzQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czoyMjoiYmltYmluZ2FuL2trbC9pbmRpdmlkdSI7czozOiIxNjMiO3M6MzI6ImJpbWJpbmdhbi9ra2wvYmltYmluZ2FuX2luZGl2aWR1IjtzOjM6IjE2NSI7czoyOToiYmltYmluZ2FuL2trbC9pbnNlcnRfaW5kaXZpZHUiO3M6MzoiMTY2IjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MjY6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYWNjIjtzOjM6IjEyNCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9iaW1iaW5nYW4iO3M6MzoiMTIwIjtzOjMyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3BkZiI7czozOiIxMjYiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvY2V0YWtfc2siO3M6MzoiMTI5IjtzOjM1OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrX21ocyI7czozOiIxMjUiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZGV0YWlsIjtzOjM6IjEyMiI7czozMToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9kb3dubG9hZCI7czozOiIxMjMiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvaW5zZXJ0IjtzOjM6IjEyMSI7czoxNzoiYmltYmluZ2FuL3Nrcmlwc2kiO3M6MzoiMTM1IjtzOjIxOiJiaW1iaW5nYW4vc2tyaXBzaS9hY2MiO3M6MzoiMTQwIjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9iaW1iaW5nYW4iO3M6MzoiMTM2IjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19wZGYiO3M6MzoiMTQyIjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL2luc2VydCI7czozOiIxMzciO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7fXVzZXJzX2dyb3Vwc3xhOjE6e2k6MDtPOjg6InN0ZENsYXNzIjozOntzOjI6ImlkIjtzOjE6IjQiO3M6NDoibmFtZSI7czo1OiJEb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjt9fWZ1bmN0aW9uc19wcml2aWxlZ2VzfGE6MTc6e2k6MDthOjY6e3M6NDoibGluayI7czo5OiJkYXNoYm9hcmQiO3M6NDoiZGVzYyI7czoyMjoiPHNwYW4+RGFzaGJvYXJkPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE1IjtzOjQ6ImtvZGUiO3M6OToiZGFzaGJvYXJkIjtzOjQ6Imljb24iO3M6MjY6IjxpIGNsYXNzPSJmYSBmYS1ob21lIj48L2k+Ijt9aToxO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExOSI7czo0OiJrb2RlIjtzOjc6ImJpbWJ+a3AiO3M6NDoiaWNvbiI7Tjt9aToyO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czoyNToiPHNwYW4+IEJpbWJpbmdhbiA8L3NwYW4+ICI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE4IjtzOjQ6ImtvZGUiO3M6NDoiYmltYiI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MiI7czo0OiJrb2RlIjtzOjg6ImJpbWJ+a2tsIjtzOjQ6Imljb24iO047fWk6NTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2trbC9rZWxvbXBvayI7czo0OiJkZXNjIjtzOjg6IktlbG9tcG9rIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjQiO3M6NDoia29kZSI7czoxNzoiYmltYn5ra2x+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MzoiYWNjIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3OCI7czo0OiJrb2RlIjtzOjY6ImFjY35rcCI7czo0OiJpY29uIjtOO31pOjg7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo5O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjEwO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjEyO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToxNDthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fWk6MTU7YTo2OntzOjQ6ImxpbmsiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6NDoiZGVzYyI7czoxMjoiS0tMIEluZGl2aWR1IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODIiO3M6NDoia29kZSI7czoxOToiYWNjfmtrbH5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE2O2E6Njp7czo0OiJsaW5rIjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6NDoiZGVzYyI7czoxNjoiSm1sIEJpbWJpbmdhbiBLUCI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTcxIjtzOjQ6ImtvZGUiO3M6Mjk6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbmtwIjtzOjQ6Imljb24iO047fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('md0acoq1c5b1k15mh9nktp9koqf2cdc0', '127.0.0.1', 1670337825, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM3ODI1O2lkX3VzZXJ8czoxOiIyIjt1c2VybmFtZXxzOjU6ImFkbWluIjtncm91cF9pZHxzOjE6IjEiO25hbWF8czo1OiJhZG1pbiI7dXNlcl9wcml2aWxlZ2VzfGE6NjA6e3M6MToiIyI7czozOiIxNjgiO3M6MjI6ImJpbWJpbmdhbi9ra2wvaW5kaXZpZHUiO3M6MzoiMTYzIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MzI6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYmltYmluZ2FuIjtzOjM6IjEyMCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19wZGYiO3M6MzoiMTI2IjtzOjMxOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrIjtzOjM6IjEyOSI7czozNToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19za19taHMiO3M6MzoiMTI1IjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2RldGFpbCI7czozOiIxMjIiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZG93bmxvYWQiO3M6MzoiMTIzIjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL3NlYXJjaCI7czozOiIxMjgiO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjM6IjEzNSI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvYmltYmluZ2FuIjtzOjM6IjEzNiI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfcGRmIjtzOjM6IjE0MiI7czoyNjoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfc2siO3M6MzoiMTQ1IjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL3NlYXJjaCI7czozOiIxNDQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czo5OiJmdW5jdGlvbnMiO3M6MjoiMTkiO3M6MTY6ImZ1bmN0aW9ucy9kZWxldGUiO3M6MjoiMTciO3M6MTY6ImZ1bmN0aW9ucy9pbnNlcnQiO3M6MjoiMTgiO3M6MTY6ImZ1bmN0aW9ucy91cGRhdGUiO3M6MjoiMTYiO3M6NjoiZ3JvdXBzIjtzOjE6IjgiO3M6MjM6Imdyb3Vwcy9jcmVhdGVfcHJpdmlsZWdlIjtzOjE6IjUiO3M6MTM6Imdyb3Vwcy9kZWxldGUiO3M6MToiNCI7czoxMzoiZ3JvdXBzL2luc2VydCI7czoxOiIyIjtzOjEzOiJncm91cHMvdXBkYXRlIjtzOjE6IjMiO3M6MTk6ImRhZnRhci9rZXJqYXByYWt0ZWsiO3M6MzoiMTE3IjtzOjE0OiJkYWZ0YXIvc2tyaXBzaSI7czozOiIxMzAiO3M6NToiZG9zZW4iO3M6MzoiMTUxIjtzOjEyOiJkb3Nlbi9kZWxldGUiO3M6MzoiMTU0IjtzOjEyOiJkb3Nlbi9pbnNlcnQiO3M6MzoiMTUyIjtzOjEyOiJkb3Nlbi91cGRhdGUiO3M6MzoiMTUzIjtzOjg6ImtlbG9tcG9rIjtzOjM6IjE0NyI7czoxNToia2Vsb21wb2svZGVsZXRlIjtzOjM6IjE1MCI7czoxNToia2Vsb21wb2svaW5zZXJ0IjtzOjM6IjE0OCI7czoxNToia2Vsb21wb2svdXBkYXRlIjtzOjM6IjE0OSI7czoyODoicmVrYXAvYmltYmluZ2FuX2trbF9pbmRpdmlkdSI7czozOiIxNzUiO3M6MjU6InJla2FwL3Jlc3VsdF9ra2xfaW5kaXZpZHUiO3M6MzoiMTc2IjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6MzoiMTcxIjtzOjE1OiJyZWthcC9yZXN1bHRfa3AiO3M6MzoiMTcyIjtzOjIzOiJyZWthcC9iaW1iaW5nYW5fc2tyaXBzaSI7czozOiIxNzMiO3M6MjA6InJla2FwL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE3NCI7czo1OiJjaGFydCI7czozOiIxODkiO3M6MTI6ImNoYXJ0L3Jlc3VsdCI7czozOiIxOTAiO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7czo1OiJyZWthcCI7czozOiIxODciO3M6MTI6InJla2FwL3Jlc3VsdCI7czozOiIxODgiO3M6NToidXNlcnMiO3M6MjoiMTIiO3M6MTI6InVzZXJzL2RlbGV0ZSI7czoyOiIyMCI7czoxMjoidXNlcnMvaW5zZXJ0IjtzOjE6IjEiO311c2Vyc19ncm91cHN8YToxOntpOjA7Tzo4OiJzdGRDbGFzcyI6Mzp7czoyOiJpZCI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NToiQWRtaW4iO3M6NDoiZGVzYyI7czoyNjoiTWVuZ2F0dXIgUGVyaWxha3UgUGVuZ2d1bmEiO319ZnVuY3Rpb25zX3ByaXZpbGVnZXN8YToyOTp7aTowO2E6Njp7czo0OiJsaW5rIjtzOjk6ImRhc2hib2FyZCI7czo0OiJkZXNjIjtzOjIyOiI8c3Bhbj5EYXNoYm9hcmQ8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTUiO3M6NDoia29kZSI7czo5OiJkYXNoYm9hcmQiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWhvbWUiPjwvaT4iO31pOjE7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjE4OiI8c3Bhbj4gQXBwIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEzIjtzOjQ6ImtvZGUiO3M6MToiIyI7czo0OiJpY29uIjtzOjI2OiI8aSBjbGFzcz0iZmEgZmEtZm9udCI+PC9pPiI7fWk6MjthOjY6e3M6NDoibGluayI7czo5OiJmdW5jdGlvbnMiO3M6NDoiZGVzYyI7czo4OiJGdW5jdGlvbiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MjoiMTkiO3M6NDoia29kZSI7czoxMToiI35mdW5jdGlvbnMiO3M6NDoiaWNvbiI7Tjt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjY6Imdyb3VwcyI7czo0OiJkZXNjIjtzOjQ6IlJvbGUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjE6IjgiO3M6NDoia29kZSI7czo4OiIjfmdyb3VwcyI7czo0OiJpY29uIjtOO31pOjQ7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gTWFzdGVyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NiI7czo0OiJrb2RlIjtzOjY6Im1hc3RlciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtbWF4Y2RuIj48L2k+Ijt9aTo1O2E6Njp7czo0OiJsaW5rIjtzOjg6ImtlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NyI7czo0OiJrb2RlIjtzOjE1OiJtYXN0ZXJ+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjU6InVzZXJzIjtzOjQ6ImRlc2MiO3M6MTk6IjxzcGFuPiBVc2VyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEyIjtzOjQ6ImtvZGUiO3M6NToidXNlcnMiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLXVzZXIiPjwvaT4iO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gRGFmdGFyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNiI7czo0OiJrb2RlIjtzOjY6ImRhZnRhciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTo4O2E6Njp7czo0OiJsaW5rIjtzOjE5OiJkYWZ0YXIva2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNyI7czo0OiJrb2RlIjtzOjE5OiJkYWZ0YXJ+a2VyamFwcmFrdGVrIjtzOjQ6Imljb24iO047fWk6OTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czo0OiJkZXNjIjtzOjEzOiJLZXJqYSBQcmFrdGVrIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTkiO3M6NDoia29kZSI7czo3OiJiaW1ifmtwIjtzOjQ6Imljb24iO047fWk6MTA7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjI1OiI8c3Bhbj4gQmltYmluZ2FuIDwvc3Bhbj4gIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTgiO3M6NDoia29kZSI7czo0OiJiaW1iIjtzOjQ6Imljb24iO3M6Mjg6IjxpIGNsYXNzPSJmYSBmYS1mb2xkZXIiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToxMjthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MzoiS0tMIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjIiO3M6NDoia29kZSI7czo4OiJiaW1ifmtrbCI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2NCI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5rZWxvbXBvayI7czo0OiJpY29uIjtOO31pOjE0O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE1O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBJbmRpdmlkdSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTgyIjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsaW5kaXZpZHUiO3M6NDoiaWNvbiI7Tjt9aToxNjthOjY6e3M6NDoibGluayI7czo1OiJjaGFydCI7czo0OiJkZXNjIjtzOjIwOiI8c3Bhbj4gQ2hhcnQgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg5IjtzOjQ6ImtvZGUiO3M6NToiY2hhcnQiO3M6NDoiaWNvbiI7czozMToiPGkgY2xhc3M9ImZhIGZhLXBpZS1jaGFydCI+PC9pPiI7fWk6MTc7YTo2OntzOjQ6ImxpbmsiO3M6MTg6InJla2FwL2JpbWJpbmdhbl9rcCI7czo0OiJkZXNjIjtzOjE2OiJKbWwgQmltYmluZ2FuIEtQIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNzEiO3M6NDoia29kZSI7czoyOToicmVrYXBiaW1iaW5nYW5+am1sYmltYmluZ2Fua3AiO3M6NDoiaWNvbiI7Tjt9aToxODthOjY6e3M6NDoibGluayI7czozOiJhY2MiO3M6NDoiZGVzYyI7czoxMzoiS2VyamEgUHJha3RlayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc4IjtzOjQ6ImtvZGUiO3M6NjoiYWNjfmtwIjtzOjQ6Imljb24iO047fWk6MTk7YTo2OntzOjQ6ImxpbmsiO3M6MTQ6ImRhZnRhci9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6NzoiU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTMwIjtzOjQ6ImtvZGUiO3M6MTQ6ImRhZnRhcn5za3JpcHNpIjtzOjQ6Imljb24iO047fWk6MjA7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToyMTthOjY6e3M6NDoibGluayI7czo1OiJkb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNTEiO3M6NDoia29kZSI7czoxMjoibWFzdGVyfmRvc2VuIjtzOjQ6Imljb24iO047fWk6MjI7YTo2OntzOjQ6ImxpbmsiO3M6NToicmVrYXAiO3M6NDoiZGVzYyI7czozNjoiPHNwYW4+IFJla2FwIERvc2VuIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODciO3M6NDoia29kZSI7czoxMDoicmVrYXBkb3NlbiI7czo0OiJpY29uIjtzOjI3OiI8aSBjbGFzcz0iZmEgZmEtbW9uZXkiPjwvaT4iO31pOjIzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjI0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjI1O2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjI2O2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjI3O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToyODthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('bjrcgqrdjrgvhut4d91ab0oqpco23tft', '127.0.0.1', 1670338618, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM4NjE4O2lkX3VzZXJ8czoxOiIyIjt1c2VybmFtZXxzOjU6ImFkbWluIjtncm91cF9pZHxzOjE6IjEiO25hbWF8czo1OiJhZG1pbiI7dXNlcl9wcml2aWxlZ2VzfGE6NjA6e3M6MToiIyI7czozOiIxNjgiO3M6MjI6ImJpbWJpbmdhbi9ra2wvaW5kaXZpZHUiO3M6MzoiMTYzIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MzI6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYmltYmluZ2FuIjtzOjM6IjEyMCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19wZGYiO3M6MzoiMTI2IjtzOjMxOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrIjtzOjM6IjEyOSI7czozNToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19za19taHMiO3M6MzoiMTI1IjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2RldGFpbCI7czozOiIxMjIiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZG93bmxvYWQiO3M6MzoiMTIzIjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL3NlYXJjaCI7czozOiIxMjgiO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjM6IjEzNSI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvYmltYmluZ2FuIjtzOjM6IjEzNiI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfcGRmIjtzOjM6IjE0MiI7czoyNjoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfc2siO3M6MzoiMTQ1IjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL3NlYXJjaCI7czozOiIxNDQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czo5OiJmdW5jdGlvbnMiO3M6MjoiMTkiO3M6MTY6ImZ1bmN0aW9ucy9kZWxldGUiO3M6MjoiMTciO3M6MTY6ImZ1bmN0aW9ucy9pbnNlcnQiO3M6MjoiMTgiO3M6MTY6ImZ1bmN0aW9ucy91cGRhdGUiO3M6MjoiMTYiO3M6NjoiZ3JvdXBzIjtzOjE6IjgiO3M6MjM6Imdyb3Vwcy9jcmVhdGVfcHJpdmlsZWdlIjtzOjE6IjUiO3M6MTM6Imdyb3Vwcy9kZWxldGUiO3M6MToiNCI7czoxMzoiZ3JvdXBzL2luc2VydCI7czoxOiIyIjtzOjEzOiJncm91cHMvdXBkYXRlIjtzOjE6IjMiO3M6MTk6ImRhZnRhci9rZXJqYXByYWt0ZWsiO3M6MzoiMTE3IjtzOjE0OiJkYWZ0YXIvc2tyaXBzaSI7czozOiIxMzAiO3M6NToiZG9zZW4iO3M6MzoiMTUxIjtzOjEyOiJkb3Nlbi9kZWxldGUiO3M6MzoiMTU0IjtzOjEyOiJkb3Nlbi9pbnNlcnQiO3M6MzoiMTUyIjtzOjEyOiJkb3Nlbi91cGRhdGUiO3M6MzoiMTUzIjtzOjg6ImtlbG9tcG9rIjtzOjM6IjE0NyI7czoxNToia2Vsb21wb2svZGVsZXRlIjtzOjM6IjE1MCI7czoxNToia2Vsb21wb2svaW5zZXJ0IjtzOjM6IjE0OCI7czoxNToia2Vsb21wb2svdXBkYXRlIjtzOjM6IjE0OSI7czoyODoicmVrYXAvYmltYmluZ2FuX2trbF9pbmRpdmlkdSI7czozOiIxNzUiO3M6MjU6InJla2FwL3Jlc3VsdF9ra2xfaW5kaXZpZHUiO3M6MzoiMTc2IjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6MzoiMTcxIjtzOjE1OiJyZWthcC9yZXN1bHRfa3AiO3M6MzoiMTcyIjtzOjIzOiJyZWthcC9iaW1iaW5nYW5fc2tyaXBzaSI7czozOiIxNzMiO3M6MjA6InJla2FwL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE3NCI7czo1OiJjaGFydCI7czozOiIxODkiO3M6MTI6ImNoYXJ0L3Jlc3VsdCI7czozOiIxOTAiO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7czo1OiJyZWthcCI7czozOiIxODciO3M6MTI6InJla2FwL3Jlc3VsdCI7czozOiIxODgiO3M6NToidXNlcnMiO3M6MjoiMTIiO3M6MTI6InVzZXJzL2RlbGV0ZSI7czoyOiIyMCI7czoxMjoidXNlcnMvaW5zZXJ0IjtzOjE6IjEiO311c2Vyc19ncm91cHN8YToxOntpOjA7Tzo4OiJzdGRDbGFzcyI6Mzp7czoyOiJpZCI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NToiQWRtaW4iO3M6NDoiZGVzYyI7czoyNjoiTWVuZ2F0dXIgUGVyaWxha3UgUGVuZ2d1bmEiO319ZnVuY3Rpb25zX3ByaXZpbGVnZXN8YToyOTp7aTowO2E6Njp7czo0OiJsaW5rIjtzOjk6ImRhc2hib2FyZCI7czo0OiJkZXNjIjtzOjIyOiI8c3Bhbj5EYXNoYm9hcmQ8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTUiO3M6NDoia29kZSI7czo5OiJkYXNoYm9hcmQiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWhvbWUiPjwvaT4iO31pOjE7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjE4OiI8c3Bhbj4gQXBwIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEzIjtzOjQ6ImtvZGUiO3M6MToiIyI7czo0OiJpY29uIjtzOjI2OiI8aSBjbGFzcz0iZmEgZmEtZm9udCI+PC9pPiI7fWk6MjthOjY6e3M6NDoibGluayI7czo5OiJmdW5jdGlvbnMiO3M6NDoiZGVzYyI7czo4OiJGdW5jdGlvbiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MjoiMTkiO3M6NDoia29kZSI7czoxMToiI35mdW5jdGlvbnMiO3M6NDoiaWNvbiI7Tjt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjY6Imdyb3VwcyI7czo0OiJkZXNjIjtzOjQ6IlJvbGUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjE6IjgiO3M6NDoia29kZSI7czo4OiIjfmdyb3VwcyI7czo0OiJpY29uIjtOO31pOjQ7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gTWFzdGVyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NiI7czo0OiJrb2RlIjtzOjY6Im1hc3RlciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtbWF4Y2RuIj48L2k+Ijt9aTo1O2E6Njp7czo0OiJsaW5rIjtzOjg6ImtlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NyI7czo0OiJrb2RlIjtzOjE1OiJtYXN0ZXJ+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjU6InVzZXJzIjtzOjQ6ImRlc2MiO3M6MTk6IjxzcGFuPiBVc2VyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEyIjtzOjQ6ImtvZGUiO3M6NToidXNlcnMiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLXVzZXIiPjwvaT4iO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gRGFmdGFyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNiI7czo0OiJrb2RlIjtzOjY6ImRhZnRhciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTo4O2E6Njp7czo0OiJsaW5rIjtzOjE5OiJkYWZ0YXIva2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNyI7czo0OiJrb2RlIjtzOjE5OiJkYWZ0YXJ+a2VyamFwcmFrdGVrIjtzOjQ6Imljb24iO047fWk6OTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czo0OiJkZXNjIjtzOjEzOiJLZXJqYSBQcmFrdGVrIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTkiO3M6NDoia29kZSI7czo3OiJiaW1ifmtwIjtzOjQ6Imljb24iO047fWk6MTA7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjI1OiI8c3Bhbj4gQmltYmluZ2FuIDwvc3Bhbj4gIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTgiO3M6NDoia29kZSI7czo0OiJiaW1iIjtzOjQ6Imljb24iO3M6Mjg6IjxpIGNsYXNzPSJmYSBmYS1mb2xkZXIiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToxMjthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MzoiS0tMIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjIiO3M6NDoia29kZSI7czo4OiJiaW1ifmtrbCI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2NCI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5rZWxvbXBvayI7czo0OiJpY29uIjtOO31pOjE0O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE1O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBJbmRpdmlkdSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTgyIjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsaW5kaXZpZHUiO3M6NDoiaWNvbiI7Tjt9aToxNjthOjY6e3M6NDoibGluayI7czo1OiJjaGFydCI7czo0OiJkZXNjIjtzOjIwOiI8c3Bhbj4gQ2hhcnQgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg5IjtzOjQ6ImtvZGUiO3M6NToiY2hhcnQiO3M6NDoiaWNvbiI7czozMToiPGkgY2xhc3M9ImZhIGZhLXBpZS1jaGFydCI+PC9pPiI7fWk6MTc7YTo2OntzOjQ6ImxpbmsiO3M6MTg6InJla2FwL2JpbWJpbmdhbl9rcCI7czo0OiJkZXNjIjtzOjE2OiJKbWwgQmltYmluZ2FuIEtQIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNzEiO3M6NDoia29kZSI7czoyOToicmVrYXBiaW1iaW5nYW5+am1sYmltYmluZ2Fua3AiO3M6NDoiaWNvbiI7Tjt9aToxODthOjY6e3M6NDoibGluayI7czozOiJhY2MiO3M6NDoiZGVzYyI7czoxMzoiS2VyamEgUHJha3RlayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc4IjtzOjQ6ImtvZGUiO3M6NjoiYWNjfmtwIjtzOjQ6Imljb24iO047fWk6MTk7YTo2OntzOjQ6ImxpbmsiO3M6MTQ6ImRhZnRhci9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6NzoiU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTMwIjtzOjQ6ImtvZGUiO3M6MTQ6ImRhZnRhcn5za3JpcHNpIjtzOjQ6Imljb24iO047fWk6MjA7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToyMTthOjY6e3M6NDoibGluayI7czo1OiJkb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNTEiO3M6NDoia29kZSI7czoxMjoibWFzdGVyfmRvc2VuIjtzOjQ6Imljb24iO047fWk6MjI7YTo2OntzOjQ6ImxpbmsiO3M6NToicmVrYXAiO3M6NDoiZGVzYyI7czozNjoiPHNwYW4+IFJla2FwIERvc2VuIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODciO3M6NDoia29kZSI7czoxMDoicmVrYXBkb3NlbiI7czo0OiJpY29uIjtzOjI3OiI8aSBjbGFzcz0iZmEgZmEtbW9uZXkiPjwvaT4iO31pOjIzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjI0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjI1O2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjI2O2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjI3O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToyODthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('3fhg6igpmaii9t533js188fajktslq10', '127.0.0.1', 1670340134, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzQwMTM0O2lkX3VzZXJ8czoxOiI2Ijt1c2VybmFtZXxzOjk6IjIwMTIzMDA0NyI7Z3JvdXBfaWR8czoxOiI0IjtuYW1hfHM6MzA6IkFuZHJpIFN5YWZyaWFudG8sIFMuS29tLCBNLkNzLiI7dXNlcl9wcml2aWxlZ2VzfGE6Mzc6e3M6MToiIyI7czozOiIxNjIiO3M6Mjg6InJla2FwL2JpbWJpbmdhbl9ra2xfaW5kaXZpZHUiO3M6MzoiMTc1IjtzOjI1OiJyZWthcC9yZXN1bHRfa2tsX2luZGl2aWR1IjtzOjM6IjE3NiI7czoxODoicmVrYXAvYmltYmluZ2FuX2twIjtzOjM6IjE3MSI7czoxNToicmVrYXAvcmVzdWx0X2twIjtzOjM6IjE3MiI7czoyMzoicmVrYXAvYmltYmluZ2FuX3Nrcmlwc2kiO3M6MzoiMTczIjtzOjIwOiJyZWthcC9yZXN1bHRfc2tyaXBzaSI7czozOiIxNzQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czoyMjoiYmltYmluZ2FuL2trbC9pbmRpdmlkdSI7czozOiIxNjMiO3M6MzI6ImJpbWJpbmdhbi9ra2wvYmltYmluZ2FuX2luZGl2aWR1IjtzOjM6IjE2NSI7czoyOToiYmltYmluZ2FuL2trbC9pbnNlcnRfaW5kaXZpZHUiO3M6MzoiMTY2IjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MjY6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYWNjIjtzOjM6IjEyNCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9iaW1iaW5nYW4iO3M6MzoiMTIwIjtzOjMyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3BkZiI7czozOiIxMjYiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvY2V0YWtfc2siO3M6MzoiMTI5IjtzOjM1OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrX21ocyI7czozOiIxMjUiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZGV0YWlsIjtzOjM6IjEyMiI7czozMToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9kb3dubG9hZCI7czozOiIxMjMiO3M6Mjk6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvaW5zZXJ0IjtzOjM6IjEyMSI7czoxNzoiYmltYmluZ2FuL3Nrcmlwc2kiO3M6MzoiMTM1IjtzOjIxOiJiaW1iaW5nYW4vc2tyaXBzaS9hY2MiO3M6MzoiMTQwIjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9iaW1iaW5nYW4iO3M6MzoiMTM2IjtzOjI3OiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19wZGYiO3M6MzoiMTQyIjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL2luc2VydCI7czozOiIxMzciO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7fXVzZXJzX2dyb3Vwc3xhOjE6e2k6MDtPOjg6InN0ZENsYXNzIjozOntzOjI6ImlkIjtzOjE6IjQiO3M6NDoibmFtZSI7czo1OiJEb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjt9fWZ1bmN0aW9uc19wcml2aWxlZ2VzfGE6MTc6e2k6MDthOjY6e3M6NDoibGluayI7czo5OiJkYXNoYm9hcmQiO3M6NDoiZGVzYyI7czoyMjoiPHNwYW4+RGFzaGJvYXJkPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE1IjtzOjQ6ImtvZGUiO3M6OToiZGFzaGJvYXJkIjtzOjQ6Imljb24iO3M6MjY6IjxpIGNsYXNzPSJmYSBmYS1ob21lIj48L2k+Ijt9aToxO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExOSI7czo0OiJrb2RlIjtzOjc6ImJpbWJ+a3AiO3M6NDoiaWNvbiI7Tjt9aToyO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czoyNToiPHNwYW4+IEJpbWJpbmdhbiA8L3NwYW4+ICI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE4IjtzOjQ6ImtvZGUiO3M6NDoiYmltYiI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MiI7czo0OiJrb2RlIjtzOjg6ImJpbWJ+a2tsIjtzOjQ6Imljb24iO047fWk6NTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2trbC9rZWxvbXBvayI7czo0OiJkZXNjIjtzOjg6IktlbG9tcG9rIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjQiO3M6NDoia29kZSI7czoxNzoiYmltYn5ra2x+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MzoiYWNjIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3OCI7czo0OiJrb2RlIjtzOjY6ImFjY35rcCI7czo0OiJpY29uIjtOO31pOjg7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aTo5O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjEwO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjEyO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToxNDthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fWk6MTU7YTo2OntzOjQ6ImxpbmsiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6NDoiZGVzYyI7czoxMjoiS0tMIEluZGl2aWR1IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODIiO3M6NDoia29kZSI7czoxOToiYWNjfmtrbH5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE2O2E6Njp7czo0OiJsaW5rIjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6NDoiZGVzYyI7czoxNjoiSm1sIEJpbWJpbmdhbiBLUCI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTcxIjtzOjQ6ImtvZGUiO3M6Mjk6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbmtwIjtzOjQ6Imljb24iO047fX0=');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('qbe34cues8tas5ro774g2e4erpusug55', '127.0.0.1', 1670341779, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzQxNzc5O2lkX3VzZXJ8czoxOiI1Ijt1c2VybmFtZXxzOjg6IjEyMjAxNzY2Ijtncm91cF9pZHxzOjE6IjUiO25hbWF8czoxNDoiQWd1cyBLcmVzbmFudG8iO3VzZXJfcHJpdmlsZWdlc3xhOjMxOntzOjE6IiMiO3M6MzoiMTYyIjtzOjE5OiJkYWZ0YXIva2VyamFwcmFrdGVrIjtzOjM6IjExNyI7czoxMDoiZGFmdGFyL2trbCI7czozOiIxNTUiO3M6MTc6ImRhZnRhci9ra2wvaW5zZXJ0IjtzOjM6IjE1NiI7czoxODoiZGFmdGFyL2trbC9zdWNjZXNzIjtzOjM6IjE1OCI7czoxNzoiZGFmdGFyL2trbC91cGRhdGUiO3M6MzoiMTU3IjtzOjE0OiJkYWZ0YXIvc2tyaXBzaSI7czozOiIxMzAiO3M6MjE6ImRhZnRhci9za3JpcHNpL2luc2VydCI7czozOiIxMzEiO3M6MjI6ImRhZnRhci9za3JpcHNpL3N1Y2Nlc3MiO3M6MzoiMTM0IjtzOjIxOiJkYWZ0YXIvc2tyaXBzaS91cGRhdGUiO3M6MzoiMTMyIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjM6IjE2MyI7czozMjoiYmltYmluZ2FuL2trbC9iaW1iaW5nYW5faW5kaXZpZHUiO3M6MzoiMTY1IjtzOjI5OiJiaW1iaW5nYW4va2tsL2luc2VydF9pbmRpdmlkdSI7czozOiIxNjYiO3M6MjI6ImJpbWJpbmdhbi9ra2wva2Vsb21wb2siO3M6MzoiMTY0IjtzOjIyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrIjtzOjM6IjExOSI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9iaW1iaW5nYW4iO3M6MzoiMTIwIjtzOjMyOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3BkZiI7czozOiIxMjYiO3M6MzU6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvY2V0YWtfc2tfbWhzIjtzOjM6IjEyNSI7czoyOToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9kZXRhaWwiO3M6MzoiMTIyIjtzOjMxOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2Rvd25sb2FkIjtzOjM6IjEyMyI7czoyOToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9pbnNlcnQiO3M6MzoiMTIxIjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2xhbmp1dCI7czozOiIxMjciO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjM6IjEzNSI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvYmltYmluZ2FuIjtzOjM6IjEzNiI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfcGRmIjtzOjM6IjE0MiI7czozMDoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfc2tfbWhzIjtzOjM6IjE0MSI7czoyNDoiYmltYmluZ2FuL3Nrcmlwc2kvZGV0YWlsIjtzOjM6IjEzOCI7czoyNjoiYmltYmluZ2FuL3Nrcmlwc2kvZG93bmxvYWQiO3M6MzoiMTM5IjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9pbnNlcnQiO3M6MzoiMTM3IjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9sYW5qdXQiO3M6MzoiMTQzIjtzOjk6ImRhc2hib2FyZCI7czozOiIxMTUiO311c2Vyc19ncm91cHN8YToxOntpOjA7Tzo4OiJzdGRDbGFzcyI6Mzp7czoyOiJpZCI7czoxOiI1IjtzOjQ6Im5hbWUiO3M6OToiTWFoYXNpc3dhIjtzOjQ6ImRlc2MiO3M6OToiTWFoYXNpc3dhIjt9fWZ1bmN0aW9uc19wcml2aWxlZ2VzfGE6MTE6e2k6MDthOjY6e3M6NDoibGluayI7czo5OiJkYXNoYm9hcmQiO3M6NDoiZGVzYyI7czoyMjoiPHNwYW4+RGFzaGJvYXJkPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE1IjtzOjQ6ImtvZGUiO3M6OToiZGFzaGJvYXJkIjtzOjQ6Imljb24iO3M6MjY6IjxpIGNsYXNzPSJmYSBmYS1ob21lIj48L2k+Ijt9aToxO2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czoyMToiPHNwYW4+IERhZnRhciA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTYiO3M6NDoia29kZSI7czo2OiJkYWZ0YXIiO3M6NDoiaWNvbiI7czoyODoiPGkgY2xhc3M9ImZhIGZhLWZvbGRlciI+PC9pPiI7fWk6MjthOjY6e3M6NDoibGluayI7czoxOToiZGFmdGFyL2tlcmphcHJha3RlayI7czo0OiJkZXNjIjtzOjEzOiJLZXJqYSBQcmFrdGVrIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTciO3M6NDoia29kZSI7czoxOToiZGFmdGFyfmtlcmphcHJha3RlayI7czo0OiJpY29uIjtOO31pOjM7YTo2OntzOjQ6ImxpbmsiO3M6MjI6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsiO3M6NDoiZGVzYyI7czoxMzoiS2VyamEgUHJha3RlayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTE5IjtzOjQ6ImtvZGUiO3M6NzoiYmltYn5rcCI7czo0OiJpY29uIjtOO31pOjQ7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjI1OiI8c3Bhbj4gQmltYmluZ2FuIDwvc3Bhbj4gIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTgiO3M6NDoia29kZSI7czo0OiJiaW1iIjtzOjQ6Imljb24iO3M6Mjg6IjxpIGNsYXNzPSJmYSBmYS1mb2xkZXIiPjwvaT4iO31pOjU7YTo2OntzOjQ6ImxpbmsiO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6NzoiU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTM1IjtzOjQ6ImtvZGUiO3M6MTI6ImJpbWJ+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjY7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjM6IktLTCI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTYyIjtzOjQ6ImtvZGUiO3M6ODoiYmltYn5ra2wiO3M6NDoiaWNvbiI7Tjt9aTo3O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjg7YTo2OntzOjQ6ImxpbmsiO3M6MjI6ImJpbWJpbmdhbi9ra2wva2Vsb21wb2siO3M6NDoiZGVzYyI7czo4OiJLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTY0IjtzOjQ6ImtvZGUiO3M6MTc6ImJpbWJ+a2tsfmtlbG9tcG9rIjtzOjQ6Imljb24iO047fWk6OTthOjY6e3M6NDoibGluayI7czoxNDoiZGFmdGFyL3Nrcmlwc2kiO3M6NDoiZGVzYyI7czo3OiJTa3JpcHNpIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMzAiO3M6NDoia29kZSI7czoxNDoiZGFmdGFyfnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToxMDthOjY6e3M6NDoibGluayI7czoxMDoiZGFmdGFyL2trbCI7czo0OiJkZXNjIjtzOjM6IktLTCI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTU1IjtzOjQ6ImtvZGUiO3M6MTA6ImRhZnRhcn5ra2wiO3M6NDoiaWNvbiI7Tjt9fQ==');
INSERT INTO "public"."ci_sessions" ("id", "ip_address", "timestamp", "data") VALUES ('8i88dk45tttc8brm88m9iahe220o251t', '127.0.0.1', 1670338936, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcwMzM4ODU2O2lkX3VzZXJ8czoxOiIyIjt1c2VybmFtZXxzOjU6ImFkbWluIjtncm91cF9pZHxzOjE6IjEiO25hbWF8czo1OiJhZG1pbiI7dXNlcl9wcml2aWxlZ2VzfGE6NjA6e3M6MToiIyI7czozOiIxNjgiO3M6MjI6ImJpbWJpbmdhbi9ra2wvaW5kaXZpZHUiO3M6MzoiMTYzIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjM6IjE2NCI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czozOiIxMTkiO3M6MzI6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvYmltYmluZ2FuIjtzOjM6IjEyMCI7czozMjoiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19wZGYiO3M6MzoiMTI2IjtzOjMxOiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2NldGFrX3NrIjtzOjM6IjEyOSI7czozNToiYmltYmluZ2FuL2tlcmphcHJha3Rlay9jZXRha19za19taHMiO3M6MzoiMTI1IjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL2RldGFpbCI7czozOiIxMjIiO3M6MzE6ImJpbWJpbmdhbi9rZXJqYXByYWt0ZWsvZG93bmxvYWQiO3M6MzoiMTIzIjtzOjI5OiJiaW1iaW5nYW4va2VyamFwcmFrdGVrL3NlYXJjaCI7czozOiIxMjgiO3M6MTc6ImJpbWJpbmdhbi9za3JpcHNpIjtzOjM6IjEzNSI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvYmltYmluZ2FuIjtzOjM6IjEzNiI7czoyNzoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfcGRmIjtzOjM6IjE0MiI7czoyNjoiYmltYmluZ2FuL3Nrcmlwc2kvY2V0YWtfc2siO3M6MzoiMTQ1IjtzOjMwOiJiaW1iaW5nYW4vc2tyaXBzaS9jZXRha19za19taHMiO3M6MzoiMTQxIjtzOjI0OiJiaW1iaW5nYW4vc2tyaXBzaS9kZXRhaWwiO3M6MzoiMTM4IjtzOjI2OiJiaW1iaW5nYW4vc2tyaXBzaS9kb3dubG9hZCI7czozOiIxMzkiO3M6MjQ6ImJpbWJpbmdhbi9za3JpcHNpL3NlYXJjaCI7czozOiIxNDQiO3M6MjI6ImFjYy9pbmRleF9ra2xfaW5kaXZpZHUiO3M6MzoiMTgyIjtzOjIzOiJhY2MvcmVzdWx0X2trbF9pbmRpdmlkdSI7czozOiIxODMiO3M6MjI6ImFjYy9pbmRleF9ra2xfa2Vsb21wb2siO3M6MzoiMTg0IjtzOjIzOiJhY2MvcmVzdWx0X2trbF9rZWxvbXBvayI7czozOiIxODUiO3M6MzoiYWNjIjtzOjM6IjE3OCI7czoxMzoiYWNjL3Jlc3VsdF9rcCI7czozOiIxNzkiO3M6MTc6ImFjYy9pbmRleF9za3JpcHNpIjtzOjM6IjE4MCI7czoxODoiYWNjL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE4MSI7czo5OiJmdW5jdGlvbnMiO3M6MjoiMTkiO3M6MTY6ImZ1bmN0aW9ucy9kZWxldGUiO3M6MjoiMTciO3M6MTY6ImZ1bmN0aW9ucy9pbnNlcnQiO3M6MjoiMTgiO3M6MTY6ImZ1bmN0aW9ucy91cGRhdGUiO3M6MjoiMTYiO3M6NjoiZ3JvdXBzIjtzOjE6IjgiO3M6MjM6Imdyb3Vwcy9jcmVhdGVfcHJpdmlsZWdlIjtzOjE6IjUiO3M6MTM6Imdyb3Vwcy9kZWxldGUiO3M6MToiNCI7czoxMzoiZ3JvdXBzL2luc2VydCI7czoxOiIyIjtzOjEzOiJncm91cHMvdXBkYXRlIjtzOjE6IjMiO3M6MTk6ImRhZnRhci9rZXJqYXByYWt0ZWsiO3M6MzoiMTE3IjtzOjE0OiJkYWZ0YXIvc2tyaXBzaSI7czozOiIxMzAiO3M6NToiZG9zZW4iO3M6MzoiMTUxIjtzOjEyOiJkb3Nlbi9kZWxldGUiO3M6MzoiMTU0IjtzOjEyOiJkb3Nlbi9pbnNlcnQiO3M6MzoiMTUyIjtzOjEyOiJkb3Nlbi91cGRhdGUiO3M6MzoiMTUzIjtzOjg6ImtlbG9tcG9rIjtzOjM6IjE0NyI7czoxNToia2Vsb21wb2svZGVsZXRlIjtzOjM6IjE1MCI7czoxNToia2Vsb21wb2svaW5zZXJ0IjtzOjM6IjE0OCI7czoxNToia2Vsb21wb2svdXBkYXRlIjtzOjM6IjE0OSI7czoyODoicmVrYXAvYmltYmluZ2FuX2trbF9pbmRpdmlkdSI7czozOiIxNzUiO3M6MjU6InJla2FwL3Jlc3VsdF9ra2xfaW5kaXZpZHUiO3M6MzoiMTc2IjtzOjE4OiJyZWthcC9iaW1iaW5nYW5fa3AiO3M6MzoiMTcxIjtzOjE1OiJyZWthcC9yZXN1bHRfa3AiO3M6MzoiMTcyIjtzOjIzOiJyZWthcC9iaW1iaW5nYW5fc2tyaXBzaSI7czozOiIxNzMiO3M6MjA6InJla2FwL3Jlc3VsdF9za3JpcHNpIjtzOjM6IjE3NCI7czo1OiJjaGFydCI7czozOiIxODkiO3M6MTI6ImNoYXJ0L3Jlc3VsdCI7czozOiIxOTAiO3M6OToiZGFzaGJvYXJkIjtzOjM6IjExNSI7czo1OiJyZWthcCI7czozOiIxODciO3M6MTI6InJla2FwL3Jlc3VsdCI7czozOiIxODgiO3M6NToidXNlcnMiO3M6MjoiMTIiO3M6MTI6InVzZXJzL2RlbGV0ZSI7czoyOiIyMCI7czoxMjoidXNlcnMvaW5zZXJ0IjtzOjE6IjEiO311c2Vyc19ncm91cHN8YToxOntpOjA7Tzo4OiJzdGRDbGFzcyI6Mzp7czoyOiJpZCI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NToiQWRtaW4iO3M6NDoiZGVzYyI7czoyNjoiTWVuZ2F0dXIgUGVyaWxha3UgUGVuZ2d1bmEiO319ZnVuY3Rpb25zX3ByaXZpbGVnZXN8YToyOTp7aTowO2E6Njp7czo0OiJsaW5rIjtzOjk6ImRhc2hib2FyZCI7czo0OiJkZXNjIjtzOjIyOiI8c3Bhbj5EYXNoYm9hcmQ8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTUiO3M6NDoia29kZSI7czo5OiJkYXNoYm9hcmQiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWhvbWUiPjwvaT4iO31pOjE7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjE4OiI8c3Bhbj4gQXBwIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEzIjtzOjQ6ImtvZGUiO3M6MToiIyI7czo0OiJpY29uIjtzOjI2OiI8aSBjbGFzcz0iZmEgZmEtZm9udCI+PC9pPiI7fWk6MjthOjY6e3M6NDoibGluayI7czo5OiJmdW5jdGlvbnMiO3M6NDoiZGVzYyI7czo4OiJGdW5jdGlvbiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MjoiMTkiO3M6NDoia29kZSI7czoxMToiI35mdW5jdGlvbnMiO3M6NDoiaWNvbiI7Tjt9aTozO2E6Njp7czo0OiJsaW5rIjtzOjY6Imdyb3VwcyI7czo0OiJkZXNjIjtzOjQ6IlJvbGUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjE6IjgiO3M6NDoia29kZSI7czo4OiIjfmdyb3VwcyI7czo0OiJpY29uIjtOO31pOjQ7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gTWFzdGVyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NiI7czo0OiJrb2RlIjtzOjY6Im1hc3RlciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtbWF4Y2RuIj48L2k+Ijt9aTo1O2E6Njp7czo0OiJsaW5rIjtzOjg6ImtlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE0NyI7czo0OiJrb2RlIjtzOjE1OiJtYXN0ZXJ+a2Vsb21wb2siO3M6NDoiaWNvbiI7Tjt9aTo2O2E6Njp7czo0OiJsaW5rIjtzOjU6InVzZXJzIjtzOjQ6ImRlc2MiO3M6MTk6IjxzcGFuPiBVc2VyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjI6IjEyIjtzOjQ6ImtvZGUiO3M6NToidXNlcnMiO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLXVzZXIiPjwvaT4iO31pOjc7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjIxOiI8c3Bhbj4gRGFmdGFyIDwvc3Bhbj4iO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNiI7czo0OiJrb2RlIjtzOjY6ImRhZnRhciI7czo0OiJpY29uIjtzOjI4OiI8aSBjbGFzcz0iZmEgZmEtZm9sZGVyIj48L2k+Ijt9aTo4O2E6Njp7czo0OiJsaW5rIjtzOjE5OiJkYWZ0YXIva2VyamFwcmFrdGVrIjtzOjQ6ImRlc2MiO3M6MTM6IktlcmphIFByYWt0ZWsiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjExNyI7czo0OiJrb2RlIjtzOjE5OiJkYWZ0YXJ+a2VyamFwcmFrdGVrIjtzOjQ6Imljb24iO047fWk6OTthOjY6e3M6NDoibGluayI7czoyMjoiYmltYmluZ2FuL2tlcmphcHJha3RlayI7czo0OiJkZXNjIjtzOjEzOiJLZXJqYSBQcmFrdGVrIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTkiO3M6NDoia29kZSI7czo3OiJiaW1ifmtwIjtzOjQ6Imljb24iO047fWk6MTA7YTo2OntzOjQ6ImxpbmsiO3M6MToiIyI7czo0OiJkZXNjIjtzOjI1OiI8c3Bhbj4gQmltYmluZ2FuIDwvc3Bhbj4gIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxMTgiO3M6NDoia29kZSI7czo0OiJiaW1iIjtzOjQ6Imljb24iO3M6Mjg6IjxpIGNsYXNzPSJmYSBmYS1mb2xkZXIiPjwvaT4iO31pOjExO2E6Njp7czo0OiJsaW5rIjtzOjE3OiJiaW1iaW5nYW4vc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjEzNSI7czo0OiJrb2RlIjtzOjEyOiJiaW1ifnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToxMjthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MzoiS0tMIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjIiO3M6NDoia29kZSI7czo4OiJiaW1ifmtrbCI7czo0OiJpY29uIjtOO31pOjEzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6ODoiS2Vsb21wb2siO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2NCI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5rZWxvbXBvayI7czo0OiJpY29uIjtOO31pOjE0O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJiaW1iaW5nYW4va2tsL2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6ODoiSW5kaXZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE2MyI7czo0OiJrb2RlIjtzOjE3OiJiaW1ifmtrbH5pbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjE1O2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBJbmRpdmlkdSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTgyIjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsaW5kaXZpZHUiO3M6NDoiaWNvbiI7Tjt9aToxNjthOjY6e3M6NDoibGluayI7czo1OiJjaGFydCI7czo0OiJkZXNjIjtzOjIwOiI8c3Bhbj4gQ2hhcnQgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg5IjtzOjQ6ImtvZGUiO3M6NToiY2hhcnQiO3M6NDoiaWNvbiI7czozMToiPGkgY2xhc3M9ImZhIGZhLXBpZS1jaGFydCI+PC9pPiI7fWk6MTc7YTo2OntzOjQ6ImxpbmsiO3M6MTg6InJla2FwL2JpbWJpbmdhbl9rcCI7czo0OiJkZXNjIjtzOjE2OiJKbWwgQmltYmluZ2FuIEtQIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNzEiO3M6NDoia29kZSI7czoyOToicmVrYXBiaW1iaW5nYW5+am1sYmltYmluZ2Fua3AiO3M6NDoiaWNvbiI7Tjt9aToxODthOjY6e3M6NDoibGluayI7czozOiJhY2MiO3M6NDoiZGVzYyI7czoxMzoiS2VyamEgUHJha3RlayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc4IjtzOjQ6ImtvZGUiO3M6NjoiYWNjfmtwIjtzOjQ6Imljb24iO047fWk6MTk7YTo2OntzOjQ6ImxpbmsiO3M6MTQ6ImRhZnRhci9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6NzoiU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTMwIjtzOjQ6ImtvZGUiO3M6MTQ6ImRhZnRhcn5za3JpcHNpIjtzOjQ6Imljb24iO047fWk6MjA7YTo2OntzOjQ6ImxpbmsiO3M6MjM6InJla2FwL2JpbWJpbmdhbl9za3JpcHNpIjtzOjQ6ImRlc2MiO3M6MjE6IkptbCBCaW1iaW5nYW4gU2tyaXBzaSI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTczIjtzOjQ6ImtvZGUiO3M6MzQ6InJla2FwYmltYmluZ2FufmptbGJpbWJpbmdhbnNrcmlwc2kiO3M6NDoiaWNvbiI7Tjt9aToyMTthOjY6e3M6NDoibGluayI7czo1OiJkb3NlbiI7czo0OiJkZXNjIjtzOjU6IkRvc2VuIjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNTEiO3M6NDoia29kZSI7czoxMjoibWFzdGVyfmRvc2VuIjtzOjQ6Imljb24iO047fWk6MjI7YTo2OntzOjQ6ImxpbmsiO3M6NToicmVrYXAiO3M6NDoiZGVzYyI7czozNjoiPHNwYW4+IFJla2FwIERvc2VuIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxODciO3M6NDoia29kZSI7czoxMDoicmVrYXBkb3NlbiI7czo0OiJpY29uIjtzOjI3OiI8aSBjbGFzcz0iZmEgZmEtbW9uZXkiPjwvaT4iO31pOjIzO2E6Njp7czo0OiJsaW5rIjtzOjIyOiJhY2MvaW5kZXhfa2tsX2tlbG9tcG9rIjtzOjQ6ImRlc2MiO3M6MTI6IktLTCBLZWxvbXBvayI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTg0IjtzOjQ6ImtvZGUiO3M6MTk6ImFjY35ra2x+a2tsa2Vsb21wb2siO3M6NDoiaWNvbiI7czowOiIiO31pOjI0O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozMDoiPHNwYW4+IFJla2FwIEJpbWJpbmdhbiA8L3NwYW4+IjtzOjQ6Im1lbnUiO3M6MToidCI7czoyOiJpZCI7czozOiIxNjgiO3M6NDoia29kZSI7czoxNDoicmVrYXBiaW1iaW5nYW4iO3M6NDoiaWNvbiI7czoyNjoiPGkgY2xhc3M9ImZhIGZhLWxpc3QiPjwvaT4iO31pOjI1O2E6Njp7czo0OiJsaW5rIjtzOjI4OiJyZWthcC9iaW1iaW5nYW5fa2tsX2luZGl2aWR1IjtzOjQ6ImRlc2MiO3M6MjU6IkptbCBCaW1iaW5nYW4gS0tMIEluZHZpZHUiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE3NSI7czo0OiJrb2RlIjtzOjM4OiJyZWthcGJpbWJpbmdhbn5qbWxiaW1iaW5nYW5ra2xpbmRpdmlkdSI7czo0OiJpY29uIjtOO31pOjI2O2E6Njp7czo0OiJsaW5rIjtzOjE3OiJhY2MvaW5kZXhfc2tyaXBzaSI7czo0OiJkZXNjIjtzOjc6IlNrcmlwc2kiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4MCI7czo0OiJrb2RlIjtzOjExOiJhY2N+c2tyaXBzaSI7czo0OiJpY29uIjtOO31pOjI3O2E6Njp7czo0OiJsaW5rIjtzOjE6IiMiO3M6NDoiZGVzYyI7czozOiJLS0wiO3M6NDoibWVudSI7czoxOiJ0IjtzOjI6ImlkIjtzOjM6IjE4NiI7czo0OiJrb2RlIjtzOjc6ImFjY35ra2wiO3M6NDoiaWNvbiI7Tjt9aToyODthOjY6e3M6NDoibGluayI7czoxOiIjIjtzOjQ6ImRlc2MiO3M6MjQ6IjxzcGFuPiBSZWthcCBBY2MgPC9zcGFuPiI7czo0OiJtZW51IjtzOjE6InQiO3M6MjoiaWQiO3M6MzoiMTc3IjtzOjQ6ImtvZGUiO3M6MzoiYWNjIjtzOjQ6Imljb24iO3M6MzY6IjxpIGNsYXNzPSJmYSBmYS1jaGVjay1zcXVhcmUtbyI+PC9pPiI7fX0=');
COMMIT;

-- ----------------------------
-- Table structure for config_krs
-- ----------------------------
DROP TABLE IF EXISTS "public"."config_krs";
CREATE TABLE "public"."config_krs" (
  "id" int2 NOT NULL DEFAULT nextval('config_krs_id_seq'::regclass),
  "tahun" int2,
  "semester" varchar(1) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."config_krs" OWNER TO "daesuke";

-- ----------------------------
-- Records of config_krs
-- ----------------------------
BEGIN;
INSERT INTO "public"."config_krs" ("id", "tahun", "semester") VALUES (1, 2023, '1');
COMMIT;

-- ----------------------------
-- Table structure for data_studi
-- ----------------------------
DROP TABLE IF EXISTS "public"."data_studi";
CREATE TABLE "public"."data_studi" (
  "id_krs" int4,
  "kode" varchar(10) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "sks" int4,
  "id_konversi" int2,
  "id" int4 NOT NULL DEFAULT nextval('data_studi_id_seq'::regclass)
)
;
ALTER TABLE "public"."data_studi" OWNER TO "daesuke";

-- ----------------------------
-- Records of data_studi
-- ----------------------------
BEGIN;
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219202', 'Web Statis', 3, 1, 1);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219202', 'Web Statis', 3, 3, 48);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IP219202', 'Web Statis', 3, 3, 95);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219201', 'Pesantren Mahasiswa 2', 0, 1, 3);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (6, 'SK219210', 'Kerja Praktik', 3, NULL, 96);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IK219201', 'Desain Web', 3, 1, 4);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219201', 'Pesantren Mahasiswa 2', 0, 3, 97);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IK219201', 'Desain Web', 3, 3, 98);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IK219205', 'Aljabar Linear', 3, 1, 5);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IK219205', 'Aljabar Linear', 3, 3, 99);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IS219104', 'Matematika Diskrit', 3, 1, 7);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219105', 'Pendidikan Anti Korupsi', 2, 1, 6);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219202', 'Cloud Computing', 3, 1, 8);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SS219106', 'Riset Operasi', 3, 1, 9);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SS219107', 'Agama 3', 3, 1, 10);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219207', 'Cyber Security', 6, 1, 11);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219108', 'Mobile Programming', 4, 3, 12);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219113', 'Desain Berorientasi Objek', 3, 1, 13);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219206', 'Web Service', 4, 1, 14);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SU219103', 'Kewirausahaan 2', 2, 2, 2);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219119', 'Kecerdasan Buatan', 3, 1, 15);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219118', 'Sistem Pendukung Keputusan', 2, 1, 16);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219116', 'Sistem Terdistribusi', 2, 1, 17);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219115', 'Bahasa Indonesia', 3, 1, 18);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IU219105', 'Sistem Pakar', 2, 2, 19);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219209', 'Internet Of Things', 3, 1, 20);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IS219104', 'Matematika Diskrit', 3, 3, 100);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IS219108', 'Bisnis Digital', 2, 1, 21);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219111', 'Agama 2', 2, 1, 22);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219205', 'Data Mining', 2, 1, 23);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219101', 'Pengantar Teknologi Informasi', 3, 1, 24);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219203', 'Algoritma', 4, 1, 25);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IS219101', 'Kewirausahaan 1', 2, 1, 26);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IP219105', 'Pendidikan Anti Korupsi', 2, 3, 101);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IS219102', 'Pancasila', 2, 1, 27);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IU219101', 'Bahasa Inggris 1', 2, 2, 28);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IU219102', 'Logika Informatika', 2, 1, 29);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219204', 'Pemrograman Struktural dan Struktur Data', 6, 2, 30);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IS219103', 'Kewarganegaraan', 2, 1, 31);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219202', 'Cloud Computing', 3, 3, 102);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SU219104', 'Bahasa Inggris 2', 2, 2, 32);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219207', 'Sistem dan Manajemen Basis Data', 4, 2, 33);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219208', 'Agama 1', 2, 1, 34);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219109', 'Pemrograman Berorientasi Objek', 4, 1, 35);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IP219106', 'Sistem Operasi', 3, 1, 36);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219203', 'Jaringan Komputer', 6, 1, 37);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SK219204', 'Pemrograman Web', 4, 2, 38);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219110', 'Arsitektur dan Organisasi Komputer', 3, 1, 39);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219212', 'Interaksi Manusia Komputer', 2, 1, 40);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219214', 'Animasi dan Multimedia', 4, 1, 41);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219117', 'Rekayasa Perangkat Lunak', 6, 2, 42);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SP219220', 'Etika Profesi', 2, 2, 43);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IU219206', 'Metodologi Penelitian', 2, 1, 44);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'SU219107', 'Statistik', 3, 2, 45);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SS219106', 'Riset Operasi', 3, 3, 103);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (1, 'IBB215102', 'Statistik', 2, 1, 46);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SS219107', 'Agama 3', 3, 3, 104);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219207', 'Cyber Security', 6, 3, 105);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219108', 'Mobile Programming', 4, 3, 106);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219113', 'Desain Berorientasi Objek', 3, 3, 107);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219206', 'Web Service', 4, 3, 108);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SU219103', 'Kewirausahaan 2', 2, 3, 109);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219119', 'Kecerdasan Buatan', 3, 3, 110);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219118', 'Sistem Pendukung Keputusan', 2, 3, 111);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219116', 'Sistem Terdistribusi', 2, 3, 112);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219115', 'Bahasa Indonesia', 3, 4, 113);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IU219105', 'Sistem Pakar', 2, 5, 114);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219209', 'Internet Of Things', 3, 5, 115);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IS219108', 'Bisnis Digital', 2, 4, 116);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SP219111', 'Agama 2', 2, 4, 117);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'SK219205', 'Data Mining', 2, 4, 118);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IP219101', 'Pengantar Teknologi Informasi', 3, 4, 119);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IP219203', 'Algoritma', 4, 4, 120);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (5, 'IS219101', 'Kewirausahaan 1', 2, 4, 121);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219201', 'Pesantren Mahasiswa 2', 0, 3, 50);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IK219201', 'Desain Web', 3, 3, 51);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IK219205', 'Aljabar Linear', 3, 3, 52);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IS219104', 'Matematika Diskrit', 3, 3, 53);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219105', 'Pendidikan Anti Korupsi', 2, 3, 54);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219202', 'Cloud Computing', 3, 3, 55);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SS219106', 'Riset Operasi', 3, 3, 56);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SS219107', 'Agama 3', 3, 3, 57);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219207', 'Cyber Security', 6, 3, 58);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219108', 'Mobile Programming', 4, 3, 59);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (4, 'SK219210', 'Kerja Praktek', 3, NULL, 49);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (2, 'SK219210', 'Kerja Praktek', 3, NULL, 47);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219113', 'Desain Berorientasi Objek', 3, 3, 60);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219206', 'Web Service', 4, 3, 61);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SU219103', 'Kewirausahaan 2', 2, 3, 62);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219119', 'Kecerdasan Buatan', 3, 3, 63);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219118', 'Sistem Pendukung Keputusan', 2, 3, 64);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219116', 'Sistem Terdistribusi', 2, 3, 65);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219117', 'Rekayasa Perangkat Lunak', 6, 3, 90);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219220', 'Etika Profesi', 2, 3, 91);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IU219206', 'Metodologi Penelitian', 2, 3, 92);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SU219107', 'Statistik', 3, 3, 93);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IBB215102', 'Statistik', 2, 3, 94);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219115', 'Bahasa Indonesia', 3, 3, 66);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IU219105', 'Sistem Pakar', 2, 3, 67);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219209', 'Internet Of Things', 3, 3, 68);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IS219108', 'Bisnis Digital', 2, 3, 69);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219111', 'Agama 2', 2, 3, 70);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219205', 'Data Mining', 2, 3, 71);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219101', 'Pengantar Teknologi Informasi', 3, 3, 72);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219203', 'Algoritma', 4, 3, 73);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IS219101', 'Kewirausahaan 1', 2, 3, 74);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IS219102', 'Pancasila', 2, 3, 75);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IU219101', 'Bahasa Inggris 1', 2, 3, 76);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IU219102', 'Logika Informatika', 2, 3, 77);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IS219103', 'Kewarganegaraan', 2, 3, 79);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SU219104', 'Bahasa Inggris 2', 2, 3, 80);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219207', 'Sistem dan Manajemen Basis Data', 4, 3, 81);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219208', 'Agama 1', 2, 3, 82);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219109', 'Pemrograman Berorientasi Objek', 4, 3, 83);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219106', 'Sistem Operasi', 3, 3, 84);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219203', 'Jaringan Komputer', 6, 3, 85);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SK219204', 'Pemrograman Web', 4, 3, 86);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219110', 'Arsitektur dan Organisasi Komputer', 3, 3, 87);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219212', 'Interaksi Manusia Komputer', 2, 3, 88);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'SP219214', 'Animasi dan Multimedia', 4, 3, 89);
INSERT INTO "public"."data_studi" ("id_krs", "kode", "nama", "sks", "id_konversi", "id") VALUES (3, 'IP219204', 'Pemrograman Struktural dan Struktur Data', 6, 4, 78);
COMMIT;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS "public"."dosen";
CREATE TABLE "public"."dosen" (
  "id" int2 NOT NULL DEFAULT nextval('dosen_id_seq'::regclass),
  "nmdos" varchar(255) COLLATE "pg_catalog"."default",
  "gelar_belakang" varchar(50) COLLATE "pg_catalog"."default",
  "gelar_depan" varchar(50) COLLATE "pg_catalog"."default",
  "nodos" varchar(50) COLLATE "pg_catalog"."default",
  "nip" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."dosen" OWNER TO "daesuke";

-- ----------------------------
-- Records of dosen
-- ----------------------------
BEGIN;
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (1, 'Andri Syafrianto', 'S.Kom, M.Cs.', ' ', '201230047', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (2, 'Aris Badaruddin Thoha', 'S.Ag, M.Ag.', ' ', '200110001', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (4, 'Dedy Ardiansyah', 'S.Sos, M.AB.', ' ', '200110002', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (6, 'Herdiesel Santoso', 'S.T., S.Kom., M.Cs.', ' ', '201640066', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (7, 'Irfan Nuruddin', 'S.ThI, M.SI.', ' ', '200610020', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (8, 'Minarwati', 'ST. M.Cs.', ' ', '200110006', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (9, 'Momon Muzakkar', 'ST. M.Eng.', ' ', '200110007', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (10, 'Rachmad Sanuri', 'SE., M.Eng.', ' ', '201010032', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (11, 'Siswaya', 'S.Pd.', ' ', '200110008', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (14, 'Untung Subagyo', 'S.Kom. M.Kom.', ' ', '200710023', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (15, 'Wahyu Widodo', 'S.Kom., M.Kom.', ' ', '200910029', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (16, 'Yuli Praptomo PHS', 'S.Kom. M.Cs.', ' ', '200110011', NULL);
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (3, 'Asih Winantu', 'S.Kom, M.Cs.', ' ', '198006132015042001', '198006132015042001');
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (5, 'Eko Riswanto', 'ST, M.Cs.', ' ', '197501152005011002', '197501152005011002');
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (13, 'Suparyanto', 'ST. M.Eng.', ' ', '197005042005011001', '197005042005011001');
INSERT INTO "public"."dosen" ("id", "nmdos", "gelar_belakang", "gelar_depan", "nodos", "nip") VALUES (12, 'Sugiyatno', 'S.Kom., M.Kom.', ' ', '201130001', '');
COMMIT;

-- ----------------------------
-- Table structure for functions
-- ----------------------------
DROP TABLE IF EXISTS "public"."functions";
CREATE TABLE "public"."functions" (
  "id" int4 NOT NULL DEFAULT nextval('functions_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "desc" varchar(255) COLLATE "pg_catalog"."default",
  "menu" bool,
  "kode" text COLLATE "pg_catalog"."default",
  "icon" varchar(255) COLLATE "pg_catalog"."default",
  "no_urut" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."functions" OWNER TO "daesuke";

-- ----------------------------
-- Records of functions
-- ----------------------------
BEGIN;
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (1, 'users/insert', 'Tambah users', 'f', 'users~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (2, 'groups/insert', 'Tambah groups', 'f', '#~groups~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (3, 'groups/update', 'Ubah groups', 'f', '#~groups~update', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (4, 'groups/delete', 'Hapus groups', 'f', '#~groups~delete', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (5, 'groups/create_privilege', 'Buat privilege groups', 'f', '#~groups~create_privilege', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (135, 'bimbingan/skripsi', 'Skripsi', 't', 'bimb~skripsi', NULL, '7');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (146, '#', '<span> Master </span>', 't', 'master', '<i class="fa fa-maxcdn"></i>', '3');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (147, 'kelompok', 'Kelompok', 't', 'master~kelompok', NULL, '3');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (13, '#', '<span> App </span>', 't', '#', '<i class="fa fa-font"></i>', '2');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (162, '#', 'KKL', 't', 'bimb~kkl', NULL, '8');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (115, 'dashboard', '<span>Dashboard</span>', 't', 'dashboard', '<i class="fa fa-home"></i>', '1');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (16, 'functions/update', 'Ubah function', 'f', '#~functions~update', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (17, 'functions/delete', 'Hapus function', 'f', '#~functions~delete', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (18, 'functions/insert', 'tambah function', 'f', '#~functions~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (20, 'users/delete', 'Hapus users', 'f', 'users~hapus', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (8, 'groups', 'Role', 't', '#~groups', NULL, '2');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (12, 'users', '<span> User </span>', 't', 'users', '<i class="fa fa-user"></i>', '4');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (116, '#', '<span> Daftar </span>', 't', 'daftar', '<i class="fa fa-folder"></i>', '5');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (117, 'daftar/kerjapraktek', 'Kerja Praktek', 't', 'daftar~kerjapraktek', NULL, '5');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (118, '#', '<span> Bimbingan </span> ', 't', 'bimb', '<i class="fa fa-folder"></i>', '6');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (119, 'bimbingan/kerjapraktek', 'Kerja Praktek', 't', 'bimb~kp', NULL, '6');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (151, 'dosen', 'Dosen', 't', 'master~dosen', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (152, 'dosen/insert', 'tambah dosen', 'f', 'master~dosen~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (153, 'dosen/update', 'update dosen', 'f', 'master~dosen~update', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (154, 'dosen/delete', 'Hapus dosen', 'f', 'master~dosen~hapus', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (155, 'daftar/kkl', 'KKL', 't', 'daftar~kkl', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (156, 'daftar/kkl/insert', 'insert kkl', 'f', 'daftar~kkl~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (157, 'daftar/kkl/update', 'Ubah KKL', 'f', 'daftar~kkl~ubah', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (19, 'functions', 'Function', 't', '#~functions', NULL, '2');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (163, 'bimbingan/kkl/individu', 'Individu', 't', 'bimb~kkl~individu', NULL, '9');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (120, 'bimbingan/kerjapraktek/bimbingan', 'bimbingan kerja praktek', 'f', 'bimb~kp~bimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (121, 'bimbingan/kerjapraktek/insert', 'Insert bimbingan kerja praktek', 'f', 'bimb~kp~insertbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (122, 'bimbingan/kerjapraktek/detail', 'Detail bimbingan kerja praktek', 'f', 'bimb~kp~detailbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (123, 'bimbingan/kerjapraktek/download', 'Download dokumen bimbingan kp', 'f', 'bimb~kp~downloadbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (124, 'bimbingan/kerjapraktek/acc', 'Persetujuan Dosen', 'f', 'bimb~kp~persetujuanbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (125, 'bimbingan/kerjapraktek/cetak_sk_mhs', 'Cetak pdf sk mhs', 'f', 'bimb~kp~cetakskmhsbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (126, 'bimbingan/kerjapraktek/cetak_pdf', 'cetak catatan bimbingan', 'f', 'bimb~kp~cetakcatatanbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (127, 'bimbingan/kerjapraktek/lanjut', 'Lanjut Bimbingan MHS', 'f', 'bimb~kp~lanjut', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (128, 'bimbingan/kerjapraktek/search', 'Pencarian bimbingan kp', 'f', 'bimb~kp~bimbingansearch', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (129, 'bimbingan/kerjapraktek/cetak_sk', 'cetak sk bimbingan kp', 'f', 'bimb~kp~cetakskbimbingansemua', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (130, 'daftar/skripsi', 'Skripsi', 't', 'daftar~skripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (131, 'daftar/skripsi/insert', 'insert skripsi', 'f', 'daftar~skripsi~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (132, 'daftar/skripsi/update', 'update daftar skripsi', 'f', 'daftar~skripsi~update', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (133, 'daftar/skripsi/persetujuan', 'persetujuan kaprodi', 'f', 'daftar~skripsi~persetujuan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (134, 'daftar/skripsi/success', 'sukses pendaftaran skripsi', 'f', 'daftar~skripsi~success', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (158, 'daftar/kkl/success', 'pengajuan success', 'f', 'daftar~kkl~success', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (136, 'bimbingan/skripsi/bimbingan', 'bimbingan skripsi', 'f', 'bimb~skripsi~bimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (137, 'bimbingan/skripsi/insert', 'Insert bimbingan skripsi', 'f', 'bimb~skripsi~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (138, 'bimbingan/skripsi/detail', 'Detail bimbingan skripsi', 'f', 'bimb~skripsi~detail', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (139, 'bimbingan/skripsi/download', 'Download dokumen bimbingan skripsi', 'f', 'bimb~skripsi~download', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (140, 'bimbingan/skripsi/acc', 'Persetujuan Dosen', 'f', 'bimb~skripsi~persetujuandosen', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (141, 'bimbingan/skripsi/cetak_sk_mhs', 'Cetak pdf sk skripsi mhs', 'f', 'bimb~skripsi~cetakskskripsimhs', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (142, 'bimbingan/skripsi/cetak_pdf', 'cetak catatan bimbingan skripsi', 'f', 'bimb~skripsi~cetakbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (143, 'bimbingan/skripsi/lanjut', 'Lanjut Bimbingan MHS', 'f', 'bimb~skripsi~lanjut', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (144, 'bimbingan/skripsi/search', 'Pencarian bimbingan skripsi', 'f', 'bimb~skripsi~bimbingansearch', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (145, 'bimbingan/skripsi/cetak_sk', 'cetat sk bimbingan skripsi semua', 'f', 'bimb~skripsi~cetakskskripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (148, 'kelompok/insert', 'tambah kelompok', 'f', 'master~kelompok~tambah', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (149, 'kelompok/update', 'ubah kelompok', 'f', 'master~kelompok~update', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (150, 'kelompok/delete', 'hapus kelompok', 'f', 'master~kelompok~hapus', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (161, 'daftar/kkl/kkl_kelompok', 'KKL Kelompok', 't', 'daftar~kkl~kelompok', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (160, 'daftar/kkl/kkl_individu', 'KKL Individu', 't', 'daftar~kkl~individu', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (159, 'daftar/kkl/persetujuan', 'persetujuan wakademik', 'f', 'daftar~kkl~individu~persetujuan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (165, 'bimbingan/kkl/bimbingan_individu', 'bimbingan kkl individu', 'f', 'bimb~kkl~individu~listbimbingan', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (166, 'bimbingan/kkl/insert_individu', 'tambah bimbingan individu', 'f', 'bimb~kkl~individu~insert', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (167, 'bimbingan/kkl/set_dosen', 'Seting Dosen', 'f', 'bimb~kkl~kelompok~setdosen', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (173, 'rekap/bimbingan_skripsi', 'Jml Bimbingan Skripsi', 't', 'rekapbimbingan~jmlbimbinganskripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (164, 'bimbingan/kkl/kelompok', 'Kelompok', 't', 'bimb~kkl~kelompok', NULL, '9');
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (178, 'acc', 'Kerja Praktek', 't', 'acc~kp', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (179, 'acc/result_kp', 'Menampilkan data Acc kerja praktek', 'f', 'acc~kp~result_kp', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (180, 'acc/index_skripsi', 'Skripsi', 't', 'acc~skripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (181, 'acc/result_skripsi', 'Menampilkan data Acc skripsi', 'f', 'acc~skripsi~result_skripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (168, '#', '<span> Rekap Bimbingan </span>', 't', 'rekapbimbingan', '<i class="fa fa-list"></i>', NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (174, 'rekap/result_skripsi', 'Menampilkan data jml bimbingan skripsi mhs', 'f', 'rekapbimbingan~jmlbimbinganskripsi~resultskripsi', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (175, 'rekap/bimbingan_kkl_individu', 'Jml Bimbingan KKL Indvidu', 't', 'rekapbimbingan~jmlbimbingankklindividu', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (176, 'rekap/result_kkl_individu', 'Menampilkan data jml bimbingan kkl individu mhs', 'f', 'rekapbimbingan~jmlbimbingankklindividu~resultkklindividu', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (171, 'rekap/bimbingan_kp', 'Jml Bimbingan KP', 't', 'rekapbimbingan~jmlbimbingankp', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (182, 'acc/index_kkl_individu', 'KKL Individu', 't', 'acc~kkl~kklindividu', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (183, 'acc/result_kkl_individu', 'menampilkan data acc kkl individu', 'f', 'acc~kkl~kklindividu~result_kklindividu', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (172, 'rekap/result_kp', 'Menampilkan data jml bimbingan kp mhs', 'f', 'rekapbimbingan~jmlbimbingankp~resultkp', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (186, '#', 'KKL', 't', 'acc~kkl', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (185, 'acc/result_kkl_kelompok', 'menampilkan data acc kkl kelompok', 'f', 'acc~kkl~kklkelompok~result_kelompok', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (177, '#', '<span> Rekap Acc </span>', 't', 'acc', '<i class="fa fa-check-square-o"></i>', NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (184, 'acc/index_kkl_kelompok', 'KKL Kelompok', 't', 'acc~kkl~kklkelompok', '', NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (187, 'rekap', '<span> Rekap Dosen Bimbingan </span>', 't', 'rekapdosen', '<i class="fa fa-money"></i>', NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (190, 'chart/result', 'chart result', 'f', 'chart~result', NULL, NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (188, 'rekap/result', 'menampilkan data jumlah mhs bimbingan', 'f', 'rekapdosen~result', '', NULL);
INSERT INTO "public"."functions" ("id", "name", "desc", "menu", "kode", "icon", "no_urut") VALUES (189, 'chart', '<span> Chart </span>', 't', 'chart', '<i class="fa fa-pie-chart"></i>', NULL);
COMMIT;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS "public"."groups";
CREATE TABLE "public"."groups" (
  "id" int2 NOT NULL DEFAULT nextval('groups_id_seq'::regclass),
  "name" varchar(100) COLLATE "pg_catalog"."default",
  "desc" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."groups" OWNER TO "daesuke";

-- ----------------------------
-- Records of groups
-- ----------------------------
BEGIN;
INSERT INTO "public"."groups" ("id", "name", "desc") VALUES (2, 'Kepala Prodi', 'Kepala Prodi');
INSERT INTO "public"."groups" ("id", "name", "desc") VALUES (4, 'Dosen', 'Dosen');
INSERT INTO "public"."groups" ("id", "name", "desc") VALUES (5, 'Mahasiswa', 'Mahasiswa');
INSERT INTO "public"."groups" ("id", "name", "desc") VALUES (1, 'Admin', 'Mengatur Perilaku Pengguna');
INSERT INTO "public"."groups" ("id", "name", "desc") VALUES (3, 'Wakil Kepala Akademik', 'Pengecekan syarat administrasi');
COMMIT;

-- ----------------------------
-- Table structure for kelompok
-- ----------------------------
DROP TABLE IF EXISTS "public"."kelompok";
CREATE TABLE "public"."kelompok" (
  "id" int2 NOT NULL DEFAULT nextval('kelompok_id_seq'::regclass),
  "nama" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."kelompok" OWNER TO "daesuke";

-- ----------------------------
-- Records of kelompok
-- ----------------------------
BEGIN;
INSERT INTO "public"."kelompok" ("id", "nama") VALUES (2, 'Kelompok 1');
INSERT INTO "public"."kelompok" ("id", "nama") VALUES (3, 'Kelompok 2');
COMMIT;

-- ----------------------------
-- Table structure for kelompok_kkl
-- ----------------------------
DROP TABLE IF EXISTS "public"."kelompok_kkl";
CREATE TABLE "public"."kelompok_kkl" (
  "id" int2 NOT NULL DEFAULT nextval('kelompok_kkl_id_seq'::regclass),
  "id_kelompok" int2,
  "tahun" int4,
  "semester" int2,
  "id_dosen" int2,
  "no_sk" varchar(255) COLLATE "pg_catalog"."default",
  "tgl_awal" date,
  "tgl_akhir" date,
  "approv_dosen" bool,
  "time_approv_dosen" timestamp(6)
)
;
ALTER TABLE "public"."kelompok_kkl" OWNER TO "daesuke";

-- ----------------------------
-- Records of kelompok_kkl
-- ----------------------------
BEGIN;
INSERT INTO "public"."kelompok_kkl" ("id", "id_kelompok", "tahun", "semester", "id_dosen", "no_sk", "tgl_awal", "tgl_akhir", "approv_dosen", "time_approv_dosen") VALUES (11, 2, 2022, 1, 1, '1', '2022-11-21', '2022-11-21', 't', '2022-11-21 17:46:22.59089');
COMMIT;

-- ----------------------------
-- Table structure for kelompok_mhs
-- ----------------------------
DROP TABLE IF EXISTS "public"."kelompok_mhs";
CREATE TABLE "public"."kelompok_mhs" (
  "id" int2 NOT NULL DEFAULT nextval('kelompok_mhs_id_seq'::regclass),
  "nim" varchar(255) COLLATE "pg_catalog"."default",
  "id_kkl" int2,
  "id_kelompok_kkl" int2,
  "ketua" bool
)
;
ALTER TABLE "public"."kelompok_mhs" OWNER TO "daesuke";

-- ----------------------------
-- Records of kelompok_mhs
-- ----------------------------
BEGIN;
INSERT INTO "public"."kelompok_mhs" ("id", "nim", "id_kkl", "id_kelompok_kkl", "ketua") VALUES (24, '12201768', 14, 11, NULL);
INSERT INTO "public"."kelompok_mhs" ("id", "nim", "id_kkl", "id_kelompok_kkl", "ketua") VALUES (25, '12201767', 13, 11, 't');
COMMIT;

-- ----------------------------
-- Table structure for kerja_praktek
-- ----------------------------
DROP TABLE IF EXISTS "public"."kerja_praktek";
CREATE TABLE "public"."kerja_praktek" (
  "id" int2 NOT NULL DEFAULT nextval('kerja_praktek_id_seq'::regclass),
  "nim" varchar(20) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "judul" varchar(255) COLLATE "pg_catalog"."default",
  "lokasi" varchar(255) COLLATE "pg_catalog"."default",
  "alamat_kp" varchar(255) COLLATE "pg_catalog"."default",
  "alamat_dihub" varchar(255) COLLATE "pg_catalog"."default",
  "tahun" int4,
  "semester" int2,
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "approv_dosen" bool,
  "approv_kaprodi" bool,
  "telpon" int8,
  "status_pendaftar" varchar(255) COLLATE "pg_catalog"."default",
  "time_approv_dosen" timestamp(6),
  "flag_open" bool DEFAULT false
)
;
ALTER TABLE "public"."kerja_praktek" OWNER TO "daesuke";

-- ----------------------------
-- Records of kerja_praktek
-- ----------------------------
BEGIN;
INSERT INTO "public"."kerja_praktek" ("id", "nim", "nama", "judul", "lokasi", "alamat_kp", "alamat_dihub", "tahun", "semester", "filename", "image", "approv_dosen", "approv_kaprodi", "telpon", "status_pendaftar", "time_approv_dosen", "flag_open") VALUES (34, '12201768', 'Jojo', 'Jojo', 'jojo', 'jojo', 'jojo', 2022, 1, '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_222.pdf', 'files/kerjapraktek/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_222.pdf', NULL, 't', 12345678901234, '1', NULL, 't');
INSERT INTO "public"."kerja_praktek" ("id", "nim", "nama", "judul", "lokasi", "alamat_kp", "alamat_dihub", "tahun", "semester", "filename", "image", "approv_dosen", "approv_kaprodi", "telpon", "status_pendaftar", "time_approv_dosen", "flag_open") VALUES (33, '12201767', 'Andhika', 'andhika', 'andhika', 'andhika', 'andhika', 2022, 1, '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_27.pdf', 'files/kerjapraktek/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_27.pdf', NULL, NULL, 12345678901234, '1', NULL, 'f');
INSERT INTO "public"."kerja_praktek" ("id", "nim", "nama", "judul", "lokasi", "alamat_kp", "alamat_dihub", "tahun", "semester", "filename", "image", "approv_dosen", "approv_kaprodi", "telpon", "status_pendaftar", "time_approv_dosen", "flag_open") VALUES (32, '12201766', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 2022, 1, '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_26.pdf', 'files/kerjapraktek/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_26.pdf', 't', 't', 12345678901234, '2', '2022-11-27 23:17:18.673062', 't');
COMMIT;

-- ----------------------------
-- Table structure for kkl
-- ----------------------------
DROP TABLE IF EXISTS "public"."kkl";
CREATE TABLE "public"."kkl" (
  "id" int4 NOT NULL DEFAULT nextval('kkl_id_seq'::regclass),
  "nim" varchar(255) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "tahun" int4,
  "semester" int2,
  "kelas" varchar(10) COLLATE "pg_catalog"."default",
  "kategori" varchar(1) COLLATE "pg_catalog"."default",
  "kemampuan" varchar(255) COLLATE "pg_catalog"."default",
  "filename" varchar(255) COLLATE "pg_catalog"."default",
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "approv_wakademik" bool,
  "judul" varchar(255) COLLATE "pg_catalog"."default",
  "lokasi" varchar(255) COLLATE "pg_catalog"."default",
  "alamat_kkl" varchar(255) COLLATE "pg_catalog"."default",
  "alamat_dihub" varchar(255) COLLATE "pg_catalog"."default",
  "telpon" int8
)
;
ALTER TABLE "public"."kkl" OWNER TO "daesuke";

-- ----------------------------
-- Records of kkl
-- ----------------------------
BEGIN;
INSERT INTO "public"."kkl" ("id", "nim", "nama", "tahun", "semester", "kelas", "kategori", "kemampuan", "filename", "image", "approv_wakademik", "judul", "lokasi", "alamat_kkl", "alamat_dihub", "telpon") VALUES (12, '12201766', 'Agus Kresnanto', 2022, 1, 'malam', 'i', 'Agus Kresnanto', '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_21.pdf', 'files/kkl/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_21.pdf', 't', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 'Agus Kresnanto', 12345678901234);
INSERT INTO "public"."kkl" ("id", "nim", "nama", "tahun", "semester", "kelas", "kategori", "kemampuan", "filename", "image", "approv_wakademik", "judul", "lokasi", "alamat_kkl", "alamat_dihub", "telpon") VALUES (14, '12201768', 'Jojo', 2022, 1, 'malam', 'k', 'Jojo', '05__SK_Dosen-_CPNS.pdf', 'files/kkl/05__SK_Dosen-_CPNS.pdf', 't', 'Jojo', 'Jojo', 'Jojo', 'Jojo', 12345678901234);
INSERT INTO "public"."kkl" ("id", "nim", "nama", "tahun", "semester", "kelas", "kategori", "kemampuan", "filename", "image", "approv_wakademik", "judul", "lokasi", "alamat_kkl", "alamat_dihub", "telpon") VALUES (13, '12201767', 'Andhika', 2022, 1, 'malam', 'k', 'andhika', '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_23.pdf', 'files/kkl/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_23.pdf', 't', 'andhika', 'andhika', 'andhika', 'andhika', 12345678901234);
COMMIT;

-- ----------------------------
-- Table structure for komentar_bimbingan_kelompok
-- ----------------------------
DROP TABLE IF EXISTS "public"."komentar_bimbingan_kelompok";
CREATE TABLE "public"."komentar_bimbingan_kelompok" (
  "id" int2 NOT NULL DEFAULT nextval('komentar_bimbingan_kelompok_id_seq'::regclass),
  "id_bimbingan_kkl_kelompok" int4,
  "komentar" varchar(255) COLLATE "pg_catalog"."default",
  "id_user" int2,
  "date" timestamp(6) DEFAULT now()
)
;
ALTER TABLE "public"."komentar_bimbingan_kelompok" OWNER TO "daesuke";

-- ----------------------------
-- Records of komentar_bimbingan_kelompok
-- ----------------------------
BEGIN;
INSERT INTO "public"."komentar_bimbingan_kelompok" ("id", "id_bimbingan_kkl_kelompok", "komentar", "id_user", "date") VALUES (5, 17, 'balas', 6, '2022-11-21 17:32:14.521128');
INSERT INTO "public"."komentar_bimbingan_kelompok" ("id", "id_bimbingan_kkl_kelompok", "komentar", "id_user", "date") VALUES (6, 21, 'balas 2', 6, '2022-11-21 17:34:22.618181');
COMMIT;

-- ----------------------------
-- Table structure for konversi_nilai
-- ----------------------------
DROP TABLE IF EXISTS "public"."konversi_nilai";
CREATE TABLE "public"."konversi_nilai" (
  "id" int4 NOT NULL DEFAULT nextval('konversi_nilai_id_seq'::regclass),
  "kode_huruf" varchar(2) COLLATE "pg_catalog"."default",
  "bobot" float8
)
;
ALTER TABLE "public"."konversi_nilai" OWNER TO "daesuke";

-- ----------------------------
-- Records of konversi_nilai
-- ----------------------------
BEGIN;
INSERT INTO "public"."konversi_nilai" ("id", "kode_huruf", "bobot") VALUES (1, 'A', 4);
INSERT INTO "public"."konversi_nilai" ("id", "kode_huruf", "bobot") VALUES (2, 'B', 3);
INSERT INTO "public"."konversi_nilai" ("id", "kode_huruf", "bobot") VALUES (3, 'C', 2);
INSERT INTO "public"."konversi_nilai" ("id", "kode_huruf", "bobot") VALUES (4, 'D', 1);
COMMIT;

-- ----------------------------
-- Table structure for krs
-- ----------------------------
DROP TABLE IF EXISTS "public"."krs";
CREATE TABLE "public"."krs" (
  "id" int4 NOT NULL DEFAULT nextval('krs_id_seq'::regclass),
  "id_mhs" int4,
  "tahun" int4,
  "semester" int2
)
;
ALTER TABLE "public"."krs" OWNER TO "daesuke";

-- ----------------------------
-- Records of krs
-- ----------------------------
BEGIN;
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (1, 1, 2021, 2);
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (2, 1, 2022, 1);
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (3, 2, 2021, 2);
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (4, 2, 2022, 1);
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (5, 3, 2021, 2);
INSERT INTO "public"."krs" ("id", "id_mhs", "tahun", "semester") VALUES (6, 3, 2022, 1);
COMMIT;

-- ----------------------------
-- Table structure for mhs
-- ----------------------------
DROP TABLE IF EXISTS "public"."mhs";
CREATE TABLE "public"."mhs" (
  "id" int2 NOT NULL DEFAULT nextval('mhs_id_seq'::regclass),
  "nim" varchar(10) COLLATE "pg_catalog"."default" NOT NULL,
  "namamhs" varchar(255) COLLATE "pg_catalog"."default",
  "status" varchar(1) COLLATE "pg_catalog"."default",
  "kdpst" int2
)
;
ALTER TABLE "public"."mhs" OWNER TO "daesuke";

-- ----------------------------
-- Records of mhs
-- ----------------------------
BEGIN;
INSERT INTO "public"."mhs" ("id", "nim", "namamhs", "status", "kdpst") VALUES (1, '12201766', 'Agus Kresnanto', '1', 1);
INSERT INTO "public"."mhs" ("id", "nim", "namamhs", "status", "kdpst") VALUES (3, '12201768', 'Jojo', '1', 1);
INSERT INTO "public"."mhs" ("id", "nim", "namamhs", "status", "kdpst") VALUES (2, '12201767', 'Andhika', '1', 1);
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_kkl
-- ----------------------------
DROP TABLE IF EXISTS "public"."pembimbing_kkl";
CREATE TABLE "public"."pembimbing_kkl" (
  "id" int4 NOT NULL DEFAULT nextval('pembimbing_kkl_id_seq'::regclass),
  "id_kkl" int2,
  "id_dosen" int4,
  "tgl_awal" date,
  "tgl_akhir" date,
  "no_sk" varchar(255) COLLATE "pg_catalog"."default",
  "approv_dosen" bool,
  "time_approv_dosen" timestamp(6),
  "flag_open" bool DEFAULT false
)
;
ALTER TABLE "public"."pembimbing_kkl" OWNER TO "daesuke";

-- ----------------------------
-- Records of pembimbing_kkl
-- ----------------------------
BEGIN;
INSERT INTO "public"."pembimbing_kkl" ("id", "id_kkl", "id_dosen", "tgl_awal", "tgl_akhir", "no_sk", "approv_dosen", "time_approv_dosen", "flag_open") VALUES (7, 12, 1, '2022-11-21', '2022-11-29', '1', NULL, '2022-11-21 16:54:30.990714', 'f');
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_kp
-- ----------------------------
DROP TABLE IF EXISTS "public"."pembimbing_kp";
CREATE TABLE "public"."pembimbing_kp" (
  "id" int2 NOT NULL DEFAULT nextval('pembimbing_kp_id_seq'::regclass),
  "id_kp" int2,
  "id_dosen1" int4,
  "status1" bool DEFAULT false,
  "id_dosen2" int2,
  "status2" bool DEFAULT false
)
;
ALTER TABLE "public"."pembimbing_kp" OWNER TO "daesuke";

-- ----------------------------
-- Records of pembimbing_kp
-- ----------------------------
BEGIN;
INSERT INTO "public"."pembimbing_kp" ("id", "id_kp", "id_dosen1", "status1", "id_dosen2", "status2") VALUES (16, 33, 1, 'f', 2, 'f');
INSERT INTO "public"."pembimbing_kp" ("id", "id_kp", "id_dosen1", "status1", "id_dosen2", "status2") VALUES (17, 34, 1, 't', 2, 'f');
INSERT INTO "public"."pembimbing_kp" ("id", "id_kp", "id_dosen1", "status1", "id_dosen2", "status2") VALUES (15, 32, 1, 't', 2, 'f');
COMMIT;

-- ----------------------------
-- Table structure for pembimbing_skripsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."pembimbing_skripsi";
CREATE TABLE "public"."pembimbing_skripsi" (
  "id" int4 NOT NULL DEFAULT nextval('pembimbing_skripsi_id_seq'::regclass),
  "id_skripsi" int8,
  "id_dosen1" int4,
  "status1" bool,
  "id_dosen2" int4,
  "status2" bool
)
;
ALTER TABLE "public"."pembimbing_skripsi" OWNER TO "daesuke";

-- ----------------------------
-- Records of pembimbing_skripsi
-- ----------------------------
BEGIN;
INSERT INTO "public"."pembimbing_skripsi" ("id", "id_skripsi", "id_dosen1", "status1", "id_dosen2", "status2") VALUES (6, 7, 1, 't', 2, 'f');
COMMIT;

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS "public"."privileges";
CREATE TABLE "public"."privileges" (
  "id" int4 NOT NULL DEFAULT nextval('privileges_id_seq'::regclass),
  "group_id" int8,
  "function_id" int8
)
;
ALTER TABLE "public"."privileges" OWNER TO "daesuke";

-- ----------------------------
-- Records of privileges
-- ----------------------------
BEGIN;
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2128, 1, 118);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2129, 1, 162);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2130, 1, 163);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2131, 1, 164);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2132, 1, 119);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2133, 1, 120);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2134, 1, 126);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2135, 1, 129);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2136, 1, 125);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2137, 1, 122);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2138, 1, 123);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2139, 1, 128);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2140, 1, 135);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2141, 1, 136);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2142, 1, 142);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2143, 1, 145);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2144, 1, 141);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2145, 1, 138);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2146, 1, 139);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2147, 1, 144);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2148, 1, 177);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2149, 1, 186);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2150, 1, 182);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2151, 1, 183);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2152, 1, 184);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2153, 1, 185);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2154, 1, 178);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2155, 1, 179);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2156, 1, 180);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2157, 1, 181);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2158, 1, 13);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2159, 1, 19);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2160, 1, 17);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2161, 1, 18);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2162, 1, 16);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2163, 1, 8);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2164, 1, 5);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2165, 1, 4);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2166, 1, 2);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2167, 1, 3);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2168, 1, 116);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2169, 1, 117);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2170, 1, 130);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2171, 1, 146);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2172, 1, 151);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2173, 1, 154);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2174, 1, 152);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2175, 1, 153);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2176, 1, 147);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2177, 1, 150);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2178, 1, 148);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2179, 1, 149);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2180, 1, 168);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2181, 1, 175);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2182, 1, 176);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2183, 1, 171);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2184, 1, 172);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2185, 1, 173);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2186, 1, 174);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2187, 1, 189);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2188, 1, 190);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2189, 1, 115);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2190, 1, 187);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2191, 1, 188);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2192, 1, 12);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2193, 1, 20);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2194, 1, 1);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2195, 4, 168);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2196, 4, 175);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2197, 4, 176);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2198, 4, 171);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2199, 4, 172);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2200, 4, 173);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2201, 4, 174);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2202, 4, 177);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2203, 4, 186);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2204, 4, 182);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2205, 4, 183);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2206, 4, 184);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2207, 4, 185);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2208, 4, 178);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2209, 4, 179);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2210, 4, 180);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2211, 4, 181);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2212, 4, 118);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2213, 4, 162);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2214, 4, 163);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2215, 4, 165);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2216, 4, 166);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2217, 4, 164);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2218, 4, 119);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2219, 4, 124);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2220, 4, 120);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2221, 4, 126);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2222, 4, 129);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2223, 4, 125);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2224, 4, 122);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2225, 4, 123);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2226, 4, 121);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2227, 4, 135);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2228, 4, 140);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2229, 4, 136);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2230, 4, 142);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2231, 4, 141);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2232, 4, 138);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2233, 4, 139);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2234, 4, 137);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2235, 4, 115);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1946, 3, 177);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1947, 3, 186);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1821, 2, 116);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1822, 2, 117);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1823, 2, 130);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1824, 2, 133);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1825, 2, 118);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1826, 2, 119);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1827, 2, 120);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1828, 2, 126);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1829, 2, 129);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1830, 2, 125);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1831, 2, 122);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1832, 2, 123);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1833, 2, 128);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1834, 2, 135);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1835, 2, 136);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1948, 3, 182);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1949, 3, 183);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1950, 3, 184);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1951, 3, 185);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1836, 2, 142);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1837, 2, 145);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1838, 2, 141);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1839, 2, 138);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1952, 3, 118);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1953, 3, 162);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1954, 3, 163);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1840, 2, 139);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1841, 2, 144);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1842, 2, 168);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1843, 2, 175);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1844, 2, 176);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1845, 2, 171);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1846, 2, 172);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1847, 2, 173);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1848, 2, 174);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1849, 2, 177);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1850, 2, 186);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1851, 2, 182);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1852, 2, 183);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1853, 2, 184);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1854, 2, 185);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1855, 2, 178);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1856, 2, 179);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1857, 2, 180);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1858, 2, 181);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1859, 2, 189);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1860, 2, 190);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1861, 2, 115);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1862, 2, 187);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1863, 2, 188);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1955, 3, 164);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1956, 3, 167);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1957, 3, 116);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1958, 3, 155);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1959, 3, 160);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1960, 3, 159);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1961, 3, 161);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1962, 3, 115);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1995, 5, 116);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1996, 5, 117);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1997, 5, 155);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1998, 5, 156);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (1999, 5, 158);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2000, 5, 157);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2001, 5, 130);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2002, 5, 131);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2003, 5, 134);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2004, 5, 132);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2005, 5, 118);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2006, 5, 162);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2007, 5, 163);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2008, 5, 165);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2009, 5, 166);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2010, 5, 164);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2011, 5, 119);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2012, 5, 120);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2013, 5, 126);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2014, 5, 125);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2015, 5, 122);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2016, 5, 123);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2017, 5, 121);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2018, 5, 127);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2019, 5, 135);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2020, 5, 136);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2021, 5, 142);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2022, 5, 141);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2023, 5, 138);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2024, 5, 139);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2025, 5, 137);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2026, 5, 143);
INSERT INTO "public"."privileges" ("id", "group_id", "function_id") VALUES (2027, 5, 115);
COMMIT;

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS "public"."prodi";
CREATE TABLE "public"."prodi" (
  "id" int2 NOT NULL DEFAULT nextval('prodi_id_seq'::regclass),
  "nama" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."prodi" OWNER TO "daesuke";

-- ----------------------------
-- Records of prodi
-- ----------------------------
BEGIN;
INSERT INTO "public"."prodi" ("id", "nama") VALUES (1, 'Informatika');
INSERT INTO "public"."prodi" ("id", "nama") VALUES (2, 'Sistem Informatika');
COMMIT;

-- ----------------------------
-- Table structure for sk_kerjapraktek
-- ----------------------------
DROP TABLE IF EXISTS "public"."sk_kerjapraktek";
CREATE TABLE "public"."sk_kerjapraktek" (
  "id" int4 NOT NULL DEFAULT nextval('sk_kerjapraktek_id_seq'::regclass),
  "id_kp" int8,
  "tgl_awal" date,
  "tgl_akhir" date,
  "no_sk" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."sk_kerjapraktek" OWNER TO "daesuke";

-- ----------------------------
-- Records of sk_kerjapraktek
-- ----------------------------
BEGIN;
INSERT INTO "public"."sk_kerjapraktek" ("id", "id_kp", "tgl_awal", "tgl_akhir", "no_sk") VALUES (18, 32, '2022-11-17', '2022-11-29', '1');
INSERT INTO "public"."sk_kerjapraktek" ("id", "id_kp", "tgl_awal", "tgl_akhir", "no_sk") VALUES (19, 34, '2022-11-22', '2022-12-02', '2');
INSERT INTO "public"."sk_kerjapraktek" ("id", "id_kp", "tgl_awal", "tgl_akhir", "no_sk") VALUES (20, 32, '2022-11-22', '2022-12-02', '2');
COMMIT;

-- ----------------------------
-- Table structure for sk_skripsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."sk_skripsi";
CREATE TABLE "public"."sk_skripsi" (
  "id" int4 NOT NULL DEFAULT nextval('sk_skripsi_id_seq'::regclass),
  "id_skripsi" int8,
  "tgl_awal" date,
  "tgl_akhir" date,
  "no_sk" varchar(10) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."sk_skripsi" OWNER TO "daesuke";

-- ----------------------------
-- Records of sk_skripsi
-- ----------------------------
BEGIN;
INSERT INTO "public"."sk_skripsi" ("id", "id_skripsi", "tgl_awal", "tgl_akhir", "no_sk") VALUES (6, 7, '2022-11-21', '2022-11-28', '1');
COMMIT;

-- ----------------------------
-- Table structure for skripsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."skripsi";
CREATE TABLE "public"."skripsi" (
  "id" int4 NOT NULL DEFAULT nextval('skripsi_id_seq'::regclass),
  "nim" varchar(20) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "judul" varchar(255) COLLATE "pg_catalog"."default",
  "tahun" int2,
  "semester" int2,
  "filename_syarat" varchar(255) COLLATE "pg_catalog"."default",
  "image_syarat" varchar(255) COLLATE "pg_catalog"."default",
  "filename_proposal" varchar(255) COLLATE "pg_catalog"."default",
  "image_proposal" varchar(255) COLLATE "pg_catalog"."default",
  "approv_kaprodi" bool,
  "approv_dosen" bool,
  "status_pendaftar" varchar(1) COLLATE "pg_catalog"."default",
  "telpon" int8,
  "time_approv_dosen" timestamp(6),
  "flag_open" bool DEFAULT false
)
;
ALTER TABLE "public"."skripsi" OWNER TO "daesuke";

-- ----------------------------
-- Records of skripsi
-- ----------------------------
BEGIN;
INSERT INTO "public"."skripsi" ("id", "nim", "nama", "judul", "tahun", "semester", "filename_syarat", "image_syarat", "filename_proposal", "image_proposal", "approv_kaprodi", "approv_dosen", "status_pendaftar", "telpon", "time_approv_dosen", "flag_open") VALUES (7, '12201766', 'Agus Kresnanto', 'Agus Kresnanto', 2022, 1, '2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_24.pdf', 'files/skripsi/2-PENGANTAR_TAMBAH_BEBAN_SKS_DOSEN_2021_GASAL_RPL_24.pdf', '05__SK_Dosen-_CPNS3.pdf', 'files/skripsi/05__SK_Dosen-_CPNS3.pdf', 't', 't', '1', 12345678901234, '2022-11-27 23:11:47.852132', 'f');
COMMIT;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS "public"."status";
CREATE TABLE "public"."status" (
  "id" int4 NOT NULL DEFAULT nextval('status_id_seq'::regclass),
  "status" varchar(50) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "public"."status" OWNER TO "daesuke";

-- ----------------------------
-- Records of status
-- ----------------------------
BEGIN;
INSERT INTO "public"."status" ("id", "status") VALUES (1, 'Pengajuan');
INSERT INTO "public"."status" ("id", "status") VALUES (4, 'Disetujui');
INSERT INTO "public"."status" ("id", "status") VALUES (2, 'Administrasi');
INSERT INTO "public"."status" ("id", "status") VALUES (3, 'Persetujuan Dosen Pembimbing');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "username" varchar(100) COLLATE "pg_catalog"."default",
  "nama_lengkap" varchar(255) COLLATE "pg_catalog"."default" DEFAULT 1,
  "password" varchar(100) COLLATE "pg_catalog"."default",
  "id_prodi" int4,
  "is_active" bool DEFAULT false,
  "waktu_login" timestamp(6)
)
;
ALTER TABLE "public"."users" OWNER TO "daesuke";

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (2, 'admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2022-12-06 22:01:07');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (5, '12201766', 'Agus Kresnanto', 'e1b20a09c73c75df671e8d96d2b8408b56cbe82b', NULL, 't', '2022-12-06 22:22:22');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (6, '201230047', 'Andri Syafrianto, S.Kom, M.Cs.', 'ff712bd71e46fb1ea0bc478de61283b094094d27', NULL, 't', '2022-12-06 22:49:43');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (7, 'waka', 'wakil kepala akademik', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2022-11-21 18:28:17');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (8, '12201767', 'Andhika', '690d4e585487baf1712cf7278b846a9bb0accb7d', NULL, 't', '2022-11-22 08:29:41');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (3, 'kaprodi', 'Kepala Program Studi', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, 't', '2022-11-22 16:58:04');
INSERT INTO "public"."users" ("id", "username", "nama_lengkap", "password", "id_prodi", "is_active", "waktu_login") VALUES (9, '12201768', 'Jojo', '15f2d3a7dab60b2f808a20c96e092ebf08e01622', NULL, 't', '2022-11-29 16:40:15');
COMMIT;

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS "public"."users_groups";
CREATE TABLE "public"."users_groups" (
  "id" int2 NOT NULL DEFAULT nextval('user_groups_id_seq'::regclass),
  "user_id" int4,
  "group_id" int4
)
;
ALTER TABLE "public"."users_groups" OWNER TO "daesuke";

-- ----------------------------
-- Records of users_groups
-- ----------------------------
BEGIN;
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (2, 2, 1);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (4, 4, 1);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (5, 5, 5);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (6, 6, 4);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (7, 7, 3);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (8, 8, 5);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (9, 9, 5);
INSERT INTO "public"."users_groups" ("id", "user_id", "group_id") VALUES (3, 3, 2);
COMMIT;

-- ----------------------------
-- View structure for v_bimbingan_dosen_kp
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_bimbingan_dosen_kp";
CREATE VIEW "public"."v_bimbingan_dosen_kp" AS  SELECT kp.id AS id_kp,
    kp.nim,
    kp.nama,
    kp.judul,
    kp.lokasi,
    kp.alamat_kp,
    kp.alamat_dihub,
    kp.image,
    kp.telpon,
    kp.tahun,
    kp.semester,
    kp.approv_kaprodi,
    kp.approv_dosen,
    kp.status_pendaftar,
    kp.flag_open,
    concat((to_char(sk.tgl_awal::timestamp with time zone, 'DD-MM-YYYY'::text) || ' s.d '::text) || to_char(sk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text)) AS tanggal,
    to_char(sk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text) AS "end",
        CASE
            WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
            WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
            ELSE 'dosen belum disetujui'::text
        END AS dosen,
        CASE
            WHEN pk.status1 = true THEN d1.nodos
            WHEN pk.status2 = true THEN d2.nodos
            ELSE ''::character varying
        END AS npp_dosen,
    v_bimb.id_user
   FROM kerja_praktek kp
     LEFT JOIN pembimbing_kp pk ON pk.id_kp = kp.id
     LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
     LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
     LEFT JOIN ( SELECT max(sk_kerjapraktek.id) AS id_sk,
            sk_kerjapraktek.id_kp
           FROM sk_kerjapraktek
          GROUP BY sk_kerjapraktek.id_kp) skp ON skp.id_kp = kp.id
     LEFT JOIN sk_kerjapraktek sk ON sk.id = skp.id_sk
     LEFT JOIN ( SELECT bk.id_kp,
            bk.id_user
           FROM bimbingan_kp bk
             LEFT JOIN kerja_praktek kp_1 ON kp_1.id = bk.id_kp
          WHERE kp_1.approv_dosen IS NULL
          ORDER BY bk.id DESC
         LIMIT 1) v_bimb ON v_bimb.id_kp = kp.id
  WHERE kp.approv_kaprodi = true
  ORDER BY kp.id;
ALTER TABLE "public"."v_bimbingan_dosen_kp" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_bimbingan_dosen_kkl
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_bimbingan_dosen_kkl";
CREATE VIEW "public"."v_bimbingan_dosen_kkl" AS  SELECT kkl.id AS id_kkl,
    kkl.nim,
    kkl.nama,
    kkl.judul,
    kkl.lokasi,
    kkl.alamat_kkl,
    kkl.alamat_dihub,
    kkl.image,
    kkl.telpon,
    kkl.tahun,
    kkl.semester,
    kkl.approv_wakademik,
    pk.approv_dosen,
    concat((pk.tgl_awal || ' s.d '::text) || pk.tgl_akhir) AS tanggal,
    pk.tgl_akhir AS "end",
    pk.no_sk,
    pk.flag_open,
    d.nodos AS npp_dosen,
        CASE
            WHEN pk.id_dosen IS NOT NULL THEN concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text)
            ELSE 'dosen belum diset'::text
        END AS dosen,
    v_bimb.id_user
   FROM kkl
     LEFT JOIN pembimbing_kkl pk ON pk.id_kkl = kkl.id
     LEFT JOIN dosen d ON d.id = pk.id_dosen
     LEFT JOIN ( SELECT bs.id_kkl,
            bs.id_user
           FROM bimbingan_kkl_individu bs
          ORDER BY bs.id DESC
         LIMIT 1) v_bimb ON v_bimb.id_kkl = kkl.id
  WHERE kkl.approv_wakademik = true AND kkl.kategori::text = 'i'::text
  ORDER BY kkl.id;
ALTER TABLE "public"."v_bimbingan_dosen_kkl" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_kp
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_rekap_count_jml_bimbingan_kp";
CREATE VIEW "public"."v_rekap_count_jml_bimbingan_kp" AS  SELECT
        CASE
            WHEN v_bimb.jml_bimbingan IS NULL THEN '0'::bigint
            ELSE v_bimb.jml_bimbingan
        END AS jml_bimbingan,
    s.nim,
    s.nama,
    s.judul,
    s.tahun,
    s.semester,
        CASE
            WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
            WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
            ELSE 'dosen belum disetujui'::text
        END AS dosen,
        CASE
            WHEN pk.status1 = true THEN d1.nodos
            WHEN pk.status2 = true THEN d2.nodos
            ELSE ''::character varying
        END AS npp_dosen
   FROM kerja_praktek s
     LEFT JOIN pembimbing_kp pk ON pk.id_kp = s.id
     LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
     LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
     LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,
            bk.id_kp
           FROM bimbingan_kp bk
             LEFT JOIN users u ON u.id = bk.id_user
             LEFT JOIN users_groups ug ON ug.user_id = u.id
          WHERE ug.group_id = 5
          GROUP BY bk.id_kp) v_bimb ON v_bimb.id_kp = s.id
  WHERE s.approv_dosen IS NULL;
ALTER TABLE "public"."v_rekap_count_jml_bimbingan_kp" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_bimbingan_mhs_kelompok_kkl
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_bimbingan_mhs_kelompok_kkl";
CREATE VIEW "public"."v_bimbingan_mhs_kelompok_kkl" AS  SELECT k.nama AS nm_kelompok,
    kkl.nim,
    kkl.nama,
    kkl.judul,
    kkl.lokasi,
    km.ketua,
    km.id_kelompok_kkl,
    kk.tahun,
    kk.semester,
    kk.approv_dosen,
    concat((to_char(kk.tgl_awal::timestamp with time zone, 'DD-MM-YYYY'::text) || ' s.d '::text) || to_char(kk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text)) AS tanggal,
    to_char(kk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text) AS "end",
    d.nodos AS npp_dosen,
        CASE
            WHEN kk.id_dosen IS NOT NULL THEN concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text)
            ELSE 'dosen belum diset'::text
        END AS dosen
   FROM kkl
     LEFT JOIN kelompok_mhs km ON km.id_kkl = kkl.id
     LEFT JOIN kelompok_kkl kk ON kk.id = km.id_kelompok_kkl
     LEFT JOIN kelompok k ON k.id = kk.id_kelompok
     LEFT JOIN dosen d ON d.id = kk.id_dosen
  WHERE kkl.kategori::text = 'k'::text
  ORDER BY k.id, kkl.nim;
ALTER TABLE "public"."v_bimbingan_mhs_kelompok_kkl" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_skripsi
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_rekap_count_jml_bimbingan_skripsi";
CREATE VIEW "public"."v_rekap_count_jml_bimbingan_skripsi" AS  SELECT
        CASE
            WHEN v_bimb.jml_bimbingan IS NULL THEN '0'::bigint
            ELSE v_bimb.jml_bimbingan
        END AS jml_bimbingan,
    s.nim,
    s.nama,
    s.judul,
    s.tahun,
    s.semester,
        CASE
            WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
            WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
            ELSE 'dosen belum disetujui'::text
        END AS dosen,
        CASE
            WHEN pk.status1 = true THEN d1.nodos
            WHEN pk.status2 = true THEN d2.nodos
            ELSE ''::character varying
        END AS npp_dosen
   FROM skripsi s
     LEFT JOIN pembimbing_skripsi pk ON pk.id_skripsi = s.id
     LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
     LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
     LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,
            bk.id_skripsi
           FROM bimbingan_skripsi bk
             LEFT JOIN users u ON u.id = bk.id_user
             LEFT JOIN users_groups ug ON ug.user_id = u.id
          WHERE ug.group_id = 5
          GROUP BY bk.id_skripsi) v_bimb ON v_bimb.id_skripsi = s.id
  WHERE s.approv_dosen IS NULL;
ALTER TABLE "public"."v_rekap_count_jml_bimbingan_skripsi" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_rekap_count_jml_bimbingan_kkl_individu
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_rekap_count_jml_bimbingan_kkl_individu";
CREATE VIEW "public"."v_rekap_count_jml_bimbingan_kkl_individu" AS  SELECT
        CASE
            WHEN v_bimb.jml_bimbingan IS NULL THEN '0'::bigint
            ELSE v_bimb.jml_bimbingan
        END AS jml_bimbingan,
    kkl.nim,
    kkl.nama,
    kkl.judul,
    kkl.lokasi,
    kkl.tahun,
    kkl.semester,
    pk.tgl_awal,
    date(pk.time_approv_dosen) AS tgl_approv,
    concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text) AS dosen,
    d.nodos AS npp_dosen,
    kkl.id AS id_kkl
   FROM kkl
     LEFT JOIN pembimbing_kkl pk ON pk.id_kkl = kkl.id
     LEFT JOIN dosen d ON d.id = pk.id_dosen
     LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,
            bk.id_kkl
           FROM bimbingan_kkl_individu bk
             LEFT JOIN users u ON u.id = bk.id_user
             LEFT JOIN users_groups ug ON ug.user_id = u.id
          WHERE ug.group_id = 5
          GROUP BY bk.id_kkl) v_bimb ON v_bimb.id_kkl = kkl.id
  WHERE pk.approv_dosen IS NULL AND kkl.kategori::text = 'i'::text
  ORDER BY kkl.tahun DESC, kkl.semester DESC, kkl.nim;
ALTER TABLE "public"."v_rekap_count_jml_bimbingan_kkl_individu" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_bimbingan_dosen_skripsi
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_bimbingan_dosen_skripsi";
CREATE VIEW "public"."v_bimbingan_dosen_skripsi" AS  SELECT s.id AS id_skripsi,
    s.nim,
    s.nama,
    s.judul,
    s.image_syarat,
    s.image_proposal,
    s.telpon,
    s.tahun,
    s.semester,
    s.approv_kaprodi,
    s.approv_dosen,
    s.status_pendaftar,
    s.flag_open,
    concat((to_char(sk.tgl_awal::timestamp with time zone, 'DD-MM-YYYY'::text) || ' s.d '::text) || to_char(sk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text)) AS tanggal,
    to_char(sk.tgl_akhir::timestamp with time zone, 'DD-MM-YYYY'::text) AS "end",
        CASE
            WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
            WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
            ELSE 'dosen belum disetujui'::text
        END AS dosen,
        CASE
            WHEN pk.status1 = true THEN d1.nodos
            WHEN pk.status2 = true THEN d2.nodos
            ELSE ''::character varying
        END AS npp_dosen,
    v_bimb.id_user
   FROM skripsi s
     LEFT JOIN pembimbing_skripsi pk ON pk.id_skripsi = s.id
     LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
     LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
     LEFT JOIN ( SELECT max(sk_skripsi.id) AS id_sk,
            sk_skripsi.id_skripsi
           FROM sk_skripsi
          GROUP BY sk_skripsi.id_skripsi) skp ON skp.id_skripsi = s.id
     LEFT JOIN sk_skripsi sk ON sk.id = skp.id_sk
     LEFT JOIN ( SELECT bs.id_skripsi,
            bs.id_user
           FROM bimbingan_skripsi bs
             LEFT JOIN skripsi s_1 ON s_1.id = bs.id_skripsi
          WHERE s_1.approv_dosen IS NULL
          ORDER BY bs.id DESC
         LIMIT 1) v_bimb ON v_bimb.id_skripsi = s.id
  WHERE s.approv_kaprodi = true
  ORDER BY s.id;
ALTER TABLE "public"."v_bimbingan_dosen_skripsi" OWNER TO "daesuke";

-- ----------------------------
-- View structure for v_bimbingan_dosen_kkl_kelompok
-- ----------------------------
DROP VIEW IF EXISTS "public"."v_bimbingan_dosen_kkl_kelompok";
CREATE VIEW "public"."v_bimbingan_dosen_kkl_kelompok" AS  SELECT kk.id AS id_kelompok_kkl,
    kk.tahun,
    kk.semester,
    k.nama AS nm_kelompok,
    d.nodos AS npp_dosen,
        CASE
            WHEN kk.id_dosen IS NOT NULL THEN concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text)
            ELSE 'dosen belum diset'::text
        END AS dosen,
    concat((kk.tgl_awal || ' s.d '::text) || kk.tgl_akhir) AS tanggal,
    ( SELECT count(*) AS jumlah
           FROM kelompok_mhs
          WHERE kelompok_mhs.id_kelompok_kkl = kk.id) AS peserta
   FROM kelompok_kkl kk
     LEFT JOIN kelompok k ON k.id = kk.id_kelompok
     LEFT JOIN dosen d ON d.id = kk.id_dosen;
ALTER TABLE "public"."v_bimbingan_dosen_kkl_kelompok" OWNER TO "daesuke";

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."bimbingan_kkl_id_seq"
OWNED BY "public"."bimbingan_kkl_individu"."id";
SELECT setval('"public"."bimbingan_kkl_id_seq"', 24, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."bimbingan_kp_id_seq"
OWNED BY "public"."bimbingan_kp"."id";
SELECT setval('"public"."bimbingan_kp_id_seq"', 51, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."bimbingan_skripsi_id_seq"
OWNED BY "public"."bimbingan_skripsi"."id";
SELECT setval('"public"."bimbingan_skripsi_id_seq"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."config_krs_id_seq"
OWNED BY "public"."config_krs"."id";
SELECT setval('"public"."config_krs_id_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."data_studi_id_seq"
OWNED BY "public"."data_studi"."id";
SELECT setval('"public"."data_studi_id_seq"', 121, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."dosen_id_seq"
OWNED BY "public"."dosen"."id";
SELECT setval('"public"."dosen_id_seq"', 21, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."functions_id_seq"
OWNED BY "public"."functions"."id";
SELECT setval('"public"."functions_id_seq"', 191, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."groups_id_seq"
OWNED BY "public"."groups"."id";
SELECT setval('"public"."groups_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."kelompok_id_seq"
OWNED BY "public"."kelompok"."id";
SELECT setval('"public"."kelompok_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."kelompok_kkl_id_seq"
OWNED BY "public"."kelompok_kkl"."id";
SELECT setval('"public"."kelompok_kkl_id_seq"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."kelompok_mhs_id_seq"
OWNED BY "public"."kelompok_mhs"."id";
SELECT setval('"public"."kelompok_mhs_id_seq"', 25, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."kerja_praktek_id_seq"
OWNED BY "public"."kerja_praktek"."id";
SELECT setval('"public"."kerja_praktek_id_seq"', 34, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."kkl_id_seq"
OWNED BY "public"."kkl"."id";
SELECT setval('"public"."kkl_id_seq"', 14, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."komentar_bimbingan_kelompok_id_seq"
OWNED BY "public"."komentar_bimbingan_kelompok"."id";
SELECT setval('"public"."komentar_bimbingan_kelompok_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."konversi_nilai_id_seq"
OWNED BY "public"."konversi_nilai"."id";
SELECT setval('"public"."konversi_nilai_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."krs_id_seq"
OWNED BY "public"."krs"."id";
SELECT setval('"public"."krs_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."mhs_id_seq"
OWNED BY "public"."mhs"."id";
SELECT setval('"public"."mhs_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."pembimbing_kkl_id_seq"
OWNED BY "public"."pembimbing_kkl"."id";
SELECT setval('"public"."pembimbing_kkl_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."pembimbing_kp_id_seq"
OWNED BY "public"."pembimbing_kp"."id";
SELECT setval('"public"."pembimbing_kp_id_seq"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."pembimbing_skripsi_id_seq"
OWNED BY "public"."pembimbing_skripsi"."id";
SELECT setval('"public"."pembimbing_skripsi_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."privileges_id_seq"
OWNED BY "public"."privileges"."id";
SELECT setval('"public"."privileges_id_seq"', 2235, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."prodi_id_seq"
OWNED BY "public"."prodi"."id";
SELECT setval('"public"."prodi_id_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."sk_kerjapraktek_id_seq"
OWNED BY "public"."sk_kerjapraktek"."id";
SELECT setval('"public"."sk_kerjapraktek_id_seq"', 20, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."sk_skripsi_id_seq"
OWNED BY "public"."sk_skripsi"."id";
SELECT setval('"public"."sk_skripsi_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."skripsi_id_seq"
OWNED BY "public"."skripsi"."id";
SELECT setval('"public"."skripsi_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."status_id_seq"
OWNED BY "public"."status"."id";
SELECT setval('"public"."status_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."user_groups_id_seq"
OWNED BY "public"."users_groups"."id";
SELECT setval('"public"."user_groups_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 9, true);

-- ----------------------------
-- Primary Key structure for table bimbingan_kkl_individu
-- ----------------------------
ALTER TABLE "public"."bimbingan_kkl_individu" ADD CONSTRAINT "bimbingan_kkl_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table bimbingan_kkl_kelompok
-- ----------------------------
ALTER TABLE "public"."bimbingan_kkl_kelompok" ADD CONSTRAINT "bimbingan_kkl_individu_copy1_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table bimbingan_kp
-- ----------------------------
ALTER TABLE "public"."bimbingan_kp" ADD CONSTRAINT "bimbingan_kp_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table bimbingan_skripsi
-- ----------------------------
ALTER TABLE "public"."bimbingan_skripsi" ADD CONSTRAINT "bimbingan_skripsi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table ci_sessions
-- ----------------------------
ALTER TABLE "public"."ci_sessions" ADD CONSTRAINT "ci_sessions_pkey1" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table config_krs
-- ----------------------------
ALTER TABLE "public"."config_krs" ADD CONSTRAINT "config_krs_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table dosen
-- ----------------------------
ALTER TABLE "public"."dosen" ADD CONSTRAINT "dosen_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table functions
-- ----------------------------
ALTER TABLE "public"."functions" ADD CONSTRAINT "functions_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table groups
-- ----------------------------
ALTER TABLE "public"."groups" ADD CONSTRAINT "groups_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kelompok
-- ----------------------------
ALTER TABLE "public"."kelompok" ADD CONSTRAINT "kelompok_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kelompok_kkl
-- ----------------------------
ALTER TABLE "public"."kelompok_kkl" ADD CONSTRAINT "kelompok_kkl_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kelompok_mhs
-- ----------------------------
ALTER TABLE "public"."kelompok_mhs" ADD CONSTRAINT "kelompok_mhs_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kerja_praktek
-- ----------------------------
ALTER TABLE "public"."kerja_praktek" ADD CONSTRAINT "kerja_praktek_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kkl
-- ----------------------------
ALTER TABLE "public"."kkl" ADD CONSTRAINT "kkl_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table komentar_bimbingan_kelompok
-- ----------------------------
ALTER TABLE "public"."komentar_bimbingan_kelompok" ADD CONSTRAINT "komentar_bimbingan_kelompok_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table konversi_nilai
-- ----------------------------
ALTER TABLE "public"."konversi_nilai" ADD CONSTRAINT "konversi_nilai_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table krs
-- ----------------------------
ALTER TABLE "public"."krs" ADD CONSTRAINT "krs_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table mhs
-- ----------------------------
ALTER TABLE "public"."mhs" ADD CONSTRAINT "mhs_pkey" PRIMARY KEY ("id", "nim");

-- ----------------------------
-- Primary Key structure for table pembimbing_kkl
-- ----------------------------
ALTER TABLE "public"."pembimbing_kkl" ADD CONSTRAINT "pembimbing_kkl_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pembimbing_kp
-- ----------------------------
ALTER TABLE "public"."pembimbing_kp" ADD CONSTRAINT "pembimbing_kp_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table pembimbing_skripsi
-- ----------------------------
ALTER TABLE "public"."pembimbing_skripsi" ADD CONSTRAINT "pembimbing_skripsi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table privileges
-- ----------------------------
ALTER TABLE "public"."privileges" ADD CONSTRAINT "privileges_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table prodi
-- ----------------------------
ALTER TABLE "public"."prodi" ADD CONSTRAINT "prodi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table sk_kerjapraktek
-- ----------------------------
ALTER TABLE "public"."sk_kerjapraktek" ADD CONSTRAINT "sk_kerjapraktek_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table sk_skripsi
-- ----------------------------
ALTER TABLE "public"."sk_skripsi" ADD CONSTRAINT "sk_skripsi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table skripsi
-- ----------------------------
ALTER TABLE "public"."skripsi" ADD CONSTRAINT "skripsi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table status
-- ----------------------------
ALTER TABLE "public"."status" ADD CONSTRAINT "status_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table users_groups
-- ----------------------------
ALTER TABLE "public"."users_groups" ADD CONSTRAINT "user_groups_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table bimbingan_kkl_individu
-- ----------------------------
ALTER TABLE "public"."bimbingan_kkl_individu" ADD CONSTRAINT "fk_id_kkl" FOREIGN KEY ("id_kkl") REFERENCES "public"."kkl" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."bimbingan_kkl_individu" ADD CONSTRAINT "fk_id_user" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table bimbingan_kkl_kelompok
-- ----------------------------
ALTER TABLE "public"."bimbingan_kkl_kelompok" ADD CONSTRAINT "fk_id_kelompok_kkl" FOREIGN KEY ("id_kelompok_kkl") REFERENCES "public"."kelompok_kkl" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."bimbingan_kkl_kelompok" ADD CONSTRAINT "fk_id_user" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table bimbingan_kp
-- ----------------------------
ALTER TABLE "public"."bimbingan_kp" ADD CONSTRAINT "fk_id_kp" FOREIGN KEY ("id_kp") REFERENCES "public"."kerja_praktek" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table bimbingan_skripsi
-- ----------------------------
ALTER TABLE "public"."bimbingan_skripsi" ADD CONSTRAINT "fk_id_skripsi" FOREIGN KEY ("id_skripsi") REFERENCES "public"."skripsi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."bimbingan_skripsi" ADD CONSTRAINT "fk_id_user" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table kelompok_kkl
-- ----------------------------
ALTER TABLE "public"."kelompok_kkl" ADD CONSTRAINT "fk_id_dosen" FOREIGN KEY ("id_dosen") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."kelompok_kkl" ADD CONSTRAINT "fk_id_kelompok" FOREIGN KEY ("id_kelompok") REFERENCES "public"."kelompok" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table kelompok_mhs
-- ----------------------------
ALTER TABLE "public"."kelompok_mhs" ADD CONSTRAINT "fk_id_kelompok_kkl" FOREIGN KEY ("id_kelompok_kkl") REFERENCES "public"."kelompok_kkl" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."kelompok_mhs" ADD CONSTRAINT "fk_id_kkl" FOREIGN KEY ("id_kkl") REFERENCES "public"."kkl" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table komentar_bimbingan_kelompok
-- ----------------------------
ALTER TABLE "public"."komentar_bimbingan_kelompok" ADD CONSTRAINT "fk_id_bimbingan_kkl_kelompok" FOREIGN KEY ("id_bimbingan_kkl_kelompok") REFERENCES "public"."bimbingan_kkl_kelompok" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembimbing_kkl
-- ----------------------------
ALTER TABLE "public"."pembimbing_kkl" ADD CONSTRAINT "fk_id_dosen" FOREIGN KEY ("id_dosen") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pembimbing_kkl" ADD CONSTRAINT "fk_id_kkl" FOREIGN KEY ("id_kkl") REFERENCES "public"."kkl" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembimbing_kp
-- ----------------------------
ALTER TABLE "public"."pembimbing_kp" ADD CONSTRAINT "fk_id_dosen1" FOREIGN KEY ("id_dosen1") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pembimbing_kp" ADD CONSTRAINT "fk_id_dosen2" FOREIGN KEY ("id_dosen2") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pembimbing_kp" ADD CONSTRAINT "fk_id_kp" FOREIGN KEY ("id_kp") REFERENCES "public"."kerja_praktek" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table pembimbing_skripsi
-- ----------------------------
ALTER TABLE "public"."pembimbing_skripsi" ADD CONSTRAINT "fk_id_dosen1" FOREIGN KEY ("id_dosen1") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pembimbing_skripsi" ADD CONSTRAINT "fk_id_dosen2" FOREIGN KEY ("id_dosen2") REFERENCES "public"."dosen" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pembimbing_skripsi" ADD CONSTRAINT "fk_id_skripsi" FOREIGN KEY ("id_skripsi") REFERENCES "public"."skripsi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table sk_kerjapraktek
-- ----------------------------
ALTER TABLE "public"."sk_kerjapraktek" ADD CONSTRAINT "fk_id_kp" FOREIGN KEY ("id_kp") REFERENCES "public"."kerja_praktek" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table sk_skripsi
-- ----------------------------
ALTER TABLE "public"."sk_skripsi" ADD CONSTRAINT "fk_id_skripsi" FOREIGN KEY ("id_skripsi") REFERENCES "public"."skripsi" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
