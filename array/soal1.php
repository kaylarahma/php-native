<?php
    $matrik = [
            //Kolom 0  1  2
    /*Baris 0*/    [2, 3, 4],
    /*Baris 1*/    [7, 5, 0],
    /*Baris 2*/    [4, 3, 8],
    ];

    //indeks[] pertama adalah baris
    //indeks[] pertama adalah kolom
    foreach ($matrik as $key => $value) {
        echo "Baris $key : $value[0], $value[1], $value[2] <br>";
    }
?>