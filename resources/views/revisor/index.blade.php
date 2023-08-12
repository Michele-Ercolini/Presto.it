<x-layout>
    {{-- <x-header titoloHeader="Revisor"/> --}}
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <section class="section container my-5 py-5">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    
                        <h1 class="display-2 text-center mb-5">
                            {{$announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                            
                        </h1>
                    </span>
                </div>
            </div>
            <div class="col col-md-8">
                <div class="">
                    <div class="card">
                        <div class="content">
                            
                        
                            
                            
                            <!-- Inizio section Carousel -->
                            
                            
                            <!-- Slider main container -->
                            @if($announcement_to_check)
                            <div class="container-fluid backcont position-relative">
                                <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill btn1 bg-dark">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span>
                                </span>
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
                                
                                
                                
                                <h3 class="text-center">{{ $announcement_to_check->category->name }}</h3>
                                <p class="lead text-center">{{ $announcement_to_check->price }}€</p>
                                <p class="text-truncate text-center"> {{ $announcement_to_check->body }}</p>
                                <address class="text-center">Pubblicato da: {{$announcement_to_check->user->name}}</address>

                                <div class="d-flex justify-content-evenly">
                                    <form action="{{route('revisor_accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn1 btn-outline-success">Accetta</button>
                                    </form>
                                    <a class="btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                                
                                    <form action="{{route('revisor_reject_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn1 btn-outline-danger">Rifiuta</button>
                                    </form>
                                </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    
                </div>
                @endif
        </div>
    </section>
</x-layout>
