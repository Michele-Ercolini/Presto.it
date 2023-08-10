<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    {{-- iconbox  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- Swiper css -->
     <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Document</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar/>
    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white" style="font-size: 80px">Presto.it</h1>
                <form class="search-form" action="/search" method="GET">
                    <input type="text" name="q" class="text-center search-input" placeholder="Cerca prodotti...">
                    <button type="submit" class="btn1  btn-outline-dark search-button">Cerca</button>
                </form>
            </div>
        </div>
    </header>
    
    
    <hr class="border border-dark border-3 opacity-80">
    <div class="container-fluid paragraph-container my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p class="text-center paragrafo">Benvenuti nel nostro elegante negozio online!</p>
                <p > Scopri uno straordinario mondo di stile e tendenze con il nostro esclusivo sito e-commerce.</p>
                <p  class="text-center paragrafo">Siamo qui per offrirti un'esperienza di shopping unica.</p>
                <p >Trova prodotti di tendenza e gli accessori più alla moda, tutto comodamente a portata di clic.</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col col-md-4">
                <div data-aos="zoom-in-down" data-aos-duration="2000">
                <div class="containerx">
                    <div class="card">
                        <div class="content">
                            <img class="imgSection" src="https://picsum.photos/250" height="200px" width="200px">
                            <h2>{{$announcement->title}}</h2>
                            <h3>Categoria: {{$announcement->category->name}}</h3>
                            <p class="text-truncate">{{$announcement->body}}</p>
                            <a style="margin-bottom:60px;" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                        </div>
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
               <img class="imgSection" src="https://picsum.photos/350" alt="">
            </div>
        </div>

        <div class="row justify-content-center align-items-center my-5">
            <div class="col-12 col-md-4">
                <img class="imgSection" src="https://picsum.photos/351" alt="">
             </div>
            <div class="col-12 col-md-5 content spacer fade-items d-flex justify-content-end align-items-center" data-aos="fade-left"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Semplice e Sicuro Processo d'Acquisto:</strong> Il nostro processo di acquisto è progettato per essere veloce e sicuro. Scegli i prodotti che desideri, aggiungili al carrello e completa l'acquisto in pochi semplici passaggi. Utilizziamo tecnologie di crittografia avanzate per proteggere i tuoi dati personali e finanziari, garantendo una transazione senza preoccupazioni.</p>
            </div>
          
        </div>


        <div class="row justify-content-center align-items-center my-5">
            <div class="col-12 col-md-5 content spacer fade-items d-flex justify-content-center align-items-center" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Registrati:</strong>per i clienti registarti , vantaggi esclusivi , promozioni e l'opportunità di vendere i propri prodotti . Clicca sul pulsante di registrazione e completa il breve modulo con le tue informazioni di base.Riceverai una e-mail di conferma con le istruzioni per attivare il tuo account.Accedi al tuo nuovo account e inizia a esplorare il mondo di prodotti di alta qualità , occasioni straordinarie e inizia a caricare i tuoi prodotti.</p>
            </div>
            <div class="col-12 col-md-4">
               <img class="imgSection" src="https://picsum.photos/352" alt="">
            </div>
        </div>
        
    </div>
</section>


<hr class="border border-dark border-3 opacity-80">

 <!-- Inizio section1 numeri Casuali -->
 <div class="container-fluid spazio mt-5">
    <div class="row text-center">
      <div class="col-12 col-md-6">
        <h2 class="my-5">Vendite giornaliere</h2>
        <p class="fs-1 text-bold ff-title" id="primoNumero" >0</p>
        <img class="rounded-circle immaginitonde my-5  border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
      </div>
      <div class="col-12 col-md-6 ff-title">
          <img class="rounded-circle immaginitonde my-5 border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
          <h2 class="my-5">Visite odierne</h2>
          <p class="fs-1 text-bold" id="secondoNumero">0</p>
        
      </div>
    </div>
  </div>
  <!-- Fine section1 numeri Casuali -->






<x-footer />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
      <script src="https://kit.fontawesome.com/0f3153532c.js" crossorigin="anonymous"></script>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      @livewireScripts
      @vite('resources/js/app.js')
  </body>
  </html>


