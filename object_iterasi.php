<?php

class Data
{
    var string $name = "agus";
    public int $age = 18;
    protected string $address = "Lancar";
    private string $hobby = "programing";
}

$Data = new Data();

foreach ($Data as $get) {
    echo $get . PHP_EOL;
}

function Get(int $value): iterator
{
    for ($i = 0; $i <= $value; $i++) {
        if ($i % 2 == 1) {
            // Keyword iterator
            yield $i;
        }
    }
}

// Generator untuk iterasi
$ganjil = Get(100);
foreach ($ganjil as $get) {
    echo "Ganjil : $get \n";
}
