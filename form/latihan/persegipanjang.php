<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PERSEGI PANJANG</h3>
    <form method="POST">
        PANJANG : <input type = "text" name ="pjg">
        LEBAR   : <input type = "text" name ="lbr">
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $pjg = $_POST['pjg'];
        $lbr = $_POST['lbr'];
        $luas = $pjg * $lbr;

        echo "<br>Panjang : $pjg";
        echo "<br>Lebar : $lbr";
        echo "<br>Luas : $luas";
    }
?>