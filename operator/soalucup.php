<?php
    $uangucup = 50000;
    echo "Uang Ucup = <b> $uangucup </b> <br>";
    echo "<hr>";

    $minum = 15000;
    $uangucup -= $minum;
    echo "beli minum = <b> $minum </b> <br> ";
    echo "sisa uang = <b> $uangucup </b> <br>";
    echo "<hr>";
   
    $sosis = 25000;
    $uangucup -= $sosis;
    echo "beli sosis = <b> $sosis </b> <br>";
    echo "sisa uang = <b> $uangucup </b> <br>";
    echo "<hr>";

    $sedekah = $uangucup * 0.1;
    $uangucup = $uangucup - $sedekah;
    echo "sedekah 10% = <b> $sedekah </b> <br>";
    echo "sisa uang = <b> $uangucup </b> <br>";
    echo "<hr>";

    $nemu = $uangucup * 0.5;
    echo "nemu uang 50% dari sisa uang $uangucup = <b> $nemu </b> <br>";
    $uangucup = $uangucup + $nemu;
    echo "sisa uang = <b> $uangucup </b> <br>";
    echo "<hr>";

    echo "sisa uang ucup adalah <b> Rp.$uangucup </b>";
?> 