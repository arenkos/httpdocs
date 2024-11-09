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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../gundem.php" style="text-decoration:none;color:#000;">Gündem</a> > Son dakika haberi MİT'ten nokta operasyon!</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Son dakika haberi MİT'ten nokta operasyon!</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber4-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							MİT, kırmızı bültenle aranan terör örgütü PKK/KCK'nın sözde özel güç cephe sorumlusu Eyvaz Beyazı, Irak'ın Dohuk-Gara bölgesinde düzenlediği operasyonla etkisiz hale getirdi. Milli İstihbarat Teşkilatı (MİT), terör örgütü PKK/KCK'nın sözde özel güç cephe sorumlusu "Zerdeşt Karadeniz" kod adlı Eyvaz Beyaz'ı, Irak'ın Duhok/Gara bölgesinde düzenlediği operasyonla etkisiz hale getirdi.

Güvenlik kaynaklarından alınan bilgiye göre, 1994'te örgütün kırsal kadrolarına katılan terörist Beyaz, 27 Ekim 2010'da Sinop'un Gerze ilçesinde jandarma ve 6 Nisan 2011'de Sinop'un Boyabat ilçesinde emniyete ait araca silahlı saldırı ile 26 Haziran 2012'de Trabzon'da Düzköy İlçe Jandarma Komutanlığına yönelik bombalı saldırı gerçekleştirdi. Interpol tarafından kırmızı bültenle aranan ve İçişleri Bakanlığı Terör Arananlar Listesi'nde gri kategoride yer alan terörist Beyaz'ın, Irak'ın kuzeyindeki Zap bölgesinde güvenlik güçlerince başlatılan operasyonlara karşı düzenlenen eylemler içerisinde sorumlu olarak yer aldığı öğrenildi. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber4-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Bunun üzerine takibe alınan Beyaz, MİT'in Duhok-Gara bölgesinde düzenlediği nokta operasyonla etkisiz hale getirildi. MİT, Irak'ın kuzeyindeki Gara bölgesinde 4 Mayıs'ta terör örgütü PKK/KCK'nın sözde eğitim sorumlusu Ahmet Gümüş'ü, 5 Mayıs'ta ise sözde özel güç lojistik sorumlusu Neçirvan Seven'i etkisiz hale getirmişti. Böylece son bir haftada Gara bölgesinde sözde üst düzey 3 terörist etkisiz hale getirilmiş oldu. 
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