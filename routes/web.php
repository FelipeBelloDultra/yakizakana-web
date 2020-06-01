<?php

// Rotas sem autorização
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

// Rotas com autorização
Route::get('/home', function() {
    return view('admin/home/home');
})->name('home')->middleware('auth');


Route::get('/home/fornecedores', function() {
    return view('admin/fornecedores/index');
})->name('home-fornecedores')->middleware('auth');


Route::get('/home/tipos', function() {
    return view('admin/tipos/index');
})->name('home-tipos')->middleware('auth');


Route::get('/home/produtos', function() {
    return view('admin/produtos/index');
})->name('home-produtos')->middleware('auth');


Route::get('/home/funcionarios', function() {
    return view('admin/funcionarios/index');
})->name('home-funcionarios')->middleware('auth');


Route::get('/home/clientes', function() {
    return view('admin/clientes/index');
})->name('home-clientes')->middleware('auth');


Route::get('/home/admin/config', function() {
    return view('admin/config/index');
})->name('home-admin')->middleware('auth');

