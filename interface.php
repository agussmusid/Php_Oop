<?php
interface Car
{
    function motor();

    function kopling();
}
// inheritance bisa lebih dari satu
class Mio implements Car
{
    function motor()
    {
        echo "Motor Mio";
    }

    function kopling()
    {
        echo "Matic";
    }
}

$Mio = new Mio();
$Mio->motor() . PHP_EOL;
$Mio->kopling() . PHP_EOL;
