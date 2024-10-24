<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BuilderController extends Controller
{

  function AllRows()
  {
    $result=DB::table('details')->get();

    return $result;
  }


  function Rows()
  {
    $result=DB::table('details')->where('name','Rahman')->first();

    return $result->roll;
  }

  function singleValue()
  {
    $result=DB::table('details')->find('2');

    return $result->name;
  }

  function pluckmethod()
  {
    $result=DB::table('details')->pluck('name','roll');

    return $result;
  }




}
