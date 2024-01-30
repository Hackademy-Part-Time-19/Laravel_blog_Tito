<x-layout>

    @vite(['resources/css/dettaglio.css'])

    <x-slot:title>Articolo | Dettaglio</x-slot>

    <a class="tornaInArticoli" href="{{ route('articoli.index') }}">Torna nella Sezione Articoli</a>
    <div class="card" style="width: 60rem; height: 15rem">
        <div class="card-body">
            <h3 class="card-title">{{ $articolo['titolo'] }}</h3>
            <h5 class="card-title">{{ $articolo['categoria'] }}</h5>
            <p class="card-text">{{ $articolo['descrizione'] }}</p>
        </div>
    </div>
  {{--   <x-card></x-card> --}}

</x-layout>