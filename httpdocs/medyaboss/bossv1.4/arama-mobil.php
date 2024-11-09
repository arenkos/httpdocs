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
    ?><meta http-equiv="refresh" content="0; URL=arama.php">
    <?php
}else{
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    echo "Arama Sonuçları - ";
    echo $_POST['arama']; // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    ?></title>
    <link rel="shortcut icon" href="chopar.png" type="image/x-icon">
    <link rel="icon" href="https://www.medyabosshaber.com/mboss/logo.png" type="image/x-icon">
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
        $sql = "UPDATE dunya SET tiklanma_mobil = tiklanma_mobil + 1 WHERE resim= '$resim'";
        mysqli_query($connection, $sql);
    ?>
    <header id="header" style="position:fixed;width:100%;margin-top:-10px;">
        <?php include 'head2-mobil.php'; ?>
    </header>
	<!-- Haberler -->
	<main style="text-align:center;padding-top:222px;background-color:#fff;">
    <?php
    $servername = "localhost:3306";
    $username = "aecmedya_aren";
    $password = "Aren2023";
    $database = "aecmedya_haber";

    // Veritabanı bağlantısını oluşturun
    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // POST verilerini alın ve güvenli hale getirin
    $arama = mysqli_real_escape_string($connection, $_POST['arama']);

    // SQL sorgusunu hazırlayın
    $sql_dunya = "SELECT * FROM dunya WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_ekonomi = "SELECT * FROM ekonomi WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_gundem = "SELECT * FROM gundem WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_magazin = "SELECT * FROM magazin WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_saglik = "SELECT * FROM saglik WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_son_dakika = "SELECT * FROM son_dakika WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_spor = "SELECT * FROM spor WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
    $sql_teknoloji = "SELECT * FROM teknoloji WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";

    // UTF-8 karakter setini kullan
    mysqli_set_charset($connection, "utf8");

    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_dunya);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "Dünya<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="dunya/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/dunya/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }

    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_ekonomi);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Ekonomi<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="ekonomi/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/ekonomi/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_gundem);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Gündem<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="gundem/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/gundem/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_magazin);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Magazin<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="magazin/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/magazin/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_saglik);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Sağlık<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="saglik/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/saglik/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }

    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_son_dakika);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Son Dakika<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="son_dakika/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/son_dakika/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_spor);

    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Spor<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="spor/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/spor/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // SQL sorgusunu çalıştırın
    $result = mysqli_query($connection, $sql_teknoloji);

    // Sonuçları işleyin
    // Sonuçları işleyin
    if (mysqli_num_rows($result) > 0) {
        echo "<br><br>Teknoloji<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Her bir sonuç için tablo oluşturun
            $id = $row['resim'];
            echo '<table style="padding-top:0px;margin: 0 auto;width:100%;">';
            echo '<tr>';
            echo '<td><a href="teknoloji/haber-mobil.php?haber=' . $id . '"><img style="width:90%;" src="../mboss/teknoloji/haber' . $id . '.png"><p style="width:90%;margin:0 auto;">' . nl2br($row['baslik']) . '</p></a></td>';
            echo '</tr>';
            echo '</table>';
        }
    }
    
    // Veritabanı bağlantısını kapatın
    mysqli_close($connection);
    ?>

		
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
<?php } ?>
