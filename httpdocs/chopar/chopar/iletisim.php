<?php
session_start();?>
<!doctype html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-38Y4FWVQ60"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-38Y4FWVQ60');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VBX8LMD');</script>
<!-- End Google Tag Manager -->
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chopar Kozmetik</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
<link rel="icon" href="path/to/your/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'clear.php', true);
        xhr.send();
    });
</script>
</head>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=iletisim-mobil.php">
    <?php
}else{ ?>
<body style="margin:0 auto;background-color:black;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VBX8LMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Veritabanı -->
<?php
    $servername = "localhost:3306";
    $username = "xumchopa_chopar";
    $password = "Chopar2023";
    $database = "xumchopa_chopar";

    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    include 'header.php';
?>

<div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; height: 100vh; max-width:100%;">
    <?php include 'teklif_formu.php'; ?>
</div>
    <?php
    $anlik = date("Y-m-d");
    $usr = $_SESSION['user'];
    $sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1 AND cikis < '$anlik'";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    
    if ($result->num_rows > 0) {
        $sql = "UPDATE kullanici SET oturum=0 WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
        mysqli_set_charset($connection, "utf8");
        mysqli_query($connection, $sql);
    }
    $sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        ?><div style="width:100%;margin:0 auto;text-align:center;"><?php
            $sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
            mysqli_set_charset($connection, "utf8");
            $ad_soyad = mysqli_query($connection, $sql);
            if ($ad_soyad->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($ad_soyad)) {
                    echo "Merhaba " . $row["ad"] . " " . $row["soyad"] . "<br>";
                }
            }?>
        </div>
        <div style="width:100%;margin:0 auto;text-align:center;">
            <form method="post" action="cikis.php">
                <button type="submit" name="logout">Çıkış Yap</button>
            </form>
        </div>
        <?php
        // Veritabanı bağlantısı ve diğer gerekli ayarlar

            if (isset($_POST['logout'])) {
                // Çıkış yap butonuna basıldığında çalışacak kodlar
                $sql = "UPDATE kullanici SET oturum=0 WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
                mysqli_query($connection, $sql);
                
            }
    }else { ?>
        <div>
            <table style="margin:0 auto;">
                <form method="POST" action="kontrol.php">
                    <tr>
                        <td>
                            <input type="text" name="user" placeholder="Mail/Telefon Numarası" style="text-align: center;">
                        </td>
                        <td>
                            <input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
                        </td>
                        <td>
                            <input type="submit" value="Giriş">
                        </td>
                    </form>
                    <td>
                        <a href="kayit.php"><input type="submit" value="Kayıt ol"></a>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>
    <div style="width:100%;margin:0 auto;text-align:center;">
        <form method="POST" action="sorgu.php">
            <input type="text" name="siparis_no" placeholder="Sipariş No(SIPXX)" style="text-align: center;">
            <input type="submit" value="Sorgula">
        </form>
    </div>
	
    <div style="width:80%;height: auto;margin:0 auto;margin-top:30px;">
        
        
        <table style="width:100%;">
            <tr>
                <td>
                    <div id="map" style="height:500px;width:500px;margin:0 auto;"></div>
                    <script>
                        function initMap() {
                            var myLatLng = {lat: 41.032740, lng: 29.176416}; // Örnek bir koordinat (New York City)
                            
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: myLatLng,
                                zoom: 12
                            });

                            var marker = new google.maps.Marker({
                                map: map,
                                position: myLatLng,
                                title: 'Konum Başlığı'
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
                </td>
                <td>
                    <form action="mesaj.php" method="POST" style="text-align:center;width:200px;">
                        <p style="color:white;font-size:30px">İletişim Formu</p>
                        <table style="text-align:left;">
                            <tr>
                                <td>
                                    <label style="color:white;font-size:20px;" for="ad">Ad</label>
                                </td>
                                <td>
                                    <textarea type="text" id="ad" name="ad" rows="1" cols="30" required></textarea><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color:white;font-size:20px;" for="soyad">Soyad</label>
                                </td>
                                <td>
                                    <textarea type="text" id="soyad" name="soyad" rows="1" cols="30" required></textarea><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color:white;font-size:20px;" for="mesaj">Mesaj</label>
                                </td>
                                <td>
                                    <textarea id="mesaj" name="mesaj" rows="4" cols="30"></textarea><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color:white;font-size:20px;" for="telefon">Telefon</label>
                                </td>
                                <td>
                                    <textarea type="text" id="telefon" name="telefon" rows="1" cols="30" required></textarea><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color:white;font-size:20px;" for="email">Email</label>
                                </td>
                                <td>
                                    <textarea type="email" id="email" name="email" rows="1" cols="30" required></textarea><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color:white;">Adres
                                    </p>
                                </td>
                                <td>
                                    <p style="color:white;">Mimar Sinan Mah. Mimar Sinan Cad. Durmuş Delice İş Merkezi No: 25/2 Çekmeköy/İSTANBUL
                                    </p>
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color:white;">Telefon
                                    </p>
                                </td>
                                <td>
                                    <p style="color:white;">0532 663 2677
                                    </p>
                                <td>
                            </tr>
                        </table>

                        <input type="submit" value="Gönder">
                    </form>
                </td>
            </tr>
        <table>
    </div>
	
	
</body>
	
<?php include 'footer.php' ?>

</html>
<?php } ?>
