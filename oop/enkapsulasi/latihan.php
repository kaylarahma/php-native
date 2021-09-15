<?php
class caffe
{
    protected $wifi = "Chingu Caffe 267";
    private $pass = "Beli Harus Bayar";

    public function wifi()
    {
        return $this->wifi;
    }
    public function pass()
    {
        return $this->pass;
    }
}
class pembeli extends caffe
{
    public function wifi()
    {
        return $this->wifi;
    }
    public function pass()
    {
        $a = $this->wifi;
        $b = $this->pass;
        if ($a == "Chingu Caffe 267" && $b = "Beli Harus Bayar") {
            $c = "Password Benar";
        }
        return $c;
    }
}

$caffe = new caffe();
$pembeli = new pembeli();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wifi</title>
</head>
<body>
    <fieldset>
        <legend>Akses Wifi Caffe</legend>
    <form action="" method="post">
        <table border=3 width="95%" align="center">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <td><?php echo $caffe->wifi(); ?></td>
                <td><?php echo $caffe->pass(); ?></td>
            </tr>
        </table>
    </form>
    </fieldset>
    <fieldset>
        <legend>Akses Wifi Pembeli</legend>
    <form action="" method="post">
        <table border=3 width="95%" align="center">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <td><?php echo $pembeli->wifi(); ?></td>
                <td><?php echo $pembeli->pass(); ?></td>
            </tr>
        </table>
    </form>
    </fieldset>
</body>
</html>
