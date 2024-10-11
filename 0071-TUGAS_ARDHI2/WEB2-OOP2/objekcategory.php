<?php
    require_once "category.php";

    $objcategory = new category();
    //untuk instan variabel tidak lagi menggunakan seperti ini
    // $objcategory->name="handphone";
    $objcategory->setname("handphone");
    $objcategory->setexpensive(true);

    //mengakses data
    echo "NAME : {$objcategory->getname()}";
    echo "<br>";
    echo "EXPENSIVE : {$objcategory->isexpensive()}";
?>