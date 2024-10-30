<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/a', function () {
    return view('welcome');
});
Route::post('/', [MainController::class, 'store_rew'])->name('reviews.store');
Route::get('/',[MainController::class,'index'])->name('index'); 
Route::get('/master',[MainController::class,'master'])->name('master');
Route::get('/booking',[MainController::class,'booking'])->name('booking');

Route::post('/booking', [MainController::class, 'store'])->name('booking.store');