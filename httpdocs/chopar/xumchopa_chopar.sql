-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 30 Oca 2024, 19:24:52
-- Sunucu sürümü: 10.3.24-MariaDB-cll-lve
-- PHP Sürümü: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `xumchopa_chopar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `numara` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL,
  `adres_isim` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `adres2_isim` text COLLATE utf8_turkish_ci NOT NULL,
  `adres2` text COLLATE utf8_turkish_ci NOT NULL,
  `adres3_isim` text COLLATE utf8_turkish_ci NOT NULL,
  `adres3` text COLLATE utf8_turkish_ci NOT NULL,
  `oturum` text COLLATE utf8_turkish_ci NOT NULL,
  `giris` date NOT NULL,
  `cikis` date NOT NULL,
  `IP` text COLLATE utf8_turkish_ci NOT NULL,
  `mac` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `mail`, `numara`, `sifre`, `adres_isim`, `adres`, `adres2_isim`, `adres2`, `adres3_isim`, `adres3`, `oturum`, `giris`, `cikis`, `IP`, `mac`) VALUES
(1, 'Aren', 'Koş', 'aren_32@hotmail.com', '5382057517', 'Arenkos123', 'Ev', 'Güngören Mahallesi Muhtar Ziya Caddesi Park İstanbul Konutları No:10 H Blok Çekmeköy/İSTANBUL', '', '', '', '', '1', '2023-10-10', '2023-10-10', '93.89.225.254', ''),
(16, 'defne', 'yılmaz', 'defnemlza@gmail.com', '5366060544', '123456', '', 'mimar sınan mahlesı', '', '', '', '', '1', '2023-08-16', '2023-08-16', '93.89.225.254', ''),
(17, 'defne', 'yıkledı', 'defnemlkz@gmail.com', '5344322355', '1234567899', '', '1233456789', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `siparis_no` int(11) DEFAULT NULL,
  `kod` text COLLATE utf8_turkish_ci NOT NULL,
  `urun` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyat` float NOT NULL,
  `toplam_fiyat` float NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `adres_isim` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `vergi_kimlik` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kayitsiz` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `durum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `siparis_no`, `kod`, `urun`, `urun_id`, `adet`, `fiyat`, `toplam_fiyat`, `ad`, `soyad`, `telefon`, `adres_isim`, `adres`, `vergi_kimlik`, `kayitsiz`, `mail`, `tarih`, `durum`) VALUES
