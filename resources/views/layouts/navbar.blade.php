    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}"> <img src="{{ asset('user/img/logo.png') }}" class="mr-3" width="40px" height="40px" alt="" srcset="">Al Xam Production</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('welcome')}}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('collection')}}">Collection</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('projet')}}">Projet</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('challenge')}}">opportinuités</a>
                    </li>
                </ul>
                <a href="{{route('artist')}}" class="btn btn-white btn-outline-danger my-2 my-sm-0 mr-2">Se connecter</a>
                <a href="#" class="btn btn-outline-danger my-2 my-sm-0 mr-2">S'inscrire</a>
            </div>
        </div>
    </nav>