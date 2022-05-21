<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2) {
        echo "The sum of $p1 and $p2 is: ".($p1 + $p2);
    }
}
