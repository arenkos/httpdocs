<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>
<!doctype html>
<html>
<head>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chopar Kozmetik</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'clear.php', true);
        xhr.send();
    });
</script>
</head>

<body style="margin:0 auto;color:black;">
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

if (strpos($userAgent, 'Mobile') == false) {
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
    <!-- Ürünler -->
    <div style="width:100%;height: auto;margin:0 auto;text-align:center;margin-top:30px;">
        <?php
            $ad = $_POST['ad'];
            $soyad = $_POST['soyad'];
            $firma_adi = $_POST['firma_adi'];
            $aciklama = $_POST['aciklama'];
            $adres = $_POST['adres'];
            $telefon = $_POST['telefon'];
            $email = $_POST['email'];

            $sql = "INSERT INTO toptan (ad, soyad, firma_adi, mail, telefon, aciklama, adres) VALUES ('$ad', '$soyad', '$firma_adi', '$email', '$telefon', '$aciklama', '$adres')";
            mysqli_set_charset($connection, "utf8");
            mysqli_query($connection, $sql);

            $gonderen = "siparis@medyaboss.net";
            $alici = "siparis@chopar.com.tr";
            $konu = "$ad $soyad - $firma_adi";

            $mesaj = "$ad $soyad - $firma_adi<br><br>";
            $mesaj .= "$aciklama<br><br>";
            $mesaj .= "$adres<br>";
            $mesaj .= "$telefon<br>";

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->CharSet = 'UTF-8';
                $mail->Host = 'smtp.medyaboss.net';  // SMTP sunucu adresi
                $mail->SMTPAuth = true;
                $mail->Username = 'siparis@medyaboss.net';  // E-posta adresiniz
                $mail->Password = 'Aras2022';  // E-posta şifreniz
                $mail->Port = 587;

                $mail->setFrom($gonderen);
                $mail->addAddress($alici);
                $mail->isHTML(true);
                $mail->Subject = $konu;
                $mail->Body = $mesaj;

                $mail->send();
            } catch (Exception $e) {
            }


            $gonderen = "siparis@chopar.com.tr";
            $alici = "$email";
            $konu = "Chopar Kozmetik - Teklif";

            $mesaj = "Merhaba $ad $soyad,<br><br>";
            $mesaj .= "$firma_adi firması adına talebiniz alınmıştır ve en kısa sürede iletişime geçilecektir. Vermiş olduğunuz bilgiler aşağıda yer almaktadır.";
            $mesaj .= "Bilgilerde bir yanlışlık olması durumunda bizimle iletişime geçebilirsiniz.<br><br>";
            $mesaj .= "Bizi tercih ettiğiniz için teşekkür ederiz. İyi çalışmalar<br><br>";
            $mesaj .= "$aciklama<br><br>";
            $mesaj .= "$adres - $telefon";

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->CharSet = 'UTF-8';
                $mail->Host = 'smtp.chopar.com.tr';  // SMTP sunucu adresi
                $mail->SMTPAuth = true;
                $mail->Username = 'siparis@chopar.com.tr';  // E-posta adresiniz
                $mail->Password = 'Chopar2023';  // E-posta şifreniz
                $mail->Port = 587;

                $mail->setFrom($gonderen);
                $mail->addAddress($alici);
                $mail->isHTML(true);
                $mail->Subject = $konu;
                $mail->Body = $mesaj;

                $mail->send();
            } catch (Exception $e) {
            }
            echo "Teklif başarıyla oluşturuldu.";
        ?>
    </div>
</body>
    
<?php include 'footer.php' ?>

</html>
