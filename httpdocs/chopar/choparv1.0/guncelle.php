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

$ad =  $_POST["ad"];
$soyad = $_POST["soyad"];
$sifre = $_POST["sifre"];
$telefon = $_POST["telefon"];
$mail = $_POST['mail'];
$sifre = $_POST['sifre'];


$sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if ($ad_soyad->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($ad_soyad)) {
        $ad_eski =  $row["ad"];
        $soyad_eski = $row["soyad"];
        $sifre_eski = $row["sifre"];
        $telefon_eski = $row["telefon"];
        $mail_eski = $row["mail"];
    }
}

if($telefon_eski == $telefon){
    $sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') OR (numara LIKE '$telefon')";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if ($ad_soyad->num_rows == 0) {
        if($sifre != "" || $sifre != null){
            $sql = "UPDATE kullanici SET ad = '$ad', soyad = '$soyad', sifre = '$sifre' FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
            mysqli_set_charset($connection, "utf8");
            mysqli_query($connection, $sql);
        }else{
            $sql = "UPDATE kullanici SET ad = '$ad', soyad = '$soyad' FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
            mysqli_set_charset($connection, "utf8");
            mysqli_query($connection, $sql);
        }
    }
}
elseif($telefon_eski != $telefon){
    $sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') OR  numara LIKE '$telefon'";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if ($ad_soyad->num_rows == 0) {
        if($sifre != "" || $sifre != null){
            $sql = "UPDATE kullanici SET ad = '$ad', soyad = '$soyad', numara = '$telefon', sifre = '$sifre' FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
            mysqli_set_charset($connection, "utf8");
            mysqli_query($connection, $sql);
        }else{
            $sql = "UPDATE kullanici SET ad = '$ad', soyad = '$soyad', numara = '$telefon' FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
            mysqli_set_charset($connection, "utf8");
            mysqli_query($connection, $sql);
        }
    }
}


?><meta http-equiv="refresh" content="0; URL=kullanici.php">
