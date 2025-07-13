<?php

  //echo "Merhaba ". $_GET["adsoyad"];
 // echo "<br>";
echo "Merhaba ". $_POST["adsoyad"];

  echo "
  <form method='post' action='KureselDegiskenler.php'>
  Ad Soyad: <input type='text' name='adsoyad'> <br>
  <input type='submit' value='Gönder'>
  </form>

  ";

?>