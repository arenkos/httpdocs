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

	$resim = $_GET['haber'];
	$kategori = $_GET['kategori'];
	$sql = "SELECT baslik FROM dunya WHERE resim= '$resim'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
		}
	}
?>    