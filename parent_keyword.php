<?php

class shape
{
    function getCorner(): int
    {
        return 0;
    }
}

class rectangle extends shape
{
    function getCorner(): int
    {
        return 4;
    }

    function getparentcorner(): int
    {
        return parent::getCorner();
    }
}

$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getparentcorner();
