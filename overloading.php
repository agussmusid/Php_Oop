<?php

class Zero
{
    private array $properties = [];
    // Di eksekusi ketika mengakses properties yg tidak tersedia
    function __get($name)
    {
        return $this->properties[$name];
    }
    // Di ekseskusi ketika mengubah properties yang tidak tersedia
    function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        return ($this->properties[$name]);
    }
}

$Zero = new Zero();
$Zero->firstname = "agus";
$Zero->lastname = "musid";
$Zero->empty = true;
$Zero->kosong = null;

echo "firstname : {$Zero->firstname}" . PHP_EOL;
echo "firstname : {$Zero->lastname}" . PHP_EOL;
echo $Zero->empty;
echo $Zero->kosong;
