<?php
trait sayGoodbay
{
    function goodBay(?string $name)
    {
        if (is_null($name)) {
            echo "goodBay";
        } else {
            echo "Good by $name";
        }
    }
}

trait sayHello
{
    function Hello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello !";
        } else {
            echo "Hello $name !";
        }
    }
}
class Wong
{
    use sayGoodbay, sayHello;
}

// Kode Trait Inheritance
trait All
{
    use sayGoodbay, sayHello;
}
// Kode Trait Inheritance
class Sapa
{
    use All;
}

$Wong = new Wong();
$Wong->Hello("agus musid") . PHP_EOL;
$Wong->goodBay("agus musid") . PHP_EOL;

$Sapa = new Sapa();
$Sapa->Hello("Dimas") . PHP_EOL;
