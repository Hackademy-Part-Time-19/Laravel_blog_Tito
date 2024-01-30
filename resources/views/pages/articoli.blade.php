<x-layout>

    @vite(['resources/css/articoli.css'])

    <x-slot:title> Articoli </x-slot>

    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                  <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $articolo['titolo'] }}</h3>
                        <h5 class="card-title">{{ $articolo['categoria'] }}</h5>
                        <p class="card-text">{{ $articolo['descrizione'] }}</p>
                        <a href="{{ route('articoli.show', ['id' => $chiave]) }}" class="card-link">Dettagli</a>
                    </div>
                </div>
              {{--   <x-card :titolo="$articolo['titolo']" :categoria="$articolo['categoria']"
                    :descrizione="$articolo['descrizione']">
                    <a href="{{ route('articoli.show', ['id' => $chiave]) }}" class="card-link">Dettagli</a>
                </x-card> --}}
               
            @endforeach
        </div>
    </div>


</x-layout>
