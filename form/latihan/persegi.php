<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PERSEGI</h3>
    <form method="POST">
        SISI : <input type = "text" name ="sisi">
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $sisi = $_POST['sisi'];
        $luas = $sisi * $sisi;

        echo "<br>Sisi : $sisi";
        echo "<br>Luas : $luas";
    }
?>