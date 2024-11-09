<script src="script.js?v=<?php echo time(); ?>"></script>
<?php
if($_COOKIE['theme'] == "dark"){
    ?>
    <meta http-equiv="refresh" content="0; URL=../dark/system.php">
<?php
}else{
	if(strlen($_COOKIE['user'])>0){
		include '../../session_control.php';
	}else{
?>
		<meta http-equiv="refresh" content="0; URL=../../login.php">
<?php	
		exit();
	}
}
?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi</title>
	</head>

	<body>
		<?php include 'header.php'; ?>
		
		<?php include 'main.php'; ?>
		
		<?php include 'mobile.php'; ?>
	</body>
</html>
