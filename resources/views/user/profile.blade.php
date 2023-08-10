<x-layout titolo='Profilo: {{Auth::user()->name}}'>

    <section class="container-fluid">
        <div class="row">
            <aside class="col-12 col-md-3">

                <div class="cardP ">
                    <div class="imgprofile">
                    <img src="https://picsum.photos/200"  alt="immagine profilo">
                </div>
                <div class="content">
                    <div class="details">
                        <h5 class="card-title">{{Auth::user()->name}}<br><span>Senior UX Design</h5>
                            <p class="card-text">{{Auth::user()->email}}</p>
                          <div class="recente">
                            <p >Annunci caricati di recente</p>

                        @foreach($announcements->take(3) as $announcement)
                            <li class="list-group-item d-flex justify-content-between">
                                <span style="font-family: 'Orbitron', sans-serif;">{{$announcement->title}}</span>
                                <span><a href="{{route('announcement_detail', compact('announcement'))}}" class="btnP  btn btn-outline-danger">Show</a></span>
                            </li>
                        @endforeach

                        @for ($i = 0; $i < 3 - $announcements->count(); $i++) 
                            <li class="list-group-item lead">empty</li>
                        @endfor
                        
                    <div class="btnprofile card-body d-flex justify-content-evenly">
                        <a style="color:black" href="#" class="mt-3 btn btn-outline-danger card-link text-decoration-none">GitHub</a>
                        <a style="color:black" href="#" class="mt-3 btn btn-outline-primary card-link text-decoration-none">LinkedIn</a>
                    </div>
                       
                    </div>
                </div>
                </div>
                

                
                    {{-- <div class="card-body">
                       
                    
                    </div>
                    <div class="card-header">
                      
                    </div>
                    <ul class="list-group list-group-flush">
                        
                        {{-- Visualizzare gli ultimi 3 prodotti creati --}}    
                        
                 </div> 

            </aside>
            <div class="col-12 col-md-9">
                <h3 class="text-center my-5">{{Auth::user()->name}}</h3>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <hr>
                <section class="container">
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            
                                <div class="col col-md-4 mt-5">
                                    <div class="containerx">
                                        <div class="card">
                                            <div class="content">
                                                <img class="img" src="https://picsum.photos/250" height="200px" width="200px">
                                                <h2>{{$announcement->title}}</h2>
                                                <h3>Categoria: {{$announcement->category->name}}</h3>
                                                <p class="text-truncate">{{$announcement->body}}</p>
                                                <a class="btn1" style="margin-bottom:50px" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                        @endforeach
                    </div>
                </section>
            </div>

        </div>
    </section>

</x-layout>