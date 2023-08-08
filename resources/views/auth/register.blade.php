<x-layout>
    
    {{-- div per dare un pò di margine --}}
    <div style="margin-bottom: 50px"></div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8">

                {{-- inizio form --}}
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
                {{-- fine form --}}

            </div>
        </div>
    </div>

</x-layout>