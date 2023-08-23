<x-layout titolo="Categoria {{$category->name}}">

    <div class="container my-5">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-white display-1 text-center">Categoria {{$category->name}}</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 d-flex justify-content-between">
                @foreach ($categories as $categoria)
                <a class="" href="{{route('category_show', compact('category'))}}">{{$categoria->name}}</a>
                @endforeach
                {{-- @dd($category->name) --}}
            </div>
        </div>
        <div class="row">
            
            @forelse($category->announcements as $announcement)
                @if($announcement->is_accepted)
                    <div class="col-12 col-md-6 col-lg-4 my-5">
                        <div class="containerx d-flex justify-content-center">
                            <div class="card">
                                <div class="content">
                                    <h2 class="mb-3">{{$announcement->title}}</h2>
                                    <img class="imgSection img-fluid" src="https://picsum.photos/250/200">

                                    <p class="text-truncate my-3">{{$announcement->body}}</p>
                                    <a class="welcomebtn" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
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