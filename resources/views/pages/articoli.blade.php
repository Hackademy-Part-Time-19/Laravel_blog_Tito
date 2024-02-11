<x-layout>

    @vite(['resources/css/articoli.css'])

    <x-slot:title> Articoli </x-slot>

    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                <x-card :titolo="$articolo['title']"
                        :categoria="$articolo['category']"
                        :descrizione="$articolo['description']" 
                        :chiave="$chiave">
                </x-card>
            @endforeach
        </div>
    </div>
    
</x-layout>
