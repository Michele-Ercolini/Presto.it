<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-md-3">
                
                
                {{-- inizio form --}}
                <form data-aos="zoom-out-up" class="custom-form" method="POST" action="{{route('login')}}" style="padding-top: 0px; padding-bottom: 0px ">
                    <p class="mt-5 text-white text-center" style="font-size: 50px">{{__('ui.accedi')}}</p>
                    @csrf
                    <div class="mb-3">
                        <label class="formLabel" for="userEmail" class="form-label">{{__('ui.email')}}</label>
                        <input class="formInput text-white" type="email"  id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Password</label>
                        <input class="formInput text-white" type="password"  id="userPassword" name="password">
                    </div>
                    <button id="buttonLogin" type="submit" class="btn btn1 btn-dark mb-3">{{__('ui.accedi')}}</button>
                    <audio src="/media/Suono.mp3" id="track"></audio>
    
                    <div class="mb-3">
                        <p>{{__('ui.pLogin')}}   <br><a href="{{route('register')}}">{{__('ui.linklog')}}</a></p></br>
                    </div>
    
                    <script>
                        let track=document.querySelector('#track')
                        let buttonLogin=document.querySelector('#buttonLogin')
                        console.dir(track);
    
                        buttonLogin.addEventListener('click', ()=>{
                            track.play()
                        })
                    </script>
    
                </form>
    
    
                {{-- fine form --}}
    
            </div>
        </div>
    </header>

</x-layout>
    

    
