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

$tables = array(
    'dunya' => 'total_dunya',
    'ekonomi' => 'total_ekonomi',
    'gundem' => 'total_gundem',
    'magazin' => 'total_magazin',
    'saglik' => 'total_saglik',
    'son_dakika' => 'total_sondakika',
    'spor' => 'total_spor',
    'teknoloji' => 'total_teknoloji'
);

$results = array();

foreach ($tables as $table => $key) {
    $query = "SELECT COUNT(*) as total FROM $table";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total = (int) $row['total'];
        $results[$key] = $total;
    }
}

echo json_encode($results);
