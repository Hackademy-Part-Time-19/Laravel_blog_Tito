
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
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

   
