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
              <li class="nav-item">
                <a class="nav-link" href="{{route('announcement_index')}}">Annunci</a>
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
                                  
                                   <a href="{{route('logout')}}"> <img class="btn1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARBJREFUSEvt17tKxEAUxvHfgvgGFr6ClSCC2Hh7Bzs7sfZRhC1sfAIrL/V6AbG22m7fRU6hhJDMZibBWOS0mcz/nPOdbzKZGSlmI3GlwEc46ZnYK96b9kiBFzjtCX7BWS74DVF1n4hqjydwdCCl8dTqkiErGq7wYONE4hMrXKzJJuRqPAtSGqfAPxteYY7NlgSKKk4NV3XDAzxhqwFeBL7BbkslX7iuPNvGI/Zr64vAucMU7b6r6f4n4A3c4rKScRE4p9Wh7wMOh2h11+HawzNC53oUVdwFHD4OXQe1U8rHH1gifJyKogNk+kjk+jrWDz5cXZOYwL+d+pdXn3PsdBWzZV14/T73etuTmX59tH+nb7OaRB99F06ZAAAAAElFTkSuQmCC"/></a>
                                  
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
