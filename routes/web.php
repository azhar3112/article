<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles', [App\Http\Controllers\User\ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [App\Http\Controllers\User\ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/create', [App\Http\Controllers\User\ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/edit/{article}', [App\Http\Controllers\User\ArticleController::class, 'edit'])->name('articles.edit');
Route::post('/articles/edit/{article}', [App\Http\Controllers\User\ArticleController::class, 'update'])->name('articles.update');
Route::get('/articles/delete/{article}' ,[App\Http\Controllers\User\ArticleController::class, 'destroy'])->name('articles.delete');
