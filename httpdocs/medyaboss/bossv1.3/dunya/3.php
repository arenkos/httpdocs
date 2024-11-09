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
    ?><meta http-equiv="refresh" content="0; URL=3-mobil.php">
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../dunya.php" style="text-decoration:none;color:#000;">Dünya</a> > Almanya depremzede vizelerini uzatacak</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Almanya depremzede vizelerini uzatacak</b></p>
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
							Almanya’da hükümet, Kahramanmaraş merkezli depremlerin ardından Almanya’ya akrabalarının yanlarına gelen depremzedelerin ülkede kalma süresini 3 ay daha uzattı.Berlin, Kahramanmaraş merkezli depremlerin ardından Almanya'daki yakınlarının yanına gelen depremzedelerin vizesini otomatik olarak uzatma kararı aldı. Alman Dışişleri ve İçişleri Bakanlıkları'nın ortak açıklamasında Almanya'ya 6 Şubat - 7 Mayıs tarihleri arasında geçerli bir vizeyle giriş yapmış olup, 7 Mayıs itibarıyla yasalara uygun biçimde ülkede bulunanların 6 Ağustos'a kadar vize zorunluluğundan muaf olacağı belirtildi.İçişleri Bakanı Nancy Faeser, iki ülke arasında çok sayıda yakın aile bağının bulunduğuna dikkat çekerek, Türk-Alman toplumunun da olağanüstü bir dayanışma gösterdiğini belirtti. Bakan, Federal Hükümet'in de depremden etkilenenler için güvenli bir perspektif bularak bu işlemlerden muaf tutarak yabancılar dairelerinin üzerindeki yükü de hafiflettiklerini ifade etti.
						</div>
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
							Dışişleri Bakanı Annalena Baerbock da depremlerin ardından vize verilen binlerce Türk vatandaşının Almanya'daki yakınlarının yanında yalnızca başlarını sokacak bir ev değil, aynı zamanda destek ve avuntu bulduğunu savundu. Bakan, "Türkiye'de enkaz kaldırma ve yeniden inşa süreçleri devam ederken (depremzedelere) ailelerinin yanında daha fazla kalabilme imkanı verilmesi oldukça pratik bir dayanışma göstergesi" diye konuştu.6 Şubat'ta meydana gelen ve 50 binden fazla insanın ölümüne neden olan depremlerin ardından Federal Hükümet, Almanya'da yakınları bulunan Türk ve Suriye vatandaşlarının vize süreçlerinin önceleneceğini ve hızlandırılacağını açıklamıştı. Ancak vize başvurucularından istenen belge ve şartlarda değişikliğe gidilmemesi ve depremzedenin Almanya'da birinci derece bir akrabasının ikamet ediyor olması şartı aranması tepkilere neden olmuştu. Hükümet tepkiler üzerinde süreçte bazı ek kolaylıklar sağlamıştı.

13 Şubat'ta hayata geçirilen "kolaylaştırılmış vize süreci"yle yaklaşık 9 bin 500 Türkiye vatandaşına vize verildiği belirtilmişti. 
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