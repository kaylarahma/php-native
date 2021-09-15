<?php
class orangtua
{
    protected $noATM = "111-222-333-444";
    private $pinATM = "001122";

    public function noATM()
    {
        return $this->noATM;
    }
    public function pinATM()
    {
        return $this->pinATM;
    }
}
class anak extends orangtua
{
    public function noATM()
    {
        return $this->noATM;
    }
    public function pinATM()
    {
        return $this->pinATM;
    }
}

$oarangtua = new orangtua();
$anak = new anak();

//ingin mengetahui data atm dari object orangtua
echo "No Kartu ATM : " . $oarangtua->noATM() . "<br>";
echo "Pin ATM : " . $oarangtua->pinATM() . "<hr>";

//anak ingin mengatahui data dari class orang tua
echo "No Kartu ATM : " . $anak->noATM() . "<br>";
echo "Pin ATM : " . $anak->pinATM() . "<br>";
