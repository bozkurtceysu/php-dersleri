<?php

$metin="Ceysu Hatice Bozkurt";
 echo"MD5 Şifreleme: ".md5($metin); //şifrelenmiş hali 32 haneli 16lık tabanda
 echo "<br>";
 echo "SHA1 Şifreleme: ".sha1($metin)."<br>"; //daha güvenli yol

 echo sha1(md5($metin))."<br>"; //Kırılması ve bulunması zor bir string ifade
//base64 ve crc32 daha basit düzeyde 

echo "BASE64 Şifreleme: ".base64_encode($metin)."<br>";
echo "BASE64 Çözme: ".base64_decode(base64_encode($metin));







?>
