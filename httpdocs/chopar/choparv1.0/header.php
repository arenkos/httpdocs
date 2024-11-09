<?php
session_start();
$usr = $_SESSION['user'];

$servername = "localhost:3306";
$username = "xumchopa_chopar";
$password = "Chopar2023";
$database = "xumchopa_chopar";

$connection = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$connection) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
if($usr != ""){
    $sql = "DELETE FROM siparis WHERE adet=0";
    mysqli_set_charset($connection, "utf8");
    mysqli_query($connection, $sql);
    $sql = "SELECT * FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND siparis_no=0 AND adet!=0";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
}
$t_fiyat = floatval(0);
if($result->num_rows > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $toplam_fiyat = $row['toplam_fiyat'];
        $t_fiyat += floatval($toplam_fiyat);
    }
}
$t_fiyat = sprintf("%.2f", $t_fiyat);
?>
<div style="width:100%;height:190px;margin:0 auto;text-align: center;">
    <table style="width:100%;height:190px;background-color:transparent;margin:0 auto;">
        <tr style="width:100%;height:190px;background-color:transparent;margin:0 auto;">
            <td style="width:auto;height:190px;background-color:transparent;margin:0 auto;text-align: left">
                <div style="width:auto;height:170px;margin:0 auto;text-align: left;transparent;">
                    <a href="main.php"><img src="chopar-logo.png" style="width:150px;height:150px;margin:0 left;text-align: center;margin-top:20px;"></a>
                </div>
            </td>
            <td style="width:100%;height:70px;background-color:transparent;margin:0 right;">
                <table style="width:auto;height:70px;background-color:transparent;margin:0 auto;">
                    <tr style="width:100%;height:50px;background-color:transparent;margin:0 auto;">
                        <td style="width: auto;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c1'); div.style.display = 'none';"><a href="main.php" style="text-decoration: none;color:#FFD700;">Ana Sayfa</a></td>
                        <td style="width: auto;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c2'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c2'); div.style.display = 'none';"><a href="hakkimizda.php" style="text-decoration: none;color:#FFD700;">Hakkımızda</a></td>
                        <td style="width: auto;margin: 0 auto;padding-right: 10px" onMouseOver="var div = document.getElementById('c3'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c3'); div.style.display = 'none';"><a href="iletisim.php" style="text-decoration: none;color:#FFD700;">İletişim</a></td> TL)</p></a></td>
                    </tr>
                    <tr style="width:auto;height:20px;background-color:transparent;margin:0 auto;">
                        <td style="width: auto;margin: 0 auto;padding-right: 10px;vertical-align: top;"><div id="c1" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: #FFD700;"></div></td>
                        <td style="width: auto;margin: 0 auto;padding-right: 10px;vertical-align: top;"><div id="c2" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: #FFD700;"></div></td>
                        <td style="width: auto;margin: 0 auto;padding-right: 10px;vertical-align: top;"><div id="c3" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: #FFD700;"></div></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
