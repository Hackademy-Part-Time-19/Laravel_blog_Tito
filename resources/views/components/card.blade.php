<div class="card" style="width: 16rem;">
    <div class="card-body">
        <h3 class="card-title">{{$titolo}}</h3>
        <h5 class="card-title">{{$categoria }}</h5>
        <p class="card-text">{{$descrizione}}</p>
        <a href="{{ route('articoli.show', ['id' => $chiave]) }}" class="card-link">Dettagli</a>
    </div>
</div>