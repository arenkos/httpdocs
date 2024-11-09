<div style="width:100%;margin: 0 auto;margin:0 auto;">
	<nav style="width:100%;">
		<!-- Logo ve Menü -->
		<ul style="width:100%;background:#CD0000;height:92px;text-align:left;">
			<?php include 'header-mobil.php'; ?>
		</ul>
	
		<!-- Döviz kurları -->
		<ul style="width:100%;height:40px;background:#FFFFFF;text-align:center;margin: 0 auto;">
			<?php include 'doviz-mobil.php'; ?>
		</ul>

        <ul style="width:100%;margin:0 auto;">
            <form style="width:90%;margin:0 auto;" action="../arama-mobil.php" method ="POST">
                <table style="width:100%;margin:0 auto;">
                    <tr style="width:100%;margin:0 auto;">
                        <td style="width:80%;">
                            <input id="arama" style="width:50%;" type="text" name="arama" placeholder="Arama" required>

                            <script>
                                function buyut() {
                                    var aramaInput = document.getElementById("arama");
                                    aramaInput.style.transition = "width 0.5s"; // Geçiş süresini ayarlayabilirsiniz.
                                    aramaInput.style.width = "100%";
                                }

                                // Metin kutusu odaklandığında çalıştırmak için:
                                var aramaInput = document.getElementById("arama");
                                aramaInput.addEventListener("focus", buyut);

                                // Metin kutusu odaktan çıktığında eski boyutuna geri dönmek için:
                                aramaInput.addEventListener("blur", function() {
                                    aramaInput.style.width = "50%";
                                });
                            </script>
                        </td>
                        <td style="width:20%;">
                            <input style="100%;" type="submit" value="Ara">
                        </td>
                    </tr>
                </table>
            </form>
        </ul>
	</nav>
</div>
