<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Input">
        </FORM>
    </body>
</html>

<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        masukan jumlah bintang : 
        <input type="text" nama="btg" required>
        <input type="submit" nama="masuk" value="masuk">
    </form>
</body>
</html>