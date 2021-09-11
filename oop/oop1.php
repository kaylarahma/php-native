<?php
    class Kucing {
        //properti atau atribut atau field
        public $warna = "Coklat";
        public $jumlahkaki = 4;
        public $jenisbulu = "Panjang";
        public $makananfav = "Wiskas";

        //method
        public function bersuara() {
            return "meoww....meow....";
        }
        public function berburu() {
            return "Berburu ikan";
        }
    }

    //membuat objek
    $kucing1 = new Kucing();
    echo "Warna Kucing : ". $kucing1->warna. "<br>";
    echo "Sifat Kucing : ". $kucing1->bersuara(). "<hr>";

    //merubah value warna kucing
    $kucing2 = new Kucing();
    $kucing2->warna = "Oyen";
    echo "Warna Kucing : ". $kucing2->warna. "<br>";
    echo "Sifat Kucing : ". $kucing2->berburu(). "<hr>";
?>