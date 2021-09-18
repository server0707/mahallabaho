-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных baza
CREATE DATABASE IF NOT EXISTS `baza` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `baza`;

-- Дамп структуры для таблица baza.aholi
CREATE TABLE IF NOT EXISTS `aholi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xujaliklar_soni` int(11) NOT NULL,
  `oilalar_soni` int(11) NOT NULL,
  `erkaklar_soni` int(11) NOT NULL,
  `ayollar_soni` int(11) NOT NULL,
  `jami_aholi_soni` int(11) NOT NULL,
  `yosh_bolalar_soni` int(11) NOT NULL,
  `uspirinlar_soni` int(11) NOT NULL,
  `voyaga_yetmaganlar_soni` int(11) NOT NULL,
  `voyaga_yetganlar_soni` int(11) NOT NULL,
  `jami_yoshlar_soni` int(11) NOT NULL,
  `boquvchisini_yuqotgan_oilalar_soni` int(11) NOT NULL,
  `yolgiz_keksalar_soni` int(11) NOT NULL,
  `nogironlar_soni` int(11) NOT NULL,
  `urush_faxriylar_soni` int(11) NOT NULL,
  `pensiyanerlar_soni` int(11) NOT NULL,
  `yuzdan_oshganlar_soni` int(11) NOT NULL,
  `mfy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aholi_mfy1_idx` (`mfy_id`),
  CONSTRAINT `fk_aholi_mfy1` FOREIGN KEY (`mfy_id`) REFERENCES `mfy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы baza.aholi: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `aholi` DISABLE KEYS */;
INSERT INTO `aholi` (`id`, `xujaliklar_soni`, `oilalar_soni`, `erkaklar_soni`, `ayollar_soni`, `jami_aholi_soni`, `yosh_bolalar_soni`, `uspirinlar_soni`, `voyaga_yetmaganlar_soni`, `voyaga_yetganlar_soni`, `jami_yoshlar_soni`, `boquvchisini_yuqotgan_oilalar_soni`, `yolgiz_keksalar_soni`, `nogironlar_soni`, `urush_faxriylar_soni`, `pensiyanerlar_soni`, `yuzdan_oshganlar_soni`, `mfy_id`) VALUES
	(1, 12, 12, 12, 12, 24, 12, 12, 12, 12, 48, 12, 12, 12, 12, 12, 1221, 2),
	(2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, 3),
	(3, 2, 2, 2, 2, 4, 2, 2, 2, 2, 8, 2, 2, 2, 2, 2, 2, 2),
	(4, 1, 1, 1, 1, 2, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1);
/*!40000 ALTER TABLE `aholi` ENABLE KEYS */;

-- Дамп структуры для таблица baza.ijtimoiy_muhit
CREATE TABLE IF NOT EXISTS `ijtimoiy_muhit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kamtaminlanganlar_soni` int(11) NOT NULL,
  `moddiyyordamchilar_soni` int(11) NOT NULL,
  `nafaqaoluvchilar14_soni` int(11) NOT NULL,
  `nafaqaoluvchilar2_soni` int(11) NOT NULL,
  `nogiron_nafaqachilar_soni` int(11) NOT NULL,
  `oilaviy_ajirim_soni` int(11) NOT NULL,
  `yosh_ajirimlar_soni` int(11) NOT NULL,
  `pxt_notinchoila_soni` int(11) NOT NULL,
  `pxt_giyohvandlar_soni` int(11) NOT NULL,
  `pxt_qushmachilar_soni` int(11) NOT NULL,
  `pxt_yengiltabiatayol_soni` int(11) NOT NULL,
  `pxt_ekstrimistlar_soni` int(11) NOT NULL,
  `ishsizlar_soni` int(11) NOT NULL,
  `mfy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ijtimoiy_muhit_mfy1_idx` (`mfy_id`),
  CONSTRAINT `fk_ijtimoiy_muhit_mfy1` FOREIGN KEY (`mfy_id`) REFERENCES `mfy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы baza.ijtimoiy_muhit: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `ijtimoiy_muhit` DISABLE KEYS */;
INSERT INTO `ijtimoiy_muhit` (`id`, `kamtaminlanganlar_soni`, `moddiyyordamchilar_soni`, `nafaqaoluvchilar14_soni`, `nafaqaoluvchilar2_soni`, `nogiron_nafaqachilar_soni`, `oilaviy_ajirim_soni`, `yosh_ajirimlar_soni`, `pxt_notinchoila_soni`, `pxt_giyohvandlar_soni`, `pxt_qushmachilar_soni`, `pxt_yengiltabiatayol_soni`, `pxt_ekstrimistlar_soni`, `ishsizlar_soni`, `mfy_id`) VALUES
	(1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 3),
	(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4);
