<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
	}else{
		$_SESSION['user'] = session_id();
		$user = $_SESSION['user'];
	}
	
	//include 'veritabanlari.php';
	$arama = $_GET['arama'];
				
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
?>
<script>
	window.addEventListener('DOMContentLoaded', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'veritabanlari.php', true);
        xhr.send();
    });
	var i = 1;
	// Scroll olayını dinle
	function goster() {
		// Eğer sayfa en altına geldiyse
		if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100) {
			// GET isteği gönder
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'genel_akis.php?goster=' + i, true);
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					// İkinci AJAX isteği burada çağrılabilir.
					xhr.open('GET', 'genel_akis.php?akis=0&goster=' + i, true);
				}
			};
			xhr.send();
			i++;
		}
	}
        
	function like(haber_url){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'like.php?haber_url='+haber_url, true);
		xhr.send();
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'genel_akis.php?haber_url='+haber_url+'&begen=1&begenme=0&haberurl='+haber_url, true);
		xhr.send();
		document.getElementById('like_' + haber_url).style.display = 'none'; 
		document.getElementById('liked_' + haber_url).style.display = 'flex'; 
		document.getElementById('dislike_' + haber_url).style.display = 'flex';
		document.getElementById('disliked_' + haber_url).style.display = 'none';
	}
	function dislike(haber_url){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'dislike.php?haber_url='+haber_url, true);
		xhr.send();
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'genel_akis.php?haber_url='+haber_url+'&begen=0&begenme=1&haberurl='+haber_url, true);
		xhr.send();
		document.getElementById('dislike_' + haber_url).style.display = 'none'; 
		document.getElementById('disliked_' + haber_url).style.display = 'flex'; 
		document.getElementById('like_' + haber_url).style.display = 'flex';
		document.getElementById('liked_' + haber_url).style.display = 'none';
	}
	function unlike(haber_url){
		document.getElementById('liked_' + haber_url).style.display = 'none'; 
		document.getElementById('like_' + haber_url).style.display = 'flex'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'unlike.php?haber_url='+haber_url, true);
		xhr.send();
	}
	function undislike(haber_url){
		document.getElementById('disliked_' + haber_url).style.display = 'none'; 
		document.getElementById('dislike_' + haber_url).style.display = 'flex'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'undislike.php?haber_url='+haber_url, true);
		xhr.send();
	}
	function yorumlar(haber_url){
		document.getElementById('resim_' + haber_url).style.display = 'none'; 
		document.getElementById('baslik_' + haber_url).style.display = 'none'; 
		document.getElementById('haber_' + haber_url).style.display = 'none'; 
		document.getElementById('yorumlar_' + haber_url).style.display = 'flex'; 
		document.getElementById('yorumlar_' + haber_url).src = 'yorumlar.php?haber_url=' + haber_url; 
		document.getElementById('x_' + haber_url).style.textAlign = 'right';
		document.getElementById('x_' + haber_url).style.display = 'block';
	}
	function haber(haber_url){
		document.getElementById('resim_' + haber_url).style.display = 'none'; 
		document.getElementById('baslik_' + haber_url).style.display = 'none'; 
		document.getElementById('yorumlar_' + haber_url).style.display = 'none'; 
		document.getElementById('x_' + haber_url).style.textAlign = 'right';
		document.getElementById('x_' + haber_url).style.display = 'block';
		document.getElementById('haber_' + haber_url).style.display = 'flex'; 
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'tiklanma.php?haber_url='+haber_url, true);
		xhr.send();
	}
	function kapat(haber_url){
		document.getElementById('resim_' + haber_url).style.display = 'flex'; 
		document.getElementById('baslik_' + haber_url).style.display = 'flex'; 
		document.getElementById('yorumlar_' + haber_url).style.display = 'none'; 
		document.getElementById('x_' + haber_url).style.display = 'none';
		document.getElementById('haber_' + haber_url).style.display = 'none'; 
	}
