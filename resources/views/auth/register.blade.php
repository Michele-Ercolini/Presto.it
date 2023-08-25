<x-layout>

    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-md-3">
                
                {{-- inizio form --}}
                <form data-aos="zoom-out-up" class="custom-form " method="POST" action="{{route('register')}}" style="background-color:#db9b20;padding-top: 0px; padding-bottom: 0px; margin-top:70%">
                    <div>
                        <p class="title-shadow text-dark   text-center" style="color:dark; font-size: 50px">{{__('ui.registrati')}}</p>  
                    </div>  
                    @csrf
                    <div class="mb-3">
                        <label class="formLabel" for="userName" class="form-label">{{__('ui.nomeUtente')}}</label>
                        <input class="bg-dark formInput text-white" type="text"  id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userEmail" class="form-label">Email</label>
                        <input class="bg-dark formInput text-white" type="email"  id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">Password</label>
                        <input class="bg-dark formInput text-white" type="password"  id="userPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="formLabel" for="userPassword" class="form-label">{{__('ui.confermaPsw')}}</label>
                        <input class="bg-dark formInput text-white" type="password"  id="userPassword" name="password_confirmation">
                    </div>
                    <button type="submit" class="bb btn btn1 btn-dark mb-3">{{__('ui.registrati')}}</button>
                </form>
                {{-- fine form --}}
    
            </div>
        </div>
    </div>
    </header>


</x-layout>
    
