<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index(){
        $users = DB::select('select * from properties');
        return view('properties_details',['users'=>$users]);
        }
}
