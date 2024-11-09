<table style="margin: 0 auto;width:100%;padding-left:30px;padding-right:10px;">
    <tr style="width:100%;">
        <td style="width:25%;">
            <a href="ana-mobil.php" onmouseover="document.getElementById('arka').style.display='block';document.getElementById('l').style.display='none';"
               onmouseout="document.getElementById('arka').style.display='none';document.getElementById('l').style.display='block';"
               style="display:inline-block; position:relative;">
              <img id="l" src="l.png" style="width:100%;height:70px;padding-top:13px;text-align:left;display:block;">
              <img id="arka" src="l2.png" style="width:100%;height:70px;padding-top:13px;text-align:left;display:none;">
            </a>
        </td>
        <td style="width:5%;">
            <div></div>
        </td>
        <td style="width:5%;">
            <img src="cizgi.png" style="height:60px;width:2px;padding-top:15px;">
        </td>
        <td style="width:40%;">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
            <!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yaz.png" style="width:470px;height:70px;padding:16px;"></div>-->
            <div style="text-align:center;color:#000000;;font-family:Montserrat;padding-top:10px;color:white;">" DÜNYADAN HABERİNİZ OLSUN "</div>
            <!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yazi.gif" style="width:800px;height:100px;"></div>-->
        </td>
		<td>
		<table style="width:15%;">
		<tr>
		<?php
		session_start();
		 if (empty($_SESSION['mail'])) { ?>
		<td>
			<p><a href="giris_yap-mobil.php" style="text-decoration:none;color:white;">Giriş</a></p>
        </td>
		</tr>
		<tr>
		<td>
			<p><a href="kayit.php" style="text-decoration:none;color:white;">Kayıt</a></p>
        </td>
		<?php }else{ 
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
		<td>
			<p accept-charset="UTF-8"><?php echo $isim; ?></p>
        </td>
		</tr>
		<tr>
		<td>
			<p accept-charset="UTF-8"><?php echo $soyisim; ?></p>
        </td>
        <td style="width:5%;">
			<a href="cikis.php"> Çıkış</a>
        </td>
		<?php } ?>
		</tr>
		</table>
		</td>
        <td style="width:5%;text-align:center;">
			<div class="menu-toggle" onclick="toggleMenu()">
              <img src="menu.png" alt="Menu" width="20px" height="20px">
            </div>
		</td>
	</tr>
</table>
<table id="menu" style="margin: 0 right;width:auto;background-color:#CD0000;">
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="ana-mobil.php">Ana Sayfa</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="son_dakika-mobil.php">Son Dakika</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="gundem-mobil.php">Gündem</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="spor-mobil.php">Spor</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="magazin-mobil.php">Magazin</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="dunya-mobil.php">Dünya</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="ekonomi-mobil.php">Ekonomi</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="teknoloji-mobil.php">Teknoloji</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="saglik-mobil.php">Sağlık</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="yazarlarimiz-mobil.php">Yazarlarımız</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td style="margin: 0 auto;width:100%;text-align:center;">
			<table style="margin: 0 auto;width:100%;text-align:center;">
				<tr style="margin: 0 auto;width:100%;text-align:center;">
					<td style="margin: 0 auto;width:100%;text-align:center;">
						<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="text-align:center;margin:0 auto;"><img src="w.png" style="width:25px;height:25px;"></a>
						<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="color:#fff;text-decoration:none;font-size:18px;background-color: #CD0000;font-family:Poppins">Whatsapp İritibat: 0532 663 2677</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script>
	function toggleMenu() {
	  var menu = document.getElementById("menu");
	  if (menu.style.display === "flex") {
		menu.style.display = "none";
	  } else {
		menu.style.display = "flex";
	  }
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.menu-toggle') && !event.target.matches('#menu') && !event.target.matches('#menu a')) {
		var menu = document.getElementById("menu");
		if (menu.style.display === "flex") {
		  menu.style.display = "none";
		}
	  }
	}
</script>
