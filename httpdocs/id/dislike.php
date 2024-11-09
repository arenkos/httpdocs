<?php	
	session_start();
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
	}else{
		$_SESSION['user'] = session_id();
		$user = $_SESSION['user'];
	}
	$haber_url = $_GET['haber_url'];
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM tepkiler WHERE haber_url LIKE '$haber_url' AND kullanici LIKE '$user'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) == 0) {
		$sql = "INSERT INTO tepkiler(begen, kullanici, haber_url, begenme) VALUES('0', '$user', '$haber_url', '1')";
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, $sql);
	}else if (mysqli_num_rows($result) > 0) {
		$sql = "UPDATE tepkiler SET begen = '0', begenme = '1' WHERE haber_url LIKE '$haber_url' AND kullanici LIKE '$user'";
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, $sql);
	}
	
	$sql = "UPDATE haberler SET begenmeme_sayisi = begenmeme_sayisi + 1 WHERE haber_url LIKE '$haber_url'";
	mysqli_set_charset($connection, "utf8");
	mysqli_query($connection, $sql);
?>