<h1>Merhaba HTML </h1>


<?php
  echo "<h1>Merhaba PHP ECHO </h1>";
  print "<h1>Merhaba PHP PRİNT</h1>";

  $degisken1=30;
  $degisken2=15;
  $degisken3="Ceysu";

  $sonuc=$degisken3.$degisken1;
  
  echo "<h1>$degisken1</h1>";
  echo $sonuc;
  echo"<br>";
  echo "$sonuc";
  echo "<br>";
  echo $degisken1.$degisken3;
  echo "<br>";
  echo '$degisken3.$degisken1';
  //Karşılaştırma operatörleri 
  == //Eşittir
  === //Denktir
  != //Eşit Değildir
  <> //Farklıdır
  && //AND Ve
  || //OR Veya
  ! //NOT Değil


  $sayi1="50"; //Değeri 50,Veri türü String
  ($sayi1==50) //Eşittir sadece değere bakar
  ($sayi1===50) //Denktir veri türüne de bakar

  $ogrenciler$=array(4,5,7,8,"Ali","Ahmet");
  $ogrenciler=array();
  $ogrenciler[]=45;
  $ogrenciler[]="Ceysu";
  echo $ogrenciler[5]; //Ahmet 
  foreach($ogrenciler as $ogrenci){
    echo "$ogrenci -";
  }

  //Çok Boyutlu Diziler
  $ogrenciler=array();
  $ogrenciler[0]=array("adsoyad"=>"Fatih","not"=>"60");
  $ogrenciler[1]=array("adsoyad"=>"Mehmet","not"=>"70"); //Verdiğimiz anahtarlar dizide aynı olmalı

    $ogrenciler=array(
     array("adsoyad"=>"Fatih","not"=>"60"),
     array("adsoyad"=>"Mehmet","not"=>"70")
    );

    $ogrenciler=array();
    $ogrenciler[0]["adsoyad"]="Fatih";
    $ogrenciler[0]["not"]="60";
    $ogrenciler[1]["adsoyad"]="Mehmet";
    $ogrenciler[0]["not"]="70";

    echo $ogrenciler[0]["adsoyad"];
    echo "-";
    echo $ogrenciler[0]["not"];
    echo "<br>";

    echo $ogrenciler[1]["adsoyad"];
    echo "-";
    echo $ogrenciler[1]["not"];










  


?>
<?="<h1>Merhaba PHP SHORT TAGS </h1>"?>  