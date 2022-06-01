<?php
// Final class
class SocialMedia
{
    var string $name;
}
final class Instagram extends SocialMedia
{
}


// Akan error
// class Facebook extends Instagram
// {
// }

// FInal function

class Media
{
    final function Hello(string $name)
    {
        return $name;
    }
}
// Ini juga akan error gara" final function
// class News extends Media
// {
//     function Hello()
//     {
//     }
// }
