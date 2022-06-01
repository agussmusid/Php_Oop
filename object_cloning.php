<?php
class Student
{
    public string $name;
    public string $departement;
    public int $value;

    function __clone()
    {
        unset($this->value);
    }
}

$student1 = new Student();
$student1->name = "Agus Musid";
$student1->departement = "Rekayasa Perangkat Lunak";
$student1->value = 100;

echo "Nama : {$student1->name}" . PHP_EOL;
echo "Jurusan : {$student1->departement}" . PHP_EOL;
echo "Nilai : {$student1->value}" . PHP_EOL;

echo "===== Output Cloning =====" . PHP_EOL;

$student2 = clone $student1;
$student2->departement;
$student2->name;
echo $student2->departement . PHP_EOL;
echo $student2->name;
