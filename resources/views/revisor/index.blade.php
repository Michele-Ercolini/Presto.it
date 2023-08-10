<x-layout titolo="">

<section class="section container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <h1 class="display-2">{{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
            <div class="">
                <div class="card">
                    <div class="content">
                        
                    
                        
                        
                        <!-- Inizio section Carousel -->
                        
                        
                        <!-- Slider main container -->
                        @if($announcement_to_check)
                        <div class="container-fluid backcont">
                            <h1 class="text-center">{{ $announcement_to_check->title }}</h1>
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="imgSection immaginiCarousel" src="https://picsum.photos/250" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="imgSection immaginiCarousel" src="https://picsum.photos/250" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="imgSection immaginiCarousel" src="https://picsum.photos/250" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="imgSection immaginiCarousel" src="https://picsum.photos/250" />
                                            </div>
                                            
                                        </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                    
                            </div>
                                
                        </div>
                        
                            {{-- Fine Carosello --}}
                            
                            
                            <h2 class="text-center">{{ $announcement_to_check->title }}</h2>
                            <h3 class="text-center">{{ $announcement_to_check->category->name }}</h3>
                            <p class="lead text-center">{{ $announcement_to_check->price }}€</p>
                            <p class="text-truncate text-center"> {{ $announcement_to_check->body }}</p>
                            <address class="text-center">Pubblicato da: {{$announcement_to_check->user->name}}</address>
                            <a class="button text-center  btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>
