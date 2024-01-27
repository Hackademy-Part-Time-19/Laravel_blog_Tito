<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Sono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/contatti.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li id="navlink" class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
              </li>
              <li id="navlink"  class="nav-item">
                <a class="nav-link" href="{{ route('articoli.index') }}">Articoli</a>
              </li>
              <li id="navlink"  class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
              </li>
              <li id="navlink"  class="nav-item">
                <div class="dropdown">
                    <button id="btnNav" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorie
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categorie as $categoria)
                        <li><a class="dropdown-item" href="{{ route('articoli.category', $categoria)}}">{{$categoria}}</a></li>
                        @endforeach
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <h1>Il mio Blog</h1>
    <p>{{ $descrizione }}</p>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
