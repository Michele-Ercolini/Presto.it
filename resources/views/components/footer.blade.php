<footer class="bg-dark text-center text-white">
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="my-4">
            
            <!-- Facebook -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://www.facebook.com/" target="blank" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://twitter.com" target="blank" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://google.com" target="blank" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://www.instagram.com/" target="blank" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://linkedin.com" target="blank" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn1 btn-outline-light btn-floating mx-2" href="https://github.com/Hackademy-83/Presto_gruppo_03_CyborgTech" target="blank" role="button"><i class="fab fa-github"></i></a>
            
            
            
        </section>
        <!-- Section: Social media -->
        
        {{-- Section Search --}}

        <form class="search-form" action="{{route('announcements.search')}}" method="GET">
            <input type="search" name="searched" class="text-center search-input" placeholder="Cerca prodotti...">
            <br>
            <div class="text-center my-4">
                <button type="submit" class="btn1 paragrafo2 btn search-button btn-dark ">Cerca</button>
            </div>
        </form>

        {{-- End - Section Search --}}


        <!-- Section: Form -->
        {{-- <section class="">
            <form action="">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <!-- Email input -->
                        <div class="form-outline form-white my-3">
                            <input type="email" id="form5Example21" class="form-control text-center" placeholder="email address"/>
                            <label class="form-label mt-3" for="form5Example21">Sign up for our newsletter</label>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Invia
                            </button>
                        </div>                    
                    </div>
                </div>
            </form>
        </section> --}}
        <!-- Section: Form -->
        
        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                Presto.it, la realtà che ha stupito miglioni di americani ora è finalmente arrivata nel nostro paese. Qualsiasi tipo di annuncio a portata di mano, basta un click e puoi accedere ad ogni tipo di prodotto; case, alberi,auto e fogli di giornale, tutto quello che vuoi!
            </p>
        </section>
        <!-- Section: Text -->
        
        <!-- Section: Links -->
        <section class="">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">@copyright</h5>
                    
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">CyborgTech</h5>
                    
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <a class="aFooter" href={{route('user_lavora')}}><h5 class="text-uppercase" >Lavora con noi</h5></a>
                    
                    
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Lavora con voi</h5>
                    
                </div>
            </div>
        </section>
        <!-- Section: Links -->
    </div>
    
</footer>