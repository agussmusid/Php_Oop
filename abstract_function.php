<?php

namespace data;

abstract class Animal
{
    public string $name;

    public abstract function Run();
}

class Asu extends Animal
{
    public function Run()
    {
        echo "Cat $this->name is running";
    }
}

$Animal = new Asu();
$Animal->name = "moci";
$Animal->Run();
