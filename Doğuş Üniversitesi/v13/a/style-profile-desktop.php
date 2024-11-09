<?php
header("Content-type: text/css");
?>

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