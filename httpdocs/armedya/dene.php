<?php
$url = 'https://www.sahibinden.com/playstation-5'; // Kaydetmek istediğiniz web sitesinin URL'si
$html = file_get_contents($url); // Web sitesinin içeriğini al

if ($html !== false) {
    $dosyaAdi = 'kaydedilecek_dosya.html'; // Kaydedilecek dosyanın adı
    file_put_contents($dosyaAdi, $html); // HTML içeriğini dosyaya yaz
    echo 'Web sitesi HTML olarak kaydedildi.';
} else {
    echo 'Web sitesi içeriği alınamadı.';
}
?>