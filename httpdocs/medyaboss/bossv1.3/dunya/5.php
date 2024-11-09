<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=5-mobil.php">
    <?php
}
?>
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../dunya.php" style="text-decoration:none;color:#000;">Dünya</a> > ABD Green Card sonuçları açıklandı mı?</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>ABD Green Card sonuçları açıklandı mı?</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber5.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							ABD’de çalışma izni elde etmek için Green Card başvurusu gerçekleştiren adaylar sonuçlar için gelecek resmi açıklamayı beklemeye başlamıştı. Beklenen açıklama 6 Mayıs'ta geldi ve 2023 Green Card sonuçları açıklandı. İşte ABD Yeşil Kart (Green Kart) başvuru sonucu sorgulama linki…Green Card sonuçları erişime açıldı. Değerlendirme sürecinin tamamlanmasının ardından adaylar sonuçlarını kontrol etmeye başladı. Peki, Yeşil Kart başvuru sonuçları nasıl öğrenilecek?Binlerce başvuru arasından belirlenen şanslı kişiler belli oldu. Bu yıl pasaport şartının da aranmadığı Green Card başvuruları sonrası değerlendirme süreci sona erdi.
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
							Amerika Birleşik Devletleri‘nde çalışma hakkı veren Green Card sonuçları yapılan bilgilendirmeye göre 6 Mayıs 2023'te açıklandı. Başvuruda bulunan adaylar sonuçlarını http://dvprogram.state.gov adresinden öğrenebiliyorlar. ABD Dışişleri Bakanlığı Konsolosluk İşleri Bürosu'nun https://dvprogram.state.gov/ internet adresinden yapılan açıklamaya göre DV-2024 Katılımcılar, 6 Mayıs 2023'te öğlen (EDT)'den başlayarak Green Card sonuçlarını öğrenebilecekler.
							<p><a href="https://dvprogram.state.gov/">GREEN CARD BAŞVURU SONUCU LİNKİ İÇİN TIKLAYINIZ…</a></p>
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