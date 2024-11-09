<?php
header("Content-type: text/css");
/*
	$date= time();
	include 'a/style-obs-desktop.php?v='.$date;
	include 'a/style-obs-mobile.php?v='.$date;
	include 'a/style-campus-desktop.php?v='.$date;
	include 'a/style-campus-mobile.php?v='.$date;
	//include 'a/style-mail-desktop.php?v='.$date;
	include 'a/style-mail-mobile.php?v='.$date;
	include 'a/style-announcements-all.php?v='.$date;
	include 'a/style-pos-all.php?v='.$date;
	include 'a/style-options.php?v='.$date;
	include 'a/style-login.php?v='.$date;
	include 'a/style-chat.php?v='.$date;*/
?>


body{
	margin:0 auto;
	padding:0;
	text-align:center;
	background-color:#151515;
	width:100%;
	height:100%;
	border:none;
    color:#FFFFFF;
}

.main{
	margin:0 auto;
	padding:0;
	width:100%;
	border:none;
}
.main #top {
	margin:0 auto;
	padding:0;
	width:100%;
	border:none;
	background-color:#B11;
	background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('../../bg.png?v=<?php echo time(); ?>');
	background-size: 100% 160%;
	background-repeat:no-repeat;
}


.course-code {
	max-width:10%;
}
.course-name {
	width:60%;
	max-width:65%;
}

.icon-div {
	margin:0 auto;
	text-align:center;
	width: 120px;
	max-width:70%;
	height: 150px;
	max-height:70%;
}
.icon{
	margin:0 auto;
	text-align:center;
	width:100%;
	height:100%;
}
.icon-div-mobile {
    margin:0 auto;
    text-align:center;
    width: 70px;
    max-width:70%;
    height: 100px;
    max-height:70%;
}
.icon-mobile{
    margin:0 auto;
    text-align:center;
    width:100%;
    height:100%;
}
.spacer-height {
	height:5%;
	max-height:5px;
}
a {
	text-decoration:none;
	color:#000000;
}
#exit {
	margin:0 auto;
	text-align:center;
	padding:0;
	width:20px;
	height:25px;
	margin-top:5px;
}
#exit-mobile {
	margin:0 auto;
	margin-top:5px;
	text-align:center;
	padding:0;
	width:20px;
	height:25px;
}
#curtain {
	display:none;
	position:fixed;
	z-index:100px;
	top:0;
	width:100%;
	height:100%;
	background-color:#FFFFFF;
	opacity:0.7;
}
#curtain-mobile {
	display:none;
	position:fixed;
	z-index:100px;
	top:0;
	width:100%;
	height:100%;
	background-color:#FFFFFF;
	opacity:0.7;
}
#show-box {
	display:none;
	margin:0 auto;
	padding:20px;
	text-align:center;
	width:1000px;
	max-width:80%;
	height:80%;
	background-color:#FFFFFF;
	opacity:0.9;
	box-shadow: inset 0 0 15px rgba(128, 128, 128, 0.6);
}
#show-box-mobile {
	display:none;
	margin:0 auto;
	padding:20px;
	text-align:center;
	width:1000px;
	max-width:80%;
	height:80%;
	background-color:#FFFFFF;
	opacity:0.9;
	box-shadow: inset 0 0 15px rgba(128, 128, 128, 0.6);
}

/* Mobil görünüm */
.mobile {
	display:none;
	margin:0 auto;
	padding:0;
	width:100%;
	border:none;
}
.top-mobile {
	margin:0 auto;
	padding:0;
	width:100%;
	height:auto;
	background-color:#B11;
	background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('../../bg.png?v=<?php echo time(); ?>');
	background-size: 100% 160%;
	background-repeat:no-repeat;
	border:none;
}
.mobile .top-mobile .profile-info-mobile {
	width: 200px;
	max-width:70%;
	height: 280px;
	padding: 30px;
	margin:0 auto;
	margin-top:50px;
	color:#FFF;
}

