<?php
    echo "No.1<br>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo $j + $i." ";
        } echo "<br>";
    }
    echo "<hr>";
    echo "No.2<br>";
    $nilai = 0;
    for ($a = 1; $a <= 10; $a++) {
        $nilai += 2;
        for ($b = 1; $b <= $a; $b++) {
            echo $b + $nilai." ";
        } echo "<br>";
    } 
?>