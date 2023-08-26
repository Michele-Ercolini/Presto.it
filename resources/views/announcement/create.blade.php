<x-layout>
    

    {{-- <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-white">
                <h1 class="paragrafo2" style="margin-bottom: 5">Crea il tuo annuncio</h1>
            </div>
        </div>
        
        
    </header> --}}
    

    
    <div style="height: 100px"></div>
    <h1 class="text-dark text-center title-shadow">Crea il tuo annuncio</h1>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img src="/media/fashon3.png" alt="Fashion" style="width: 500px; height: 850px;">
        </div>
        
        <livewire:create-announcement />
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img src="/media/fashon2.png" alt="Fashion" style="width: 500px; height: 850px;">
        </div>
    </div>
    

     <div style="height: 100px"></div>
    
    <hr class="border border-dark border-3 opacity-80 m-0">
   

</x-layout>