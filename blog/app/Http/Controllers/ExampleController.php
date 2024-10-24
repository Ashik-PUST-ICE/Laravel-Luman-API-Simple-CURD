<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{

    function testConn()
    {
        $bdname = DB::connection()->select("SELECT * FROM details");
        return $bdname;

    }
}
