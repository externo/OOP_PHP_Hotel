<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 16:16
 */


require_once("../Hotel/Guest.php");
require_once("../Hotel/Reservation.php");
require_once("../Hotel/iReservable.php");
require_once("../Hotel/Room/Room.php");
require_once("../Hotel/Room/SingleRoom.php");
require_once("BookingManager.php");

$startDate = new DateTime("24.10.2014");
$endDate = new DateTime("26.10.2014");
$s1 = new DateTime("24.10.2014");
$guest = new Guest("baconi", "baceto", "8405101300");
try{
    $reservation = new Reservation($startDate, $endDate, $guest);
    $r1 = new Reservation(new DateTime("23.11.2014"), new DateTime("24.11.2014"), $guest);
    $r2 = new Reservation(new DateTime("22.11.2014"), new DateTime("24.12.2014"), $guest);
    var_dump($reservation);
    $ed = new DateTime();
    echo $reservation->getEndDate()->format('d.m.Y');
}
catch (OutOfRangeException $oe){
    echo $oe->getMessage();
}

try{
    $room = new SingleRoom(25);
    $room->addReservation($reservation);
    $room->addReservation($r1);
    BookingManager::bookRoom($room, $reservation);
    $room->addReservation($r2);
    foreach ( $room->reservations as $r) {
        echo "\r\n Reservations: $r";
    }
    $room->removeReservation($r1);
    echo "\n\r";
    foreach ( $room->reservations as $r) {
        echo "\r\n Reservations: $r";
    }

}catch(EReservationException $ee){
    echo $ee->getMessage();
    foreach ( $room->reservations as $r) {
        echo "\r\n Reservations: $r";
    }
}