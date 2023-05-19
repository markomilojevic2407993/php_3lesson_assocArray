<?php

$osobe=[
    "Jovana"=>[
        "prezime"=>"Kosanovic",
        "godine"=>30,
        "programer"=>false,
    ],
    "Bojana"=>[
        "prezime"=>"Ivanisevic",
        "godine"=>26,
        "programer"=>true,
    ],
];

$osobe["Marko"]=[
    "prezime"=>"Milojevic",
    "godine"=>30,
    "Programer"=>true,
];


$osobeKey=array_keys($osobe);
$osobeValue=$osobe[$osobeKey[0]];
$osobeValuePrezime=array_column($osobe, "prezime");

var_dump($osobeValuePrezime) ;





?>