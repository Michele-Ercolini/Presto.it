    <!-- Inizio Navbar -->
    <nav id="navId" class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex  navcustom">
          <a class="navbar-brand" href="#">
            <img class="logo" src="./Media/logoNero.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between  w-50 mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./annunci.html">Annunci</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ChiSiamo.html">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>

              <!--Utente Autenticato-->
              @auth
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
                                  <button class="dropdwon-item">
                                      Esci
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
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Ciao Utente
                  </a>
                  <ul class="dropdown-menu">
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
