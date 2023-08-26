<x-layout>
    
    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col- mb-5">
                <h1 class="title-shadow paragrafo2 text-center text-white display-1">Presto.it</h1>
                <form class="search-form text-center" action="{{route('announcements.search')}}" method="GET">
                    @csrf
                    <input type="search" name="searched" class="text-center search-input" placeholder="Cerca prodotti...">
                    <br>
                    <div class="text-center my-4">
                        <button type="submit" class="btn1 paragrafo2 btn search-button btn-dark ">{{__('ui.cerca')}}</button>
                    </div>
                </form>
                @if (session('access.denied'))
                    <div class="alert alert-danger">
                        {{ session('access.denied') }}
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </header>
    <hr class="border border-dark border-3 opacity-80 m-0">

    <div class="container-fluid paragraph-container bg-dark">
        <div class="row justify-content-center">
            <h3 style="color:#db9b20" class="text-center title-shadow paragrafo display-3 my-3">{{__('ui.introduzione')}}</h3>
            <h4 style="color:#db9b20"class="text-center title-shadow " >{{__('ui.semi-introduzione')}}</h4>
            <div class="col-md-4 my-3">
                <div class="containerx d-flex justify-content-center">
                    <div class="card">
                        <div class="content">
                            <h2 class="mb-3 text-uppercase title-shadow">I nostri marchi</h2>
                                
                            <img src="/media/GiorgioArmani.png" height="100px" width="100"></li>
                            <img src="/media/Versace.png" height="100px" width="100px"></li>
                            <img src="/media/Rolexpng.png" height="100px" width="100px"></li>
                            <img src="/media/Tudor.png" height="100px" width="100px"></li>
                            <img src="/media/Ralphlauren.png" height="100px" width="100px"></li>
                            <img src="/media/CK.png" height="100px" width="100px"></li>
                            <img src="/media/DolceGabbana.png" height="100px" width="100px"></li>
                            <img src="/media/Prada.png" height="100px" width="100px"></li>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 ">
                <video loop autoplay muted height="500px" width="500px" class="VideoAbito" >
                    <source  src="/media/VideoGioggio.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-md-4 my-3 ">
                
                <div class="containerx d-flex justify-content-center">
                    <div class="card">
                        <div class="content">
                            <h2 class="mb-3 text-uppercase title-shadow">Dove siamo:</h2>
                            <a href="https://www.google.it/maps/dir//Via+Garofalo,+Milano+MI/@45.4802987,9.2168204,17z/data=!4m18!1m8!3m7!1s0x4786c6eec0fd7301:0xf081628b96033d8!2sVia+Garofalo,+Milano+MI!3b1!8m2!3d45.480295!4d9.2193953!16s%2Fg%2F1tfyz_hf!4m8!1m0!1m5!1m1!1s0x4786c6eec0fd7301:0xf081628b96033d8!2m2!1d9.2193953!2d45.480295!3e4?entry=ttu" style="background-color: #db9b20" class=" text-uppercase title-shadow text-uppercase " target="blank">Milano,via Garofali 43</a>
                            <a href="https://www.google.it/maps/place/Corso+Vittorio+Emanuele+II,+Torino+TO/@45.0668561,7.6648983,17z/data=!3m1!4b1!4m6!3m5!1s0x47886d11184fd105:0x83354bd41d187311!8m2!3d45.0668523!4d7.6674732!16s%2Fg%2F1218c_7_?entry=ttu"  style="background-color: #db9b20;" class="text-uppercase title-shadow text-uppercase" >Torino,via crisanzio 89</a>
                            <a href="https://www.google.it/maps/place/Via+Imperiale,+16143+Genova+GE/@44.4096035,8.9599524,17z/data=!3m1!4b1!4m6!3m5!1s0x12d34399565db97f:0xa18a636c08880efe!8m2!3d44.4095997!4d8.9625273!16s%2Fg%2F119wrmjbj?entry=ttu"  style="background-color: #db9b20;" class="text-uppercase title-shadow text-uppercase" >Genova,via Impiccato  89</a>
                            <a href="1089053,16.6765134,17z/data=!3m1!4b1!4m6!3m5!1s0x1347f19f0b112a6b:0x63e705e29dfbf2ec!8m2!3d41.1089013!4d16.6790883!16s%2Fg%2F119v87lbw?entry=ttu"  style="background-color: #db9b20;" class="text-uppercase title-shadow text-uppercase" >Bitonto,viale Capurso 19</a>

                            <p class="text-truncate text-uppercase title-shadow" class="text-uppercase"></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <hr class="border border-dark border-3 opacity-80 m-0">
    {{-- Cards Annunci --}}
    <div class="container">
        <h3 class="text-center title-shadow color1 paragrafo display-3 my-3">{{__('ui.nostri-annunci')}}</h3>
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-5">
                <div data-aos="zoom-in-down" data-aos-duration="2000">
                    <div class="containerx d-flex justify-content-center">
                        <div class="card">
                            <div class="content">
                                <h2 class="mb-3 text-uppercase">{{$announcement->title}}</h2>
                                <img class="imgSection img-fluid"
                                src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250,200) : "https://picsum.photos/250/200"}}">
                                <h3 class="paragrafo my-3">{{$announcement->category->name}}</h3>
                                <p class="text-uppercase text-truncate">{{$announcement->body}}</p>
                                <a class="welcomebtn" style="color:black; background-color:#db9b20;" href="{{route('announcement_detail', compact('announcement'))}}">{{__('ui.vediPiù')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    {{-- Fine Cards Annunci --}}
    <hr class="border border-dark border-3 opacity-80 m-0">

    <h1 class="color1 text-uppercase title-shadow mt-5 text-center">{{__('ui.sito')}}</h1>

    <section class="container-fluid marginSection">
        <div class="row justify-content-center align-items-center">
            <div style="background-color: #edbf67;" class="col-12 col-lg-5 fade-items" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div>
                    <h5 class="lh-lg fs-3 text-center" style="color:#952932"><strong>{{__('ui.titolo1')}}</strong></h5>
                    <p style="color:black" class="text-center lh-lg ">{{__('ui.descrizione1')}}</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/350" alt="">
            </div>
        </div>
    
        <div class="row justify-content-center align-items-center my-5">
            <div  class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/351" alt="">
            </div>
            <div style="background-color: #edbf67;" class="col-12 col-lg-5 fade-items" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div>
                    <h5 class="lh-lg fs-3 text-center" style="color:#952932"><strong>{{__('ui.titolo2')}}</strong></h5>
                    <p style="color:black" class="text-center lh-lg ">{{__('ui.articolo2')}}</p>
                </div>
            </div>
    
        </div>


        <div  class="row justify-content-center align-items-center my-5">
            <div style="background-color: #edbf67;" class="col-12 col-lg-5 fade-items" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div>
                    <h5 class="lh-lg fs-3 text-center" style="color:#952932"><strong>{{__('ui.titolo3')}}</strong></h5>
                    <p style="color:black" class=" text-center lh-lg "></strong>{{__('ui.articolo3')}}</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/352" alt="">
            </div>
        </div>

    </section>


<hr class="border border-dark border-3 opacity-80">

<!-- Inizio section1 numeri Casuali -->
<div class="container-fluid spazio mt-5">
    <div class="row text-center">
        <div class="col-12 col-md-6">
            <h2 class="my-5">{{__('ui.counter1')}}</h2>
            <p class="fs-1 text-bold ff-title" id="primoNumero" >0</p>
            <img class="rounded-circle immaginitonde my-5  border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
        </div>
        <div class="col-12 col-md-6 ff-title">
            <img class="rounded-circle immaginitonde my-5 border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
            <h2 class="my-5">{{__('ui.counter2')}}</h2>
            <p class="fs-1 text-bold" id="secondoNumero">0</p>
            
        </div>
    </div>
</div>
<!-- Fine section1 numeri Casuali -->

<hr class="border border-dark border-3 opacity-80 m-0">
</x-layout>