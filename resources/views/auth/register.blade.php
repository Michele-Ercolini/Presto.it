<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-md-3">
                <h1 class="mt-5 text-white text-center" style="font-size: 80px">Register</h1>   
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-3 ">
                {{-- inizio form --}}
                <form class="custom-form" method="POST" action="{{route('register')}}">
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
    
