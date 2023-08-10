<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    {{-- iconbox  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- Swiper css -->
     <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Document</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-navbar />
    
    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-md-3">
                <h1 class="mt-5 text-white text-center" style="font-size: 80px">Login</h1> 
             
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-3 ">
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
                    <button id="buttonLogin" type="submit" class="btn btn1 btn-dark mb-3">Login</button>
                    <audio src="/media/sound.mp4" id="track"></audio>

                    <div class="mb-3">
                        <p>Non sei ancora loggato?   <br><a href="{{route('register')}}">Che aspetti!</a></p></br>
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
    </div>
</header>


    <x-footer />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    <script src="https://kit.fontawesome.com/0f3153532c.js" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
    
