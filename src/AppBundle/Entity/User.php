<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }




   /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;




    /**
     * Set name
     *
     * @param string $name
     * @return Blog
     */

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }






   /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;




    /**
     * Set phone
     *
     * @param string $phone
     * @return Blog
     */

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }





 /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;




    /**
     * Set pays
     *
     * @param string $pays
     * @return Blog
     */

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }








 /**
     * @var string
     *
     * @ORM\Column(name="expert", type="string", length=255, nullable=true)
     */
    private $expert;




    /**
     * Set expert
     *
     * @param string $expert
     * @return Blog
     */

    public function setExpert($expert)
    {
        $this->expert = $expert;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getExpert()
    {
        return $this->expert;
    }







 /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",  nullable=true)
     */
    private $description;




    /**
     * Set description
     *
     * @param string $description
     * @return Blog
     */

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }











 /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;




    /**
     * Set country
     *
     * @param string $country
     * @return Blog
     */

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }



 /**
     * @var string
     *
     * @ORM\Column(name="birthdate", type="date", length=255, nullable=true)
     */
    private $birthdate;




    /**
     * Set birthdate
     *
     * @param string $birthdate
     * @return Blog
     */

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }



 /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;




    /**
     * Set address
     *
     * @param string $address
     * @return Blog
     */

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }






 /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;




    /**
     * Set photo
     *
     * @param string $photo
     * @return Blog
     */

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }



}