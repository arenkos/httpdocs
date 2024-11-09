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

if (strpos($userAgent, 'Mobile') == true) {
    ?><meta http-equiv="refresh" content="0; URL=son_dakika-mobil.php">
    <?php
}
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
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
?>
	<header style="position:fixed;width:100%;margin-top:-10px;z-index: 9999;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Logo ve Menü -->
				<ul style="width:100%;background:#CD0000;height:92px;text-align:left;">
					<?php include 'header2.php'; ?>
				</ul>
				
				<div style="width:100%;height:50px;background:#CD0000;margin: 0 auto;">
					<table style="width:1540px;height:50px;background:#CD0000;margin: 0 auto;text-align:justify;">
						<tr>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ana.php">Ana Sayfa</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="son_dakika.php">Son Dakika</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="gundem.php">Gündem</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="spor.php">Spor</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="magazin.php">Magazin</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="dunya.php">Dünya</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ekonomi.php">Ekonomi</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php">Teknoloji</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php">Sağlık</a></td>
							<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
							<td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="yazarlarimiz.php">Yazarlarımız</a></td>
						</tr>
					</table>
				</div>
				
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2.php'; ?>
				</ul>
<ul style="width:50%;margin:0 auto;">
    <form style="width:100%;margin:0 auto;" action="arama.php" method ="POST">
        <table style="width:100%;margin:0 auto;">
            <tr style="width:100%;margin:0 auto;">
                <td style="width:80%;">
                    <input id="arama" style="width:50%;" type="text" name="arama" placeholder="Arama" required>

                    <script>
                        function buyut() {
                            var aramaInput = document.getElementById("arama");
                            aramaInput.style.transition = "width 0.5s"; // Geçiş süresini ayarlayabilirsiniz.
                            aramaInput.style.width = "100%";
                        }

                        // Metin kutusu odaklandığında çalıştırmak için:
                        var aramaInput = document.getElementById("arama");
                        aramaInput.addEventListener("focus", buyut);

                        // Metin kutusu odaktan çıktığında eski boyutuna geri dönmek için:
                        aramaInput.addEventListener("blur", function() {
                            aramaInput.style.width = "50%";
                        });
                    </script>
                </td>
                <td style="width:20%;">
                    <input style="100%;" type="submit" value="Ara">
                </td>
            </tr>
        </table>
    </form>
</ul>
			</nav>
		</div>

	</header>
	
<!-- Haberler -->
    <main style="text-align:center;padding-top:222px;background-color:#fff;">
        
        
<table style="text-align:center;margin: 0 auto;width:1540px;">
    <tr style="text-align:center;">
        <td>
            <div style="padding-top:50px;width:1540px;margin: 0 auto;">
                <!-- Slayt ve yanındaki haberler -->
                <table style="width:1540px;margin: 0 auto;">
                    <tr>
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
                                document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + imageIndex;
                                document.getElementById("hbr").target = "_blank";

                                }
                                function go(index){
                                  window.location = "haber.php?ktg=son_dakika&haber=" + index;
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
                                <table style="width:990px;"><tr>
                                    <td style="text-align:left;">
                                        <img src="geri.png" style="width:20px;height:10px;"  onclick="goToNextImage()">
                                    </td>
                                    <td>
                                        <div>
                                          <?php
                                            if (isset($_POST['image'])) {
                                              $selected_image = $_POST['image'];
                                            }
                                            echo '<a id="hbr" href="haber.php?ktg=son_dakika&haber=' . $id . '"><img id="slayt" src="../mboss/son_dakika/haber' . $id . '.png" width="950px" height="610px"></a>';
                                          ?>
                                        </div>
                                    </td>
                                    <?php
                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                    $result2 = mysqli_query($connection, $sql2);
                                    $row2 = mysqli_fetch_assoc($result2);
                                    mysqli_set_charset($connection, "utf8");
                                    $id = $row2['total'];
                                    ?>
                                    <td style="text-align:right;">
                                        <img src="ileri.png" style="width:20px;height:10px;" onclick="goToPrevImage()">
                                    </td>
                                </tr></table>
                            </div>
                        </td>
                        <td>
                            <div style="width:10px;"></div>
                        </td>
                        
                        <!-- Slayt yanı haberler -->
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <?php
                                            $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                            $result2 = mysqli_query($connection, $sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
                                            mysqli_set_charset($connection, "utf8");
                                            $id = $row2['total'];
                                        ?>
                                        <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:510px;height:205px;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                            <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                <tr>
                                    <td>
                                        <?php
                                            $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                            $result2 = mysqli_query($connection, $sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
                                            mysqli_set_charset($connection, "utf8");
                                            $id = $row2['total'] - 1;
                                        ?>
                                        <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:510px;height:205px;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                            <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                            </table>
                        </td>
                    </tr>
                </table>
                
                <!-- Slayt altındaki haberler -->
                <table style="width:1540px;margin: 0 auto;">
                    <tr>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 2;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                        <td style="width:350px;">
                        </td>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 3;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 4;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                        <td style="width:350px;">
                        </td>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 5;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 6;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                        <td style="width:350px;">
                        </td>
                            <td>
                                <?php
                                    $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                    $result2 = mysqli_query($connection, $sql2);
                                    $row2 = mysqli_fetch_assoc($result2);
                                    mysqli_set_charset($connection, "utf8");
                                    $id = $row2['total'] - 7;
                                ?>
                                <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                            </td>
                            <td style="width:10px;">
                            </td>
                            <td>
                                <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                    <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                    </div>
                                </a>
                            </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 8;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
                        </td>
                        <td style="width:350px;">
                        </td>
                        <td>
                            <?php
                                $sql2 = "SELECT COUNT(*) as total FROM son_dakika";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                mysqli_set_charset($connection, "utf8");
                                $id = $row2['total'] - 9;
                            ?>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>"><img src="../mboss/son_dakika/haber<?php echo $id; ?>.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="haber.php?ktg=son_dakika&haber=<?php echo $id; ?>">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
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
                                </div>
                            </a>
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

<div style="width:100%;background-color:#CD0000;">
<?php include 'footer.php'; ?>
</div>
</body>
</html>
