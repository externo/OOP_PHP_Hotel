<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 20:12
 */

require_once("RoomType.php");

class SingleRoom extends Room {

    //1 bed, Standard room, with restroom, no balcony, extras – TV, air-conditioner
    function __construct($roomNumber)
    {
        parent::__construct($roomNumber);
        $this->roomInformation->setBedCount(1);
        $this->roomInformation->setRoomType(\Room\RoomType::Standard);
        $this->roomInformation->setHasRestroom(true);
        $this->roomInformation->setHasBalcony(false);
        $this->roomInformation->setExtras(["TV", "air-conditioner"]);
    }
}