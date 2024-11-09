<?php
session_start();
$usr = $_SESSION['user'];

// Veritabanı bağlantısını yapın ve gerekli SQL işlemlerini yapın
$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
// Gelen verileri al
$adres_secim = $_POST['adres_secim'];
switch ($adres_secim) {
    case "adres1":
        $adres = $_POST['adres1'];
        $adres_isim = $_POST['adres1_isim'];
        $sql = "UPDATE kullanici SET adres = '$adres', adres_isim = '$adres_isim' WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        mysqli_query($connection, $sql);
        break;
    case "adres2":
        $adres = $_POST['adres2'];
        $adres_isim = $_POST['adres2_isim'];
        $sql = "UPDATE kullanici SET adres2 = '$adres', adres2_isim = '$adres_isim' WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        mysqli_query($connection, $sql);
        break;
    case "adres3":
        $adres = $_POST['adres3'];
        $adres_isim = $_POST['adres3_isim'];
        $sql = "UPDATE kullanici SET adres3 = '$adres', adres3_isim = '$adres_isim' WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        mysqli_query($connection, $sql);
        break;
}


// AJAX isteğine yanıt olarak başarılı bir cevap döndürün
http_response_code(200);
mysqli_close($connection);
?>
<meta http-equiv="refresh" content="0; URL=adreslerim.php">
