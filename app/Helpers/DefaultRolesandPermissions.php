<?php

namespace App\Helpers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DefaultRolesandPermissions {

    public function __construct()
    {
        
    }

    public static function create($developerEmail, $developerPassword, $adminEmail, $adminPassword) 
    {
        $user = new User;
        $user->name = 'Developer';
        $user->email = $developerEmail;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($developerPassword);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();

        $user->save();

        $developer = User::find(1);
        $developer->assignRole('Developer');


        $user = new User;
        $user->name = 'Administrator';
        $user->email = $adminEmail;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($adminPassword);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();

        $user->save();
        
        $admin = User::find(2);
        $admin->assignRole('Administrator');
    }



}