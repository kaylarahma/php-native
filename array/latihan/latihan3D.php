<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Abelina Aulia",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Nari"]]],

            [ "nama" => "Adya Eka",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Kayla Rahmanisa",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],["Hobi" => "Dance"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Adi Chandra",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Nari"]]],

            [ "nama" => "Aditya Riman",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Jojo Susanto",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],["Hobi" => "Dance"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {             
                echo "<li>". $sub['MataKuliah']. "</li>";
            } echo "</ol>";
            
            echo "<ol>";
            echo "Daftar Hobi : ";
            foreach($menu['Hobi'] as $hobi) {
                echo "<li>". $hobi['Hobi']. "</li>";
        } echo "</ol>";
    } echo "</ul>";
    }
?>