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
				<p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../saglik.php" style="text-decoration:none;color:#000;">Sağlık</a> > Enfeksiyon hastalıklarından korunmada en etkili yol el hijyeni</p>
			</div>
			<table style="text-align:justify;">
				<tr>
					<td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
						<p style="text-align:left;"><b>Enfeksiyon hastalıklarından korunmada en etkili yol el hijyeni</b></p>
					</td>
					<td style="width:150px;">
					</td>
					<td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
						<p><b>Gündemdekiler</b></p>
					</td>
				</tr>
				<tr style="text-align:justify;height:500px;width:500px;">
					<td>
						<img src="haber7-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
							İnsanların enfeksiyon hastalıklarından korunmalarında en etkili yollardan birinin el hijyeni olduğunu belirten Enfeksiyon Kontrol Hemşiresi Neslihan Altın, “Çocukluk çağından başlayarak el hijyenine dikkat edersek, enfeksiyon hastalıklarının bulaşmasını önlemiş oluruz” dedi. Enfeksiyon Kontrol Hemşiresi Neslihan Altın, insan vücudunda oluşan enfeksiyon hastalıklarının başlıca nedenlerinden birinin el hijyenine dikkat etmemek olduğunu belirtti. Doğru ve zamanında el yıkamanın enfeksiyonlardan korunma ve yayılmasını önleme konusunda son derece önemli olduğunu dile getiren Altın, “Enfeksiyon önlemlerinde en önemli amacımız her zaman el hijyenimiz olmuştur. Bizler yetişkinler olarak bunlara belki dikkat ediyor olabiliriz. Ama genel olarak bunu çocukluk çağında yetiştirerek yaptığımız kanaatindeyiz. Çocukluk çağında doğru olan yöntemleri öğrenirsek eğer, ilerleyen süreçlerde her zaman doğru olan yöntemi uygularız ve hiçbir şekilde el hijyeninden kaynaklı enfeksiyonların bulaşmasını sağlamamış oluruz” ifadelerini kullandı. Ellerin herhangi bir yere değmesiyle bakterilerin bulaşının söz konusu olduğunu söyleyen Altın, “Özellikle enfeksiyonların bulaşmasında el hijyeni bizler için çok önemlidir. Bulaşıcı hastalıklar zaten en çok ortama yayılan bakteri ve virüslerin teması sonrasında kendi el floramız ile ağzımıza ve burnumuza yaydıktan sonra yayılan hastalıklardır.
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div>
							<img src="haber7-2.webp" style="width:1000px;height:500px;">
						</div>
					</td>
				</tr>
				<tr>	
					<td>
						<div style="padding-top:10px;text-align:justify;width:1000px;height:500px;font-size:20px;font-family:Poppins;">
							El hijyenimizi sağladığımız takdirde bu tarz hastalıkların önemli derecede önüne geçip, bulaş yolunu engellemiş oluyoruz. Bunu sadece hastalık açısından değil, bir kültür olarak yapmamız gerekiyor. Elimizi herhangi bir yere dokundurduktan sonra bakterilerin ellerimize bulaşması söz konusu olabiliyor. Bizim bu bakterilerin geriye kalan vücut floramıza yayılmamasını engellemek için yapmamız gereken en önemli şey ellerimizi yıkamaktır. Çünkü biz temas ettikten sonra ellerimizi yıkayıp vücudumuza temas ettiğimizde bulaşı engellemiş oluruz. Ama ellerimizi yıkamadan ağzımıza, yüzümüze, gözümüze bu bakterileri bulaştırdığımızda bütün hastalıkları yaygınlaştırılmış hale getirip, bir epidemiyolojik problem haline getirebiliyoruz. Bu yüzden el hijyeni bizler için çok önemlidir” diye konuştu.
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