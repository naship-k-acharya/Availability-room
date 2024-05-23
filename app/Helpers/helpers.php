<?php

namespace App\Helpers;



class Helpers
{

    static $roomPhotos = [
        "single" => "Assets/img-room/room4.jpg",
        "double" => "Assets/img-room/room1.jpg",
        "double-superior" => "Assets/img-room/room2.jpg",
        "suite" => "Assets/img-room/room3.jpg",
    ];

    static function dateRetification($date)
    {
        $parts =  explode("-", $date);
        $newDateArr = [$parts[1], $parts[2], $parts[0]];
        $newDate = implode("/", $newDateArr);
        return $newDate;
    }
};