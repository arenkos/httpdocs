<?php
	$servername = "localhost:3306";
	$username = "aecmedya_aren";
	$password = "Aren2023";
	$database = "aecmedya_kullanicilar";
	$kategori = $_GET['kategori'];
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}

	$mail = $_GET['mail'];
	$kategori = $_GET['kategori'];
	$sql = "UPDATE kullanici SET tiklama = tiklama + 1 WHERE email LIKE '$mail'";
	mysqli_query($connection, $sql);
?>    