<?php
    $i = 2;
    do {
    echo "$i ";
    $i *= 2;
    } while ($i <= 128);

    echo "<hr>";

    for ($b = 3125; $b >= 5; $b /= 5) {
    echo "$b ";
    }

    echo "<hr>";

    $no = [18,45,29,61,47,34];
    foreach ($no as $mer) {
        $hasil = $mer % 3;
        echo "$mer % 3 = $hasil<br>";
    }

    echo "<hr>";

    $a = 5;
    for ($c=$a; $c>0; $c--){
        for ($d=$a; $d>=$c; $d--){
            echo "*";
        }
        echo "<br>";
    }

    for ($i = 0; $i < 5; $i++){
        for ($a =5; $a > $i; $a--){
            echo "&nbsp;&nbsp;";
        }
        for ($b = 0; $b <= $i; $b++) {
            echo "*";
        }
        echo "<br>";
    }
?>