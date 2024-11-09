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

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=haber-mobil.php?haber=<?php echo $_GET['haber']; ?>">
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
        $sql = "SELECT baslik FROM magazin WHERE resim= '$resim'";
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
		$sql = "UPDATE magazin SET tiklanma_mobil = tiklanma_mobil + 1 WHERE resim= '$resim'";
		mysqli_query($connection, $sql);
    ?>
    <header style="position:fixed;width:100%;margin-top:-10px;">
        <?php include '../head.php'; ?>
    </header>
    
    <!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
        <?php include '../menu.php'; ?>
        <div style="margin: 0 auto;width:1540px;text-align:justify;">
            <div style="text-align:left;margin-top:300px;">
                <p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../magazin.php" style="text-decoration:none;color:#000;">Gündem</a> >
                    <?php
                        $resim = $_GET['haber'];
                        $sql = "SELECT baslik FROM magazin WHERE resim= '$resim'";
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
            <table style="text-align:justify;">
                <tr>
                    <td style="text-align:left;font-size:50px;font-family:Poppins;width:500px;">
                        <p style="text-align:left;"><b>
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT baslik FROM magazin WHERE resim= '$resim'";
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
                    <td style="text-align:center;font-size:20px;font-family:Poppins;width:500px;padding-left:150px;padding-top:0px;">
                        <p><b>Gündemdekiler</b></p>
                    </td>
                </tr>
                <tr style="text-align:justify;height:500px;width:500px;">
                    <td>
                        <video style="width:1000px;height:500px;padding-top:20px;" controls>
						<?php if ($_GET['haber'] == 2){ ?>
                          <source src="https://www.medyabosshaber.com/mboss/magazin/video3.mp4" type="video/mp4">
						<?php }else{ ?>
							<source src="https://www.medyabosshaber.com/mboss/magazin/video2.mp4" type="video/mp4">
						<?php } ?>
                          Your browser does not support HTML5 video.
                        </video>
                    </td>
                    <td style="width:150px;height:500px;">
                    </td>
                    <td>
                        <?php include 'gundemde.php'; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:1000px;height:auto;font-size:20px;font-family:Poppins;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik1 FROM magazin WHERE resim= '$resim'";
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
    
    <div style="width:100%;background-color:#CD0000;">
        <?php include '../footer.php'; ?>
    </div>
</body>
</html>
<?php } ?>
