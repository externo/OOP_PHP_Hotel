<?php
/**
 * Created by PhpStorm.
 * User: Elia
 * Date: 14-10-18
 * Time: 15:16
 */

class Guest {

    private $firstName;
    private $lastName;
    private $id;

    function __construct($firstName, $lastName, $id)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setId($id);
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    function __toString()
    {
        return $this->getFirstName()." ".$this->getLastName();
    }

}