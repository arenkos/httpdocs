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

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=kayit.php">
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
		<?php include 'head2-mobil.php'; ?>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;">
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
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>
