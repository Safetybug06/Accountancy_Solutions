<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
    return view('screens.home');
});

Route::get('/about', function () {
    return view('screens.about');
});

Route::get('/services', function () {
    return view('screens.services');
});

Route::get('/contact', function () {
    return view('screens.contact');
});

Route::post("/contact",[FrontController::class,'store']);
Route::post("/",[FrontController::class,'store']);