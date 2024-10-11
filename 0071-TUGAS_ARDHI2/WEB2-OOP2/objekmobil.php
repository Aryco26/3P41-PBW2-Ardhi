<?php
    require_once "mobil.php";
    require_once "mobilsport.php";

    //objek dari class mobil
    $avanza = new mobil ("AVANZA","TOYOTA",2020);
    echo $avanza->infomobil();

    echo "<br>";

    //objek dari class mobilsport
    $supra = new mobilsport("SUPRA","TOYOTA",2021);
    echo $supra->infomobil();

    echo "<br>";
    
    echo $supra->jalankanturbo();
?>