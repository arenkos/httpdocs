<?php
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	$haber_url = $_GET['haber_url'];
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}

	$sql = "UPDATE haberler SET tiklanma_sayisi = tiklanma_sayisi + 1 WHERE haber_url LIKE '$haber_url'";
	mysqli_query($connection, $sql);
?>    