<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqsController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/testdata',[FaqsController::class, 'index']);

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

