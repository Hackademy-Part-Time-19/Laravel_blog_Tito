<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private  $articoli = [
        0 => ['titolo' => 'HTML', 'categoria' => 'client', 'descrizione' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti"'],
        1 => ['titolo' => 'CSS', 'categoria' => 'client', 'descrizione' => 'CSS è un linguaggio che gestisce il design e la presentazione delle pagine web.'],
        2 => ['titolo' => 'JAVASCRIPT', 'categoria' => 'client-server', 'descrizione' => 'JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive."'],
        3 => ['titolo' => 'PHP',  'categoria' => 'server', 'descrizione' => 'PHP è un linguaggio di scripting interpretato lato server.']
    ];

    // private $categorie = [];

    // public function __construct()
    // {

    //     foreach ($this->articoli as $articolo) {
    //         if (!in_array($articolo['categoria'], $this->categorie)) {
    //             $this->categorie[] = $articolo['categoria'];
    //         }
    //     } 
    // }

    public function homepage()
    {
        return view('pages.home', ['titolo' => '{{route(WEB DEVELOPER)}}']);
    }

    public function contacts()
    {
        return view('pages.contatti', ['descrizione' => 'Segui la rotta giusta per diventare un WEB DEVELOPER']);
    }
}
