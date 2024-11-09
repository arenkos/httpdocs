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
			}else{
				$ogrenci_no = "";
			}
		}
		$ogrenci_ad_soyad = $_POST['ogrenci_ad_soyad'];
		
    ?>
    <style>
        .disabled {
            pointer-events: none; /* Kullanıcının tıklamasını engelle */
            opacity: 0.5; /* Görsel olarak engelli durumu belirt */
        }
		tr {
            border: 2px solid black; /* Her hücreye siyah kenarlık ekle */
            padding: 3px; /* Hücre içindeki içerikten kenara mesafe bırak */
            text-align: left; /* İçeriği sola hizala */
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
    <form action="goster_toplu.php" method="POST">
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
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['akademik_durum'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>

            <br><label>Öğrencinin derslere katılım düzeyi nasıldır?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['katilim_duzeyi'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <br><label>Öğrencinin bireysel çalışma alışkanlıkları nasıl?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['calisma_aliskanliklari'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <h3>Davranış ve Sosyal Uyumluluk</h3>

            <label>Öğrencinin sınıf arkadaşları ile olan ilişkilerini nasıl değerlendiriyorsunuz?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['sosyal_iliskiler'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <br><label>Öğrencinin okul kurallarına uyum sağlama düzeyi nasıldır?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['uyum_duzeyi'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <br><label>Rehberlik ihtiyacı olabilecek bir davranış gözlemlediniz mi?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['rehberlik_ihtiyaci'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <h3>Motivasyon ve Öğrenme Tutumları</h3>

            <label>Öğrencinin öğrenme motivasyonu hakkında ne düşünüyorsunuz?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['motivasyon'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <br><label>Öğrenci kendisine verilen görevleri ne kadar sorumlulukla yerine getiriyor?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['gorev_sorumluluk'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <h3>Öğrencinin Güçlü Yönleri ve Gelişim Alanları</h3>

            <label>Bu öğrencinin güçlü yönlerini nasıl değerlendiriyorsunuz?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['guclu_yonler'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <br><label>Öğrencinin gelişim ihtiyacı olduğunu düşündüğünüz alanlar hangileridir?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['gelisim_ihtiyaci'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            <h3>Rehberlik ve Destek İhtiyaçları</h3>

            <label>Öğrencinin rehberlik desteğine ihtiyacı olduğunu düşünüyor musunuz?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['rehberlik_destegi'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
            ."<br>"<label>Eklemek istediğiniz başka bir öneriniz veya gözleminiz var mı?</label><br>
<?php
	$sql = "SELECT * FROM ogretmen_gozlem WHERE ogrenci_no LIKE '$ogrenci_no'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) { 
		echo "<table style='border-spacing: 15px;'>";
		echo "<tr><th>Öğretmen</th><th>Değerlendirme</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$veri = $row['ek_gorus'];
			$ogretmen_mail = $row['ogretmen_mail'];
			echo "<tr><td>" . $ogretmen_mail . "</td><td>" . $veri . "</td></tr>";
		}
		echo "</table>";
	}
?>
        </div>
    </div>
</body>
</html>
