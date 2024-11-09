<?php
$rssUrl = 'https://www.ahaber.com.tr/rss/teknoloji.xml';
$xml = simplexml_load_file($rssUrl);

if ($xml) {
    foreach ($xml->channel->item as $item) {
        $title = (string)$item->title;
		$title = str_replace("'", "\'", $title);
		$title = str_replace('"', '\"', $title);
        $link = (string)$item->link;

        // Media linkini almak için 'media:content' etiketini kullan
        $mediaContentAttributes = $item->children('media', true)->content->attributes();
        $resim = (string)$mediaContentAttributes['url'];

        $pubdate = (string)$item->pubDate;

        
    }
} else {
    echo 'RSS feed çekilemedi.';
}
?>