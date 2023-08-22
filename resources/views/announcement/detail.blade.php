<x-layout>
    
    
    <section class="section container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8 my-5">
                <div class="">
                    <div class="card">
                        <div class="content">
                            
                        
                            
                            
                            <!-- Inizio section Carousel -->
                            
                            
                            <!-- Slider main container -->
                            <div class="container-fluid backcont">
                                <h1 class="text-center">{{ $announcement->title }}</h1>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="swiper mySwiper">
                                            @if(count($announcement->images)>0)
                                                <div class="swiper-wrapper">
                                                    @foreach($announcement->images as $image)
                                                        <div class="swiper-slide @if($loop->first)active @endif">
                                                            <img class="imgSection immaginiCarousel" src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="..."/>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
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
                                                </div>
                                            @endif
                                        <div class="swiper-pagination"></div>
                                    </div>
                                        
                                </div>
                                    
                            </div>
                                {{-- Fine Carosello --}}
                                
                                
                                <h2 class="text-center">{{ $announcement->title }}</h2>
                                <h3 class="text-center">{{ $announcement->category->name }}</h3>
                                <p class="lead text-center">{{ $announcement->price }}€</p>
                                <p class="text-truncate text-center"> {{ $announcement->body }}</p>
                                <address class="text-center">Pubblicato da: {{$announcement->user->name}}</address>
                                <a class="button text-center  btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </x-layout>
    