<x-layout>
    {{-- <x-header titoloHeader="Revisor"/> --}}

    <section class="section container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <h1 class="display-2 title-shadow text-center mb-5">
                    {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="">
                    <div class="card">
                        <div class="content">

                            <!-- Inizio section Carousel -->

                            <!-- Slider main container -->
                            @if ($announcement_to_check)
                                <div class="container-fluid backcont position-relative">
                                    <span
                                        class="position-absolute top-0 start-0 translate-middle badge rounded-pill btn1 bg-dark">{{ App\Models\Announcement::toBeRevisionedCount() }}<span
                                            class="visually-hidden">unread messages</span>
                                    </span>
                                    <h1 class="text-center title-shadow text-uppercase">{{ $announcement_to_check->title }}</h1>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="swiper mySwiper">
                                                @if (count($announcement_to_check->images) > 0)
                                                    <div class="swiper-wrapper">
                                                        @foreach ($announcement_to_check->images as $image)
                                                            <div class="swiper-slide @if($loop->first)active @endif">
                                                                <img class="imgSection immaginiCarousel"
                                                                    src="{{$image->getUrl(250, 200)}}"
                                                                    class="img-fluid p-3 rounded" alt="..." />
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img class="imgSection immaginiCarousel"
                                                                src="{{ !$announcement_to_check->images()->get()->isEmpty()? $anouncement->images()->first()->getUrl(400, 300): 'https://picsum.photos/250/200' }}" />
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="imgSection immaginiCarousel"
                                                                src="{{ !$announcement_to_check->images()->get()->isEmpty()? $anouncement->images()->first()->getUrl(400, 300): 'https://picsum.photos/250/200' }}" />
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="imgSection immaginiCarousel"
                                                                src="{{ !$announcement_to_check->images()->get()->isEmpty()? $anouncement->images()->first()->getUrl(400, 300): 'https://picsum.photos/250/200' }}" />
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Fine Carosello --}}


                                    <h3 class="text-center title-shadow text-uppercase">{{ $announcement_to_check->category->name }}</h3>
                                    <p class="lead text-center title-shadow text-uppercase">{{ $announcement_to_check->price }}€</p>
                                    <p class="text-truncate text-center title-shadow text-uppercase"> {{ $announcement_to_check->body }}</p>
                                    <address class="text-center title-shadow text-uppercase">Pubblicato da:
                                        {{ $announcement_to_check->user->name }}</address>

                                    <div class="row justify-content-between">
                                        <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 d-flex">
                                            <a class="btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                                        </div>
                                        <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-5 d-flex">
                                            <form action="{{ route('revisor_reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                                method="POST" style="margin-right:10px;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn1 btn-outline-danger">Rifiuta</button>
                                            </form>
                                            <form class="" action="{{ route('revisor_accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn1 btn-outline-success">Accetta</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!--Google Intelligence-->
                                    @if (isset($image->labels))
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-md-4 border-end">
                                                <h5 class="tc-accent mt-3">Tags</h5>
                                                <div class="p-2">
                                                    @foreach ($image->labels as $label)
                                                        <p class="d-inline">{{ $label }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 my-5">
                                                <h5 class="tc-accent">Revisione Immagini</h5>
                                                <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
                @endif
            </div>
    </section>
</x-layout>
