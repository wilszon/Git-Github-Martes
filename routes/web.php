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
    return view('welcome');
})->name('welcome');

Route::get('/listaproductos', function () {
    return view('listaproductos');
})->name('listaproductos');

Route::get('/detalle', function () {
    return view('detalle');
})->name('detalle');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');
