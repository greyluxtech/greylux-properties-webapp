<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResultController;





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
Route::get('/contact',[ContactController::class, 'displayContact'])->name('contact');

Route::post('/saveContact',[ContactController::class, 'saveContact'])->name('saveContact');

Route::get('/result/details',[ResultController::class, 'displayResultDetails'])->name('displayResultDetails');

Route::post('/result',[ResultController::class, 'searchProperties'])->name('searchProperties');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/faq',[FaqsController::class, 'index']);

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

