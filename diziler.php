<?php

$ogrenciler$=array(4,5,7,8,"Ali","Ahmet");
  $ogrenciler=array();
  $ogrenciler[]=45;
  $ogrenciler[]="Ceysu";
  echo $ogrenciler[5]; 
  foreach($ogrenciler as $ogrenci){
    echo "$ogrenci -";
  }

  
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

    foreach($ogrenciler as $ogrenci){
        echo $ogrenci["adsoyad"]." ". $ogrenci["not"];
        
    }






?>