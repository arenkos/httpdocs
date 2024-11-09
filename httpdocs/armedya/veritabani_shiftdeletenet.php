<?php
	$servername = "localhost:3306";
	$username = "aren";
	$password = "Arenkos1.";
	$database = "haber";
	
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Bağlantıyı kontrol et
	if (!$connection) {
		die("Bağlantı hatası: " . mysqli_connect_error());
	}
	// SHIFTDELETE.NET
	
	// Teknoloji
	$rssUrl = 'https://shiftdelete.net/feed';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
        $pubdate = (string)$item->pubDate;
		$pubdate = DateTime::createFromFormat('D, d M Y H:i:s O', $pubdate);

		// Yeni bir format belirle
		$pubdate = $pubdate->format('Y-m-d H:i:s');
        
        // Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->description;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

        // Linki almak için 'link' etiketini kullan
        $link = (string)$item->link;

		
		$connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
		
		$sql = "SELECT * FROM haberler WHERE haber_url LIKE '$link'";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows > 0) {
			break;
		}

		if ($result->num_rows == 0) {
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'SHIFTDELETE.NET', 'Teknoloji')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
?>