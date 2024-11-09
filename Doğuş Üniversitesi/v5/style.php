<?php
header("Content-type: text/css");
?>

body{
	margin:0 auto;
	padding:0;
	text-align:center;
	background-color:#FFF;
	width:100%;
	height:100%;
	border:none;
}
#login-body{
	margin:0 auto;
	background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),url('back.png?v=<?php echo time(); ?>');
	background-size: 100% 100%;
	background-repeat:no-repeat;
	width:100%;
	height:100%;
}
.logo-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 250px;
	height: 250px;
	max-height:15%;
	margin: 0 auto;
	text-align: center;
	background-color: #FFF;
}
.logo-panel #logo{
	display: flex;
	justify-content: center;
	align-items: center;
	background-image:url('d.png?v=<?php echo time(); ?>');
	background-size: contain;
	background-position: center;
	background-repeat:no-repeat;
	width: 100%;
	height: 100%;
	margin: 0 auto;
	text-align: center;
	background-color: #FFF;
}
.login-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 250px;
	height: 50%;
	margin: 0 auto;
	text-align: center;
	background-color: #BB1111;
	color: #FFF;
}
.down-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	background-image:url('b.png?v=<?php echo time(); ?>');
	background-size:100% 100%;
	width: 250px;
	height: 15%;
	margin: 0 auto;
	text-align: center;
	background-color: transparent;
	color: #FFF;
}
.login-panel #title{
	margin:0 auto;
	text-align:center;
	font-size:25px;
}
.login-panel #login-table{
	margin:0 auto;
	text-align:center;
	font-size:25px;
}
.login-panel #login-table #student_number{
	margin-top:10px;
	text-align:left;
	font-size:15px;
	color:#000;
}
.login-panel #login-table #password{
	margin-top:10px;
	text-align:left;
	font-size:15px;
	color:#000;
}
.login-panel #login{
	margin-top:10px;
	text-align:center;
	font-size:15px;
	background-color:#FFF;
	border:0px;
	color:#000;
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
	background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('bg.png?v=<?php echo time(); ?>');
	background-size: 100% 160%;
	background-repeat:no-repeat;
}
.profile-info{
	width: 200px;
	height: 250px;
	padding: 30px;
	margin:0 auto;
	margin-top:50px;
	color:#FFF;
}
.profile-info .profile-picture {
	margin:0 auto;
	width: 150px; /* Profil fotoğrafının genişliği */
	height: 150px; /* Profil fotoğrafının yüksekliği */
	border-radius: 50%; /* Oval kesme uygulama, çapın yarısı kadar keser */
	border: 3px solid #FFF;
	overflow: hidden; /* İçeriği dışarı taşan kısımları gizler */
}
.profile-info .profile-picture img {
	width: 100%; /* Resmi container'a sığacak şekilde boyutlandır */
	height: auto; /* Otomatik yükseklik ayarı */
	display: block; /* Dikey hizalamayı sağlar */
}
.profile-info .profile {
	margin:0 auto;
	text-align:center;
}
.profile-info .profile #name-surname {
	text-align:center;
	margin:5px;
	font-weight: bold;
	font-size: 20px;
}
.profile-info .profile #majority {
	text-align:center;
	margin:0;
	font-size: 15px;
}
.profile-info .profile #class {
	text-align:center;
	margin:0;
	font-size: 15px;
}
.profile-info .profile #number {
	text-align:center;
	margin:0;
	font-size: 15px;
}
.options {
	margin:0 auto;
}
.options .parts {
	margin:0 auto;
	padding: 15px;
}
.options .parts #obs {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
.options .parts #online {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #5555AA;
	box-shadow: inset 0 0 20px rgba(85, 85, 170, 0.8);
}
.options .parts #pos {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #AA5555;
	box-shadow: inset 0 0 20px rgba(170, 85, 85, 0.8);
}
.options .parts #mail {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #888888;
	box-shadow: inset 0 0 20px rgba(136, 136, 136, 0.8);
}
.options .parts #announcements {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #DDCC33;
	box-shadow: inset 0 0 20px rgba(221, 204, 51, 0.8);
}
.options .parts #campus {
	width:250px;
	height:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #AA4499;
	box-shadow: inset 0 0 20px rgba(170, 68, 153, 0.8);
}
.course-code {
	max-width:10%;
}
.course-name {
	width:60%;
	max-width:65%;
}
.title-parts {
	margin:0 auto;
	text-align:center;
	font-size:auto;
}
#obs-alt .title-parts {
	margin:0 auto;
	text-align:center;
	font-size:auto;
}
#obs-alt-mobile .title-parts {
	margin:0 auto;
	text-align:center;
	font-size:auto;
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
.spacer-height {
	height:5%;
	max-height:5px;
}
#exit {
	margin:0 auto;
	text-align:center;
	padding:0;
	width:20px;
	height:25px;
	margin-top:5px;
}
a {
	text-decoration:none;
	color:#000000;
}
.options-icon-div {
	margin:0 auto;
	text-align:center;
	width: 80px;
	max-width:70%;
	height: 100px;
	max-height:70%;
}
.options-icon{
	margin:0 auto;
	text-align:center;
	width:100%;
	height:100%;
	max-height:100%;
}
#obs-alt-mobile {
	display:none;
}
#pos-alt-mobile {
	display:none;
}
#obs-alt-mobile .parts-alt {
	margin:0 auto;
	width:auto;
	max-width:80%;
	height:auto;
	text-align:center;
	padding: 15px;
}
#obs-alt-mobile .parts-alt .parts {
	margin:0 auto;
	padding: 15px;
	width:100%;
	height:auto;
}
#obs-alt-mobile .parts-alt .parts #academic-calendar {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #course-register {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #week-program {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #exam-program {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #grades-exam {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #advisory-info {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #transcript {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #applications {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt-mobile .parts-alt .parts #user-management {
	width:100px;
	height:120px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
