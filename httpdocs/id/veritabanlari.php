<script>
/*
	var i = 0;
	window.addEventListener('DOMContentLoaded', function() {
		while (i < 10000) {
			var xhr = new XMLHttpRequest();
			//xhr.open('GET', 'http://armedyaveteknoloji.xyz/Ads.txt', true);
			xhr.open('GET', 'http://armedyaveteknoloji.xyz/main/genel_akis', true);
			xhr.send();

			var xhr2 = new XMLHttpRequest();
			//xhr2.open('GET', 'http://armedyaveteknoloji.xyz/ads.txt', true);
			xhr2.open('GET', 'http://armedyaveteknoloji.xyz/main/ozel_akis', true);
			xhr2.send();

			var xhr3 = new XMLHttpRequest();
			//xhr3.open('GET', 'http://armedyaveteknoloji.xyz/ads.txt', true);
			xhr3.open('GET', 'http://armedyaveteknoloji.xyz/main/arama_kategori', true);
			xhr3.send();

			var xhr4 = new XMLHttpRequest();
			//xhr4.open('GET', 'http://armedyaveteknoloji.xyz/ads.txt', true);
			xhr4.open('GET', 'http://armedyaveteknoloji.xyz/main/arama_kaynak', true);
			xhr4.send();

			i++;
		}
		var xhr = new XMLHttpRequest();
			xhr.open('GET', 'veritabanlari.php', true);
			xhr.send();
	});
*/
</script>
<?php
	include 'veritabani_haberturk.php';
	include 'veritabani_cnnturk.php';
	include 'veritabani_ahaber.php';
	include 'veritabani_ntv.php';
	include 'veritabani_sozcu.php';
	include 'veritabani_milliyet.php';
	include 'veritabani_cumhuriyet.php';
	include 'veritabani_sabah.php';
	include 'veritabani_trt.php';
	include 'veritabani_webtekno.php';
	include 'veritabani_shiftdeletenet.php';
	include 'veritabani_bbcturkce.php';
	//include 'veritabani_euronewsturkce.php';
?>