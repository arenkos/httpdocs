<?php
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        $_SESSION['user'] = session_id();
        $user = $_SESSION['user'];
    }
    
    //include 'veritabanlari.php';
                
    $servername = "localhost:3306";
    $username = "aren";
    $password = "Arenkos1.";
    $database = "haber";
    
    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }
?>
<div id="haber_cek" style="height:auto;width:100vw;max-width:60vh;margin:5 auto;overflow:hidden;">
    <div style="height:100px;width:100%;">
    </div>
    <?php
        if(!isset($_GET['carpan'])){
                $carpan = 0;
            }else{
                $carpan = (int) $_GET['carpan'] * 10;
            }
        if(isset($_GET['goster'])){
            $goster = $_GET['goster'];
        }else{
            $goster = "1";
        }
        //$aradeger = 1;
        //$aradeger = $aradeger + $goster;
        $gosterilecek = 10 * $goster;
        if(isset($_GET['akis'])){
            $akis = $_GET['akis'];
        }else{
            $akis = 0;
        }
        $row['kategori'] = "";
        $row['kaynak'] = "";
        if(isset($_GET['arama'])){
            $arama = $_GET['arama'];
            if(!empty($row['kategori']) && !empty($row['kaynak'])){
                $sql = "SELECT * FROM haberler WHERE (baslik LIKE '%$arama%' OR kaynak LIKE '%$arama%' OR kategori LIKE '%$arama%') AND resim_url NOT LIKE '' AND kaynak LIKE '$kaynak_ozellestirme' AND kategori LIKE '$kategori_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else if(!empty($row['kategori'])){
                $sql = "SELECT * FROM haberler WHERE (baslik LIKE '%$arama%' OR kaynak LIKE '%$arama%' OR kategori LIKE '%$arama%') AND resim_url NOT LIKE '' AND kategori LIKE '$kategori_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else if(!empty($row['kaynak'])){
                $sql = "SELECT * FROM haberler WHERE (baslik LIKE '%$arama%' OR kaynak LIKE '%$arama%' OR kategori LIKE '%$arama%') AND resim_url NOT LIKE '' AND kaynak LIKE '$kaynak_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else{
                $sql = "SELECT * FROM haberler WHERE (baslik LIKE '%$arama%' OR kaynak LIKE '%$arama%' OR kategori LIKE '%$arama%') AND resim_url NOT LIKE '' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }
        }else{
            if(!empty($row['kategori']) && !empty($row['kaynak'])){
                $sql = "SELECT * FROM haberler WHERE resim_url NOT LIKE '' AND kaynak LIKE '$kaynak_ozellestirme' AND kategori LIKE '$kategori_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else if(!empty($row['kategori'])){
                $sql = "SELECT * FROM haberler WHERE resim_url NOT LIKE '' AND kategori LIKE '$kategori_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else if(!empty($row['kaynak'])){
                $sql = "SELECT * FROM haberler WHERE resim_url NOT LIKE '' AND kaynak LIKE '$kaynak_ozellestirme' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }else{
                $sql = "SELECT * FROM haberler WHERE resim_url NOT LIKE '' ORDER BY tarih DESC LIMIT ".$carpan.", 10";
            }
        }
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        $reklam = 1;
        if (mysqli_num_rows($result) > 0) {
            //$akis = $_POST['sayi'];
            $akis = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $baslik = $row['baslik'];
                $tarih = $row['tarih'];
                $haber_url = $row['haber_url'];
                $resim_url = $row['resim_url'];
                $kaynak = $row['kaynak'];
                $kaynak_yeni= "";
                switch($kaynak){
                    case "A HABER":
                    $kaynak_yeni = "ahaber";
                    break;
                    case "CNN TÜRK":
                    $kaynak_yeni = "cnn";
                    break;
                    case "HABERTÜRK":
                    $kaynak_yeni = "haberturk";
                    break;
                    case "MİLLİYET":
                    $kaynak_yeni = "milliyet";
                    break;
                    case "NTV":
                    $kaynak_yeni = "ntv";
                    break;
                    case "SABAH":
                    $kaynak_yeni = "sabah";
                    break;
                    case "SHIFTDELETE.NET":
                    $kaynak_yeni = "sdn";
                    break;
                    case "SÖZCÜ":
                    $kaynak_yeni = "sozcu";
                    break;
                    case "TRT HABER":
                    $kaynak_yeni = "trt";
                    break;
                    case "WEBTEKNO":
                    $kaynak_yeni = "webtekno";
                    break;
                }
                
                $sql_tepki = "SELECT * FROM tepkiler WHERE haber_url LIKE '$haber_url' AND kullanici LIKE '$user'";
                mysqli_set_charset($connection, "utf8");
                $result_tepki = mysqli_query($connection, $sql_tepki);
                if (mysqli_num_rows($result_tepki) > 0) {
                    while ($row_tepki = mysqli_fetch_assoc($result_tepki)) {
                        $begen = $row_tepki['begen'];
                        $begenme = $row_tepki['begenme'];
                        if(isset($_GET['haberurl'])){
                            $haberurl = $_GET['haberurl'];
                        }else{
                            $haberurl = $haber_url;
                        }
                    }
                }
            
                if($reklam%4 == 1 && $reklam > 1){ ?>
                    <div style="height:auto;width:100%;margin:0 auto;">
                        <h3 style="height:5vh;width:100%;margin:0 center;color:white;display:flex;text-align:center;">-Sponsorlu Reklam-</h3>
                        <div style="height:100vw;max-height:60vh;width:100%;margin:0 auto;">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6912090056166853"
                                 crossorigin="anonymous"></script>
                            <ins class="adsbygoogle"
                                 style="display:block;height:100%;width:100%;"
                                 data-ad-format="fluid"
                                 data-ad-layout-key="+2t+rl+2h-1m-4u"
                                 data-ad-client="ca-pub-6912090056166853"
                                 data-ad-slot="1096821566"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <div style="height:200px;">
                        </div>
                    </div>
                <?php
                }else{ ?>
                    <div style="height:auto;width:100%;margin:0 auto;">
                        <table style="height:4vh;width:auto;margin:0 auto;text-align:left;">
                            <tr>
                                <td>
                                    <img src="logo/<?php echo $kaynak_yeni; ?>.png" style="height:4vh;width:auto;">
                                </td>
                            </tr>
                        </table>
                        <p onclick="kapat('<?php echo $haber_url; ?>')" style="margin:0;text-align:right;width:100%;height:auto;color:white;display:none;font-size:25px;display:none;" id="x_<?php echo $haber_url; ?>">X</p>
                        <img id="resim_<?php echo $haber_url; ?>" ondblclick="like('<?php echo $haber_url; ?>')" style="display:flex;height:auto;max-height:auto;width:100%;margin:0 auto;" src="<?php echo $resim_url; ?>">
                        <div style="height:10px;">
                        </div>
                        <div style ="display:flex;height:auto;width:100%;margin:0 auto;text-align:center;">
                            <p id="baslik_<?php echo $haber_url; ?>" onclick="haber('<?php echo $haber_url; ?>')" style="margin:0 auto;text-align:center;color:white;font-size:25px;"><?php echo $baslik;?></p>
                        </div>
                        <div style="height:10px;">
                        </div>
                        <div style ="display:flex;height:auto;width:100%;margin:0 auto;text-align:center;">
                            <p id="tarih_<?php echo $haber_url; ?>" onclick="haber('<?php echo $haber_url; ?>')" style="margin:0 auto;text-align:center;color:white;font-size:15px;">- <?php echo $tarih; ?> -</p>
                        </div>
                        <div style="height:10px;">
                        </div>
                        <iframe id="haber_<?php echo $haber_url; ?>" src="<?php echo $haber_url; ?>" style="height:100vh;max-height:100%;width:100%;display:none;margin:0 auto;"></iframe>
                        <iframe id="yorumlar_<?php echo $haber_url; ?>" style="display:none;height:100vh;max-height:100%;width:100%;margin:0 auto;margin-top:10px;"></iframe>
                        <div id="div" style="height:5vh;width:100%;margin:0 auto;text-align:center;">
                            <table style="height:100%;width:30vh;margin:0 auto;text-align:center;">
                                <tr style="height:100%;width:100%;margin:0 auto;text-align:center;">
                                    <td style="height:5vh;width:10vh;margin:0 auto;text-align:center;">
                                        <?php  if($begen == 1){  ?>
                                        <img id="liked_<?php echo $haber_url; ?>" src="liked.png" onclick="unlike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
                                        <img id="like_<?php echo $haber_url; ?>" src="like.png" onclick="like('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
                                        <?php  } else {  ?>
                                        <img id="like_<?php echo $haber_url; ?>" src="like.png" onclick="like('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
                                        <img id="liked_<?php echo $haber_url; ?>" src="liked.png" onclick="unlike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;margin:0 auto;text-align:center;">
                                        <?php  }  ?>
                                        
                                    </td>
                                    <td style="height:5vh;width:10vh;margin:0 auto;text-align:center;">
                                        <?php  if($begenme == 1){  ?>
                                        <img id="dislike_<?php echo $haber_url; ?>" src="dislike.png" onclick="dislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;">
                                        <img id="disliked_<?php echo $haber_url; ?>" src="disliked.png" onclick="undislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
                                        <?php  } else {  ?>
                                        <img id="dislike_<?php echo $haber_url; ?>" src="dislike.png" onclick="dislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
                                        <img id="disliked_<?php echo $haber_url; ?>" src="disliked.png" onclick="undislike('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:none;margin:0 auto;text-align:center;">
                                        <?php  }  ?>
                                    </td>
                                    <td style="height:5vh;width:10vh;margin:0 auto;text-align:center;">
                                        <img id="yorum_<?php echo $haber_url; ?>" src="yorum.png" onclick="yorumlar('<?php echo $haber_url; ?>')" style="width:5vh;height:5vh;display:flex;margin:0 auto;text-align:center;">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="height:200px;">
                        </div>
                    </div>
                    <?php
                }
                $reklam++;
                if($reklam > 10){
                    //break;
                }
            }
        } ?>
    <div style="height:70px;width:100%;">
    </div>
