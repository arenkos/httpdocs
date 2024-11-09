<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QZ5ZT1CR3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2QZ5ZT1CR3');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6002356356631849"
     crossorigin="anonymous"></script>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=kayit-mobil.php">
    <?php
}
?>	
	<meta charset="utf8-turkish-ci">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
<link rel="icon" href="https://www.medyabosshaber.com/mboss/logo.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'clear.php', true);
			xhr.send();
		});
	</script>
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;z-index: 9999;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#CD0000;height:92px;text-align:left;">
					<?php include 'header2.php'; ?>
				</ul>
				
				<div style="width:100%;height:50px;background:#CD0000;margin: 0 auto;">
					<table style="width:1540px;height:50px;background:#CD0000;margin: 0 auto;text-align:justify;">
						<tr>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="ana.php">Ana Sayfa</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="son_dakika.php">Son Dakika</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="gundem.php">Gündem</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="spor.php">Spor</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="magazin.php">Magazin</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="dunya.php">Dünya</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ekonomi.php">Ekonomi</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php">Teknoloji</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php">Sağlık</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="yazarlarimiz.php">Yazarlarımız</a></td>
						</tr>
					</table>
				</div>
				
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2.php'; ?>
				</ul>
<ul style="width:50%;margin:0 auto;">
    <form style="width:100%;margin:0 auto;" action="arama-mobil.php" method ="POST">
        <table style="width:100%;margin:0 auto;">
            <tr style="width:100%;margin:0 auto;">
                <td style="width:80%;">
                    <input id="arama" style="width:50%;" type="text" name="arama" placeholder="Arama" required>

                    <script>
                        function buyut() {
                            var aramaInput = document.getElementById("arama");
                            aramaInput.style.transition = "width 0.5s"; // Geçiş süresini ayarlayabilirsiniz.
                            aramaInput.style.width = "100%";
                        }

                        // Metin kutusu odaklandığında çalıştırmak için:
                        var aramaInput = document.getElementById("arama");
                        aramaInput.addEventListener("focus", buyut);

                        // Metin kutusu odaktan çıktığında eski boyutuna geri dönmek için:
                        aramaInput.addEventListener("blur", function() {
                            aramaInput.style.width = "50%";
                        });
                    </script>
                </td>
                <td style="width:20%;">
                    <input style="100%;" type="submit" value="Ara">
                </td>
            </tr>
        </table>
    </form>
</ul>
			</nav>
		</div>

	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:222px;height:700px;background-color:#fff;">
		
		<table style="padding-top:0px;margin: 0 auto;">
			<tr>
				<td>
					<div style="padding-top:50px;text-align:center;">
						<form method="POST" action="kayit.php" accept-charset="UTF-8">
							<table>
								<tr>
									<td style="text-align:left;">
										<label for="ad">Ad:</label>
									</td>
									<td>
										<input type="text" name="ad" id="ad" required>
									</td>
								</tr>
								<tr>
									<td style="text-align:left;">
										<label for="soyad">Soyad:</label>
									</td>
									<td>
										<input type="text" name="soyad" id="soyad" required>
									</td>
								</tr>
								
									<td style="text-align:left;">
										<label for="mail">Mail:</label>
									</td>
									<td>
										<input type="text" name="mail" id="mail" required>
									</td>
								</tr>
									<td style="text-align:left;">
										<label for="telefon">Telefon:</label>
									</td>
									<td>
										<input type="text" name="telefon" id="telefon" onchange="removeLeadingZero(this)" required>
										<script>
										function removeLeadingZero(input) {
											var value = input.value;
											
											// Başındaki sıfırı kaldırma
											if (value.charAt(0) === '0') {
												value = value.slice(1);
											}
											
											// Değiştirilmiş değeri geri yazma
											input.value = value;
										}
										</script>
									</td>
								</tr>
								<tr>
									<td style="text-align:left;">
										<label for="sifre">Şifre:</label>
									</td>
									<td>
										<input type="password" name="sifre" id="sifre" required>
									</td>
								</tr>
							</table>
							<p></p>
							<input type="submit" value="Kayıt Ol">
						</form>
					</div>
				</td>
			</tr>
		</table>
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
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$mail = $_POST['mail'];
				$telefon = $_POST['telefon'];
				
				$sql = "SELECT * FROM kullanici WHERE email LIKE '$mail' OR telefon LIKE '$telefon'";
				$result = mysqli_query($connection, $sql);

				if (mysqli_num_rows($result) > 0) {
					// E-posta adresi veritabanında mevcut
					echo "Bu e-posta adresi veya telefon numarası zaten kullanılıyor.";
				} else {
					// E-posta adresi veritabanında mevcut değil
					$ad = $_POST['ad'];
					$ad = ucwords(strtolower($ad));
					$soyad = $_POST['soyad'];
					$soyad = ucwords(strtolower($soyad));
					$mail = $_POST['mail'];
					$telefon = $_POST['telefon'];
					$sifre = $_POST['sifre'];
					$tarih = date('Y-m-d H:i:s');
					$sql = "INSERT INTO kullanici (ad, soyad, email, telefon, sifre, onay, tarih) VALUES ('$ad', '$soyad', '$mail', '$telefon', '$sifre', 0, '$tarih')";
					mysqli_query($connection, $sql);
					echo "Onay işlemi gerçekleştikten sonra hesabnıza giriş yapabilirsiniz.";
				}
			}
		?>
	</main>
		
	<!-- Sayfa başına git -->
	<div style="width:100%;text-align:right;background-color:#fff;">
		<script>
			function ust() {
				$("html, body").animate({scrollTop: 0}, "slow");
			}

		</script>
		<img id="yukari" onclick="ust();" src="y2.png" style="width:40px;height:40px;">
	</div>
	
	<div style="width:100%;background-color:#CD0000;">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
