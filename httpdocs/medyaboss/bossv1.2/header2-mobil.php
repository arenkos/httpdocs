<table style="margin: 0 auto;width:100%;">
    <tr style="width:100%;">
        <td style="width:25%;">
            <a href="ana.php" onmouseover="document.getElementById('arka').style.display='block';document.getElementById('l').style.display='none';"
               onmouseout="document.getElementById('arka').style.display='none';document.getElementById('l').style.display='block';"
               style="display:inline-block; position:relative;">
              <img id="l" src="l.png" style="width:100%;height:70px;padding-top:13px;text-align:left;display:block;">
              <img id="arka" src="l2.png" style="width:100%;height:70px;padding-top:13px;text-align:left;display:none;">
            </a>
        </td>
        <td style="width:5%;">
            <div></div>
        </td>
        <td style="width:5%;">
            <img src="cizgi.png" style="height:60px;width:2px;padding-top:15px;">
        </td>
        <td style="width:5%;">
            <div></div>
        </td>
        <td style="width:40%;">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
            <!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yaz.png" style="width:470px;height:70px;padding:16px;"></div>-->
            <div style="text-align:center;color:#000000;;font-family:Montserrat;padding-top:10px;color:white;">" DÜNYADAN HABERİNİZ OLSUN "</div>
            <!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yazi.gif" style="width:800px;height:100px;"></div>-->
        </td>
        <td style="width:15%;">
        </td>
        <td style="width:5%;text-align:center;">
			<div class="menu-toggle" onclick="toggleMenu()">
              <img src="menu.png" alt="Menu" width="20px" height="20px">
            </div>
		</td>
	</tr>
</table>
<table id="menu" style="margin: 0 right;width:auto;">
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="ana.php">Ana Sayfa</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="son_dakika.php">Son Dakika</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="gundem.php">Gündem</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="spor.php">Spor</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="dunya.php">Dünya</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="ekonomi.php">Ekonomi</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="teknoloji.php">Teknoloji</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="saglik.php">Sağlık</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td><a style="color:#fff;text-decoration:none;font-family:Poppins;" href="yazarlarimiz.php">Yazarlarımız</a></td>
	</tr>
	<tr style="margin: 0 auto;width:100%;text-align:center;">
		<td style="margin: 0 auto;width:100%;text-align:center;">
			<table style="margin: 0 auto;width:100%;text-align:center;">
				<tr style="margin: 0 auto;width:100%;text-align:center;">
					<td style="margin: 0 auto;width:100%;text-align:center;">
						<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="text-align:center;margin:0 auto;"><img src="w.png" style="width:25px;height:25px;"></a>
						<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="color:#fff;text-decoration:none;font-size:18px;background-color: #232323;font-family:Poppins">Whatsapp İritibat: 0532 663 2677</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script>
	function toggleMenu() {
	  var menu = document.getElementById("menu");
	  if (menu.style.display === "flex") {
		menu.style.display = "none";
	  } else {
		menu.style.display = "flex";
	  }
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.menu-toggle') && !event.target.matches('#menu') && !event.target.matches('#menu a')) {
		var menu = document.getElementById("menu");
		if (menu.style.display === "flex") {
		  menu.style.display = "none";
		}
	  }
	}
</script>