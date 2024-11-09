<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
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