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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../son_dakika.php" style="text-decoration:none;color:#000;">Son Dakika</a> > Bakan Karaismailoğlu: Samsun-Sarp hızlı tren hattında hızlı adım atacağız</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Bakan Karaismailoğlu: Samsun-Sarp hızlı tren hattında hızlı adım atacağız</b></p>
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
							Ulaştırma ve Altyapı Bakanı Adil Karaismailoğlu, “Samsun- Sarp demir yolu projemiz için hızlı adımlar atacağız. Projenin merkezi Trabzon olacak. Hızlı tren hattıyla seyahat süresi, Trabzon- Sarp arasında 70 dakikaya, Trabzon- Samsun arasında 2 saate düşecektir” dedi. AK Parti'nin Trabzon 1'inci sıra milletvekili adayı da olan Bakan Karaismailoğlu, Samsun-Trabzon- Sarp Hızlı Tren Hattı ile ilgili yazılı açıklamada bulundu. Türkiye’yi demir ağlarla ördüklerini belirten Karaismailoğlu, ülke genelinde 1400 kilometre tren işletmeciliği yapıldığını, buna yeni açılan Ankara-Sivas hattıyla birlikte 400 kilometre daha ilave edildiğini ifade etti. Toplam demiryolu uzunluğunun 13 bin 896 kilometreye çıktığını, hedeflerinin ve hayallerinin büyük olduğuna işaret eden Karaismailoğlu, planlarını da bu doğrultuda yaptıklarını aktardı. Karaismailoğlu, toplam uzunluğu 513 kilometre olacak Samsun-Trabzon-Sarp hızlı tren hattına ilişkin bilgi veren Karaismailoğlu, “Samsun-Sarp demiryolu projemiz için hızlı adımlar atacağız. Projenin merkezi Trabzon olacak. Hızlı tren hattıyla, seyahat süresi; Trabzon-Sarp 70 dakikaya, Trabzon-Samsun 2 saate, Trabzon-Ankara arasında 4,5 saate düşecektir. Yeni ihtiyaçlara göre projeler yapmaya devam edeceğiz. Milletimiz, vatanımız için çalışıyoruz. Biz icraat adamıyız. Biz konuşmayız, icraatlarımız konuşur. 21 yıldır ülkemizin dört bir köşesine kazandırdığımız projelerimiz de bunun en güzel göstergesidir. Doğu, batı, kuzey güney demeden ülkemizin her bir köşesinde yatırımızla imzamızı attık, atmaya da devam edeceğiz” diye konuştu.  
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