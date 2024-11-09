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
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$mail = $_POST['mail'];
$telefon = $_POST['telefon'];
$yorum = $_POST['yorum'];
$usr = $_SESSION['user'];
$tarih = date("Y-m-d");
$kod = $_POST['kod'];

echo $ad;
echo $soyad;
echo $mail;
echo $telefon;
echo $usr;
echo $yorum;
echo $tarih;
echo $kod;


mysqli_set_charset($connection, "utf8");
$sql = "INSERT INTO yorumlar (ad, soyad, mail, telefon, kod_mail, tarih, yorum, kod) VALUES ('$ad', '$soyad', '$mail', '$telefon', '$usr', '$tarih', '$yorum', '$kod')";

if (mysqli_query($connection, $sql)) {
    echo "Yorum başarıyla eklendi.";
} else {
    echo "Yorum eklenirken hata oluştu: " . mysqli_error($connection);
}
?>
