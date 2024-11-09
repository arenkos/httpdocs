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
    ?><meta http-equiv="refresh" content="0; URL=haber.php?haber=<?php echo $_GET['haber']; ?>">
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
            $sql = "SELECT baslik FROM gundem WHERE resim= '$resim'";
            mysqli_set_charset($connection, "utf8");
            $result = mysqli_query($connection, $sql);
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
    <link rel="shortcut icon" href="chopar.png" type="image/x-icon">
    <link rel="icon" href="https://www.medyabosshaber.com/mboss/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style.css">
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
		$sql = "UPDATE gundem SET tiklanma_mobil = tiklanma_mobil + 1 WHERE resim= '$resim'";
		mysqli_query($connection, $sql);
    ?>
    <header id="header" style="position:fixed;width:100%;margin-top:-10px;">
        <?php include '../head-mobil.php'; ?>
    </header>
    
    <!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;width:100%;margin-left:10px;margin-right:10px;">
        <?php include '../menu-mobil.php'; ?>
        <div style="margin: 0 auto;width:100%;text-align:justify;">
            <div style="text-align:left;margin-top:300px;">
                <p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../gundem.php" style="text-decoration:none;color:#000;">Gündem</a> >
                    <?php
                        $resim = $_GET['haber'];
                        $sql = "SELECT baslik FROM gundem WHERE resim= '$resim'";
                        mysqli_set_charset($connection, "utf8");
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                            }
                        }
                    ?>
                </p>
            </div>
            <table style="text-align:justify;width:100%;">
                <tr>
                    <td style="text-align:left;font-size:30px;font-family:Poppins;width:100%">
                        <p style="text-align:left;"><b>
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT baslik FROM gundem WHERE resim= '$resim'";
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
                    <td style="width:150px;">
                    </td>
                </tr>
                <tr style="text-align:justify;height:500px;width:100%">
                    <td>
                        <?php
                            $resim = $_GET['haber'];
                            $sql = "SELECT * FROM gundem WHERE resim= '$resim' AND format = 'mp4'";
                            mysqli_set_charset($connection, "utf8");
                            $result = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <video style="width:100%;height:500px;padding-top:20px;" controls>
                                        <source src="https://www.medyabosshaber.com/mboss/gundem/<?php echo $row['resim1']; ?>.mp4" type="video/mp4">
                                    </video><?php
                                }
                            }else{
                        ?>
                            <img src="https://www.medyabosshaber.com/mboss/gundem/haber<?php echo $_GET['haber']; ?>-1.png" style="width:100%;height:500px;padding-top:20px;">
                        <?php } ?>
                    </td>
                    <td style="width:150px;height:500px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik1 FROM gundem WHERE resim= '$resim'";
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
                <tr>
                    <td>
                        <div>
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT * FROM gundem WHERE resim= '$resim' AND format = 'mp4'";
                                mysqli_set_charset($connection, "utf8");
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                }else{
                            ?>
                                <img src="https://www.medyabosshaber.com/mboss/gundem/haber<?php echo $_GET['haber']; ?>-2.png" style="width:100%;height:500px;">
                            <?php } ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:100%;height:auto;font-size:20px;font-family:Poppins;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik2 FROM gundem WHERE resim= '$resim'";
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
									<a href="haber-mobil.php?haber=<?php $resim = ($_GET['haber'] - 1)%11; if($resim == 0){ $resim = 10;}  echo $resim;?>" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com/mboss/gundem/haber<?php $resim = ($_GET['haber'] - 1)%11; if($resim == 0){ $resim = 10;} echo $resim;?>.png" style="width:100%;height:200px;"></a>
								</div>
							</td>
							<td style="width:40%">
							</td>
							<td style="width:30%;height:200px;">
								<div style="width:100%;height:200px;">
									<a href="haber-mobil.php?haber=<?php $resim = ($_GET['haber'] + 1)%11; if($resim == 0){ $resim = 1;}  echo $resim;?>" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com/mboss/gundem/haber<?php $resim = ($_GET['haber'] + 1)%11; if($resim == 0){ $resim = 1;}  echo $resim;?>.png" style="width:100%;height:200px;"></a>
								</div>
							</td>
						</tr>
						<tr style="height:auto;">
							<td style="width:30%;height:auto;">
								<div style="background-color:#ededed;text-align:justify;width:100%;;height:200px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
									<a href="haber-mobil.php?haber=<?php $resim = ($_GET['haber'] - 1)%11; if($resim == 0){ $resim = 10;}  echo $resim;?>" style="text-decoration:none;color:#000">
										<?php
										$resim = ($_GET['haber'] - 1)%11;
										if($resim == 0){
											$resim = 10;
										}
										$sql = "SELECT baslik FROM gundem WHERE resim= '$resim'";
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
									<a href="haber-mobil.php?haber=<?php $resim = ($_GET['haber'] + 1)%11; if($resim == 0){ $resim = 1;}  echo $resim;?>" style="text-decoration:none;color:#000">
										<?php
										$resim = ($_GET['haber'] + 1)%11;
										if($resim == 0){
											$resim = 1;
										}
										$sql = "SELECT baslik FROM gundem WHERE resim= '$resim'";
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
        <?php include '../footer-mobil.php'; ?>
    </div>
</body>
</html>
<?php } ?>
