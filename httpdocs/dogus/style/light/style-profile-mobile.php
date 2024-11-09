<?php
header("Content-type: text/css");
?>

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