#obs-alt {
	display:block;
	margin:0 auto;
	text-align:center;
	width:auto;
	height:auto;
}
#obs-alt .parts-alt {
	margin:0 auto;
	width:auto;
	height:60%;
	text-align:center;
	padding: 15px;
}
#pos-alt {
	display:block;
	margin:0 auto;
	text-align:center;
	width:auto;
	max-width:90%;
	height:auto;
	max-width:100%;
}
.parts-pos-alt {
	margin:0 auto;
	width:auto;
	max-width:100%;
	height:100%;
	text-align:center;
	padding: 15px;
	border-radius: 10%;
	border: 1px solid #AA5555;
	box-shadow: inset 0 0 10px rgba(170, 85, 85, 0.8);
}
.parts-pos-alt2 {
	margin:0 auto;
	width:auto;
	max-width:100%;
	height:100%;
	text-align:center;
	padding: 15px;
	border-radius: 10%;
	border: 1px solid #AA5555;
	box-shadow: inset 0 0 10px rgba(170, 85, 85, 0.8);
}
.parts-pos-hareket {
	margin:0 auto;
	width:auto;
	max-width:100%;
	height:100%;
	text-align:center;
	padding: 15px;
	border-radius: 10%;
	border: 1px solid #AA5555;
	box-shadow: inset 0 0 10px rgba(170, 85, 85, 0.8);
}
.parts-pos-kart {
	margin:0 auto;
	width:auto;
	max-width:100%;
	height:100%;
	text-align:center;
	padding: 15px;
}
.parts-pos-alt .pos-title{
	margin:0 auto;
	width:auto;
	height:auto;
	max-height:25px;
	text-align:center;
	font-size:20px;
}
#obs-alt .parts-alt .parts {
	margin:0 auto;
	padding: 15px;
	width:100%;
}
#obs-alt .parts-alt .parts #academic-calendar {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #course-register {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #week-program {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #exam-program {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #grades-exam {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #advisory-info {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #transcript {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #applications {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#obs-alt .parts-alt .parts #user-management {
	width:200px;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
	padding:10px;
}
#balance {
	text-align:center;
}
#balance-mobile {
	text-align:center;
}
#menu {
	margin-top:-2px;
	margin-left:-5px;
	width: 350px;
	height: 100%;
	background-color: #FFFFFF;
}
.menu-iframe {
	margin-top: -5px;
	margin-left:-5px;
	width: auto;
	height: auto;
	background-color: #FFFFFF;
	border:0;
}
#menu-button {
	display:none;
}
#menu-img {
	display:none;
}
#close-div{
	display:none;
}
#close-button {
	display:none;
}
.menu-parts {
	margin:0 auto;
	text-align:center;
	padding:20px;
	width:350px;
	height:100%;
	color:#FFFFFF;
	box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.9);
	background-color:#FFFFFF;
	background-image: linear-gradient(rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.97)),url('d.png?v=<?php echo time(); ?>');
	background-size: 120% auto;
	background-position: center center;
	background-repeat:no-repeat;
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
	width:70px;
	height:100%;
}
.menu-icon {
	width:40px;
	height:100%;
}
.menu-title-parts {
	margin:0 auto;
	text-align:left;
	font-size:auto;
	color:#000000;
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
	height:90%;
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
	height:90%;
	background-color:#FFFFFF;
	opacity:0.9;
	box-shadow: inset 0 0 15px rgba(128, 128, 128, 0.6);
}

