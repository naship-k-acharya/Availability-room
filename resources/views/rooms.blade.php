@extends ("layout")
@section("main")
<!-- about-Us -->
<div class="about-us__home">
    <p>THE ULTIMATE LUXURY</p>
    <h1>Ultimate Room</h1>
    <div class="about-us__home-about">
        <h6>Home | <span>Rooms</span></h6>
    </div>
</div>

<div class="room-card-container">

    @for($i=0; $i<3 ; $i++) <div class="room-card">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide card-img">
                    <img src="{{$roomPhotos[$rooms[$i]['bedType']]}}" alt="" />
                </div>
            </div>
        </div>

        <div class="services-icons">
            <img src="Assets/bed_icon.png" alt="bed" />
            <img src="Assets//wifi_icon.png" alt="wifi" />
            <img src="Assets//automobile_car_icon.png" alt="car" />
            <img src="Assets//cold_icon.png" alt="cold" />
            <img src="Assets//gym_icon.png" alt="gym" />
            <img src="Assets//smoking_no_icon.png" alt="no_smokin" />
            <img src="Assets//cocktail_drink.png" alt="cocktail" />
        </div>
        <div class="minimal-card">
            <h4>Luxury {{$rooms[$i]['bedType']}} room</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor .
            </p>
            <div class="minimal-card__price">
                <h5>${{$rooms[$i]['price']}}<sub>/Night</sub></h5>
                <a href="../room-details?id={{$rooms[$i]['id']}}">
                    <h6>Booking Now</h6>
                </a>
            </div>
        </div>
</div>
@endfor
</div>



<div class="room-card-container">
    @for($i=3; $i<6 ; $i++) <div class="room-card">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide card-img">
                    <img src="{{$roomPhotos[$rooms[$i]['bedType']]}}" alt="" />
                </div>
            </div>
        </div>

        <div class="services-icons">
            <img src="Assets/bed_icon.png" alt="bed" />
            <img src="Assets//wifi_icon.png" alt="wifi" />
            <img src="Assets//automobile_car_icon.png" alt="car" />
            <img src="Assets//cold_icon.png" alt="cold" />
            <img src="Assets//gym_icon.png" alt="gym" />
            <img src="Assets//smoking_no_icon.png" alt="no_smokin" />
            <img src="Assets//cocktail_drink.png" alt="cocktail" />
        </div>
        <div class="minimal-card">
            <h4>Luxury {{$rooms[$i]['bedType']}} room</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor .
            </p>
            <div class="minimal-card__price">
                <h5>${{$rooms[$i]['price']}}<sub>/Night</sub></h5>
                <a href="room-details?id={{$rooms[$i]['id']}}">
                    <h6>Booking Now</h6>
                </a>
            </div>
        </div>
</div>
@endfor
</div>



@endsection