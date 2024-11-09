<?php
session_start();
?>
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
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?>
    <div id="t" class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; height: auto; max-width:100%;">
        <div id="tikla"><p style="color:white;" onclick="showForm()">Teklif Formu için Tıklayınız</p></div>
        <div id="teklif" style="visibility:hidden;width:100%;"><?php include 'teklif_formu_mobil.php'; ?></div>
        <script>
            function showForm() {
                var teklifDiv = document.getElementById("teklif");
                var div = document.getElementById("t");
                var tikla = document.getElementById("tikla");
                teklifDiv.style.visibility = "visible";
                tikla.style.display = "none";
                teklifDiv.style.backgroundColor= "black";
                div.style.backgroundImage= "";
            }
        </script>
    </div>
    <?php
}else{ ?>
<div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; height: 100vh; max-width:100%;">
<?php include 'teklif_formu.php'; ?>
</div>
    <?php }
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

    <form method="POST" action="kayit.php">
        <table style="margin:0 auto;">
            <tr>
                <td>
                    <p style="color:white;">Ad:<p>
                </td>
                <td>
                    <input type="text" name="ad" placeholder="Ad" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color:white;">Soyad:<p>
                </td>
                <td>
                    <input type="text" name="soyad" placeholder="Soyad" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color:white;">Mail:<p>
                </td>
                <td>
                    <input type="text" name="mail" placeholder="Mail" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color:white;">Telefon:<p>
                </td>
                <td>
                    <input type="text" name="telefon" placeholder="Telefon" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color:white;">Şifre:<p>
                </td>
                <td>
                    <input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color:white;">Adres:<p>
                </td>
                <td>
                    <input type="text" name="adres" placeholder="Adres" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" value="Kayıt Ol" style="text-align: center;">
                </td>
            </tr>
        </table>
    </form>

<div style="margin:0 auto;">
<?php
if (isset($_POST['ad']) && isset($_POST['soyad']) && isset($_POST['mail']) && isset($_POST['telefon']) && isset($_POST['sifre']) && isset($_POST['adres'])) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $mail = $_POST['mail'];
    $telefon = $_POST['telefon'];
    $telefon = ltrim($telefon, '0');
    $sifre = $_POST['sifre'];
    $adres = $_POST['adres'];

    if ($ad == "" || $soyad == "" || $mail == "" || $telefon == "" || $sifre == "" || $adres == "") {
        echo "Lütfen bilgileri eksiksiz girin";
    } else {
        // Kullanıcının daha önce kayıtlı olup olmadığını kontrol et
        $sql = "SELECT * FROM kullanici WHERE mail = '$mail' OR numara = '$telefon'";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Girilen Mail veya Telefon sistemde mevcut";
        } else {
            // Yeni kullanıcı kaydını veritabanına ekle
            $sql = "INSERT INTO kullanici (ad, soyad, mail, numara, sifre, adres) VALUES ('$ad', '$soyad', '$mail', '$telefon', '$sifre', '$adres')";
            mysqli_set_charset($connection, "utf8");

            if (mysqli_query($connection, $sql)) {
                echo "Kayıt başarıyla oluşturuldu";
            } else {
                echo "Kayıt oluşturulurken bir hata oluştu: " . mysqli_error($connection);
            }
        }
    }
}
?>
</div>

    <?php include 'footer.php' ?>
</body>
</html>
