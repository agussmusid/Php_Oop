<?php

class Manager
{
    var string $name;

    function sayhello(string $name)
    {
        echo "Hello $name ,my name is $this->name";
    }
}

class VicePresident extends Manager
{
}

$p = new VicePresident();
$p->name = "agus";
$p->sayhello("musid");

$induk = new Manager();
$induk->name = "dimas";
$induk->sayhello("adi");
