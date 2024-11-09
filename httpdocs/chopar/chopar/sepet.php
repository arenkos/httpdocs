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

<body style="margin:0 auto;background-color:black;">
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VBX8LMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
    <!-- Ürünler -->
    <div style="width:100%;height: auto;margin-top:30px;">
        <table style="width:60%;height: auto;margin:0 auto;">
            <tr style="width: 100%;height: 100px;margin: 0 auto;padding:10px;">
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;">Kod</p>
                </td>
                <td style="width:20%;height=100%;text-align:ceter;">
                    <p style="color:white;">Resim</p>
                </td>
                <td style="width:30%;height=100%;text-align:ceter;">
                    <p style="color:white;">Ürün Adı</p>
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;">Adet</p>
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;">Fiyat</p>
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;">Toplam</p>
                </td>
            </tr>
            
            <?php
            if($usr != ""){
                $sql = "SELECT * FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr') AND siparis_no=0";
                mysqli_set_charset($connection, "utf8");
                $result = mysqli_query($connection, $sql);
            }
            $t_fiyat = floatval(0);
            $i = 1;
            if($result->num_rows > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    $toplam_fiyat = $row['toplam_fiyat'];
                    ?>
                    <tr style="width: 100%;height: 200px;margin: 0 auto;padding:10px;">
                        <td style="width:10%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $i; ?></p>
                        </td>
                        <td style="width:10%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $row['kod']; ?>
                        </td>
                        <td style="width:20%;height=100%;text-align:ceter;">
                            <p < style="color:white;">
                                <?php
                                    $k = $row['kod'];
                                    $sql2 = "SELECT * FROM urunler WHERE kod LIKE '$k'";
                                    mysqli_set_charset($connection, "utf8");
                                    $result2 = mysqli_query($connection, $sql2);

                                    if ($result2->num_rows > 0) {
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            $id = $row2['kod']; ?>
                                            <img src="<?php echo $id; ?>_1.png" style="width: 100px;height: 100px;"><?php
                                        }
                                    }
                                ?>
                            </p>
                        </td>
                        <td style="width:30%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $row['urun']; ?></p>
                        </td>
                        <td style="width:10%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $row['adet']; ?></p>
                        </td>
                        <td style="width:10%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $row['fiyat']; ?> TL</p>
                        </td>
                        <td style="width:10%;height=100%;text-align:ceter;">
                            <p style="color:white;"><?php echo $toplam_fiyat; ?> TL</p>
                        </td>
                    </tr>
                <?php
                    $t_fiyat += floatval($toplam_fiyat);
                    $i = $i + 1;
                }
            }
            ?>
            <tr style="width: 100%;height: 100px;margin: 0 auto;padding:10px;">
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:20%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:30%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;">Toplam Fiyat :</p>
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <p style="color:white;"><?php echo $t_fiyat; ?> TL</p>
                </td>
            </tr>
            <tr style="width: 100%;height: 100px;margin: 0 auto;padding:10px;">
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:20%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:30%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    
                </td>
                <td style="width:10%;height=100%;text-align:ceter;">
                    <a href="onayla.php" style="text-decoration:none; color: white;">Sepeti Onayla</a>
                </td>
            </tr>
        </table>

        
    </div>
</body>
	
<?php include 'footer.php' ?>

</html>
