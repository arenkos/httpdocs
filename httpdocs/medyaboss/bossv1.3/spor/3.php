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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> > Konyaaltı Belediyespor Kadın Hentbol Takımı Avrupa Kupası'nı kazandı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Konyaaltı Belediyespor Kadın Hentbol Takımı Avrupa Kupası'nı kazandı</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber3-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
Konyaaltı Belediyespor Kadın Hentbol Takımı, EHF Avrupa Kupası finalinde İspanya ekibi Atletico Guardes’i 33-20 yenerek kupanın sahibi oldu. Konyaaltı Belediyesi, kupayı ilk kez Türkiye’ye getirme başarısı gösterdi. 2022-23 EHF Hentbol Kadınlar Avrupa Kupası'nda İspanya'nın Club Balonman Atletico Guardes takımını ikinci final maçında yenen Antalya Konyaaltı Belediye Spor şampiyon oldu.

İspanya'nın Pontevedra kenti A Sangrina Salonu'nda oynanan ilk karşılaşmayı Club Balonman Atletico Guardes takımı 23-17 kazanmıştı. Antalya Spor Salonu'nda oynanan rövanş müsabakanın ilk yarısını Antalya Konyaaltı Belediye Spor 16-7 önde kapattı. İkinci yarıda da üstünlüğünü koruyan Antalya Konyaaltı Belediye Spor maçı 33-20 kazanarak Avrupa Kupası'nda şampiyon olan ilk Türk takımı oldu.

Maç sonrası düzenlenen seremonide Konyaaltı Belediye Spor oyuncularına kupa ve madalyalarını THF Başkanı Uğur Kılıç, Konyaltı Belediye Başkanı Başkanı Semih Esen ve EHF CC Başkanı Bozidar Djurkovic takdim etti. 						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber3-2.webp" style="width:1000px;height:500px;">
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