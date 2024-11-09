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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../teknoloji.php" style="text-decoration:none;color:#000;">Teknoloji</a> > İran Dışişleri Bakanlığı'nın internet sitesi hacklendi</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>İran Dışişleri Bakanlığı'nın internet sitesi hacklendi</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber1-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							İran Dışişleri Bakanlığı Sözcüsü Nasır Kenani, bakanlığın resmi sitesinin hacklendiğini ifade ederek, belge ve veri tabanının ele geçirildiğine yönelik iddiaları yalanladı. İran’ın resmi haber ajansı IRNA’ya göre, Kenani, Dışişleri Bakanlığının sitesinin hacklenmesine ilişkin açıklamada bulundu.

Sitenin ara yüzünün siber saldırıya uğradığını belirten Kenani, gerekli tedbirlerin alındığını, tüm hizmet sistemlerinin aktif olarak kamuoyunun kullanımına açıldığını kaydetti.

Kenani, “Sosyal medyada Dışişleri Bakanlığı'na ait olduğu belirtilerek yayımlanan bilgiler sahte ve temelsizdir. Bugün olanlarla (siber saldırı) hiçbir ilgisi yok ve sadece bir medya abartısından ibaret” değerlendirmesinde bulundu. İran medyasında yer alan haberlere göre, Dışişleri Bakanlığının internet sitesi bir hacker grubunun saldırısı sonucu bir süre çevrim dışı kaldı. Saldırıyı gerçekleştiren grup, bakanlığın çok sayıda gizli belgesini ele geçirdiğini ileri sürdü.

Ele geçirildiği belirtilen bilgiler arasında kimlik belgeleri, bakanlık yazışmaları, telefon numaraları ve binlerce bakanlık çalışanının listesinin bulunduğu iddia edildi. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber1-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Hacklenen sitenin ana sayfasında bir süre, ülkede terör örgütü olarak kabul edilen Halkın Mücahitleri Örgütü liderlerinin fotoğrafları ile birlikte “Hamaney’e ölüm, yaşasın Recevi” ifadesi yer aldı.

“Kıyam ta Serneguni” (Devirene Kadar Kıyam) isimli hacker grubu, daha önce de İslam Kültür ve İletişim Kurumunun internet sitesini hackleyerek 200 bin dosya ve belge ele geçirdiğini iddia etmişti.
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