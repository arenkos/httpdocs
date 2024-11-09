<?php
session_start();
$_SESSION = "";
?>
<meta http-equiv="refresh" content="0; URL=ana.php">
<?php
session_destroy();
?>