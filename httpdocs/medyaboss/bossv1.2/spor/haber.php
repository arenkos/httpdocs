<!DOCTYPE html>
<html lang="tr">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=haber-mobil.php?haber=<?php echo $_GET['haber']; ?>">
    <?php
}
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medya Boss - Dünyadan Haberiniz Olsun</title>
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
    ?>
    <header style="position:fixed;width:100%;margin-top:-10px;">
        <div style="width:100%;margin: 0 auto;">
            <nav style="width:100%;">
                <!-- Döviz kurları -->
                <ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
                    <?php include '../doviz.php'; ?>
                </ul>
                
                <!-- Logo ve Menü -->
                <ul style="width:100%;background:#232323;height:92px;text-align:left;">
                    <?php include '../header.php'; ?>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;margin: 0 auto;">
        <?php include '../menu.php'; ?>
        <div style="margin: 0 auto;width:1540px;text-align:justify;">
            <div style="text-align:left;margin-top:300px;">
                <p style="text-align:left;font-family:Poppins;color:#000;"><a href="../ana.php" style="text-decoration:none;color:#000;">Ana Sayfa</a> > <a href="../spor.php" style="text-decoration:none;color:#000;">Spor</a> >
                    <?php
                        $resim = $_GET['haber'];
                        $sql = "SELECT baslik FROM spor WHERE resim= '$resim'";
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
                                $sql = "SELECT baslik FROM spor WHERE resim= '$resim'";
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
                        <img src="https://www.medyabosshaber.com/bossv1.5/spor/haber<?php echo $_GET['haber']; ?>-1.webp" style="width:1000px;height:500px;padding-top:20px;">
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
                                $sql = "SELECT icerik1 FROM spor WHERE resim= '$resim'";
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
                            <img src="https://www.medyabosshaber.com/bossv1.5/spor/haber<?php echo $_GET['haber']; ?>-2.webp" style="width:1000px;height:500px;">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;text-align:justify;width:1000px;height:auto;font-size:20px;font-family:Poppins;">
                            <?php
                                $resim = $_GET['haber'];
                                $sql = "SELECT icerik2 FROM spor WHERE resim= '$resim'";
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
    
    <div style="width:100%;background-color:#232323;">
        <?php include '../footer.php'; ?>
    </div>
</body>
</html>
