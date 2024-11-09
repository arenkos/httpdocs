<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmen Gözlem Anketi</title>
    <?php
        //require_once 'veritabani_agos.php';
        $servername = "localhost:3306";
        $username = "aren";
        $password = "Arenkos1.";
        $database = "sht";

        $connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
        
		if(isset($_POST['password'])){
			if($_POST['password']=="sht1953"){
				$ogrenci_no = $_POST['ogrenciler'];
				$ogretmen_mail = $_POST['ogretmen_mail'];
			}else{
				$ogrenci_no = "";
				$ogretmen_mail = "";
			}
		}

        $sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no' AND ogretmen_mail LIKE '$ogretmen_mail'";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $akademik_durum = $row['akademik_durum'];
                $katilim_duzeyi = $row['katilim_duzeyi'];
                $calisma_aliskanliklari = $row['calisma_aliskanliklari'];
                $sosyal_iliskiler = $row['sosyal_iliskiler'];
                $uyum_duzeyi = $row['uyum_duzeyi'];
                $rehberlik_ihtiyaci = $row['rehberlik_ihtiyaci'];
                $motivasyon = $row['motivasyon'];
                $gorev_sorumluluk = $row['gorev_sorumluluk'];
                $guclu_yonler = $row['guclu_yonler'];
                $gelisim_ihtiyaci = $row['gelisim_ihtiyaci'];
                $rehberlik_destegi = $row['rehberlik_destegi'];
                $ek_gorus = $row['ek_gorus'];
				$ogrenci_ad_soyad = $row['ogrenci_ad_soyad'];
				$ogrenci_ad_soyad = $_POST['ogrenci_ad_soyad'];
            }
        }
		
		$ogrenci_ad_soyad = $_POST['ogrenci_ad_soyad'];
    ?>
    <style>
        .disabled {
            pointer-events: none; /* Kullanıcının tıklamasını engelle */
            opacity: 0.5; /* Görsel olarak engelli durumu belirt */
        }
    </style>
    <script>
        function sinifSecildi() {
            // Tüm öğrenci listelerini gizle
            document.getElementById("ogrenciler_9").style.display = "none";
            document.getElementById("ogrenciler_10").style.display = "none";

            // Seçilen sınıfa göre öğrenci listesini göster
            var sinif = document.getElementById("sinif").value;
            document.getElementById("ogrenciler_" + sinif).style.display = "block";
            
            // Formu sıfırla
            document.getElementById("anketForm").reset();
        }

        function ogrenciSecildi() {
            // Seçilen öğrenciye göre anket cevapları daha önce gönderilmişse cevapları kilitle
            var sinif = document.getElementById("sinif").value;
            var ogrenciSelect = document.getElementById("ogrenciler_" + sinif);
            var ogrenciId = ogrenciSelect.value;
            var ogrenciAdSoyad = ogrenciSelect.options[ogrenciSelect.selectedIndex].text;
            // Öğrenci adı soyadını gizli input alanına ekle
            document.getElementById("ogrenci_ad_soyad").value = ogrenciAdSoyad;

            
            // Örnek: Daha önce gönderilmiş cevapları kilitle
            // Not: Bu örnek veri tabanından veya API'den gerçek verilere göre ayarlanmalıdır
            
            // Formu sıfırla ve kilidi kaldır
            document.getElementById("anketForm").reset();
            var inputs = document.getElementById("anketForm").querySelectorAll("input");
            inputs.forEach(function(input) {
                input.disabled = false;
            });
            
        }
    </script>
