<div id="menu" style="width:100%;height:auto;margin:0 auto;text-align: center;" onMouseOut="var div = document.getElementById('c1'); div.style.display = 'none'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'none';">
    <div style="width:100%;height:100px;margin:0 auto;text-align: center;background-color:white;">
        <img style="height:80px;width:auto;margin:0 auto;margin-top:10px;" src="logo.png?v=<?php echo time(); ?>">
        <div class="language-selector">
            <select id="language-dropdown" onchange="changeLanguage()">
                <option value="tr">Türkçe</option>
                <option value="en">English</option>
                <option value="hy">Հայերեն</option>
            </select>
        </div>
    </div>
    <table style="width:1200px;max-width:60%;height:60px;background-color:transparent;margin:0 auto;">
        <tr style="width:100%;height:50px;background-color:transparent;margin:0 auto;">
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onMouseOut="var div = document.getElementById('c1'); div.style.display = 'none'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'none';" onclick="scrollToSection('home')"><a href="main.php#home" style="font-size:20px;text-align:center;text-decoration:none;">Ana Sayfa</a></td>
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c2'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c2'); div.style.display = 'none';" onclick="scrollToSection('about')"><a href="main.php#about" style="font-size:20px;text-align:center;text-decoration:none;">Hakkımızda</a></td>
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px"onMouseOver="var div = document.getElementById('c3'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c3'); div.style.display = 'none';" onclick="scrollToSection('contact')"><a href="main.php#contact" style="font-size:20px;text-align:center;text-decoration:none;">İletişim</a></td>
            <td rowspan="2" style="width:600px;height:100%;margin:0 auto;text-align:right;">
                <div style="width:100%;height:auto;margin:0 auto;text-align:right;">
                    <a href="bagis.php" style="text-decoration:none;"><button style="border:none;width:120px;height:40px;font-size:20px;font-style:Calibiri;margin:0 auto;">Bağış Yap</button></a>
                </div>
            </td>
        </tr>
        <tr style="width:100%;height:2px;background-color:transparent;margin:0 auto;">
            <td style="width: 130px;margin: 0 auto;padding-right: 10px;vertical-align: top;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onMouseOut="var div = document.getElementById('c1'); div.style.display = 'none'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'none';"><div id="c1" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: black;"></div></td>
            <td style="width: 130px;margin: 0 auto;padding-right: 10px;vertical-align: top;"onMouseOver="var div = document.getElementById('c2'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c2'); div.style.display = 'none';"><div id="c2" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: black;"></div></td>
            <td style="width: 130px;margin: 0 auto;padding-right: 10px;vertical-align: top;" onMouseOver="var div = document.getElementById('c3'); div.style.display = 'flex';" onMouseOut="var div = document.getElementById('c3'); div.style.display = 'none';"><div id="c3" style="display:none;width: auto;height:1px;margin: 0 auto;padding-right: 10px;background-color: black;"></div></td>
        </tr>
    </table>
    <table style="width:1200px;max-width:60%;height:auto;background-color:transparent;margin:0 left;padding-left:100px;margin-top:-5px;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" >
        <tr id="anasayfa_ekler" style="width:50%;height:30px;background-color:transparent;margin:0 auto;display:none;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" o>
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onclick="scrollToSection('haberler')"><a href="main.php#haberler" style="font-size:15px;text-align:center;cursor:pointer;">Haberler</a></td>
            <td style="text-align:center;width: 200px;margin: 0 auto;padding-right: 10px;" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onclick="scrollToSection('gazeteler')"><a href="main.php#gazeteler" style="font-size:15px;text-align:center;cursor:pointer;">Gazeteler ve Dergiler</a></td>
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onclick="scrollToSection('luystv')"><a href="main.php#luystv" style="font-size:15px;text-align:center;cursor:pointer;">LUYS TV</a></td>
            <td style="text-align:center;width: 120px;margin: 0 auto;padding-right: 10px" onMouseOver="var div = document.getElementById('c1'); div.style.display = 'flex'; var div2 = document.getElementById('anasayfa_ekler'); div2.style.display = 'flex';" onclick="scrollToSection('cenazeler')"><a href="main.php#cenazeler" style="font-size:15px;text-align:center;cursor:pointer;">Cenazeler</a></td>
        </tr>
    </table>
</div>
