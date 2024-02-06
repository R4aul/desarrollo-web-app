<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',function(){
    $credentials = request()->only(['email','password']);
    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect()->route('dashboard');
    }
    return redirect()->route('login'); 
})->name('post.login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//mis rutas 
Route::get('/bibliografia', function () {
    return view('bibliografia');
})->name('bibliografia');

Route::get('/tema', function () {
    return view('tema');
})->name('tema');

Route::get('/gustos', function () {
    return view('gustos');
})->name('gustos');




Route::resource('tasks',TaskController::class)
    ->except('show');