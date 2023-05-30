<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    // Retrieve the currently authenticated user's ID...
    if(Auth::check()){
        return redirect()->route('home');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify', [App\Http\Controllers\HomeController::class, 'verify'])->name('verify');

Route::post('/insert_info', [App\Http\Controllers\HomeController::class, 'insert_info'])->name('insert_info');

