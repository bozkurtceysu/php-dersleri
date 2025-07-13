<?php

//header("Location:https://www.youtube.com/watch?v=nzxCYxFOmec&list=PLQlzUjV4jUuQQuEQj0qZJU7VhLaWTG2yV&index=10"); //Sayfa yönlendirme
//header("Refresh:5; Url=https://www.youtube.com/watch?v=nzxCYxFOmec&list=PLQlzUjV4jUuQQuEQj0qZJU7VhLaWTG2yV&index=10"); //5 sn bekle sonra yönlendirme
//die("5 saniye sonra Yönlendiriliyorsunuz"); //beklenen sürede sayfada mesaj verip ve altta yazan kodları çalıştırmaz

$bugun=getdate();//Bir dizidir
print_r($bugun);
echo "<br>";
echo $bugun["year"]."<br>"; //anakhtar kullanarak bilgiye ulaşma

  echo "Bugün ". date("d-m-Y H:i:s")."<br>"; //gün-ay-yıl ve saat-dakika-saniye

  echo "Bugün yılın ". date("z"). ".günüdür"."<br>"; //Yılın kaçıncı günü olduğu

  echo "Bu hafta yılın ". date("W").".haftasıdır"."<br>";//Yılın kaçıncı haftası

  echo "Bu ay toplam " . date("t"). "gün çekmektedir";//Ayın kaç gün olduğu

  





?> 