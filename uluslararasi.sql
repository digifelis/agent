-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Kas 2018, 22:10:26
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `uluslararasi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `acenta`
--

CREATE TABLE IF NOT EXISTS `acenta` (
  `adi` varchar(255) DEFAULT NULL,
  `acenta_kullanici_adi` varchar(255) NOT NULL,
  `acenta_parola` varchar(255) NOT NULL,
  `ulke` int(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel1` varchar(255) DEFAULT NULL,
  `tel2` varchar(255) DEFAULT NULL,
  `durum` int(255) DEFAULT NULL,
  `acenta_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`acenta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `acenta`
--
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvuru_surec`
--

CREATE TABLE IF NOT EXISTS `basvuru_surec` (
  `surec_id` int(255) NOT NULL AUTO_INCREMENT,
  `o_id` int(255) DEFAULT NULL,
  `islem` text,
  PRIMARY KEY (`surec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

CREATE TABLE IF NOT EXISTS `bolum` (
  `bolum_id` int(255) NOT NULL AUTO_INCREMENT,
  `bolum_adi` varchar(255) DEFAULT NULL,
  `f_id` int(255) DEFAULT NULL,
  `bolum_durum` int(255) DEFAULT NULL,
  PRIMARY KEY (`bolum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `bolum`
--



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum_durumlari`
--

CREATE TABLE IF NOT EXISTS `bolum_durumlari` (
  `bolum_durumlari_id` int(255) NOT NULL AUTO_INCREMENT,
  `bolum_durum_adi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`bolum_durumlari_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `bolum_durumlari`
--

INSERT INTO `bolum_durumlari` (`bolum_durumlari_id`, `bolum_durum_adi`) VALUES
(1, 'Kapalı'),
(2, 'Açık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `durumlar`
--

CREATE TABLE IF NOT EXISTS `durumlar` (
  `durum_id` int(255) NOT NULL AUTO_INCREMENT,
  `durum_adi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`durum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `durumlar`
--

INSERT INTO `durumlar` (`durum_id`, `durum_adi`) VALUES
(1, 'Pasif'),
(2, ' Aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evraklar`
--

CREATE TABLE IF NOT EXISTS `evraklar` (
  `evrak_id` int(255) NOT NULL AUTO_INCREMENT,
  `evrak1` varchar(255) DEFAULT NULL,
  `evrak2` varchar(255) DEFAULT NULL,
  `evrak3` varchar(255) DEFAULT NULL,
  `evrak4` varchar(255) DEFAULT NULL,
  `evrak5` varchar(255) DEFAULT NULL,
  `o_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`evrak_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `evraklar`
--



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fakulte`
--

CREATE TABLE IF NOT EXISTS `fakulte` (
  `fakulte_id` int(255) NOT NULL AUTO_INCREMENT,
  `fakulte_adi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fakulte_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `fakulte`
--

INSERT INTO `fakulte` (`fakulte_id`, `fakulte_adi`) VALUES
(1, 'Mühendislik'),
(2, 'Ziraat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `o_id` int(11) NOT NULL,
  `tipi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `files`
--

INSERT INTO `files` (`id`, `file_name`, `uploaded_on`, `status`, `o_id`, `tipi`) VALUES
(5, 'IMAG2642.jpg', '2018-11-07 21:27:14', '1', 2, 1),
(6, '205307.png', '2018-11-07 21:27:32', '1', 1, 1),
(7, 'IMG_1963.jpg', '2018-11-07 21:29:22', '1', 2, 2),
(8, 'IMAG2646.jpg', '2018-11-07 21:30:03', '1', 1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kabul_mektubu`
--

CREATE TABLE IF NOT EXISTS `kabul_mektubu` (
  `kabul_id` int(255) NOT NULL AUTO_INCREMENT,
  `o_id` int(255) DEFAULT NULL,
  `mektup` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kabul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
  `ogrenci_id` int(255) NOT NULL AUTO_INCREMENT,
  `adi_soyadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `a_id` int(255) DEFAULT NULL,
  `durum` int(255) DEFAULT NULL,
  PRIMARY KEY (`ogrenci_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `ogrenci`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci_durum`
--

CREATE TABLE IF NOT EXISTS `ogrenci_durum` (
  `oogrenci_durum_id` int(255) NOT NULL AUTO_INCREMENT,
  `ogrenci_durum_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`oogrenci_durum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `ogrenci_durum`
--

INSERT INTO `ogrenci_durum` (`oogrenci_durum_id`, `ogrenci_durum_adi`) VALUES
(1, 'Red'),
(2, 'İşlemde'),
(3, 'Kabul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci_secimi`
--

CREATE TABLE IF NOT EXISTS `ogrenci_secimi` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `o_id` int(255) DEFAULT NULL,
  `f_id` int(255) DEFAULT NULL,
  `b_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ogrenci_secimi`
--



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `programlar`
--

CREATE TABLE IF NOT EXISTS `programlar` (
  `adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `fakulte` int(255) DEFAULT NULL,
  `bolum` int(255) DEFAULT NULL,
  `egit_sure` varchar(255) DEFAULT NULL,
  `egit_dili` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_bin,
  `durum` int(255) DEFAULT NULL,
  `program_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `programlar`
--



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulkeler`
--

CREATE TABLE IF NOT EXISTS `ulkeler` (
  `ulke_id` int(255) NOT NULL AUTO_INCREMENT,
  `ulke_adi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ulke_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `ulkeler`
--

INSERT INTO `ulkeler` (`ulke_id`, `ulke_adi`) VALUES
(1, 'Türkiye'),
(2, 'Türkmenistan'),
(3, 'Pakistan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE IF NOT EXISTS `yonetici` (
  `y_id` int(11) NOT NULL AUTO_INCREMENT,
  `kul_adi` varchar(50) NOT NULL,
  `kul_pass` varchar(50) NOT NULL,
  `onay` int(11) NOT NULL,
  PRIMARY KEY (`y_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`y_id`, `kul_adi`, `kul_pass`, `onay`) VALUES
(1, 'deneme', '123456', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
