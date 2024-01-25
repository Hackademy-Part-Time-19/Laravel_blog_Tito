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
    return view('pages.home', ['titolo' => '{{route(WEB DEVELOPER)}}']);
})->name('home');

Route::get('/articoli', function () {

    $articoli = [
        0 => ['titolo' => 'HTML', 'categoria' => 'Lato Client', 'descrizione' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti"'],
        1 => ['titolo' => 'CSS', 'categoria' => 'Lato Client', 'descrizione' => 'CSS è un linguaggio che gestisce il design e la presentazione delle pagine web.'],
        2 => ['titolo' => 'JAVASCRIPT', 'categoria' => 'Lato Client', 'descrizione' => 'JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive."'],
        3 => ['titolo' => 'PHP',  'categoria' => 'Lato Server', 'descrizione' => 'PHP è un linguaggio di scripting interpretato lato server.']
    ];

    return view('pages.articoli', ['articoli' => $articoli]);
})->name('articoli');


Route::get('/articolo/{id}', function ($id) {
    $articoli = [
        0 => ['titolo' => 'HTML', 'categoria' => 'Lato Client', 'descrizione' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti"'],
        1 => ['titolo' => 'CSS', 'categoria' => 'Lato Client', 'descrizione' => 'CSS è un linguaggio che gestisce il design e la presentazione delle pagine web.'],
        2 => ['titolo' => 'JAVASCRIPT', 'categoria' => 'Lato Client', 'descrizione' => 'JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive."'],
        3 => ['titolo' => 'PHP',  'categoria' => 'Lato Server', 'descrizione' => 'PHP è un linguaggio di scripting interpretato lato server.']
    ];

    return view('pages.dettaglio', ['articolo' => $articoli[$id]]);
})->name('articoli.dettaglio');


Route::get('/contatti', function () {
    return view('pages.contatti', ['descrizione' => 'Sono Vincenzo Tito e vorrei diventare uno sviluppatore Web']);
})->name('contatti');
