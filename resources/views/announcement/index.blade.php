<x-layout>
    
    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row ">
            <div class="col-12 mb-5">
                <h1 class="title-shadow paragrafo2 text-center text-white display-1">{{__('ui.title1')}}</h1>
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

    <div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    </div>


    <div class="container mt-3 ">
        <div class="row">
            <div class="col-12 text-center">
                <h3>{{__('ui.insoddisfatto')}}</h3>
            </div>
        </div>
    </div>


    
    <div class="container my-5">
        {{-- <div class="col-12 col-md-8 offset-md-2">
            <div class="categorie d-flex flex-wrap justify-content-between">
                @foreach ($categories as $category)
                    <span class="borderCat color2">
                        <a class="cat color3 title-shadow " href="{{route('category_show', compact('category'))}}">| {{$category->name}} |</a><tr>
                    </span>
                @endforeach 
            </div>
        </div> --}}

        <x-categories_bar></x-categories_bar>

        <div class="row">
            
            @forelse($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 my-5">
                    <div class="containerx d-flex justify-content-center">
                        <div class="card">
                            <div class="content">
                                <h2 class="mb-3 text-uppercase title-shadow">{{$announcement->title}}</h2>
                                <img  class="imgSection text-uppercase img-fluid" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250,200) : "https://picsum.photos/250/200"}}">
                                <h3 class="paragrafo color3 text-uppercase title-shadow text-uppercase my-3">{{$announcement->category->name}}</h3>
                                <p class="text-truncate text-uppercase title-shadow">{{$announcement->body}}</p>
                                <a style="background-color:#db9b20;" class="welcomebtn  text-uppercase title-shadow" href="{{route('announcement_detail', compact('announcement'))}}">{{__('ui.vediPiù')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 my-3">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono annunci per questa ricerca</p>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                {{$announcements->links()}}
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <hr class="border border-dark border-3 opacity-80 m-0">
</x-layout>