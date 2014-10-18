<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 15:30
 */

require_once("RoomInformation.php");

class EReservationException extends Exception {
    public function __construct($reservation) {
        parent::__construct("A reservation already exists in that period: $reservation", 101);
    }
}

abstract class Room implements iReservable {

    public $roomInformation;
    public $reservations;
    public $roomNumber;

    function __construct($roomNumber)
    {
        $this->setRoomNumber($roomNumber);
        $this->roomInformation = new \Room\RoomInformation();
    }

    /**
     * @param mixed $roomInformation
     */
    public function setRoomInformation($roomInformation)
    {
        if ($roomInformation instanceof \Room\RoomInformation){
            $this->roomInformation = $roomInformation;
        }
    }

    /**
     * @return mixed
     */
    public function getRoomInformation()
    {
        return $this->roomInformation;
    }

    function addReservation($reservation)
    {
//        echo  "\r\n predi".count($this->reservations);

        if (count($this->reservations)==0){
            $this->reservations[] = $reservation;
        }else{
            $isReserved = false;
//            echo "sled edno".count($this->reservations);
            foreach ($this->reservations as $r1) {
                if ($this->isReservationsOverLap($r1, $reservation)){
                    $isReserved = true;
                }
            }
            if (!$isReserved){
                array_push($this->reservations, $reservation);
            }else{
                throw new EReservationException($reservation);
            }
        }
    }

    function removeReservation($reservation)
    {
        if(($key = array_search($reservation, $this->reservations)) !== false) {
            unset($this->reservations[$key]);
        }
    }

    function isReservationsOverLap($r1, $r2){
        return $r2->getStartDate() < $r1->getEndDate() && $r1->getStartDate() < $r2->getEndDate();
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }
} 