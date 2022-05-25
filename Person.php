<?php

class Person
{
    var string $name;
    var string $addres;

    function __construct(string $name, string $addres)
    {
        $this->name = $name;
        $this->addres = $addres;
    }

    function __destruct()
    {
        echo "Objek person {$this->name}is destroyed";
    }
}
