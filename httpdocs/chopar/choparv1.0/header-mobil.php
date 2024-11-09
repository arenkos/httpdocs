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
<div class="menu-button" onclick="toggleMenu()" style="text-align:center;margin:0 auto;color:#FFD700;font-size:15pt;background-color:black;"><img src="menu.png">Menü</div>
<div class="m" id="m" style="width:100%;display:none;background-color:transparent;text-align:center;margin:0 auto;">
    <ul style="text-align:center;margin:0 auto;margin-top:20px;">
        <li><a href="main.php" style="text-decoration:none;color:#FFD700;">Ana Sayfa</a></li>
        <li><a href="hakkimizda.php" style="text-decoration:none;color:#FFD700;">Hakkımızda</a></li>
        <li><a href="iletisim.php" style="text-decoration:none;color:#FFD700;">İletişim</a></li>
        <li style="width:auto;"><a href="sepet.php" style="text-decoration:none;color:#FFD700;">Sepetim <p style="color:white;">(<?php echo $t_fiyat; ?> TL)</p></a></li>
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
    ?><div style="width:100%;margin:0 auto;text-align:center;color:white;margin-top:20px;"><a href="kullanici.php"><?php
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
        } else {
            hideDiv("m");
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
