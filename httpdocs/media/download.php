<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = $_POST['url'];

    if (empty($url)) {
        die('Lütfen geçerli bir URL girin.');
    }

    $videoUrl = downloadSocialMediaVideo($url);

    if ($videoUrl) {
        echo "<a href='$videoUrl' download>Videoyu indir</a>";
    } else {
        echo "Video indirilemedi.";
    }
} else {
    die('Geçersiz istek.');
}

function downloadSocialMediaVideo($url) {
    $encodedUrl = urlencode($url);
    $apiUrl = 'https://social-media-video-downloader.p.rapidapi.com/smvd/get/all?url=' . $encodedUrl;
    $apiKey = 'fc5063df87mshca41b3065c3b2afp134198jsn5c548f103b7d'; // RapidAPI anahtarınızı buraya girin

    $response = callAPI($apiUrl, $apiKey);
    echo "<pre>API Yanıtı:\n" . print_r($response, true) . "\n</pre>"; // API yanıtını ekrana yazdırarak kontrol edelim
    $responseData = json_decode($response, true);

    if (isset($responseData['src_url'])) {
        return $responseData['src_url'];
    } elseif (isset($responseData['picture'])) {
        return $responseData['picture'];
    } elseif (isset($responseData['links'][0]['link'])) {
        return $responseData['links'][0]['link'];
    } else {
        return false;
    }
}

function callAPI($url, $apiKey) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'x-rapidapi-host: social-media-video-downloader.p.rapidapi.com',
        'x-rapidapi-key: ' . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
?>
