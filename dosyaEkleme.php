<?php

//include("dosyaDeneme.php"); //aynı sayfa birden fazla çağırılabilir
//include_once("dosyaDeneme.php"); 

//echo $degisken; //include ettikten sonra kullanılmalı 

require("dosyaDeneme.php"); //gereklilik arar,dosya yoksa bundan sonra kodlar çalışmaz
//require("dosyaDeneme.ph"); //Çalışmaz
echo $degisken;




?>