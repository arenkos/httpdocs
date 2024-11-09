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
	// NTV
	
	// Teknoloji
	$rssUrl = 'https://www.ntv.com.tr/teknoloji.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Teknoloji')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Magazin
	$rssUrl = 'https://www.ntv.com.tr/magazin.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Magazin')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Ekonomi
	$rssUrl = 'https://www.ntv.com.tr/ekonomi.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Ekonomi')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Spor
	$rssUrl = 'https://www.ntv.com.tr/spor.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Spor')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Sağlık
	$rssUrl = 'https://www.ntv.com.tr/saglik.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Sağlık')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Dünya
	$rssUrl = 'https://www.ntv.com.tr/dunya.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Dünya')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Son Dakika
	$rssUrl = 'https://www.ntv.com.tr/son-dakika.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Son Dakika')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Gündem
	$rssUrl = 'https://www.ntv.com.tr/gundem.rss';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->entry as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = (string)$item->id;

		// Medya içeriğini almak için 'enclosure' etiketini kullan
		$descriptionHTML = $item->content;

		// HTML içeriğini içeren bir DOMDocument oluştur
		$dom = new DOMDocument;
		$dom->loadHTML($descriptionHTML);

		// img etiketini seç
		$imgTag = $dom->getElementsByTagName('img')->item(0);

		// img etiketinin src özelliğini al
		$resim = $imgTag->getAttribute('src');

		$pubdate = (string)$item->published;
		$pubdate = new DateTime($pubdate);
		$pubdate = $pubdate->format('Y-m-d H:i:s');

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'NTV', 'Gündem')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
?>