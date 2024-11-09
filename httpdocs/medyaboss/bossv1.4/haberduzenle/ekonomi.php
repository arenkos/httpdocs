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
    ?><meta http-equiv="refresh" content="0; URL=ekonomi-mobil.php?mail=<?php echo $_GET['mail']; ?>">
    <?php
}
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medya Boss - Dünyadan Haberiniz Olsun</title>
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
        <div style="width:100%;;">
            <nav style="width:100%;">
                <!-- Döviz kurları -->
                <ul style="width:100%;height:40px;background:#FFFFFF;text-align:left;">
                    <?php include 'doviz2.php'; ?>
                </ul>
                
                <!-- Logo ve Menü -->
                <ul style="width:100%;background:#CD0000;height:92px;text-align:left;">
                    <?php include 'header2.php'; ?>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Haberler -->
    <main style="text-align:center;padding-top:122px;background-color:#fff;">
        <div style="width:100%;height:50px;background:#CD0000;margin: 0 auto;">
            <table style="width:1540px;height:50px;background:#CD0000;margin: 0 auto;text-align:justify;">
                <tr>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ana.php?mail=<?php echo $_GET['mail']; ?>">Ana Sayfa</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="son_dakika.php?mail=<?php echo $_GET['mail']; ?>">Son Dakika</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="gundem.php?mail=<?php echo $_GET['mail']; ?>">Gündem</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="spor.php?mail=<?php echo $_GET['mail']; ?>">Spor</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="magazin.php?mail=<?php echo $_GET['mail']; ?>">Magazin</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="dunya.php?mail=<?php echo $_GET['mail']; ?>">Dünya</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color=#FFB600;" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="ekonomi.php?mail=<?php echo $_GET['mail']; ?>">Ekonomi</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php?mail=<?php echo $_GET['mail']; ?>">Teknoloji</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php?mail=<?php echo $_GET['mail']; ?>">Sağlık</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
                    <td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="yazarlarimiz.php?mail=<?php echo $_GET['mail']; ?>">Yazarlarımız</a></td>
                </tr>
            </table>
        </div>
        
<table style="text-align:center;margin: 0 auto;width:1540px;">
    <tr style="text-align:center;">
        <td>
            <div style="padding-top:50px;width:1540px;margin: 0 auto;">
                <!-- Slayt ve yanındaki haberler -->
                <table style="width:1540px;margin: 0 auto;">
                    <tr>
                        <!-- Slayt haberleri-->
                        <td>
                            <script>
                                function changeImage(imageIndex) {
                                document.getElementById("secim1").src = "bos.png";
                                document.getElementById("secim2").src = "bos.png";
                                document.getElementById("secim3").src = "bos.png";
                                document.getElementById("secim4").src = "bos.png";
                                document.getElementById("secim5").src = "bos.png";
                                document.getElementById("secim6").src = "bos.png";
                                document.getElementById("secim7").src = "bos.png";
                                document.getElementById("secim8").src = "bos.png";
                                document.getElementById("secim9").src = "bos.png";
                                document.getElementById("secim10").src = "bos.png";
                                  
                                document.getElementById("slayt").src = "../mboss/ekonomi/haber" + imageIndex + ".png";
                                document.getElementById("hbr").href = "ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=" + imageIndex;
                                document.getElementById("hbr").target = "_blank";
                                document.getElementById("secim"+imageIndex).src = "dolu.png";

                                }
                                function go(index){
                                  window.location = "ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=" + index;
                                }
                                function degis(){
                                  document.getElementById("secim"+imageIndex).src = "dolu.png";
                                }
                                function geri(imageIndex){
                                  document.getElementById("secim"+imageIndex).src = "bos.png";
                                }

                                var imageCount = 10; // kaç tane görüntü olduğunu belirtin
                                var selectedImage = 1; // varsayılan olarak gösterilecek görüntüyü belirtin

                                function showImage(imageIndex) {
                                    var imageElement = document.getElementById("slayt");
                                    imageElement.src = "../mboss/ekonomi/haber" + imageIndex + ".png";
                                    selectedImage = imageIndex;
                                    updateSelection();
                                    changeImage(selectedImage);
                                }

                                function updateSelection() {
                                    for (var i = 1; i <= imageCount; i++) {
                                        var selectionElement = document.getElementById("secim" + i);
                                        selectionElement.src = (i == selectedImage) ? "dolu.png" : "bos.png";
                                    }
                                }

                                function goToPrevImage() {
                                    if (selectedImage > 1) {
                                        showImage(selectedImage - 1);
                                    }else{
                                        showImage(imageCount);
                                    }
                                }

                                function goToNextImage() {
                                    if (selectedImage < imageCount) {
                                        showImage(selectedImage + 1);
                                    }else{
                                        showImage(1);
                                    }
                                }

                                function goToImage(index) {
                                    if (index >= 1 && index <= imageCount) {
                                        showImage(index);
                                    }
                                }
                            </script>

                            <div>
                              <?php
                                $image_count = 10; // kaç tane görüntü olduğunu belirtin
                                $selected_image = 1; // varsayılan olarak gösterilecek görüntüyü belirtin
                                if (isset($_POST['image'])) {
                                  $selected_image = $_POST['image'];
                                }
                                echo '<a id="hbr" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=' . $selected_image . '"><img id="slayt" src="../mboss/ekonomi/haber' . $selected_image . '.png" width="990px" height="610px"></a>';
                              ?>
                            </div>
                            <div class="radio-group" style="text-align:center;">
                                <table style="padding-left:330px;"><tr>
                                    <td>
                                        <img src="geri.png" style="width:20px;height:10px;"  onclick="goToPrevImage()">
                                    </td>
                                    <?php
                                    for ($i=1; $i<=$image_count; $i++) {
                                        echo '<td style="width:30px;"><img id="secim' . $i . '" src="bos.png" name="image_selection" onclick="go(' . $i . ')" onmouseover="changeImage(' . $i . '); showImage(' . $i . ');"/></td>';
                                    }
                                    ?>
                                    <td>
                                        <img src="ileri.png" style="width:20px;height:10px;" onclick="goToNextImage()">
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
                                        <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><img src="../mboss/ekonomi/haber1.png" style="width:510px;height:205px;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1">
                                            <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                                <?php
                                                    $sql = "SELECT baslik FROM ekonomi WHERE resim= 1";
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
                                        <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/ekonomi/haber2.png" style="width:510px;height:205px;padding-bottom:25px;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2">
                                        <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                            <?php
                                                $sql = "SELECT baslik FROM ekonomi WHERE resim= 2";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/ekonomi/haber3.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 3";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><img src="../mboss/ekonomi/haber4.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 4";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><img src="../mboss/ekonomi/haber5.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 5";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=6"><img src="../mboss/ekonomi/haber6.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=6">
                                    <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                        <?php
                                            $sql = "SELECT baslik FROM ekonomi WHERE resim= 6";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><img src="../mboss/ekonomi/haber7.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 7";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="../mboss/ekonomi/haber8.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8">
                                    <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                        <?php
                                            $sql = "SELECT baslik FROM ekonomi WHERE resim= 8";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/ekonomi/haber9.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 9";
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
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=10"><img src="../mboss/ekonomi/haber10.png" style="width:250px;height:250px;"></a>
                        </td>
                        <td style="width:10px;">
                        </td>
                        <td>
                            <a target="_blank" style="text-decoration:none;" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=10">
                                <div style="text-align:justify;text-decoration:none;width:510px;height:100px;color:black;font-size:20px;padding-bottom:15px;">
                                    <?php
                                        $sql = "SELECT baslik FROM ekonomi WHERE resim= 10";
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
