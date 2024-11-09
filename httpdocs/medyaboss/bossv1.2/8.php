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
    ?><meta http-equiv="refresh" content="0; URL=8-mobil.php">
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
					<?php include 'doviz2.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#232323;height:92px;text-align:left;">
					<?php include 'header2.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
		<?php include 'menu2.php'; ?>
		<div style="margin: 0 auto;width:1540px;text-align:justify;">
			<div style="text-align:left;margin-top:300px;">
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="dunya.php" style="text-decoration:none;color:#000;">Dünya</a> > İran'da ayrılıkçı Nidal Hareketi lideri idam edildi</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>İran'da ayrılıkçı Nidal Hareketi lideri idam edildi</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="../bossv1.4/haber8-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							İran, ülkede faaliyet gösteren ayrılıkçı Nidal Hareketi lideri Habib Ferecullah Cab'ı bu sabah idam ettiğini duyurdu. Yargı Erkine bağlı Mizan Haber Ajansı'nda yayımlanan habere göre, “yabancı istihbarat servisleriyle bağlantılı olmak, yeryüzünde bozgunculuk yapmak" suçlamasıyla idam cezasına çarptırılan Cab’ın cezası infaz edildi.

Haberde, Cab liderliğindeki grubun "terör ve kanlı eylemleri" sonucunda 450'den fazla İran vatandaşının yaralandığı ya da hayatını kaybettiği aktarıldı.

Yüksek Mahkeme Halkla İlişkiler Müdürü Emir Haşimi, 12 Mart’ta Twitter hesabından yaptığı paylaşımda Cab’ın idam cezasının onandığını açıklamıştı.

Ayıca mart ayında yapılan duruşmada, 2018-2019 yıllarında güvenlik güçlerine yönelik silahlı saldırıları nedeniyle Nidal Hareketi yöneticilerinden Ali Müceddem ve Muhammed Rıza Mukaddem ile silahlı eylem düzenledikleri iddiasıyla örgüt üyelerinden Muin Hanferi, Habib Deris, Adnan Gabişavi ve Salim Musevi, idama mahkum edilmişti.

Karara yönelik temyiz yolunun açık olduğu kaydedilmişti.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="../bossv1.4/haber8-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							NİDAL HAREKETİ
İran'da Arapların çoğunlukta bulunduğu Huzistan eyaletinin özerkliği talebiyle 1999 yılında kurulan Haraketü’n-Nidal el-Arabiyye Li Tahriri’l-Ahvaz, (Ahvaz'ın Kurtuluşu için Arap Mücadelesi Hareketi) adını 2005 Ahvaz olaylarında duyurdu.

Nidal olarak bilinen örgüt, "Ahvazuna" isimli Arapça yayın yapan bir televizyon kanalına sahip.

Nidal Hareketi'nin, 22 Eylül 2018'de Ahvaz kentinde İran-Irak savaşını anma etkinlikleri kapsamındaki askeri geçit törenine saldıran örgüt olduğu iddia edilmişti. Söz konusu saldırıda 25 kişi ölmüş, 60 kişi yaralanmıştı.

Örgüt lideri Habib Ferecullah Cab, İran güçleri tarafından 2020 yılında yakalanmış, hakkında açılan dava kapsamında idama mahkum edilmişti.
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
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>