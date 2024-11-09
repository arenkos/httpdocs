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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../saglik.php" style="text-decoration:none;color:#000;">Sağlık</a> > Haftada 30 dakika telefonla konuşmak yüksek tansiyon riskini artırabilir</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Haftada 30 dakika telefonla konuşmak yüksek tansiyon riskini artırabilir</b></p>
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
							Araştırmalar, haftada yarım saat cep telefonuyla konuşmanın yüksek tansiyon riskini artırabileceğini gösteriyor. Çin Güney Tıp Üniversitesinden bir ekip, cep telefonuyla konuşma ile yüksek tansiyon riski arasında bir bağlantı olup olmadığını araştırdı.

Daily Mail’in haberine göre, araştırma kapsamında İngiltere'de yaklaşık 200 bin yetişkin, 12 yıl boyunca izlendi.

Çalışma, haftada 30 dakika ya da daha fazla telefonla konuşanların, daha az konuşanlara oranla yüksek tansiyon geliştirme riskinin yüzde 12 fazla olduğunu gösterdi.

Yüksek tansiyon geliştirme riski en yüksek grubun, günde bir saatini düzenli olarak telefonda konuşarak geçirenler olduğu kaydedildi.

Ayrıca haftada altı saatten fazla telefonla konuşanlarda yüksek tansiyon görülme olasılığının, beş dakikadan az konuşanlara oranla yüzde 25 daha yüksek olduğu tespit edildi. 
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
							<p style="text-align:left;">"TELEFON GÖRÜŞMELERİ AZALTILMALI" UYARISI!</p>
							Araştırmacılar, cep telefonu kullanımı ile yüksek tansiyon arasındaki bağlantının, cihazların yaydığı düşük seviyede radyo frekansı enerjisiyle ilgili olabileceğini belirtti.

Katılımcıların cep telefonu kullandığı yıl sayısı ve kulaklık veya hoparlör gibi ekipmanlar kullanıp kullanmamalarının, risk seviyesinde bir fark yaratmadığı bildirildi.

Uzmanlar, kalp sağlığı açısından telefon görüşmelerinin azaltılması gerektiği konusunda uyarı yaptı.
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