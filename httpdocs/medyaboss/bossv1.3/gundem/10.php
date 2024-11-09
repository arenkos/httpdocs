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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../gundem.php" style="text-decoration:none;color:#000;">Gündem</a> > Milli Eğitim Bakanı açıkladı: Eğitime seçim arası</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Milli Eğitim Bakanı açıkladı: Eğitime seçim arası</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber10-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							SON DAKİKA HABERİ: Milli Eğitim Bakanı Özer, "Cumhurbaşkanı ve 28. Dönem Milletvekili Genel Seçimlerinin ertesi günü eğitim öğretime 1 gün ara vereceğiz. Öğretmenlerimizi de idari izinli sayacağız." açıklamasında bulundu. Milli Eğitim Bakanı Mahmut Özer, 14 Mayıs'ta yapılacak Cumhurbaşkanı ve 28. Dönem Milletvekili Genel Seçimleri'nin ertesi günü 15 Mayıs'ta, eğitim öğretime 1 gün ara verileceğini ve öğretmenlerin de idari izinli sayılacağını bildirdi.

Özer, 24 TV canlı yayınında gündemi değerlendirdi ve soruları yanıtladı.

Seçimin ilk turda bitmesi veya ikinci tura kalma ihtimaliyle ilgili soru üzerine Özer, hiçbir sıkıntı olmadan ve Cumhurbaşkanı Recep Tayyip Erdoğan'ın başarısıyla seçimin birinci turda neticeleneceğini belirtti.

Özer, Batı medyasının Cumhurbaşkanı Recep Tayyip Erdoğan ve seçimlere yönelik ifadelerine ilişkin soru üzerine, Türkiye'nin eski Türkiye olmadığını ve kendi hikayesini yazan bir ülke olduğunu kaydetti.

Türkiye'nin, Batı'nın menfaatlerini değil, kendi menfaatlerine sahip çıkmaya başladığı için rakip olduğunu vurgulan Özer, "Onlar ne derse desin milletin iradesi sandıkta tecelli edecek ve millet hiçbir zaman yanlış karar vermez." ifadesini kullandı. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber10-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Bakan Özer, 14 Mayıs Pazar günü yapılacak Cumhurbaşkanı ve 28. Dönem Milletvekili Genel Seçimleri'nin ertesi günü okullardaki eğitim öğretim sürecine yönelik soru üzerine, demokrasinin en büyük katkı veren kurumunun Milli Eğitim Bakanlığı olduğunu söyledi.

Okullarda sandık kurulacağını ve öğretmenlerin sürece aktif katılacaklarını belirten Mahmut Özer, şöyle devam etti:

"Okullarımızı ve öğretmenlerimizi bir sonraki öğretim gününe rahat ve sağlıklı bir şekilde hazırlayabilmek için seçimin ertesi günü eğitim öğretime bir gün ara vereceğiz. 16 Mayıs'ta eğitim öğretim başlayacak. Öğretmenlerimizi de idari izinli sayacağız."
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