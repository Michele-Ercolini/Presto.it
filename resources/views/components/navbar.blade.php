    <!-- Inizio Navbar -->
    <nav id="navId" class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid d-flex  navcustom">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between  w-100 mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link display-8" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('category_show', compact('category'))}}">{{$category->name}}</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                @endforeach
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="{{route('announcement_index')}}">Annunci</a>
              </li>
            </li>
              <!--Utente Autenticato-->
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{route('announcement_create')}}">Crea Annuncio</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Ciao {{Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu">
                      <li class="nav-item">
                          <form action="{{route('logout')}}" method="POST">
                              @csrf
                              <li>
                                  <button style="background: transparent" class="dropdwon-item">
                                    <i class="fa-solid fa-person-through-window fa-bounce fa-lg" style="color: #000000;"></i>
                                  </button>
                              </li>
                          </form>
                      </li>
                  </ul>
              </li>
              <!--Fine Utente Autenticato-->
              
              <!--Inizio Utente NON Autenticato-->
              @else
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropbtn" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Ciao Utente
                  </a>
                  <ul class="dropdown-menu dropdown-content">
                      <li>
                          <a href="{{route('register')}}" class="dropdown-item">
                              Iscriviti
                          </a>
                      </li>
                      <li>
                          <a href="{{route('login')}}" class="dropdown-item">
                              Accedi
                          </a>
                      </li>
                  </ul>
              </li>
              @endauth
              <!--Fine Utente NON Autenticato-->

            </ul>
            <div class="logo"></div>
          </div>
        </div>
      </nav>
      <!-- Fine Navbar -->
