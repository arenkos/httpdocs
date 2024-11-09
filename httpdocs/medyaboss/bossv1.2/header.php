<table style="width:1540px;margin: 0 auto;">
	<tr>
		<td>
			<a target="_blank" href="../ana.php" onmouseover="document.getElementById('arka').style.display='block';document.getElementById('l').style.display='none';"
			   onmouseout="document.getElementById('arka').style.display='none';document.getElementById('l').style.display='block';"
			   style="display:inline-block; position:relative;">
			  <img id="l" src="l.png" style="width:180px;height:70px;padding-top:13px;text-align:left;display:block;">
			  <img id="arka" src="l2.png" style="width:180px;height:70px;padding-top:13px;text-align:left;display:none;">
			</a>
		</td>
		<td>
			<div style="width:50px;"></div>
		</td>
		<td>
			<img src="cizgi.png" style="height:60px;width:2px;padding-top:15px;">
		</td>
		<td>
			<div style="width:10px;"></div>
		</td>
		<td>
			<link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
			<!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yaz.png" style="width:470px;height:70px;padding:16px;"></div>-->
			<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;">" DÜNYADAN HABERİNİZ OLSUN "</div>
			<!--<div style="text-align:center;color:#000000;font-size:25px;font-family:Montserrat;padding-top:10px;padding-left:50px;color:white;"><img src="yazi.gif" style="width:800px;height:100px;"></div>-->
		</td>
		<td style="width:730px;">
		</td>
		<td>
			<div class="menu-toggle" onclick="toggleMenu()">
			  <img src="../menu.png" alt="Menu" width="20px" height="20px">
			</div>
		</td>
	</tr>
</table>
<table style="margin: 0 right;width:1540px;text-align:right;">
	<tr style="width:100%;margin:0 right;text-align:right;">
		<td style="width:100%;margin:0 right;text-align:right;">
			<div style="width:340px;margin:0 right;text-align:right;margin-left:1220px;" id="menu">
				<nav>
					<ul>
					<span class="kapat2" onclick="kutuKapat4();">&times;</span>
				</ul>
				<div style="height:30px;">
				</div>
				<ul>
					<li><a href="../ana.php">Ana Sayfa</a></li>
				</ul>
				<ul>
					<li><a href="../son_dakika.php">Son Dakika</a></li>
				</ul>
				<ul>
					<li><a href="../gundem.php">Gündem</a></li>
				</ul>
				<ul>
					<li><a href="../spor.php">Spor</a></li>
				</ul>
				<ul>
					<li><a href="../dunya.php">Dünya</a></li>
				</ul>
				<ul>
					<li><a href="../ekonomi.php">Ekonomi</a></li>
				</ul>
				<ul>
					<li><a href="../teknoloji.php">Teknoloji</a></li>
				</ul>
				<ul>
					<li><a href="../saglik.php">Sağlık</a></li>
				</ul>
				<ul>
					<li><a href="../yazarlarimiz.php">Yazarlarımız</a></li>
				</ul>
				<ul>
					<table>
						<tr>
							<td>
								<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="text-align:center;margin-left:10px;"><img src="w.png" style="width:25px;height:25px;"></a>
							</td>
							<td style="width:5px;">
							</td>
							<td>
								<a target="_blank" href="https://wa.me/message/UYBKK2MEKBSVG1" style="color:#fff;text-decoration:none;padding-right:10px;;font-size:18px;background-color: #232323;">Whatsapp İritibat: 0532 663 2677</a>
							</td>
						</tr>
					</table>
				</ul>
			</div>
		</td>
	</tr>
</table>

<script>
				function toggleMenu() {
				  var menu = document.getElementById("menu");
				  if (menu.style.display === "block") {
					menu.style.display = "none";
				  } else {
					menu.style.display = "block";
				  }
				}

				window.onclick = function(event) {
				  if (!event.target.matches('.menu-toggle') && !event.target.matches('#menu') && !event.target.matches('#menu a')) {
					var menu = document.getElementById("menu");
					if (menu.style.display === "block") {
					  menu.style.display = "none";
					}
				  }
				}
			</script>