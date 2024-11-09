<?php
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        $_SESSION['user'] = session_id();
        $user = $_SESSION['user'];
    }
    
    //include 'veritabanlari.php';
                
    $servername = "localhost:3306";
    $username = "aren";
    $password = "Arenkos1.";
    $database = "haber";
    
    $connection = mysqli_connect($servername, $username, $password, $database);

    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }
?>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doğuş Üniversitesi - Duyurular</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1SW5N2XCDZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1SW5N2XCDZ');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6912090056166853"
     crossorigin="anonymous"></script>
</head>

<body style="position:fixed;margin:0 auto;background-color:#DDDDDD;width:100%;margin-top:-5px;background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.4)),url('d.png?v=<?php echo time(); ?>');
    background-size: 100% auto;
    background-position: center center;
    background-repeat:no-repeat;">
    <iframe src="icerik.php" style="margin-top:-3px;width:100vw;height:100vh;border:0px;overflow:hidden;" scrolling="yes"></iframe>
</body>
</html>

