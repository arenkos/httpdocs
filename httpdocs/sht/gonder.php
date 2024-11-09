<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0 auto;background-color:white;">
<?php
    $servername = "localhost:3306";
    $username = "aren";
    $password = "Arenkos1.";
    $database = "sht";

    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    $akademik_durum = $_POST['akademik_durum'];
    $katilim_duzeyi = $_POST['katilim_duzeyi'];
    $calisma_aliskanliklari = $_POST['calisma_aliskanliklari'];
    $sosyal_iliskiler = $_POST['sosyal_iliskiler'];
    $uyum_duzeyi = $_POST['uyum_duzeyi'];
    $rehberlik_ihtiyaci = $_POST['rehberlik_ihtiyaci'];
    $motivasyon = $_POST['motivasyon'];
    $gorev_sorumluluk = $_POST['gorev_sorumluluk'];
    $guclu_yonler = $_POST['guclu_yonler'];
    $gelisim_ihtiyaci = $_POST['gelisim_ihtiyaci'];
    $rehberlik_destegi = $_POST['rehberlik_destegi'];
    $ek_gorus = $_POST['ek_gorus'];
    $ogrenci_ad_soyad = $_POST['ogrenci_ad_soyad'];
    $ogrenci_no = $_POST['ogrenciler'];
    $ogretmen_mail = $_POST['ogretmen_mail'];
    $sinif = $_POST['sinif'];
    $tarih = new DateTime();
    $tarih = $tarih->format('Y-m-d H:i:s');

    $sql = "INSERT INTO ogretmen_gozlem (
        sinif, ogrenci_no, ogrenci_ad_soyad, ogretmen_mail, akademik_durum, 
        katilim_duzeyi, calisma_aliskanliklari, sosyal_iliskiler, uyum_duzeyi, rehberlik_ihtiyaci, 
        motivasyon, gorev_sorumluluk, guclu_yonler, gelisim_ihtiyaci, rehberlik_destegi, ek_gorus, tarih
    ) VALUES (
        '$sinif', '$ogrenci_no', '$ogrenci_ad_soyad', '$ogretmen_mail', '$akademik_durum', 
        '$katilim_duzeyi', '$calisma_aliskanliklari', '$sosyal_iliskiler', '$uyum_duzeyi', '$rehberlik_ihtiyaci', 
        '$motivasyon', '$gorev_sorumluluk', '$guclu_yonler', '$gelisim_ihtiyaci', '$rehberlik_destegi', '$ek_gorus', '$tarih'
    )";
    mysqli_set_charset($connection, "utf8");
    mysqli_query($connection, $sql);
?>
<meta http-equiv="refresh" content="0; URL=anket.php">
</body>
</html>
