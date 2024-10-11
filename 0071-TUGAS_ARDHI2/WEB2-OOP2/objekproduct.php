<?php
    require_once "product.php"; 
    require_once "produkturunan.php";

    //membuat objek product
    $product = new product("APPLE",2000);

    //menampilkan info name dan price
    echo $product->getname();
    echo "<br>";
    echo $product->getprice();

    $product2 = new produkturunan("NANAS",3000);
    $product2->info();
?>