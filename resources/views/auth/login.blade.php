<x-layout titolo='LOGIN'>
   
    
    {{-- div per dare un pò di margine --}}
    <div style=" margin-top:50px;" ></div>

    {{-- <div style="height: 10px"></div> --}}

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8">

                {{-- inizio form --}}
                <form data-aos="zoom-out-up" class="custom-form" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="formLabel" for="userEmail" class="form-label">Email address</label>
                        <input class="formInput text-white" type="email"  id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Password</label>
                        <input class="formInput text-white" type="password"  id="userPassword" name="password">
                    </div>
                    <button type="submit" class="btn btn1 btn-dark mb-3">Login</button>
                    
                    <div class="mb-3">
                        <p>Non sei ancora loggato?   <br><a href="{{route('register')}}">Che aspetti!</a></p></br>
                    </div>

                </form>
                {{-- fine form --}}
                

            </div>
        </div>
    </div>

</x-layout>