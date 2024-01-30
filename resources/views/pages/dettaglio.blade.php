<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/dettaglio.css">
</head>

<body>

  <x-navbar/>
  
    <a class="tornaInArticoli" href="{{ route('articoli.index') }}">Torna nella Sezione Articoli</a>
    <div class="card" style="width: 60rem; height: 15rem">
        <div class="card-body">
            <h3 class="card-title">{{ $articolo['titolo'] }}</h3>
            <h5 class="card-title">{{ $articolo['categoria'] }}</h5>
            <p class="card-text">{{ $articolo['descrizione'] }}</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
