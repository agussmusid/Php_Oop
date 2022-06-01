<?php

namespace data;

abstract class Location
{
    var string $name;
}

class Address extends Location
{
}

class Country extends Location
{
}
