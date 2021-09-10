<?php
    //$a,$b merupakan sebuah parameter
    function luasSegitiga($a, $b){
        $alas = $a;
        $tinggi = $b;
        $luas = ($alas * $tinggi) / 2;
        return $luas;
    }
    //10,8 merupakan isi dari parameter $a, $b
    echo "Luas Segitiga : ". luasSegitiga(10, 8);
?>