<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('home'); 

Route::get('/article/{art}', [FrontController::class, 'showart'])->name('show.article'); 

Route::get('/tag/{tag}', [FrontController::class, 'showtag'])->name('show.tag'); 