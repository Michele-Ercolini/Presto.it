<x-layout>
    <div class="container-fluid paragraph-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p style="display/4" class="text-center paragrafo">Benvenuti nel nostro elegante negozio online di moda!</p>
                <p style="display/6"> Scopri uno straordinario mondo di stile e tendenze con il nostro esclusivo sito e-commerce di moda.</p>
                <p style="display/8" class="text-center paragrafo">Siamo qui per offrirti un'esperienza di shopping unica.</p>
                <p style="display/10">Trova gli ultimi capi di tendenza e gli accessori più alla moda, tutto comodamente a portata di clic.</p>
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
                            <h3>Categoria: {{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    <section class="container-fluid marginSection">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-5 content spacer fade-items d-flex justify-content-center align-items-center" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Offerte Irresistibili:</strong> Cerchiamo costantemente offerte vantaggiose per farti risparmiare sui tuoi acquisti preferiti. Dai saldi stagionali alle promozioni esclusive, ti garantiamo prezzi competitivi senza compromettere la qualità dei prodotti.</p>
            </div>
            <div class="col-12 col-md-4">
               <img class="imgSection" src="" alt="">
            </div>
        </div>
    </div>
</section>








</x-layout>