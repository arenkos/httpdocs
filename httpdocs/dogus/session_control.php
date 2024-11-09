<!DOCTYPE html>
<html>
<head>
<script src="script.js?v=<?php echo time(); ?>"></script>
<link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style.php?v=<?php echo time(); ?>">
<?php
if($_COOKIE['theme'] == "dark"){
?>
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-profile-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-profile-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-announcements-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-campus-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-campus-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-chat.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-login.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-mail-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-mail-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-menu-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-obs-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-obs-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-online-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-options-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-options-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style-pos-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/dark/style.php?v=<?php echo time(); ?>">
<?php
}else{ ?>

    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-profile-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-profile-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-announcements-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-campus-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-campus-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-chat.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-login.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-mail-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-mail-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-menu-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-obs-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-obs-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-online-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-options-desktop.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-options-mobile.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style-pos-all.php?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/dogus/style/light/style.php?v=<?php echo time(); ?>">
<?php
} ?>
<!-- Eklendi! -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css?v=<?php echo time(); ?>">
</head>

<?php
	if(!(isset($_COOKIE['user']))){
		?><meta http-equiv="refresh" content="0; URL=login.php"><?php
		exit();
	}else if(isset($_GET['exit'])){
		setcookie("user", "", time(), "/");
		?><meta http-equiv="refresh" content="0; URL=login.php"><?php
		exit(); // Kodun daha fazla çalışmasını durdur
	}
	
?>
<?php include '../../support.php'; ?>
</html>
