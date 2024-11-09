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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../saglik.php" style="text-decoration:none;color:#000;">Sağlık</a> > Gazilere son teknoloji protez</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Gazilere son teknoloji protez</b></p>
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
							Gaziler için Ankara’da son teknoloji ile protezler üretiliyor. O protezlerde ten renginden, tırnağa kadar uyuma özen gösteriliyor. Gaziler Fizik Tedavi ve Rehabilitasyon, Eğitim ve Araştırma Hastanesi Ortez-Protez Laboratuvarı gazilere özel üretim yapıyor. Gaziler için son teknoloji protez kol ve bacaklar üretiliyor. Terörle mücadele sırasında yaralanıp kolunu ya da bacağını kaybeden gaziler, ortez yani vücudun problemli bölümlerine dışarıdan uygulanan yardımcı cihazlar ve protez tedavisi ile hayata tutunuyor. 2000 yılında Ankara'da açılan Gaziler Fizik Tedavi ve Rehabilitasyon Eğitim ve Araştırma Hastanesi Ortez-Protez Laboratuvarı, 2018'den bu yana gazilere özel olarak hizmet veriyor.

Laboratuvarın kuruluşundan bu yana yaklaşık 29 bin ortez protez yapımı gerçekleşti, 23 bin hastaya hizmet verildi. Bu hastaların yaklaşık 5 bin 500'ü gazilerden oluşuyor. 
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
							“SERİ ÜRETİM KAPSAMINDA ÜRETTİĞİMİZ ARAÇ SAYISI 200’Ü 
							GEÇTİ” Şuana kadar seri üretim kapsamında 200’ün 
							üzerinde araç üretildiğini belirten Karakaş, “Geçen 
							sene Mayıs sonunda deneme ve üretime başladık. 
							Regülasyonlar gereği 92 adet testten geçmemiz lazım. 
							Bu süreçte yüzlerce araç ürettik. 23 Mart’a kadar bir 
							çok araç üretip, teste gönderdik, 300’ün üzerinde 
							araç üretmişizdir. Biz kendimiz 26 tanesiyle test 
							filosu içerisinde ülkemizde dolaşmakta, geri bildirim 
							ve ölçümlerde kullanmıyoruz. Seri üretim kapsamında 
							ürettiğimiz araç sayısı 200’ü geçti” diye konuştu. 
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