</head>
<body style="margin:0 auto;background-color:#FFFFFF;width:100%;height:100%;">
	<div style="margin:0 auto;background-color:#E1EFFF;width:50%;height:100%;padding:50px;">
    <header style="margin:0 auto;text-align:center;">
		<img src="sht.svg" style="width:150px;height:auto;">
		<h1>Öğretmen Gözlem Anketi</h1>
		<br><br><h3><?php echo $ogrenci_ad_soyad; ?></h3>
    </header>
    <div style="height:50px;">
    </div>
    <form action="goster.php" method="POST">
        <label for="ogretmen_mail">Öğretmen Mail:</label>
        <input type="text" id="ogretmen_mail" name="ogretmen_mail" required>
        <br>
        <label for="sinif">Sınıf Seçin:</label>
        <select id="sinif" name="sinif" onchange="sinifSecildi()" style="display:flex;" required>
			<option value="" disabled selected>Seçiniz</option>
            <option value="9">9.Sınıf</option>
            <option value="10">10.Sınıf</option>
        </select>
        <br>
        <label for="ogrenciler">Öğrenci Seçin:</label>
        <select id="ogrenciler_9" name="ogrenciler" onchange="ogrenciSecildi()" style="display:none;">
			<option value="" disabled selected>Seçiniz</option>
            <option value="147">Amur Vahan ŞİRİN</option>
            <option value="149">Aren AVİDOĞLU</option>
            <option value="156">Alara BAKIRCIOĞLU</option>
            <option value="167">Melin BAKIRCI</option>
            <option value="175">Alin Su YAMAÇİ</option>
            <option value="177">Arek Azad ÇATAK</option>
            <option value="178">Letisya TABAŞ</option>
            <option value="179">Lorin CAMGÖZ</option>
            <option value="180">Mira KARAHAN</option>
            <option value="181">Paylin KÜRKÇÜOĞLU</option>
            <option value="182">Mira ALKANLI</option>
            <option value="183">Derun Arek AYAZ</option>
            <option value="186">Yulyana ERDEM</option>
            <option value="188">Sarin YELEGEN</option>
            <option value="189">Arda ÇOLAKYAN</option>
            <option value="190">Dikran Roy CEVAHİRYAN</option>
            <option value="191">Nensi Nıvart ETYEMEZ</option>
            <option value="192">Arden ASA</option>
            <option value="193">Müjde Fehime SİN</option>
            <option value="195">Ares TEMİR</option>
            <option value="196">Norvan Daron PEYNİRCİ</option>
            <option value="199">Lara ÇİLİNGİR</option>
            <option value="200">Agop Murat YILANCIOĞLU</option>
            <option value="201">Lukas BOCALIYAN</option>
            <option value="208">Arek YARDIM</option>
            <option value="212">Mikael MERDİROSYAN</option>
        </select>
        <select id="ogrenciler_10" name="ogrenciler" onchange="ogrenciSecildi()" style="display:none;">
			<option value="" disabled selected>Seçiniz</option>
            <option value="131">Aleks MALHASOĞLU</option>
            <option value="169">Lia PORTAKALYAN</option>
            <option value="143">ARDA DURA</option>
            <option value="144">Masis HAÇİKYAN</option>
            <option value="145">Matias ATSUP</option>
            <option value="178">Jan İNCİYAN</option>
            <option value="152">Mişa TOPÇU</option>
            <option value="153">Melani GÜLÜKOĞLU</option>
            <option value="157">Arlin KİRPİKYAN</option>
            <option value="159">Alis YOLUSEVER</option>
            <option value="160">Elis BAKIRCIOĞLU</option>
            <option value="165">Lia Nirva ASATOR</option>
            <option value="166">Roy GÜREL</option>
            <option value="171">Jessica SAĞLAMOĞLU</option>
            <option value="210">Lusin HİLKAT</option>
            <option value="211">Sandra Mina ALTINIŞIK</option>
            <option value="0">Marieta ÇOBANYAN</option>
        </select>
        <input type="hidden" id="ogrenci_ad_soyad" name="ogrenci_ad_soyad" value="">
        <br><br><input type="password" id="password" name="password" placeholder="Şifre..." required>
        <input type="submit" value="Göster">
    </form>
        <div id="anket">
            <h3>Akademik Performans Değerlendirmesi</h3>
            
            <label>Öğrencinin genel akademik durumu hakkında ne düşünüyorsunuz?</label><br>
