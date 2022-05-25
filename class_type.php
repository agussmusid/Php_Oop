<?php
// properties deklarasi
class Person
{
    var string $name;
    // defaul value
    var string $addres = "Lancar";
    // null properties
    var ?string $country = null;
}

$out = new Person();

var_dump($out);
