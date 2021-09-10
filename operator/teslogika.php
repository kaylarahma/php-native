<?php
    $a = 1;     $c = 10;
    $b = 9;     $d = 11;

    echo "Perbandingan 1 <br>";
    echo "$a < $c = ". ($a < $c);
    echo "<br>($b > $c) && ($c > $b) = ". (($b > $c) && ($c > $b));
    echo "<br>($c > $d) || ($b < $c) = ". (($c > $d) || ($b < $c));
?>
<br><br>

<?php
    $tono = 10000;
    $tini = 8000;
    $toni = 15000;

    echo "Perbandingan 2 <br>";
    echo "1. (Uang Toni = $toni > Uang Tono = $tono) dan (Uang Toni = $toni > Uang Tini = $tini)".
        (($toni > $tono) && ($toni > $tini));

    echo "<br>2. (Uang Toni = $toni > Uang Tini = $tini) dan (Uang Toni = $toni != Uang Tono = $tono)".
        (($toni > $tini) && ($toni < $tono));
?>
<br><br>

<?php
    $us = "Kayla";
    $pw = "123";
    $email = "kaylarahmanisa83@gmail.com";

    echo "Perbandingan 3 <br>";
    echo "Username : $us";
    echo "<br>Password : $pw";
    echo "<br>Login : ". (($us && $pw) && ($us && $pw));

?>