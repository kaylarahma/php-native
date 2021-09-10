<?php
    $score = 0;

    $score++;
    $score++;
    $score++;
    
    echo $score;
?>
<br><br>
<?php
    $a = 6;
    $b = 2;
    
    // menggunakan operator relasi lebih besar
    $c = $a > $b;
    echo "$a > $b: $c";
    echo "<hr>";
    
    // menggunakan operator relasi lebih kecil
    $c = $a < $b;
    echo "$a < $b: $c";
    echo "<hr>";
    
    // menggunakan operator relasi lebih sama dengan
    $c = $a == $b;
    echo "$a == $b: $c";
    echo "<hr>";
    
    // menggunakan operator relasi lebih tidak sama dengan
    $c = $a != $b;
    echo "$a != $b: $c";
    echo "<hr>";
    
    // menggunakan operator relasi lebih besar sama dengan
    $c = $a >= $b;
    echo "$a >= $b: $c";
    echo "<hr>";
    
    // menggunakan operator relasi lebih kecil sama dengan
    $c = $a <= $b;
    echo "$a <= $b: $c";
    echo "<hr>";
?>

<?php
    $total_belanja = 150000;

    if($total_belanja >= 100000){
        echo "Anda dapat hadiah!";
    } else {
        echo "Anda gagal, Coba lagi!";
    }
?>
<br><br>
<?php
    $a = true;
    $b = false;
    
    // variabel $c akan bernilai false
    $c = $a && $b;
    printf("%b && %b = %b", $a,$b,$c);
    echo "<hr>";
    
    // variabel $c akan bernilai true
    $c = $a || $b;
    printf("%b || %b = %b", $a,$b,$c);
    echo "<hr>";
    
    // variabel $c akan bernilai false
    $c = !$a;
    printf("!%b = %b", $a, $c);
    echo "<hr>";
?>