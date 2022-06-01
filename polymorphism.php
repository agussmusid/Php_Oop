<?php
class programer
{
    var string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}

class beckendprogramer extends programer
{
}
class frontendprogramer extends programer
{
}
class company
{
    var programer $programer;
}

function sayHelloo(programer $programer)
{
    if ($programer instanceof beckendprogramer) {
        echo "Hello beckendprogramer $programer->name";
    }
}
$company = new company();
$company->programer = new programer("agus");
