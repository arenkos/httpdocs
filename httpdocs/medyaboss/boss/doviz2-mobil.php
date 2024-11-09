<style>
    .scrolling-table {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
    }

    .scrolling-table td {
    }

    .scrolling-table-container {
        width: 100%;
        overflow: auto;
    }
.scrolling-table-container::-webkit-scrollbar {
        width: 0;
        display: none;
    }
</style>

<div class="scrolling-table-container">
    <table class="scrolling-table" style="width:100%;margin: 0 auto;max-width:100%;">
        <tr>
            <td style="width:100%;text-align:center;">
                <div class="borsa-widget-top">
                  <div class="borsa-widget-wrapper">
                    <div class="left"></div>
                    <div class="right">
                      <div class="borsa-widget-group">
                        <a
                          id="dolar"
                          href="ekonomi.php"
                          title="Dolar Kuru Ne Kadar? "
                          target="_blank"
                          class="live-dolar gtm-tracker up"
                          data-newsvariant="markethorizontal-usd"
                          data-newscollect="1"
                        >
                          <span class="name"
                            ><i class="fa fa-caret-up" aria-hidden="true"></i> Dolar</span
                          >
                          <span class="rate up LastPrice"><?php
                        $url = 'https://api.genelpara.com/embed/altin.json';
                        $json = file_get_contents($url);
                        $data = json_decode($json, true);

                        // Verilere erişmek için örnek kullanım
                        if ($data['USD']['d_yon'] == "caret-down"){
                            echo '<span style="color:#f00">'.$data['USD']['satis'].'</span>'; // USD'nin satış değeri
                            echo " ";
                             // USD'nin satış değeri
                            echo '<span style="color:#000">'.$data['USD']['degisim'].'</span>'; // USD'nin satış değeri
                             // USD'nin satış değeri
                        }else{
                            echo $data['USD']['satis']; // USD'nin satış değeri
                            echo " ";
                            echo "%"; // USD'nin satış değeri
                            echo $data['USD']['degisim']; // USD'nin satış değeri
                        }
                        ?></span>
                          <span class="PercentChange"></span>
                        </a>

                        <a
                          id="euro"
                          href="ekonomi.php"
                          title="Euro Ne Kadar?"
                          target="_blank"
                          class="live-euro gtm-tracker up"
                          data-newsvariant="markethorizontal-euro"
                          data-newscollect="1"
                        >
                          <span class="name"
                            ><i class="fa fa-caret-up" aria-hidden="true"></i> Euro</span
                          >
                          <span class="rate up LastPrice"><?php
                        $url = 'https://api.genelpara.com/embed/altin.json';
                        $json = file_get_contents($url);
                        $data = json_decode($json, true);

                        // Verilere erişmek için örnek kullanım
                        if ($data['EUR']['d_yon'] == "caret-down"){
                            echo '<span style="color:#f00">'.$data['EUR']['satis'].'</span>'; // USD'nin satış değeri
                            echo " ";
                             // USD'nin satış değeri
                            echo '<span style="color:#000">'.$data['EUR']['degisim'].'</span>'; // USD'nin satış değeri
                             // USD'nin satış değeri
                        }else{
                            echo $data['EUR']['satis']; // USD'nin satış değeri
                            echo " ";
                            echo "%"; // USD'nin satış değeri
                            echo $data['EUR']['degisim']; // USD'nin satış değeri
                        }
                        ?></span>
                          <span class="PercentChange"></span>
                        </a>

                        <a
                          id="bist-100"
                          href="ekonomi.php"
                          title="Bist Ne Kadar?"
                          target="_blank"
                          class="live-bist-100 gtm-tracker up"
                          data-newsvariant="markethorizontal-euro"
                          data-newscollect="1"
                        >
                          <span class="name"
                            ><i class="fa fa-caret-up" aria-hidden="true"></i> Bist
                            100</span
                          >
                          <span class="rate up LastPrice"><?php
                        $url = 'https://api.genelpara.com/embed/altin.json';
                        $json = file_get_contents($url);
                        $data = json_decode($json, true);

                        // Verilere erişmek için örnek kullanım
                        
                        if ($data['XU100']['d_yon'] == "caret-down"){
                            echo '<span style="color:#f00">'.$data['XU100']['satis'].'</span>'; // USD'nin satış değeri
                            echo " ";
                             // USD'nin satış değeri
                            echo '<span style="color:#000">'.$data['XU100']['degisim'].'</span>'; // USD'nin satış değeri
                             // USD'nin satış değeri
                        }else{
                            echo $data['XU100']['satis']; // USD'nin satış değeri
                            echo " ";
                            echo "%"; // USD'nin satış değeri
                            echo $data['XU100']['degisim']; // USD'nin satış değeri
                        }
                        ?></span>
                          <span class="PercentChange"></span>
                        </a>

                        <a
                          id="bitcoin"
                          href="ekonomi.php"
                          title="bitcoin Ne Kadar?"
                          target="_blank"
                          class="live-bitcoin gtm-tracker up"
                          data-newsvariant="markethorizontal-euro"
                          data-newscollect="1"
                        >
                          <span class="name"
                            ><i class="fa fa-caret-up" aria-hidden="true"></i> Bitcoin
                            </span
                          >
                          <span class="rate up LastPrice"><?php
                        $url = 'https://api.genelpara.com/embed/altin.json';
                        $json = file_get_contents($url);
                        $data = json_decode($json, true);

                        // Verilere erişmek için örnek kullanım
                        if ($data['BTC']['d_yon'] == "caret-down"){
                            echo '<span style="color:#f00">'.$data['BTC']['satis'].'</span>'; // USD'nin satış değeri
                            echo " ";
                             // USD'nin satış değeri
                            echo '<span style="color:#000">'.$data['BTC']['degisim'].'</span>'; // USD'nin satış değeri
                             // USD'nin satış değeri
                        }else{
                            echo $data['BTC']['satis']; // USD'nin satış değeri
                            echo " ";
                            echo "%"; // USD'nin satış değeri
                            echo $data['BTC']['degisim']; // USD'nin satış değeri
                        }
                        ?></span>
                          <span class="PercentChange"></span>
                        </a>

                        <a
                          id="gram-altin"
                          href="ekonomi.php"
                          title="Canlı Altın Fiyatları"
                          target="_blank"
                          class="live-gram-altin gtm-tracker up"
                          data-newsvariant="markethorizontal-altin"
                          data-newscollect="1"
                        >
                          <span class="name"
                            ><i class="fa fa-caret-up" aria-hidden="true"></i> Altın</span
                          >
                          <span id="gr" class="rate up LastPrice"><?php
                        $url = 'https://api.genelpara.com/embed/altin.json';
                        $json = file_get_contents($url);
                        $data = json_decode($json, true);

                        // Verilere erişmek için örnek kullanım
                        if ($data['GA']['d_yon'] == "caret-down"){
                            echo '<span style="color:#f00">'.$data['GA']['satis'].'</span>'; // USD'nin satış değeri
                            echo " ";
                             // USD'nin satış değeri
                            echo '<span style="color:#000">'.$data['GA']['degisim'].'</span>'; // USD'nin satış değeri
                             // USD'nin satış değeri
                        }else{
                            echo $data['GA']['satis']; // USD'nin satış değeri
                            echo " ";
                            echo "%"; // USD'nin satış değeri
                            echo $data['GA']['degisim']; // USD'nin satış değeri
                        }
                        ?></span>
                          <span class="PercentChange"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <script
                  src="https://code.jquery.com/jquery-3.6.4.min.js"
                  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
                  crossorigin="anonymous"
                ></script>
                <script>
                    $(document).ready(function() {
                      // WebSocket connection
                      let socket = new WebSocket("wss://nc.ciner.com.tr/sub/htfinans");
                        
                      // function to display initial data
                      function displayInitialData(data) {
                        $("#" + data.SecuritySlug + " .LastPrice").html(data.LastPrice);
                        $("#" + data.SecuritySlug + " .PercentChange").html(data.PercentChange);
                      }

                      // function to update data
                      function updateData(data) {
                        $("#" + data.SecuritySlug).addClass("change");
                        $("#" + data.SecuritySlug + " .LastPrice").html(data.LastPrice);
                        $("#" + data.SecuritySlug + " .PercentChange").html(data.PercentChange);
                        if (data.PriceChange > 0) {
                          $("#" + data.SecuritySlug + " .PercentChange").addClass("up");
                          $("#" + data.SecuritySlug + " .PercentChange").removeClass("down");
                          $("#" + data.SecuritySlug + " .LastPrice").addClass("up");
                          $("#" + data.SecuritySlug + " .LastPrice").removeClass("down");
                          $("#" + data.SecuritySlug).addClass("up");
                          $("#" + data.SecuritySlug).removeClass("down");
                          $("#" + data.SecuritySlug + " .name i").addClass("fa-caret-up");
                          $("#" + data.SecuritySlug + " .name i").removeClass("fa-caret-down");
                        } else {
                          $("#" + data.SecuritySlug + " .PercentChange").removeClass("up");
                          $("#" + data.SecuritySlug + " .PercentChange").addClass("down");
                          $("#" + data.SecuritySlug + " .LastPrice").removeClass("up");
                          $("#" + data.SecuritySlug + " .LastPrice").addClass("down");
                          $("#" + data.SecuritySlug).removeClass("up");
                          $("#" + data.SecuritySlug).addClass("down");
                          $("#" + data.SecuritySlug + " .name i").removeClass("fa-caret-up");
                          $("#" + data.SecuritySlug + " .name i").addClass("fa-caret-down");
                        }
                        setTimeout(function () {
                          $("#" + data.SecuritySlug).removeClass("change");
                        }, 300);
                      }

                      // on WebSocket open event
                      socket.onopen = function(event) {
                        // get all securities and display their initial data
                        $(".securities").find(".security").each(function() {
                          let securitySlug = $(this).attr("id");
                          $.get("https://nc.ciner.com.tr/sub/htfinans/" + securitySlug, function(data) {
                            displayInitialData(data);
                          });
                        });
                      };

                      // on WebSocket message event
                      socket.onmessage = function (event) {
                        const data = JSON.parse(event.data);
                        updateData(data);
                      };

                      // on WebSocket close event
                      socket.onclose = function (event) {
                        if (event.wasClean) {
                          console.log(`[close] Connection closed cleanly, code=${event.code} reason=${event.reason}`);
                        } else {
                          console.log("[close] Connection died");
                        }
                      };

                      // on WebSocket error event
                      socket.onerror = function (error) {
                        console.log(`[error]`);
                      };
                    });
                </script>
            </td>
        </tr>
    </table>
</div>
<script>
    function scrollTable() {
        var table = document.querySelector('.scrolling-table');
        var container = document.querySelector('.scrolling-table-container');
        var containerWidth = container.offsetWidth;
        var tableWidth = table.offsetWidth;

        if (tableWidth > containerWidth) {
            var scrollAmount = 0;
            var scrollSpeed = 50; // Ayarlayabilirsiniz: 50ms = 0.05 saniye

            function startScroll() {
                scrollAmount++;
                if (scrollAmount >= tableWidth) {
                    scrollAmount = 0;
                }
                container.scrollLeft = scrollAmount;
            }

            setInterval(startScroll, scrollSpeed);
        }
    }

    scrollTable();
</script>
