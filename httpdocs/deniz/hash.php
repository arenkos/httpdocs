<?php
$password = "kullanici_sifresi";
$password = "aaaaaaaaaaaaaaaaaaaaaaaaaa";
$password = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
$password = "f638359d0db860cf30cb5e6744986938c70153043efe8a348354b275d87ece74f638359d0db860cf30cb5e6744986938c70153043efe8a348354b275d87ece74";
//$password = "asa";
$hashed_password = hash('sha256', $password);
//echo strlen($hashed_password);
?>
<html>
  <head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://ar-js-org.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>
  <body style="margin: 0; overflow: hidden;">
    <a-scene embedded arjs>
      <a-marker preset="hiro">
        <a-box position="0 0.5 0" material="color: red;"></a-box>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
