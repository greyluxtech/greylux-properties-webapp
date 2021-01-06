<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard() {
        if(Auth::user()->hasRole('admin')){
            return view('dashboard.index');
        }
        return view('dashboard');  
    }
}
