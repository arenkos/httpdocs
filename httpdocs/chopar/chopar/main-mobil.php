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

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=main.php">
    <?php
}else{ ?>
<body style="margin:0 auto;width:100%;background-color:black;">
    
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
    ?><div style="width:100%;">
    <?php include 'header.php';?></div>


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
    <div style="width:100%;height: auto;margin-top:30px;">
        <table style="width:60%;height: auto;margin:0 auto;">
            <?php
                $sql = "SELECT COUNT(*) as total FROM urunler";
                mysqli_set_charset($connection, "utf8");
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                $say = $row['total'];
                for ($i = 1; $i <= $say; $i++) {
                    $sql = "SELECT * FROM urunler WHERE resim= '$i'";
                    mysqli_set_charset($connection, "utf8");
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $kod = $row['kod'];
                    $barkod = $row['barkod'];
                    $ad = $row['ad'];
                    $aciklama = $row['aciklama'];
                    $fiyat = $row['fiyat'];
                    $fiyat_eski = $row['fiyat_eski'];?>
                    
                    <tr style="width: 100%;height: 400px;margin: 0 auto;padding:10px;">
                        <td style="width: 100%;height: 400px;margin: 0 auto;">
                            <img id="resim<?php echo $i; ?>" onClick="degis('resim<?php echo $i; ?>','<?php echo $kod; ?>')" src="<?php echo $kod; ?>_1.png" style="width: 100%;height: 100%;">
                        </td>
                    </tr>
                    <tr style="width: 100%;height: 400px;margin: 0 auto;padding:10px;">
                        <td style="width: 100%;height: 400px;margin: 0 auto;padding: 10px;">
                            <p style="text-align:left;color:white;">
                                <?php
                                    echo $ad; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    echo " - ";
                                    echo $kod; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                ?>
                            </p>
                            <p style="text-align:center;color:white;">
                                <?php
                                    echo $aciklama; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                ?>
                            </p>
                        </td>
                    </tr>
                    <tr style="width: 100%;height: 400px;margin: 0 auto;padding:10px;">
                        <td style="width: 10%;height: 400px;margin: 0 auto;">
                            <table style="width: 100%;height: 250px;margin: 0 auto;">
                                <tr style="width: 100%;height: 250px;margin: 0 auto;">
                                    <td style="width: 45%;height: 250px;margin: 0 auto;vertical-align: bottom;text-align: right;">
                                        <p style="text-decoration: line-through;font-size:auto;color:white;"><?php echo $fiyat_eski; ?></p>
                                    </td>
                                    <td style="width: 5%;height: 200px;margin: 0 auto;vertical-align: bottom;">
                                        <p style="font-size:auto;color:white;">TL</p>
                                    </td>
                                    <td style="width: 45%;height: 200px;margin: 0 auto;vertical-align: bottom;text-align: right;">
                                        <p style="text-decoration: line-through;font-size:auto;color:white;"><?php echo $fiyat; ?></p>
                                    </td>
                                    <td style="width: 5%;height: 200px;margin: 0 auto;vertical-align: bottom;">
                                        <p style="font-size:auto;color:white;">TL</p>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%;height: 150px;margin: 0 auto;">
                                <tr style="width: 100%;height: 150px;margin: 0 auto;">
                                    <td style="width: 100%;height: 150px;margin: 0 auto;vertical-align: top;text-align: center;">
                                        <input type="text" id="adet<?php echo $i; ?>" name="adet" placeholder="Adet" style="text-align: center;">
                                        <input type="image" src="sepet.png" alt="Resimli Buton" style="width:80px;height:80px;margin:0 auto;" onclick="sendPostRequest('<?php echo $usr; ?>', '<?php echo $kod; ?>', '<?php echo $i; ?>','adet<?php echo $i; ?>')">
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                <?php }
            ?>
        </table>
    </div>
    
    <script>
        var i = 1;
        function degis(id, kod){
            i = i + 1;
            if(i > 2){
                i = 1;
            }
            var input = document.getElementById(id);
            input.src = kod.toString() + "_" + i.toString() + ".png";
        }
        function sendPostRequest(usr, kod, urun, adet) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "ekle.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
              // İstek tamamlandığında yapılacak işlemler
              console.log(xhr.responseText);
            }
            };
            var input = document.getElementById(adet);
            var text = input.value;
            xhr.send("urun=" + urun + "&adet="+ text + "&usr=" + usr + "&kod=" + kod);
            input.value = "";
        }
    </script>
</body>
	
<?php include 'footer.php' ?>

</html>
<?php } ?>
