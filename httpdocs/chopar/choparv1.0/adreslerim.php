<?php
session_start();
if($_SESSION['user'] ==  null || $_SESSION['user'] == "" || $_SESSION['user'] == session_id()){
    ?><meta http-equiv="refresh" content="0; URL=main.php"><?php
}else{

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

    function giris_kayit() {
        var div = document.getElementById('sagaGirenDiv');

        // Öğeyi sağdan içeri kaydırmak için JavaScript kullanıyoruz
        div.style.right = '0';

        // İsterseniz belirli bir süre sonra kaydırabilirsiniz
        // setTimeout(function () {
        //   div.style.right = '0';
        // }, 1000); // 1000 milisaniye (1 saniye) sonra kaydırır
      };
    function gizle(){
        var div = document.getElementById('sagaGirenDiv');
        if(div.style.right == "0px"){
            div.style.right = '-400px';
        }
    }
    </script>
    <style>
      #sagaGirenDiv {
        position: fixed;
        top: 0;
        right: -400px; /* Öğeyi sayfanın dışına çıkar */
        width: 400px;
        height: 100%;
        background-color: #1E1E1E;
        transition: right 0.5s; /* Geçiş efekti süresi */
      }
    </style>
</head>

<body style="margin:0 auto;background-color:black;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VBX8LMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
//Mobil
if (strpos($userAgent, 'Mobile') == true) { ?>
    <div style="width:100%;height:auto;margin:0 auto;">
        <div style="width:80%;height:auto;margin:0 auto;">
            <table style="width:100%;height:auto;margin:0 auto;">
                <tr style="width:100%;height:auto;margin:0 auto;">
                    <td style="width:auto;height:auto;margin:0 auto;">
                    
                        <!-- Veritabanı -->
                        <?php
                            include 'header-mobil.php';
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; width:100%;height: 40vh; max-width:100%;">
    </div>
    
    <!-- Ürünler -->
    
    <?php
}else{
// Masaüstü    ?>
    <div id="sagaGirenDiv">
        <div style="margin:0 auto;">
            <img src="geri.png" style="width:20px;height:35px;margin-top:20px;margin-left:20px;opacity:50%" onclick="gizle()">
        </div>
        <table style="margin:0 auto;margin-bottom: 30px;">
            <form method="POST" action="kontrol.php">
                <tr>
                    <td style="margin:0 auto;">
                        <p style="font-size:30px;color:#FFD700;">Giriş Yap</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="user" placeholder="Mail/Telefon Numarası" style="text-align: center;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
                    </td>
                <tr>
                    <td style="height:50px;margin:0 auto;">
                        <input type="submit" value="Giriş" style="width:100%;">
                    </td>
                </tr>
            </form>
        </table>
        <div style="width:250px;height:3px;background-color:#FFD700;opacity:60%;margin:0 auto;"></div>
        <table style="margin:0 auto;margin-top:30px;"><tr> <td>
            <form method="POST" action="kayit.php">
                <p style="font-size:30px;color:#FFD700;margin:0 auto;">Kayıt Ol</p>
                <table style="margin:0 auto;">
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Ad:<p>
                        </td>
                        <td>
                            <input type="text" name="ad" placeholder="Ad" style="text-align: center;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Soyad:<p>
                        </td>
                        <td>
                            <input type="text" name="soyad" placeholder="Soyad" style="text-align: center;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Mail:<p>
                        </td>
                        <td>
                            <input type="text" name="mail" placeholder="Mail" style="text-align: center;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Telefon:<p>
                        </td>
                        <td>
                            <input type="text" name="telefon" placeholder="Telefon" style="text-align: center;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Şifre:<p>
                        </td>
                        <td>
                            <input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color:#FFD700;">Adres:<p>
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
        </td></tr></table>
    </div>

    <div style="width:100%;height:auto;margin:0 auto;">
    <div style="width:80%;height:auto;margin:0 auto;">
        <table style="width:100%;height:auto;margin:0 auto;">
            <tr style="width:100%;height:auto;margin:0 auto;">
                <td style="width:100%;height:auto;margin:0 auto;">
                
                    <!-- Veritabanı -->
                    <?php
                    session_start();
                    $usr = $_SESSION['user'];

                    $servername = "localhost:3306";
                    $username = "xumchopa_chopar";
                    $password = "Chopar2023";
                    $database = "xumchopa_chopar";

                    $connection = mysqli_connect($servername, $username, $password, $database);

                    // Bağlantıyı kontrol et
                    if (!$connection) {
                        die("Bağlantı hatası: " . mysqli_connect_error());
                    }
                    if($usr != ""){
                        $sql = "DELETE FROM siparis WHERE adet=0";
                        mysqli_set_charset($connection, "utf8");
                        mysqli_query($connection, $sql);
                        $sql = "SELECT * FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND siparis_no=0 AND adet!=0";
                        mysqli_set_charset($connection, "utf8");
                        $result = mysqli_query($connection, $sql);
                    }
                    $t_fiyat = floatval(0);
                    if($result->num_rows > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            $toplam_fiyat = $row['toplam_fiyat'];
                            $t_fiyat += floatval($toplam_fiyat);
                        }
                    }
                    $t_fiyat = sprintf("%.2f", $t_fiyat);
                    ?>
                    <?php include 'header.php'; ?>
                <td style="width:auto;height:auto;margin:0 right;text-align:right;">
                    <table style="width:100%;height:auto;margin:right;text-align:right;"><tr style="width:100%;height:auto;margin:right;text-align:right;"><td style="width:100%;height:auto;margin:right;text-align:right;">
                    <div style="width:100%;height:auto;margin:0 right;">
                        <a href="sepet.php" style="text-decoration:none;color:#FFD700;">
                            <table><tr>
                            <td><img src="sepetim.png" style="width:20px;height:20px;">
                            <td style="min-width:100px;"><p style="color:#FFD700;"><span id="cart-total"><?php echo $t_fiyat; ?> </span> TL</p>
                            </tr>
                            </table>
                        </a>
                    </div></td></tr>
                    <tr><td>
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
                        ?><div style="width:100%;margin:0 auto;text-align:center;color:white;"><a href="kullanici.php" style="text-decoration:none;color:#FFD700;"><?php
                            $sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
                            mysqli_set_charset($connection, "utf8");
                            $ad_soyad = mysqli_query($connection, $sql);
                            if ($ad_soyad->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($ad_soyad)) {
                                    echo "" . $row["ad"] . " " . $row["soyad"] . "<br>";
                                }
                            }?></a>
                        </div>
                        <div style="width:100%;margin:0 auto;text-align:center;color:white;">
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
                        <div style="margin:0 right;">
                            <input type="submit" value="Giriş Yap/Kayıt Ol" onclick="giris_kayit();">
                        </div>
                    <?php } ?>
                    </td></tr></table>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; height: 100vh; max-width:100%;">
