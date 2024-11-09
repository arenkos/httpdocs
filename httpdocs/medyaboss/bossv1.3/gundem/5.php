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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../gundem.php" style="text-decoration:none;color:#000;">Gündem</a> > Meteoroloji'den çifte uyarı! Şiddetli sağanak ile rüzgara dikkat</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Meteoroloji'den çifte uyarı! Şiddetli sağanak ile rüzgara dikkat</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber5-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Meteoroloji'nden yapılan açıklamaya göre bugün Karadeniz, Akdeniz ve iç bölgelerde olmak üzere 4 bölgede kuvvetli yağış bekleniyor. Açıklamada yurdun doğusunda ise saatteki hızı yer yer 70 kilometreye kadar çıkabilecek rüzgar da beklendiği kaydedildi. Meteoroloji Genel Müdürlüğü tarafından yapılan son değerlendirmelere göre, ülkemiz genelinin parçalı ve çok bulutlu, Marmara’nın doğusu, İç Ege, Akdeniz, İç Anadolu, Karadeniz, Doğu Anadolu ile Muğla, Adıyaman ve Siirt çevrelerinin yerel olmak üzere sağanak ve gök gürültülü sağanak yağışlı geçeceği tahmin ediliyor.

Yağışların; Batı Akdeniz’in iç kesimleri, İç Anadolu’nun kuzeydoğusu, Muğla, Denizli, Tokat, Trabzon, Gümüşhane, Bayburt, Erzincan ve Tunceli çevreleri, Kastamonu’nun kıyı kesimleri ile Doğu Akdeniz’in Toroslar kesiminde yer yer kuvvetli olması bekleniyor.
<p style="text-align:left;">SICAKLIKLARDA DEĞİŞİM YOK</p>
Sıcaklıkların ise iç ve doğu kesimlerde 2 ila 6 derece azalacağı, diğer yerlerde önemli bir değişiklik olmayacağı tahmin ediliyor.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber5-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Açıklamada yağışların Batı Akdeniz’in iç kesimleri, İç Anadolu’nun kuzeydoğusu, Muğla, Denizli, Tokat, Trabzon, Gümüşhane, Bayburt, Erzincan ve Tunceli çevreleri, Kastamonu’nun kıyı kesimleri ile Doğu Akdeniz’in Toroslar kesiminde yer yer kuvvetli olması beklendiğinden yaşanabilecek sel, su baskını, yıldırım, ulaşımda aksamalar, yağış anında kuvvetli rüzgar, yerel dolu yağışı gibi olumsuzluklara karşı dikkatli ve tedbirli olunması istendi.

Rüzgarın ise Doğu Karadeniz’in doğusu ile Doğu Anadolu’nun doğusunda güney ve güneybatı yönlerden kuvvetli (40-70 km/saat) esmesi beklendiğinden yaşanabilecek olumsuzluklara karşı dikkatli olunması istendi. 
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