<?php
    switch($akademik_durum){
        case "Çok iyi": ?>
            <input type="radio" name="akademik_durum" value="Çok iyi" checked disabled class="disabled"> Çok iyi</label><br>
            <input type="radio" name="akademik_durum" value="İyi"> İyi</label><br>
            <input type="radio" name="akademik_durum" value="Orta"> Orta</label><br>
            <input type="radio" name="akademik_durum" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "İyi": ?>
            <input type="radio" name="akademik_durum" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="akademik_durum" value="İyi" checked disabled class="disabled"> İyi</label><br>
            <input type="radio" name="akademik_durum" value="Orta"> Orta</label><br>
            <input type="radio" name="akademik_durum" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "Orta": ?>
            <input type="radio" name="akademik_durum" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="akademik_durum" value="İyi"> İyi</label><br>
            <input type="radio" name="akademik_durum" value="Orta" checked disabled class="disabled"> Orta</label><br>
            <input type="radio" name="akademik_durum" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "Zayıf": ?>
            <input type="radio" name="akademik_durum" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="akademik_durum" value="İyi"> İyi</label><br>
            <input type="radio" name="akademik_durum" value="Orta"> Orta</label><br>
            <input type="radio" name="akademik_durum" value="Zayıf" checked disabled class="disabled"> Zayıf</label><br>
<?php
            break;
    }
?>

            <br><label>Öğrencinin derslere katılım düzeyi nasıldır?</label><br>
<?php
    switch($katilim_duzeyi){
        case "Çok yüksek": ?>
            <input type="radio" name="katilim_duzeyi" value="Çok yüksek" checked disabled class="disabled"> Çok yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Yüksek"> Yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Orta"> Orta</label><br>
            <input type="radio" name="katilim_duzeyi" value="Düşük"> Düşük</label><br>
<?php
            break;
        case "Yüksek": ?>
            <input type="radio" name="katilim_duzeyi" value="Çok yüksek"> Çok yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Yüksek" checked disabled class="disabled"> Yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Orta"> Orta</label><br>
            <input type="radio" name="katilim_duzeyi" value="Düşük"> Düşük</label><br>
<?php
            break;
        case "Orta": ?>
            <input type="radio" name="katilim_duzeyi" value="Çok yüksek"> Çok yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Yüksek"> Yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Orta" checked disabled class="disabled"> Orta</label><br>
            <input type="radio" name="katilim_duzeyi" value="Düşük"> Düşük</label><br>
<?php
            break;
        case "Düşük": ?>
            <input type="radio" name="katilim_duzeyi" value="Çok yüksek"> Çok yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Yüksek"> Yüksek</label><br>
            <input type="radio" name="katilim_duzeyi" value="Orta"> Orta</label><br>
            <input type="radio" name="katilim_duzeyi" value="Düşük" checked disabled class="disabled"> Düşük</label><br>
<?php
            break;
    }
?>
            <br><label>Öğrencinin bireysel çalışma alışkanlıkları nasıl?</label><br>
<?php
    switch($calisma_aliskanliklari){
        case "Düzenli ve verimli çalışıyorlar": ?>
            <input type="radio" name="calisma_aliskanliklari" value="Düzenli ve verimli çalışıyorlar" checked disabled class="disabled"> Düzenli ve verimli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çoğunlukla düzenli çalışıyorlar"> Çoğunlukla düzenli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Arada sırada çalışıyorlar"> Arada sırada çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çalışma alışkanlıkları yok"> Çalışma alışkanlıkları yok</label><br>
<?php
            break;
        case "Çoğunlukla düzenli çalışıyorlar": ?>
            <input type="radio" name="calisma_aliskanliklari" value="Düzenli ve verimli çalışıyorlar"> Düzenli ve verimli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çoğunlukla düzenli çalışıyorlar" checked disabled class="disabled"> Çoğunlukla düzenli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Arada sırada çalışıyorlar"> Arada sırada çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çalışma alışkanlıkları yok"> Çalışma alışkanlıkları yok</label><br>
<?php
            break;
        case "Arada sırada çalışıyorlar": ?>
            <input type="radio" name="calisma_aliskanliklari" value="Düzenli ve verimli çalışıyorlar"> Düzenli ve verimli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çoğunlukla düzenli çalışıyorlar"> Çoğunlukla düzenli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Arada sırada çalışıyorlar" checked disabled class="disabled"> Arada sırada çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çalışma alışkanlıkları yok"> Çalışma alışkanlıkları yok</label><br>
<?php
            break;
        case "Çalışma alışkanlıkları yok": ?>
            <input type="radio" name="calisma_aliskanliklari" value="Düzenli ve verimli çalışıyorlar"> Düzenli ve verimli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çoğunlukla düzenli çalışıyorlar"> Çoğunlukla düzenli çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Arada sırada çalışıyorlar"> Arada sırada çalışıyorlar</label><br>
            <input type="radio" name="calisma_aliskanliklari" value="Çalışma alışkanlıkları yok" checked disabled class="disabled"> Çalışma alışkanlıkları yok</label><br>
<?php
            break;
    }
