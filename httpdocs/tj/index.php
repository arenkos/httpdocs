<?php

use TJK\TJK;

require_once __DIR__ . '/autoload.php';

$tjkAPI = new TJK();


$data = $tjkAPI->getTodayRaces();

$data = $tjkAPI->getRacesByDate('20240223');

$data = $tjkAPI->getTodayResult();

$data = $tjkAPI->getResultByDate('20240223');

//echo json_encode($data);

// JSON verilerini PHP dizisine dönüştür
$data = json_decode($data);

// Tabloyu başlat
echo '<table border="1">
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <!-- ... Diğer sütunlar ... -->
        </tr>';

// Her öğe için döngü
foreach ($data as $item) {
    echo '<tr>';
    foreach ($item as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}

// Tabloyu kapat
echo '</table>';

die();