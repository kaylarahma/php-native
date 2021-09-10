<?php
    $hobi = [ "Membaca", "Menulis", "Ngeblog"];

    //menambahkan isi pada indeks
    $hobi[3] = "Coding";

    //menimpa indeks yang sudah ada
    $hobi[1] = "Renang";

    //menambahkan isi indeks terakhir
    $hobi[] = "Olahraga";

    //menghapus isi array
    unset ($hobi[2]);

    //cetak array dengan pengulangan
    foreach ($hobi as $hobiku) {
        echo $hobiku. "<br>";
    }
?>