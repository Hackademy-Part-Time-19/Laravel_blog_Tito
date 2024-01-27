<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private  $articoli = [
        0 => ['titolo' => 'HTML', 'categoria' => 'client', 'descrizione' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti"'],
        1 => ['titolo' => 'CSS', 'categoria' => 'client', 'descrizione' => 'CSS è un linguaggio che gestisce il design e la presentazione delle pagine web.'],
        2 => ['titolo' => 'JAVASCRIPT', 'categoria' => 'client-server', 'descrizione' => 'JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive."'],
        3 => ['titolo' => 'PHP',  'categoria' => 'server', 'descrizione' => 'PHP è un linguaggio di scripting interpretato lato server.']
    ];

    // private $categorie = [];

    // public function __construct(){

    //     foreach ($this->articoli as $articolo) {
    //         $categorie[] = $articolo['categoria'];
    //     }

    // }

    public function index()
    {
        return view('pages.articoli', ['articoli' => $this->articoli]);
    }

    public function show($id)
    {
        return view('pages.dettaglio', ['articolo' => $this->articoli[$id]]);
    }

    public function category($categoria){
        $articoliCategory = [];
        foreach($this->articoli as $articolo){
            if($articolo['categoria'] == $categoria){
                $articoliCategory[] = $articolo;
            }
        }

        return view('pages.articoli-categorie',['articoli'=>$articoliCategory]);
    }
}
