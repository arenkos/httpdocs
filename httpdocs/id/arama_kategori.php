<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
	}else{
		$_SESSION['user'] = session_id();
		$user = $_SESSION['user'];
	}
	$haber_url = $_GET['haber_url'];		
	
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
	if(isset($_GET['kategori'])){
		$ktg = $_GET['kategori'];
		$sql = "SELECT * FROM ozellestirme WHERE kategori LIKE '$ktg' AND kullanici LIKE '$user'";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result) > 0){
			$sql = "DELETE FROM ozellestirme WHERE kategori LIKE '$ktg' AND kullanici LIKE '$user'";
			mysqli_set_charset($connection, "utf8");
			mysqli_query($connection, $sql);
		}else{
			$sql = "INSERT INTO ozellestirme(kategori, kullanici) VALUES('$ktg', '$user')";
			mysqli_set_charset($connection, "utf8");
			mysqli_query($connection, $sql);
		}
	}
?>
<script>
	window.addEventListener('DOMContentLoaded', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'veritabanlari.php', true);
        xhr.send();
    });
	function bildir(kategori){
		document.getElementById('bildirme_' + kategori).style.display = 'none'; 
		document.getElementById('bildir_' + kategori).style.display = 'flex'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'arama_kategori.php?kategori='+kategori, true);
		xhr.send();
	}
	function bildirme(kategori){
		document.getElementById('bildirme_' + kategori).style.display = 'flex'; 
		document.getElementById('bildir_' + kategori).style.display = 'none'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'arama_kategori.php?kategori='+kategori, true);
		xhr.send();
	}
</script>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AR Haber - Kategoriler</title>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-1SW5N2XCDZ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-1SW5N2XCDZ');
	</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6912090056166853"
     crossorigin="anonymous"></script>
</head>
<body style="margin:0 auto;background-color:#222222;">
	<div style="position:fixed;bottom:0;height:50px;width:100vw;margin:0 auto;text-align:center;background-color:black;">
		<div style="height: 40px; width: 100vw; max-width: 60vh; margin: 0 auto; text-align: center;margin-bottom:10px;">
			<table style="height: 100%; width: 100%; text-align: center;">
				<tr style="height: 100%; width: 100%; text-align: center;">
					<td style="height: 100%; width: 25%; text-align: center;">
						<a href="genel_akis.php"><div style="height:100%;width:100;"><img src="ana.png" style="height: 20px; width: 20px;"></div></a>
					</td>
					<td style="height: 100%; width: 25%; text-align: center;">
						<a href="arama_kaynak.php"><div style="height:100%;width:100;"><img src="kaynak.png" style="height: 20px; width: 20px;"></div></a>
					</td>
					<td style="height: 100%; width: 25%; text-align: center; background-color: #111111;">
						<a href="arama_kategori.php"><div style="height:100%;width:100;"><img src="kategori.png" style="height: 20px; width: 20px;"></div></a>
					</td>
					<td style="height: 100%; width: 25%; text-align: center;">
						<a href="ozel_akis.php"><div style="height:100%;width:100;"><img src="kullanici.png" style="height: 20px; width: 20px;"></div></a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="aramaSonuclari" style="height:1000vh;width:90vw;max-width:70vh;margin:0 auto;">
		<div style="height:70px;width:100%;padding:10px;">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6912090056166853"
				 crossorigin="anonymous"></script>
			<!-- Arama -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-6912090056166853"
				 data-ad-slot="9972698481"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<?php
		       switch($kategori){
						case "Dünya":
						$kategori_yeni = "dunya";
						break;
						case "Ekonomi":
						$kategori_yeni = "ekonomi";
						break;
						case "Gündem":
						$kategori_yeni = "gundem";
						break;
						case "Magazin":
						$kategori_yeni = "magazin";
						break;
						case "Sağlık":
						$kategori_yeni = "saglik";
						break;
						case "Son Dakika":
						$kategori_yeni = "sondakika";
						break;
						case "Spor":
						$kategori_yeni = "spor";
						break;
						case "Teknoloji":
						$kategori_yeni = "teknoloji";
						break;
					}
			$sql = "SELECT kategori FROM haberler GROUP BY kategori ORDER BY kategori ASC";
			mysqli_set_charset($connection, "utf8");
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) > 0) { 
			?>
				<table style="height:auto;width:100%;">
					<tr style="height:20px;"></tr>
				<?php
				while ($row = mysqli_fetch_assoc($result)) { 
					$kategori = $row['kategori'];
					$sql_ozel = "SELECT * FROM ozellestirme WHERE kategori LIKE '$kategori' AND kullanici LIKE '$user'";
					mysqli_set_charset($connection, "utf8");
					$result_ozel = mysqli_query($connection, $sql_ozel);
					if (mysqli_num_rows($result_ozel) > 0) {
						$row_ozel = mysqli_fetch_assoc($result_ozel);
						$kat = $row_ozel['kategori'];
				?>
						<tr style="height:20px;width:100%;">
							<td style="height:100%;width:100%;margin:0 auto; text-align:left;">
								<div style="height:100%;width:100%;max-width:100%;max-width:100%;margin:0 auto;text-align:left;">
									<p id="baslik" style="display:flex;height:100%;width:100%;max-width:100%;margin:0 auto;color:white;font-size:20px;"><?php echo $kategori; ?></p>
								</div>
							</td>
							<td style="height:100%;width:40px;margin:0 auto; text-align:center;">
								<div style="height:40px;width:40px;display:flex;margin:0 auto;text-align:center;">
									<img id="bildirme_<?php echo $kategori; ?>" src="bildirme.png" onclick="bildir('<?php echo $kat; ?>')" style="height:25px;width:20px;display:none;margin:0 auto;text-align:center;">
									<img id="bildir_<?php echo $kategori; ?>" src="bildir.png" onclick="bildirme('<?php echo $kat; ?>')" style="height:25px;width:25px;display:flex;margin:0 auto;text-align:center;">
								</div>
								
							</td>
						</tr>
				<?php 
					}else{ ?>
						<tr style="height:auto;width:100%;">
							<td style="height:100%;width:100%;margin:0 auto; text-align:left;">
								<div style="height:100%;width:100%;max-width:100%;max-width:100%;margin:0 auto;text-align:left;">
									<p id="baslik" style="display:flex;height:100%;width:100%;max-width:100%;margin:0 auto;color:white;font-size:20px;"><?php echo $kategori; ?></p>
								</div>
							</td>
							<td style="height:100%;width:40px;margin:0 auto; text-align:center;">
								<div style="height:40px;width:40px;display:flex;margin:0 auto;text-align:center;">
									<img id="bildirme_<?php echo $kategori; ?>" src="bildirme.png" onclick="bildir('<?php echo $kategori; ?>')" style="height:25px;width:20px;display:flex;margin:0 auto;text-align:center;">
									<img id="bildir_<?php echo $kategori; ?>" src="bildir.png" onclick="bildirme('<?php echo $kategori; ?>')" style="height:25px;width:25px;display:none;margin:0 auto;text-align:center;">
								</div>
							</td>
						</tr>
						<tr style="height:10px;"></tr>
					<?php } 
				}
				?>
				</table>
			 <?php 
				
			 } ?>
		<div style="height:70px;width:100%;">
		</div>
	</div>
</body>
</html>
