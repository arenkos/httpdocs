<?php
	$servername = "localhost:3306";
	$username = "aecmedya_aren";
	$password = "Aren2023";
	$database = "aecmedya_haber";
	$kategori = $_GET['ktg'];
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}

	$id = $_GET['id'];
	$kategori = $_GET['ktg'];
	$sql = "SELECT resim FROM ".$kategori." WHERE resim ORDER BY tiklanma_mobil DESC LIMIT 1 OFFSET 3";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo ($row['resim']); // Satır başlarını görüntülemek için () işlevini kullanırız.
		}
	}
?>    