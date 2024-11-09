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
    ?><meta http-equiv="refresh" content="0; URL=9-mobil.php">
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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../dunya.php" style="text-decoration:none;color:#000;">Dünya</a> > Suriye 12 yıl sonra Arap Birliği'ne geri dönüyor
</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Suriye 12 yıl sonra Arap Birliği'ne geri dönüyor
</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber9-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							Irak resmi ajansı INA'da yayımlanan habere göre, Arap Birliği'ne üye ülkelerin dışişleri bakanları, Suriye'nin 12 yıl sonra Arap Birliği'ne dönmesi konusunda anlaşmaya vardı. Arap Birliği'ne üye ülkelerin dışişleri bakanları, Beşşar Esed rejiminin, Birliğe dönmesi konusunda anlaşmaya vardı.

Mısır'ın başkenti Kahire'de bu sabah başlayan Arap Dışişleri Bakanları Toplantısı devam ediyor.

Irak resmi ajansı INA'da yayımlanan habere göre, Irak Dışişleri Bakanlığı Sözcüsü Ahmed es-Sahaf, "Arap Dışişleri Bakanları Toplantısı'nda Suriye'nin Arap Birliği'ne dönmesi konusunda anlaşmaya varıldı." dedi.

Arap Birliği ve Mısır tarafından konuyla ilgili henüz resmi açıklama yapılmadı.

Arap ülkelerinde son dönemde Esed rejiminin Arap Birliği'ne dönüşü için diplomatik çabalar yürütülüyordu. Suriye'deki Beşşar Esed rejiminin Dışişleri Bakanı Faysal el-Mikdad, 12 Nisan'da Suudi Arabistan'a yaptığı ziyarette mevkidaşı Faysal Bin Ferhan ile bir araya gelmişti.

Körfez İşbirliği Konseyi (KİK) ülkeleri ile Mısır, Ürdün ve Irak dışişleri bakanları da 14 Nisan'da Suudi Arabistan'da bir araya gelerek Suriye krizine ilişkin siyasi çözüm çabalarını ele almıştı.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber9-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							Toplantıda Esed rejiminin Arap Birliği'ne dönüşünün ele alındığı fakat bir anlaşmaya varılamadığı açıklanmıştı.

Ürdün Dışişleri Bakanı Eymen es-Safedi, Suudi Arabistan Dışişleri Bakanı Faysal bin Ferhan, Mısır Dışişleri Bakanı Samih Şukri, Irak Dışişleri Bakanı Fuad Hüseyin ve Esed rejiminin Dışişleri Bakanı Mikdad, 1 Mayıs'ta Amman'da bir araya gelmişti.

Basına kapalı toplantının ardından yayımlanan sonuç bildirgesinde, "Suriyeli mültecilerin gönüllü ve güvenli şekilde ülkelerine dönmelerinin öncelikli mesele olduğu" kaydedilmişti.

Arap Birliği, Suriye'deki iç savaş nedeniyle 12 Kasım 2011'de Esed rejiminin Birliğe üyeliğini askıya almıştı.
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