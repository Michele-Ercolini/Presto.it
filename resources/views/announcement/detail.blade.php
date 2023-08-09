<x-layout titolo='Presto.it : Dettagli'>
    
    
    <section class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
                <div class="">
                    <div class="card">
                        <div class="content">
                            
                            
                            {{-- Carosello da modificare con uno swiper --}}
                            <!-- Inizio section Carousel -->
                            
                            
                            <!-- Slider main container -->
                            <div class="container-fluid backcont">
                                <h1 class="text-center">{{ $announcement->title }}</h1>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="immaginiCarousel" src="https://picsum.photos/250" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="immaginiCarousel" src="https://picsum.photos/250" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="immaginiCarousel" src="https://picsum.photos/250" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="immaginiCarousel" src="https://picsum.photos/250" />
                                                </div>
                                                
                                            </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                        
                                </div>
                                    
                            </div>
                                {{-- Fine Carosello --}}
                                
                                
                                <h2 class="text-center">Titolo: {{ $announcement->title }}</h2>
                                <h3 class="text-center">Categoria: {{ $announcement->category->name }}</h3>
                                <p class="lead text-center">Prezzo: {{ $announcement->price }}</p>
                                <p class="text-truncate text-center">Descrizione: {{ $announcement->body }}</p>
                                <address class="text-center">Pubblicato da: {{$announcement->user->name}}</address>
                                <a class="text-center btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </x-layout>
    