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
    ?><meta http-equiv="refresh" content="0; URL=1-mobil.php">
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../dunya.php" style="text-decoration:none;color:#000;">Dünya</a> > Birliklerini Bahmut'tan çekeceğini açıklamıştı…</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Birliklerini Bahmut'tan çekeceğini açıklamıştı… </b></p>
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
							Yaklaşık 10 aydır Ukrayna’da çatışmaların en yoğun yaşandığı adres olan Bahmut’taki son duruma ilişkin Rusya’dan gelen açıklamalara bir yenisi daha eklendi. Geçtiğimiz günlerde Rus paralı asker şirketi Wagner'in lideri Yevgeny Prigozhin, sıklıkla dile getirdiği mühimmat eksikliğine dikkat çekerek 10 Mayıs’ta birliklerini Bahmut’tan çekmek zorunda kalacağını açıklamıştı. Wagner lideri, yeni bir açıklamada daha bulanarak cephane talebinin kabul edildiğini duyurdu.“Şoygu! Gerasimov! ..Cephane nerede?”

Rus paralı asker şirketi Wagner'in lideri Yevgeny Prigozhin, Rusya Savunma Bakanı Sergey Şoygu ve Genelkurmay Başkanı Valeri Gerasimov’a bu sözlerle seslenmişti.Mühimmat eksikliği nedeniyle kentten 10 Mayıs’ta birliklerini çekmek zorunda kalacağını açıklayan Prigozhin, gereken mühimmat sağlansaydı kayıplarının 5 kat az olacağını söylemişti.
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
							Kontrolü ele geçirmeye çalıştığı Ukrayna’nın Bahmut kentinde yaşadığı askeri kaybı video çekerek öfke dolu mesajla Moskova’ya ileten Wagner lideri Prigozhin, talebinin karşılanacağına dair söz verildiğini belirterek bölgeden çekilmeyeceğini sinyalini verdi.Wagner şefi, Bahmut'ta savaşmaya devam etmesi için Moskova'dan kendisine silah sözü verildiğini söyledi.

Uluslararası haber ajanslarında yer alan haberlere göre, Prigozhin, Bakhmut kentine yönelik aylarca sürecek bir saldırıyı sürdürmek için yetecek cephane ve silah sözü verildiğini açıkladı.

Prigozhin'in bu sözleri 'U' dönüşü olarak nitelendirildi.

Konuya yönelik Rusya Savunma Bakanlığı ya da Kremlin'den resmi bir açıklama gelmedi. Prigozhin, geri çekilme kararından vazgeçtiğine ilişkin de net bir mesaj vermedi. Ancak son açıklama, bölgede kalmaya devam edeceğinin bir sinyali olarak görülüyor.

Ukrayna ise Wagner güçlerinin Bahmut'tan çekildiğine dair bir işaret olmadığını söyledi.
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