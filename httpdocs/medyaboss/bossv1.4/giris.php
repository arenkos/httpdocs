<?php
	session_start();
	$servername = "localhost:3306";
	$username = "aecmedya_aren";
	$password = "Aren2023";
	$database = "aecmedya_kullanicilar";

	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
	$mail = $_POST['mail'];
	$sifre = $_POST['sifre'];
	$sql = "SELECT * FROM kullanici WHERE email LIKE '$mail' AND sifre LIKE '$sifre' AND onay LIKE 1";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		// E-posta adresi veritabanında mevcut
		$_SESSION['mail'] = $mail;
		?><meta http-equiv="refresh" content="0; URL=ana.php"><?php
		
	} else {
		// E-posta adresi veritabanında mevcut değil
		echo "Kullanıcı bulunamadı veya hesap henüz onaylanmadı!";
	}
?>
	