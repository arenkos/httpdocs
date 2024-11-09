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
<table style="text-align:justify;padding-left:150px;">
    <tr>
        <!-- Haber görseli -->
        <td>
            <div style="height:100px;">
                <a href="haber.php?haber=1" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com//bossv1.8/ekonomi/haber1.webp" style="width:150px;height:100px;"></a>
            </div>
        </td>
        <td>
            <div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
                <a href="haber.php?haber=1" style="text-decoration:none;color:#000">
<?php
$resim = $_GET['haber'];
$sql = "SELECT baslik FROM ekonomi WHERE resim= 1";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></a>
            </div>
        </td>
    </tr>
    <tr style="height:20px;">
    </tr>
    <tr>
        <!-- Haber görseli -->
        <td>
            <div style="height:100px;">
                <a href="haber.php?haber=2" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com//bossv1.8/ekonomi/haber2.webp" style="width:150px;height:100px;"></a>
            </div>
        </td>
        <td>
            <div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
                <a href="haber.php?haber=2" style="text-decoration:none;color:#000">
<?php
$resim = $_GET['haber'];
$sql = "SELECT baslik FROM ekonomi WHERE resim= 2";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></a>
            </div>
        </td>
    </tr>
    <tr style="height:20px;">
    </tr>
    <tr>
        <!-- Haber görseli -->
        <td>
            <div style="height:100px;">
                <a href="haber.php?haber=3" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com//bossv1.8/ekonomi/haber3.webp" style="width:150px;height:100px;"></a>
            </div>
        </td>
        <td>
            <div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
                <a href="haber.php?haber=3" style="text-decoration:none;color:#000">
<?php
$resim = $_GET['haber'];
$sql = "SELECT baslik FROM ekonomi WHERE resim= 3";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></a>
            </div>
        </td>
    </tr>
    <tr style="height:20px;">
    </tr>
    <tr>
        <!-- Haber görseli -->
        <td>
            <div style="height:100px;">
                <a href="haber.php?haber=4" style="text-decoration:none;color:#000"><img src="https://www.medyabosshaber.com//bossv1.8/ekonomi/haber4.webp" style="width:150px;height:100px;"></a>
            </div>
        </td>
        <td>
            <div style="background-color:#ededed;text-align:justify;width:220px;height:100px;font-size:15px;font-family:Poppins;padding-left:10px;padding-right:10px;">
                <a href="haber.php?haber=4" style="text-decoration:none;color:#000">
<?php
$resim = $_GET['haber'];
$sql = "SELECT baslik FROM ekonomi WHERE resim= 4";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></a>
            </div>
        </td>
    </tr>
</table>
