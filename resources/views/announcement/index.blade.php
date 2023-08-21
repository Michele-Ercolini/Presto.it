<x-layout titolo='I NOSTRI ANNUNCI'>
    
    <x-header titoloHeader="Tutti gli Annunci"/>
    
    <div class="container my-5">
        <div class="row">
            
            @forelse($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-3">
                <div class="containerx d-flex justify-content-center">
                    <div class="card">
                        <div class="content">
                            <h2 class="mb-3">{{$announcement->title}}</h2>
                            <img class="imgSection img-fluid" src="https://picsum.photos/250/200" style="width: 250px; height: 200px">
                            <h3 class="paragrafo my-3">{{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a class="welcomebtn" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
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