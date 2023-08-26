<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row ">
            <div class="col-12 mb-5">
                <h1 class="title-shadow paragrafo2 text-center text-white display-1">Categoria {{$category->name}}</h1>
                <form class="search-form text-center" action="{{route('announcements.search')}}" method="GET">
                    @csrf
                    <input type="search" name="searched" class="text-center search-input" placeholder="Cerca prodotti...">
                    <br>
                    <div class="text-center my-4">
                        <button type="submit" class="btn1 paragrafo2 btn search-button btn-dark ">{{__('ui.cerca')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <hr class="border border-dark border-3 opacity-80 m-0">

    <div class="container">
    
            <div class="row my-3">
                <div class="col-12 text-center">
                    <h3>{{__('ui.insoddisfatto')}}</h3>
                </div>
            </div>
        
        <x-categories_bar></x-categories_bar>
        <div class="row">
            
            @forelse($category->announcements as $announcement)
                @if($announcement->is_accepted)
                    <div class="col-12 col-md-6 col-lg-4 my-5">
                        <div class="containerx d-flex justify-content-center">
                            <div class="card">
                                <div class="content">
                                    <h2 class="mb-3 title-shadow text-uppercase">{{$announcement->title}}</h2>
                                    <img class="imgSection img-fluid"
                                    src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250,200) : "https://picsum.photos/250/200"}}">
                                    <p class="text-truncate title-shadow text-uppercase my-3">{{$announcement->body}}</p>
                                    <a style="background-color:#db9b20; color:#952932;"class="welcomebtn" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
            <div class="col-12 my-3">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non ci sono annunci per questa ricerca</p>
                    <h3 class="text-center">Caricane uno: <a href="{{route('announcement_create')}}" class="btn btn1 btn-outline-danger">Clicca qui</a></h3>
                </div>
            </div>
            @endforelse
        </div>
        
    </div>


</x-layout>