?>
            <h3>Davranış ve Sosyal Uyumluluk</h3>

            <label>Öğrencinin sınıf arkadaşları ile olan ilişkilerini nasıl değerlendiriyorsunuz?</label><br>
<?php
    switch($sosyal_iliskiler){
        case "Çok iyi": ?>
            <input type="radio" name="sosyal_iliskiler" value="Çok iyi" checked disabled class="disabled"> Çok iyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="İyi"> İyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Orta"> Orta</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "İyi": ?>
            <input type="radio" name="sosyal_iliskiler" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="İyi" checked disabled class="disabled"> İyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Orta"> Orta</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "Orta": ?>
            <input type="radio" name="sosyal_iliskiler" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="İyi"> İyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Orta" checked disabled class="disabled"> Orta</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Zayıf"> Zayıf</label><br>
<?php
            break;
        case "Zayıf": ?>
            <input type="radio" name="sosyal_iliskiler" value="Çok iyi"> Çok iyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="İyi"> İyi</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Orta"> Orta</label><br>
            <input type="radio" name="sosyal_iliskiler" value="Zayıf" checked disabled class="disabled"> Zayıf</label><br>
<?php
            break;
    }
?>
            <br><label>Öğrencinin okul kurallarına uyum sağlama düzeyi nasıldır?</label><br>
<?php
    switch($uyum_duzeyi){
        case "Tamamen uyar": ?>
            <input type="radio" name="uyum_duzeyi" value="Tamamen uyar" checked disabled class="disabled"> Tamamen uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Çoklukla uyar"> Çoğunlukla uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Zaman zaman uyar"> Zaman zaman uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Uyum göstermekte zorlanır"> Uyum göstermekte zorlanır</label><br>
<?php
            break;
        case "Çoğunlukla uyar": ?>
            <input type="radio" name="uyum_duzeyi" value="Tamamen uyar"> Tamamen uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Çoklukla uyar" checked disabled class="disabled"> Çoğunlukla uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Zaman zaman uyar"> Zaman zaman uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Uyum göstermekte zorlanır"> Uyum göstermekte zorlanır</label><br>
<?php
            break;
        case "Zaman zaman uyar": ?>
            <input type="radio" name="uyum_duzeyi" value="Tamamen uyar"> Tamamen uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Çoklukla uyar"> Çoğunlukla uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Zaman zaman uyar" checked disabled class="disabled"> Zaman zaman uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Uyum göstermekte zorlanır"> Uyum göstermekte zorlanır</label><br>
<?php
            break;
        case "Uyum göstermekte zorlanır": ?>
            <input type="radio" name="uyum_duzeyi" value="Tamamen uyar"> Tamamen uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Çoklukla uyar"> Çoğunlukla uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Zaman zaman uyar"> Zaman zaman uyar</label><br>
            <input type="radio" name="uyum_duzeyi" value="Uyum göstermekte zorlanır" checked disabled class="disabled"> Uyum göstermekte zorlanır</label><br>
<?php
            break;
    }
?>
            <br><label>Rehberlik ihtiyacı olabilecek bir davranış gözlemlediniz mi?</label><br>
