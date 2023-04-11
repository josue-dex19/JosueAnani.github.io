<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/about', function () {
    return view('aboutUs');
})->name('about');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/editions', function () {
    return view('editions');
})->name('editions');

Route::get('/jurys', function () {
    return view('jurys');
})->name('jurys');

Auth::routes(['verify'=> true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register-link-clicked', function () {
    if (Auth::check()) {
        Auth::logout();
    }
    return Redirect::route('register');
})->name('register.link.clicked');

//**************FRANçAIS***************** */ 
Route::get('/accueil', function () {
    return view('French.accueil');
})->name('accueil');

Route::get('/apropos', function () {
    return view('French.apropos');
})->name('apropos');

Route::get('/programme', function () {
    return view('French.programme');
})->name('programme');

Route::get('/edition', function () {
    return view('French.edition');
})->name('edition');

Route::get('/jury', function () {
    return view('French.jury');
})->name('jury');