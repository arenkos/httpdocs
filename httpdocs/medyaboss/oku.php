<?php
	$file = fopen('say.txt', 'r');

	// Dosyayı satır satır oku ve ekrana yazdır
	while (!feof($file)) {
		$line = fgets($file);
		echo $line;
	}

	// Dosyayı kapat
	fclose($file);
?>