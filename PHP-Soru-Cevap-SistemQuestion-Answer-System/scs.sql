-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2021, 15:36:13
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `396501-scs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `like_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `like_date`, `user_id`, `q_id`, `type`) VALUES
(205, '2021-12-25 15:13:59', 27, 18, 1),
(206, '2021-12-25 15:18:29', 20, 20, 0),
(209, '2021-12-25 15:19:03', 26, 24, 1),
(210, '2021-12-26 13:52:27', 20, 18, 0),
(212, '2021-12-26 17:14:38', 20, 30, 0),
(213, '2021-12-27 14:26:09', 28, 20, 1),
(214, '2021-12-27 14:26:12', 28, 24, 1),
(215, '2021-12-27 14:26:17', 28, 18, 0),
(216, '2021-12-27 14:27:05', 27, 24, 0),
(217, '2021-12-27 14:27:09', 27, 29, 1),
(218, '2021-12-27 14:27:11', 27, 31, 1),
(221, '2021-12-27 14:37:54', 20, 31, 1),
(223, '2021-12-27 16:25:44', 29, 18, 0),
(224, '2021-12-27 16:25:50', 29, 32, 1),
(225, '2021-12-27 16:29:06', 28, 32, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `q_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `question`
--

INSERT INTO `question` (`id`, `q_name`, `q_date`) VALUES
(18, 'Soru eklendi mi?', '2021-12-25 12:13:36'),
(20, 'Sorusu olan var mı?', '2021-12-25 12:18:13'),
(24, 'Denemek için ekliyorum', '2021-12-25 12:18:55'),
(29, 'Sorusu olan var mı?', '2021-12-26 14:12:59'),
(31, 'Merhaba, bugün nasıl geçiyor?', '2021-12-27 11:25:37'),
(32, 'Bugün ders var mı ?', '2021-12-27 11:27:00'),
(34, 'Merhaba ben Emre, sorunuz var mı?', '2021-12-27 13:26:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `reply`
--

INSERT INTO `reply` (`reply_id`, `q_id`, `user_id`, `reply`) VALUES
(20, 18, 27, 'Evet eklendi'),
(19, 31, 27, 'Güzel geçiyor'),
(18, 18, 27, 'Eklendi'),
(21, 18, 20, 'merhaba'),
(22, 34, 28, 'yok');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(20, 'ayşe', '1', 'ayşe yılmaz', 'ayse@gmail.com'),
(27, 'merve', '1', 'merve', 'merve@gmail.com'),
(28, 'ahmet', '1', 'Ahmet Yılmaz', 'ahmet@gmail.com'),
(29, 'emre', '1', 'emre', 'emre@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
