<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row align-items-center justify-content-center">
            

                @if(Auth::user()->is_revisor)
                    <div class="col-12">
                        <h1 class="text-white display-1 text-center">Ciao {{Auth::user()->name}}</h1>
                        <h3 class="text-center">Sei già un nostro Revisore</h3>
                    </div>
                @else
                    <div class="col-12">
                        <h1 class="text-white display-1 text-center">Lavora con noi</h1>
                        <h3 class="text-center">Vuoi diventare un nostro Revisore?</h3>
                        <a class="btn1 btn btn-outline-dark" href="{{route('become_revisor')}}">Clicca qui</a>
                    </div>                
                @endif
                    
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

            </div>
        </div>
    </header>
    <hr class="border border-dark border-3 opacity-80 m-0">



</x-layout>