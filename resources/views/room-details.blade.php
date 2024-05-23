@extends ("layout")
@section("main")
<div class="about-us__home">
    <p>THE ULTIMATE LUXURY</p>
    <h1>Ultimate Room</h1>
    <div class="about-us__home-about">
        <h6>Home | <span>Room Details</span></h6>
    </div>
</div>
<div>

    <h6 class="double-bed__title">{{strtoupper($room['bedType'])}}</h6>
    <h1>Luxury {{$room["bedType"]}}</h1>
    <h5>${{$room["price"]}}<sub>/Night</sub></h5>
    <div class="double-bed">
        <img src="{{$roomPhotos[$room['bedType']]}}" alt="double-room">
    </div>
</div>
<!-- form-->
<section>
    <h4 class="availability-title">Check Availabiity</h4>
    <form class="main__form__container detail-form" method="post">
        @csrf
        <div class="main__form__container__body detail-form__input1">
            <label>Check in</label>
            <input type="date" id="date" placeholder="24th march 2020" name="checkIn" pattern="\d{1,2}/\d{1,2}/\d{4}"></input>
        </div>
        <div class="main__form__container__body">
            <label>Check out</label>
            <input type="date" placeholder="30th march 2020" name="checkOut" pattern="\d{1,2}/\d{1,2}/\d{4}"></input>
        </div>
        <button>CHECK AVAILABILITY</button>
    </form>
    @if($status=Session::get("success"))

    <div class="pageDetailsAvailability__modalContainer" id="availabilityModal">
        <div class="pageDetailsAvailability__modal">
            <h2 class="pageDetailsAvailability__modal__title">
                ¡Thank you for your request!

            </h2>
            <p class="pageDetailsAvailability__modal__text">
                We have received it correctly. Someone from our Team will get back to you very soon.
                
            </p>
            <button class="button button-variant1 pageDetailsAvailability__modal__btn" id="modalBtn">
                ACEPT
            </button>
        </div>
    </div>

    @endif

</section>
<div class="paragraph-lorem">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
</div>
<!-- amanities-->
<section class="amenities">
    <h5 class="amenities__title">Amenities.</h5>
    <div class="amenities__thin-line"></div>
    <div class="amenities__list">
        <div class="amenities__list__1">
            <p class="amenities__list__p"><img src="Assets/icon/air-conditioner.png" alt="">Air conditioner</p>
            <p class="amenities__list__p"><img src="Assets/icon/breakfast.png" alt="">Breakfast</p>
            <p class="amenities__list__p"><img src="Assets/icon/cleaning.png" alt="">Cleaning</p>
            <p class="amenities__list__p"><img src="Assets/icon/grocery.png" alt="">Grocery</p>
            <p class="amenities__list__p"><img src="Assets/icon/shop-near.png" alt="">Shop near/p>
            <p class="amenities__list__p"><img src="Assets/icon/247.png" alt="">24/7 Online Support</p>
            <p class="amenities__list__p"><img src="Assets/icon/svg-gobbler - 2022-03-03T183435.137 1.png" alt="">Smart Security</p>
        </div>
        <div class="amenities__list__2">
            <p class="amenities__list__p"><img src="Assets/icon/wifi.png" alt="">High speed WiFi</p>
            <p class="amenities__list__p"><img src="Assets/icon/kitchen.png" alt="">Kitchen</p>
            <p class="amenities__list__p"><img src="Assets/icon/shower.png" alt="">Shower</p>
            <p class="amenities__list__p"><img src="Assets/icon/single-bed.png" alt="">Single bed</p>
            <p class="amenities__list__p"><img src="Assets/icon/towel.png" alt="">Towels</p>
            <p class="amenities__list__p"><img src="Assets/icon/locker.png" alt="">Strong Locker</p>
            <p class="amenities__list__p"><img src="Assets/icon/expert-team.png" alt="">Expert Team</p>
        </div>
    </div>
</section>
<!--avatar-->
<div class="avatar">
    <img src="Assets/avatar1.jpg" alt="">
    <div class="avatar__check">
        <!-- <img src="Assets/icon/check_mark_icon 1.png" alt=""> -->
    </div>
    <h4>Rosalina D. William</h4>
    <span>Founder, Qux Co.</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
</div>
<div class="cancelation">
    <h5>Cancelation</h5>
    <div class="amenities__thin-line"></div>
    <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    <h5>Related Rooms</h5>
    <div class="amenities__thin-line --line"></div>
</div>
<section class="rooms">
    <div class="room-card-container">
        <div class="room-card">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide card-img">
                        <img src="Assets/img-room/room1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="services-icons" style="margin-bottom:40px">
                <img src="Assets/bed_icon.png" alt="bed" />
                <img src="Assets//wifi_icon.png" alt="wifi" />
                <img src="Assets//automobile_car_icon.png" alt="car" />
                <img src="Assets//cold_icon.png" alt="cold" />
                <img src="Assets//gym_icon.png" alt="gym" />
                <img src="Assets//smoking_no_icon.png" alt="no_smokin" />
                <img src="Assets//cocktail_drink.png" alt="cocktail" />
            </div>
            <div class="minimal-card">
                <h4>Luxury Single room</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor .
                </p>
                <div class="minimal-card__price">
                    <h5>$340<sub>/Night</sub></h5>

                    <h6>Booking Now</h6>

                </div>
            </div>
        </div>
        <div class="room-card">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide card-img">
                        <img src="Assets/img-room/room1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="services-icons" style="margin-bottom:40px">
                <img src="Assets/bed_icon.png" alt="bed" />
                <img src="Assets//wifi_icon.png" alt="wifi" />
                <img src="Assets//automobile_car_icon.png" alt="car" />
                <img src="Assets//cold_icon.png" alt="cold" />
                <img src="Assets//gym_icon.png" alt="gym" />
                <img src="Assets//smoking_no_icon.png" alt="no_smokin" />
                <img src="Assets//cocktail_drink.png" alt="cocktail" />
            </div>
            <div class="minimal-card">
                <h4>Luxury Single room</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor .
                </p>
                <div class="minimal-card__price">
                    <h5>$340<sub>/Night</sub></h5>

                    <h6>Booking Now</h6>

                </div>
            </div>
        </div>
    </div>

</section>
@endsection