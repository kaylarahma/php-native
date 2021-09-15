<?php
//menggunakan private
class komputer
{
    private $jenisprosesor = "Intel Core 17";

    public function tampilkanjenisprosesor()
    {
        return $this->jenisprosesor;
    }
}
class laptop extends komputer
{
    public function getprosesor()
    {
        return $this->jenisprosesor;
    }
}

$laptop = new laptop();
$komputer = new komputer();

echo $komputer->tampilkanjenisprosesor();
echo $laptop->getprosesor();
