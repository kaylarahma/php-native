  <?php
    $nilai = 90;

    if ($nilai >= 90) {
        echo "GRADE A";
    } else if ($nilai >= 80) {
        echo "GRADE B";
    } else if ($nilai >= 70) {
        echo "GRADE C";
    } else if ($nilai >= 60) {
        echo "GRADE D";
    } else if ($nilai < 60 ) {
        echo "GRADE E";
    } else {
        echo "Nilai Tidak Terbaca";
    }

    $grade = "A" ;
    switch ($grade) {
        case 'A' : $ket = "Pertahankan"; break;
        case 'B' : $ket = "Harus Lebih Baik Lagi"; break;
        case 'C' : $ket = "Perbanyak Belajar"; break;
        case 'D' : $ket = "Jangan Keseringan Main"; break;
        case 'E' : $ket = "Kebanyakan Bolos"; break;
        default    : $ket = "Format Tidak Sesuai";
    } echo "<hr>"; echo "<br>$ket";

        echo "<hr>";
        echo "<br>Nilai : $nilai <br>";
        echo "Grade : $grade <br>";
        echo "Keterangan : $ket <br>";
    
?>
