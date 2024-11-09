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
    ?><meta http-equiv="refresh" content="0; URL=ana-mobil.php?mail=<?php echo $_GET['mail']; ?>">
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
	<header style="position:fixed;width:100%;margin-top:-10px;z-index: 9999;">
		<div style="width:100%;margin: 0 auto;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
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
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="ana.php?mail=<?php echo $_GET['mail']; ?>">Ana Sayfa</a></td>
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
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ekonomi.php?mail=<?php echo $_GET['mail']; ?>">Ekonomi</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="teknoloji.php?mail=<?php echo $_GET['mail']; ?>">Teknoloji</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="saglik.php?mail=<?php echo $_GET['mail']; ?>">Sağlık</a></td>
                    <td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:90px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="yazarlarimiz.php?mail=<?php echo $_GET['mail']; ?>">Yazarlarımız</a></td>
				</tr>
			</table>
		</div>
		<table style="padding-top:0px;margin: 0 auto;width:1540px;">
			<tr>
				<td>
					<div style="padding-top:50px;text-align:center;">
						<!-- Slayt üstündeki haberler -->
						<table>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/gundem/haber2.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/son_dakika/haber9.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/gundem/haber3.png" style="width:500px;height:300px;"></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:500px;height:100px;">
Dilan Polat ve Engin Polat çifti SMA hastası Güneş bebeğe 50.000 TL bağış yaptı<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><p style="width:500px;height:100px;">Putin'den sert açıklama: Karşılaştığımız şey ihanettir hesap verecekler<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><p style="width:500px;height:100px;">
Buğday Tanesi NETFLIX'te<p></a>
								</td>
							</tr>
						</table>
						<!-- Slayt ve yanındaki haberler -->
						<table>
							<tr>
								<td>
									<table>
										<tr>
											<td>
												<a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><img src="../mboss/spor/haber1.png" style="width:350px;height:165px;"></a>
											</td>
											<td>
												<div style="width:15px;"></div>
											</td>
										</tr>
										<tr>
											<td style="width:350px;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><p style="width:350px;height:100px;">Fenerbahçe'de İsmail Kartal dönemi! İşte imza atacağı tarih<p></a>
											</td>
										</tr>
										<tr>
											<td>
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><img src="../mboss/teknoloji/haber1.png" style="width:350px;height:165px;"></a>
											</td>
											<td>
												<div style="width:15px;"></div>
											</td>
										</tr>
										<tr>
											<td style="width:350px;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><p style="width:350px;height:100px;">Elon Musk yeni uygulamayı duyurdu: Twitter'a sınırlama geldi<p></a>
											</td>
										</tr>
									</table>
								</td>
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
										echo '<a id="hbr" href="' . $selected_image . '.php?mail=<?php echo $_GET['mail']; ?>"><img id="slayt" src="../mboss/haber' . $selected_image . '.png" width="795px" height="510px"></a>';
									  ?>
									</div>
									<div class="radio-group" style="text-align:center;">
										<table style="padding-left:230px;"><tr>
											<td>
												<img src="geri.png" style="width:20px;height:10px;"  onclick="goToPrevImage()">
											</td>
											<?php
											for ($i=1; $i<=$image_count; $i++) {
												echo '<td style="width:30px;.php?mail=<?php echo $_GET['mail']; ?>"><img id="secim' . $i . '" src="bos.png" name="image_selection" onclick="go(' . $i . ')" onmouseover="changeImage(' . $i . '); showImage(' . $i . ');"/></td>';
											}
											?>
											<td>
												<img src="ileri.png" style="width:20px;height:10px;" onclick="goToNextImage()">
											</td>
										</tr></table>
									</div>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								
								<!-- Slayt yanı haberler -->
								<td>
									<table>
										<tr>
											<td>
												<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><img src="../mboss/gundem/haber4.png" style="width:350px;height:165px;"></a>
											</td>
										</tr>
										<tr>
											<td style="width:350px;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><p style="width:350px;height:100px;">Ekrem İmamoğlu büyük küçük arazi demiyor, hepsini satıyor<p></a>
											</td>
										</tr>
										<tr>
											<td>
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/teknoloji/haber2.png" style="width:350px;height:165px;"></a>
											</td>
										</tr>
										<tr>
											<td style="width:350px;height:100px;">
												<a style="text-decoration:none;color:#000" target="_blank" href="teknoloji/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:350px;height:100px;">Vodafone 11 bin kişiyi işten çıkarmayı planlıyor<p></a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
						<!-- Slayt altındaki haberler -->
						<table style="text-align:center;">
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/son_dakika/haber3.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="../mboss/saglik/haber8.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="magazin/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="https://www.medyabosshaber.com/mboss/magazin/haber8.png" style="width:500px;height:300px;"></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><p style="width:500px;height:100px;">Son Dakika: Vergisiz cep telefonu şartları neler?<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><p style="width:500px;height:100px;">Dünyada ilk kez hastalar beyin çipi ile tedavi edilmeye başlandı<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="magazin/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><p style="width:500px;height:100px;">
Eda Ece ile Buğrahan Tuncer Evlendi<p></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><img src="../mboss/son_dakika/haber5.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><img src="../mboss/ekonomi/haber7.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/spor/haber3.png" style="width:500px;height:300px;"></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><p style="width:500px;height:100px;">Türkiye, sığınmacıların güvenli geri dönüşünü desteklemekte<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="ekonomi/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><p style="width:500px;height:100px;">Cumhurbaşkanı Recep Tayyip Erdoğan: Sadece Haziran ayı içerisinde ihtiyaç sahibi vatandaşlarımıza toplam 19 milyar lira ödeme gerçekleştirilecek<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="spor/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><p style="width:500px;height:100px;">Semih Saygıner, PBA Bilardo Ligindeki şampiyonluğa ulaştı<p></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/gundem/haber9.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><img src="../mboss/saglik/haber5.png" style="width:500px;height:300px;"></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/dunya/haber2.png" style="width:500px;height:300px;"></a>
								</td>
							</tr>
							<tr>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="gundem/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><p style="width:500px;height:100px;">
Kılıçdaroğlu: Kaptan olarak gemiyi limana sağlam götüreceğimi herkes bilsin!<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="saglik/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><p style="width:500px;height:100px;">Hasta olarak girdi, tıp öğrencisi olarak çıktı<p></a>
								</td>
								<td>
									<div style="width:15px;"></div>
								</td>
								<td>
									<a style="text-decoration:none;color:#000" target="_blank" href="dunya/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><p style="width:500px;height:100px;">Ölü  balinanın içinden servet çıktı<p></a>
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
<?php } ?>