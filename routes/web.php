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

Route::get('/home', function () {
    return view('pages.home',['titolo' => 'Primo Progetto Laravel']);
});
Route::get('/articoli', function () {
    return view('pages.articoli');
});
Route::get('/chiSono', function () {
    return view('pages.chiSono',['descrizione' =>'Sono Vincenzo Tito e vorrei diventare uno sviluppatore Web']);
});
