<?php	
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}else{
		echo "den";
	}
	$sql = "DELETE FROM haberler WHERE kaynak LIKE 'MİLLİYET'";
	mysqli_set_charset($connection, "utf8");
	mysqli_query($connection, $sql);
?>