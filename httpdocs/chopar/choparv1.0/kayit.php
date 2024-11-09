<?php
session_start();
if($_SESSION['user'] == "" || $_SESSION['user'] == null){
    $_SESSION['user'] = session_id();
}
$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VBX8LMD');</script>
<!-- End Google Tag Manager -->
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
            $sql = "INSERT INTO kullanici (ad, soyad, mail, numara, sifre, adres, adres_isim) VALUES ('$ad', '$soyad', '$mail', '$telefon', '$sifre', '$adres', 'Ev')";
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
