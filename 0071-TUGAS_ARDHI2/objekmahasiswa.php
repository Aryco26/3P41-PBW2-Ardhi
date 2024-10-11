<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("ARDHI","23.240.0071","3P41");

    $mahasiswa1->nama = "ARDHI RAHARDHIAN YUDISTIRA";
    $mahasiswa1->nim = "23.240.0071";
    $mahasiswa1->kelas = "3P41";

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);
    $Mmahasiswa2 = new mahasiswa("MARSYA","23.240.0070","3P41");

    $Mmahasiswa2->nama = "MARSYA VANYA";
    $Mmahasiswa2->nim = "23.240.0070";
    $Mmahasiswa2->kelas = "3P41";

    echo "NAMA : $Mmahasiswa2->nama <br>";
    echo "NIM : $Mmahasiswa2->nim <br>";
    echo "KELAS : $Mmahasiswa2->kelas <br>";
    echo $Mmahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($Mmahasiswa2);
?>