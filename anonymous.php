<?php
interface Motor
{
    function Manual();
}
// Class anonymous
$bike = new class implements Motor
{
    function Manual()
    {
        echo "metik";
    }
};
// Objek anonymous
$bike->Manual();
