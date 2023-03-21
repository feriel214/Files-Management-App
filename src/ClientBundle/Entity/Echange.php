<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echange
 *
 * @ORM\Table(name="echanges")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\EchangeRepository")
 */
class Echange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



  /**
     * @var int
     *
     * @ORM\Column(name="id_sender", type="integer")
     */
    private $idSender;


    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255,nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="vu", type="integer", nullable=true)
     */
    private $vu;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="datetime", nullable=true)
     */
    private $createdat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   








    /**
     * Set idSender
     *
     * @param integer $idSender
     *
     * @return Echange
     */
    public function setIdSender($idSender)
    {
        $this->idSender = $idSender;

        return $this;
    }

    /**
     * Get idDocteur
     *
     * @return int
     */
    public function getIdSender()
    {
        return $this->idSender;
    }










    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Echange
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Echange
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Echange
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set vu
     *
     * @param integer $vu
     *
     * @return Echange
     */
    public function setVu($vu)
    {
        $this->vu = $vu;

        return $this;
    }

    /**
     * Get vu
     *
     * @return int
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Echange
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Echange
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }
}

