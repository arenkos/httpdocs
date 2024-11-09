<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include '../doviz.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#232323;height:92px;text-align:left;">
					<?php include '../header.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
		<?php include '../menu.php'; ?>
		<div style="margin: 0 auto;width:1540px;text-align:justify;">
			<div style="text-align:left;margin-top:300px;">
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> > F1 Miami Grand Prix'sinin galibi Verstappen</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>F1 Miami Grand Prix'sinin galibi Verstappen</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber7-1.webp" style="width:1000px;height:500px;padding-top:20px;">
					</td>
					<td style="width:150px;height:500px;">
					</td>
					<td>
						<?php include 'gundemde.php'; ?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Formula 1 Dünya Şampiyonası'nın 5. ayağı Miami Grand Prix'sinde, Red Bull takımının Hollandalı pilotu Max Verstappen birinci oldu. Sezonun 5. mücadelesi, ABD'nin Miami kentiyle aynı adı taşıyan 5,4 kilometrelik pistte, 57 tur üzerinden yapıldı.

Son 2 yılın şampiyonu Verstappen, 9. cepten kalktığı yarışa öndeki sürücülerden farklı olarak sert hamurlu lastiklerle başladı.

46. turdaki "pit stop"un ardından yeni lastiklerle takım arkadaşı Sergio Perez'in 1.5 saniye arkasında piste dönen Verstappen, 48. turda liderliğe yükseldi.

Yarışın en hızlı turuna da imza atan Verstappen, bitiş çizgisini Perez'in 5.3 saniye önünde geçerek bu sezon 3'üncü, kariyerinin 38. yarış birinciliğine ulaştı.

Aston Martin'den Fernando Alonso ise liderin 26.3 saniye arkasında 3. oldu.

Puanını 119'a çıkaran pilotlar klasmanı lideri Verstappen ile en yakın takipçisi Perez arasındaki fark 14 puana yükseldi. Red Bull sürücülerini, 75 puanla Alonso izledi.


Sezonun 6. yarışı Emilia-Romagna Grand Prix'si 21 Mayıs'ta düzenlenecek. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber7-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							
						</div>
					</td>
				</tr>
			</table>
		</div>
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
	
	<div style="width:100%;background-color:#232323;">
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>