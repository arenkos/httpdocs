<?php
header("Content-type: text/css");
?>

#menu-mobile {
    display:none;
}
#menu {
    display:none;
    position: fixed;
    margin-top:-2px;
    margin-left:-5px;
    width: 350px;
    height: 100%;
    z-index: 9999;
    top:-5px;
    left:-350px;
    max-width:80%;
    background-color: #151515;
    border: 1px solid #888;
    transition: left 0.7s ease;
}
#menu-button {
    display:flex;
    position:fixed;
    z-index:180;
    top:3px;
    left:3px;
    width:20px;
    height:auto;
}
#menu-img {
    display:flex;
    position:fixed;
    z-index:180;
    top:20px;
    left:10px;
    width:20px;
    height:20px;
}
#menu-button-mobile {
    display:none;
    position:fixed;
    z-index:180;
    top:3px;
    left:3px;
    width:20px;
    height:auto;
}
#menu-img-mobile {
    display:none;
    position:fixed;
    z-index:180;
    top:20px;
    left:10px;
    width:20px;
}
.menu-parts {
	margin:0 auto;
	text-align:center;
	padding:20px;
	width:350px;
	height:100%;
    max-height:100%;
	color:#FFFFFF;
	box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.9);
	background-color:#151515;
	background-image: linear-gradient(rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.97)),url('../../d.png?v=<?php echo time(); ?>');
	background-size: 120% auto;
	background-position: center center;
	background-repeat:no-repeat;
}
#menu .top-mobile .profile-info-mobile {
	width: 200px;
	height: auto;
	padding: 10px;
	margin:0 auto;
	color:#FFF;
}
#menu-mobile .top-mobile .profile-info-mobile {
	width: auto;
	height: auto;
	padding: 10px;
	margin:0 auto;
	color:#FFF;
}
#menu-obs {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #55AA55;
	box-shadow: inset 0 0 10px rgba(85, 170, 85, 0.8);
}
#menu-online {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #5555AA;
	box-shadow: inset 0 0 10px rgba(85, 85, 170, 0.8);
}
#menu-pos {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #AA5555;
	box-shadow: inset 0 0 10px rgba(170, 85, 85, 0.8);
}
#menu-mail {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #888888;
	box-shadow: inset 0 0 10px rgba(136, 136, 136, 0.8);
}
#menu-announcements {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #DDCC33;
	box-shadow: inset 0 0 10px rgba(221, 204, 51, 0.8);
}
#menu-campus {
	width:100%;
	height:10%;
	margin:0 auto;
	border-radius: 10%;
	border: 2px solid #AA4499;
	box-shadow: inset 0 0 10px rgba(170, 68, 153, 0.8);
}
.menu-icon-div {
    display:flex;
    width:40px;
    height:40px;
    margin:0 auto;
}
.menu-icon {
    display:flex;
    width:40px;
    height:40px;
    margin:0 auto;
}
.menu-title-parts {
	margin:0 auto;
	text-align:left;
	font-size:auto;
	color:#FFFFFF;
}
