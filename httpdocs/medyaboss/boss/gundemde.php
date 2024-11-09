<?php
	$kategori = $_GET['ktg'];
    $servername = "localhost:3306";
    $username = "aecmedya_aren";
    $password = "Aren2023";
    $database = "aecmedya_haber";

    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }
?>
<table style="text-align:justify;padding-left:150px;">
	<tr>
	<?php
	$resim = $_GET['haber'];
	$haber_sayisi = 0;
	$kategori = $_GET['kategori'];
		$sql = "SELECT resim FROM ".$_GET['ktg']." WHERE resim ORDER BY tiklanma_mobil DESC LIMIT 1 OFFSET 0";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$haber_sayisi = $row['resim'];
			}
		}
	?>
		<!-- Haber görseli -->
		<td>
			<div style="height:100px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $_GET['ktg']; ?>/haber<?php echo$haber_sayisi; ?>.png" style="width:150px;height:100px;"></a>
			</div>
		</td>
		<td>
			<div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000">
<?php
	$sql = "SELECT baslik FROM ".$_GET['ktg']." WHERE resim= '$haber_sayisi'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
		}
	}
?></a>
			</div>
		</td>
	</tr>
	<tr style="height:20px;">
	</tr>
	<tr>
	<?php
	$resim = $_GET['haber'];
	$haber_sayi = 0;
	$kategori = $_GET['kategori'];
		$sql = "SELECT resim FROM ".$_GET['ktg']." WHERE resim ORDER BY tiklanma_mobil DESC LIMIT 1 OFFSET 1";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$haber_sayisi = $row['resim']; // Satır başlarını görüntülemek için () işlevini kullanırız.
			}
		}
	?>
		<!-- Haber görseli -->
		<td>
			<div style="height:100px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $_GET['ktg']; ?>/haber<?php echo$haber_sayisi; ?>.png" style="width:150px;height:100px;"></a>
			</div>
		</td>
		<td>
			<div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000">
<?php
	$sql = "SELECT baslik FROM ".$_GET['ktg']." WHERE resim= '$haber_sayisi'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
		}
	}
?></a>
			</div>
		</td>
	</tr>
	<tr style="height:20px;">
	</tr>
	<tr>
	<?php
	$resim = $_GET['haber'];
	$haber_sayi = 0;
	$kategori = $_GET['kategori'];
		$sql = "SELECT resim FROM ".$_GET['ktg']." WHERE resim ORDER BY tiklanma_mobil DESC LIMIT 1 OFFSET 2";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$haber_sayisi = $row['resim']; // Satır başlarını görüntülemek için () işlevini kullanırız.
			}
		}
	?>
		<!-- Haber görseli -->
		<td>
			<div style="height:100px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $_GET['ktg']; ?>/haber<?php echo$haber_sayisi; ?>.png" style="width:150px;height:100px;"></a>
			</div>
		</td>
		<td>
			<div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000">
<?php
	$sql = "SELECT baslik FROM ".$_GET['ktg']." WHERE resim= '$haber_sayisi'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
		}
	}
?></a>
			</div>
		</td>
	</tr>
	<tr style="height:20px;">
	</tr>
	<tr>
	<?php
	$resim = $_GET['haber'];
	$haber_sayi = 0;
	$kategori = $_GET['kategori'];
		$sql = "SELECT resim FROM ".$_GET['ktg']." WHERE resim ORDER BY tiklanma_mobil DESC LIMIT 1 OFFSET 3";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$haber_sayisi = $row['resim']; // Satır başlarını görüntülemek için () işlevini kullanırız.
			}
		}
	?>
		<!-- Haber görseli -->
		<td>
			<div style="height:100px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $_GET['ktg']; ?>/haber<?php echo$haber_sayisi; ?>.png" style="width:150px;height:100px;"></a>
			</div>
		</td>
		<td>
			<div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
				<a href="haber.php?ktg=<?php echo $_GET['ktg']; ?>&haber=<?php echo $haber_sayisi; ?>" style="text-decoration:none;color:#000">
<?php
	$sql = "SELECT baslik FROM ".$_GET['ktg']." WHERE resim= '$haber_sayisi'";
	mysqli_set_charset($connection, "utf8");
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
		}
	}
?></a>
			</div>
		</td>
	</tr>
</table>
