<?php

namespace App\Utils;

use App\Models\EC;

class Hello
{
    public static function sayHello()
    {
        $test = EC::with('users')->get();
        return $test;
    }
}