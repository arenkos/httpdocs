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
	// CNN TÜRK
	
	// Teknoloji
	$rssUrl = 'https://www.cnnturk.com/feed/rss/bilim-teknoloji/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Teknoloji')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Magazin
	$rssUrl = 'https://www.cnnturk.com/feed/rss/magazin/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK','Magazin')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Ekonomi
	$rssUrl = 'https://www.cnnturk.com/feed/rss/ekonomi/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Ekonomi')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Spor
	$rssUrl = 'https://www.cnnturk.com/feed/rss/spor/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Spor')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Sağlık
	$rssUrl = 'https://www.cnnturk.com/feed/rss/saglik/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Sağlık')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Dünya
	$rssUrl = 'https://www.cnnturk.com/feed/rss/dunya/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Dünya')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Son Dakika
	$rssUrl = 'https://www.cnnturk.com/feed/rss/all/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Son Dakika')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
	
	// Gündem
	$rssUrl = 'https://www.cnnturk.com/feed/rss/turkiye/news';
	$xml = simplexml_load_file($rssUrl);

	foreach ($xml->channel->item as $item) {
		$title = $item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
		$link = $item->link;
        $resim = (string)$item->image;
		$pubdate = $item->pubDate;
		$pubdate = DateTime::createFromFormat("D, d M Y H:i:s e", $pubdate);
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
			$sql = "INSERT INTO haberler (tiklanma_sayisi, begenme_sayisi, begenmeme_sayisi, yorum_sayisi, baslik, resim_url, haber_url, tarih, kaynak, kategori) VALUES('0' , '0', '0', '0', '$title', '$resim', '$link', '$pubdate', 'CNN TÜRK', 'Gündem')";
			mysqli_set_charset($connection, "utf8");
			if ($connection->query($sql) === TRUE) {
			//echo "Veri başarıyla eklendi";
			} else {
				echo "<br><br><br><br>Hata: " . $sql . "<br><br>" . $connection->error;
			}
		}
	}
?>