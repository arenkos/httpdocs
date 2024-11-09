<!DOCTYPE html>
<html lang="tr">
<head>
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
		<div style="width:100%;;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
                <ul style="max-width:100%;width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
                    <?php include 'doviz2-mobil.php'; ?>
                </ul>

                <!-- Logo ve Menü -->
                <ul style="max-width:100%;width:100%;background:#232323;height:92px;text-align:left;">
                    <?php include 'header2-mobil.php'; ?>
                </ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;width:100%;">
		
		<table style="text-align:center;margin: 0 auto;width:100%;">
			<tr style="text-align:center;width:100%;">
				<td style="width:100%">
					<div style="padding-top:50px;width:100%;margin: 0 auto;">
						<!-- Türkiye haberleri -->
						<table style="width:100%;margin: 0 auto;">
							<tr style="width:100%;height:100px;">
								<td style="width:270px;">
									<p style="text-align:left;font-family:Poppins;font-size:25px;"><b>Türkiye - Son Dakika</b></p>
								</td>
								<td>
									<img src="c2.png" style="width:100%;height:3px;">
								</td>
							</tr>
						</table>
						<table style="width:100%;margin: 0 auto;">
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=1"><img src="../bossv1.8/son_dakika/haber1_.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 1";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=2"><img src="../bossv1.8/son_dakika/haber2.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 2";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=3"><img src="../bossv1.8/son_dakika/haber3.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=3"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 3";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=4"><img src="../bossv1.8/son_dakika/haber4.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=4"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 4";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=5"><img src="../bossv1.8/son_dakika/haber5.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=5"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 5";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=6"><img src="../bossv1.8/son_dakika/haber6.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=6"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 6";
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
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=7"><img src="../bossv1.8/son_dakika/haber7.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=7"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 7";
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
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=8"><img src="../bossv1.8/son_dakika/haber8.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=8"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 8";
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
						<!-- Dünya haberleri -->
						<table style="width:100%;margin: 0 auto;">
							<tr style="width:100%;height:100px;">
								<td style="width:270px;">
									<p style="text-align:left;font-family:Poppins;font-size:25px;"><b>Dünya - Son Dakika</b></p>
								</td>
								<td>
									<img src="c2.png" style="width:100%;height:3px;">
								</td>
							</tr>
						</table>
						<table style="width:100%;margin: 0 auto;">
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=9"><img src="../bossv1.8/son_dakika/haber9.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=9"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 1";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=10"><img src="../bossv1.8/son_dakika/haber10.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=10"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 2";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=11"><img src="../bossv1.8/son_dakika/haber11.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=11"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 3";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=12"><img src="../bossv1.8/son_dakika/haber12.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=12"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 4";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=13"><img src="../bossv1.8/son_dakika/haber13.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=13"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 5";
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
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=14"><img src="../bossv1.8/son_dakika/haber14.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=14"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 6";
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
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=1"><img src="../bossv1.8/son_dakika/haber7.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 7";
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
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=2"><img src="../bossv1.8/son_dakika/haber8.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM son_dakika WHERE resim= 8";
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
	
	<div style="width:100%;background-color:#232323;">
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>
