<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;

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

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/table', function () {
    return view('pages.table');
});

Route::get('/about', function () {
    return view('pages.about');
});

/*Route::get('/present', function () {
    return view('pages.present');
});*/

Route::get('/present', [MyAuthController::class, 'present'])->middleware('alreadyLoggedIn');

Route::get('/login', [MyAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [MyAuthController::class, 'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user', [MyAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [MyAuthController::class, 'loginUser'])->name('login-user');

Route::get('/dashboard', [MyAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [MyAuthController::class, 'logout']);

