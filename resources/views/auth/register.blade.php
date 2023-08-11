<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-md-3">
                
                {{-- inizio form --}}
                <form class="custom-form my-5" method="POST" action="{{route('register')}}" style="padding-top: 0px; padding-bottom: 0px ">
                    <div>
                        <p class=" text-white text-center" style="font-size: 50px">Register</p>  
                    </div>  
                    @csrf
                    <div class="mb-3">
                        <label class="formLabel" for="userName" class="form-label">Nome Utente</label>
                        <input class="formInput text-white" type="text"  id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userEmail" class="form-label">Email</label>
                        <input class="formInput text-white" type="email"  id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Password</label>
                        <input class="formInput text-white" type="password"  id="userPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Conferma Password</label>
                        <input class="formInput text-white" type="password"  id="userPassword" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn1 btn-dark mb-3">Registrati</button>
                </form>
                {{-- fine form --}}
    
            </div>
        </div>
    </div>
    </header>


</x-layout>
    
