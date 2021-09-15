<?php
//menggunakan protected
class laptop
{
    public $pemilik;
    protected function nyala()
    {
        return "Hidupkan Laptop";
    }
    public function paksanyala()
    {
        return $this->nyala();
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik . "<br>";
echo $laptopAnto->paksanyala();
