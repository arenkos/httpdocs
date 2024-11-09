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
    ?><meta http-equiv="refresh" content="0; URL=5.php">
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="spor.php" style="text-decoration:none;color:#000;">Spor</a> > Lyon Başkanı Jean-Michel Aulas, 35 yıl sonra görevinden ayrıldı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:100%;">
						<p style="text-align:left;"><b>Lyon Başkanı Jean-Michel Aulas, 35 yıl sonra görevinden ayrıldı</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:100%;">
					<td>
						<img src="../bossv1.4/haber5-1.webp" style="width:100%;height:500px;padding-top:20px;">
					</td>
				</tr>
				<tr>
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							Olympique Lyon'un 1987'den başkanı olan Jean-Michael Aulas, resmi olarak görevinden ayrılıyor. Kulüpten sabah saatlerinde yapılan resmi açıklamaya göre 74 yaşındaki Aulas'ın başkanlığı bıraktığı duyuruldu.

Kulübün yeni sahibi John Textor'un yeni başkan ve genel müdür olduğu belirtilirken Aulas'ın onursal başkanlık rolünde bulunacağı da belirtildi.

Basın açıklamasında şu ifadelere yer verilerek Aulas'a teşekkür edildi:

"OL Groupe, Sayın Jean-Michel Aulas'ın Olympique Lyonnais için üçüncü bir çağda hem erkek hem de kadın takımlar için 50'den fazla şampiyonluk kazandıran bağlantısız taahhüdü ve özverisi için içtenlikle teşekkür ediyor. OL Groupe, Sayın Jean-Michel Aulas'ın uzmanlığından ve desteğinden yararlanmaya devam edebildiği için mutlu. Tüm paydaşlar, erkek ve kadın futbolunda kulübün Avrupa futbolunda bir güç merkezi haline gelmesini sağlayan bağlılığı ve liderlik nitelikleri için ona minnettar." 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="../bossv1.4/haber5-2.webp" style="width:100%;height:500px;">
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