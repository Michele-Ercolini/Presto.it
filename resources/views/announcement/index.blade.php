<x-layout>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12-col-md-3">
                <h1>I NOSTRI ANNUNCI</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col col-md-4">
                <div class="containerx">
                    <div class="card">
                        <div class="content">
                            <img src="https://picsum.photos/250" height="200px" width="200px">
                            <h2>{{$announcement->title}}</h2>
                            <h3>Categoria:{{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a class="btn1" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>