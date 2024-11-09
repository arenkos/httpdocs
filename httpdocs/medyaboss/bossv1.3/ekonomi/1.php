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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../ekonomi.php" style="text-decoration:none;color:#000;">Ekonomi</a> > ABD'de tarım dışı istihdam nisanda beklentiyi aştı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>ABD'de tarım dışı istihdam nisanda beklentiyi aştı</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber1-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							ABD'de tarım dışı istihdam nisan ayında 180 binlik beklentiye karşın 253 bin artış kaydetti. Ülkede işsizlik yüzde 3,4'le 1969'dan beri en düşük düzeye geriledi.Piyasaların merakla beklediği veri açıklandı.

ABD Çalışma Bakanlığı verilerine göre, nisan ayında tarım dışı istihdam nisan ayında 180 binlik beklentiye karşın 253 bin artış gösterdi.

<p style="text-align:left;">54 YILIN EN DÜŞÜK İŞSİZLİK RAKAMI</p>

İşsizlik oranı yüzde 3,5'ten yüzde 3,4'e geriledi. ABD'de işsizlik oranı böylece 1969'dan beri en düşük düzeye indi.

İş gücüne katılım nisan ayında yüzde 62,6 ile değişiklik göstermedi.​<p style="text-align:left;">SAATLİK KAZANÇLAR BEKLENTİYİ AŞTI</p>

Enflasyon için önemli bir gösterge olan ortalama saatlik kazançlar, yüzde 0,3'lük artış beklentisine karşın yüzde 0,5 arttı. Yıllık bazda ücretler yüzde 4,2 artış beklentisinin üzerinde yüzde 4,4 arttı. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber1-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							<p style="text-align:left;">DOLAR ARTTI, ALTIN DÜŞTÜ</p>

Veri sonrasında dolar endeksi 101,3'ten 101,7'ye yükselirken, altının onsu yüzde 2 düşüşle 2 bin 34 dolardan 2 bin 8 dolara kadar geriledi.

ABD Merkez Bankası (Fed) Başkanı Jerome Powell çarşamba günkü açıklamalarında enflasyonla mücadele vurgusu yaparken veri odaklı karar alacaklarını yinelemişti.

Fed, enflasyonu yıllık yüzde 2 seviyesine indirmeye çalışıyor. ABD'de enflasyon yüzde 5 seviyesinde bulunuyor.
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