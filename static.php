<?php

// Static keyword pada class
class Math
{
    static string $Name = "Susah";

    // Static pada function
    static public function Sum(int ...$number)
    {
        $total = 0;
        foreach ($number as $angka) {
            $total += $angka;
        }
        return $total;
    }
}

echo "Matematika : ", Math::$Name . PHP_EOL;
$total = Math::Sum(5, 5, 5, 5, 5);
echo "Hasil : $total" . PHP_EOL;
