<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
});

Route::group(['middleware' => ['role_or_permission:admin|view admin dashboard']], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

 
        
