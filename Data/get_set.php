<?php

namespace data;

class Categori
{
    private string $name;
    private bool $expresi;

    function getName(): string
    {
        return $this->name;
    }
    function setName(string $name): void
    {
        $this->name = $name;
    }
    function isExpresi()
    {
        return $this->expresi;
    }
    function setExpresi(bool  $expresi)
    {
        $this->expresi = $expresi;
    }
}

$Categori = new Categori();
$Categori->setName("agus musid");
$Categori->setExpresi(false);

echo $Categori->getName() . PHP_EOL;
echo $Categori->isExpresi();
