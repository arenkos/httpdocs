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
    ?><meta http-equiv="refresh" content="0; URL=ana.php?mail=<?php echo $_GET['mail']; ?>">
    <?php
}else{
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
				<ul style="max-width:100%;width:100%;background:#CD0000;height:auto;margin:0 auto;">
					<?php include 'header2-mobil.php'; ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- Haberler -->
	<main style="text-align:center;padding-top:122px;background-color:#fff;width:100%;max-witdh:100%;padding-left:10px;padding-right:10px;">
		
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
										  
										document.getElementById("slayt").src = "../mboss/haber" + imageIndex + ".png";
										document.getElementById("hbr").href = "" + imageIndex + ".php?mail=<?php echo $_GET['mail']; ?>";
										document.getElementById("hbr").target = "_blank";
										document.getElementById("secim"+imageIndex).src = "dolu.png";

										}
										function go(index){
										  window.location = "" + index + ".php?mail=<?php echo $_GET['mail']; ?>";
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
											imageElement.src = "../mboss/haber" + imageIndex + ".png";
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
										echo '<a id="hbr" href="' . $selected_image . '.php?mail=<?php echo $_GET['mail']; ?>"><img id="slayt" src="../mboss/haber' . $selected_image . '.png" width="100%" height="310px"></a>';
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/son_dakika/haber9.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><p style="width:100%;height:100px;">
                                                
Putin'den sert açıklama: Karşılaştığımız şey ihanettir hesap verecekler</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/son_dakika/haber3.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><p style="width:100%;height:100px;">Son Dakika: Vergisiz cep telefonu şartları neler?</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
								<td style="width:50%;">
									<table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/gundem/haber2.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:100%;height:100px;">
Dilan Polat ve Engin Polat çifti SMA hastası Güneş bebeğe 50.000 TL bağış yaptı</p></a>
                                            </td>
                                        </tr>
										<tr style="width:100%">
											<td style="width:100%">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><img src="../mboss/teknoloji/haber1.png" style="width:100%;height:165px;"></a>
											</td>
										</tr>
										<tr style="width:100%">
											<td style="width:100%;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><p style="width:100%;height:100px;">
Elon Musk yeni uygulamayı duyurdu: Twitter'a sınırlama geldi</p></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><img src="../mboss/ekonomi/haber1.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><p style="width:100%;height:100px;"> Merkez Bankası'ndan flaş karar! Gece yarısı duyuruldu</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="spor/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/spor/haber3.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="sport/3"><p style="width:100%;height:100px;">Semih Saygıner, PBA Bilardo Ligindeki şampiyonluğa ulaştı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><img src="../mboss/gundem/haber4.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><p style="width:100%;height:100px;">Ekrem İmamoğlu büyük küçük arazi demiyor, hepsini satıyor'</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/teknoloji/haber2.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:100%;height:100px;">Vodafone 11 bin kişiyi işten çıkarmayı planlıyor</p></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="../mboss/saglik/haber8.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><p style="width:100%;height:100px;">Dünyada ilk kez hastalar beyin çipi ile tedavi edilmeye başlandı</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><img src="../mboss/son_dakika/haber5.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><p style="width:100%;height:100px;">
Türkiye, sığınmacıların güvenli geri dönüşünü desteklemekte</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="magazin/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="https://www.medyabosshaber.com/mboss/magazin/haber8.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="magazin/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><p style="width:100%;height:100px;">
Eda Ece ve Buğrahan Tuncer evlendi</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><img src="../mboss/ekonomi/haber7.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><p style="width:100%;height:100px;">Cumhurbaşkanı Recep Tayyip Erdoğan: Sadece Haziran ayı içerisinde ihtiyaç sahibi vatandaşlarımıza toplam 19 milyar lira ödeme gerçekleştirilecek</p></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/gundem/haber3.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><p style="width:100%;height:100px;">
Buğday Tanesi NETFLIX'te</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=%"><img src="../mboss/saglik/haber5.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=%"><p style="width:100%;height:100px;">
                                                Hasta olarak girdi, tıp öğrencisi olarak çıktı</p></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/gundem/haber9.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><p style="width:100%;height:100px;">
                                                
Kılıçdaroğlu: Kaptan olarak gemiyi limana sağlam götüreceğimi herkes bilsin!</p></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/dunya/haber2.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%;height:100px;">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber-mobil.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:100%;height:100px;">
                                                Ölü  balinanın içinden servet çıktı</p></a>
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
	
	<div style="width:100%;background-color:#CD0000;">
		<?php include 'footer-mobil.php'; ?>
	</div>
</body>
</html>
<?php } ?>