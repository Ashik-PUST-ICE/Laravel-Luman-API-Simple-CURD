<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailsController extends Controller
{

    // request from body
    public function detailSelect(Request $request)
    {
       $SQL="Select *from details";

       $request=DB::select($SQL);

       return $request;
    }



}
