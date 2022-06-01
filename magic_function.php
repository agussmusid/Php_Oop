<?php
// magic functio __tostring()
class Siswa
{
    public string $name;
    public float $floatingg;
    public int $semester;

    function __toString()
    {
        return "Nama : $this->name,University : $this->floatingg,Semester : $this->semester";
    }
}

$siswa = new Siswa();
$siswa->name = "agus" . PHP_EOL;
$siswa->floatingg = 2.1 . PHP_EOL;
$siswa->semester = 6;
var_dump($siswa->__toString());

echo "===== __call =====\n";

class Siswi
{
    // magic functio __call->di eksekusid ketika memanggil function yang tidak tersedia
    function __call($name, $arguments)
    {
        $join = join($arguments);
        echo "Call function $name with argument $join";
    }
}
$Siswi = new Siswi();
$Siswi->sayHello("agus", "musid", "lancar", 1);

var_dump($Siswi->sayHello());
