<?php
 
  //function yang tidak mengembalikan nilai
  function tampilkan(){
       echo "ini adalah fungsi yang tidak mengembalikan nilai";                                           
  }
  tampilkan();
  //function yang mengembalikan nilai
  function perkalian($nilai1,$nilai2){
     $hasilnya = $nilai1 * $nilai2;
     return $hasilnya;                                             
  }
  echo(perkalian(7,8));