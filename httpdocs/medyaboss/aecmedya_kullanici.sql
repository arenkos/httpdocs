-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 05 Kas 2024, 12:07:52
-- Sunucu sürümü: 10.3.35-MariaDB-cll-lve
-- PHP Sürümü: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aecmedya_kullanicilar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL,
  `unvan` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL,
  `tiklama` int(11) NOT NULL,
  `onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `email`, `telefon`, `sifre`, `unvan`, `tarih`, `tiklama`, `onay`) VALUES
(1, 'tuncay', 'Yıldız', 'tncyyildiz3444@gmail.com', '', 'Ty21871377', '', '', 0, 0),
(2, 'Tuncay', 'Yıldız', 'tuncayyildiz@kizilay.org.tr', '', 'eAuw2236', '', '', 0, 0),
(3, 'Aren', 'Koş', 'aren_32@hotmail.com', '', '123', 'Yönetici', '', 0, 1),
(4, 'Kudret ', 'Doğan ', 'd.kdrtt@gmail.com', '', '023427', '', '', 0, 0),
(5, 'Çağla', 'Töngel', 'Caglarngl@icloud.com', '', 'atlas2010a', '', '', 0, 0),
(6, 'Ahmet', 'Baltacı', 'd.ahmetbaltaci@gmail.com', '5325903062', 'Haber2023', '', '', 0, 1),
(7, 'Erdem', 'Karagöz', 'erdemkrgz00@gmail.com', '5305974618', '5305974618erdM', '', '', 0, 0),
(8, 'Sibel ', 'Gümüşcü ', 'sibeluzuner66@gmail.com', '5054384909', '02092015emre', '', '2023-08-19 13:32:26', 0, 0),
(9, 'Ege Mustafa', 'Demir', 'eged0760@gmail.com', '5418129476', 'egeeceem1', '', '2023-08-25 21:42:37', 0, 0),
(10, 'Furkan', 'Taşdemir', 'furkantasdemirr46@gmail.com', '5438091549', 'yusufurkan2892', '', '2023-08-25 21:43:06', 0, 0),
(11, 'Safiye ', 'Demir ', 'demirsafiye7106@gmail.com', '5468030638', '123safiye', '', '2023-09-03 17:10:56', 0, 0),
(12, 'Defne', 'Yılmaz', 'melisaz@gmail.com', '5342355432', 'Kartaş44', '', '2023-09-15 13:02:16', 0, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