<?php
    switch($rehberlik_ihtiyaci){
        case "Sıkça gözlemledim": ?>
            <input type="radio" name="rehberlik_ihtiyaci" value="Sıkça gözlemledim" checked disabled class="disabled"> Evet, sıkça gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Bazen gözlemledim"> Evet, bazen gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Hayır gözlemlemedim"> Hayır, gözlemlemedim</label><br>
<?php
            break;
        case "Bazen gözlemledim": ?>
            <input type="radio" name="rehberlik_ihtiyaci" value="Sıkça gözlemledim"> Evet, sıkça gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Bazen gözlemledim" checked disabled class="disabled"> Evet, bazen gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Hayır gözlemlemedim"> Hayır, gözlemlemedim</label><br>
<?php
            break;
        case "Hayır gözlemlemedim": ?>
            <input type="radio" name="rehberlik_ihtiyaci" value="Sıkça gözlemledim"> Evet, sıkça gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Bazen gözlemledim"> Evet, bazen gözlemledim</label><br>
            <input type="radio" name="rehberlik_ihtiyaci" value="Hayır gözlemlemedim" checked disabled class="disabled"> Hayır, gözlemlemedim</label><br>
<?php
            break;
    }
?>
            <h3>Motivasyon ve Öğrenme Tutumları</h3>

            <label>Öğrencinin öğrenme motivasyonu hakkında ne düşünüyorsunuz?</label><br>
<?php
    switch($motivasyon){
        case "Çok motive": ?>
            <input type="radio" name="motivasyon" value="Çok motive" checked disabled class="disabled"> Çok motive</label><br>
            <input type="radio" name="motivasyon" value="Orta seviyede motive"> Orta seviyede motive</label><br>
            <input type="radio" name="motivasyon" value="Düşük motivasyon"> Düşük motivasyon</label><br>
<?php
            break;
        case "Orta seviyede motive": ?>
            <input type="radio" name="motivasyon" value="Çok motive"> Çok motive</label><br>
            <input type="radio" name="motivasyon" value="Orta seviyede motive" checked disabled class="disabled"> Orta seviyede motive</label><br>
            <input type="radio" name="motivasyon" value="Düşük motivasyon"> Düşük motivasyon</label><br>
<?php
            break;
        case "Düşük motivasyon": ?>
            <input type="radio" name="motivasyon" value="Çok motive"> Çok motive</label><br>
            <input type="radio" name="motivasyon" value="Orta seviyede motive"> Orta seviyede motive</label><br>
            <input type="radio" name="motivasyon" value="Düşük motivasyon" checked disabled class="disabled"> Düşük motivasyon</label><br>
<?php
            break;
    }
?>
            <br><label>Öğrenci kendisine verilen görevleri ne kadar sorumlulukla yerine getiriyor?</label><br>
<?php
    switch($gorev_sorumluluk){
        case "Her zaman yerine getiriyor": ?>
            <input type="radio" name="gorev_sorumluluk" value="Her zaman yerine getiriyor" checked disabled class="disabled"> Her zaman yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Çoğunlukla yerine getiriyor"> Çoğunlukla yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Bazen yerine getiriyor"> Bazen yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Nadiren yerine getiriyor"> Nadiren yerine getiriyor</label><br>
<?php
            break;
        case "Çoğunlukla yerine getiriyor": ?>
            <input type="radio" name="gorev_sorumluluk" value="Her zaman yerine getiriyor"> Her zaman yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Çoğunlukla yerine getiriyor" checked disabled class="disabled"> Çoğunlukla yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Bazen yerine getiriyor"> Bazen yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Nadiren yerine getiriyor"> Nadiren yerine getiriyor</label><br>
<?php
            break;
        case "Bazen yerine getiriyor": ?>
            <input type="radio" name="gorev_sorumluluk" value="Her zaman yerine getiriyor"> Her zaman yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Çoğunlukla yerine getiriyor"> Çoğunlukla yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Bazen yerine getiriyor" checked disabled class="disabled"> Bazen yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Nadiren yerine getiriyor"> Nadiren yerine getiriyor</label><br>
<?php
            break;
        case "Nadiren yerine getiriyor": ?>
            <input type="radio" name="gorev_sorumluluk" value="Her zaman yerine getiriyor"> Her zaman yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Çoğunlukla yerine getiriyor"> Çoğunlukla yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Bazen yerine getiriyor"> Bazen yerine getiriyor</label><br>
            <input type="radio" name="gorev_sorumluluk" value="Nadiren yerine getiriyor" checked disabled class="disabled"> Nadiren yerine getiriyor</label><br>
<?php
            break;
    }
