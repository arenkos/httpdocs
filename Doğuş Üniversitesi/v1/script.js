function toggleMenu() {
	var menu = document.getElementById("menu-mobile");
	document.getElementById('menu-mobile').style.display = 'flex';
	document.getElementById('menu-img').style.display = 'none';
	document.getElementById('curtain').style.display = 'flex';

	menu.style.left = "0px";
}

function showbox(link) {
	document.getElementById('show-box').style.display = 'block';
	document.getElementById('show-box').src = link;
	document.getElementById('curtain').style.display = 'flex';
	document.getElementById('options-alt').style.display = 'none';
}

function gizle(){
	var div = document.getElementById('menu-mobile');
	document.getElementById('menu-img').style.display = 'flex';
	document.getElementById('curtain').style.display = 'none';
	document.getElementById('show-box').style.display = 'none';
	document.getElementById('options-alt').style.display = 'flex';
	
	if(div.style.left == "0px"){
		div.style.left = '-300px';
		div.style.display= "none";
		document.getElementById('menu-img').style.display = 'flex';
	}
}