<?php

namespace Gestion\GitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambres
 *
 * @ORM\Table(name="chambres")
 * @ORM\Entity(repositoryClass="Gestion\GitesBundle\Repository\ChambresRepository")
 */
class Chambres
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
     * @ORM\ManyToOne(targetEntity="Gites", inversedBy="Chambres", cascade={"all"})
     */
    private $Gites;




    /**
     * @var Reservation
     * @ORM\OneToMany(targetEntity="Chambres", mappedBy="Reservation", cascade={"persist"})

     */
    private $Reservation;






    /**
     * @var int
     *
     * @ORM\Column(name="nombrePlace", type="integer")
     */
    private $nombrePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="disponible", type="string", length=1)
     */
    private $disponible;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;


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
     * Set nombrePlace
     *
     * @param integer $nombrePlace
     *
     * @return Chambres
     */
    public function setNombrePlace($nombrePlace)
    {
        $this->nombrePlace = $nombrePlace;

        return $this;
    }

    /**
     * Get nombrePlace
     *
     * @return int
     */
    public function getNombrePlace()
    {
        return $this->nombrePlace;
    }

    /**
     * Set disponible
     *
     * @param string $disponible
     *
     * @return Chambres
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return string
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Chambres
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Reservation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set gites
     *
     * @param \Gestion\GitesBundle\Entity\Gites $gites
     *
     * @return Chambres
     */
    public function setGites(\Gestion\GitesBundle\Entity\Gites $gites = null)
    {
        $this->Gites = $gites;

        return $this;
    }

    /**
     * Get gites
     *
     * @return \Gestion\GitesBundle\Entity\Gites
     */
    public function getGites()
    {
        return $this->Gites;
    }

    /**
     * Add reservation
     *
     * @param \Gestion\GitesBundle\Entity\Chambres $reservation
     *
     * @return Chambres
     */
    public function addReservation(\Gestion\GitesBundle\Entity\Chambres $reservation)
    {
        $this->Reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \Gestion\GitesBundle\Entity\Chambres $reservation
     */
    public function removeReservation(\Gestion\GitesBundle\Entity\Chambres $reservation)
    {
        $this->Reservation->removeElement($reservation);
    }

    /**
     * Get reservation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
}
