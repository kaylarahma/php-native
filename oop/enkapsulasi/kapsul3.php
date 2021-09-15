<?php
//menggunakan protected

class komputer
{
    protected $jenisprosesor = "Intel Core 17";

    protected function tampilkanjenisprosesor()
    {
        return $this->jenisprosesor;
    }
}
class laptop extends komputer
{
    public function getprosesor()
    {
        return $this->tampilkanjenisprosesor();
    }
}

$laptop = new laptop();
echo $laptop->getprosesor();
