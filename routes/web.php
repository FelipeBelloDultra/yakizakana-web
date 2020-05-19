<?php

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
    return view('welcome');
})->name('welcome');


Route::get('/cardapio', function () {
    return view('cardapio');
})->name('cardapio');


Route::get('/fornecedores', function () {
    return view('fornecedores');
})->name('fornecedores');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth')->name('welcome');
