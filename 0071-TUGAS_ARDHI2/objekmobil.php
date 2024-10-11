<?php
    //INCLUDE CLASS MOBIL.PHP
    require_once "mobil.php";

    //INISIALISASI VARIABEL (OBJEK) MOBILSATU
    $mobilsatu = new mobil("AVANZA","TOYOTA");
    $mobilsatu->tahun = 2019;

    //MENAMBAHKAN PROPERTIES PADA OBJEK MOBILSATU
    $mobilsatu->nama = "AVANZA";
    $mobilsatu->merk = "TOYOTA";
    $mobilsatu->warna = "HITAM";
    $mobilsatu->tahun = 2019;
    $mobilsatu->kecepatanmaks = 1300;

    //MENAMPILKAN INFORMASI OBJEK MOBILSATU
    echo "NAMA : $mobilsatu->nama <br>";
    echo "MERK : $mobilsatu->merk <br>";
    echo "WARNA : $mobilsatu->warna <br>";
    echo "TAHUN : $mobilsatu->tahun <br>";
    echo "KECEPATAN MAKS : $mobilsatu->kecepatanmaks <br>";

    //MENGAKSES FUNCTION/METHOD
    $mobilsatu->tambahkecepatan();

    //MEMBUAT OBJEK MOBILDUA
    $mobildua = new mobil("BRIO",null);
    $mobildua->tahun = 2020;

    echo "<br>";

    //MENGAKSES FUNCTION INFOMOBIL()
    echo $mobilsatu->infomobil();
    echo "<br>";
    echo $mobildua->infomobil();

    echo "<br>";

    //MEMANGGIL DAN MENAMPILKAN CONSTANT
    echo mobil::AUTHOR;

    echo "<br>";

    //MENAMBAHKAN PROPERTIES PADA OBJEK MOBILDUA
    $mobildua->nama = "BRIO";
    $mobildua->merk = "HONDA";
    $mobildua->warna = "MERAH";
    $mobildua->tahun = 2018;
    $mobildua->kecepatanmaks = 1000;

    //MENAMPILKAN INFORMASI OBJEK MOBILDUA
    var_dump($mobildua);
?>