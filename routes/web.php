<?php

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

Route::get('/', function () {
    return view('page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addcta3', [App\Http\Controllers\calculation::class, 'store'])->name('addcta3');
Route::get('/deleteall', [App\Http\Controllers\calculation::class, 'deleteall'])->name('deleteall');
Route::get('/delete/{id}', [App\Http\Controllers\calculation::class, 'destroy'])->name('delete');


