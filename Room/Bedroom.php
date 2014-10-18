<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 20:25
 */

require_once("RoomType.php");

class Bedroom extends Room {

    function __construct($roomNumber)
    {
        //2 beds, Gold room, with restroom and balcony, extras – TV, air-conditioner, refrigerator, mini-bar, bathtub
        parent::__construct($roomNumber);
        $this->roomInformation->setBedCount(2);
        $this->roomInformation->setRoomType(\Room\RoomType::Gold);
        $this->roomInformation->setHasRestroom(true);
        $this->roomInformation->setHasBalcony(true);
        $this->roomInformation->setExtras(["TV", "air-conditioner", "refrigerator", "mini-bar", "bathtub"]);
    }
} 