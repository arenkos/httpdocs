<?php
session_start();
?>
<!doctype html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-38Y4FWVQ60"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-38Y4FWVQ60');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VBX8LMD');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chopar Kozmetik</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
<link rel="icon" href="path/to/your/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="margin:0 auto;background-color:black;">
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VBX8LMD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
//Mobil
if (strpos($userAgent, 'Mobile') == true) { ?>
    <div id="menu" style="width:100%;height:auto;margin:0 auto;">
        <div style="width:80%;height:auto;margin:0 auto;">
            <table style="width:100%;height:auto;margin:0 auto;">
                <tr style="width:100%;height:auto;margin:0 auto;">
                    <td style="width:auto;height:auto;margin:0 auto;">
                    
                        <!-- Veritabanı -->
                        <?php
                            $servername = "localhost:3306";
                            $username = "xumchopa_chopar";
                            $password = "Chopar2023";
                            $database = "xumchopa_chopar";

                            $connection = mysqli_connect($servername, $username, $password, $database);

                            // Bağlantıyı kontrol et
                            if (!$connection) {
                                die("Bağlantı hatası: " . mysqli_connect_error());
                            }

                            include 'header-mobil.php';
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; width:100%;height: 40vh; max-width:100%;">
    </div>
    
    <!-- Ürünler -->
    <div style="width:100%;height: auto;margin:0 auto;text-align:center;margin-top:30px;">
<?php
        $sql = "SELECT * FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        if($result->num_rows > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                
            }
        }
        //$sql = "SELECT IFNULL(MAX(siparis_no), 0) + 1 AS yeni_siparis_no FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr') AND siparis_no=0";
        
        $sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        $result2 = mysqli_query($connection, $sql);
        if($result2->num_rows > 0){
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $ad = $row2['ad'];
                $soyad = $row2['soyad'];
                $adres = $row2['adres'];
                $telefon = $row2['numara'];
                $mail = $row2['mail'];
            }
        }

        $sql = "UPDATE siparis SET siparis_no = -1 WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND siparis_no=0";
        mysqli_query($connection, $sql);

        
?>
        <meta http-equiv="refresh" content="0; URL=http://www.chopar.com.tr/choparv1.0/sepet.php">
    </div>
        <?php
    }else{ 
    // Masaüstü    ?>
	<div id="menu" style="width:100%;height:auto;margin:0 auto;">
		<div style="width:80%;height:auto;margin:0 auto;">
			<table style="width:100%;height:auto;margin:0 auto;">
				<tr style="width:100%;height:auto;margin:0 auto;">
					<td style="width:auto;height:auto;margin:0 auto;">
					
						<!-- Veritabanı -->
						<?php
							$servername = "localhost:3306";
							$username = "xumchopa_chopar";
							$password = "Chopar2023";
							$database = "xumchopa_chopar";

							$connection = mysqli_connect($servername, $username, $password, $database);

							// Bağlantıyı kontrol et
							if (!$connection) {
								die("Bağlantı hatası: " . mysqli_connect_error());
							}

							include 'header.php';
						?>
					</td>
					<td style="width:auto;height:auto;margin:0 auto;">
						<?php
						$anlik = date("Y-m-d");
						$usr = $_SESSION['user'];
						$sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1 AND cikis < '$anlik'";
						mysqli_set_charset($connection, "utf8");
						$result = mysqli_query($connection, $sql);
						
						if ($result->num_rows > 0) {
							$sql = "UPDATE kullanici SET oturum=0 WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
							mysqli_set_charset($connection, "utf8");
							mysqli_query($connection, $sql);
						}
						$sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
						mysqli_set_charset($connection, "utf8");
						$result = mysqli_query($connection, $sql);

						if ($result->num_rows > 0) {
							?><div style="width:100%;margin:0 auto;text-align:center;color:white;"><a><?php
								$sql = "SELECT ad, soyad FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
								mysqli_set_charset($connection, "utf8");
								$ad_soyad = mysqli_query($connection, $sql);
								if ($ad_soyad->num_rows > 0) {
									while ($row = mysqli_fetch_assoc($ad_soyad)) {
										echo "Merhaba " . $row["ad"] . " " . $row["soyad"] . "<br>";
									}
								}?></a>
							</div>
							<div style="width:100%;margin:0 auto;text-align:center;color:white;">
								<form method="post" action="cikis.php">
									<button type="submit" name="logout">Çıkış Yap</button>
								</form>
							</div>
							<?php
							// Veritabanı bağlantısı ve diğer gerekli ayarlar

								if (isset($_POST['logout'])) {
									// Çıkış yap butonuna basıldığında çalışacak kodlar
									$sql = "UPDATE kullanici SET oturum=0 WHERE (mail LIKE '$usr' OR numara LIKE '$usr') AND oturum LIKE 1";
									mysqli_query($connection, $sql);
									
								}
						}else { ?>
							<div>
								<table style="margin:0 auto;">
									<form method="POST" action="kontrol.php">
										<tr>
											<td>
												<input type="text" name="user" placeholder="Mail/Telefon Numarası" style="text-align: center;">
											</td>
											<td>
												<input type="submit" value="Giriş" style="width:100%;">
											</td>
										</tr>
										<tr>
											<td>
												<input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
											</td>
										</form>
										<td>
											<a href="kayit.php"><input type="submit" value="Kayıt ol"></a>
										</td>
									</tr>
								</table>
							</div>
						<?php } ?>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex; align-items: center; justify-content: flex-start; height: 100vh; max-width:100%;">
	</div>
    
    <div style="width:100%;margin:0 auto;text-align:center;color:white;">
        <form method="POST" action="sorgu.php">
            <input type="text" name="siparis_no" placeholder="Sipariş No(SIPXX)" style="text-align: center;">
            <input type="submit" value="Sorgula">
        </form>
    </div>
    <!-- Ürünler -->
    <div style="width:100%;height: auto;margin:0 auto;text-align:center;margin-top:30px;color:white;">
<?php
        $sql = "SELECT * FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
        if($result->num_rows > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                
            }
        }
        //$sql = "SELECT IFNULL(MAX(siparis_no), 0) + 1 AS yeni_siparis_no FROM siparis WHERE (mail LIKE '$usr' OR telefon LIKE '$usr') AND siparis_no=0";
        
        $sql = "SELECT * FROM kullanici WHERE (mail LIKE '$usr' OR numara LIKE '$usr')";
        mysqli_set_charset($connection, "utf8");
        $result2 = mysqli_query($connection, $sql);
        if($result2->num_rows > 0){
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $ad = $row2['ad'];
                $soyad = $row2['soyad'];
                $adres = $row2['adres'];
                $telefon = $row2['numara'];
                $mail = $row2['mail'];
            }
        }

        $sql = "UPDATE siparis SET siparis_no = -1 WHERE (mail LIKE '$usr' OR telefon LIKE '$usr' OR kayitsiz LIKE '$usr') AND siparis_no=0";
        mysqli_query($connection, $sql);

?>
        <meta http-equiv="refresh" content="0; URL=http://www.chopar.com.tr/choparv1.0/sepet.php">
        
    </div>
    <?php } ?>
</body>
	
<?php include 'footer.php' ?>

</html>
