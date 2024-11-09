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
	// BirGün
	
	// Teknoloji
	$rssUrl = 'https://www.birgun.net/rss/kategori/dunya-9';
	$xml = simplexml_load_file($rssUrl);

	if ($xml == false) {
		die("RSS beslemesi yüklenemedi.");
	}


	foreach ($xml->channel->item as $item) {
		$title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		echo $title;
		$link = (string)$item->link;

		// Media linkini almak için 'media:content' etiketini kullan
		$mediaContentAttributes = $item->children('media', true)->content->attributes();
		$resim = (string)$mediaContentAttributes['url'];

		$pubdate = (string)$item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");
		
		$connection = mysqli_connect($servername, $username, $password, $database);

        // Bağlantıyı kontrol et
        if (!$connection) {
            die("Bağlantı hatası: " . mysqli_connect_error());
        }else
		
		$sql = "SELECT * FROM haberler WHERE haber_url LIKE '$link'";
		mysqli_set_charset($connection, "utf8");
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows > 0) {
			break;
		}
		echo $title;
		echo '<br>';
		echo $link;
		echo '<br>';
		echo $resim;
		echo '<br>';
		echo $pubdate;
		echo '<br>';
		echo '<br>';
		echo '<br>';

		if ($result->num_rows == 0) {
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Teknoloji')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Magazin
	$rssUrl = 'https://www.birgun.net/rss/kategori/magazin';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Magazin')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Ekonomi
	$rssUrl = 'https://www.birgun.net/rss/kategori/ekonomi';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Ekonomi')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Spor
	$rssUrl = 'https://www.birgun.net/rss/kategori/spor';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Spor')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Sağlık
	$rssUrl = 'https://www.birgun.net/rss/kategori/saglik';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Sağlık')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Dünya
	$rssUrl = 'https://www.birgun.net/rss/kategori/dunya';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Dünya')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Son Dakika
	$rssUrl = 'https://www.birgun.net/rss/kategori/son24saat';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Son Dakika')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	// Gündem
	$rssUrl = 'https://www.birgun.net/rss/kategori/gundem';
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
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s O", $pubdate);
		$pubdate = $pubdate->format("Y-m-d H:i:s");

		
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'BirGün', 'Gündem')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
?>