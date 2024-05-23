@extends ("layout")
@section("main")

<!-- about-Us -->
<div class="about-us__home">
    <p>THE ULTIMATE LUXURY</p>
    <h1>Our Offers</h1>
    <div class="about-us__home-about">
        <h6>Home | <span>Offers</span></h6>
    </div>
</div>

@foreach($rooms as $room)

<div class="offers">
    <div class="offers__prices">
        <img src="{{$roomPhotos[$room['bedType']]}}" alt="room-luxury" />
        <div class="offers__prices-text">
            <h5>${{$room['price']}}<sub>/Night</sub></h5>
            <h5>${{round($room['price']*(1-$room['discount']/100))}}<sub>/Night</sub></h5>
        </div>
    </div>
    <h6>DOUBLE BED</h6>
    <h1 class="offers__title">Luxury {{$room['bedType']}}</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehend erit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
</div>
<section class="amenities amenities-offers">
    <div class="amenities__list">
        <div class="amenities__list__1">
            <p class="amenities__list__p">
                <img src="Assets/icon/air-conditioner.png" alt="" />Air
                conditioner
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/breakfast.png" alt="" />Breakfast
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/cleaning.png" alt="" />Cleaning
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/grocery.png" alt="" />Grocery
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/shop-near.png" alt="" />Shop near
            </p>
        </div>

        <div class="amenities__list__2">
            <p class="amenities__list__p">
                <img src="Assets/icon/wifi.png" alt="" />High speed WiFi
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/kitchen.png" alt="" />Kitchen
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/shower.png" alt="" />Shower
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/single-bed.png" alt="" />Single bed
            </p>
            <p class="amenities__list__p">
                <img src="Assets/icon/towel.png" alt="" />Towels
            </p>
        </div>
    </div>
    <a href="../room-details?id={{$room['id']}}">
        <button class="book-now">BOOK NOW</button>
    </a>
</section>

@endforeach
@endsection