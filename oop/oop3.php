<?php
    class Kucing {
        //properti atau atribut atau field
        public $warna;

        //construct mrpkn method yang akan dipanggil pertama kali
        public function __construct($warna){
            $this->warna = $warna;
        }
        //method
        public function bersuara() {
            return "meoww....meow....";
        }
        public function berburu() {
            return "Berburu ikan";
        }
    }

    //membuat objek
    $kucing1 = new Kucing("Hitam");
    echo "Warna Kucing : ". $kucing1->warna. "<br><hrr>";

    $kucing2 = new Kucing("Oyen");
    echo "Warna Kucing : ". $kucing2->warna. "<br>";
?>