</div>

<div style="width:100%;margin:0 auto;text-align:center;color:white;">
    <form method="POST" action="sorgu.php">
        <input type="text" name="siparis_no" placeholder="Sipariş No(SIPXX)" style="text-align: center;">
        <input type="submit" value="Sorgula">
    </form>
</div>
    <!-- Ürünler -->
    
<?php } ?>

    
    <div style="width:80%;height: auto;margin-top:30px;margin:0 auto;">
        <table style="width:30%;height:auto;margin:0  auto;">
            <tr style="width:100%;height:auto;margin:0  auto;">
                <td style="width:30%;height:auto;margin:0  auto;">
                    <a href="kullanici.php" style="text-decoration:none;"><p style="color:#FFD700;">Hesap Bilgileri</p></a>
                </td>
                <td style="width:5%">
                </td>
                <td style="width:30%;height:auto;margin:0  auto;">
                    <p style="color:#FFD700;">Adres Bilgileri</p>
                </td>
                <td style="width:5%">
                </td>
                <td style="width:30%;height:auto;margin:0  auto;">
                    <a href="siparislerim.php" style="text-decoration:none;"><p style="color:#FFD700;">Siparişlerim</p></a>
                </td>
            </tr>
            <tr style="width:auto;height:20px;background-color:transparent;margin:0 auto;">
                <td style="width: 30%;margin: 0 auto;vertical-align: top;"><div style="display:none;width: auto;height:1px;margin: 0 auto;background-color: #FFD700;"></div></td>
                <td style="width:5%">
                </td>
                <td style="width: 30%;margin: 0 auto;vertical-align: top;"><div style="display:flex;width: auto;height:1px;margin: 0 auto;background-color: #FFD700;"></div></td>
                <td style="width:5%">
                </td>
                <td style="width: 30%;margin: 0 auto: 10px;vertical-align: top;"><div style="display:none;width: auto;height:1px;margin: 0 auto;background-color: #FFD700;"></div></td>
            </tr>
        </table>
        <div style="width:80%;height: auto;margin-top:30px;border:1px solid #FFD700;margin:0 auto;">
            <table>
                <?php
                    $sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
                    mysqli_set_charset($connection, "utf8");
                    $result = mysqli_query($connection, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $adres1 = $row['adres'];
                            $adres1_isim = $row['adres_isim'];
                            $adres2 = $row['adres2'];
                            $adres2_isim = $row['adres2_isim'];
                            $adres3 = $row['adres3'];
                            $adres3_isim = $row['adres3_isim'];
                        }
                    }
                ?>
                <tr>
                    <td>
                        <div>
                            <table id="adres1" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:flex;">
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres1_isim; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres1; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <input type="submit" value="Düzenle" onclick="duzenle1()">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <form id="adres1_d" action="adres_guncelle.php" method="POST" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:none;">
                                <table>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres1_isim" value="<?php echo $adres1_isim; ?>">
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <textarea type="text" id="adres1" name="adres1" rows="4" cols="25" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres_secim" value="adres1" style="display:none;">
                                            <input type="submit" value="Kaydet">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div>
                            <table id="adres2" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:flex;">
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres2_isim; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres2; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <input type="submit" value="Düzenle" onclick="duzenle2()">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <form id="adres2_d" action="adres_guncelle.php" method="POST" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:none;">
                                <table>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres2_isim" value="<?php echo $adres2_isim; ?>">
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                        <textarea type="text" id="adres2" name="adres2" rows="4" cols="25" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres_secim" value="adres2" style="display:none;">
                                            <input type="submit" value="Kaydet">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div>
                            <table id="adres3" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:flex;">
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres3_isim; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <p style="color:#FFD700;"><?php echo $adres3; ?></p>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:45%:height:auto;">
                                        <input type="submit" value="Düzenle" onclick="duzenle3()">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <form id="adres3_d" action="adres_guncelle.php" method="POST" style="width:80%;height:auto;margin:0 auto;border: 3 solid #FFD700;display:none;">
                                <table>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres3_isim" value="<?php echo $adres3_isim; ?>">
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                        <textarea type="text" id="adres3" name="adres3" rows="4" cols="25" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:45%:height:auto;">
                                            <input type="text" name="adres_secim" value="adres3" style="display:none;">
                                            <input type="submit" value="Kaydet">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

<script>
function duzenle1(){
    var table = document.getElementById('adres1');
    var form = document.getElementById('adres1_d');
    
    table.style.display = "none";
    form.style.display = "flex";
}
function duzenle2(){
    var table = document.getElementById('adres2');
    var form = document.getElementById('adres2_d');
    
    table.style.display = "none";
    form.style.display = "flex";
}
function duzenle3(){
    var table = document.getElementById('adres3');
    var form = document.getElementById('adres3_d');
    
    table.style.display = "none";
    form.style.display = "flex";
}
</script>
	
<?php include 'footer.php' ?>

</html>
<?php } ?>
