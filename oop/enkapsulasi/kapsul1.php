<?php
//menggunakan public
class laptop
{
    public $pemilik;
    public function nyala()
    {
        return "Hidupkan Laptop";
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik . "<br>";
echo $laptopAnto->nyala();
