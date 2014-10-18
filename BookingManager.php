<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 20:32
 */

require_once("Reservation.php");

class BookingManager {

    static function bookRoom($room, $reservation){
        echo "\n\rRoom <strong>$room->roomNumber</strong> successfully booked for <strong>".$reservation->getGuest()."</strong> from <time>".$reservation->getStartDate()->format('d.m.Y')."</time> to <time>".$reservation->getEndDate()->format('d.m.Y')."</time>!\r\n";
    }
} 