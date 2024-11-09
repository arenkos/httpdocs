/*
window.addEventListener('DOMContentLoaded', function() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'veritabanlari.php', true);
	xhr.send();
});

function like(haber_url){
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'like.php?haber_url='+haber_url, true);
	xhr.send();
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'genel_akis.php?haber_url='+haber_url+'&begen=1&begenme=0&haberurl='+haber_url, true);
	xhr.send();
	document.getElementById('like_' + haber_url).style.display = 'none'; 
	document.getElementById('liked_' + haber_url).style.display = 'flex'; 
	document.getElementById('dislike_' + haber_url).style.display = 'flex';
	document.getElementById('disliked_' + haber_url).style.display = 'none';
}

function haber(haber_url){
	document.getElementById('resim_' + haber_url).style.display = 'none'; 
	document.getElementById('baslik_' + haber_url).style.display = 'none'; 
	document.getElementById('tarih_' + haber_url).style.display = 'none'; 
	document.getElementById('yorumlar_' + haber_url).style.display = 'none'; 
	document.getElementById('x_' + haber_url).style.textAlign = 'right';
	document.getElementById('x_' + haber_url).style.display = 'block';
	document.getElementById('haber_' + haber_url).style.display = 'flex'; 
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'tiklanma.php?haber_url='+haber_url, true);
	xhr.send();
}
*/
	
window.addEventListener('DOMContentLoaded', function() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'clear.php', true);
	xhr.send();
});
	
function toggleMenu() {
	var menu = document.getElementById("menu");
	document.getElementById('menu').style.display = 'flex';
	document.getElementById('menu-img').style.display = 'none';
	document.getElementById('curtain').style.display = 'flex';

	menu.style.left = "0px";
	
	/*
	var elements = document.getElementsByClassName("menu-iframe");
	for (var i = 0; i < elements.length; i++) {
		elements[i].style.display = "flex";
		elements[i].style.width = "auto";
		elements[i].style.height = "100vh";
		elements[i].style.position = "fixed";
	}*/
}
function toggleMenu_mobile() {
	var menu = document.getElementById("menu");
	document.getElementById('menu').style.display = 'flex';
	document.getElementById('menu-img-mobile').style.display = 'none';
	document.getElementById('curtain-mobile').style.display = 'flex';

	menu.style.left = "0px";
	
	/*
	var elements = document.getElementsByClassName("menu-iframe");
	for (var i = 0; i < elements.length; i++) {
		elements[i].style.display = "flex";
		elements[i].style.width = "auto";
		elements[i].style.height = "100vh";
		elements[i].style.position = "fixed";
	}*/
}

function showbox(id, link) {
	document.getElementById('show-box').style.display = 'block';
	document.getElementById('show-box').src = link;
	document.getElementById('curtain').style.display = 'flex';
	document.getElementById(id).style.display = "none";
}
function showbox_mobile(id, link) {
	document.getElementById('show-box-mobile').style.display = 'block';
	document.getElementById('show-box-mobile').src = link;
	document.getElementById('curtain-mobile').style.display = 'flex';
	document.getElementById(id).style.display = "none";
}

function gizle(id){
	var div = document.getElementById('menu');
	document.getElementById('menu-img').style.display = 'flex';
	document.getElementById('curtain').style.display = 'none';
	document.getElementById('show-box').style.display = 'none';
	document.getElementById(id).style.display = "flex";
	
	if(div.style.left == "0px"){
		div.style.left = '-350px';
		div.style.display= "none";
		document.getElementById('menu-img').style.display = 'flex';
	}
}
function gizle_mobile(id){
	var div = document.getElementById('menu');
	document.getElementById('menu-img-mobile').style.display = 'flex';
	document.getElementById('curtain-mobile').style.display = 'none';
	document.getElementById('show-box-mobile').style.display = 'none';
	document.getElementById(id).style.display = "flex";
	
	if(div.style.left == "0px"){
		div.style.left = '-350px';
		div.style.display= "none";
		document.getElementById('menu-img-mobile').style.display = 'flex';
	}
}

function gir(i) {
	document.getElementById('balance').value = i;
}
function gir_mobile(i) {
	document.getElementById('balance-mobile').value = i;
}