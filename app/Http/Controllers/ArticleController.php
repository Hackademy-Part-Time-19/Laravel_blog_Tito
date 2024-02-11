<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class ArticleController extends Controller
{
    /*  private  $articoli = [
        0 => ['titolo' => 'HTML', 'categoria' => 'client', 'descrizione' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti"'],
        1 => ['titolo' => 'CSS', 'categoria' => 'client', 'descrizione' => 'CSS è un linguaggio che gestisce il design e la presentazione delle pagine web.'],
        2 => ['titolo' => 'JAVASCRIPT', 'categoria' => 'client-server', 'descrizione' => 'JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive."'],
        3 => ['titolo' => 'PHP',  'categoria' => 'server', 'descrizione' => 'PHP è un linguaggio di scripting interpretato lato server.']
    ]; */

    // private $categorie = [];

    // public function __construct(){

    //     foreach ($this->articoli as $articolo) {
    //         $categorie[] = $articolo['categoria'];
    //     }

    // }

    public function index()
    {
        $articles = Article::all();

        return view('pages.articoli', ['articoli' => $articles]);
    }

    public function show($id)
    {
        $articles = Article::all();

        return view('pages.dettaglio', ['articolo' => $articles[$id]]);
    }

    public function category($categoria)
    {
       
        $articoliCategory = [];
        foreach ($articoli as $articolo) {
            if ($articolo['categoria'] == $categoria) {
                $articoliCategory[] = $articolo;
            }
        }

        return view('pages.articoli-categorie', ['articoli' => $articoliCategory]);
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->category = $request->title;
        $article->description = $request->title;

        $article->save();

        // metodo create - meno sicuro se non si usa la protezione fillable

        Article::create($request->all());
    }

    public function create()
    {
        return view('pages.article-create');
    }
}
