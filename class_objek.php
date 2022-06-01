<?php
// struktur membuat class pada php
class People
{
    var $name;
    var $address;
    var $country;
}
// struktur membuat object pada php

$Person = new People();
$Person->name = "agus";
$Person->address = "lancar";
$Person->country = "indonesia";
var_dump($Person);
// manipulasi string
echo "Name : {$Person->name}" . PHP_EOL;
echo "address : {$Person->address}" . PHP_EOL;
echo "Country : {$Person->country}" . PHP_EOL;

$Person2 = new People();
$Person2->name = "eko";
$Person2->address = "sabrang";

echo "Nama : {$Person->name}";
