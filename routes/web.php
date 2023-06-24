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
// Route::view('/user/login', 'user.login.index')->name('/login');

// route API Chat GPT
Route::get('/ai',[AiController::class,'index']); 
Route::post('/ai',[AiController::class,'store']);
Route::get('/reset',[AiController::class,'destroy']);

Route::view('/user/login', 'user.login.index')->name('user.login.index');

Route::get('/register', [SiswaController::class,'register'])->name('register');
Route::post('/register', [SiswaController::class,'registerPost'])->name('register');



