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
    ?><meta http-equiv="refresh" content="0; URL=spor.php">
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
						<!-- Slayt ve yanındaki haberler -->
						<table style="width:100%;margin: 0 auto;">
							<tr style="width:100%">
								<!-- Slayt haberleri-->
								<td style="width:100%">
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
										  
										document.getElementById("slayt").src = "../bossv1.4/spor/haber" + imageIndex + ".webp";
										document.getElementById("hbr").href = "spor/haber.php?haber=" + imageIndex;
										document.getElementById("hbr").target = "_blank";
										document.getElementById("secim"+imageIndex).src = "dolu.png";

										}
										function go(index){
										  window.location = "spor/haber.php?haber=" + index;
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
											imageElement.src = "../bossv1.4/spor/haber" + imageIndex + ".webp";
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
										echo '<a id="hbr" href="spor/haber.php?haber=' . $selected_image . '"><img id="slayt" src="../bossv1.4/spor/haber' . $selected_image . '.webp" width="100%" height="310px"></a>';
									  ?>
									</div>
									<div class="radio-group" style="text-align:center;">
										<table style="margin:0 auto;"><tr>
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
                            </tr>
                        </table>
                        
						<!-- Slayt altındaki haberler -->
						<table style="width:100%;margin: 0 auto;">
                            <tr style="width:100%;">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><img src="../bossv1.4/spor/haber1.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 1";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><img src="../bossv1.4/spor/haber2.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 2";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=3"><img src="../bossv1.4/spor/haber3.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=3"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 3";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=4"><img src="../bossv1.4/spor/haber4.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=4"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 4";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=5"><img src="../bossv1.4/spor/haber5.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=5"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 5";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><img src="../bossv1.4/spor/haber6.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 6";
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
                                            <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><img src="../bossv1.4/spor/haber7.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 7";
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
                                            <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><img src="../bossv1.4/spor/haber8.webp" style="width:100%;height:205px;"></a>
                                        </td>
                                    </tr>
                                    <tr style="width:100%">
                                        <td style="width:100%">
                                            <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 8";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><img src="../bossv1.4/spor/haber9.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=1"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 9";
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
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><img src="../bossv1.4/spor/haber10.webp" style="width:100%;height:205px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a target="_blank" style="text-decoration:none;" href="spor/haber.php?haber=2"><div style="text-align:justify;text-decoration:none;width:100%;height:100px;color:black;font-size:15px;">
                                                    <?php
														$sql = "SELECT baslik FROM spor WHERE resim= 10";
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
