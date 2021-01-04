<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property_listing; 

class ResultController extends Controller
{
    //
    public function displayResultDetails($id) { 
        //connect database and search for pecific property
        $properties = Property_listing::where('id', $id)->get();
            //return view with property details
        return view('resultdetails')->with('properties',$properties); 
       }
    public function searchProperties($location) { 
        //connect database and search for pecific property
            //return view with property details
            $properties = Property_listing::where('location', $location)->get();
         return view('result')->with('properties', $properties); 
       }
}
