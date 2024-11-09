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
        $sql = "SELECT * FROM agos ORDER BY tarih DESC";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        $reklam = 1;
        if (mysqli_num_rows($result) > 0) {
            $akis = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $baslik = $row['baslik'];
                $tarih = $row['tarih'];
                $haber_url = $row['haber_url'];
                $akis = $akis + 1;
                if($akis==4){
                    break;
                }
            }
        }
    ?>

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
		function toggleInput(enable) {
			document.getElementById("ekGorusInput").disabled = !enable;
		}
    </script>
</head>
<body style="margin:0 auto;background-color:#FFFFFF;width:100%;height:100%;">
	<div style="margin:0 auto;background-color:#E1EFFF;width:50%;height:100%;padding:50px;">
    <header style="margin:0 auto;text-align:center;">
		<img src="sht.svg" style="width:150px;height:auto;">
		<h1>Öğretmen Gözlem Anketi</h1>
    </header>
    <div style="height:50px;">
    </div>
    <form action="gonder.php" method="POST">
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
        <div id="anket">
            <h3>Akademik Performans Değerlendirmesi</h3>
            
            <label>Öğrencinin genel akademik durumu hakkında ne düşünüyorsunuz?</label><br>
            <label><input type="radio" name="akademik_durum" value="Çok iyi" required> Çok iyi</label><br>
            <label><input type="radio" name="akademik_durum" value="İyi"> İyi</label><br>
            <label><input type="radio" name="akademik_durum" value="Orta"> Orta</label><br>
            <label><input type="radio" name="akademik_durum" value="Zayıf"> Zayıf</label><br>

            <br><label>Öğrencinin derslere katılım düzeyi nasıldır?</label><br>
            <label><input type="radio" name="katilim_duzeyi" value="Çok yüksek" required> Çok yüksek</label><br>
            <label><input type="radio" name="katilim_duzeyi" value="Yüksek"> Yüksek</label><br>
            <label><input type="radio" name="katilim_duzeyi" value="Orta"> Orta</label><br>
            <label><input type="radio" name="katilim_duzeyi" value="Düşük"> Düşük</label><br>

            <br><label>Öğrencinin bireysel çalışma alışkanlıkları nasıl?</label><br>
            <label><input type="radio" name="calisma_aliskanliklari" value="Düzenli ve verimli çalışıyorlar" required> Düzenli ve verimli çalışıyorlar</label><br>
            <label><input type="radio" name="calisma_aliskanliklari" value="Çoğunlukla düzenli çalışıyorlar"> Çoğunlukla düzenli çalışıyorlar</label><br>
            <label><input type="radio" name="calisma_aliskanliklari" value="Arada sırada çalışıyorlar"> Arada sırada çalışıyorlar</label><br>
            <label><input type="radio" name="calisma_aliskanliklari" value="Çalışma alışkanlıkları yok"> Çalışma alışkanlıkları yok</label><br>

            <br><h3>Davranış ve Sosyal Uyumluluk</h3>

            <label>Öğrencinin sınıf arkadaşları ile olan ilişkilerini nasıl değerlendiriyorsunuz?</label><br>
            <label><input type="radio" name="sosyal_iliskiler" value="Çok iyi" required> Çok iyi</label><br>
            <label><input type="radio" name="sosyal_iliskiler" value="İyi"> İyi</label><br>
            <label><input type="radio" name="sosyal_iliskiler" value="Orta"> Orta</label><br>
            <label><input type="radio" name="sosyal_iliskiler" value="Zayıf"> Zayıf</label><br>

            <br><label>Öğrencinin okul kurallarına uyum sağlama düzeyi nasıldır?</label><br>
            <label><input type="radio" name="uyum_duzeyi" value="Tamamen uyar" required> Tamamen uyar</label><br>
            <label><input type="radio" name="uyum_duzeyi" value="Çoklukla uyar"> Çoğunlukla uyar</label><br>
            <label><input type="radio" name="uyum_duzeyi" value="Zaman zaman uyar"> Zaman zaman uyar</label><br>
            <label><input type="radio" name="uyum_duzeyi" value="Uyum göstermekte zorlanır"> Uyum göstermekte zorlanır</label><br>

            <br><label>Rehberlik ihtiyacı olabilecek bir davranış gözlemlediniz mi?</label><br>
            <label><input type="radio" name="rehberlik_ihtiyaci" value="Sıkça gözlemledim" required> Evet, sıkça gözlemledim</label><br>
            <label><input type="radio" name="rehberlik_ihtiyaci" value="Bazen gözlemledim"> Evet, bazen gözlemledim</label><br>
            <label><input type="radio" name="rehberlik_ihtiyaci" value="Hayır gözlemlemedim"> Hayır, gözlemlemedim</label><br>

            <br><h3>Motivasyon ve Öğrenme Tutumları</h3>

            <label>Öğrencinin öğrenme motivasyonu hakkında ne düşünüyorsunuz?</label><br>
            <label><input type="radio" name="motivasyon" value="Çok motive" required> Çok motive</label><br>
            <label><input type="radio" name="motivasyon" value="Orta seviyede motive"> Orta seviyede motive</label><br>
            <label><input type="radio" name="motivasyon" value="Düşük motivasyon"> Düşük motivasyon</label><br>

            <br><label>Öğrenci kendisine verilen görevleri ne kadar sorumlulukla yerine getiriyor?</label><br>
            <label><input type="radio" name="gorev_sorumluluk" value="Her zaman yerine getiriyor" required> Her zaman yerine getiriyor</label><br>
            <label><input type="radio" name="gorev_sorumluluk" value="Çoğunlukla yerine getiriyor"> Çoğunlukla yerine getiriyor</label><br>
            <label><input type="radio" name="gorev_sorumluluk" value="Bazen yerine getiriyor"> Bazen yerine getiriyor</label><br>
            <label><input type="radio" name="gorev_sorumluluk" value="Nadiren yerine getiriyor"> Nadiren yerine getiriyor</label><br>

            <br><h3>Öğrencinin Güçlü Yönleri ve Gelişim Alanları</h3>

            <label>Bu öğrencinin güçlü yönlerini nasıl değerlendiriyorsunuz?</label><br>
            <label><input type="radio" name="guclu_yonler" value="Akademik olarak güçlü" required> Akademik olarak güçlü</label><br>
            <label><input type="radio" name="guclu_yonler" value="Sosyal becerilerde güçlü"> Sosyal becerilerde güçlü</label><br>
            <label><input type="radio" name="guclu_yonler" value="Hem akademik hem sosyal olarak güçlü"> Hem akademik hem sosyal olarak güçlü</label><br>
            <label><input type="radio" name="guclu_yonler" value="Henüz öne çıkan bir güçlü yön gözlemlemedim"> Henüz öne çıkan bir güçlü yön gözlemlemedim</label><br>

            <br><label>Öğrencinin gelişim ihtiyacı olduğunu düşündüğünüz alanlar hangileridir?</label><br>
            <label><input type="radio" name="gelisim_ihtiyaci" value="Akademik gelişim" required> Akademik gelişim</label><br>
            <label><input type="radio" name="gelisim_ihtiyaci" value="Sosyal beceriler"> Sosyal beceriler</label><br>
            <label><input type="radio" name="gelisim_ihtiyaci" value="Öz disiplin ve sorumluluk"> Öz disiplin ve sorumluluk</label><br>
            <label><input type="radio" name="gelisim_ihtiyaci" value="Başka bir alanda"> Başka bir alanda</label><br>

            <br><h3>Rehberlik ve Destek İhtiyaçları</h3>

            <br><label>Öğrencinin rehberlik desteğine ihtiyacı olduğunu düşünüyor musunuz?</label><br>
            <label><input type="radio" name="rehberlik_destegi" value="Evet, akademik alanda" required> Evet, akademik alanda</label><br>
            <label><input type="radio" name="rehberlik_destegi" value="Evet, sosyal uyum alanında"> Evet, sosyal uyum alanında</label><br>
            <label><input type="radio" name="rehberlik_destegi" value="Evet, davranış yönetimi alanında"> Evet, davranış yönetimi alanında</label><br>
            <label><input type="radio" name="rehberlik_destegi" value="Hayır, rehberlik ihtiyacı bulunmuyor"> Hayır, rehberlik ihtiyacı bulunmuyor</label><br>

            <br><label>Eklemek istediğiniz başka bir öneriniz veya gözleminiz var mı?</label><br>
            <label><input type="radio" name="ek_gorus" value="Evet, öğrencinin özel bir durumu var" onclick="toggleInput(true)" required> Evet, öğrencinin özel bir durumu var</label><br>
			<input type="text" id="ekGorusInput" name="ek_gorus" placeholder="Belirtiniz..." disabled>
            <br><label><input type="radio" name="ek_gorus" value="Hayır, eklemem yok" onclick="toggleInput(false)"> Hayır, eklemem yok</label><br>

            <br><br><input type="submit" value="Gönder" style="margin:0 auto;text-align:center;display:flex;font-size:15px;">
        </div>
    </form>
    </div>
</body>
</html>
