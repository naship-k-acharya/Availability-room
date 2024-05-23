@extends ("layout")
@section("main")
<section class="main">
    <h4 class="main__pre-title">THE ULTIMATE LUXURY EXPERIENCE</h4>
    <h1 class="main__title">The Perfect Base For You</h1>
    
    <form class="main__form__container" action="/rooms" method="get">
        <div class="main__form__container__body">
            <label>Arrival Date</label>
            <input type="date" id="date" placeholder="24th march 2020" name="checkIn">
        </div>
        <div class="main__form__container__body">
            <label>Departure Date</label>
            <input type="date" placeholder="30th march 2020" name="checkOut">
        </div>
        <button>CHECK AVAILABILITY</button>
    </form>
</section>
<section class="about-us">
    <div class="about-us__discover">
        <h6>ABOUT US</h6>
        <h2>Discover Our Underground.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </p>
        <button><a href="/rooms">BOOK NOW</a></button>
    </div>
    <div>
        <div class="strong-team">
            <img class="about-pic" src="Assets/alarma-hotel.jpg" alt="hotel-bell">
            <div class="strong-team__title-box">
                <img class="persons-shadow" src="Assets/personsShadow.png">
                <img class="persons-img" src="Assets/persons.png">
                <h4>Strong Team</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
        <div class="luxury_container">
            <img class="luxury_container__pic" src="Assets/suite-dormitorio-moderno-clasico-lujo-hotel.jpg" alt="suite">
            <div class="luxury_container__body">
                <img class="img-calendar" src="Assets/bookingvector.png">
                <h4>Luxury Room</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>

</section>
<section class="rooms">
    <h6>ROOMS</h6>
    <h2>Hand Picked Rooms</h2>
    <div class="services-icons">
        <img src="Assets/bed_icon.png" alt="bed">
        <img src="Assets/wifi_icon.png" alt="wifi">
        <img src="Assets/automobile_car_icon.png" alt="car">
        <img src="Assets/cold_icon.png" alt="cold">
        <img src="Assets/gym_icon.png" alt="gym">
        <img src="Assets/smoking_no_icon.png" alt="no_smokin">
        <img src="Assets/cocktail_drink.png" alt="cocktail">
    </div>
    <div class="room__slider">
        <div class="swiper swiper_room">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper swiper_room-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room1.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room2.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room3.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room4.jpg" alt="room-suite-special"></div>
                ...
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="minimal-card">
        <h4>Minimal Duplex Room</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        <h5>$345<sub>/Night</sub></h5>
    </div>
</section>
<!---->




@endsection