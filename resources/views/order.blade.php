@extends ("layout")
@section("main")

<div>
    <h3 class="Order-h3">Please, place your order!</h3>

    <form id="order-form" class="contact-form" method="post">
        @csrf

        <div class="select-wrapper">
            <select name=" roomId" id="roomId">
                @foreach($rooms as $room)
                <option value="{{$room['id']}}">{{$room["floorNumber"]}}-{{$room["doorNumber"]}}</option>
                @endforeach
            </select>
            <select name="type" id="type">
                <option value="food">Food</option>
                <option value="others">Others</option>
            </select>
        </div>


        <div class="contact-form__input-container">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Please let us know, what you want"></textarea>
            <img src="Assets/icon/contact/pencil.png" alt="" />
        </div>
        <button class="contact-form__submit" type="submit">Place Order</button>
    </form>

    <div class="cards">
        @foreach($orders as $order)
        <div class="card">
            <div class="card-text">
                <p>Order at: </p>
                <p>{{$order["created_at"]}}</p>
                <p>Order type:</p>
                <p>{{$order["type"]}}</p>
                <p>Order message: </p>
                <p id="p-{{$order['id']}}">{{$order["description"]}}</p>
                <form method="post" action="/order" id="f-{{$order['id']}}" class="hidden descriptionForm">
                    @csrf
                    @method("put")

                    <textarea name="description" id="descriptionTextArea" cols="30" rows="2">
                    {{$order["description"]}}
                    </textarea>
                    <input type="text" name="orderId" value="{{$order['id']}}" hidden>

                </form>
            </div>
            <div class="card-buttons">
                <span data-oid="{{$order['id']}}" class="material-symbols-outlined editButton" style="color: #62f088;">
                    edit
                </span>
                <form method=" post" action="/order">
                    @csrf
                    @method("delete")
                    <input type="text" name="orderId" value="{{$order['id']}}" hidden>
                    <button class="deleteButton"><span class="material-symbols-outlined">
                            delete
                        </span></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    @if($status=Session::get("success"))

    <div class="pageDetailsAvailability__modalContainer" id="availabilityModal">
        <div class="pageDetailsAvailability__modal">
            <h2 class="pageDetailsAvailability__modal__title">
                ¡Thank you for your Order!

            </h2>
            <p class="pageDetailsAvailability__modal__text">
                We have received it correctly. Someone from our Team will get back to you very soon. <br>
                The Miranda Hotel
            </p>
            <button class="button button-variant1 pageDetailsAvailability__modal__btn" id="modalBtn">
                ACEPT
            </button>
        </div>
    </div>

    @endif
</div>


@endsection