<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::get('/{id}',[ArticlesController::class, 'show'])->name('articles.show');
Route::post('/store',[ArticlesController::class, 'store'])->name('store');