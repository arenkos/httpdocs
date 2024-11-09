<?php
header("Content-type: text/css");
?>

#announcements-div {
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
#announcements-div-mobile {
    display:none;
}
#announcements-table {
    margin: 0 auto;
    text-align: center;
    padding: 0;
    width: 60%;
    max-width:100%;
    height: auto;
    color:#000000;
    border-radius: 10%;
    border: 3px solid #DDCC33;
    box-shadow: inset 0 0 10px rgba(221, 204, 51, 0.8);
    display: table; /* Tablo olarak görüntülemek için */
}
