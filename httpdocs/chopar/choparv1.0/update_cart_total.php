<?php
// Sepet tutarını hesaplayan kodunuzu buraya ekleyin
// Bu örnekte $t_fiyat değerini hesaplayan kodu kullanıyoruz

session_start();
$usr = $_SESSION['user'];

$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

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

$t_fiyat = floatval(0);

if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $toplam_fiyat = $row['toplam_fiyat'];
        $t_fiyat += floatval($toplam_fiyat);
    }
}

$t_fiyat = sprintf("%.2f", $t_fiyat);

// Güncellenmiş sepet tutarını geri döndürün
echo $t_fiyat;
?>
