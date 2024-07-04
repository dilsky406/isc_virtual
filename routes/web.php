<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController ;
use App\Http\Controllers\AboutController ;
use App\Http\Controllers\VirtualtourController ;
use App\Http\Controllers\GalleryController ;

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

Route::get('/',[BerandaController::class,'index'])->name('home');
Route::get('/beranda',[BerandaController::class,'index'])->name('beranda');
Route::get('/tentang',[AboutController::class,'index'])->name('about');
Route::get('/virtual', [VirtualtourController::class, 'index'])->name('virtual');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');