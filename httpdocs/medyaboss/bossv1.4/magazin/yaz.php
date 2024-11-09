<?php
	$file = fopen('say.txt', 'w');
	$content = $_GET['say'];

	// Dosyaya içeriği yaz
	fwrite($file, $content);

	// Dosyayı kapat
	fclose($file);
?>    