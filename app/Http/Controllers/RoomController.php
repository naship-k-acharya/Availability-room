<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Helpers\Helpers;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wantedCheckIn = request("checkIn");
        $wantedCheckOut = request("checkOut");
        $wantedCheckInTs = strtotime($wantedCheckIn);
        $wantedCheckOutTs = strtotime($wantedCheckOut);
        $availableRooms = [];



        if ($wantedCheckIn && $wantedCheckOut) {

            $rooms = Room::all();

            foreach ($rooms as $room) {
                $roomBookedDays = Booking::select("checkIn", "checkOut",)
                    ->where("roomId", $room["id"])->get();


                $retificatedDate = [];

                foreach ($roomBookedDays as $dates) {
                    $retificatedDate[] = [strtotime($dates['checkIn']), strtotime($dates['checkOut'])];
                }


                $isAvailable = true;


                foreach ($retificatedDate as $booking) {
                    if ($booking[0] >= $wantedCheckInTs && $booking[1] <= $wantedCheckOutTs) {

                        $isAvailable = false;
                    }
                    if ($booking[0] <= $wantedCheckInTs && $booking[1] >= $wantedCheckOutTs) {

                        $isAvailable = false;
                    }
                    if ($booking[0] <= $wantedCheckOutTs && $booking[0] >= $wantedCheckInTs) {

                        $isAvailable = false;
                    }
                    if ($booking[1] >= $wantedCheckInTs && $booking[1] <= $wantedCheckOutTs) {

                        $isAvailable = false;
                    }
                }


                if ($isAvailable) {
                    $availableRooms[] = $room;
                }
            }
            return view('rooms', ["rooms" => $availableRooms, "roomPhotos" => Helpers::$roomPhotos]);
        } else {
            $rooms = Room::take(5)->get();
            return view('rooms', ['rooms' => $rooms, "roomPhotos" => Helpers::$roomPhotos]);
        }
    }
    public function offers()
    {
        // $rooms = Room::take(5)->get();
        $rooms = Room::orderBy('discount', 'desc')
            ->take(5)->get();
        return view('offers', ['rooms' => $rooms, "roomPhotos" => Helpers::$roomPhotos]);
    }
    public function store(Request $request)
    {
        $ValidateData =  $request->validate(["checkIn" => "required", "checkOut" => "required"]);

        $id = request('id');

        $room = Room::find($id);


        $roomBookedDays = Booking::select("checkIn", "checkOut",)
            ->where("roomId", $id)->get();
        $wantedCheckIn = request('checkIn');
        $wantedCheckOut = request('checkOut');


        $retificatedDate = [];

        foreach ($roomBookedDays as $dates) {
            $retificatedDate[] = [strtotime($dates['checkIn']), strtotime($dates['checkOut'])];
        }



        $isAvailable = true;
        $wantedCheckInTs = strtotime($wantedCheckIn);
        $wantedCheckOutTs = strtotime($wantedCheckOut);
        // dd($wantedCheckIn);
        $currentDate = date('m/d/Y');



        foreach ($retificatedDate as $booking) {
            if ($booking[0] > $wantedCheckInTs && $booking[1] < $wantedCheckOutTs) {

                $isAvailable = false;
            }
            if ($booking[0] < $wantedCheckInTs && $booking[1] > $wantedCheckOutTs) {

                $isAvailable = false;
            }
            if ($booking[0] < $wantedCheckOutTs && $booking[0] > $wantedCheckInTs) {

                $isAvailable = false;
            }
            if ($booking[1] > $wantedCheckInTs && $booking[1] < $wantedCheckOutTs) {

                $isAvailable = false;
            }
        }


        if ($isAvailable) {

            Booking::create([
                "fullName" => "Mario", "bookingDate" => $currentDate,
                "checkIn" =>  Helpers::dateRetification($wantedCheckIn), "checkOut" => Helpers::dateRetification($wantedCheckOut),
                "specialRquest" => "none", "roomType" => $room["bedType"], "roomId" => $id,
                "status" => "booked"
            ]);
            return back()->with("success", "Booked!");
        } else {
            return back()->with("success", "Not Available at the moment");
        }
    }

}