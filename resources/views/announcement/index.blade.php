<x-layout titolo='I NOSTRI ANNUNCI'>
    
    <x-header titoloHeader="Tutti gli Annunci"/>

    <div class="container mt-3 ">
        <div class="row">
            <div class="col-12 text-center">
                <h3>{{__('ui.insoddisfatto')}}</h3>
            </div>
        </div>
    </div>


    
    <div class="container my-5 ">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="categorie d-flex flex-wrap justify-content-between">
                @foreach ($categories as $category)
                    <span class="borderCat">
                        <a class="cat title-shadow " href="{{route('category_show', compact('category'))}}">{{$category->name}}</a><tr>
                    </span>
                @endforeach 
            </div>
        </div>
        <div class="row">
            
            @forelse($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 my-5">
                    <div class="containerx d-flex justify-content-center">
                        <div class="card">
                            <div class="content">
                                <h2 class="mb-3 text-uppercase title-shadow">{{$announcement->title}}</h2>
                                <img class="imgSection text-uppercase img-fluid" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : "https://picsum.photos/250/200"}}" height="250px;" width="250px;">
                                <h3 class="paragrafo text-uppercase title-shadow" text-uppercase my-3">{{$announcement->category->name}}</h3>
                                <p class="text-truncate text-uppercase title-shadow" text-uppercase">{{$announcement->body}}</p>
                                <a class="welcomebtn text-uppercase title-shadow" href="{{route('announcement_detail', compact('announcement'))}}">{{__('ui.vediPiù')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
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