<?php

require_once "../abstrak_class.php";

use Data\{Location, Address, Country};

$Address = new Address();
$Address->name = "Lancar";
echo "$Address->name";
