<?php	
	if(isset($_POST['student_number'])){
		$student_number = $_POST['student_number'];
		$password = $_POST['password'];
		
		if($student_number == "202303011143" && $password == "1"){
			setcookie("user", $student_number, time() + 3 * 24 * 60 * 60, "/");
			?>
				<meta http-equiv="refresh" content="0; URL=system.php">
			<?php
			exit();
		}
		
	}
	if(strlen($_COOKIE['user'])>0){
?>
		<meta http-equiv="refresh" content="0; URL=system.php">
<?php
		exit();
	}
	//Veritabanı Bilgileri	
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
?>
<script>
	/*
	window.addEventListener('DOMContentLoaded', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'veritabanlari.php', true);
        xhr.send();
    });
	
	function like(haber_url){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'like.php?haber_url='+haber_url, true);
		xhr.send();
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'genel_akis.php?haber_url='+haber_url+'&begen=1&begenme=0&haberurl='+haber_url, true);
		xhr.send();
		document.getElementById('like_' + haber_url).style.display = 'none'; 
		document.getElementById('liked_' + haber_url).style.display = 'flex'; 
		document.getElementById('dislike_' + haber_url).style.display = 'flex';
		document.getElementById('disliked_' + haber_url).style.display = 'none';
	}
	
	function haber(haber_url){
		document.getElementById('resim_' + haber_url).style.display = 'none'; 
		document.getElementById('baslik_' + haber_url).style.display = 'none'; 
		document.getElementById('tarih_' + haber_url).style.display = 'none'; 
		document.getElementById('yorumlar_' + haber_url).style.display = 'none'; 
		document.getElementById('x_' + haber_url).style.textAlign = 'right';
		document.getElementById('x_' + haber_url).style.display = 'block';
		document.getElementById('haber_' + haber_url).style.display = 'flex'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'tiklanma.php?haber_url='+haber_url, true);
		xhr.send();
	}
	*/
	
	window.addEventListener('DOMContentLoaded', function() {
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'clear.php', true);
		xhr.send();
	});
	
</script>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi</title>
		<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	</head>

	<body id="login-body">
		<div class="logo-panel">
			<div id="logo"></div>
		</div>
		<div class="login-panel">
			<form method="POST" action="login.php" accept-charset="UTF-8">
				<p id="title">Öğrenci Girişi</p>
				<table id="login-table">
					<tr>
						<td>
							<input id="student_number" type="tel" name="student_number" placeholder="Öğrenci No / Student No" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
						</td>
					</tr>
					<tr>
						<td>
							<input id="password" type="password" name="password" placeholder="Şifre / Password" required>
						</td>
					</tr>
				</table>
				<input id="login" type="submit" value="Giriş">
			</form>
		</div>
		<div class="down-panel">
		</div>
	</body>
</html>