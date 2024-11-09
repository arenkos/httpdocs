<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QZ5ZT1CR3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2QZ5ZT1CR3');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6002356356631849"
     crossorigin="anonymous"></script>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'clear.php', true);
			xhr.send();
		});
	</script>
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;z-index: 9999;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#CD0000;height:92px;text-align:left;">
					<?php include 'header2.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;">
		<div style="width:100%;height:50px;background:#CD0000;margin: 0 auto;">
			<table style="width:1540px;height:50px;background:#CD0000;margin: 0 auto;text-align:justify;">
				<tr>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="ana.php">Ana Sayfa</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="son_dakika.php">Son Dakika</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="gundem.php">Gündem</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="spor.php">Spor</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="magazin.php">Magazin</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="dunya.php">Dünya</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ekonomi.php">Ekonomi</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php">Teknoloji</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php">Sağlık</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="yazarlarimiz.php">Yazarlarımız</a></td>
				</tr>
			</table>
		</div>
		<table style="padding-top:0px;margin: 0 auto;width:1540px;">
			<tr>
				<div onclick="tiklamaKaydet('<?php echo $_SESSION['mail']; ?>')" style="width:100%;height:500px;">
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6002356356631849" crossorigin="anonymous"></script>
					<!-- Dikey -->
					<ins class="adsbygoogle"
						 style="display:block"
						 data-ad-client="ca-pub-6002356356631849"
						 data-ad-slot="6422635949"
						 data-ad-format="auto"
						 data-full-width-responsive="true"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					
				</div>

				<script>
					function tiklamaKaydet(s) {
						// AJAX kullanarak PHP dosyasına tıklama bilgisini gönder
						var xmlhttp = new XMLHttpRequest();
						var url = "tiklama_kaydet.php?mail=aren_32@hotmail.com";
						xmlhttp.open("GET", url, true);
						xmlhttp.send();
						console.log("Merhaba, Dünya!");
					}
				</script>

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
	
	<div style="width:100%;background-color:#CD0000;">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>