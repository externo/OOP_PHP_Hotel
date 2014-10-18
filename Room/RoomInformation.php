<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 18:00
 */

namespace Room;


class RoomInformation {

    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;

//    function __construct($roomType, $hasRestroom, $hasBalcony, $bedCount, $roomNumber, $extras, $price)
//    {
//        $this->setRoomType($roomType);
//        $this->setHasRestroom($hasRestroom);
//        $this->setHasBalcony($hasBalcony);
//        $this->setBedCount($bedCount);
//        $this->setRoomNumber($roomNumber);
//        $this->setExtras($extras);
//        $this->setPrice($price);
//    }


    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        if($roomType instanceof RoomType){
            $this->roomType = $roomType;
        }
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $hasRestroom
     */
    public function setHasRestroom($hasRestroom)
    {
        if (gettype($hasRestroom)=="boolean"){
            $this->hasRestroom = $hasRestroom;
        }
    }

    /**
     * @return mixed
     */
    public function getHasRestroom()
    {
        return $this->hasRestroom;
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony)
    {
        if (gettype($hasBalcony)=="boolean"){
            $this->hasBalcony = $hasBalcony;
        }
    }

    /**
     * @return mixed
     */
    public function getHasBalcony()
    {
        return $this->hasBalcony;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount)
    {
        if (gettype($bedCount) == "integer" && $bedCount > 0){
            $this->bedCount = $bedCount;
        }
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        if (gettype($roomNumber) == "integer" && $roomNumber >= 0){
            $this->bedCount = $roomNumber;
        }
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        if (gettype($extras) == "array"){
            $this->extras = $extras;
        }
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        if (gettype($price) == "double" && $price > 0){
            $this->price = $price;
        }
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

} 