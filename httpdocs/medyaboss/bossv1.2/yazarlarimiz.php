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
    ?><meta http-equiv="refresh" content="0; URL=yazarlarimiz-mobil.php">
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
		<div style="width:100%;;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:left;">
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
	<main style="text-align:center;padding-top:122px;background-color:#fff;">
		<div style="width:100%;height:50px;background:#232323;margin: 0 auto;">
			<table style="width:1540px;height:50px;background:#232323;margin: 0 auto;text-align:justify;">
				<tr>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ana.php">Ana Sayfa</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="son_dakika.php">Son Dakika</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="gundem.php">Gündem</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="spor.php">Spor</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="dunya.php">Dünya</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ekonomi.php">Ekonomi</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php">Teknoloji</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php">Sağlık</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#232323;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="yazarlarimiz.php">Yazarlarımız</a></td>
				</tr>
			</table>
		</div>
		
		<table style="text-align:center;margin: 0 auto;width:870px;margin-top:50px;">
			<tr>
				<td>
					<img src="ahmet_baltaci.webp" style="width:250px;height:300px;">
				</td>
				<td style="width:10px;">
				</td>
				<td>
					<div style="text-align:left;width:600px;height:300px;color:black;font-size:20px;padding-top:15px;padding-bottom:15px;">
						
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>Ahmet Baltacı</b>
					<p style="text-align:center;font-size:10px;">Yazar/İş İnsanı</p>
                    <p style="text-align:center;font-size:10px;">Haber Sitesi Patronu</p>
					<p style="text-align:center;font-size:10px;">Yönetim Kurulu Başkanı</p>
				</td>
			</tr>
		</table>
		
		<table style="text-align:center;margin: 0 auto;width:870px;margin-top:50px;">
			<tr>
				<td>
					<img src="aren_kos.png" style="width:250px;height:300px;">
				</td>
				<td style="width:10px;">
				</td>
				<td>
					<div style="text-align:left;width:600px;height:300px;color:black;font-size:20px;padding-top:15px;padding-bottom:15px;">
						
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>Aren Koş</b>
					<p style="text-align:center;font-size:10px;">Yazar/Genel Yayın Yönetmeni</p>
				</td>
			</tr>
		</table>
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
