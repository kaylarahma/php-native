<?php
    function hitungUmur($thn_lahir, $thn_now) {
        $umur = $thn_now - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam. ", Perkenalkan Nama Saya ". $nama. "<br/>";
        echo "Saya berusia " . hitungUmur(2004, 2021) . " tahun <br/>";
        echo "Senang berjumpa dengan kalian<br/>";
    }
    echo perkenalan("Kayla Rahmanisa");
?>