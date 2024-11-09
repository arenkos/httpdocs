<?php 
session_start(); 
?>
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
    ?><meta http-equiv="refresh" content="0; URL=son_dakika.php">
    <?php
}
?>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
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
    ?>
	<header style="position:fixed;width:100%;margin-top:-10px;">
		<?php include 'head2-mobil.php'; ?>
	</header>
	
<!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;width:100%;max-witdh:100%;padding-left:10px;padding-right:10px;">
        
        <table style="text-align:center;margin: 0 auto;width:100%;">
            <tr style="text-align:center;width:100%;">
                <td style="width:100%">
                    <div style="padding-top:50px;width:100%;margin: 0 auto;">
                        <!-- Slayt ve yanındaki haberler -->
<table style="width:100%;margin: 0 auto;">
                            <tr style="width:100%">
<!-- Slayt haberleri-->
                                <td>
<?php
$sql2 = "SELECT COUNT(*) as total FROM son_dakika";
$result2 = mysqli_query($connection, $sql2);
$row2 = mysqli_fetch_assoc($result2);
mysqli_set_charset($connection, "utf8");
$image_count = 10; // kaç tane görüntü olduğunu belirtin
$selected_image = 1; // varsayılan olarak gösterilecek görüntüyü belirtin
$id = $row2['total'];
?>
                                    <script>
                                        function changeImage(imageIndex) {
                                        document.getElementById("slayt").src = "../mboss/son_dakika/haber" + imageIndex + ".png";
                                        document.getElementById("hbr").href = "son_dakika/haber.php?haber=" + imageIndex;
                                        document.getElementById("hbr").target = "_blank";

                                        }
                                        function go(index){
                                          window.location = "son_dakika/haber.php?haber=" + index;
                                        }
                                        function degis(){
                                          document.getElementById("secim"+imageIndex).src = "dolu.png";
                                        }
                                        function geri(imageIndex){
                                          document.getElementById("secim"+imageIndex).src = "bos.png";
                                        }

var imageCount = <?php echo $id;?>; // kaç tane görüntü olduğunu belirtin
var selectedImage = <?php echo $id;?>; // varsayılan olarak gösterilecek görüntüyü belirtin

                                        function showImage(imageIndex,image) {
                                            var imageElement = document.getElementById("slayt");
                                            imageElement.src = "../mboss/son_dakika/haber" + imageIndex + ".png";
                                            selectedImage = imageIndex;
                                            updateSelection(image);
                                            changeImage(selectedImage);
                                        }

                                        function updateSelection(img) {
                                            for (var i = img; i >= 1; i--) {
                                                var selectionElement = document.getElementById("secim" + i);
                                            }
                                        }

                                        function goToPrevImage() {
                                            if (selectedImage > 1) {
                                                showImage(selectedImage - 1);
                                            }else{
                                                showImage(1);
                                            }
                                        }

                                        function goToNextImage() {
                                            if (selectedImage < imageCount) {
                                                showImage(selectedImage + 1);
                                            }else{
                                                showImage(imageCount);
                                            }
                                        }

                                        function goToImage(index) {
                                            if (index >= 1 && index <= imageCount) {
                                                showImage(index);
                                            }
                                        }
                                    </script>

                                    <div class="radio-group" style="text-align:center;">
                                        <table style="width:100%;"><tr>
                                            <td style="width:5%;">
                                                <img src="geri.png" style="width:100%;height:10px;"  onclick="goToNextImage()">
                                            </td>
                                            <td style="width:90%;">
                                                <div>
                                                  <?php
                                                    if (isset($_POST['image'])) {
                                                      $selected_image = $_POST['image'];
                                                    }
                                                    echo '<a id="hbr" href="son_dakika/haber.php?haber=' . $id . '"><img id="slayt" src="../mboss/son_dakika/haber' . $id . '.png" width="100%" height="310px"></a>';
                                                  ?>
                                                </div>
                                            </td>
                                            <td style="width:5%;">
                                                <img src="ileri.png" style="width:100%;height:10px;" onclick="goToPrevImage()">
                                            </td>
                                        </tr></table>
                                    </div>
                                </td>
                                <td>
                                    <div style="width:10px;"></div>
                                </td>
                            </tr>
                        </table>
                        <!-- Slayt altındaki haberler -->
                        <table style="width:100%;margin: 0 auto;">
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'];
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 1;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 2;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 3;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 4;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 5;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                            </tr><tr style="width:100%;">
                            <td style="width:50%;">
                                <table style="width:100%">
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <?php
                                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                $result2 = mysqli_query($connection, $sql2);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                mysqli_set_charset($connection, "utf8");
                                                $id = $row2['total'] - 6;
                                            ?>
                                            <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
                                                    $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                    mysqli_set_charset($connection, "utf8");
                                                    $result = mysqli_query($connection, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                        }
                                                    }
                                                ?>
                                                <div style="color:blue">Devamını için tıklayın</div>
                                            </div></a>
                                        </td>
                                    </tr>
                                    <tr style="height:10px;">
                                    </tr>
                                </table>
                            </td>
                            <td style="width:50%;">
                                <table style="width:100%">
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <?php
                                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                $result2 = mysqli_query($connection, $sql2);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                mysqli_set_charset($connection, "utf8");
                                                $id = $row2['total'] - 7;
                                            ?>
                                            <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
                                                    $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                    mysqli_set_charset($connection, "utf8");
                                                    $result = mysqli_query($connection, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                        }
                                                    }
                                                ?>
                                                <div style="color:blue">Devamını için tıklayın</div>
                                            </div></a>
                                        </td>
                                    </tr>
                                    <tr style="height:10px;">
                                    </tr>
                                </table>
                            </td>
                            </tr>
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 8;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <?php
                                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                                    $result2 = mysqli_query($connection, $sql2);
                                                    $row2 = mysqli_fetch_assoc($result2);
                                                    mysqli_set_charset($connection, "utf8");
                                                    $id = $row2['total'] - 9;
                                                ?>
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="haber-mobil.php?ktg=son_dakika&haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
                                                        $sql = "SELECT baslik FROM son_dakika WHERE resim= '$id'";
                                                        mysqli_set_charset($connection, "utf8");
                                                        $result = mysqli_query($connection, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
                                                            }
                                                        }
                                                    ?>
                                                    <div style="color:blue">Devamını için tıklayın</div>
                                                </div></a>
                                            </td>
                                        </tr>
                                        <tr style="height:10px;">
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
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
    
    <div style="width:100%;background-color:#0000FF;">
        <?php include 'footer-mobil.php'; ?>
    </div>
</body>
</html>
