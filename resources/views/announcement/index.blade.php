<x-layout>
<<<<<<< HEAD

    <div class=" ">
=======
    
    <div class="containerlogin ">
>>>>>>> b2d3f9754af4f40c9c10f4a4508f59c60bea5a1a
        <div class="row justify-content-center">
            <div class="col-12-col-md-3">
                <h1>I NOSTRI ANNUNCI</h1>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <div class="containerx d-flex justify-content-center">
        <div class="card">
            <div class="content">
                <h2>01</h2>
                <h3 style="color:black">Card one</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam explicabo voluptatum suscipit facere maiores, doloremque, consequatur vitae tempore distinctio quis magni repudiandae quaerat blanditiis numquam! Sunt facere porro in asperiores!</p>
                <a href="">Read more</a>
=======
    
    <div class="container">
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col col-md-4">
                <div class="">
                    <div class="card">
                        <div class="content">
                            <h2>Titolo: {{$announcement->title}}</h2>
                            <h3>Categoria:{{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                        </div>
                    </div>
                </div>
>>>>>>> b2d3f9754af4f40c9c10f4a4508f59c60bea5a1a
            </div>
            @endforeach
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>