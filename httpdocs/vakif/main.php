<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ermeni Toplulukları Vakfı</title>
    <script src="script.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/vakif/style.php?v=<?php echo time(); ?>">
    <?php
        require_once 'veritabani_agos.php';
        $servername = "localhost:3306";
        $username = "aren";
        $password = "Arenkos1.";
        $database = "haber";

        $connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM agos ORDER BY tarih DESC";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        $reklam = 1;
        if (mysqli_num_rows($result) > 0) {
            $akis = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $baslik = $row['baslik'];
                $tarih = $row['tarih'];
                $haber_url = $row['haber_url'];
                $akis = $akis + 1;
                if($akis==4){
                    break;
                }
            }
        }
    ?>
</head>
<body style="margin:0 auto;background-color:white;width:100%;height:100%;">
    <header>
        <?php include 'header.php'; ?>
    </header>
    <section id="home" style="width:80%;margin:0 auto;">
        <div style="height:180px;"></div>
        <?php include 'slide.php'; ?>
        <div style="height:20px;"></div>
        <p style="font-size:35px;text-align:center;color:black;"> ANA SAYFA </p>

        <section id="haberler">
            <p style="font-size:30px;text-align:left;color:black;"> Haberler </p>
            <table style="width:90%;height:auto;margin:0 auto;border-spacing:20px;">
                <tr>
                    <?php
                    $sql = "SELECT * FROM agos ORDER BY tarih DESC";
                    mysqli_set_charset($connection, "utf8");
                    $result = mysqli_query($connection, $sql);
                    $reklam = 1;
                    if (mysqli_num_rows($result) > 0) {
                        $akis = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $baslik = $row['baslik'];
                            $tarih = $row['tarih'];
                            $haber_url = $row['haber_url'];
                            $akis = $akis + 1; ?>
                            <td style="width:25%; padding:10px; margin:0; border:2px solid black; border-radius: 10%; vertical-align: top;">
                                <img src="agos.png" style="width:50px; height:auto; display: block; margin: 0; text-align:left;">
                                <p style="font-size:20px; text-align:left; color:black;"> <?php echo $baslik; ?> </p>
                                <p style="font-size:10px; text-align:right; color:black;"> <?php echo $tarih; ?> </p>
                            </td>
                            <?php
                            if($akis==4){
                                break;
                            }
                        }
                    } ?>
                </tr>
            </table>
        </section>
        <section id="gazeteler">
            <p style="font-size:30px;text-align:left;color:black;"> Gazeteler ve Dergiler </p>
            <table style="width:90%;height:500px;margin:0 auto;border-spacing:30px;">
                <tr>
                    <td style="width:25%; padding:10px;margin:0 auto;border:2px solid black;border-radius: 10%;">
                        <img src="agos.png" style="width:100%;height:auto;">
                    </td>
                    <td style="width:25%; padding:10px;margin:0 auto;border:2px solid black;border-radius: 10%;">
                        <img src="jamanak.png" style="width:100%;height:auto;">
                    </td>
                    <td style="width:25%; padding:10px;margin:0 auto;border:2px solid black;border-radius: 10%;">
                        <img src="paros.png" style="width:100%;height:auto;">
                    </td>
                    <td style="width:25%; padding:10px;margin:0 auto;border:2px solid black;border-radius: 10%;">
                        <img src="" style="width:100%;height:auto;">
                        <p style="font-size:40px;text-align:auto;color:black;"> MARMARA </p>
                    </td>
                </tr>
            </table>
        </section>
        <section id="luystv">
            <p style="font-size:30px;text-align:left;color:black;"> LUYS TV </p>
            <table style="width:60%;height:700px;margin:0 auto;">
                <tr>
                    <td>