?>
            <h3>Öğrencinin Güçlü Yönleri ve Gelişim Alanları</h3>

            <label>Bu öğrencinin güçlü yönlerini nasıl değerlendiriyorsunuz?</label><br>
<?php
    switch($guclu_yonler){
        case "Akademik olarak güçlü": ?>
            <input type="radio" name="guclu_yonler" value="Akademik olarak güçlü" checked disabled class="disabled"> Akademik olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Sosyal becerilerde güçlü"> Sosyal becerilerde güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Hem akademik hem sosyal olarak güçlü"> Hem akademik hem sosyal olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Henüz öne çıkan bir güçlü yön gözlemlemedim"> Henüz öne çıkan bir güçlü yön gözlemlemedim</label><br>
<?php
            break;
        case "Sosyal becerilerde güçlü": ?>
            <input type="radio" name="guclu_yonler" value="Akademik olarak güçlü"> Akademik olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Sosyal becerilerde güçlü" checked disabled class="disabled"> Sosyal becerilerde güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Hem akademik hem sosyal olarak güçlü"> Hem akademik hem sosyal olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Henüz öne çıkan bir güçlü yön gözlemlemedim"> Henüz öne çıkan bir güçlü yön gözlemlemedim</label><br>
<?php
            break;
        case "Hem akademik hem sosyal olarak güçlü": ?>
            <input type="radio" name="guclu_yonler" value="Akademik olarak güçlü"> Akademik olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Sosyal becerilerde güçlü"> Sosyal becerilerde güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Hem akademik hem sosyal olarak güçlü" checked disabled class="disabled"> Hem akademik hem sosyal olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Henüz öne çıkan bir güçlü yön gözlemlemedim"> Henüz öne çıkan bir güçlü yön gözlemlemedim</label><br>
<?php
            break;
        case "Henüz öne çıkan bir güçlü yön gözlemlemedim": ?>
            <input type="radio" name="guclu_yonler" value="Akademik olarak güçlü"> Akademik olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Sosyal becerilerde güçlü"> Sosyal becerilerde güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Hem akademik hem sosyal olarak güçlü"> Hem akademik hem sosyal olarak güçlü</label><br>
            <input type="radio" name="guclu_yonler" value="Henüz öne çıkan bir güçlü yön gözlemlemedim" checked disabled class="disabled"> Henüz öne çıkan bir güçlü yön gözlemlemedim</label><br>
<?php
            break;
    }
?>
            <br><label>Öğrencinin gelişim ihtiyacı olduğunu düşündüğünüz alanlar hangileridir?</label><br>
<?php
    switch($gelisim_ihtiyaci){
        case "Akademik gelişim": ?>
            <input type="radio" name="gelisim_ihtiyaci" value="Akademik gelişim" checked disabled class="disabled"> Akademik gelişim</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Sosyal beceriler"> Sosyal beceriler</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Öz disiplin ve sorumluluk"> Öz disiplin ve sorumluluk</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Başka bir alanda"> Başka bir alanda</label><br>
<?php
            break;
        case "Sosyal beceriler": ?>
            <input type="radio" name="gelisim_ihtiyaci" value="Akademik gelişim"> Akademik gelişim</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Sosyal beceriler" checked disabled class="disabled"> Sosyal beceriler</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Öz disiplin ve sorumluluk"> Öz disiplin ve sorumluluk</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Başka bir alanda"> Başka bir alanda</label><br>
<?php
            break;
        case "Öz disiplin ve sorumluluk": ?>
            <input type="radio" name="gelisim_ihtiyaci" value="Akademik gelişim"> Akademik gelişim</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Sosyal beceriler"> Sosyal beceriler</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Öz disiplin ve sorumluluk" checked disabled class="disabled"> Öz disiplin ve sorumluluk</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Başka bir alanda"> Başka bir alanda</label><br>
<?php
            break;
        case "Başka bir alanda": ?>
            <input type="radio" name="gelisim_ihtiyaci" value="Akademik gelişim"> Akademik gelişim</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Sosyal beceriler"> Sosyal beceriler</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Öz disiplin ve sorumluluk"> Öz disiplin ve sorumluluk</label><br>
            <input type="radio" name="gelisim_ihtiyaci" value="Başka bir alanda" checked disabled class="disabled"> Başka bir alanda</label><br>
<?php
            break;
    }
