<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ermeni Toplulukları Vakfı</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js?v=<?php echo time(); ?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://www.armedyaveteknoloji.xyz/vakif/style.php?v=<?php echo time(); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="margin:0 auto;background-color:white;">
<form action="bagis_yap.php" method="POST">
    <section class="donation-section py-5 mt-5">
        <div class="container">
            <div class="row">
                <!-- Left Section: Donation Form -->
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Bağışınız</h3>
                            <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="amount250" value="250"> 250₺
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="amount500" value="500"> 500₺
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="amount1000" value="1000"> 1000₺
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="amount5000" value="5000"> 5000₺
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="amount10000" value="10000"> 10000₺
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="amount" id="otherAmount" value="other"> Diğer Miktar
                                </label>
                            </div>
                            <div class="mb-3">
                                <input type="number" id="customAmount" class="form-control" placeholder="Diğer miktar" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="fundSelect" class="form-label">Bağış Yapılacak Vakıf</label>
                                <select id="fundSelect" class="form-select">
                                    <option>Apeloğlu Andon Vakfı</option>
                                    <option>Bakırköy Surp Astvazazin Meryemana Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Balat Surp Hreştegabet Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Beşiktaş Surp Astvazazin Meryemana Ermeni Kilisesi Vakfı</option>
                                    <option>Beykoz Surp Nikagos Ermeni Kilisesi Vakfı</option>
                                    <option>Beyoğlu Anarathigutyun Ermeni Katolik Rahibeler Manastır Ve Mektebi Vakfı</option>
                                    <option>Beyoğlu Aynalı Çeşme Ermeni Protestan Kilisesi Vakfı</option>
                                    <option>Beyoğlu Ohannes Gümüşyan Ermeni Kilisesi Vakfı</option>
                                    <option>Beyoğlu Surp Gazer Ermeni Katolik Mihitaryan Manastır Ve Mektebi Vakfı</option>
                                    <option>Beyoğlu Üç Horan Ermeni Kilisesi Vakfı</option>
                                    <option>Beyoğlunda Sakızağacı Ermeni Katolik Surp Astvazazin Kilisesi Vakfı</option>
                                    <option>Boyacıköy Surp Yeris Mangas Ermeni Kilisesi Vakfı</option>
                                    <option>Burgazada Aya Yorgi Karipi Manastırı</option>
                                    <option>Büyükdere Surp Hripsimyans Ermeni Kilisesi Vakfı</option>
                                    <option>Diyarbakır Ermeni Surp Küçük Kilise Hıdır İlyas Surp Gregos Kiliseleri Vakfı</option>
                                    <option>Eyüp Surp Astvazazin Ermeni Kilisesi Ve Arakelyan Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Eyüp Surp Yeğiya Ermeni Kilisesi Vakfı</option>
                                    <option>Feriköy Surp Vartanaş Ermeni Kilisesi Vakfı</option>
                                    <option>Galata Surp Lusavoriç (Çerçiş) Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Gedikpaşa Ermeni Protestan Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Gedikpaşa Surp Hovhannes Ermeni Kilisesi Vakfı</option>
                                    <option>Halıcıoğlu Meryemana Surp Astvazazin Ermeni Kilisesi Ve Kalfayan Yetimhanesi Vakfı</option>
                                    <option>Hasköy Surp İstepanos Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>İskenderun Karasun Manuk Ermeni Ortodoks Kilisesi Vakfı</option>
                                    <option>Kadıköy Surp Takavor Ermeni Kilisesi Aramyan Uncuyan Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Kandilli Surp Arakelos Ermeni Kilisesi Vakfı</option>
                                    <option>Karaköy Surp Pırgiç Ermeni Katolik Kilisesi Vakfı</option>
                                    <option>Kartal Surp Nişan Ermeni Kilisesi Mektebi Vakfı</option>
                                    <option>Kayseri Surp Kirkor Ermeni Kilisesi Vakfı</option>
                                    <option>Kınalıada Surp Kirkor Losavoriç Ermeni Kilisesi Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Kırıkhan Ermeni Ortodoks Kilisesi Vakfı</option>
                                    <option>Koca Mustafa Paşa Anarathigutyun Ermeni Katolik Kilisesi Vakfı</option>
                                    <option>Kumkapı Meryemana (Drasular) Ermeni Kilisesi Vakfı</option>
                                    <option>Kumkapı Meryemana Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Kumkapı Surp Harutyun Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Kuruçeşme Surp Haç Ermeni Kilisesi Vakfı</option>
                                    <option>Kuzguncuk Surp Kirkor Lusavoriç Ermeni Kilisesi Vakfı</option>
                                    <option>Mardin Ermeni Katolik Kilisesi Vakfı</option>
                                    <option>Narlıkapı Surp Hovannes Ermeni Kilisesi Vakfı</option>
                                    <option>Ortaköy Surp Astvazazin Meryemana Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Ortaköy Surp Kıikor Losavoriç Ermeni Katolik Kilisesi Vakfı</option>
                                    <option>Pangaltı Ermeni Katolik Mihitaryan Manastır Ve Mektebi Vakfı</option>
                                    <option>Samandağı Vakıflı Köyü Ermeni Ortodoks Kilisesi Vakfı</option>
                                    <option>Samatya Sulumanastır Surp Kevork Ermeni Kilisesi Ve Sahakyan Nunyan Ermeni Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Şişli Karagözyan Ermeni Yetimhanesi Vakfı</option>
                                    <option>Surp Haç Tibrevank Ermeni Lisesi Vakfı</option>
                                    <option>Taksim Surp Agop Ermeni Katolik Hastanesi Vakfı</option>
                                    <option>Topkapı Surp Nikagos Ermeni Kilisesi Ve Mektebi Vakfı</option>
                                    <option>Üsküdar Surp Garabet Kilisesi Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Üsküdar Surp Hac Ermeni Kilisesi Mektebi Ve Mezarlığı Vakfı</option>
                                    <option>Yedikule Surp Pırgiç Ermeni Hastanesi Vakfı</option>
                                    <option>Yenikapı Tetaos Patriğimeos Ermeni Kilisesi Vakfı</option>
                                    <option>Yeniköy Küddipo Surp Astvazazin Ermeni Kilisesi Vakfı</option>
                                    <option>Yeşilköy Surp İstepanos Ermeni Kilisesi Mektebi Ve Mezarlığı Vakfı</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Bağış yapan kişi -->
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">İletişim Bilgileriniz</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">Ad</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Soyad</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-posta (İsteğe Bağlı)</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefon Numarası (İsteğe Bağlı)</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="tc" class="form-label">T.C. Kimlik No</label>
                                    <input type="text" class="form-control" id="tc" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Bağış özeti -->
                <div class="col-md-4">
                    <div class="card sticky-top">
                        <div class="card-body">
                            <h4>Bağışınız</h4>
                            <p id="donationSummaryAmount">₺0</p>
                            <p id="selectedFund">Ermeni Kültür Vakfı</p>
                            <button class="btn btn-danger w-100">Bağışı Tamamla</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>
