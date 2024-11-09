<?php
	session_start();
	
	if(isset($_POST['student_number'])){
		$student_number = $_POST['student_number'];
		$password = $_POST['password'];
		
		if($student_number == "202303011143" && $password == "1"){
			$_SESSION['user'] = $student_number;
			$_SESSION['created'] = time();
		}
		
	}
	if(strlen($_SESSION['user'])>0){
		include 'session_control.php';
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
		<style>
			body{
				margin:0 auto;
				background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),url('back.png');
				background-size: 100% 100%;
				background-repeat:no-repeat;
				width:100%;
				height:100%;
			}
			.logo-panel {
				display: flex;
				justify-content: center;
				align-items: center;
				width: 250px;
				height: 250px;
				max-height:15%;
				margin: 0 auto;
				text-align: center;
				background-color: #FFF;
			}
			.logo-panel #logo{
				display: flex;
				justify-content: center;
				align-items: center;
				background-image:url('d.png');
				background-size: contain;
				background-position: center;
				background-repeat:no-repeat;
				width: 100%;
				height: 100%;
				margin: 0 auto;
				text-align: center;
				background-color: #FFF;
			}
			.login-panel {
				display: flex;
				justify-content: center;
				align-items: center;
				width: 250px;
				height: 50%;
				margin: 0 auto;
				text-align: center;
				background-color: #BB1111;
				color: #FFF;
			}
			.down-panel {
				display: flex;
				justify-content: center;
				align-items: center;
				background-image:url('b.png');
				background-size:100% 100%;
				width: 250px;
				height: 15%;
				margin: 0 auto;
				text-align: center;
				background-color: transparent;
				color: #FFF;
			}
			.login-panel #title{
				margin:0 auto;
				text-align:center;
				font-size:25px;
			}
			.login-panel #login-table{
				margin:0 auto;
				text-align:center;
				font-size:25px;
			}
			.login-panel #login-table #student_number{
				margin-top:10px;
				text-align:left;
				font-size:15px;
				color:#000;
			}
			.login-panel #login-table #password{
				margin-top:10px;
				text-align:left;
				font-size:15px;
				color:#000;
			}
			.login-panel #login{
				margin-top:10px;
				text-align:center;
				font-size:15px;
				background-color:#FFF;
				border:0px;
				color:#000;
			}
		</style>
	</head>

	<body>
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