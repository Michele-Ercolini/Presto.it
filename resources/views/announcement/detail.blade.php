<x-layout>

    <div class="containerlogin ">
        <div class="row justify-content-center">
            <div class="col-12-col-md-3">
                <h1>DETTAGLIO: {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col col-md-4">
                <div class="">
                    <div class="card">
                        <div class="content">
                            <h2>Titolo: {{ $announcement->title }}</h2>
                            <h3>Categoria: {{ $announcement->category->name }}</h3>
                            <p class="lead">Prezzo: {{ $announcement->price }}</p>
                            <p class="text-truncate">Descrizione: {{ $announcement->body }}</p>
                            <address>Pubblicato da: {{$announcement->user->name}}</address>
                            <a href="{{ route('announcement_index') }}">Torna Indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
