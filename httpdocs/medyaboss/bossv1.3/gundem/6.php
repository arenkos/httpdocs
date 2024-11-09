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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../gundem.php" style="text-decoration:none;color:#000;">Gündem</a> > İmamoğlu’nun Erzurum mitingine taşlı saldırı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>İmamoğlu’nun Erzurum mitingine taşlı saldırı</b></p>
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
							Millet İttifakı Cumhurbaşkanı yardımcısı adayı ve İBB Başkanı Ekrem İmamoğlu'nun Erzurum mitingine saldırı düzenlendi. Yaşanan olaylar sonrası bazı vatandaşlar yaralandı. Millet İttifakı'nın Cumhurbaşkanı adayı ve CHP Genel Başkanı Kemal Kılıçdaroğlu ve İstanbul Büyükşehir Belediye Başkanı Ekram İmamoğlu sosyal medya hesaplarından konuya ilişkin paylaşımda bulundu. Millet İttifakı Cumhurbaşkanı yardımcısı adayı ve İBB Başkanı Ekrem İmamoğlu’nun Erzurum’da düzenlenen mitingde halka hitap ettiği anda gerginlik yaşandı.
<p style="text-align:left;">TAŞLI SALDIRI DÜZENLENDİ</p>
Miting alanının hemen yanında toplanan bir grup İmamoğlu’nun bulunduğu otobüse ve alandaki vatandaşlara taş ve yanlarında getirdikleri bazı cisimleri fırlatmaya başladı. Saldırı sonrası bazı vatandaşlar yaralandı.
	<p style="text-align:left;">İMAMOĞLU POLİSLERE SESLENDİ</p>	
Yaşananlar üzerine İmamoğlu, alanda duran polislere seslenerek gruba müdahale etmesini istedi.

Olayların ardından İmamoğlu şu ifadeleri kullandı;

*Bir avuç insan, ne yazık ki kalplerini buzla kaplatmış olabilir. Siz onlara asla aldırış etmeyin. Onlar bu yaptıklarına pişman olacaklar.

*Onlar bir süre son pişman olacaklar. Bize sevgi, barış, huzur, bolluk, bereket sözleri düşüyor. Siz bunları konuşun.	
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
							<p style="text-align:left;">POLİS MÜDAHALE ETTİ</p>
							Polis saldıran gruba müdahaleye başladı. İmamoğlu’nun konuşma yaptığı otobüs de alandan uzaklaştırıldı.
							<p style="text-align:left;">İMAMOĞLU'NDAN PAYLAŞIM</p>
							İstanbul Büyükşehir Belediye Başkanı Ekrem İmamoğlu, "Bugün yaşanan olayların Erzurumlu hemşehrilerimle ilgisi yoktur. Yaralı vatandaşlarımızla konuşuyor, durumlarını yakından takip ediyorum." ifadesi ile sosyal medya hesabından konuya ilişkin paylaşımda bulundu.
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