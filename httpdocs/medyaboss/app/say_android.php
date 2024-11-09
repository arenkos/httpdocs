<?php
$servername = "localhost:3306";
$username = "aecmedya_aren";
$password = "Aren2023";
$database = "aecmedya_haber";

$connection = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
$konu = $_GET['konu'];
$query = "SELECT COUNT(*) as total FROM $konu";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    echo $total;
}

