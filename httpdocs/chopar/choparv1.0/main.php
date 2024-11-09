<?php
session_start();
if($_SESSION['user'] == "" || $_SESSION['user'] == null){
    $_SESSION['user'] = session_id();
}
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <div style="width:100%;height:auto;margin:0 auto;text-align: center;">
        <table style="width:100%;height:auto;">
            <tr style="width:100%;height:auto;">
                <td style="width:30%;height:auto;">
                    
                </td>
                <td style="width:40%;height:auto;">
                    <div style="z-index:0;width:100%;height:130px;margin:0 auto;text-align: center;transparent;">
                        <a href="main.php"><img src="chopar-logo.png" style="width:110px;height:110px;margin:0 auto;text-align: center;margin-top:20px;"></a>
                    </div>
                </td>
                <td style="width:30%;height:auto;">
                </td>
            </tr>
        </table>
    <div style="height:30px;"></div>
    <div class="menu-button" onclick="toggleMenu()" style="z-index:2;text-align:center;margin:0 auto;color:#FFD700;font-size:15pt;"><img src="menu.png">Menü</div>
    <div class="m" id="m" style="z-index:1;display:none;background-color:transparent;text-align:center;margin:0 auto;">
        <ul style="text-align:center;margin:0 auto;margin-top:20px;">
            <li><a href="main.php" style="text-decoration:none;color:#FFD700;">Ana Sayfa</a></li>
            <li><a href="hakkimizda.php" style="text-decoration:none;color:#FFD700;">Hakkımızda</a></li>
            <li><a href="iletisim.php" style="text-decoration:none;color:#FFD700;">İletişim</a></li>
            <li style="width:auto;"><a href="sepet.php" style="text-decoration:none;color:#FFD700;">Sepetim <p style="color:white;">(<?php echo $t_fiyat; ?> TL)</p></a></li>
		</ul>
	</div>
    <div style="width:100%;margin:0 auto;text-align:center;color:white;margin-top:20px;">
        <form method="POST" action="sorgu.php">
            <input type="text" name="siparis_no" placeholder="Sipariş No(SIPXX)" style="text-align: center;">
            <input type="submit" value="Sorgula">
        </form>
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
        ?><div style="width:100%;margin:0 auto;text-align:center;color:white;margin-top:20px;"><a href="kullanici.php" style="text-decoration:none;"><?php
            $sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
            mysqli_set_charset($connection, "utf8");
            $ad_soyad = mysqli_query($connection, $sql);
            if ($ad_soyad->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($ad_soyad)) {
                    echo "Merhaba " . $row["ad"] . " " . $row["soyad"] . "<br>";
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
    }else{ ?>
        <div style="margin-top:20px;">
            <table style="margin:0 auto;">
                <form method="POST" action="kontrol.php">
                    <tr>
                        <td>
                            <input type="text" name="user" placeholder="Mail/Telefon Numarası" style="text-align: center;">
                        </td>
                        <td>
                            <input type="submit" value="Giriş" style="width:100%;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
                        </td>
                    </form>
                    <td>
                        <a href="kayit.php"><input type="submit" value="Kayıt ol"></a>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>

        </ul>
    </div>
    <script>
        function toggleMenu() {
            var menu = document.getElementById("m");
            if (menu.style.left === "0px" || menu.style.left === "") {
                showDiv("m");
                menu.style.left = "-30%";
            } else {
                hideDiv("m");
                menu.style.left = "0px";
            }
        }

        function showDiv(id) {
            var div = document.getElementById(id);
            div.style.display = 'flex';
        }

        function hideDiv(id) {
            var div = document.getElementById(id);
            div.style.display = 'none';
        }

    </script>
    </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; width:100%;height: 40vh; max-width:100%;">
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
                                <a href="urun.php?kod=<?php echo $kod; ?>"><img id="resim<?php echo $i; ?>" src="<?php echo $kod; ?>_1.png" style="width: 100%;height: 100%;"></a>
                            </td>
                        </tr>
                        <tr style="width: 100%;height: auto;margin: 0 auto;padding:10px;">
                            <td style="width: 100%;height: auto;margin: 0 auto;padding: 10px;">
                                <p style="text-align:center;color:white;">
                                    <?php
                                        echo $ad; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                        echo " - ";
                                        echo $kod; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    ?>
                                </p>
                                <p id="ok<?php echo $i; ?>" style="color:white; cursor:pointer;" onclick="cevir('aciklama<?php echo $i; ?>','ok<?php echo $i; ?>')">↓ Açıklamayı göster</p>
                                <p id="aciklama<?php echo $i; ?>" style="text-align:center;color:white;display:none;">
                                    <?php
                                        echo $aciklama; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    ?>
                                </p>
                            </td>
                        </tr>
                        <tr style="width: 100%;height: auto;margin: 0 auto;padding:10px;">
                            <td style="width: 10%;height: auto;margin: 0 auto;">
                                <table style="width: 100%;height: auto;margin: 0 auto;">
                                    <tr style="width: 100%;height: auto;margin: 0 auto;">
                                        <td style="width: 45%;height: 100px;margin: 0 auto;vertical-align: bottom;text-align: right;">
                                            <p style="text-decoration: line-through;font-size:auto;color:white;"><?php echo $fiyat_eski; ?></p>
                                        </td>
                                        <td style="width: 5%;height: 100px;margin: 0 auto;vertical-align: bottom;">
                                            <p style="font-size:auto;color:white;">TL</p>
                                        </td>
                                        <td style="width: 45%;height: 100px;margin: 0 auto;vertical-align: bottom;text-align: right;">
                                            <p style="font-size:auto;color:white;"><?php echo $fiyat; ?></p>
                                        </td>
                                        <td style="width: 5%;height: 100px;margin: 0 auto;vertical-align: bottom;">
                                            <p style="font-size:auto;color:white;">TL</p>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%;height: auto;margin: 0 auto;">
                                    <tr style="width: 100%;height: auto;margin: 0 auto;">
                                        <td style="width: 100%;height: auto;margin: 0 auto;vertical-align: top;text-align: center;">
                                            <input type="text" id="adet<?php echo $i; ?>" name="adet" placeholder="Adet" style="text-align: center;">
                                        </td>
                                    </tr>
                                    <tr style="width: 100%;height: 100px;margin: 0 auto;">
                                        <td style="width: 100%;height: 100px;margin: 0 auto;vertical-align: top;text-align: center;">
                                            <input type="image" src="sepet.png" alt="Resimli Buton" style="width:60px;height:60px;margin:0 auto;" onclick="sendPostRequest('<?php echo $usr; ?>', '<?php echo $kod; ?>', '<?php echo $i; ?>','adet<?php echo $i; ?>'); updateCartTotal();">
                                            
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
            function cevir(id, ok){
                var aciklama = document.getElementById(id);
                var ok = document.getElementById(ok);
                if(aciklama.style.display === "block"){
                    aciklama.style.display = "none";
                    ok.textContent= "↓ Açıklamayı göster";
                }else{
                    aciklama.style.display = "block";
                    ok.textContent= "↑ Açıklamayı gizle";
                }
            }
            // Sepet tutarını güncellemek için AJAX çağrısı yapacak fonksiyon
            function updateCartTotal() {
                $.ajax({
                    type: "GET", // GET veya POST isteği kullanabilirsiniz
                    url: "update_cart_total.php", // Sepet tutarını güncelleyen PHP dosyasının yolu
                    success: function(data) {
                        // Güncellenmiş sepet tutarını ekranda gösterin
                        $("#cart-total").text(data);
                    }
                });
            }
        </script>
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
                    $fiyat_eski = $row['fiyat_eski'];
                    if($i%2==1){?>
                        <tr style="width: 100%;height: 400px;margin: 0 auto;padding:10px;">
                            
                            <td style="width: 10%;height: 400px;margin: 0 auto;">
                                
                            </td>
                            <td style="width: 40%;height: 400px;margin: 0 auto;">
                        <a href="urun.php?kod=<?php echo $kod; ?>"><img id="resim<?php echo $i; ?>" onClick="degis('resim<?php echo $i; ?>','<?php echo $kod; ?>')" src="<?php echo $kod; ?>_1.png" style="width: 100%;height: 100%;max-height:400px;"></a>
                            </td>
                            <td style="width: 40%;height: 400px;margin: 0 auto;padding: 10px;">
                                <p style="text-align:left;color:white;color:white;">
                                    <?php
                                        echo $ad; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                        echo " - ";
                                        echo $kod; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    ?>
                                </p>
                                <p style="text-align:center;color:white;color:white;">
                                    <?php
                                        echo $aciklama;
                                    ?>
                                </p>
                            </td>
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
                                            <p style="color:white;"><?php echo $fiyat; ?></p>
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
                                            <input type="image" src="sepet.png" alt="Resimli Buton" style="width:60px;height:60px;margin:0 auto;" onclick="sendPostRequest('<?php echo $usr; ?>', '<?php echo $kod; ?>', '<?php echo $i; ?>','adet<?php echo $i; ?>'); updateCartTotal();">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    <?php
                        
                    }else{
                    ?>
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
                                            <p style="color:white;"><?php echo $fiyat; ?></p>
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
                                            <input type="image" src="sepet.png" alt="Resimli Buton" style="width:60px;height:60px;margin:0 auto;" onclick="sendPostRequest('<?php echo $usr; ?>', '<?php echo $kod; ?>', '<?php echo $i; ?>','adet<?php echo $i; ?>'); updateCartTotal();">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width: 40%;height: 400px;margin: 0 auto;padding: 10px;">
                                <p style="text-align:left;color:white;color:white;">
                                    <?php
                                        echo $ad; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                        echo " - ";
                                        echo $kod; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    ?>
                                </p>
                                <p style="text-align:center;color:white;color:white;">
                                    <?php
                                        echo $aciklama;
                                    ?>
                                </p>
                            </td>
                            <td style="width: 40%;height: 400px;margin: 0 auto;">
                        <a href="urun.php?kod=<?php echo $kod; ?>"><img id="resim<?php echo $i; ?>" onClick="degis('resim<?php echo $i; ?>','<?php echo $kod; ?>')" src="<?php echo $kod; ?>_1.png" style="width: 100%;height: 100%;max-height:400px;"></a>
                            </td>
                            <td style="width: 10%;height: 400px;margin: 0 auto;">
                                
                            </td>
                        </tr>
                    <?php
                    }
                }
            ?>
        </table>
    </div>
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
        // Sepet tutarını güncellemek için AJAX çağrısı yapacak fonksiyon
        function updateCartTotal() {
            $.ajax({
                type: "GET", // GET veya POST isteği kullanabilirsiniz
                url: "update_cart_total.php", // Sepet tutarını güncelleyen PHP dosyasının yolu
                success: function(data) {
                    // Güncellenmiş sepet tutarını ekranda gösterin
                    $("#cart-total").text(data);
                }
            });
        }
    </script>
    <?php } ?>
</body>
    
<?php include 'footer.php' ?>

</html>
