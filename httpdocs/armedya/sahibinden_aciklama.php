<?php

// HTML dosyasını oku
$html_content = file_get_contents('sahibinden_arama.html');

// DOMDocument kullanarak HTML parse işlemi
$dom = new DOMDocument;
$dom->loadHTML($html_content);

// 'classifiedDescription' id'li div elementini bul
$classifiedDescriptionDiv = $dom->getElementById('classifiedDescription');

// Eğer 'classifiedDescription' id'li div elementi bulunduysa, içindeki metni al
if ($classifiedDescriptionDiv) {
    $classifiedDescription = $classifiedDescriptionDiv->textContent;

    // Elde edilen metni ekrana yazdırabilirsiniz
    echo "Açıklama <br> $classifiedDescription";
} else {
    echo "Classified Description bulunamadı.";
}

?>
