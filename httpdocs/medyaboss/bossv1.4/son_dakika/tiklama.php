<?php
	$servername = "localhost:3306";
	$username = "aecmedya_aren";
	$password = "Aren2023";
	$database = "aecmedya_haber";
	$kategori = $_GET['kategori'];
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}

	$id = $_GET['id'];
	$kategori = $_GET['kategori'];
	$sql = "UPDATE son_dakika SET tiklanma_mobil = tiklanma_mobil + 1 WHERE resim= '$id'";
	mysqli_query($connection, $sql);
?>    