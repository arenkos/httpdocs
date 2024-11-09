<?php include 'database.php'; ?>
<table id="main">
    <tr id="filters-results">
        <td id="filters">
        </td>
        <td id="results">
            <?php
                $sql = "SELECT * FROM teknoloji WHERE baslik LIKE '%$arama%' OR icerik1 LIKE '%$arama%' OR icerik2 LIKE '%$arama%'";
                mysqli_set_charset($connection, "utf8");
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div id="results-row">
                    
                    </div>
                    <br></br>
                    <div id="space-height">
                    </div>
                    <br></br>
            <?php
                }
            ?>
        </td>
    </tr>
</table>
