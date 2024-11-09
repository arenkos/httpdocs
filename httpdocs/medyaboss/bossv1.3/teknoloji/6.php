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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../teknoloji.php" style="text-decoration:none;color:#000;">Teknoloji</a> > ZTE, taşınabilir PC modeli ile ses getirecek</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>ZTE, taşınabilir PC modeli ile ses getirecek</b></p>
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
							ZTE, taşınabilir bir 5G Wi-Fi cihazı olan U50 Pro’yu kullanıcıların beğenisine sunuyor. Qualcomm Snapdragon X62 yonga seti, 5G çift mod desteği ve küresel uyumluğu gibi özellikleriyle, cihaz oldukça etkileyici özellikler sunuyor. Ayrıca, dünya genelinde 100’den fazla ülke ve bölgenin ağlarına uyumlu. U50 Pro, 5G NR ağ taşıyıcı birleştirme teknolojisine ve düşük frekanslı ENDC teknolojisine sahip. Bu ileri teknolojiler, kullanıcıların daha hızlı indirme ve yükleme hızlarından, daha yüksek ağ kapasitesinden ve düşük kapsama alanlarındaki geliştirilmiş bağlantıdan yararlanmasını sağlar.

Wi-Fi 6 standardını destekleyen cihaz, 3600Mbps’ye kadar maksimum hız sağlar ve aynı anda 64 cihazın internete bağlanmasını destekler. Bu özellik, birden fazla cihazı aynı anda internete bağlaması gereken kullanıcılar için ideal bir seçenek oluyor.

Cihazın en etkileyici özelliklerinden biri pil ömrü. 10000mAh’lık devasa bir pile sahip olan U50 Pro, sürekli kullanımda 16 saate kadar çalışma süresi sunuyor. Ayrıca, 27W şarj özelliği sayesinde, cihazın pil ömrü bittiğinde hızlı bir şekilde şarj edilebilir.

ZTE U50 Pro, NFC mobil telefon bağlantısı özelliği sayesinde kullanıcıların mobil telefonlarını cihaza hızlı ve kolay bir şekilde bağlamasını sağlar. Cihaz, 18W çıkış sağlayarak diğer cihazları şarj etmek için bir güç bankası olarak da kullanılabilir. Cihazın kompakt boyutu, taşıması kolay olmasını sağlar.
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
							U50 Pro, kullanıcıların çeşitli ayar ve özelliklere hızlı bir şekilde erişebilmesini sağlayan 2,4 inçlik bir dokunmatik ekrana sahiptir. Cihazın fiyatı 1699 yuan (245.99 dolar) olarak belirlendi.
ZTE U50 Pro taşınabilir 5G Wi-Fi cihazı, taşınabilirliği, pil ömrü, hızlı şarjı ve NFC mobil telefon bağlantısı özelliğiyle öne çıkıyor. Kullanıcılar, bu cihazla yüksek hızda internet bağlantısı deneyimi yaşayabilir ve diğer cihazlarını da şarj edebilirler. ZTE, yenilikçi ürünlerle müşteri ihtiyaçlarını karşılamaya devam ediyor. ZTE yeni bilgisayar modeli ile pazarda ses getirecek. 
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