(1, 1, 'PF001', 'Kirke', 0, 10, 450, 4500, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(2, 1, 'PF002', 'Erbo Pure', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(3, 1, 'PF003', 'Versace Eros', 0, 5, 450, 2250, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(4, 2, 'PF001', 'Kirke', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(5, 2, 'PF003', 'Versace Eros', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(6, 2, 'PJ001', 'Peeling Jel Pirinç Özlü 130ml', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(7, 2, 'BM002', 'Body Mist 200ml', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(8, 3, 'PF001', 'Kirke', 0, 1, 450, 450, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-08-16', ''),
(14, 4, 'PF001', 'Chopar Kirke Parfüm', 0, 7, 600, 4200, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-10-01', ''),
(15, 5, 'PF001', 'Chopar Kirke Parfüm', 0, 10, 600, 6000, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-10-01', ''),
(16, 5, 'PJ001', 'Chopar Peeling Jel Pirinç Özlü 130ml', 0, 4, 200, 800, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-10-01', ''),
(17, 5, 'BM001', 'Chopar Body Mist 200ml', 0, 5, 150, 750, '', '', '5382057517', '', '', NULL, '', 'aren_32@hotmail.com', '2023-10-01', ''),
(22, 6, 'PF001', 'Chopar Kirke Parfüm', 0, 1082, 600, 649200, 'Aren', 'Koş', '5382057517', '', 'Çekmeköy', NULL, '', 'aren_32@hotmail.com', '2023-10-06', ''),
(23, 6, 'PF002', 'Erbo Pure', 0, 10, 600, 6000, 'Aren', 'Koş', '5382057517', '', 'Çekmeköy', NULL, '', 'aren_32@hotmail.com', '2023-10-06', ''),
(72, 9, 'PF001', 'Chopar Kirke Parfüm', 0, 104, 600, 62400, '', '', '', '', '', NULL, '962f22ce52eaf2f22eec780644292c0e', '', '2023-12-14', 'Sipariş Alındı'),
(75, 7, 'PF001', 'Chopar Kirke Parfüm', 0, 1, 600, 600, 'Aren', 'Koş', '5382057517', '-', 'Çekmeköy', '', '10f4e67bd461904613dc752a6b4a02ea', 'aren_32@hotmail.com', '2023-10-10', 'Sipariş Alındı'),
(76, 8, 'PF001', 'Chopar Kirke Parfüm', 0, 1, 600, 600, 'Aren', 'Koş', '5382057517', '-', 'aaa', '111', '10f4e67bd461904613dc752a6b4a02ea', 'aren_32@hotmail.com', '2023-10-10', 'Sipariş Alındı'),
(77, 9, 'SB002', 'Chopar Pirinç Özlü Kabak Lifli Sabun', 0, 5, 100, 500, '', '', '', '', '', NULL, '0b46de50744ef5591967d05e78d62436', '', '2023-12-14', 'Sipariş Alındı'),
(78, 9, 'SET001', 'Chopar Ekonomik Sabun Paketi - 2 Adet Aloe Vera Özlü Sabun 130g ve 2 Adet Pirinç Özlü Sabun 130g', 0, 50, 250, 12500, '', '', '', '', '', NULL, '93958509a87f865a1bc7c3b4f1a8b67a', '', '2023-12-14', 'Sipariş Alındı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `toptan`
--

CREATE TABLE `toptan` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `firma_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `resim` int(11) NOT NULL,
  `kod` text COLLATE utf8_turkish_ci NOT NULL,
  `barkod` text COLLATE utf8_turkish_ci NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `fiyat` float NOT NULL,
  `fiyat_eski` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`resim`, `kod`, `barkod`, `ad`, `aciklama`, `stok`, `fiyat`, `fiyat_eski`) VALUES
(1, 'PF001', '0', 'Chopar Kirke Parfüm', '\"Efsanelere göre Kirke, büyülü bitkilerin ve büyünün ustası olan bir cadıydı. Onun kokusu da bir büyü gibiydi, büyüleyici ve gizemli. Kirke kokusu, size antik mitolojinin büyülü dünyasına adım atma fırsatı sunar. Her sıktığınızda, Kirke\'nin büyülü bahçelerinin kokusu sizi sarar ve sizi büyüleyici bir yolculuğa çıkarır. Bu esrarengiz koku, size gizemli bir hava katarak etrafınızdakileri büyüler. Kirke kokusuyla, kendinizi antik mitolojinin kahramanlarından biri gibi hissedersiniz. Tutkulu ve büyüleyici bir karakteri ortaya çıkarırken, benzersiz bir kimlik kazandırır. Kirke kokusuyla, çevrenizdeki herkesi büyüleyen bir etki yaratır ve unutulmaz izler bırakmanızı sağlar. Şimdi, Kirke\'nin büyülü dünyasına adım atın ve kendi eşsiz kokunuzla büyüleyici bir hikayeye dönüşün!\"', 1000, 600, 1000),
(2, 'PF002', '0', 'Erbo Pure', '\"Erbo Pure kokusuyla, doğanın saflığını teninizde hissedin! Bu benzersiz koku, doğanın derinliklerinden gelen canlandırıcı bir esintiyi temsil eder. Her sıktığınızda, serin bir ormanın tazeliği ve doğanın canlılığı sizi sarar. Erbo Pure kokusuyla, tüm stres ve karmaşayı geride bırakarak, içsel huzuru keşfetme fırsatı bulursunuz. Bu saf ve enerji dolu koku, size doğanın gücünü hatırlatırken, kendinizi canlı ve canlı hissetmenizi sağlar. Erbo Pure, ruhunuzu yenileyen bir nefes gibi, sizi doğanın kucağına davet eder. Bu parfümle, kendinizi doğanın büyüleyici ve canlı enerjisiyle doldurabilir, doğanın saflığına ve güzelliğine yakın hissedebilirsiniz. Şimdi, Erbo Pure kokusuyla doğanın özüne ulaşın ve kendi markanızın izini taşıyan bu saf ve canlandırıcı esansla, unutulmaz bir yolculuğa çıkın!\"', 1000, 600, 1000),
(3, 'PF003', '0', 'Versace Eros', '\"Bir adım atın ve tutkunun büyülü dünyasına giriş yapın. Bu kokuyla sizi eşsiz bir maceraya davet ediyoruz. Bu büyüleyici koku, kalbinizin ritmini hızlandırırken, ruhunuzun derinliklerindeki ateşi alevlendirir. Her sıktığınızda, karanlıkta ışıldayan bir yıldızın yanı başınızda olduğunu hissedersiniz. Eros\'un gücü ve çekiciliği, sizi derin bir tutkunun içine çeker ve sınırları zorlayan duygularla dolu bir yolculuğa çıkarır. Kendinizi cesur ve karizmatik hissedersiniz. Bu kokunun etkisiyle, çevrenizdeki insanların dikkatini üzerinize çekersiniz. Sıradan anlar, tutkulu anlara dönüşür ve her dokunuşunuz büyüleyici bir etki yaratır. Versace Eros, aşkın ve gücün kokusunu size sunar, sizi o büyülü dünyada adeta bir tanrıçaya dönüştürür. Şimdi, Versace Eros kokusuyla büyülü bir aşk serüvenine hazır mısınız?\"', 1000, 600, 1000),
(4, 'PJ001', '0', 'Chopar Peeling Jel Pirinç Özlü 130ml', 'Chopar Pirinç Özlü Peeling Jel, cildinizin derinlemesine temizlenmesini, canlanmasını ve tazelenmesini sağlayan özel bir cilt bakım ürünüdür. Chopar\'ın lüks markası, cilt bakımınıza benzersiz bir dokunuş sunar.\r\n\r\nPirinç özü, cildinizi nazikçe temizlerken ölü deriyi ve kirleri nazikçe giderir. Cildinize parlaklık ve canlılık kazandırır. Dermatologlar tarafından test edilmiş ve onaylanmıştır. Cildinize güvenle uygulayabilirsiniz.\r\n\r\nPeeling işlemi, cildinizi yatıştırabilir ve rahatlatabilir, böylece cildiniz daha sakin ve dengeli görünebilir.\r\n\r\nChopar Pirinç Özlü Peeling Jel ile cildinizin derinlemesine temizlendiğini ve yumuşattığını deneyimleyebilirsiniz.', 1000, 200, 250),
(5, 'BM001', '0', 'Chopar Body Mist 200ml', 'Chopar Vücut Spreyi, vücudunuza hoş bir koku vermek ve aynı zamanda cildinizi nemlendirmek için özel olarak tasarlanmıştır. Bu benzersiz formül, hafif dokusu sayesinde hızla emilirken uzun süre boyunca hoş bir koku bırakır.\r\n\r\nChopar Vücut Spreyi, tüm cilt tipleri için uygundur. Cildinizi nemlendirmek ve hoş bir koku ile öne çıkmak isteyen herkes bu ürünü gönül rahatlığıyla kullanabilir.\r\n\r\nHafif dokusu, hızla emilir ve yağlı bir his bırakmaz, böylece rahat bir kullanım sağlar.\r\n\r\nChopar Body Mist, vücudunuzu nemlendirirken benzersiz hoş bir koku deneyimi sunar.', 1000, 150, 250),
(6, 'BM002', '0', 'Chopar Body Mist 200ml', 'Chopar Vücut Spreyi, vücudunuza hoş bir koku vermek ve aynı zamanda cildinizi nemlendirmek için özel olarak tasarlanmıştır. Bu benzersiz formül, hafif dokusu sayesinde hızla emilirken uzun süre boyunca hoş bir koku bırakır.\r\n\r\nChopar Vücut Spreyi, tüm cilt tipleri için uygundur. Cildinizi nemlendirmek ve hoş bir koku ile öne çıkmak isteyen herkes bu ürünü gönül rahatlığıyla kullanabilir.\r\n\r\nHafif dokusu, hızla emilir ve yağlı bir his bırakmaz, böylece rahat bir kullanım sağlar.\r\n\r\nChopar Body Mist, vücudunuzu nemlendirirken benzersiz hoş bir koku deneyimi sunar.', 1000, 150, 250),
(7, 'SB001', '8684349871020', 'Chopar Aloe Vera Özlü Kabak Lifli Sabun', 'Doğanın özenle seçilmiş en iyi bileşenleriyle üretilen Aloe Vera özlü kabak lifli doğal sabunumuz, cildiniz için mükemmel bir seçenektir. Bu özel sabun, kabak lifi ve Aloe Vera\'nın benzersiz faydalarını bir araya getirerek cildinizi temizler, nemlendirir ve canlandırır. Doğal içeriği ve organik yapısı sayesinde cildinize zarar vermezken, onu daha sağlıklı ve parlak bir görünüme kavuşturur.\r\n\r\n\r\nFaydalar:\r\n\r\n\r\nNem Dengesi:Aloe Vera\'nın nemlendirici özellikleri cildinizi derinlemesine nemlendirir ve kuruluğu önler.\r\nÖlü Cilt Hücrelerini Temizler:Kabak lifi, cilt yüzeyindeki ölü hücreleri nazikçe temizler ve tıkanmış gözenekleri açar.,\r\nCilt Yatıştırma:Aloe Vera, cildi yatıştırır ve tahrişleri hafifletir, böylece hassas ciltler için mükemmel bir seçenek sunar.\r\nDoğal Temizlik:Kimyasal katkı maddeleri içermez ve tamamen doğal hammaddelerle üretilir.\r\n\r\n\r\nKullanım Talimatları:\r\n\r\n\r\nIslak cilde sabunu nazikçe masaj yaparak uygulayın, ardından bol su ile durulayın. Günlük cilt bakım rutininizin bir parçası olarak kullanılabilir.\r\n\r\n\r\nUyarılar:\r\n\r\n\r\nSadece harici kullanım içindir. Göz ile temasından kaçının. Çocukların erişemeyeceği bir yerde saklayın. Ürününüzü serin ve kuru bir yerde muhafaza edin.\r\n\r\n\r\nAloe Vera özlü kabak lifli doğal sabunumuz, cilt bakım rutininize doğal bir güzellik katmak için idealdir. Doğanın gücünü cildinizin her anında hissedin ve sağlıklı bir cilt için bu eşsiz sabunu deneyin.', 1000, 100, 130),
(8, 'SB002', '8684349871006', 'Chopar Pirinç Özlü Kabak Lifli Sabun', 'Pirinç özlü kabak lifli doğal sabunumuz, cildinize benzersiz bir bakım sunar. Pirinç özünün doğal iyileştirici özellikleri ile kabak lifinin mükemmel temizlik gücünün birleşimi, cildinizin daha sağlıklı ve canlı görünmesine yardımcı olur. Cildinizin ihtiyaç duyduğu bakımı en saf ve doğal yolla sağlamak için ideal bir seçenektir.\r\n\r\n\r\nFaydalar:\r\n\r\nCildi Temizler:Kabak lifi, cildinizi nazikçe temizler ve ölü cilt hücrelerini uzaklaştırır, böylece tıkanmış gözenekleri açar.\r\n\r\nPirinç Özleri:Pirinç özleri, cildinizi besler ve nemlendirir, cilt tonunu dengelemeye yardımcı olur.\r\n\r\nDoğal İçerikler:Kimyasal katkı maddeleri içermez, tamamen doğal bileşenlerle üretilmiştir.\r\n\r\nCilt Yenileme:Sabunun düzenli kullanımı cildinizin yenilenmesine ve daha genç bir görünüm kazanmasına yardımcı olabilir.\r\n\r\n\r\n\r\nKullanım Talimatları:\r\nIslak cilde sabunu nazikçe masaj yaparak uygulayın, ardından bol su ile durulayın. Günlük cilt bakım rutininizin bir parçası olarak kullanılabilir.\r\n\r\n\r\nUyarılar:\r\nSadece harici kullanım içindir. Göz ile temasından kaçının. Çocukların erişemeyeceği bir yerde saklayın. Ürününüzü serin ve kuru bir yerde muhafaza edin.\r\n\r\n\r\nPirinç Özlü Kabak Lifli Doğal Sabunumuz, cilt bakım rutininizin vazgeçilmez bir parçası olmaya adaydır. Doğanın gücünü cildinizde hissedin ve sağlıklı ve parlak bir cilt elde etmek için bu benzersiz sabunu deneyin.', 1000, 100, 130),
(9, 'SB003', '8684349871013', 'Chopar Eşek Sütlü Kabak Lifli Sabun', 'Chopar Eşek Sütlü Kabak Lifli Sabun, cilt bakımınız için mükemmel bir seçenektir. Doğanın en özel bileşenlerinden esinlenilen bu sabun, Chopar\'ın lüks markasıyla buluşur ve cilt bakımınızı bir adım öteye taşır.\r\n\r\nEşek sütü, cildinizi besler, nemlendirir ve yeniden canlandırır. Cildinize lüks bir bakım sunar. Sabunun içerisinde bulunan kabak lifleri, cildinizi nazikçe temizler ve ölü deriyi giderir. Cilt dokusunu düzeltir ve cildinizi pürüzsüzleştirir.\r\n\r\nSadece en saf ve doğal bileşenlerle üretilmiştir. Cildinizi kimyasallardan uzak tutar. Bu özel sabunun hafif ve doğal bir kokusu vardır. Duş veya banyo sonrası cildinize tazelik kazandırır.', 1000, 100, 130),
(10, 'SET001', '8684349871037', 'Chopar Ekonomik Sabun Paketi - 2 Adet Aloe Vera Özlü Sabun 130g ve 2 Adet Pirinç Özlü Sabun 130g', 'Ekonomik Sabun Paketi, doğal güzellik ve sağlık için en iyi seçenekleri sunar. Bu özel paket, 2 adet Aloe Vera özlü sabun ve 2 adet Pirinç özlü sabun içerir. Aloe Vera ve Pirinç\'in benzersiz cilt bakım faydalarını bir araya getirir, böylece cildinizi nazikçe temizlerken besler ve yeniler.\r\n\r\n\r\nAloe Vera Özlü Sabunlar:\r\nAloe Vera, cildin derinlemesine nemlenmesine yardımcı olurken tahrişleri hafifletir. Aloe Vera özlü sabunlar, cildi rahatlatır ve canlandırır.\r\n\r\n\r\nPirinç Özlü Sabunlar:\r\nPirinç özlü sabunlar, cildinizi besler ve nemlendirirken cilt tonunu dengelemeye yardımcı olur. Ayrıca cildin yeniden canlanmasına katkıda bulunabilirler.\r\n\r\n\r\nFaydalar:\r\nDoğal ve Organik İçerikler\r\nCildi Temizler ve Besler\r\nCilt Tonunu Dengelemeye Yardımcı Olur\r\nHassas Ciltler İçin Uygundur\r\nKimyasal Katkı Maddesi İçermez\r\n\r\n\r\nKullanım Talimatları:\r\nIslak cilde sabunu nazikçe masaj yaparak uygulayın, ardından bol su ile durulayın. Günlük cilt bakım rutininizin bir parçası olarak kullanılabilir.\r\n\r\n\r\nUyarılar:\r\nSadece harici kullanım içindir. Göz ile temasından kaçının. Çocukların erişemeyeceği bir yerde saklayın. Ürünlerinizi serin ve kuru bir yerde muhafaza edin.\r\n\r\n\r\nEkonomik Sabun Paketi, doğal cilt bakımını tercih edenler için mükemmel bir seçenektir. Aloe Vera ve Pirinç özlü sabunların güzelliklerini deneyimleyin ve sağlıklı, canlı bir cilt elde etmek için bu özel paketi keşfedin.', 250, 250, 350),
(11, 'RO001', '', 'Chopar Roll-on', 'Chopar Roll-On Deodorant, günlük yaşamınızda size tazelik, rahatlık ve güven sağlayacak mükemmel bir seçenektir. Aktif bir yaşam tarzı ve uzun çalışma saatleri için tasarlanmış olan bu deodorant, her adımda sizi ferah ve kendinden emin hissettirecek.\r\n\r\nCilt dostu formülü sayesinde cildinizi korur ve tahriş etmez.\r\n\r\nbenzersiz kokusu, ferahlatıcı ve canlandırıcıdır. Kötü kokuları nötralize eder ve sizi taze tutar.\r\n\r\nElbiselerinizde leke bırakmaz.\r\n\r\nFerah ve ter kokusundan uzak bir deneyimi Chopar Roll-On ile yaşayabilirsiniz.', 1000, 150, 200),
(12, 'BE001', '', 'Chopar Beyazlatıcı Cilt Bakım Serumu', 'Chopar Beyazlatıcı Cilt Bakım Serumu, cildinize berraklık ve ışıltı kazandırmak için özel olarak formüle edilmiştir. Lüks ve kaliteli markamız, bu ürünle cildinizi aydınlatırken aynı zamanda cilt sağlığınıza özen gösterir.\r\n\r\nChopar Beyazlatıcı Cilt Bakım Serumu, tüm cilt tipleri için uygundur. Lekeleri azaltmak, cildinizi aydınlatmak ve gençleştirmek isteyen herkes bu ürünü güvenle kullanabilir.\r\n\r\nFormülündeki özel bileşenler, cilt sağlığını destekler ve cilt bariyerini güçlendirir. Serum, yaşlanma belirtilerini hafifletmeye yardımcı olur ve ciltteki ince çizgilerin ve kırışıklıkların görünümünü azaltır.\r\n\r\nChopar Beyazlatıcı Cilt Bakım Serumu ile cildinizin tonunu düzenlerken cildinizi güçlendirip daha genç kalacaksınız.', 1000, 170, 200),
(13, 'MD001', '', 'Chopar Maderise Yanık Kremi', 'Chopar Maderise Yanık Kremi, cilt sağlığınıza özen gösterirken yanık ve tahriş olmuş cildinizi rahatlatmaya ve yeniden canlandırmaya yardımcı olur. Chopard\'un lüks ve kaliteli markası, cilt bakımınızı özel kılar.\r\n\r\nFormülündeki özel bileşenler, cildinize anti-inflamatuar etki sağlar ve kızarıklığı azaltır. Güneş yanığı, cilt tahrişi, sıcak su yanığı gibi sorunlarda hızla etkili olur ve cildinizin rahatlamasına yardımcı olur.\r\n\r\nHafif dokusu, hızla emilir ve ciltte yağlı bir his bırakmaz. Anında rahatlama sağlar.\r\n\r\nChopar Maderise Yanık Kremi, cildinizde oluşan yanık ve tahrişi giderir ve cildinizde hızlıca emilir.', 1000, 120, 150),
(14, 'PM001', '', 'Chopar Peeling Krem Maske', 'Chopar Peeling Krem Maske, cildinizin doğal güzelliğini ortaya çıkarmak ve yeniden canlandırmak için özel olarak geliştirilmiştir. Chopar\'ın lüks markası, cilt bakımınıza zarafet ve kalite katmaya yardımcı olur.\r\n\r\nDermatologlar tarafından test edilmiş ve onaylanmıştır. Cildinize güvenle uygulayabilirsiniz.\r\n\r\nBu özel maske, cildinizdeki ölü deriyi nazikçe temizler ve tıkalı gözenekleri açar. Cildinizin daha pürüzsüz ve canlı bir görünüme kavuşmasına yardımcı olur.\r\n\r\nPeeling işlemi, ince çizgileri azaltmaya ve cildin elastikiyetini artırmaya yardımcı olabilir. Cildiniz daha genç ve sağlıklı görünebilir.\r\n\r\nChopar Peeling Krem Maske ile cildinizi derinlemesine temizleyerek daha canlı ve yumuşak bir cilde sahip olabilirsiniz.', 1000, 140, 180);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `kod_mail` text CHARACTER SET latin1 NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text CHARACTER SET latin1 NOT NULL,
  `kod` text CHARACTER SET latin1 NOT NULL,
  `telefon` text CHARACTER SET latin1 NOT NULL,
  `mail` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `toptan`
--
ALTER TABLE `toptan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`resim`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `toptan`
--
ALTER TABLE `toptan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
