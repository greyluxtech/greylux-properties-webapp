<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function displayResultDetails() { 
        //connect database and search for pecific property
        $property = ['prop x'];
            //return view with property details
        return view('resultdetails')->with('property', $property); 
       }
    public function searchProperties() { 

        //connect database and search for specific property

            //return view with property details
            $properties = ['prop1','prop2'];
        return view('result')->with('properties', $properties); 
       }
}