/*!40000 ALTER TABLE `ijtimoiy_muhit` ENABLE KEYS */;

-- Дамп структуры для таблица baza.jinoyatchilik
CREATE TABLE IF NOT EXISTS `jinoyatchilik` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aniqlangan_jinoyat_soni` int(11) NOT NULL,
  `ehtiyotsiz_jinoyat_soni` int(11) NOT NULL,
  `iqtisodiy_jinoyat_soni` int(11) NOT NULL,
  `kasbiy_jinoyat_soni` int(11) NOT NULL,
  `maxsus_jinoyat_soni` int(11) NOT NULL,
  `jami_jinoyat_soni` int(11) NOT NULL,
  `qasddan_odamuldirish_soni` int(11) NOT NULL,
  `ogirshikast_yetkazish_soni` int(11) NOT NULL,
  `ortashikast_yetkazish_soni` int(11) NOT NULL,
  `yengilshikast_yetkazish_soni` int(11) NOT NULL,
  `nomusga_tegish_soni` int(11) NOT NULL,
  `bosqinchilik_soni` int(11) NOT NULL,
  `talonchilik_soni` int(11) NOT NULL,
  `ugrilik_soni` int(11) NOT NULL,
  `giyohvandlik_soni` int(11) NOT NULL,
  `bezorilik_soni` int(11) NOT NULL,
  `boshqajinoyat_soni` int(11) NOT NULL,
  `mahaladagi_jamijinoyat_soni` int(11) NOT NULL,
  `doimiy_yashovchilar_soni` int(11) NOT NULL,
  `boshqa_mahallada_yashovchilar_soni` int(11) NOT NULL,
  `boshqa_tumanda_yashovchilar_soni` int(11) NOT NULL,
  `boshqa_viloyatda_yashovchilar_soni` int(11) NOT NULL,
  `chet_el_fuqarosi_soni` int(11) NOT NULL,
  `jami_shaxslar_soni` int(11) NOT NULL,
  `mfy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jinoyatchilik_mfy1_idx` (`mfy_id`),
  CONSTRAINT `fk_jinoyatchilik_mfy1` FOREIGN KEY (`mfy_id`) REFERENCES `mfy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы baza.jinoyatchilik: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `jinoyatchilik` DISABLE KEYS */;
INSERT INTO `jinoyatchilik` (`id`, `aniqlangan_jinoyat_soni`, `ehtiyotsiz_jinoyat_soni`, `iqtisodiy_jinoyat_soni`, `kasbiy_jinoyat_soni`, `maxsus_jinoyat_soni`, `jami_jinoyat_soni`, `qasddan_odamuldirish_soni`, `ogirshikast_yetkazish_soni`, `ortashikast_yetkazish_soni`, `yengilshikast_yetkazish_soni`, `nomusga_tegish_soni`, `bosqinchilik_soni`, `talonchilik_soni`, `ugrilik_soni`, `giyohvandlik_soni`, `bezorilik_soni`, `boshqajinoyat_soni`, `mahaladagi_jamijinoyat_soni`, `doimiy_yashovchilar_soni`, `boshqa_mahallada_yashovchilar_soni`, `boshqa_tumanda_yashovchilar_soni`, `boshqa_viloyatda_yashovchilar_soni`, `chet_el_fuqarosi_soni`, `jami_shaxslar_soni`, `mfy_id`) VALUES
	(1, 2, 1, 1, 1, 1, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 5, 4),
	(2, 1, 1, 1, 1, 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 5, 3);
/*!40000 ALTER TABLE `jinoyatchilik` ENABLE KEYS */;

-- Дамп структуры для таблица baza.mfy
CREATE TABLE IF NOT EXISTS `mfy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomi` varchar(45) NOT NULL,
  `tuman_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mfy_tuman1_idx` (`tuman_id`),
  CONSTRAINT `fk_mfy_tuman1` FOREIGN KEY (`tuman_id`) REFERENCES `tuman` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы baza.mfy: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `mfy` DISABLE KEYS */;
INSERT INTO `mfy` (`id`, `nomi`, `tuman_id`) VALUES
	(1, 'Oltin qal\'a', 1),
	(2, 'Yangiturmush', 1),
	(3, 'Тераклик', 9),
	(4, 'Халач', 9),
	(6, 'Арабхона', 5);
/*!40000 ALTER TABLE `mfy` ENABLE KEYS */;

