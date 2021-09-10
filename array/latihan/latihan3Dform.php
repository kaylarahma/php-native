<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Abelina Nur Aulia",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Nari"],
            ["Hobi" => "Renang"]]],

            [ "nama" =>"Aditya Riman",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "Sejarah"]],
            
            "Hobi" => [
            ["Hobi" => "Main Bola"],
            ["Hobi" => "Game"]]],

            [ "nama" => "Adya Eka",
            "MataKuliah" => [
            ["MataKuliah" => "PPKN"],
            ["MataKuliah" => "BK"],
            ["MataKuliah" => "Matematika"]],

            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "kuliner"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Jojo Susanto",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>"Kayla Rahmanisa",
            "MataKuliah" => [
            ["MataKuliah" => "Fisika"],
            ["MataKuliah" => "Kimia"],
            ["MataKuliah" => "Biologi"]],
            
            "Hobi" => [
            ["Hobi" => "Nyanyi"],
            ["Hobi" => "Dance"]]],

            [ "nama" => "Lira Rahmawati",
            "MataKuliah" => [
            ["MataKuliah" => "PPKN"],
            ["MataKuliah" => "IPA"],
            ["MataKuliah" => "IPS"]],

            "Hobi" => [
            ["Hobi" => "Ngoding"],
            ["Hobi" => "Lari"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kampus</title>
    </head>
    <body>
        <fieldset>
        <legend>Data Kampus</legend>
        <table border="4" width="100%" align="center">
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ;
            foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
        ?>
        <ul><tr>
                <td><?php echo $no ++; ?></td>
                <td><?php echo $val['nama']; ?></td>
                <td><?php echo $menu['dosen']; ?></td>
                  
            <?php echo "<td>";
                foreach($val['MataKuliah'] as $sub) { ?>
                    <?php echo "<li>". $sub['MataKuliah']. "</li>"; ?>
                    <?php } echo "</td>"; ?>

            <?php echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                } echo "</td>";
              }
            }
            ?>
            </tr>
            </ul>
        </table>
        </fieldset>
    </body>
    </html>