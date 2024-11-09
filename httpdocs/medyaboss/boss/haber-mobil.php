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
$kategori = $_GET['ktg'];

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=haber.php?ktg=<?php echo $kategori; ?>&haber=<?php echo $_GET['haber']; ?>">
    <?php
}else{
?>
    <?php
        
        $servername = "localhost:3306";
        $username = "aecmedya_aren";
        $password = "Aren2023";
        $database = "aecmedya_haber";

        $connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
        $resim = $_GET['haber'];
        $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        $kategori = $_GET['ktg'];
        $kat = "";
        $total = 0;
        switch($kategori){
                case "dunya":
                    $kat = "Dünya";
                    $sql = "SELECT COUNT(*) as total FROM dunya";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "ekonomi":
                    $kat = "Ekonomi";
                    $sql = "SELECT COUNT(*) as total FROM ekonomi";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "gundem":
                    $kat = "Gündem";
                    $sql = "SELECT COUNT(*) as total FROM gundem";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "magazin":
                    $kat = "Magazin";
                    $sql = "SELECT COUNT(*) as total FROM magazin";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "saglik":
                    $kat = "Sağlık";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "son_dakika":
                    $kat = "Son Dakika";
                    $sql = "SELECT COUNT(*) as total FROM son_dakika";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "spor":
                    $kat = "Spor";
                    $sql = "SELECT COUNT(*) as total FROM spor";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
                case "teknoloji":
                    $kat = "Teknoloji";
                    $sql = "SELECT COUNT(*) as total FROM teknoloji";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_assoc($result);
                    mysqli_set_charset($connection, "utf8");
                    $total = $row['total'];
                    break;
        }
        
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
    ?></title>
    <link rel="icon" href="../mboss/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $servername = "localhost:3306";
        $username = "aecmedya_aren";
        $password = "Aren2023";
        $database = "aecmedya_haber";

        $connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
		$resim = $_GET['haber'];
		$sql = "UPDATE ".$kategori." SET tiklanma_mobil = tiklanma_mobil + 1 WHERE resim= '$resim'";
		mysqli_query($connection, $sql);
    ?>
    <header id="header" style="position:fixed;width:100%;margin-top:-10px;">
        <?php include 'head2-mobil.php'; ?>
    </header>
    
    <!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;width:100%;margin-left:10px;margin-right:10px;">
        <?php include 'menu-mobil.php'; ?>
        <div style="margin: 0 auto;width:100%;text-align:justify;padding-right:10px;">
            <div style="text-align:left;margin-top:300px;width:100%;">
                <p style="text-align:left;font-family:Poppins;color:#000;width:100%;"><a href="ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="<?php echo $kategori; ?>-mobil.php" style="text-decoration:none;color:#000;"><?php echo $kat; ?></a> >
                    <?php
                        $resim = $_GET['haber'];
                        $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                        mysqli_set_charset($connection, "utf8");
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                            }
                        }
                    ?>
                </p>
				<p style="margin-top:10px;text-align:left;font-family:Poppins;font-size:12px;color:#000;">
			<?php
				$resim = $_GET['haber'];
				$sql = "SELECT * FROM ".$kategori." WHERE resim= '$resim'";
				mysqli_set_charset($connection, "utf8");
				$result = mysqli_query($connection, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "Tarih: ";
						echo $row['tarih'];
					}
				}
			?></p>
            </div>
            <table style="text-align:justify;width:100%;">
                <tr>
                    <td style="text-align:left;font-size:30px;font-family:Poppins;width:100%;padding-right:10px;">
                        <p style="text-align:left;"><b>
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                                mysqli_set_charset($connection, "utf8");
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    }
                                }
                            ?>
                        </b></p>
                    </td>
                </tr>
                <tr style="text-align:justify;height:500px;width:100%;padding-right:10px;">
                    <td>
                        <?php
                            $resim = $_GET['haber'];
                            $sql = "SELECT * FROM ".$kategori." WHERE resim= '$resim' AND format = 'mp4'";
                            mysqli_set_charset($connection, "utf8");
                            $result = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <video style="width:100%;height:500px;padding-top:20px;" controls>
                                        <source src="../mboss/<?php echo $kategori; ?>/<?php echo $row['resim1']; ?>.mp4" type="video/mp4">
                                    </video><?php
                                }
                            }else{
                        ?>
                            <img src="../mboss/<?php echo $kategori; ?>/haber<?php echo $_GET['haber']; ?>-1.png" style="width:100%;height:500px;padding-top:20px;">
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;padding-right:10px;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik1 FROM ".$kategori." WHERE resim= '$resim'";
                                mysqli_set_charset($connection, "utf8");
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo nl2br($row['icerik1']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    }
                                }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr style="text-align:justify;height:500px;width:100%;padding-right:10px;">
                    <td>
                        <div>
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT * FROM ".$kategori." WHERE resim= '$resim' AND format = 'mp4'";
                                mysqli_set_charset($connection, "utf8");
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                }else{
                            ?>
                                <img src="../mboss/<?php echo $kategori; ?>/haber<?php echo $_GET['haber']; ?>-2.png" style="width:100%;height:500px;padding-right:10px;">
                            <?php } ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;padding-right:10px;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik2 FROM ".$kategori." WHERE resim= '$resim'";
                                mysqli_set_charset($connection, "utf8");
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo nl2br($row['icerik2']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                    }
                                }
                            ?>
                        </div>
                    </td>
                </tr>
				<tr style="height:auto;">
					<table style="height:auto;">
						<tr>
							<td style="width:30%;height:200px;">
								<div style="width:100%;height:200px;">
                                    <a href="haber-mobil.php?ktg=<?php echo $kategori; ?>&haber=<?php if($_GET['haber'] - 1 == 0){ $resim = $total;}else{ $resim = $_GET['haber']; }  echo $resim; ?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $kategori; ?>/haber<?php if($_GET['haber'] - 1 == 0){ $resim = $total;}else{ $resim = $_GET['haber'] - 1; } echo $resim;?>.png" style="width:100%;height:200px;"></a>
								</div>
							</td>
							<td style="width:40%">
							</td>
							<td style="width:30%;height:200px;">
								<div style="width:100%;height:200px;">
                                    <a href="haber-mobil.php?ktg=<?php echo $kategori; ?>&haber=<?php if($_GET['haber'] + 1 > $total){ $resim = 1;}else{ $resim = $_GET['haber']; } echo $resim;?>" style="text-decoration:none;color:#000"><img src="../mboss/<?php echo $kategori; ?>/haber<?php if($_GET['haber'] + 1 > $total){ $resim = 1;}else{ $resim = $_GET['haber'] + 1; }  echo $resim;?>.png" style="width:100%;height:200px;"></a>
								</div>
							</td>
						</tr>
						<tr style="height:auto;">
							<td style="width:30%;height:auto;">
								<div style="background-color:#ededed;text-align:justify;width:100%;;height:200px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
									<a href="haber-mobil.php?ktg=<?php echo $kategori; ?>&haber=<?php if($_GET['haber'] - 1 == 0){ $resim = $total;}else{ $resim = $_GET['haber'] - 1; }  echo $resim; ?>" style="text-decoration:none;color:#000">
										<?php
                                        if($_GET['haber'] - 1 == 0){
                                            $resim = $total;
                                            
                                        }else{
                                            $resim = $_GET['haber'] - 1;
                                        }
										$sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
										mysqli_set_charset($connection, "utf8");
										$result = mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
											}
										}
										?>
									</a>
								</div>
							</td>
							<td style="width:40%">
							</td>
							<td style="width:30%;height:auto;">
								<div style="background-color:#ededed;text-align:justify;width:100%;;height:200px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
									<a href="haber-mobil.php?ktg=<?php echo $kategori; ?>&haber=<?php if($_GET['haber'] + 1 > $total){ $resim = 1;}else{ $resim = $_GET['haber'] + 1; } echo $resim;?>" style="text-decoration:none;color:#000">
										<?php
                                        if($_GET['haber'] + 1 > $total){
                                            $resim = 1;
                                            
                                        }else{
                                            $resim = $_GET['haber'] + 1;
                                        }
										$sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
										mysqli_set_charset($connection, "utf8");
										$result = mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
											}
										}
										?>
									</a>
								</div>
							</td>
						</tr>
					</table>
				<tr>
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
    
    <div id="footer" style="width:100%;background-color:#CD0000;">
        <?php include 'footer-mobil.php'; ?>
    </div>
</body>
</html>
<?php } ?>
