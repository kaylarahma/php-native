<?php
    class komputer {
        public $pemilik = "Kayla Rahmanisa";
        public $merk = "Sony Vaio";
        public $ukuranlayar = "50 inc";

        public function nyala() {
            return "Windows 7";
        }
        public function mati() {
            return "ShutDown";
        }
    }

    $a = new komputer();
    echo "Nama Pemilik : ". $a->pemilik. "<br>";
    echo "Merk PC/Laptop : ". $a->merk. "<br>";
    echo "Ukuran PC/Laptop : ". $a->ukuranlayar. "<br>";
    echo "Ket : ". $a->nyala(). "<hr>";

    $b = new komputer();
    $b->pemilik = "Adya Eka Amelia";
    $b->merk = "ASUS";
    echo "Nama Pemilik : ". $b->pemilik. "<br>";
    echo "Merk PC/Laptop : ". $b->merk. "<br>";
    echo "Ukuran PC/Laptop : ". $b->ukuranlayar. "<br>";
    echo "Ket : ". $b->mati(). "<hr>";

    $c = new komputer();
    $c->pemilik = "Ike Vadila";
    $c->merk = "Lenovo";
    echo "Nama Pemilik : ". $c->pemilik. "<br>";
    echo "Merk PC/Laptop : ". $c->merk. "<br>";
    echo "Ukuran PC/Laptop : ". $c->ukuranlayar. "<br>";
    echo "Ket : ". $c->nyala(). "<hr>";

    $d = new komputer();
    $d->pemilik = "Abelina Aulia";
    $d->merk = "Acer";
    echo "Nama Pemilik : ". $d->pemilik. "<br>";
    echo "Merk PC/Laptop : ". $d->merk. "<br>";
    echo "Ukuran PC/Laptop : ". $d->ukuranlayar. "<br>";
    echo "Ket : ". $d->mati(). "<hr>";

    $e = new komputer();
    $e->pemilik = "Adzura Angelita";
    $e->merk = "HP";
    echo "Nama Pemilik : ". $e->pemilik. "<br>";
    echo "Merk PC/Laptop : ". $e->merk. "<br>";
    echo "Ukuran PC/Laptop : ". $e->ukuranlayar. "<br>";
    echo "Ket : ". $e->nyala(). "<hr>";
?>