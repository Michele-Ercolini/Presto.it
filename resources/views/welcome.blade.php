<x-layout titolo='Presto.it'>
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
                <div data-aos="zoom-in-down" data-aos-duration="3000">
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




</x-layout>