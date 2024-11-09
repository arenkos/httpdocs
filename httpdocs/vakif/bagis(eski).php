<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ermeni Toplulukları Vakfı</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/vakif/style.php?v=<?php echo time(); ?>">
    <header>
        <?php include 'header_bagis.php'; ?>
    </header>
</head>
<body style="margin:0 auto;background-color:white;">
    <div style="height:180px;"></div>
    <?php include 'slide.php'; ?>

    <div style="height:50px;"></div>
    <p style="text-align:center;margin:0 auto;font-size:40px;color:black;">Bağış Sayfası</p>
    <div style="height:20px;"></div>
    <div style="height:auto;width:100%;background-color:#EFEFEF;">
    <form action="bagis_yap.php" method="POST">
        <table style="margin:0 auto;width:60%;">
            <tr style="width:70%;">
                <td>
                    <table>
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Ad" style="text-align: center;font-size:20px;" required>
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="surname" placeholder="Soyad" style="text-align: center;font-size:20px;" required>
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" name="number" placeholder="Telefon" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center;font-size:20px;">
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="mail" placeholder="Email" style="text-align: center;font-size:20px;" required>
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" name="id" placeholder="T.C./Pasaport" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center;font-size:20px;">
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:20px;">
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <label for="para_birimi" placeholder="Para Birimi" style="text-align:center;font-size:20px;" required></label>
                                <select id="para_birimi" name="birim" style="width:100%;text-align:center;font-size:20px;" required>
                                    <option value="tl">TL</option>
                                    <option value="usd">USD</option>
                                    <option value="eur">EURO</option>
                                    <option value="gbp">GBP</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" name="balance" placeholder="Tutar" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); updateTutar();" style="text-align: center;font-size:20px;">
                            </td>
                        </tr>
                        <tr style="height:10px;">
                        </tr>
                        <tr>
                            <td>
                                <label for="kurumlar" placeholder="Kurumlar" style="text-align:center;font-size:20px;" required></label>
                                <select id="kurumlar" name="kurum" style="width:100%;text-align:center;font-size:20px;" required>
                                    <option value="Surp Haç Vakfı">Surp Haç Vakfı</option>
                                    <option value="Ortaköy Kilisesi Vakfı">Ortaköy Kilisesi Vakfı</option>
                                    <option value="Kalfayan Okulu">Kalfayan Okulu</option>
                                    <option value="Karagözyan Okulu">Karagözyan Okulu</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:200px;">
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size:15px;color:black;">Bağış Miktarı</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="tutar" style="font-size:25px;color:black;">0</p>
                                <p id="para_birimi_goster" style="font-size:25px;color:black;">TL</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="bagis_yap" type="submit" value="Onayla" style="font-size:25px;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <div style="height:200px;"></div>
</body>
</html>
