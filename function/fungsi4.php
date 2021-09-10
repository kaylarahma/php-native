<?php
    //default parameter(parameternya udah di isi)
    function pertambahan($bil, $bil2=2){
        return $bil+$bil2;
    }

    echo pertambahan(10,10). "<br>"; 
    //hasilnya 20 karna isi parameter bil2 sudah diganti jdi 10

    echo pertambahan(10). "<br>";
    //hasilnya 12

?>