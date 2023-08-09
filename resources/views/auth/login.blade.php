<x-layout titolo='LOGIN'>
    
    {{-- div per dare un pò di margine --}}
    <div style=" margin-top:50px;" ></div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8">

                {{-- inizio form --}}
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <button type="submit" class="btn btn-dark mb-3">Login</button>
                    
                    <div class="mb-3">
                        <p>Non sei ancora loggato?   <a href="{{route('register')}}">Che aspetti!</a></p>
                    </div>

                </form>
                {{-- fine form --}}
                

            </div>
        </div>
    </div>

</x-layout>