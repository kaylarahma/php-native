<?php
    $artikel = [
        ["judul" => "Belajar Php dan MYSQL untuk pemula",
         "penulis" => "petani kode"],

        ["judul" => "Tutorial PHP dari nol hingga akhir",
         "penulis" => "petani kode"],

        ["judul" => "Membuat aplikasi web dengan PHP",
         "penulis" => "petani kode"],
    ];

    foreach ($artikel as $post) {
        echo "<h2>". $post["judul"]. "</h2>";
        echo "<p>". $post["penulis"]. "</p>";
        echo "<hr>";
    }
?>