<?php
session_start();
$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

$user = ltrim($_POST['user'],'0');
$sifre = $_POST['sifre'];

$sql = "SELECT * FROM kullanici WHERE (mail LIKE '$user' OR numara LIKE '$user') AND sifre LIKE '$sifre'";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);

if ($result->num_rows > 0) {
    $giris = date("Y-m-d");
    
    $baslangicZamani = time(); // Şu anki zamanı alır

    $sonrakiZaman = strtotime('+5 hours', $baslangicZamani); // 5 saat sonrasını hesaplar

    $cikis = date("Y-m-d H:i:s", $sonrakiZaman);
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $sql = "UPDATE kullanici SET oturum='1', giris='$giris', cikis='$cikis', IP='$ip' WHERE (mail LIKE '$user' OR numara LIKE '$user') AND sifre LIKE '$sifre'";
    mysqli_set_charset($connection, "utf8");
    mysqli_query($connection, $sql);
    $_SESSION['user'] = $user;
    ?><meta http-equiv="refresh" content="0; URL=main.php"><?php
} else {
    echo "Bilgilerinizi kontrol ederek tekrar deneyiniz.";
    ?><meta http-equiv="refresh" content="0; URL=main.php"><?php
    exit();
}
echo $_SESSION['girisBasarili'];
?>