</script>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0 auto;background-color:black;">
	<div style="height:auto;width:100vw;max-width:70vh;margin:0 auto;padding-left:5px;padding-right;5px;">
		<form  method="GET" action="arama.php">
			<table style="position:fixed;height:20px;width:100vw;max-width:70vh;margin:0 auto;text-align:center;">
				<tr>
					<td style="width:auto;">
						<input type="text" id="aramaKutusu" name="arama" placeholder="Arama..." style="height:20px;width:100%;">
					</td>
					<td style="width:auto;">
						<input type="submit" value="Ara" style="height:20px;width:30px;background-color:#101010;color:white;">
					</td>
				</tr>
			<table>
		</form>
		<div style="height:30px;">
		</div>
		<?php
			if(isset($_GET['goster'])){
				$goster = $_GET['goster'];
			}else{
				$goster = "1";
			}
			//$aradeger = 1;
			//$aradeger = $aradeger + $goster;
			$gosterilecek = 10 * $goster;
			if(isset($_GET['akis'])){
				$akis = $_GET['akis'];
			}else{
				$akis = 0;
			}
			//while($akis<10){
				$sql = "SELECT * FROM haberler WHERE resim_url NOT LIKE '' AND (baslik LIKE '%$arama%' OR kaynak LIKE '%$arama%' OR kategori LIKE '%$arama%') ORDER BY tarih DESC LIMIT 10";
				mysqli_set_charset($connection, "utf8");
				$result = mysqli_query($connection, $sql);
				if (mysqli_num_rows($result) > 0) {
					//$akis = $_POST['sayi'];
					while ($row = mysqli_fetch_assoc($result)) { 
						$baslik = $row['baslik'];
						$haber_url = $row['haber_url'];
						$resim_url = $row['resim_url'];
						$kaynak = $row['kaynak'];
						
						$sql_tepki = "SELECT * FROM tepkiler WHERE haber_url LIKE '$haber_url' AND kullanici LIKE '$user'";
						mysqli_set_charset($connection, "utf8");
						$result_tepki = mysqli_query($connection, $sql_tepki);
						if (mysqli_num_rows($result_tepki) > 0) {
							while ($row_tepki = mysqli_fetch_assoc($result_tepki)) {
								$begen = $row_tepki['begen'];
								$begenme = $row_tepki['begenme'];
								if(isset($_GET['haberurl'])){
									$haberurl = $_GET['haberurl'];
								}else{
									$haberurl = $haber_url;
								}
							}
						}
					?>
						<div style="height:100vh;width:100vw;max-width:70vh;margin:0 auto;">
							<h3 style="height:5vh;width:100vw;max-width:70vh;margin:0 center;color:white;display:flex;"><?php echo $kaynak; ?></h3>
							<p onclick="kapat('<?php echo $haber_url; ?>')" style="margin:0;text-align:right;width:100%;height:auto;color:white;display:none;font-size:20px;display:none;" id="x_<?php echo $haber_url; ?>">X</p>
							<img id="resim_<?php echo $haber_url; ?>" ondblclick="like('<?php echo $haber_url; ?>')" style="display:flex;height:70vh;width:100vw;max-width:100%;margin:0 auto;" src="<?php echo $resim_url; ?>">
							<p id="baslik_<?php echo $haber_url; ?>" onclick="haber('<?php echo $haber_url; ?>')" style="display:flex;height:auto;width:100vw;max-width:70vh;margin:0 auto;text-align:center;color:white;font-size:25px;"><?php echo $baslik; ?></p>
							<iframe id="haber_<?php echo $haber_url; ?>" src="<?php echo $haber_url; ?>" style="height:70vh;width:100vw;max-width:70vh;display:none;"></iframe>
							<iframe id="yorumlar_<?php echo $haber_url; ?>" style="display:none;height:70vh;width:100vw;max-width:70vh;margin:0 auto;"></iframe>
							<div id="div" style="height:5vh;width:100vw;max-width:70vh;margin:0 auto;text-align:center;">
								<table style="height:100%;width:30vh;margin:0 auto;text-align:center;">
									<tr style="height:100%;width:100%;margin:0 auto;text-align:center;">
										<td style="height:5vh;width:5vh;margin:0 auto;text-align:center;">
											<?php  if($begen == 1){  ?>
											<img id="liked_<?php echo $haber_url; ?>" src="liked.png" onclick="unlike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
											<img id="like_<?php echo $haber_url; ?>" src="like.png" onclick="like('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
											<?php  } else {  ?>
											<img id="like_<?php echo $haber_url; ?>" src="like.png" onclick="like('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
											<img id="liked_<?php echo $haber_url; ?>" src="liked.png" onclick="unlike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
											<?php  }  ?>
											
										</td>
										<td style="height:5vh;width:5vh;margin:0 auto;text-align:center;">
											<?php  if($begenme == 1){  ?>
											<img id="dislike_<?php echo $haber_url; ?>" src="dislike.png" onclick="dislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;">
											<img id="disliked_<?php echo $haber_url; ?>" src="disliked.png" onclick="undislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
											<?php  } else {  ?>
											<img id="dislike_<?php echo $haber_url; ?>" src="dislike.png" onclick="dislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
											<img id="disliked_<?php echo $haber_url; ?>" src="disliked.png" onclick="undislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;">
											<?php  }  ?>
										</td>
										<td style="height:5vh;width:5vh;margin:0 auto;text-align:center;">
											<img id="yorum_<?php echo $haber_url; ?>" src="yorum.png" onclick="yorumlar('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
										</td>
									</tr>
								</table>
							</div>
						</div>
					<?php
						$akis++;
						if($akis == 10){
							break;
						}
					}
				} 
			//} ?>
	</div>
</body>
</html>
