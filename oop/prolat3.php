<?php
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
}
class Aritmatika
{
    public function __construct($bilangan1, $bilangan2)
    {
        $this->bilangan1 = "$bilangan1";
        $this->bilangan2 = "$bilangan2";
    }
    public function tambah()
    {
        return ($this->bilangan1 + $this->bilangan2);
    }
    public function kurang()
    {
        return ($this->bilangan1 - $this->bilangan2);
    }
    public function kali()
    {
        return ($this->bilangan1 * $this->bilangan2);
    }
    public function bagi()
    {
        return ($this->bilangan1 / $this->bilangan2);
    }
    public function modulus()
    {
        return ($this->bilangan1 % $this->bilangan2);
    }}
$aritmatika1 = new aritmatika($bilangan1, $bilangan2);
?>
<html>
    <body>
        <fieldset>
            <legend>Hasil Aritmatika</legend>
            <form action="">
                <table>
                    <tr>
                        <td>Penjumlahan</td>
                        <td> : </td>
                        <td><?php echo $aritmatika1->tambah(); ?></td>
                    </tr>
                    <tr>
                        <td>Pengurangan</td>
                        <td> : </td>
                        <td><?php echo $aritmatika1->kurang(); ?></td>
                    </tr>
                                                                                            <tr>
                        <td>Perkalian</td>
                        <td> : </td>
                        <td><?php echo $aritmatika1->kali(); ?></td>
                    </tr>
                    <tr>
                        <td>Pembagian</td>
                        <td> : </td>
                        <td><?php echo $aritmatika1->bagi(); ?></td>
                    </tr>
                    <tr>
                        <td>Modulus</td>
                        <td> : </td>
                        <td><?php echo $aritmatika1->modulus(); ?></td>
                    </tr>
                </table>
                                                </form>
        </fieldset>
    </body>
</html>