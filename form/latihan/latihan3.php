<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <form action="" method="post">
            <h3>MASUKAN BINTANG</h3>
            <input type="text" name="bintang" placeholder="Masukan jumlah Bintang" required>
            <button type="submit" name="buat">Buat</button>
        
    </form>
</body>
</html>

<?php 

if(isset($_POST['buat'])){
    $bintang = $_POST['bintang'];

    for($i = 1; $i <= $bintang; $i++){
        for($j = $bintang; $j >= $i; $j--){
            echo "&nbsp";
        }
        for($k = 1; $k <= $i; $k++){
            echo "*";
        }
        echo "<br>";
    }

    echo " ";

    for($l = $bintang; $l >= 1; $l--){
        for($m = $bintang; $m >= $l; $m--){
            echo "&nbsp";
        }
        for($n = 1; $n <= $l; $n++){
            echo "*";
        }
        echo "<br>";
    }
}