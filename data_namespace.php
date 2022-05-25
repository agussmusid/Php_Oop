<?php

require_once "namespace.php";
// use namespace
use Data\Satu\Hero as Hero_1;
use Data\Dua\Hero as Hero_2;
// Group use
use Data\Satu\Hero\{Hero2, Hero3};


$hero = new Hero_1();
$hero->name = "zilong" . PHP_EOL;
echo "Nama hero {$hero->name}" . PHP_EOL;

$power = new Hero_2();
$power->role = "fighter";
echo "Role {$power->role}";
