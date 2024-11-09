<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

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
        $sql = "SELECT baslik FROM dunya WHERE resim= '$resim'";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
    ?>
</head>
<body style="width:100%;height:100vh;background-color:#000;margin: 0 auto;overflow: hidden;">
    <?php
        $resim = $_GET['haber'];
		$kategori = $_GET['ktg'];
		//$sql = "UPDATE".$kategori."SET tiklanma_ios = tiklanma_ios + 1 WHERE resim= '$resim'";
		mysqli_query($connection, $sql);
    ?>
    
    <!-- Haberler -->
    <main style="width:100%;height:100vh;background-color:#000;margin: 0 auto;overflow: hidden;">
        
        <div style="margin: 0 auto;width:100%;height:100vh; overflow: hidden;">
            <?php
                $resim = $_GET['haber'];
                $sql = "SELECT * FROM ".$kategori." WHERE resim= '$resim' AND format = 'mp4'";
                mysqli_set_charset($connection, "utf8");
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $resim1 = $row['resim1'];
                        ?>
                        <video style="width:100%;height:100vh; overflow: hidden;" controls autoplay>
                            <source src="https://www.medyabosshaber.com/mboss/<?php echo $kategori; ?>/<?php echo $resim1; ?>.mp4" type="video/mp4" style="width:100%;height:100vh; overflow: hidden;">
                            
                        </video><?php
                    }
                }else{
            ?>
                <img src="https://www.medyabosshaber.com/mboss/<?php echo $kategori; ?>/haber<?php echo $_GET['haber']; ?>.png" style="width:100%;height:100vh; overflow: hidden;">
            <?php } ?>
        </div>
    </main>
</body>
</html>
