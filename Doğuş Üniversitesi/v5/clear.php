<?php
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
	// Sayfanın sonuna Cache-Control başlığını ekleyerek tarayıcıya önbellek yönetimini belirtiyoruz
	header("Cache-Control: no-cache, must-revalidate"); // Önbelleği devre dışı bırak ve her seferinde sunucuya yeniden kontrol ettir
?>