<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>LINGKARAN</h3>
    <form method="POST">
        JARIJARI : <input type = "text" name ="jr">
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $jr = $_POST['jr'];
        $luas = 3.14 * $jr;

        echo "<br>Luas : $luas";
    }
?>