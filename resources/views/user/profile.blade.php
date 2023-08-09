<x-layout titolo='Profilo: {{Auth::user()->name}}'>

    <section class="container-fluid">
        <div class="row">
            <aside class="col-12 col-md-3">

                <div class="card sticky">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="immagine profilo">
                    <div class="card-body">
                        <h5 class="card-title">{{Auth::user()->name}}</h5>
                        <p class="card-text">{{Auth::user()->email}}</p>
                    </div>
                    <div class="card-header">
                        <p>Annunci caricati di recente</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        
                        {{-- Visualizzare gli ultimi 3 prodotti creati --}}    
                        @foreach($announcements->take(3) as $announcement)
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{$announcement->title}}</span>
                                <span><a href="{{route('announcement_detail', compact('announcement'))}}" class="btn btn-outline-primary">Dettaglio</a></span>
                            </li>
                        @endforeach

                        @for ($i = 0; $i < 3 - $announcements->count(); $i++) 
                            <li class="list-group-item lead">empty</li>
                        @endfor
                    
                    </ul>
                    <div class="card-body d-flex justify-content-evenly">
                        <a href="#" class="card-link text-decoration-none">GitHub</a>
                        <a href="#" class="card-link text-decoration-none">Twitter</a>
                    </div>
                </div>

            </aside>
            <div class="col-12 col-md-9">
                <h3 class="text-center my-5">{{Auth::user()->name}}</h3>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni veniam eveniet sequi nemo nam provident saepe cum quae quasi incidunt eum modi, sit quos natus iure nihil nesciunt error!</p>
                <hr>
                <section class="container">
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            
                                <div class="col col-md-4">
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