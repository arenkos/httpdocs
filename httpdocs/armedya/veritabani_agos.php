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
	$rssUrl = 'https://www.agos.com.tr/tr/rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->link;

		// Media linkini almak için 'media:content' etiketini kullan
		$mediaContentAttributes = $item->children('media', true)->content->attributes();
		$resim = (string)$mediaContentAttributes['url'];
		
		$pubdate = (string)$item->pubDate;
		$turkishMonths = array('Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara');
		$englishMonths = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$turkishDays = array('Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Paz');
		$englishDays = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$pubdate = str_replace($turkishMonths, $englishMonths, $pubdate);
		$pubdate = str_replace($turkishDays, $englishDays, $pubdate);
		$pubdate = DateTime::createFromFormat('D, d M Y H:i:s O', $pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
		$connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }
		
		$sql = "SELECT * FROM agos WHERE haber_url LIKE '$link'";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows > 0) {
			break;
		}

		if ($result->num_rows == 0) {
			$sql = "INSERT INTO agos (baslik, haber_url, tarih) VALUES('$title', '$link', '$pubdate')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
?>
