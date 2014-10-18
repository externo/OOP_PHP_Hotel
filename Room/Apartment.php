<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 20:26
 */

require_once("RoomType.php");

class Apartment extends Room {

    function __construct($roomNumber)
    {
        //4 beds, Diamond room, with restroom and balcony, extras – TV, air-conditioner, refrigerator, kitchen box,
        //mini-bar, bathtub, free Wi-fi
        parent::__construct($roomNumber);
        $this->roomInformation->setBedCount(4);
        $this->roomInformation->setRoomType(\Room\RoomType::Diamond);
        $this->roomInformation->setHasRestroom(true);
        $this->roomInformation->setHasBalcony(true);
        $this->roomInformation->setExtras(["TV", "air-conditioner", "refrigerator", "mini-bar",
                                           "bathtub", "kitchen box", "free Wi-fi"]);
    }
} 