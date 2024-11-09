<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.php?v=<?php echo time(); ?>">
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