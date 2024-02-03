<x-layout>

    @vite(['resources/css/dettaglio.css'])

    <x-slot:title>Articolo | Dettaglio</x-slot>

    <a href="{{ route('articoli.index')}}" class="tornaInArticoli">Torna alla sessione articoli</a>

    <div class="card" style="width: 60rem;">
        <div class="card-body">
            <h3 class="card-title">{{$articolo['titolo']}}</h3>
            <h5 class="card-title">{{$articolo['categoria']}}</h5>
            <p class="card-text">{{$articolo['descrizione']}}</p>
        </div>
    </div>

</x-layout>