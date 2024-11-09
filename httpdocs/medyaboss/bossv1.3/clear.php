<?php
	session_start();
	session_destroy(); // Oturumu sonlandır
	$_SESSION = array(); // Oturum verilerini temizle
	setcookie('cookie_name', '', time() - 3600, '/'); // Çerezin süresini geçmiş bir tarih olarak ayarla
	if (function_exists('opcache_reset')) {
    opcache_reset(); // PHP OPcache önbelleğini temizle
	}

	if (function_exists('apc_clear_cache')) {
		apc_clear_cache(); // APC önbelleğini temizle
	}

	if (function_exists('xcache_clear_cache')) {
		xcache_clear_cache(); // XCache önbelleğini temizle
	}

	if (function_exists('eaccelerator_clear')) {
		eaccelerator_clear(); // eAccelerator önbelleğini temizle
	}

	if (function_exists('apcu_clear_cache')) {
		apcu_clear_cache(); // APCu önbelleğini temizle
	}
?>