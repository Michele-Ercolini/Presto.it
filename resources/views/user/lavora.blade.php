<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white display-1">Lavora con noi</h1>
                <h3>Vuoi diventare un nostro Revisore?</h3>
                <a class="btn1 btn search-button btn-outline-dark" href="{{route('become_revisor')}}">Clicca qui</a>
                    
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