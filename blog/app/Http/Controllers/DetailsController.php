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


    public function detailCreate(Request $request)
    {
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class=$request->input("class");

        $SQL="Update `details`( `name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";

        $result=DB::insert($SQL,[$name, $roll,$city,$phone,$class]);

        if($result==true)
        {
            return "Data save success";
        }

        else
        {
            return "fail try again";
        }


    }

}
