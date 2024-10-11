<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function mahmod()
    {
        dd("hello again");
    }
    public function printName($name = "username")
    {
        dd("hello $name again");
    }
}
