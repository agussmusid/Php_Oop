<?php

class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "HI $name,my name is {$this->name}";
    }
}

class Meneg extends Manager
{
    function sayHello(string $name)
    {
        echo "HI $name,my name is Meneg {$this->name}";
    }
}

$Manager = new Manager();
$Manager->name = "agus" . PHP_EOL;
$Manager->sayHello("Musid") . PHP_EOL;

$Meneg = new Meneg();
$Meneg->name = "agus" . PHP_EOL;
$Meneg->sayHello("musid") . PHP_EOL;
