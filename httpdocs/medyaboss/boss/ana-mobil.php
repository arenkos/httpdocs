<?php 
session_start(); 
?>
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
    ?><meta http-equiv="refresh" content="0; URL=ana.php">
    <?php
}else{
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medya Boss - Dünyadan Haberiniz Olsun</title>
    <link rel="shortcut icon" href="chopar.png" type="image/x-icon">
    <link rel="icon" href="../mboss/logo.png" type="image/x-icon">
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
    <?php
        $total_dunya = 0;
        $total_ekonomi = 0;
        $total_gundem = 0;
        $total_magazin = 0;
        $total_saglik = 0;
        $total_sondakika = 0;
        $total_spor = 0;
        $total_teknoloji = 0;
        $servername = "localhost:3306";
        $username = "aecmedya_aren";
        $password = "Aren2023";
        $database = "aecmedya_haber";

        $connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
        $resim = $_GET['haber'];
        $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
        mysqli_set_charset($connection, "utf8");
        $result = mysqli_query($connection, $sql);
    
        $sql = "SELECT COUNT(*) as total FROM dunya";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_dunya = $row['total'];
    
        $sql = "SELECT COUNT(*) as total FROM ekonomi";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_ekonomi = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM gundem";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_gundem = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM magazin";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_magazin = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM saglik";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_saglik = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM son_dakika";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_sondakika = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM spor";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_spor = $row['total'];
        
        $sql = "SELECT COUNT(*) as total FROM teknoloji";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_set_charset($connection, "utf8");
        $total_teknoloji = $row['total'];
    
    ?>

	<header style="position:fixed;width:100%;max-width:100%;margin-top:-10px;">
		<?php include 'head2-mobil.php'; ?>
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
                                    <?php
                                        $total_dunya = 0;
                                        $total_ekonomi = 0;
                                        $total_gundem = 0;
                                        $total_magazin = 0;
                                        $total_saglik = 0;
                                        $total_sondakika = 0;
                                        $total_spor = 0;
                                        $total_teknoloji = 0;
                                        $servername = "localhost:3306";
                                        $username = "aecmedya_aren";
                                        $password = "Aren2023";
                                        $database = "aecmedya_haber";

                                        $connection = mysqli_connect($servername, $username, $password, $database);

                                        // Bağlantıyı kontrol et
                                        if (!$connection) {
                                            die("Bağlantı hatası: " . mysqli_connect_error());
                                        }
                                        $resim = $_GET['haber'];
                                        $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                                        mysqli_set_charset($connection, "utf8");
                                        $result = mysqli_query($connection, $sql);
                                    
                                        $sql = "SELECT COUNT(*) as total FROM dunya";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_dunya = $row['total'];
                                    
                                        $sql = "SELECT COUNT(*) as total FROM ekonomi";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_ekonomi = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM gundem";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_gundem = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM magazin";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_magazin = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM saglik";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_saglik = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM son_dakika";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_sondakika = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM spor";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_spor = $row['total'];
                                        
                                        $sql = "SELECT COUNT(*) as total FROM teknoloji";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        mysqli_set_charset($connection, "utf8");
                                        $total_teknoloji = $row['total'];
                                    
                                    ?>
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
                                            <?php
                                                $total_dunya = 0;
                                                $total_ekonomi = 0;
                                                $total_gundem = 0;
                                                $total_magazin = 0;
                                                $total_saglik = 0;
                                                $total_sondakika = 0;
                                                $total_spor = 0;
                                                $total_teknoloji = 0;
                                                $servername = "localhost:3306";
                                                $username = "aecmedya_aren";
                                                $password = "Aren2023";
                                                $database = "aecmedya_haber";

                                                $connection = mysqli_connect($servername, $username, $password, $database);

                                                // Bağlantıyı kontrol et
                                                if (!$connection) {
                                                    die("Bağlantı hatası: " . mysqli_connect_error());
                                                }
                                                $resim = $_GET['haber'];
                                                $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                                                mysqli_set_charset($connection, "utf8");
                                                $result = mysqli_query($connection, $sql);
                                            
                                                $sql = "SELECT COUNT(*) as total FROM dunya";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_dunya = $row['total'];
                                            
                                                $sql = "SELECT COUNT(*) as total FROM ekonomi";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_ekonomi = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM gundem";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_gundem = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM magazin";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_magazin = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM saglik";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_saglik = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM son_dakika";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_sondakika = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM spor";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_spor = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM teknoloji";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_teknoloji = $row['total'];
                                            
                                            ?>
                                            switch(imageIndex){
                                                case 5:
                                                    document.getElementById("slayt").src = "../mboss/magazin/haber" + <?php echo $total_magazin; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=magazin&haber=" + <?php echo $total_magazin; ?>;
                                                   break;
                                                case 2:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo $total_gundem; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo $total_gundem; ?>;
                                                    break;
                                                case 3:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo $total_dunya; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo $total_dunya; ?>;
                                                    break;
                                                case 4:
                                                    document.getElementById("slayt").src = "../mboss/spor/haber" + <?php echo $total_spor; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=spor&haber=" + <?php echo $total_spor; ?>;
                                                    break;
                                                case 1:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo $total_sondakika; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo $total_sondakika; ?>;
                                                     break;
                                                case 6:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo ($total_sondakika - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo ($total_sondakika - 1); ?>;
                                                     break;
                                                case 7:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo ($total_dunya - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo ($total_dunya - 1); ?>;
                                                    break;
                                                case 8:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo ($total_gundem - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo ($total_gundem - 1); ?>;
                                                    break;
                                                case 9:
                                                    document.getElementById("slayt").src = "../mboss/teknoloji/haber" + <?php echo $total_teknoloji; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=teknoloji&haber=" + <?php echo $total_teknoloji; ?>;
                                                    break;
                                                case 10:
                                                    document.getElementById("slayt").src = "../mboss/ekonomi/haber" + <?php echo $total_ekonomi; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=ekonomi&haber=" + <?php echo $total_ekonomi; ?>;
                                                    break;
                                            }
                                            
                                            document.getElementById("hbr").target = "_blank";
                                            document.getElementById("secim"+imageIndex).src = "dolu.png";

                                        }
                                        function go(imageIndex){
                                            <?php
                                                $total_dunya = 0;
                                                $total_ekonomi = 0;
                                                $total_gundem = 0;
                                                $total_magazin = 0;
                                                $total_saglik = 0;
                                                $total_sondakika = 0;
                                                $total_spor = 0;
                                                $total_teknoloji = 0;
                                                $servername = "localhost:3306";
                                                $username = "aecmedya_aren";
                                                $password = "Aren2023";
                                                $database = "aecmedya_haber";

                                                $connection = mysqli_connect($servername, $username, $password, $database);

                                                // Bağlantıyı kontrol et
                                                if (!$connection) {
                                                    die("Bağlantı hatası: " . mysqli_connect_error());
                                                }
                                                $resim = $_GET['haber'];
                                                $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                                                mysqli_set_charset($connection, "utf8");
                                                $result = mysqli_query($connection, $sql);
                                            
                                                $sql = "SELECT COUNT(*) as total FROM dunya";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_dunya = $row['total'];
                                            
                                                $sql = "SELECT COUNT(*) as total FROM ekonomi";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_ekonomi = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM gundem";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_gundem = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM magazin";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_magazin = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM saglik";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_saglik = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM son_dakika";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_sondakika = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM spor";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_spor = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM teknoloji";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_teknoloji = $row['total'];
                                            
                                            ?>
                                            switch(imageIndex){
                                                case 5:
                                                    document.getElementById("slayt").src = "../mboss/magazin/haber" + <?php echo $total_magazin; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=magazin&haber=" + <?php echo $total_magazin; ?>;
                                                   break;
                                                case 2:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo $total_gundem; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo $total_gundem; ?>;
                                                    break;
                                                case 3:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo $total_dunya; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo $total_dunya; ?>;
                                                    break;
                                                case 4:
                                                    document.getElementById("slayt").src = "../mboss/spor/haber" + <?php echo $total_spor; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=spor&haber=" + <?php echo $total_spor; ?>;
                                                    break;
                                                case 1:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo $total_sondakika; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo $total_sondakika; ?>;
                                                     break;
                                                case 6:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo ($total_sondakika - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo ($total_sondakika - 1); ?>;
                                                     break;
                                                case 7:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo ($total_dunya - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo ($total_dunya - 1); ?>;
                                                    break;
                                                case 8:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo ($total_gundem - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo ($total_gundem - 1); ?>;
                                                    break;
                                                case 9:
                                                    document.getElementById("slayt").src = "../mboss/teknoloji/haber" + <?php echo $total_teknoloji; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=teknoloji&haber=" + <?php echo $total_teknoloji; ?>;
                                                    break;
                                                case 10:
                                                    document.getElementById("slayt").src = "../mboss/ekonomi/haber" + <?php echo $total_ekonomi; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=ekonomi&haber=" + <?php echo $total_ekonomi; ?>;
                                                    break;
                                            }
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
                                            //var imageElement = document.getElementById("slayt");
                                            <?php
                                                $total_dunya = 0;
                                                $total_ekonomi = 0;
                                                $total_gundem = 0;
                                                $total_magazin = 0;
                                                $total_saglik = 0;
                                                $total_sondakika = 0;
                                                $total_spor = 0;
                                                $total_teknoloji = 0;
                                                $servername = "localhost:3306";
                                                $username = "aecmedya_aren";
                                                $password = "Aren2023";
                                                $database = "aecmedya_haber";

                                                $connection = mysqli_connect($servername, $username, $password, $database);

                                                // Bağlantıyı kontrol et
                                                if (!$connection) {
                                                    die("Bağlantı hatası: " . mysqli_connect_error());
                                                }
                                                $resim = $_GET['haber'];
                                                $sql = "SELECT baslik FROM ".$kategori." WHERE resim= '$resim'";
                                                mysqli_set_charset($connection, "utf8");
                                                $result = mysqli_query($connection, $sql);
                                            
                                                $sql = "SELECT COUNT(*) as total FROM dunya";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_dunya = $row['total'];
                                            
                                                $sql = "SELECT COUNT(*) as total FROM ekonomi";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_ekonomi = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM gundem";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_gundem = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM magazin";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_magazin = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM saglik";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_saglik = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM son_dakika";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_sondakika = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM spor";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_spor = $row['total'];
                                                
                                                $sql = "SELECT COUNT(*) as total FROM teknoloji";
                                                $result = mysqli_query($connection, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                mysqli_set_charset($connection, "utf8");
                                                $total_teknoloji = $row['total'];
                                            
                                            ?>
                                            switch(imageIndex){
                                                case 5:
                                                    document.getElementById("slayt").src = "../mboss/magazin/haber" + <?php echo $total_magazin; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=magazin&haber=" + <?php echo $total_magazin; ?>;
                                                   break;
                                                case 2:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo $total_gundem; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo $total_gundem; ?>;
                                                    break;
                                                case 3:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo $total_dunya; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo $total_dunya; ?>;
                                                    break;
                                                case 4:
                                                    document.getElementById("slayt").src = "../mboss/spor/haber" + <?php echo $total_spor; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=spor&haber=" + <?php echo $total_spor; ?>;
                                                    break;
                                                case 1:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo $total_sondakika; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo $total_sondakika; ?>;
                                                     break;
                                                case 6:
                                                    document.getElementById("slayt").src = "../mboss/son_dakika/haber" + <?php echo ($total_sondakika - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=son_dakika&haber=" + <?php echo ($total_sondakika - 1); ?>;
                                                     break;
                                                case 7:
                                                    document.getElementById("slayt").src = "../mboss/dunya/haber" + <?php echo ($total_dunya - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=dunya&haber=" + <?php echo ($total_dunya - 1); ?>;
                                                    break;
                                                case 8:
                                                    document.getElementById("slayt").src = "../mboss/gundem/haber" + <?php echo ($total_gundem - 1); ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=gundem&haber=" + <?php echo ($total_gundem - 1); ?>;
                                                    break;
                                                case 9:
                                                    document.getElementById("slayt").src = "../mboss/teknoloji/haber" + <?php echo $total_teknoloji; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=teknoloji&haber=" + <?php echo $total_teknoloji; ?>;
                                                    break;
                                                case 10:
                                                    document.getElementById("slayt").src = "../mboss/ekonomi/haber" + <?php echo $total_ekonomi; ?> + ".png";
                                                    document.getElementById("hbr").href = "haber.php?ktg=ekonomi&haber=" + <?php echo $total_ekonomi; ?>;
                                                    break;
                                            }
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
										echo '<a id="hbr" href="haber.php?ktg=son_dakika&haber=' . $total_sondakika . '"><img id="slayt" src="../mboss/son_dakika/haber' . $total_sondakika . '.png" width="100%" height="310px"></a>';
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=gundem&haber=<?php echo $total_gundem - 2; ?>"><img src="../mboss/gundem/haber<?php echo $total_gundem - 2; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $total_sondakika - 2; ?>"><img src="../mboss/son_dakika/haber<?php echo $total_sondakika - 2; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
								<td style="width:50%;">
									<table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=dunya&haber=<?php echo $total_dunya - 2; ?>"><img src="../mboss/dunya/haber<?php echo $total_dunya - 2; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
										<tr style="width:100%">
											<td style="width:100%">
												<a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=magazin&haber=<?php echo $total_magazin - 1; ?>"><img src="../mboss/magazin/haber<?php echo $total_magazin - 1; ?>.png" style="width:100%;height:165px;"></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=teknoloji&haber=<?php echo $total_teknoloji - 1; ?>"><img src="../mboss/teknoloji/haber<?php echo $total_teknoloji - 1; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=ekonomi&haber=<?php echo $total_ekonomi - 1; ?>"><img src="../mboss/ekonomi/haber<?php echo $total_ekonomi - 1; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=spor&haber=<?php echo $total_spor - 1; ?>"><img src="../mboss/spor/haber<?php echo $total_spor - 1; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=saglik&haber=<?php echo $total_saglik - 1; ?>"><img src="../mboss/saglik/haber<?php echo $total_saglik - 1; ?>.png" style="width:100%;height:165px;"></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $total_sondakika - 3; ?>"><img src="../mboss/son_dakika/haber<?php echo $total_sondakika - 3; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=dunya&haber=<?php echo $total_dunya - 3; ?>"><img src="../mboss/dunya/haber<?php echo $total_dunya - 3; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=gundem&haber=<?php echo $total_gundem - 3; ?>"><img src="../mboss/gundem/haber<?php echo $total_gundem - 3; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=ekonomi&haber=<?php echo $total_ekonomi - 2; ?>"><img src="../mboss/ekonomi/haber<?php echo $total_ekonomi - 2; ?>.png" style="width:100%;height:165px;"></a>
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
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=teknoloji&haber=<?php echo $total_teknoloji - 3; ?>"><img src="../mboss/teknoloji/haber<?php echo $total_teknoloji - 3; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=saglik&haber=<?php echo $total_saglik - 3; ?>"><img src="../mboss/saglik/haber<?php echo $total_saglik - 3; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                            <td style="width:100%">
                                                <div style="width:15px;"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width:50%;">
                                    <table style="width:100%">
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=son_dakika&haber=<?php echo $total_sondakika - 4; ?>"><img src="../mboss/son_dakika/haber<?php echo $total_sondakika - 4; ?>.png" style="width:100%;height:165px;"></a>
                                            </td>
                                        </tr>
                                        <tr style="width:100%">
                                            <td style="width:100%">
                                                <a style="text-decoration:none;color:#000" target="_blank" href="haber-mobil.php?ktg=dunya&haber=<?php echo $total_sondakika - 4; ?>"><img src="../mboss/dunya/haber<?php echo $total_dunya - 4; ?>.png" style="width:100%;height:165px;"></a>
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
