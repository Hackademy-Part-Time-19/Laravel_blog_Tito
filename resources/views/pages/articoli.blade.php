<x-layout>

    @vite(['resources/css/articoli.css'])

    <x-slot:title> Articoli </x-slot>

    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                <x-card :titolo="$articolo['titolo']"
                        :categoria="$articolo['categoria']"
                        :descrizione="$articolo['descrizione']" 
                        :chiave="$chiave">
                </x-card>
            @endforeach
        </div>
    </div>
    
</x-layout>
