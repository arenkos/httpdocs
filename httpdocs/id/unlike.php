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
	if (mysqli_num_rows($result) > 0) {
		$sql = "DELETE FROM tepkiler WHERE haber_url LIKE '$haber_url' AND kullanici LIKE '$user'";
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, $sql);
	}
	
	$sql = "UPDATE haberler SET begenme_sayisi = begenme_sayisi - 1 WHERE haber_url LIKE '$haber_url'";
	mysqli_set_charset($connection, "utf8");
	mysqli_query($connection, $sql);
?>