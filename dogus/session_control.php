<?php
	session_start();
	if(!(isset($_SESSION['user']))){
		//?><meta http-equiv="refresh" content="0; URL=login.php"><?php
		exit();
	}else if(isset($_GET['exit'])){
		session_unset(); // Oturum değişkenlerini temizle
		session_destroy(); // Oturumu sonlandır
		?><meta http-equiv="refresh" content="0; URL=login.php"><?php
		exit(); // Kodun daha fazla çalışmasını durdur
	}else if (isset($_SESSION['created']) && time() - $_SESSION['created'] > 3 * 24 * 60 * 60) {
		// Eğer oturumun oluşturulma zamanı 3 günü geçmişse, oturumu sıfırla
		session_unset(); // Oturum değişkenlerini temizle
		session_destroy(); // Oturumu sonlandır
		?><meta http-equiv="refresh" content="0; URL=login.php"><?php
		exit(); // Kodun daha fazla çalışmasını durdur
	}
?>