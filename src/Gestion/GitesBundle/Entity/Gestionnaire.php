<?php

namespace Gestion\GitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gestionnaire
 *
 * @ORM\Table(name="gestionnaire")
 * @ORM\Entity(repositoryClass="Gestion\GitesBundle\Repository\GestionnaireRepository")
 */
class Gestionnaire
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
     * @ORM\OneToOne(targetEntity="Gites", cascade={"persist"})
     */
    private $Gite;





    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="Gestionnaire", cascade={"remove"})
     */
    private $Reservation;





    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Gestionnaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Gestionnaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Gestionnaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Reservation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set gite
     *
     * @param \Gestion\GitesBundle\Entity\Gites $gite
     *
     * @return Gestionnaire
     */
    public function setGite(\Gestion\GitesBundle\Entity\Gites $gite = null)
    {
        $this->Gite = $gite;

        return $this;
    }

    /**
     * Get gite
     *
     * @return \Gestion\GitesBundle\Entity\Gites
     */
    public function getGite()
    {
        return $this->Gite;
    }

    /**
     * Add reservation
     *
     * @param \Gestion\GitesBundle\Entity\Reservation $reservation
     *
     * @return Gestionnaire
     */
    public function addReservation(\Gestion\GitesBundle\Entity\Reservation $reservation)
    {
        $this->Reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \Gestion\GitesBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\Gestion\GitesBundle\Entity\Reservation $reservation)
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
