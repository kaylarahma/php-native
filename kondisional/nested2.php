<?php
    $member = "ya";
    $totalbelanja = 50000;
    $disc = 0;
    $totalharga = 0;

    if ($member == "ya") {
        if ($totalbelanja >= 250000) {
            $disc = 0.1 * $totalbelanja;
        } else if ($totalbelanja >= 100000) {
            $disc = 0.5 * $totalbelanja;
        }
    } else {
        if ($totalbelanja >= 100000) {
            $disc = 0.025 * $totalbelanja;
        }
    }

    $totalharga = $totalbelanja - $disc;
    echo "kartu member : $member<br>";
    echo "total belanja : $totalbelanja<br>";
    echo " diskon : $disc";
    echo " total yang harus di bayar : $totalharga";
?>