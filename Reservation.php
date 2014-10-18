<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 14:29
 */

class Reservation {

    private $startDate;
    private $endDate;
    private $guest;

    public function __construct($startDate, $endDate, $guest){
        if ($startDate > $endDate){
            throw new OutOfRangeException("Start date would be before end date!");
        }else{
            $this->setStartDate($startDate);
            $this->setEndDate($endDate);
            $this->setGuest($guest);
        }
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    function __toString()
    {
        return $this->getStartDate()->format('d.m.Y')." - ".$this->getEndDate()->format('d.m.Y');
    }

}