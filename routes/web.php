<?php

use App\Http\Controllers\AnnexController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\HomeController;
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
//     return view('layout.template');
// });



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/entreprises', EntrepriseController::class);
Route::resource('/annexes', AnnexController::class);

