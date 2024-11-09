<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=10.php">
    <?php
}
?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2-mobil.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#232323;height:92px;text-align:left;">
					<?php include 'header2-mobil.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
		
		<div style="margin: 0 auto;width:100%;text-align:justify;">
			<div style="text-align:left;margin-top:300px;">
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="spor.php" style="text-decoration:none;color:#000;">Spor</a> > Milli motosikletçi Toprak Razgatlıoğlu İspanya'daki ikinci yarışta ikinci oldu</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:100%;">
						<p style="text-align:left;"><b>Milli motosikletçi Toprak Razgatlıoğlu İspanya'daki ikinci yarışta ikinci oldu</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:100%;">
					<td>
						<img src="../bossv1.4/haber10-1.webp" style="width:100%;height:500px;padding-top:20px;">
					</td>
				</tr>
				<tr>
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							Milli motosikletçi Toprak Razgatlıoğlu, Dünya Superbike Şampiyonası'nın İspanya'daki 4. etabının ikinci yarışını, ikinci sırada bitirdi. Superpole yarışını İspanyol Alvaro Bautista'nın ardından ikinci sırada tamamlayan Toprak Razgatlıoğlu, 4 bin 657 metrelik Barcelona Pisti'nde düzenlenen günün ikinci yarışına aynı sıradan başladı.

Pata Yamaha Prometeon takımı adına mücadele eden Toprak Razgatlıoğlu, uzun süre üçüncü sıradan götürdüğü yarışın son virajında İtalyan Michael Ruben Rinaldi'yi geçmeyi başardı.

Toprak Razgatlıoğlu'nun son virajdaki atağıyla ikinci sırada tamamladığı yarışta, Aruba.it Ducati takımı adına yarışan Bautista birincilik, İspanyol pilotun takım arkadaşı Ruben Rinaldi üçüncülük elde etti.

Bu sonuçla Bautista, 236 puanla pilotlar klasmanında liderliğini sürdürdü. Toprak ise 167 puanla ikinci sıradaki yerini korudu.
Sezonun beşinci ayağındaki yarışlar, İtalya'daki Emilia-Romagna Pisti'nde 2-4 Haziran'da koşulacak.  
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="../bossv1.4/haber10-2.webp" style="width:100%;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							
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
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>