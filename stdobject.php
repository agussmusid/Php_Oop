<?php
// mengubah array menjadi objek
$array = [
    "firstname" => "agus",
    "lastname" => "musid"
];

$objek = (object)$array;
var_dump($objek);
echo $objek->firstname . PHP_EOL;
echo $objek->lastname . PHP_EOL;
// Mengembalikan ke array!
$malih = (array)$objek;
var_dump($malih);
