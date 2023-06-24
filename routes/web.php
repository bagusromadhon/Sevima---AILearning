<?php

use App\Http\Controllers\AiController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('user/dashboard/index');
// });

// guest 
Route::get('/', function () {
    return view('guest/LandingPage/index');
});
Route::view('/user/login', 'user.login.index')->name('user.login.index');

// route API Chat GPT
Route::get('/ai',[AiController::class,'index']); 
Route::post('/ai',[AiController::class,'store']);
Route::get('/reset',[AiController::class,'destroy']);

// route Login USer

Route::get('user/login', [SiswaController::class, 'showLoginForm'])->name('user.login.index');
Route::post('user/login', [SiswaController::class, 'login'])->name('user.login');
Route::post('/user/login', 'SiswaController@login')->name('user.login');



