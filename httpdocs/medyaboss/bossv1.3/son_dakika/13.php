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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../son_dakika.php" style="text-decoration:none;color:#000;">Son Dakika</a> > Japonya'da nehirdeki set çöktü: Ev ve araçlar sular altında kaldı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Japonya'da nehirdeki set çöktü: Ev ve araçlar sular altında kaldı</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber13-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Japonya'da şiddetli yağışların etkisiyle Hyogo eyaletinde bulunan bir nehrin kıyısındaki set çöktü. Meydana gelen taşkın nedeniyle evleri su basarken, bazı araçlar çamur altında kaldı.Japonya'da şiddetli yağışların etkisiyle Hyogo eyaletinde bulunan bir nehrin kıyısındaki set çöktü. Meydana gelen taşkın nedeniyle evleri su basarken, bazı araçlar çamur altında kaldı. Japonya'nın farklı kesimlerinde dün gece itibariyle etkili olan şiddetli yağışlar Hyogo eyaletinin Itami şehrindeki bir nehrin kenarında bulunan setin çökmesine neden oldu.

Şehir yönetiminden edinilen bilgilere göre Tenjin Nehri kıyısında bulunan ve üzerinde bir süredir güçlendirme çalışmaları yürütülen set, gece yarısından hemen sonra su seviyesinin yükselmesinin ardından yıkıldı.

 Olayın ardından nehrin yakınında Aramaki bölgesinde su baskını yaşanırken, yaklaşık 10 ev ve birçok araç sular altında kaldı. Yerel saatle 01.55 sıralarında 828 hanedeki 2 bin 88 kişiye tahliye uyarısı yapıldı. Nehirdeki su seviyesinin normale dönmesiyle tahliye uyarısı yaklaşık 3 saat sonra kaldırıldı.

Nehir sularının taşıdığı tortu ve kaya parçaları nedeniyle bazı araçlar da toprağa gömüldü. İlk belirlemelere göre olay sırasında yaralanma ya da can kaybı yaşanmadı. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber13-2.webp" style="width:1000px;height:500px;">
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
