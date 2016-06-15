<?php

namespace Gestion\GitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Gestion\GitesBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var Chambres
     * @ORM\ManyToOne(targetEntity="Chambres", inversedBy="Reservation", cascade={"persist"})

     */
    private $Chambres;



    /**
     * @ORM\ManyToOne(targetEntity="Gestionnaire", inversedBy="Reservation", cascade={"remove"})
     */
    private $reservation;



    /**
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="Client", cascade={"all"})
     */
    private $Client;




    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="paiement", type="string", length=255)
     */
    private $paiement;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Reservation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set paiement
     *
     * @param string $paiement
     *
     * @return Reservation
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return string
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set chambres
     *
     * @param \Gestion\GitesBundle\Entity\Chambres $chambres
     *
     * @return Reservation
     */
    public function setChambres(\Gestion\GitesBundle\Entity\Chambres $chambres = null)
    {
        $this->Chambres = $chambres;

        return $this;
    }

    /**
     * Get chambres
     *
     * @return \Gestion\GitesBundle\Entity\Chambres
     */
    public function getChambres()
    {
        return $this->Chambres;
    }

    /**
     * Set reservation
     *
     * @param \Gestion\GitesBundle\Entity\Gestionnaire $reservation
     *
     * @return Reservation
     */
    public function setReservation(\Gestion\GitesBundle\Entity\Gestionnaire $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Gestion\GitesBundle\Entity\Gestionnaire
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set client
     *
     * @param \Gestion\GitesBundle\Entity\Reservation $client
     *
     * @return Reservation
     */
    public function setClient(\Gestion\GitesBundle\Entity\Reservation $client = null)
    {
        $this->Client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Gestion\GitesBundle\Entity\Reservation
     */
    public function getClient()
    {
        return $this->Client;
    }
}
