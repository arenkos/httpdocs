<?php
// OpenAI API anahtarınızı buraya ekleyin
$apiKey = "sk-svcacct-EHJYYdIs-oYi3HhSttVnheTqWJb0A2FLgF1oafIkXl04_FzT3BlbkFJZ006EA7ZvF5Cb_yJI7IFpsw9IFss1OgnnbzG-BEcBan0BsQA";

// Özetlenecek metni burada tanımlayın
$textToSummarize = "Üç Türk takımının mücadele edeceği UEFA Avrupa Ligi'nde kura çekimi gerçekleştirildi. İlk kez yeni formatta oynanacak Avrupa Ligi'nde eşleşmeler belli oldu. İşte ayrıntılar ve Galatasaray, Fenerbahçe, Beşiktaş'ın rakipleri...";

// OpenAI API'sine istek göndermek için cURL kullanıyoruz
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
));

// İstek için gönderilecek veriler
$data = array(
    "model" => "gpt-3.5-turbo",
    "messages" => array(
        array("role" => "system", "content" => "You are a helpful assistant."),
        array("role" => "user", "content" => "Please summarize the following text in Turkish: $textToSummarize")
    ),
    "temperature" => 0.7
);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// API'den dönen cevabı alın
$response = curl_exec($ch);

// cURL isteğinin başarılı olup olmadığını kontrol et
if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);
    die("cURL Error: $error");
}

// cURL oturumunu kapatın
curl_close($ch);

// JSON formatındaki cevabı PHP dizisine çevirin
$responseArray = json_decode($response, true);

// Cevabın var olup olmadığını ve doğru formatta olup olmadığını kontrol et
if (isset($responseArray['choices'][0]['message']['content'])) {
    $summary = $responseArray['choices'][0]['message']['content'];
    echo "<h2>Özet:</h2>";
    echo "<p>$summary</p>";
} else {
    echo "<h2>Özetleme Başarısız Oldu:</h2>";
    echo "<p>API'den beklenen yanıt alınamadı. Lütfen API anahtarınızı ve istek formatınızı kontrol edin.</p>";
}
?>
