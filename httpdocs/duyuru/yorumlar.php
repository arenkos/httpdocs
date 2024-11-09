<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
	}else{
		$_SESSION['user'] = session_id();
		$user = $_SESSION['user'];
	}
	$haber_url = $_GET['haber_url']; 
	if(isset($_POST['haber_url'])){
		$haber_url = $_POST['haber_url']; 
	}
?>
<form action="yorumlar.php" method="POST" style="display:block;height:auto;width:100%;max-width:100%;margin:0 auto;text-align:center;color:white;background-color:gray;">
	<textarea type="text" id="yorum_yap" name="yorum_yap" rows="2" style="width:100vw; max-width:100%;background-color:gray;color:white;" placeholder="Yorumunuz.." required></textarea>
	<input type="hidden" name="haber_url" value="<?php echo $haber_url; ?>">
	<input type="submit" value="Gönder">
</form>
<table style="display:flex;height:70vh;width:100%;max-width:100%;margin:0 top;text-align:center;background-color:black;">
	<?php 
		$servername = "localhost:3306";
		$username = "aren";
		$password = "Arenkos1.";
		$database = "haber";
		
		$connection = mysqli_connect($servername, $username, $password, $database);

		// Bağlantıyı kontrol et
		if (!$connection) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}
		$anlik = time();
		$tarih = date("Y-m-d H:i:s", $anlik);
		if(isset($_POST['yorum_yap'])){
			$yorum = $_POST['yorum_yap'];
			$haber = $_POST['haber_url'];
			$sql = "INSERT INTO yorumlar(yorum, haber_url, kullanici, tarih) VALUES('$yorum', '$haber', '$user', '$tarih')";
			mysqli_set_charset($connection, "utf8");
			$result = mysqli_query($connection, $sql);
		}
		$sql = "SELECT yorum FROM yorumlar WHERE haber_url LIKE '$haber_url' ORDER BY tarih DESC";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr style="height:100%;width:100%;margin:0 auto;text-align:left;">
					<td style="height:auto;width:100%;">
						<p style="color:white;"><?php
							echo $row['yorum'];
						?></p>
					</td>
				</tr>
				<tr style="height:3px;width:100%;background-color:#111111;">
					<td style="height:3px;width:100%;background-color:#111111;">
					</td>
				</tr>
			<?php }
		} ?>
</table>
