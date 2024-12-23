<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AdminController;

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
});


Route::get('/about', function () {
    return view('about');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HelloController::class, 'index']);

Route::view('/tes', 'tes.tes');

Route::post('/tes2', function () {
    dd(request());
});



Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin2', [AdminController::class, 'index2']);


// Route::post('/tes2', function () {
//     response(request());
// });