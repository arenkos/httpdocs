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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../son_dakika.php" style="text-decoration:none;color:#000;">Son Dakika</a> > Ukraynalı komutandan Bahmut yorumu</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Ukraynalı komutandan Bahmut yorumu</b></p>
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
							Rus paralı asker grubu Wagner’in lideri Yevgeni Prigojin, mermi eksiği gerekçesiyle Bahmut'tan çekileceğini duyurmuştu. Prigojin, açıklamasının ardından Moskova’nın kendisine mühimmat sözü verdiğini açıkladı. Çeçen lider Ramazan Kadirov ise, Wagner yerine kendi askerlerinin Bahmut'ta girmeye hazır olduğunu söyledi. Rus paralı asker grubu Wagner'in lideri Yevgeni Prigojin'in 'Mermimiz kalmadı' çıkışından bir gün sonra, beyaz fosfor bombardımanı Bahmut'ta geceyi gündüze çevirdi.

Görüntüler, kentte bulunan Ukrayna Özel Harekat Birlikleri tarafından servis edildi.

CNN International'a konuşan bir komutan, Wagner liderinin ‘yeterli mermi yok’ açıklamasının ‘tamamen bir blöf’ olduğunu söyledi.

Ukraynalı asker, Rusların Bahmut'taki mevzilere günde 20 binden fazla top atışı gerçekleştirdiğini öne sürdü.

Prigojin, Rusya Savunma Bakanı Sergey Şoygu ve Genelkurmay Başkanı Valeri Gerasimov'u hedef aldığı küfürlü bir video paylaşmıştı.

Wagner lideri, saatler içinde paylaştığı başka bir videoda, birliklerinin 10 Mayıs'ta Bahmut'tan çekileceğini duyurdu ve “Mühimmat olmadan askerlerim Bahmut'ta gereksiz kayıplar verecek. Bu yüzden 10 Mayıs 2023'te Bahmut'tan çekiliyoruz.” dedi.

Prigojin'in açıklamasının ardından Rusya Savunma Bakanlığı, Şoygu'nun birlikleri teftiş ettiği görüntüler paylaştı. Prigojin ise daha sonra, Moskova'nın Wagner'e top mermisi gönderme sözü verdiğini söyledi. Rusya Devlet Başkanı Vladimir Putin'in müttefiki ve Çeçenistan lideri Ramazan Kadirov'dan da açıklama geldi.

Kadirov, Çeçen birliklerinin Bahmut mevzilerini Wagner askerlerinden devralmaya hazır olduğunu duyurdu ve “Bunu kaldıramayacak herkesin yerine geçecek kaynak ve imkanımız var. Savunma Bakanlığı ile strateji görüşmelerine başladık.” ifadelerini kullandı. 
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