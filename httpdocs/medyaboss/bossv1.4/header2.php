<table style="margin: 0 auto;width:1540px;">
	<tr>
		<td>
			<a href="ana.php" onmouseover="document.getElementById('arka').style.display='block';document.getElementById('l').style.display='none';"
			   onmouseout="document.getElementById('arka').style.display='none';document.getElementById('l').style.display='block';"
			   style="display:inline-block; position:relative;">
			  <img id="l" src="l.png" style="width:180px;height:90px;padding-left:30px;;padding-top:13px;text-align:left;display:block;">
			  <img id="arka" src="l2.png" style="width:180px;height:90px;padding-left:30px;;padding-top:13px;text-align:left;display:none;">
			</a>
		</td>
		<td>
			<div style="width:50px;"></div>
		</td>
		<td>
			<img src="cizgi.png" style="height:60px;width:2px;padding-top:15px;">
		</td>
		<td>
			<div style="width:10px;"></div>
		</td>
		<td>
			<link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
			<!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yaz.png" style="width:470px;height:70px;padding:16px;"></div>-->
			<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;">" DÜNYADAN HABERİNİZ OLSUN "</div>
			<!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yazi.gif" style="width:800px;height:100px;"></div>-->
		</td>
		<td style="width:380px;">
		</td>
		<td style="width:250px;">
			<?php
		session_start();
		 if (empty($_SESSION['mail'])) { ?>
			<div id="giris" style="width:250px;">
				
			</div>
			<?php }else{ ?>
			<div id="isim">
				<?php 
				$servername = "localhost:3306";
				$username = "aecmedya_aren";
				$password = "Aren2023";
				$database = "aecmedya_kullanicilar";

				$connection = mysqli_connect($servername, $username, $password, $database);
				mysqli_set_charset($connection, "utf8");
				// Bağlantıyı kontrol et
				if (!$connection) {
					die("Bağlantı hatası: " . mysqli_connect_error());
				}
				
				$mail = $_SESSION['mail'];
				$sql = "SELECT * FROM kullanici WHERE email='$mail'";
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					$isim =  $row['ad']; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
					$soyisim =  $row['soyad']; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
				}?>
				<p accept-charset="UTF-8"><?php echo $isim; ?></p>
				<p accept-charset="UTF-8"><?php echo $soyisim; ?></p>
			</div>
			<?php } ?>
		</td>
		<?php if (empty($_SESSION['mail'])) { ?>
		<td id="kayit" style="width:100px;">
			<p><a href="giris_yap.php" style="text-decoration:none;color:white;">Giriş Yap</a></p>
			<p><a href="kayit.php" style="text-decoration:none;color:white;">Kayıt ol</a></p>
		</td>
		<?php }else{ ?>
		<td id="bos" style="width:100px;">
			<a href="cikis.php"> Çıkış Yap</a>
		</td>
		<?php } ?>
		<td>
			<div class="menu-toggle" onclick="toggleMenu()">
			  <img src="menu.png" alt="Menu" width="20px" height="20px">
			</div>
		</td>
	</tr>
</table>
<table style="margin: 0 right;width:1540px;text-align:right;background-color:transparent;">
	<tr style="width:100%;margin:0 right;text-align:right;">
		<td style="width:100%;margin:0 right;text-align:right;">
			<div style="width:340px;margin:0 right;text-align:right;margin-left:1220px;background-color:#CD0000;" id="menu">
				<nav style="background-color:#CD0000;">
					<ul style="background-color:#CD0000;">
						<span class="kapat2" onclick="kutuKapat4();">&times;</span>
					</ul>
					<div style="height:30px;">
					</div>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="ana.php">Ana Sayfa</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="son_dakika.php">Son Dakika</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="gundem.php">Gündem</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="spor.php">Spor</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="dunya.php">Dünya</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="ekonomi.php">Ekonomi</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="teknoloji.php">Teknoloji</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="saglik.php">Sağlık</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<li><a style="background-color:#CD0000;" href="yazarlarimiz.php">Yazarlarımız</a></li>
					</ul>
					<ul style="background-color:#CD0000;">
						<table>
							<tr>
								<td>
									<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="text-align:center;margin-left:10px;"><img src="w.png" style="width:25px;height:25px;"></a>
								</td>
								<td style="width:5px;">
								</td>
								<td>
									<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="color:#fff;text-decoration:none;padding-right:10px;;font-size:18px;background-color: #CD0000;">Whatsapp İritibat: 0532 663 2677</a>
								</td>
							</tr>
						</table>
					</ul>
				</nav>
			</div>
		</td>
	</tr>
</table>

<script>
	function toggleMenu() {
	  var menu = document.getElementById("menu");
	  if (menu.style.display === "block") {
		menu.style.display = "none";
	  } else {
		menu.style.display = "block";
	  }
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.menu-toggle') && !event.target.matches('#menu') && !event.target.matches('#menu a')) {
		var menu = document.getElementById("menu");
		if (menu.style.display === "block") {
		  menu.style.display = "none";
		}
	  }
	}
</script>
