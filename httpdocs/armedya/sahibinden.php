<?php


// Hedef web sitesinin URL'sini belirtin
$url = 'https://www.sahibinden.com/playstation-5';

// cURL oturumunu başlatın
$ch = curl_init($url);

// cURL ayarlarını yapılandırın
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// İndirilen kaynak kodunu alın
$html_content = curl_exec($ch);

// cURL oturumunu kapatın
curl_close($ch);

// İndirilen kaynak kodunu ekrana yazdırabilir veya başka bir işlem yapabilirsiniz
echo $html_content;



// HTML dosyasını oku
$html_content = file_get_contents('sahibinden.html');

// DOMDocument kullanarak HTML parse işlemi
$dom = new DOMDocument;
$dom->loadHTML($html_content);

// 'searchResultsTable' id'li table elementini bul
$searchResultsTable = $dom->getElementById('searchResultsTable');

// 'searchResultsRowClass' class'lı tbody elementini bul
$searchResultsTbody = $searchResultsTable->getElementsByTagName('tbody')->item(0);

// Tbody içindeki tr elementlerini al
$trElements = $searchResultsTbody->getElementsByTagName('tr');

// Her bir tr elementi için işlem yap
foreach ($trElements as $trElement) {
    // Tr elementinin data-id değerini al
    $dataId = $trElement->getAttribute('data-id');

    // Tr elementi içindeki td elementini al
    $tdElements = $trElement->getElementsByTagName('td');

    // Fiyat, tarih ve ilan başlığı bilgilerini al
    $price = $tdElements->item(2)->textContent;
    $date = $tdElements->item(3)->textContent;

    // İlan başlığını al
    $titleElement = $trElement->getElementsByTagName('a')->item(1); // 'a' etiketinin sırasına göre değiştirebilirsiniz
    $title = $titleElement ? $titleElement->textContent : '';

    // Konum bilgisini al
    $locationElement = $tdElements->item(4);
    $location = '';

    // Eğer konum bilgisi varsa, şehir ve ilçeyi ayırarak "/" işareti ekleyerek al
    if ($locationElement) {
        $cityDistrict = explode("<br/>", $locationElement->innerHTML);
        $location = trim($cityDistrict[0]) . " / " . trim($cityDistrict[1]);
    }

    // Elde edilen değerleri kullanmak veya göstermek için ekrana yazdırabilirsiniz
    echo "Data ID: $dataId<br>";
    echo "Fiyat: $price<br>";
    echo "Tarih: $date<br>";
    echo "İlan Başlığı: $title<br>";
    echo "Konum: $location<br>";
    echo "--------------------------<br>";
}

?>
