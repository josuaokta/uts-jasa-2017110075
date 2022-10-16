<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('/');
Route::get('service', ServiceController::class)->name('service');
Route::get('testimoni', HomeController::class)->name('testimoni');
Route::get('about', HomeController::class)->name('about');



// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/service', function () {
//     return view('service');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/testimoni', function () {
//     return view('testimoni');
// });
