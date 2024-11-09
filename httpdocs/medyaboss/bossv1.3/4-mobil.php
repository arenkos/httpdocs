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
    ?><meta http-equiv="refresh" content="0; URL=4.php">
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="saglik.php" style="text-decoration:none;color:#000;">Sağlık</a> > Anne karnındaki bebeğe beyin ameliyatı yapıldı</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:100%;">
						<p style="text-align:left;"><b>Anne karnındaki bebeğe beyin ameliyatı yapıldı</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:100%;">
					<td>
						<img src="../bossv1.4/haber4-1.webp" style="width:100%;height:500px;padding-top:20px;">
					</td>
				</tr>
				<tr>
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							ABD'li doktorlar dünyada bir ilki gerçekleştirdi ve anne karnında olan bir bebeğe beyin ameliyatı yaptı. ABD'deki Boston Çocuk Hastanesi ve Massachusetts Genel Hastanesi'nden 10 kişilik bir ekip, türünün ilk örneği olan bir operasyona imza attı, doktorlar anne karnındaki bebeğe beyin ameliyatı yaptı.

Bebeğe 34. haftada ölümcül olan galen damarı malformasyonu teşhisi konuldu. Bu rahatsızlıkla doğan çocukların 11 yaşından önce ölme ihtimalinin yüzde 30.

Her 60 bin bebekten birini etkileyen bu durum, beyindeki arterlerin kanı kılcal damarlar yerine doğrudan damarlara boşaltmasıyla ortaya çıkar. Bu durum kalbi kanla doldurur ve tehlikeli derecede yüksek tansiyona yol açabilir.

Boston'daki doktorlar tarafından gerçekleştirilen ameliyat, bebeğin atardamarı tespit edilerek ameliyata kılavuzluk etmesi için ultrason kullanılmasıyla gerçekleştirildi. 
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="../bossv1.4/haber4-2.webp" style="width:100%;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
							<p style="text-align:left;">BEBEK OPERASYONDAN İKİ GÜN SONRA DOĞDU</p>
							Boston Çocuk Hastanesi cerrahlarından Dr. Darren Orbach, "Bu yaklaşım, galen damarı malformasyonu yönetiminde bir paradigma değişikliğine işaret etme potansiyeline sahip. Malformasyonu doğumdan önce onardık ve kalp yetmezliğini ortaya çıkmadan önce önledik" dedi.

Orbach, "Bu, bu bebekler arasında uzun vadeli beyin hasarı, sakatlık veya ölüm riskini önemli ölçüde azaltabilir" diye konuştu.

Başarılı bir operasyonun ardından, iki gün sonra kadında doğum eylemi başlatıldı. Bunun nedeni, ameliyatın rahim içinde bebeği çevreleyen ve sıvıları tutan dokunun yırtılmış olmasıydı.

Çocuğun MR taramalarında beyinde anormal kan akışı belirtisine rastlanmadı.

Dr. Orbach, "Altı haftalık bebeğin durumunun son derece iyi olduğunu, ilaç kullanmadığını, normal beslendiğini, kilo aldığını ve eve döndüğünü bildirmekten memnuniyet duyuyoruz. (Operasyonun) Beyin üzerinde herhangi bir olumsuz etki belirtisi yok" dedi.
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