<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Mobile') == true) {
    ?>
	.main {
		display: none;
	}
	.mobile {
		display: flex;
	}
	#obs-alt {
		display:none;
	}
	#pos-alt {
		display:none;
	}
	#campus-alt {
		display:none;
	}
	#obs-alt-mobile {
		display:flex;
		margin:0 auto;
		margin-top:60px;
		text-align:center;
		width:100%;
		height:auto;
	}
	#pos-alt-mobile {
		display:flex;
		margin:0 auto;
		margin-top:60px;
		text-align:center;
		width:100%;
		height:auto;
	}
	#campus-alt-mobile {
		display:flex;
		margin:0 auto;
		margin-top:60px;
		text-align:center;
		width:100%;
		height:auto;
	}
	#online-div {
		display:none;
	}
	#online-div-mobile {
		margin: 0 auto;
		margin-top:60px;
		text-align: center;
		padding: 0;
		border: 0;
		width: 100%;
		max-width:100%;
		height: 100%;
		display: flex; /* Flexbox ile ortalamak için */
		justify-content: center; /* Yatayda ortalamak için */
		align-items: center; /* Dikeyde ortalamak için */
	}
	#online-table-mobile {
		margin: 0 auto;
		text-align: center;
		padding: 0;
		width: 80%;
		max-width:100%;
		height: auto;
		border-radius: 10%;
		border: 3px solid #5555AA;
		box-shadow: inset 0 0 10px rgba(85, 85, 170, 0.5);
		display: table; /* Tablo olarak görüntülemek için */
	}
	#announcements-div {
		display:none;
	}
	#announcements-div-mobile {
		margin: 0 auto;
		margin-top:60px;
		text-align: center;
		padding: 0;
		border: 0;
		width: 100%;
		max-width:100%;
		height: 100%;
		display: flex; /* Flexbox ile ortalamak için */
		justify-content: center; /* Yatayda ortalamak için */
		align-items: center; /* Dikeyde ortalamak için */
	}
	#announcements-table-mobile {
		margin: 0 auto;
		text-align: center;
		padding: 0;
		width: 80%;
		max-width:100%;
		height: auto;
		border-radius: 10%;
		border: 3px solid #DDCC33;
		box-shadow: inset 0 0 10px rgba(221, 204, 51, 0.8);
		display: table; /* Tablo olarak görüntülemek için */
	}
	.menu-iframe {
		display:none;
		position: fixed;
		z-index: 9999;
		top:-5px;
		left:-5px;
		border: 1px solid #888;
		transition: left 0.7s;
		background:transparent;
	}
	#menu-button {
		display:none;
	}
	#menu-button-mobile {
		display:flex;
		position:fixed;
		z-index:180;
		top:3px;
		left:3px;
		width:20px;
		height:auto;
	}
	#menu-img-mobile {
		display:flex;
		position:fixed;
		z-index:180;
		top:20px;
		left:10px;
		width:20px;
	}
	#menu-mobile {
		top: 0;
		left: -300px; 
		width: 300px;
		height: 100%;
		background-color: #FFF;
		border: 1px solid #888;
		transition: left 0.7s ease; /* Geçiş efekti süresi */
	}
	#close-div {
		z-index:160;
		width:100%;
		text-align:right;
		height:15px;
	}
	#close-button {
		width:15px;
		height:15px;
		margin-right:2px;
		opacity:100%
	}
    .menu-parts {
        margin:0 auto;
        text-align:center;
        padding:20px;
        width:350px;
        height:100%;
        color:#FFFFFF;
        box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.9);
        background-color:#151515;
        background-image: linear-gradient(rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.97)),url('../../d.png?v=<?php echo time(); ?>');
        background-size: 120% auto;
        background-position: center center;
        background-repeat:no-repeat;
    }
	#menu-obs-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #55AA55;
		box-shadow: inset 0 0 10px rgba(85, 170, 85, 0.8);
	}
	#menu-online-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #5555AA;
		box-shadow: inset 0 0 10px rgba(85, 85, 170, 0.8);
	}
	#menu-pos-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #AA5555;
		box-shadow: inset 0 0 10px rgba(170, 85, 85, 0.8);
	}
	#menu-mail-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #888888;
		box-shadow: inset 0 0 10px rgba(136, 136, 136, 0.8);
	}
	#menu-announcements-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #DDCC33;
		box-shadow: inset 0 0 10px rgba(221, 204, 51, 0.8);
	}
	#menu-campus-mobile {
		width:100%;
		height:10%;
		margin:0 auto;
		border-radius: 10%;
		border: 2px solid #AA4499;
		box-shadow: inset 0 0 10px rgba(170, 68, 153, 0.8);
	}
    <?php
}
?>
