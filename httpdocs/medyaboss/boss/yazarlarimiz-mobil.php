<?php 
session_start(); 
?>
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

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=yazarlarimiz.php">
    <?php
}
?>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
<link rel="icon" href="../mboss/logo.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header style="position:fixed;width:100%;margin-top:-10px;">
		<?php include 'head2-mobil.php'; ?>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;width:100%;">
		
		<table style="text-align:center;margin: 0 auto;width:100%;margin-top:50px;">
			<tr>
				<td>
					<img src="ahmet_baltaci.webp" style="width:100%;height:300px;">
				</td>
				<td style="width:10px;">
				</td>
				<!--<td>
					<div style="text-align:left;width:100%;height:300px;color:black;font-size:20px;padding-top:15px;padding-bottom:15px;">
						
					</div>
				</td>-->
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
		
		<table style="text-align:center;margin: 0 auto;width:100%;margin-top:50px;">
			<tr>
				<td>
					<img src="aren_kos.png" style="width:100%;height:300px;">
				</td>
				<td style="width:10px;">
				</td>
				<!--<td>
					<div style="text-align:left;width:100%;height:300px;color:black;font-size:20px;padding-top:15px;padding-bottom:15px;">
						
					</div>
				</td>-->
			</tr>
			<tr>
				<td>
					<b>Aren Koş</b>
					<p style="text-align:center;font-size:10px;">Yazar/Editör</p>
					<p style="text-align:center;font-size:10px;">Genel Yayın Yönetmeni</p>
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
	
	<div style="width:100%;background-color:#CD0000;">
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>
