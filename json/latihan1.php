<?php 

    $mahasiswa = 
    [
        [
            "nama"  => "Reza Pahlevi",
            "umur"  => 21,
            "nrp"   => 22042019
        ],
        [
            "nama"  => "Reza Pahlevi",
            "umur"  => 21,
            "nrp"   => 22042019
        ],
        [
            "nama"  => "Reza Pahlevi",
            "umur"  => 21,
            "nrp"   => 22042019
        ],
    ];
    

    $data = json_encode($mahasiswa);

    echo $data;
    
?>