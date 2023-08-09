<x-layout>
    
    <div class="containerlogin ">
        <div class="row justify-content-center">
            <div class="col-12-col-md-3">
                <h1>ANNUNCI</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col col-md-4">
                <div class="containerx d-flex justify-content-center">
                    <div class="card">
                        <div class="content">
                            <h2>Titolo: {{$announcement->title}}</h2>
                            <h3>Categoria:{{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a href="">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>