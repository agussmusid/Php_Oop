<?php

require_once "../visibility.php";

$harga = new Prouduct("jeruk", 10000);
echo $harga->getName() . PHP_EOL;
echo $harga->getPrice();
