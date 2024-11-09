<?php
header("Content-type: text/css");
?>
.language-selector {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 1000;
}
.language-selector select {
    padding: 5px;
    font-size: 16px;
}
#menu {
    position:fixed;
    z-index:5;
    background-color: black;
    transition: background-color 0.3s;
}

#menu:hover {
    background-color: white;
}

#menu table tr td a{
    color: white;
    transition: color 0.3s;
}

#menu:hover table tr td a {
    color: black;
}

#menu table tr td p {
    color: white;
    transition: color 0.3s;
}

#menu:hover table tr td p {
    color: black;
}

#menu table tr td div button {
    background-color: white;
    color: black;
    transition: background-color 0.3s;
}

#menu:hover table tr td div button {
    background-color: black;
    color: white;
}

td {
    text-align: center;
    vertical-align: middle;
}

#slideshow-container {
    position: relative;
    z-index:1;
    margin:0 auto;
    width: 90%;
    height: 400px;
    overflow: hidden;
}

.slideshow-img {
    width: 100%;
    height: 400px;
    position: absolute;
    top: 0;
    left: 100%; /* Başlangıçta resim görünmez, sağda bekler */
    transition: left 1s ease-in-out;
    object-fit: cover; 
}

.slideshow-img.active {
    left: 0; /* Aktif resim tam görünür */
}

.slideshow-img.prev {
    left: -100%; /* Önceki resim solda kaybolur */
}

p {
    font-size: 30px;
    color: white;
    cursor: pointer;
}

.form-container {
    margin:0 auto;
    width: 60%;
    max-width: 800px;
    text-align: center;
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.form-left, .form-right {
    display: inline-block;
    vertical-align: top;
}

.form-left {
    width: 40%;
}

.form-right {
    width: 40%;
}

input[type="text"], input[type="tel"], input[type="email"], textarea {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

textarea {
    height: 120px;
    resize: none;
}

.submit-button {
    width: 30%;
    padding: 10px;
    font-size: 18px;
    border: none;
    background-color: #444;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.submit-button:hover {
    background-color: #333;
}

/* Okların tasarımı */
.nav-arrow {
    position: absolute;
    top: 0;
    width: 40px; /* Genişlik */
    height: 100%; /* Slayt yüksekliği kadar */
    background-color: rgba(128, 128, 128, 0.5); /* Saydam gri arkaplan */
    text-align: center;
    line-height: 400px; /* Okun ortada olmasını sağlar */
    font-size: 40px;
    color: white;
    cursor: pointer;
    opacity: 0.5; /* Saydamlık */
    transition: opacity 0.3s ease;
    z-index: 10;
}

.nav-arrow:hover {
    opacity: 1; /* Üzerine gelindiğinde tam görünür */
}

#prev {
    left: 0; /* Sol okun yeri */
}

#next {
    right: 0; /* Sağ okun yeri */
}

/* Progress bar */
#progress {
    position: relative;
    width: 100%;
    height: 5px;
    background-color: gray;
}

#progress-bar {
    width: 0%;
    height: 100%;
    background-color: white;
    transition: width 10s linear; /* Süre boyunca ilerleme */
}

/* arkaplan */
#arkaPlan {
   display: none;
   position: fixed;
   z-index: 1;
   padding-top: 100px;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0,0,0,0.4);
}

#arkaPlan2 {
   display: none;
   position: fixed;
   z-index: 1;
   padding-top: 100px;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0,0,0,0.4);
}

#arkaPlan3 {
   display: none;
   position: fixed;
   z-index: 1;
   padding-top: 100px;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0,0,0,0.4);
}

/* kutu */
#kutu {
   background-color: #f1f1f1;
   margin: auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   max-width: 700px;
   position: relative;
}

/* kapat butonu */
.kapat {
   position: absolute;
   top: 0;
   right: 20px;
   font-size: 28px;
   font-weight: bold;
   cursor: pointer;
}

/* kapat butonu */
.kapat2 {
   position: absolute;
   top: 0;
   right: 20px;
   font-size: 28px;
   font-weight: bold;
   cursor: pointer;
   color: #fff;
}

/* Bağış Sayfası Stil */
.donation-section {
    margin-top: 300px; /* Navbar için boşluk */
}

/* Kart ve Buton Stilleri */
.card {
    margin-bottom: 20px;
}

.card-title {
    font-size: 1.5rem;
}

#donationSummaryAmount {
    font-size: 2rem;
    font-weight: bold;
    color: #007bff;
}

#customAmount:disabled {
    background-color: #f8f9fa;
}

/* Sticky Sağ Taraf */
.sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 20px;
}
