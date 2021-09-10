<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h3>BILANGAN</h3>
    <form method="post">			
        <input type="text" name="bil1" placeholder="Masukkan bil 1"><br><br>
        <input type="text" name="bil2" placeholder="Masukkan bil 2"><br><br>
		<input type="submit" name="Hitung" value="Hitung">										
	</form> 
</body>
</html>

<?php 
	if(isset($_POST['Hitung'])){
		$bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
		    $hasil = $bil1+$bil2;
			$hasil2 = $bil1-$bil2;
			$hasil3 = $bil1*$bil2;
			$hasil4 = $bil1/$bil2;

        echo "<br>HASILNYA : <br>";
        echo "$bil1 + $bil2 = $hasil<br>";
        echo "$bil1 - $bil2 = $hasil2<br>";
        echo "$bil1 x $bil2 = $hasil3<br>";
        echo "$bil1 : $bil2 = $hasil4<br>";
	}
    ?>