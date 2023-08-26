<x-layout>
    {{-- <x-header titoloHeader="{{Auth::user()->name}}"/> --}}
        
        <section class="profile container-fluid my-5 ">
            <div class="row">
                <aside class="col-12 col-md-3 my-5">
                    
                    <div class="cardP profile ">
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
                                            <a style="color:black" href="https://github.com/Hackademy-83/Presto_gruppo_03_CyborgTech" target="blank" class="mt-3 btn btn-outline-danger card-link text-decoration-none">GitHub</a>
                                            <a style="color:black" href="https://linkedin.com" target="blank" class="mt-3 btn btn-outline-primary card-link text-decoration-none">LinkedIn</a>
                                            
                                            
                                            
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
                            <h3 class="text-center my-5 lorem">{{Auth::user()->name}}</h3>
                            <p class="lorem text-center"><strong>Titolo del Profilo:</strong><br> "Appassionato di Tecnologia cerca Affari Imperdibili"

                                <br><strong>Descrizione:</strong><br>
                                Ciao a tutti! Sono un appassionato di tecnologia con un occhio attento per gli affari imperdibili. Se stai cercando le migliori offerte su dispositivi elettronici, gadget all'avanguardia e accessori hi-tech, sei nel posto giusto.<br>
                                
                                La mia passione per la tecnologia mi ha spinto a diventare un esperto nel cercare le occasioni più vantaggiose sul mercato. Conosco le caratteristiche tecniche dei prodotti più recenti e so riconoscere quando un'affare è davvero conveniente.<br> Sono sempre alla ricerca di dispositivi di alta qualità a prezzi accessibili e non perdo mai l'opportunità di condividere le mie scoperte con la community.</p>
                            </p>
                            <section class="container">
                                <div class="row">
                                    @foreach ($announcements as $announcement)
                                    @if($announcement->is_accepted)
                                    <div class="col-12 col-md-6 my-5">
                                        <div class="containerx d-flex justify-content-center">
                                            <div class="card">
                                                <div class="content">
                                                    <h2 class="mb-3">{{$announcement->title}}</h2>
                                                    <img class="imgSection img-fluid"
                                                    {{-- src="https://picsum.photos/250/200" style="width: 250px; height: 200px"> --}}
                                                    src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : "https://picsum.photos/250/200"}}">
                                                    <h3 class="paragrafo my-3">{{$announcement->category->name}}</h3>
                                                    <p class="text-truncate">{{$announcement->body}}</p>
                                                    <a style="background-color:#db9b20;" class="welcomebtn" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endif
                                    @endforeach
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </section>
</x-layout>