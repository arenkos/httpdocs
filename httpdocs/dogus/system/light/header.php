<header style="position:fixed;width:100%;z-index: 1;height:60px;background-color:#BB2222;margin:0 auto;text-align:center;padding:0;display:flex;">
	<table style="height:100%;margin:0 auto;text-align:center;max-width:80%;">
		<tr>
			<td style="height:100%;vertical-align:middle;">
                <a href="system.php"><img src="../../d.png?v=<?php echo time(); ?>" style="height:50px;width:auto;"></a>
			</td>
			<td style="height:100%;margin:0 auto;text-align:center;vertical-align:middle;">
                <a href="system.php"><p style="font-size:20px;color:#FFFFFF;width:auto;margin:0 auto;vertical-align:middle;">Doğuş Üniversitesi</p></a>
			</td>
		</tr>
	</table>
    <div class="theme-select" style="display:block;position:fixed;text-align:right;right:5;">
        <table>
            <tr>
                <td style="text-align:left;">
                    <label style="color:#151515;">
                        <input type="radio" name="theme" value="dark" onclick="theme_switch('dark')">Koyu
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:left;">
                    <label style="color:#FFFFFF;">
                        <input type="radio" name="theme" value="light" onclick="theme_switch('light')" checked>Açık
                    </label>
                </td>
            </tr>
        </table>
    </div>
</header>
