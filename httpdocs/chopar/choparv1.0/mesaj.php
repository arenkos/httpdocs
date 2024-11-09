<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>
<!doctype html>
<html>
<head>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chopar Kozmetik</title>
<link rel="shortcut icon" href="chopar.png" type="image/x-icon">
<link rel="icon" href="path/to/your/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="margin:0 auto;color:black;">
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

    
    <div style="width:100%;height: auto;margin:0 auto;text-align:center;margin-top:30px;">
        <?php
            $ad = $_POST['ad'];
            $soyad = $_POST['soyad'];
            $aciklama = $_POST['mesaj'];
            $telefon = $_POST['telefon'];
            $email = $_POST['email'];

            $gonderen = "siparis@medyaboss.net";
            $alici = "iletisim@chopar.com.tr";
            $konu = "$ad $soyad";

            $mesaj = "$ad $soyad<br><br>";
            $mesaj .= "$aciklama<br><br>";
            $mesaj .= "$telefon<br>";

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->CharSet = 'UTF-8';
                $mail->Host = 'smtp.medyaboss.net';  // SMTP sunucu adresi
                $mail->SMTPAuth = true;
                $mail->Username = 'siparis@medyaboss.net';  // E-posta adresiniz
                $mail->Password = 'Aras2022';  // E-posta şifreniz
                $mail->Port = 587;

                $mail->setFrom($gonderen);
                $mail->addAddress($alici);
                $mail->isHTML(true);
                $mail->Subject = $konu;
                $mail->Body = $mesaj;

                $mail->send();
            } catch (Exception $e) {
            }

            echo "Teklif başarıyla oluşturuldu.";
        ?>
    </div>
</body>
    
<?php include 'footer.php' ?>

</html>