?>
            <h3>Rehberlik ve Destek İhtiyaçları</h3>

            <label>Öğrencinin rehberlik desteğine ihtiyacı olduğunu düşünüyor musunuz?</label><br>
<?php
    switch($rehberlik_destegi){
        case "Evet, akademik alanda": ?>
            <input type="radio" name="rehberlik_destegi" value="Evet, akademik alanda" checked disabled class="disabled"> Evet, akademik alanda</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, sosyal uyum alanında"> Evet, sosyal uyum alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, davranış yönetimi alanında"> Evet, davranış yönetimi alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Hayır, rehberlik ihtiyacı bulunmuyor"> Hayır, rehberlik ihtiyacı bulunmuyor</label><br>
<?php
            break;
        case "Evet, sosyal uyum alanında": ?>
            <input type="radio" name="rehberlik_destegi" value="Evet, akademik alanda"> Evet, akademik alanda</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, sosyal uyum alanında" checked disabled class="disabled"> Evet, sosyal uyum alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, davranış yönetimi alanında"> Evet, davranış yönetimi alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Hayır, rehberlik ihtiyacı bulunmuyor"> Hayır, rehberlik ihtiyacı bulunmuyor</label><br>
<?php
            break;
        case "Evet, davranış yönetimi alanında": ?>
            <input type="radio" name="rehberlik_destegi" value="Evet, akademik alanda"> Evet, akademik alanda</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, sosyal uyum alanında"> Evet, sosyal uyum alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, davranış yönetimi alanında" checked disabled class="disabled"> Evet, davranış yönetimi alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Hayır, rehberlik ihtiyacı bulunmuyor"> Hayır, rehberlik ihtiyacı bulunmuyor</label><br>
<?php
            break;
        case "Hayır, rehberlik ihtiyacı bulunmuyor": ?>
            <input type="radio" name="rehberlik_destegi" value="Evet, akademik alanda"> Evet, akademik alanda</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, sosyal uyum alanında"> Evet, sosyal uyum alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Evet, davranış yönetimi alanında"> Evet, davranış yönetimi alanında</label><br>
            <input type="radio" name="rehberlik_destegi" value="Hayır, rehberlik ihtiyacı bulunmuyor" checked disabled class="disabled"> Hayır, rehberlik ihtiyacı bulunmuyor</label><br>
<?php
            break;
    }
?>
            <br><label>Eklemek istediğiniz başka bir öneriniz veya gözleminiz var mı?</label><br>
<?php
    switch($ek_gorus){
        case "Evet, öğrencinin özel bir durumu var": ?>
            <input type="radio" name="ek_gorus" value="Evet, öğrencinin özel bir durumu var" checked disabled class="disabled"> Evet, öğrencinin özel bir durumu var</label><br>
            <input type="radio" name="ek_gorus" value="Hayır, eklemem yok"> Hayır, eklemem yok</label><br>
<?php
            break;
        case "Hayır, eklemem yok": ?>
            <input type="radio" name="ek_gorus" value="Evet, öğrencinin özel bir durumu var"> Evet, öğrencinin özel bir durumu var</label><br>
            <input type="radio" name="ek_gorus" value="Hayır, eklemem yok" checked disabled class="disabled"> Hayır, eklemem yok</label><br>
<?php
            break;
    }
?>
        </div>
    </div>
    
</body>
</html>
