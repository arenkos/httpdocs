<!DOCTYPE html>
<html lang="tr">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QZ5ZT1CR3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2QZ5ZT1CR3');
</script>
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
<meta http-equiv="refresh" content="0; URL=../bossv1.4/ana-mobil.php">
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == false) {
    ?><meta http-equiv="refresh" content="0; URL=ana.php">
    <?php
}
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'clear.php', true);
			xhr.send();
		});
	</script>
</head>
<body>


	<header style="position:fixed;width:100%;max-width:100%;margin-top:-10px;">
		<div style="width:100%;max-width:100%;margin: 0 auto;">
			<nav style="width:100%;max-width:100%;">
				<!-- Döviz kurları -->
				<ul style="max-width:100%;width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
					<?php include 'doviz2-mobil.php'; ?>
				</ul>
				
				<!-- Logo ve Menü -->
				<ul style="max-width:100%;width:100%;background:#232323;height:auto;margin:0 auto;">
					<?php include 'header2-mobil.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;width:100%;max-witdh:100%;">
		
		<table style="witdh:100%;padding-top:0px;margin: 0 auto;background-color:#fff;">
			<tr style="witdh:100%;">
				<td style="witdh:100%;">
					<div style="padding-top:50px;width:100%;">
						
						<!-- Slayt ve yanındaki haberler -->
						<table style="width:100%;">
							<tr style="width:100%">
								<!-- Slayt haberleri-->
								<td style="width:100%;">
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
										  
										document.getElementById("slayt").src = "../bossv1.5/haber" + imageIndex + ".webp";
										document.getElementById("hbr").href = "" + imageIndex + ".php";
										document.getElementById("hbr").target = "_blank";
										document.getElementById("secim"+imageIndex).src = "dolu.png";

										}
										function go(index){
										  window.location = "" + index + ".php";
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
											imageElement.src = "../bossv1.5/haber" + imageIndex + ".webp";
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
										echo '<a id="hbr" href="' . $selected_image . '.php"><img id="slayt" src="../bossv1.5/haber' . $selected_image . '.webp" width="100%" height="310px"></a>';
									  ?>
									</div>
									<div class="radio-group" style="margin:0 auto;width:100%;">
										<table style="margin:0 auto;width:100%;">
                                            <tr>
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
                                            </tr>
                                        </table>
									</div>
								</td>
                            </tr>
                        </table>
                        
						<!-- Slayt altındaki haberler -->
                        <table style="text-align:center;width:100%">
                            <tr style="width:100%">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?haber=5"><img src="../bossv1.8/son_dakika/haber5.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?haber=5"><p style="width:100%;height:100px;">
                                                Tespit komisyonu asgari ücret zammı için toplanıyor!</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=3"><img src="../bossv1.5/ekonomi/haber3.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=3"><p style="width:100%;height:100px;">Küresel gıda fiyatları bir yıl sonra ilk kez yükseldi</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
								<td style="width:50%;">
									<table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=2"><img src="../bossv1.5/gundem/haber2.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=4"><p style="width:100%;height:100px;">Elazığ'da çocuk parkında düzenlenen silahlı saldırıda 3 kişi yaralandı</p></a>
                                            </td>
                                        </tr>
										<tr style="width:100%">
											<td style="width:100%">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?haber=1"><img src="../bossv1.5/teknoloji/haber1.webp" style="width:100%;height:165px;"></a>
											</td>
										</tr>
										<tr style="width:100%">
											<td style="width:100%;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?haber=1"><p style="width:100%;height:100px;">
                                                İran Dışişleri Bakanlığı'nın internet sitesi hacklendi</p></a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
                        <table style="text-align:center;width:100%">
                            <tr style="width:100%">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=4"><img src="../bossv1.5/gundem/haber4.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=4"><p style="width:100%;height:100px;">Son dakika haberi MİT'ten nokta operasyon!</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?haber=3"><img src="../bossv1.5/spor/haber3.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="sport/3"><p style="width:100%;height:100px;">Konyaaltı Belediyespor Kadın Hentbol Takımı Avrupa Kupası'nı kazandı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=1"><img src="../bossv1.5/saglik/haber1.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=1"><p style="width:100%;height:100px;">Türk Kızılay'ın azalan kan stokları yeniden normal seviyede</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?haber=2"><img src="../bossv1.5/spor/haber2.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?haber=2"><p style="width:100%;height:100px;">Samsunspor şampiyonluk kupasını aldı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table style="text-align:center;width:100%">
                            <tr style="width:100%">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=8"><img src="../bossv1.5/saglik/haber8.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=8"><p style="width:100%;height:100px;">Dünyada ilk kez hastalar beyin çipi ile tedavi edilmeye başlandı</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=9"><img src="../bossv1.8/gundem/haber9.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?haber=9"><p style="width:100%;height:100px;">
                                                Suriye'de helikopter kazası: 22 ABD askeri yaralandı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber.php?haber=10"><img src="https://www.medyabosshaber.com/bossv1.6/son_dakika/haber10.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?haber=10"><p style="width:100%;height:100px;">
Şampiyonlar Ligi konserleri ne zaman, hangi sanatçılar geliyor ve bilet fiyatları ne kadar?</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=7"><img src="../bossv1.5/ekonomi/haber7.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=7"><p style="width:100%;height:100px;">EYT'lilerin bayram ikramiyesi ne zaman ödenecek?</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table style="text-align:center;width:100%">
                            <tr style="width:100%">
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?haber=1"><img src="../bossv1.8/dunya/haber1.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?haber=1"><p style="width:100%;height:100px;">
                                                Birliklerini Bahmut'tan çekeceğini açıklamıştı…</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=%"><img src="../bossv1.8/saglik/haber5.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?haber=%"><p style="width:100%;height:100px;">
                                                Hasta olarak girdi, tıp öğrencisi olarak çıktı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=6"><img src="../bossv1.5/ekonomi/haber6.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?haber=6"><p style="width:100%;height:100px;">
                                                Cumhurbaşkanı Erdoğan’dan asgari ücret mesajı</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?haber=3"><img src="../bossv1.5/dunya/haber3.webp" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?haber=3"><p style="width:100%;height:100px;">
                                                Almanya depremzede vizelerini uzatacak</p></a>
                                            </td>
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
