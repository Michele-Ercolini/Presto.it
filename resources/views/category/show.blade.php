<x-layout titolo="Categoria {{$category->name}}">

    <div class="container my-5">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-white display-1 text-center">Categoria {{$category->name}}</h1>
            </div>
            @forelse($category->announcements as $announcement)
            @if($announcement->is_accepted)
                <div class="col col-md-4">
                    <div class="containerx">
                        <div class="card">
                            <div class="content">
                                <img class="img" src="https://picsum.photos/250" height="200px" width="200px">
                                <h2>{{$announcement->title}}</h2>
                                
                                <p class="text-truncate">{{$announcement->body}}</p>
                                <a class="btn1" style="margin-bottom:50px" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @empty
            <div class="col my-5">
                <h2 class="text-center">Annunci non corrispondenti a questa categoria</h2>
                <h3 class="text-center">Caricane uno: <a href="{{route('announcement_create')}}" class="btn btn1 btn-outline-danger">Clicca qui</a></h3>
            </div>
            @endforelse
        </div>
    </div>


</x-layout>