<?php
	session_start();
	include 'clear.php';
	if(strlen($_SESSION['user'])!=0){
		include 'session_control.php';
	}else{
?>
		<meta http-equiv="refresh" content="0; URL=login.php">
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
				background-color:#FFF;
				width:100%;
				height:100%;
				border:none;
			}
			.main{
				margin:0 auto;
				padding:0;
				width:100%;
				border:none;
			}
			.main #top {
				margin:0 auto;
				padding:0;
				width:100%;
				border:none;
				background-color:#B11;
				background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('bg.png');
				background-size: 100% 160%;
				background-repeat:no-repeat;
			}
			.profile-info{
				width: 200px;
				height: 250px;
				padding: 30px;
				margin:0 auto;
				margin-top:50px;
				color:#FFF;
			}
			.profile-info .profile-picture {
				margin:0 auto;
				width: 150px; /* Profil fotoğrafının genişliği */
				height: 150px; /* Profil fotoğrafının yüksekliği */
				border-radius: 50%; /* Oval kesme uygulama, çapın yarısı kadar keser */
				border: 3px solid #FFF;
				overflow: hidden; /* İçeriği dışarı taşan kısımları gizler */
			}
			.profile-info .profile-picture img {
				width: 100%; /* Resmi container'a sığacak şekilde boyutlandır */
				height: auto; /* Otomatik yükseklik ayarı */
				display: block; /* Dikey hizalamayı sağlar */
			}
			.profile-info .profile {
				margin:0 auto;
				text-align:center;
			}
			.profile-info .profile #name-surname {
				text-align:center;
				margin:5px;
				font-weight: bold;
				font-size: 20px;
			}
			.profile-info .profile #majority {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.profile-info .profile #class {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.profile-info .profile #number {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.options {
				margin:0 auto;
			}
			.options .parts {
				margin:0 auto;
				padding: 15px;
			}
			.options .parts #obs {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #55AA55;
				box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
			}
			.options .parts #online {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #5555AA;
				box-shadow: inset 0 0 20px rgba(85, 85, 170, 0.8);
			}
			.options .parts #pos {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #AA5555;
				box-shadow: inset 0 0 20px rgba(170, 85, 85, 0.8);
			}
			.options .parts #mail {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #888888;
				box-shadow: inset 0 0 20px rgba(136, 136, 136, 0.8);
			}
			.options .parts #announcements {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #DDCC33;
				box-shadow: inset 0 0 20px rgba(221, 204, 51, 0.8);
			}
			.options .parts #campus {
				width:250px;
				height:200px;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #AA4499;
				box-shadow: inset 0 0 20px rgba(170, 68, 153, 0.8);
			}
			.title-parts {
				margin:0 auto;
				text-align:center;
				font-size:20px;
			}
			.icon-div {
				margin:0 auto;
				text-align:center;
				width: 120px;
				max-width:70%;
				height: 150px;
				max-height:70%;
			}
			.icon{
				margin:0 auto;
				text-align:center;
				width:100%;
				height:100%;
			}
			.spacer-height {
				height:5px;
			}
			#exit {
				margin:0 auto;
				text-align:center;
				padding:0;
				width:20px;
				height:25px;
				margin-top:5px;
			}
			.exit-link {
				text-decoration:none;
			}
			
			/* Mobil görünüm */
			.mobile{
				display:none;
				margin:0 auto;
				padding:0;
				width:100%;
				border:none;
			}
			.mobile #top-mobile {
				margin:0 auto;
				width:100%;
				background-color:#B11;
				background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('bg.png');
				background-size: 100% 160%;
				background-repeat:no-repeat;
				border:none;
			}
			.profile-info-mobile{
				width: 200px;
				max-width:70%;
				height: 280px;
				padding: 30px;
				margin:0 auto;
				margin-top:50px;
				color:#FFF;
			}
			.profile-info-mobile .profile-picture-mobile {
				margin:0 auto;
				width: 150px; /* Profil fotoğrafının genişliği */
				max-width:70vw;
				height: 150px; /* Profil fotoğrafının yüksekliği */
				max-height:70vw;
				border-radius: 50%; /* Oval kesme uygulama, çapın yarısı kadar keser */
				border: 3px solid #FFF;
				overflow: hidden; /* İçeriği dışarı taşan kısımları gizler */
			}
			.profile-info-mobile .profile-picture-mobile img {
				width: 100%; /* Resmi container'a sığacak şekilde boyutlandır */
				height: auto; /* Otomatik yükseklik ayarı */
				display: block; /* Dikey hizalamayı sağlar */
			}
			.profile-info-mobile .profile-mobile {
				margin:0 auto;
				text-align:center;
			}
			.profile-info-mobile .profile-mobile #name-surname-mobile {
				text-align:center;
				margin:5px;
				font-weight: bold;
				font-size: 20px;
			}
			.profile-info-mobile .profile-mobile #majority-mobile {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.profile-info-mobile .profile-mobile #class-mobile {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.profile-info-mobile .profile-mobile #number-mobile {
				text-align:center;
				margin:0;
				font-size: 15px;
			}
			.options-mobile {
				margin:0 auto;
			}
			.options-mobile .parts-mobile {
				margin:0 auto;
				padding: 15px;
			}
			.options-mobile .parts-mobile #obs-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #55AA55;
				box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
			}
			.options-mobile .parts-mobile #online-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #5555AA;
				box-shadow: inset 0 0 20px rgba(85, 85, 170, 0.8);
			}
			.options-mobile .parts-mobile #pos-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #AA5555;
				box-shadow: inset 0 0 20px rgba(170, 85, 85, 0.8);
			}
			.options-mobile .parts-mobile #mail-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #888888;
				box-shadow: inset 0 0 20px rgba(136, 136, 136, 0.8);
			}
			.options-mobile .parts-mobile #announcements-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #DDCC33;
				box-shadow: inset 0 0 20px rgba(221, 204, 51, 0.8);
			}
			.options-mobile .parts-mobile #campus-mobile {
				width:250px;
				max-width:45vw;
				height:200px;
				max-height:45vw;
				margin:0 auto;
				border-radius: 10%;
				border: 3px solid #AA4499;
				box-shadow: inset 0 0 20px rgba(170, 68, 153, 0.8);
			}
			.title-parts-mobile {
				margin:0 auto;
				text-align:center;
				font-size:20px;
			}
			.icon-div-mobile {
				margin:0 auto;
				text-align:center;
				width: 70px;
				max-width:70%;
				height: 100px;
				max-height:70%;
			}
			.icon-mobile{
				margin:0 auto;
				text-align:center;
				width:100%;
				height:100%;
			}
			#exit-mobile {
				margin:0 auto;
				margin-top:5px;
				text-align:center;
				padding:0;
				width:20px;
				height:25px;
			}
			@media screen and (max-width: 600px) {
				.main {
					display: none;
				}
				.mobile {
					display: flex;
				}
			}
		</style>
	</head>

	<body>
		<table class="main">
			<tr id="top">
				<td>
					<div class="profile-info">
						<div class="profile-picture">
						  <img src="pp.png?v=<?php echo time(); ?>">
						</div>
						<div class="profile">
						  <p id="name-surname">Aren Koş</p>
						  <p id="majority">Yazılım Mühendisliği</p>
						  <p id="class">3.Sınıf</p>
						  <p id="number">202303011143</p>
						  <a href="session_control.php?exit=1" class="exit-link"><img src="exit.png?v=<?php echo time(); ?>" id="exit"></a>
						</div>
					</div>
				</td>
			</tr>		
			<tr>
				<td>
					<div class="options">
						<table class="parts">
							<tr class="parts">
								<td id="obs">
									<div class="icon-div">
										<img src="obs.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p id="l" onmouseover="onmouseover()" class="title-parts">OBS</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="online">
									<div class="icon-div">
										<img src="online.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">DOU Online</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="pos">
									<div class="icon-div">
										<img src="pos.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ödemeler</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="mail">
									<div class="icon-div">
										<img src="mail.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Mail ve Notlar</p>
									</div>
								</td>
							</tr>
						</table>
						<table class="parts">
							<tr class="parts">
								<td id="announcements">
									<div class="icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Duyurular</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="campus">
									<div class="icon-div">
										<img src="campus.png?v=<?php echo time(); ?>" class="icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kampüs</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
		
		<table class="mobile">
			<tr id="top-mobile">
				<td>
					<div class="profile-info-mobile">
						<div class="profile-picture-mobile">
						  <img src="pp.png?v=<?php echo time(); ?>">
						</div>
						<div class="profile-mobile">
						  <p id="name-surname-mobile">Aren Koş</p>
						  <p id="majority-mobile">Yazılım Mühendisliği</p>
						  <p id="class-mobile">3.Sınıf</p>
						  <p id="number-mobile">202303011143</p>
						  <a href="session_control.php?exit=1" class="exit-link"><img src="exit.png?v=<?php echo time(); ?>" id="exit-mobile"></a>
						</div>
					</div>
				</td>
			</tr>		
			<tr>
				<td>
					<div class="options-mobile">
						<table class="parts-mobile">
							<tr class="parts-mobile">
								<td id="obs-mobile">
									<div class="icon-div-mobile">
										<img src="obs.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">OBS</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="online-mobile">
									<div class="icon-div-mobile">
										<img src="online.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">DOU Online</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height">
								<td>
								</td>
								<td>
								</td>
								<td>
								</td>
							</tr>
							<tr class="parts-mobile">
								<td id="pos-mobile">
									<div class="icon-div-mobile">
										<img src="pos.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">Ödemeler</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="mail-mobile">
									<div class="icon-div-mobile">
										<img src="mail.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">Mail ve Notlar</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height">
								<td>
								</td>
								<td>
								</td>
								<td>
								</td>
							</tr>
							<tr class="parts-mobile">
								<td id="announcements-mobile">
									<div class="icon-div-mobile">
										<img src="announcements.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">Duyurular</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="campus-mobile">
									<div class="icon-div-mobile">
										<img src="campus.png?v=<?php echo time(); ?>" class="icon-mobile">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts-mobile">Kampüs</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>