<script type="text/javascript">(function(autoplay,muted,ssl,version,cache,key){'use strict';var create=function(){return{muted:muted,stream:key,autoplay:autoplay,version:version,cache_layer:cache,queryString:function(){var def='?ref='+encodeURIComponent(document.location.href);if(this.autoplay){def+='&autoplay=true'}if(this.muted){def+='&muted=1'}return def},isMobile:function(){return(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))},getVersion:function(){return this.isMobile()?this.version.m:this.version.d},host:function(){return this.port()+'://'+this.cache_layer+'/embed/player/'+this.getVersion()+'/'+this.stream},port:function(){return ssl?'https':'http'},show:function(){document.write('<iframe id="player_iframe_broadcast_5e91c5ac96898" src="'+this.host()+this.queryString()+'" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" style="width: 100%;height: 100%;"></iframe>')}}};create().show()})(false,true,false,{"m":1,"d":1},'playercache.mediatriple.net','broadcast_5e91c5ac96898')</script>
                    </td>
                </tr>
            </table>
        </section>
        <section id="cenazeler">
            <p style="font-size:30px;text-align:left;color:black;"> Cenazeler</p>
            <table style="width:90%;height:400px;margin:0 auto;border-spacing:15px;">
                <tr>
                    <td style="width:80%;height:auto;">
                        <?php include 'takvim.html'; ?>
                    </td>
                </tr>
            </table>
            <table style="width:70%;height:auto;margin:0 auto;text-align:center;border-spacing:15px;">
                <tr>
                    <td style="display:flex;padding:10px;margin:0 left;text-align:left;border:1px solid black;border-radius: 5%;width:50%;font-size:20px;">
                        <ul>
                            <li>23 Ekim 2024 14:00 - Kapriel Kapriloğlu<?php echo "\n"; ?>Bakırköy Surp Asdvazazin Ermeni Kilisesi </li>
                            <li>23 Ekim 2024 14:00 - Mario Bellini<?php echo "\n"; ?>Feriköy Latin Katolik Mezarlığı </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </section>
    </section>

    <div style="height:100px;"></div>

    <section id="about">
        <div style="width:80%;margin:0 auto;">
            <p style="font-size:35px;text-align:center;color:black;"> HAKKIMIZDA </p>
            <p style="width:1000px;margin:0 auto;font-size:20px;text-align:left;color:black;"> Türkiye Ermenileri Topluluğu olarak, tarih boyunca dayanışma, yardımlaşma ve kardeşliği ön planda tutarak bir arada yaşamayı sürdüren köklü bir toplumuz. Toplumumuzun kültürel mirasını ve değerlerini korurken, aynı zamanda yardıma muhtaç bireylere destek olmayı, sosyal projeler geliştirerek toplumsal refaha katkı sağlamayı görev edindik.<br></br>

Bu bağış platformu, ihtiyaç sahibi kişilere daha hızlı ve güvenli bir şekilde ulaşmak, topluluğumuzun birlik ve beraberlik duygusunu pekiştirmek amacıyla kurulmuştur. Yapacağınız bağışlar, eğitim, sağlık, kültür-sanat gibi farklı alanlarda yürütülen projelerde kullanılmakta, topluluğumuzun her kesiminden insanın yaşamına dokunmaktadır.<br></br>

Her bireyin katkısının büyük bir fark yaratacağına inanıyoruz. Siz de bu platform aracılığıyla iyiliğin bir parçası olabilir, topluluğumuzun daha güçlü ve dayanıklı olmasına katkı sağlayabilirsiniz.<br></br>

Birlikte el ele, daha güzel yarınlar inşa etmek için buradayız. </p>
        </div>
    </section>

    <div style="height:100px;"></div>

    <section id="contact">
        <p style="font-size:35px;text-align:center;color:black;"> İLETİŞİM </p>
        <div class="form-container">
            <div class="form-left">
                <input type="text" placeholder="Ad Soyad Giriniz...">
                <input type="tel" placeholder="Telefon...">
                <input type="email" placeholder="Email...">
            </div>
            <div class="form-right">
                <textarea placeholder="Mesajınızı yazınız..."></textarea>
            </div>
            <div style="clear: both;"></div>
            <button class="submit-button">Gönder</button>
        </div>

    
    </section>

    <div style="height:100px;"></div>
    <div stylw="margin-bottom:0">
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
