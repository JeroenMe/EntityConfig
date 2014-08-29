<?php

namespace Tactics\EntityConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Tactics\EntityConfigBundle\Entity\PersonRepository")
 * @ORM\Table(name="person")
 */
class Person
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $birthdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_employed;

    /**
     * @ORM\OneToMany(targetEntity="Car", mappedBy="owner")
     */
    private $cars;

    /**
     * @ORM\OneToOne(targetEntity="Person")
     */
    private $partner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marital_status;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $bankroll;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
    }

    /**
     * @param mixed $bankroll
     */
    public function setBankroll($bankroll)
    {
        $this->bankroll = $bankroll;
    }

    /**
     * @return mixed
     */
    public function getBankroll()
    {
        return $this->bankroll;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $is_employed
     */
    public function setIsEmployed($is_employed)
    {
        $this->is_employed = $is_employed;
    }

    /**
     * @return mixed
     */
    public function getIsEmployed()
    {
        return $this->is_employed;
    }

    /**
     * @param mixed $marital_status
     */
    public function setMaritalStatus($marital_status)
    {
        $this->marital_status = $marital_status;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->marital_status;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $partner
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
    }

    /**
     * @return mixed
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Car $car
     * @return $this
     */
    public function addCar(Car $car)
    {
        if(! $this->cars->contains($car)) {
            $this->cars->add($car);
        }

        return $this;
    }

    /**
     * @param Car $car
     * @return $this
     */
    public function removeCar(Car $car)
    {
        if($this->cars->contains($car)) {
            $this->cars->removeElement($car);
        }

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * @param $cars
     */
    public function setCars($cars)
    {
        $this->cars = $cars;

        return $this;
    }
} 