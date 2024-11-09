<?php
// Python dosyasının adını ve yolunu belirtin
$pythonScript = 'muafiyet.py';

// Python komutunu oluşturun (Python yolu belirtilmeli)
$pythonCommand = 'python -- version';

// Python betiğini çalıştırın ve çıktıyı alın
$output = shell_exec($pythonCommand);

// Çıktıyı ekrana yazdırın
echo "<pre>$output</pre>";

if ($output === null) {
    echo "Komut başarısız oldu veya izin verilmedi.";
} else {
    echo "<pre>$output</pre>";
}


?>
