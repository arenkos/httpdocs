<?php
header("Content-type: text/css");
?>

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