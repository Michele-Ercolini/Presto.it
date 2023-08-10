<x-layout titolo='REGISTRATI'>
    
    {{-- div per dare un pò di margine --}}
    <div style="margin-bottom: 50px"></div>


    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col col-md-8">

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

</x-layout>
