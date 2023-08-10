<x-layout titolo='LOGIN'>
    
    {{-- div per dare un pò di margine --}}
    <div style=" margin-top:50px;" ></div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8">

                {{-- inizio form --}}
                <form class="custom-form" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="formLabel" for="userEmail" class="form-label">Email address</label>
                        <input class="formInput text-white" type="email" class="form-control" id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Password</label>
                        <input class="formInput text-white" type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <button id="buttonLogin" type="submit" class="btn btn1 btn-dark mb-3">Login</button>
                    <audio src="/media/sound.mp4" id="track"></audio>
                    
                    <div class="mb-3">
                        <p>Non sei ancora loggato?   <br><a href="{{route('register')}}">Che aspetti!</a></p></br>
                    </div>

                </form>
                {{-- fine form --}}
                

            </div>
        </div>
    </div>

</x-layout>