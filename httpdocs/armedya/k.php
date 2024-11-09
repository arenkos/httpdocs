<?php
    $servername = "localhost:3306";
    $username = "aren";
    $password = "Arenkos1.";
    $database = "haber";

    // Veritabanı bağlantısı
    $connection = mysqli_connect($servername, $username, $password, $database);

mysqli_close($connection);
exit();
    // Bağlantıyı kontrol et
    if (!$connection) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // Veritabanı karakter setini UTF-8 olarak ayarla
    mysqli_set_charset($connection, "utf8");

    // Geçici tablo oluştur
    $createTempTable = "
    CREATE TEMPORARY TABLE son_1000 AS
    SELECT id
    FROM haberler
    ORDER BY id DESC
    LIMIT 1000;
    ";

    // Geçici tabloyu oluştur
    if (!mysqli_query($connection, $createTempTable)) {
        die("Geçici tablo hatası: " . mysqli_error($connection));
    }

    // Tekrar eden kayıtları sil
    $sql = "
    DELETE FROM haberler
    WHERE id NOT IN (
        SELECT MIN(id)
        FROM haberler
        WHERE id IN (SELECT id FROM son_1000)
        GROUP BY haber_url
    )
    AND id IN (SELECT id FROM son_1000);
    ";

    // Sorguyu çalıştır
    if (mysqli_query($connection, $sql)) {
        // Kaç satırın etkilendiğini kontrol et
        $affected_rows = mysqli_affected_rows($connection);
        if ($affected_rows > 0) {
            echo "$affected_rows satır başarıyla silindi.";
        } else {
            echo "Silinecek satır bulunamadı.";
        }
    } else {
        echo "Sorgu hatası: " . mysqli_error($connection);
    }

    // Bağlantıyı kapat
    mysqli_close($connection);
?>
