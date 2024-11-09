<div id="menu">
	<div style="margin:0 auto;">
		<img src="geri.png" style="width:20px;height:35px;margin-top:20px;margin-left:20px;opacity:50%" onclick="gizle()">
	</div>
	<table style="margin:0 auto;margin-bottom: 30px;">
		<form method="POST" action="kontrol.php">
			<tr>
				<td style="margin:0 auto;">
					<p style="font-size:30px;color:#FFD700;">Giriş Yap</p>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="user" placeholder="Mail/Telefon Numarası" style="text-align: center;">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
				</td>
			<tr>
				<td style="height:50px;margin:0 auto;">
					<input type="submit" value="Giriş" style="width:100%;">
				</td>
			</tr>
		</form>
	</table>
	<div style="width:250px;height:3px;background-color:#FFD700;opacity:60%;margin:0 auto;"></div>
	<table style="margin:0 auto;margin-top:30px;"><tr> <td>
		<form method="POST" action="kayit.php">
			<p style="font-size:30px;color:#FFD700;margin:0 auto;">Kayıt Ol</p>
			<table style="margin:0 auto;">
				<tr>
					<td>
						<p style="color:#FFD700;">Ad:<p>
					</td>
					<td>
						<input type="text" name="ad" placeholder="Ad" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						<p style="color:#FFD700;">Soyad:<p>
					</td>
					<td>
						<input type="text" name="soyad" placeholder="Soyad" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						<p style="color:#FFD700;">Mail:<p>
					</td>
					<td>
						<input type="text" name="mail" placeholder="Mail" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						<p style="color:#FFD700;">Telefon:<p>
					</td>
					<td>
						<input type="text" name="telefon" placeholder="Telefon" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						<p style="color:#FFD700;">Şifre:<p>
					</td>
					<td>
						<input type="password" name="sifre" placeholder="Şifre" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						<p style="color:#FFD700;">Adres:<p>
					</td>
					<td>
						<input type="text" name="adres" placeholder="Adres" style="text-align: center;">
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="submit" value="Kayıt Ol" style="text-align: center;">
					</td>
				</tr>
			</table>
		</form>
	</td></tr></table>
</div>