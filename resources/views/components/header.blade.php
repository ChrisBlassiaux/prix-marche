<div>
    <!-- Infos bar -->
    <div class="bg-light p-3 d-md-flex d-block justify-content-between align-items-center">
        <div class="logo-title mb-2">
            <a href="#"><img src="images/logo.png" alt="" class="logo"></a>
            <h1 class="ml-2"><a href="#">Prix Marché</a></h1>
        </div>

        <div class="desc">
            <p class="text-left text-md-right">Tous vos besoins à petits prix dans le Valenciennois</p>
            <ul class="steps list-unstyled font-weight-bold d-md-flex d-block">
            <li class="step mr-2">
                <span class="bg-primary text-white rounded-circle d-inline-block text-center">1</span> 
                Choix et commande des articles
            </li>
            <li class="step mr-2">
                <span class="bg-primary text-white rounded-circle d-inline-block text-center">2</span>
                Retrait des articles
            </li>
            <li class="step">
                <span class="bg-primary text-white rounded-circle d-inline-block text-center">3</span>
                Paiement des articles
            </li>
            </ul>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <form class="form-inline my-2 my-lg-0">
            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-secondary mb-2 mb-sm-0 w-100">Catégories</button>
              <div class="btn-group mb-2 mb-sm-0" role="group">
                <button id="btnGroupDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                  <a class="dropdown-item" href="#">Dropdown link</a>
                  <a class="dropdown-item" href="#">Dropdown link</a>
                </div>
              </div>
            </div>
            <input class="form-control mr-sm-2" type="text" placeholder="Recherche...">
            <button class="btn btn-secondary my-2 my-sm-0 btn-sm-block btn-inline" type="submit">Rechercher</button>
          </form>
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frequently_questions') }}">Questions fréquentes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::check())
                        {{ Auth::user()->email }}
                    @else
                        Connexion/Inscription
                    @endif
                </a>
                <div class="dropdown-menu">
                    @if (Auth::check())
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Se déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __("Se connecter") }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                    @endif
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="fa fa-cart-plus fa-2x ml-3"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
















    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div> --}}