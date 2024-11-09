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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> > Jose Mourinho PSG'ye yakın!</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Jose Mourinho PSG'ye yakın!</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber4-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Bu sezon işler yolunda gitmeyen PSG'de yönetim yeni sezon için kararlar almaya başladı. Fransız ekibi, beklenen sportif başarıyı sunamayan Christophe Galtier ile yeni sezonda devam etmek istemiyor. Takımın başına yeni sezon Jose Mourinho'yu getirmeyi düşünen PSG yönetimi, Portekizli antrenörle görüşmelere başladı. Hayal kırıklığı yaratan bir sezondan sonra yeni hoca arayışlarına başlayan PSG'de en büyük aday Jose Mourinho oldu. Hayal kırıklığı yaratan bir sezondan sonra yeni hoca arayışlarına başlayan PSG'de en büyük aday Jose Mourinho oldu. Fransa basınında çıkan haberlere göre, PSG'de danışmanlık görevini yürüten Luis Campos'un, Mourinho ile bir araya geldiği öne sürüldü. PSG son dönemde takım içi karışıklık sürerken yönetim, yeni sezonda daha otoriter bir teknik adamı takımın başında görmek istiyor. Özellikle son dönemde takımın disiplinsiz davranışlarını olduğu düşünen PSG yönetimi yeni hoca arayışlarında otoriterlik kriterini ortaya koydu. Bu nedenle Mourinho'nun ismi öne çıktı.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber4-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Mourinho'nun ismi Brezilya ve Cristiano Ronaldo'nun oynadığı Al Nassr ile anılırken Portekizli teknik adam kariyerine büyük bir destek sağlayabileceği için PSG'ye sıcak bakıyor. Mourinho daha önce yaptığı açıklamada PSG'nin yıldızı Kylian Mbappe'nin büyük bir hayranı olduğunu söylemişti. Mourinho'nun Tottenham'daki yardımcısı Joao Sacramento'nun da halihazırda PSG teknik heyetinde yer alması bu iddiaları güçlendirdi. Roma ile Haziran 2024'e dek kontratı bulunan Mourinho daha önce ülkesi Portekiz'in yanı sıra İngiltere, İtalya ve İspanya'da şampiyonluklar kazanırken, iki kez de Şampiyonlar Ligi zaferi yaşamıştı. 
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