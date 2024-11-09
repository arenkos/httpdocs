<?php
session_start();

// Gelen verileri al
$action = $_POST['action'];
$kod = $_POST['kod'];
$usr = $_SESSION['user'];

echo $kod;
echo $action;

// Veritabanı bağlantısını yapın ve gerekli SQL işlemlerini yapın
$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

if ($action == "arti") {
    $sql = "UPDATE siparis SET adet = adet + 1, toplam_fiyat = toplam_fiyat + fiyat WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND kod LIKE '$kod' AND siparis_no=0";
} elseif ($action == "eksi") {
    $sql = "UPDATE siparis SET adet = adet - 1, toplam_fiyat = toplam_fiyat - fiyat WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND kod LIKE '$kod' AND siparis_no=0";
}elseif ($action == "sil") {
    $sql = "UPDATE siparis SET adet = 0, toplam_fiyat = 0 WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND kod LIKE '$kod' AND siparis_no=0";
}

mysqli_set_charset($connection, "utf8");
mysqli_query($connection, $sql);

// AJAX isteğine yanıt olarak başarılı bir cevap döndürün
http_response_code(200);
mysqli_close($connection);
?>
<meta http-equiv="refresh" content="0; URL=sepet.php">
