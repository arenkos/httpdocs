<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style/style-announcements-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-campus-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-campus-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-chat.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-login.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-mail-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-mail-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-menu-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-obs-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-obs-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-online-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-options-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-options-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-pos-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-profile-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style-profile-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="style/style.php?v=<?php echo time(); ?>">
</head>
<script src="script.js?v=<?php echo time(); ?>"></script>
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
<?php include 'support.php'; ?>
</html>