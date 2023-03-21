<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="id_echange", type="integer")
     */
    private $idEchange;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdtat", type="datetime", nullable=true)
     */
    private $createdtat;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="vu", type="integer", nullable=true)
     */
    private $vu;


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
     * Set idEchange
     *
     * @param integer $idEchange
     *
     * @return Comment
     */
    public function setIdEchange($idEchange)
    {
        $this->idEchange = $idEchange;

        return $this;
    }

    /**
     * Get idEchange
     *
     * @return int
     */
    public function getIdEchange()
    {
        return $this->idEchange;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Comment
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdtat
     *
     * @param \DateTime $createdtat
     *
     * @return Comment
     */
    public function setCreatedtat($createdtat)
    {
        $this->createdtat = $createdtat;

        return $this;
    }

    /**
     * Get createdtat
     *
     * @return \DateTime
     */
    public function getCreatedtat()
    {
        return $this->createdtat;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Comment
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
     * Set vu
     *
     * @param integer $vu
     *
     * @return Comment
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
}

