<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function displayResultDetails() { 
        return view('resultdetails'); 
       }
    public function searchProperties() { 
        return view('result'); 
       }
}
