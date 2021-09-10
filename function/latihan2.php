<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Function Hitung Lingkaran</legend>
        <form action="" method="post">
            Masukan Jari-jari : 
            <input type="number" name="jari" id="">
            <input type="submit" name="Hitung" value="Hitung">
        </form><br>
        <?php
            if (isset($_POST['Hitung'])) {
                function luas($jari, $phi=3.14){
                    $luas = $jari * $jari * $phi;
                    return $luas;
                }
    
                function keliling($jari, $phi=3.14) {
                    $keliling = ($jari * $phi) * 2;
                    return $keliling;
                }

                echo "Jari - jari : ". $_POST['jari']. "<br>";
                echo "Luas        : ". luas($_POST['jari']). "<br>";
                echo "Luas        : ". keliling($_POST['jari']). "<br>";
            }
        ?>
    </fieldset>
</body>
</html>