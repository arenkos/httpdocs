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
    ?><meta http-equiv="refresh" content="0; URL=son_dakika-mobil.php?mail=<?php echo $_GET['mail']; ?>">
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
	<header style="position:fixed;width:100%;margin-top:-10px;z-index: 9999;">
		<div style="width:100%;;">
			<nav style="width:100%;">
				<!-- Döviz kurları -->
				<ul style="width:100%;height:40px;background:#FFFFFF;text-align:left;">
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
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='white';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:white;" href="ana.php?mail=<?php echo $_GET['mail']; ?>">Ana Sayfa</a></td>
					<td><img src="cizgi.png" style="height:32px;width:2px;padding-top:15px;padding-left:0px;padding-right:0px;"></td>
					<td style="width:120px"><a onmouseover="this.style.color='#FFB600';" onmouseout="this.style.color='#FFB600';" style="width:155px;background:#CD0000;font-size:15px;font-family:Poppins;text-decoration: none;color:#FFB600;" href="son_dakika.php?mail=<?php echo $_GET['mail']; ?>">Son Dakika</a></td>
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
		
		<table style="margin:0 auto;margin-top:200px;text-align:left;width:1540px;">
			<tr style="height:100px;">
				<td>
					<p style="font-family:Poppins;font-size:25px;"><b>Türkiye - Son Dakika</b></p>
				</td>
				<td>
					<img src="c2.png" style="width:1250px;height:3px;">
				</td>
			</tr>
		</table>
		<div style="width:100%;background-color:#ededed;">
		<div style="margin:0 auto;width:1656px;background-color:#ededed;background-image:url('b.jpg');background-size:1656px 946px;">
			<table style="margin:0 auto;padding:30px;padding-left:0px;padding-right:0px;width:1540px;">
				<tr style="padding-left:20px;padding-right:20px;">
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1"><img src="../mboss/son_dakika/haber1.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2"><img src="../mboss/son_dakika/haber2.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3"><img src="../mboss/son_dakika/haber3.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4"><img src="../mboss/son_dakika/haber4.png" style="width:375px;height:350px;"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=1.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 1";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 2";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=2.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 3";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=3.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 4";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=4.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
				</tr>
				<tr style="height:20px;">
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5"><img src="../mboss/son_dakika/haber5.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=6"><img src="../mboss/son_dakika/haber6.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7"><img src="../mboss/son_dakika/haber7.png" style="width:375px;height:350px;"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8"><img src="../mboss/son_dakika/haber8.png" style="width:375px;height:350px;"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 5";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=5.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=6.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 6";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=6.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 7";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=7.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:10px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:375px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 8";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=8.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
				</tr>
			</table>
		</div>
		</div>
		
		<table style="margin:0 auto;margin-top:150px;text-align:left;width:1540px;;">
			<tr style="height:100px;">
				<td>
					<p style="font-family:Poppins;font-size:25px;"><b>Dünya - Son Dakika</b></p>
				</td>
				<td>
					<img src="c2.png" style="width:1250px;height:3px;">
				</td>
			</tr>
		</table>
		<div>
			<table style="width:1540px;text-align:center;margin:0 auto;padding:10px;padding-left:0px;">
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9"><img src="../mboss/son_dakika/haber9.png" style="width:450px;height:350px;"></a>
					</td>
						<td style="width:70px;">
						</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=10"><img src="../mboss/son_dakika/haber10.png" style="width:450px;height:350px;"></a>
					</td>
						<td style="width:70px;">
						</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=11"><img src="../mboss/son_dakika/haber11.png" style="width:450px;height:350px;"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;text-decoration:none;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 9";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=9.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:70px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=10.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;text-decoration:none;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 10";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=10.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:70px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=11.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;text-decoration:none;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 11";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=11.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
				</tr>
				<tr style="height:20px;">
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=12"><img src="../mboss/son_dakika/haber12.png" style="width:450px;height:350px;"></a>
					</td>
						<td style="width:70x;">
						</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=13"><img src="../mboss/son_dakika/haber13.png" style="width:450px;height:350px;"></a>
					</td>
						<td style="width:70px;">
						</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=14"><img src="../mboss/son_dakika/haber14.png" style="width:450px;height:350px;"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=12.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;"><?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 12";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=12.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:70px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=13.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;">
<?php
$sql = "SELECT baslik FROM son_dakika WHERE resim= 13";
mysqli_set_charset($connection, "utf8");
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
    }
}
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=13.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
					<td style="width:70px;">
					</td>
					<td>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=14.php?mail=<?php echo $_GET['mail']; ?>"><p style="width:450px;height:50px;font-family:Poppins;color:#000;">
<?php
    $sql = "SELECT baslik FROM son_dakika WHERE resim= 14";
    mysqli_set_charset($connection, "utf8");
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo nl2br($row['baslik']); // Satır başlarını görüntülemek için nl2br() işlevini kullanırız.
        }
    }
?></p></a>
						<a target="_blank" style="text-decoration:none;" href="son_dakika/haber.php?mail=<?php echo $_GET['mail']; ?>&haber=14.php?mail=<?php echo $_GET['mail']; ?>"></a>
					</td>
				</tr>
			</table>
		</div>
	</main>
	
	<!-- Sayfa başına git -->
	<div style="width:100%;text-align:right;background-color:#fff">
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
