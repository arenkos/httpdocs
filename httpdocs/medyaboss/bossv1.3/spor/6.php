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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> > Nikola Jokic'in 53 sayısı, Denver Nuggets'a galibiyet için yetmedi</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Nikola Jokic'in 53 sayısı, Denver Nuggets'a galibiyet için yetmedi</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber6-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Amerikan Basketbol Ligi (NBA) Batı Konferansı yarı finalinde Phoenix Suns, konuk ettiği Denver Nuggets'ı 129-124 yenerek seriyi 2-2'ye getirdi. NBA play-off'larına 2 karşılaşmayla devam edildi. Batı Konferansı yarı final serisinde Suns, yıldız oyuncuları Kevin Durant ile Devin Booker'ın skorer oyunlarının yardımıyla Nuggets'ı 5 sayı farkla yenerek dördüncü maçta ikinci galibiyetine ulaştı.

Suns'ta Booker 36 sayı, 12 asist ve 6 ribaunt, Kevin Durant 36 sayı, 11 ribaunt ve 6 asist, Landry Shamet 19 sayı, Deandre Ayton 8'er sayı ve ribauntla galibiyette etkili oldu.

Nuggets'ta all-star Nikola Jokic'in 53 sayı ve 11 asistlik üstün performansı, galibiyet için yetmedi. Kariyerinde iki kez normal sezonun en değerli oyuncusu (MVP) ödülünü kazanan Sırp basketbolcu, NBA'de bir play-off maçında 50 sayı ve 10 asist barajını aşan ilk pivot oldu. Jamal Murray 28 sayı, 7 asist ve 5 ribaunt, Michael Porter 11 sayı ve 10 ribaunt, Aaron Gordon 11 sayı ve 6 ribaunt üretti. Doğu Konferansı yarı finalinde, normal süresi 107-107 sona eren mücadelede Philadelphia 76'ers, ağırladığı Boston Celtics'i uzatma sonunda 116-115 yendi ve seride 2-2 eşitliği yakaladı.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber6-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Sixers'ta mücadeleyi 42 sayı, 9 asist, 8 ribaunt ve 4 top çalmayla tamamlayan all-star James Harden, attığı son saniye basketleriyle maçın uzatmaya gitmesinde ve kazanılmasında kritik rol oynadı. Joel Embiid 34 sayı ve 13 ribaunt, Tyrese Maxey 14 sayı ve 8 ribauntla skora katkı sağladı.

Celtics'te Jayson Tatum 24 sayı, 18 ribaunt ve 6 asist, Jaylen Brown 23 sayı ve 5 asist, Marcus Smart 21 sayı ve 7 asist, Malcolm Brogdon 19 sayı ve 8 ribaunt, Derrick White 12 sayı, Al Horford 10 sayı, 7 ribaunt ve 5 blokla oynadı.
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