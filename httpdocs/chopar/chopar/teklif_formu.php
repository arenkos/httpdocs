<div class="image-container" style="background-image: url('logo.png'); background-size: 100% 100%; display: flex;justify-content: flex-start; height: 100vh; max-width:100%;">
    <form action="teklif.php" method="POST" style="text-align:center;margin-left:70px;margin-top: -50px;width:25%;">
        <p style="color:white;font-size:30px;margin-left:0px;">Teklif Formu</p>
        <table style="text-align:left;">
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="ad">Ad</label>
                </td>
                <td>
                    <textarea type="text" id="ad" name="ad" rows="1" cols="30" required></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="soyad">Soyad</label>
                </td>
                <td>
                    <textarea type="text" id="soyad" name="soyad" rows="1" cols="30" required></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="firma_adi">Firma Adı</label>
                </td>
                <td>
                    <textarea type="text" id="firma_adi" name="firma_adi" rows="1" cols="30" required></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="aciklama">Ürün<br>Açıklaması</label>
                </td>
                <td>
                    <textarea id="aciklama" name="aciklama" rows="4" cols="30"></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="adres">Adres</label>
                </td>
                <td>
                    <textarea id="adres" name="adres" rows="4" cols="30"></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="telefon">Telefon</label>
                </td>
                <td>
                    <textarea type="text" id="telefon" name="telefon" rows="1" cols="30" required></textarea><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:white;font-size:20px;" for="email">Email</label>
                </td>
                <td>
                    <textarea type="email" id="email" name="email" rows="1" cols="30" required></textarea><br><br>
                </td>
            </tr>
        </table>

        <input type="submit" value="Teklif Al">
    </form>
</div>