-- Дамп структуры для таблица baza.obyektlar
CREATE TABLE IF NOT EXISTS `obyektlar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `guzarlar_soni` int(11) NOT NULL,
  `internetklub_soni` int(11) NOT NULL,
  `uquvmarkaz_soni` int(11) NOT NULL,
  `savdodukon_soni` int(11) NOT NULL,
  `choyxonalar_soni` int(11) NOT NULL,
  `tuyxonalar_soni` int(11) NOT NULL,
  `shifoxonalar_soni` int(11) NOT NULL,
  `qvplar_soni` int(11) NOT NULL,
  `fermerliklar_soni` int(11) NOT NULL,
  `bolalarmaydon_soni` int(11) NOT NULL,
  `sportmaydon_soni` int(11) NOT NULL,
  `masjidlar_soni` int(11) NOT NULL,
  `ziyoratgohlar_soni` int(11) NOT NULL,
  `qabristonlar_soni` int(11) NOT NULL,
  `boshqadin_ibodatxona_soni` int(11) NOT NULL,
  `bozorlar_soni` int(11) NOT NULL,
  `novvoyxonalar_soni` int(11) NOT NULL,
  `guzalliksalon_soni` int(11) NOT NULL,
  `tamirlashustachilik_soni` int(11) NOT NULL,
  `diqqatli_joylar_soni` int(11) NOT NULL,
  `kutubxonalar_soni` int(11) NOT NULL,
  `dorixonalar_soni` int(11) NOT NULL,
  `hammomlar_soni` int(11) NOT NULL,
  `mfy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_obyektlar_mfy1_idx` (`mfy_id`),
  CONSTRAINT `fk_obyektlar_mfy1` FOREIGN KEY (`mfy_id`) REFERENCES `mfy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы baza.obyektlar: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `obyektlar` DISABLE KEYS */;
INSERT INTO `obyektlar` (`id`, `guzarlar_soni`, `internetklub_soni`, `uquvmarkaz_soni`, `savdodukon_soni`, `choyxonalar_soni`, `tuyxonalar_soni`, `shifoxonalar_soni`, `qvplar_soni`, `fermerliklar_soni`, `bolalarmaydon_soni`, `sportmaydon_soni`, `masjidlar_soni`, `ziyoratgohlar_soni`, `qabristonlar_soni`, `boshqadin_ibodatxona_soni`, `bozorlar_soni`, `novvoyxonalar_soni`, `guzalliksalon_soni`, `tamirlashustachilik_soni`, `diqqatli_joylar_soni`, `kutubxonalar_soni`, `dorixonalar_soni`, `hammomlar_soni`, `mfy_id`) VALUES
	(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6);
/*!40000 ALTER TABLE `obyektlar` ENABLE KEYS */;

-- Дамп структуры для таблица baza.tuman
CREATE TABLE IF NOT EXISTS `tuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomi` varchar(255) NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tuman_viloyat_idx` (`viloyat_id`),
  CONSTRAINT `fk_tuman_viloyat` FOREIGN KEY (`viloyat_id`) REFERENCES `viloyat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы baza.tuman: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `tuman` DISABLE KEYS */;
INSERT INTO `tuman` (`id`, `nomi`, `viloyat_id`) VALUES
	(1, 'Shovot', 1),
	(2, 'Bog\'ot', 1),
	(3, 'Qo\'shko\'pir', 1),
	(4, 'Urganch', 1),
	(5, 'Каттакургон', 3),
	(6, 'Xiva', 1),
	(7, 'Bulung\'ur', 3),
	(8, 'Когон', 2),
	(9, 'Вобкент', 2);
/*!40000 ALTER TABLE `tuman` ENABLE KEYS */;

-- Дамп структуры для таблица baza.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы baza.user: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `isAdmin`) VALUES
	(1, 'admin', '$2y$13$BiLitkc1S2oPj5AlexowJeYda4.ASlFkJJ7hPR8IaxbXtr94MytHS', 1),
	(2, 'user', '$2y$13$ai.GEaXqCkSO.nqO9dPVS.7h.FFcaVF/O1yrPy.BfrktMhjQVtOgW', 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Дамп структуры для таблица baza.viloyat
CREATE TABLE IF NOT EXISTS `viloyat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы baza.viloyat: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `viloyat` DISABLE KEYS */;
INSERT INTO `viloyat` (`id`, `nomi`) VALUES
	(1, 'Xorazm'),
	(2, 'Buxoro'),
	(3, 'Samarqand');
/*!40000 ALTER TABLE `viloyat` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
