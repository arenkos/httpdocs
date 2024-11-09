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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> > Samsunspor şampiyonluk kupasını aldı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Samsunspor şampiyonluk kupasını aldı</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber2-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Spor Toto 1. Lig şampiyonu Samsunspor, kupasını 19 Mayıs Stadyumu’nda düzenlenen törenle aldı. Samsunspor bu sezon ligin bitmesine 6 hafta kala Süper Lig’e çıkmayı, 5 hafta kala da şampiyon olmayı garantilemişti. Ligi şampiyon olarak bitirmeyi garantileyen Samsunspor için bugün 19 Mayıs Stadyumu’nda kupa teslim töreni düzenlendi.

Kupa töreni ilk olarak DJ performansı ile başladı. Film gösteriminin ardından ünlü pop şarkıcısı İrem Derici konser verdi. Protokol konuşmalarının ardından şampiyonluk kupası Samsunsporlu futbolcuların elinde yükseldi. Tek tek sahneye çağrılan futbolcular kendi seçtikleri şarkılarla gönüllerince eğlendiler. Kupa töreninde konuşan Samsunspor Başkanı Yüksel Yıldırım, “Geçen yıl sizlere söz vermiştim. Süper Lig’e yükselme sözümü tuttum. Bugün size yeni bir söz veriyorum. Samsunspor armasını kısa sürede Avrupa’da göreceğiz. Sizler bize, takımımıza destek olmaya devam edin. Efsane Samsunspor Süper Lig’e yeni gelmedi, geri geldi. Rakiplerimizin ikincilik mücadelesi verdiği bu haftalarda bizler şampiyonluğu kutluyoruz. En büyük Samsunspor” dedi.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber2-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Başkan Yıldırım’ın ardından Türkiye Futbol Federasyonu (TFF) Başkanı Mehmet Büyükekşi taraftarla seslendi. Büyükekşi konuşmasına başlar başlamaz seyirciler ıslık ve yuhalamalarla ile Başkan Mehmet Büyükekşi’nin sesini bastırmaya çalıştı. Samsunspor’a Süper Lig’de başarılar dileyen Büyükekşi’den sonra tekrar mikrofonu alan Samsunspor Başkanı Yüksel Yıldırım, Samsunspor taraftarına bu tavrın yakışmadığını söyleyerek, TFF Başkanı Büyükekşi’yi alkışlattırdı. Konuşmalar ve kupa teslim töreninin ardından futbolcular şampiyonluk kupası ile taraftarları selamladılar. Selamlanın ardından gece, ünlü şarkıcılar Sefo ve Özcan Deniz konserleri ile devam etti. Zaman zaman sahaya giren taraftarlar ise güvenlik güçleri tarafından tekrar tribünlere gönderildi.

Törene ayrıca Ticaret Bakanı Mehmet Muş, Samsun Büyükşehir Belediye Başkanı Mustafa Demir ve protokol üyeleri katıldı.
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