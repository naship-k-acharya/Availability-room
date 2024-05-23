<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="Assets">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Hotel</title>
</head>

<body>
    <header>
        <div id="nav-scroll" class="container-menu">
            <div class="container-menu__toggle">
                <div class="container-menu__burger"><img src="Assets/1.png"></div>
                <div class="container-menu__burger-close"><img src="Assets/icon/cerrar.png"></div>
            </div>
            <a href="./index">
                <div class="container-menu__box-h">
                    <p>H</p>
                </div>
            </a>
            <div class="container-menu__main-title"><span class="container__title">HOTEL</span>
                <p>Rajesh</p>
            </div>
            <div class="nav__list ">
                <a class="a-menu" href="about">About Us</a>
                <a class="a-menu" href="rooms">Rooms</a>
                <a class="a-menu" href="offers">Offers</a>
                <a class="a-menu" href="contact">Contact</a>
                <a class="a-menu" href="order">Order</a>
            </div>
            <div class="container-menu__headers-icon">
                <div><a href="dashboard"><img src="Assets/Vector.png"></a></div>
                @if(Auth::check())


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                    </x-dropdown-link>
                </form>
                @else
                <a href="/login">
                    <span class="material-symbols-outlined">
                        login
                    </span>
                </a>


                @endif
            </div>
        </div>
    </header>
    @section ("main")
    @show

   
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/JavaScript/index.js"></script>
</body>

</html>