<?php
    $akademik = 9;
    $atletik = 83;
    $rumus = ($akademik >= 85 && $atletik >=83) ? "Lulus" : "Tidak Lulus";

    echo "<b>Menggunakan Fungsi Oprasi logika, perbandingan dan ternary </b> <br>";
    echo "<br>Nilai Akademik : <b>$akademik</b>";
    echo "<br>Nilai Atletik : <b>$atletik</b>";
    echo "<br>Keterangan : <b>$rumus</b>";
?>