<x-layout titolo='DETTAGLIO: {{ $announcement->title }}'>
    
    
    <section class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
                <div class="">
                    <div class="card">
                        <div class="content">


                            {{-- Carosello da modificare con uno swiper --}}
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner ">
                                    <div class="carousel-item active">
                                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            {{-- Fine Carosello --}}
                            

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
