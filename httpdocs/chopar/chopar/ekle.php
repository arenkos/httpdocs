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


// Örnek verilerle test etmek için aşağıdaki satırları kullanabilirsiniz
$user = strval($_POST['usr']);
$adet = $_POST['adet'];
$urun = $_POST['urun'];
$kod = $_POST['kod'];

$sql = "SELECT * FROM kullanici WHERE mail LIKE '$user' OR numara LIKE '$user'";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $telefon = strval($row['numara']); // Düzeltme: Kapanış parantezi düzeltildi
        $mail = $row['mail']; // Düzeltme: Kapanış parantezi düzeltildi
    }
}

$sql = "SELECT * FROM urunler WHERE kod LIKE '$kod'";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $urun = $row['ad'];
        $fiyat = floatval($row['fiyat']); // Düzeltme: Kapanış parantezi düzeltildi
        $toplam_fiyat = floatval($adet) * floatval($fiyat);
    }
}
$adet = intval($adet);
$telefon =strval($telefon);
if ($adet > 0){
    $sql = "INSERT INTO siparis (siparis_no, telefon, mail, adet, urun, kod, fiyat, toplam_fiyat) VALUES ('0', '$telefon', '$mail', '$adet', '$urun', '$kod', '$fiyat', '$toplam_fiyat')";
    mysqli_set_charset($connection, "utf8");
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}
?>
