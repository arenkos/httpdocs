<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="a/style-announcements-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-campus-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-campus-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-chat.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-login.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-mail-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-mail-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-menu-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-obs-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-obs-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-online-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-options-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-options-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-pos-all.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-profile-desktop.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style-profile-mobile.php?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="a/style.php?v=<?php echo time(); ?>">
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