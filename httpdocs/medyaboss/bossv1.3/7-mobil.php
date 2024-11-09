<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=7.php">
    <?php
}
?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2-mobil.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#232323;height:92px;text-align:left;">
					<?php include 'header2-mobil.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
		
		<div style="margin: 0 auto;width:100%;text-align:justify;">
			<div style="text-align:left;margin-top:300px;">
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="gundem.php" style="text-decoration:none;color:#000;">Gündem</a> > Kılıçdaroğlu: Tarihi İpek Yolu’nu canlandıracağız</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:100%;">
						<p style="text-align:left;"><b>Kılıçdaroğlu: Tarihi İpek Yolu’nu canlandıracağız</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:100%;">
					<td>
						<img src="../bossv1.4/haber7-1.webp" style="width:100%;height:500px;padding-top:20px;">
					</td>
				</tr>
				<tr>
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							Millet İttifakı Cumhurbaşkanı adayı ve CHP Genel Başkanı Kemal Kılıçdaroğlu, sosyal medya paylaşımında 'Ne Batı ne Doğu, bu Türk'ün Yolu' projesinin ayrıntılarını açıkladı. Millet ittifakının cumhurbaşkanı adayı Kemal Kılıçdaroğlu, tarihi İpek Yolu’nun canlandıracaklarını söyledi. Kılıçdaroğlu sosyal medya platformu Twitter'da ‘Ne Batı ne Doğu, bu Türk’ün Yolu’ başlığıyla yeni bir video paylaştı. Kılıçdaroğlu videolu paylaşımında “Yani Türkiye’yi Çin’e bağlayacağız. Hızlı, yeni bir ticaret ve taşıma koridoru. Yani otoban açacağız. Bu koridor boyunca yüksek kapasiteli karayoluyla çift hat demiryolu altyapısı oluşturacağız” dedi.


Kılıçdaroğlu, paylaşımında şu ifadelere yer verdi:

"Sevgili halkım, sevgili gençler. 'Millet İttifakı Batı yanlısı' iftirasında bulunuyorlar. Onlar konuşadursunlar. Bugün hayatımın en büyük projesini açıklıyorum. Görsünler batıyı, doğuyu ne kadar umursuyormuşum. Ben doğu-batı diye ayırmam. Türk devletinin menfaatleri neredeyse orada olurum. Açıklayacağım proje, Türk devletinin gerçek manada Türk dünyasıyla buluşma projesidir. Türkiye'nin Türk dünyasıyla geç başlayan ama yavaş yavaş sağlıklı bir zemine oturmaya başlamış ilişkilerini arşa çıkaracak projedir bu. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="../bossv1.4/haber7-2.webp" style="width:100%;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							<p style="text-align:left;">"5 BİN 500 KM UZUNLUĞUNDA OLACAK"</p>
							Tarihi ipek yolunu canlandıracağız. Yani Türkiye'yi Çin'e bağlayacağız. Hızlı, yeni bir ticaret taşıma koridoru, yani otoban açacağız. Bu koridor boyunca yüksek kapasiteli kara yolu ile çift hat demir yolu altyapısı oluşturacağız. Tarihi ipek yolu otobanı ve demir yolu yaklaşık 5 bin 500 km uzunluğunda olacak.

Şimdi düşünün, Türkiye'den Gürbulak ve Kapıköy'den çıkarak, İran'da Tebriz ve Tahran'ı, Türkmenistan'da Aşkabat'ı, Özbekistan'da Taşkent'i ve Kazakistan'da da Almatı'yı geçerek Çin'e varacaksınız. Böylece kuzeyde Gürbulak ve Çin'in koridor üzerindeki ülkelerin Avrupa ve Karadeniz limanlarına, güneyde ise Kapıköy ile Mersin ve İskenderun limanlarına bağlantısı sağlanacak."
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
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>