/* Mobil görünüm */
.mobile{
	display:none;
	margin:0 auto;
	padding:0;
	width:100%;
	border:none;
}
.top-mobile {
	margin:0 auto;
	width:100%;
	height:auto;
	background-color:#B11;
	background-image: linear-gradient(rgba(220, 50, 50, 0.75), rgba(220, 50, 50, 0.75)),url('bg.png?v=<?php echo time(); ?>');
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
.profile-info-mobile .profile-picture-mobile {
	margin:0 auto;
	width: 150px; /* Profil fotoğrafının genişliği */
	max-width:70vw;
	height: 150px; /* Profil fotoğrafının yüksekliği */
	max-height:70vw;
	border-radius: 50%; /* Oval kesme uygulama, çapın yarısı kadar keser */
	border: 3px solid #FFF;
	overflow: hidden; /* İçeriği dışarı taşan kısımları gizler */
}
.profile-info-mobile .profile-picture-mobile img {
	width: 100%; /* Resmi container'a sığacak şekilde boyutlandır */
	height: auto; /* Otomatik yükseklik ayarı */
	display: block; /* Dikey hizalamayı sağlar */
}
.profile-info-mobile .profile-mobile {
	margin:0 auto;
	text-align:center;
}
.profile-info-mobile .profile-mobile #name-surname-mobile {
	text-align:center;
	margin:5px;
	font-weight: bold;
	font-size: 20px;
}
.profile-info-mobile .profile-mobile #majority-mobile {
	text-align:center;
	margin:0;
	font-size: 15px;
}
.profile-info-mobile .profile-mobile #class-mobile {
	text-align:center;
	margin:0;
	font-size: 15px;
}
.profile-info-mobile .profile-mobile #number-mobile {
	text-align:center;
	margin:0;
	font-size: 15px;
}
#online-div {
	margin: 0 auto;
	text-align: center;
	padding: 0;
	border: 0;
	width: 100%;
	height: 100%;
	display: flex; /* Flexbox ile ortalamak için */
	justify-content: center; /* Yatayda ortalamak için */
	align-items: center; /* Dikeyde ortalamak için */
}
#online-div-mobile {
	display:none;
}
#online-table {
	margin: 0 auto;
	text-align: center;
	padding: 0;
	width: 60%;
	max-width:100%;
	height: auto;
	border-radius: 10%;
	border: 3px solid #5555AA;
	box-shadow: inset 0 0 10px rgba(85, 85, 170, 0.5);
	display: table; /* Tablo olarak görüntülemek için */
}
.options-mobile {
	margin:0 auto;
}
.options-mobile .parts-mobile {
	margin:0 auto;
	padding: 15px;
}
.options-mobile .parts-mobile #obs-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #55AA55;
	box-shadow: inset 0 0 20px rgba(85, 170, 85, 0.8);
}
.options-mobile .parts-mobile #online-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #5555AA;
	box-shadow: inset 0 0 20px rgba(85, 85, 170, 0.8);
}
.options-mobile .parts-mobile #pos-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #AA5555;
	box-shadow: inset 0 0 20px rgba(170, 85, 85, 0.8);
}
.options-mobile .parts-mobile #mail-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #888888;
	box-shadow: inset 0 0 20px rgba(136, 136, 136, 0.8);
}
.options-mobile .parts-mobile #announcements-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #DDCC33;
	box-shadow: inset 0 0 20px rgba(221, 204, 51, 0.8);
}
.options-mobile .parts-mobile #campus-mobile {
	width:250px;
	max-width:45vw;
	height:200px;
	max-height:45vw;
	margin:0 auto;
	border-radius: 10%;
	border: 3px solid #AA4499;
	box-shadow: inset 0 0 20px rgba(170, 68, 153, 0.8);
}
.title-parts-mobile {
	margin:0 auto;
	text-align:center;
	font-size:20px;
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
#exit-mobile {
	margin:0 auto;
	margin-top:5px;
	text-align:center;
	padding:0;
	width:20px;
	height:25px;
}
#menu-mobile {
	display:none;
}
#menu-button1{
	display:none;
}
@media screen and (max-width: 600px) {
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
	#obs-alt-mobile {
		display:flex;
		margin:0 auto;
		text-align:center;
		width:100%;
		height:auto;
	}
	#pos-alt-mobile {
		display:flex;
		margin:0 auto;
		text-align:center;
		width:100%;
		height:auto;
	}
	#online-div {
		display:none;
	}
	#online-div-mobile {
		margin: 0 auto;
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
	#menu {
		display:none;
		position: fixed;
		z-index: 9999;
		top:-5px;
		left:-350px;
		max-width:80%;
		background-color: #FFF;
		border: 1px solid #888;
		transition: left 0.7s;
	}
	#menu-button1{
		display:flex;
		position:fixed;
		width:auto;
		height:auto;
		margin:left;
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
	#menu-mobile {
		top: 0;
		left: -300px; 
		width: 300px;
		height: 100%;
		background-color: #FFF;
		border: 1px solid #888;
		transition: left 0.7s; /* Geçiş efekti süresi */
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
}
