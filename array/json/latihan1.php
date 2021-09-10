<?php
    // mengubah array menjadi json (encode)

    $dataMhs = [
    ["nama"=>"Mahmud","domisili"=>"Bandung"],
    ["nama"=>"Udin","domisili"=>"Tasik"],
    ["nama"=>"Encep","domisili"=>"Majalaya"],
    ["nama"=>"Entis","domisili"=>"Ciamis"]
];

    echo json_encode($dataMhs); 
?>