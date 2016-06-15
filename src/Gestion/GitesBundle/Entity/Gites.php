<?php

namespace Gestion\GitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gites
 *
 * @ORM\Table(name="gites")
 * @ORM\Entity(repositoryClass="Gestion\GitesBundle\Repository\GitesRepository")
 */
class Gites
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
     * @ORM\OneToOne(targetEntity="Gestionnaire", mappedBy="Gites", cascade={"persist"})
     */
    private $Gestionnaire;



    /**
     * @ORM\OneToMany(targetEntity="Chambres", mappedBy="Gites", cascade={"all"})
     */
    private $Chambres;



    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;



    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;



    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;



    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;



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
     * @return Gites
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Gites
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Gites
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
     * Set email
     *
     * @param string $email
     *
     * @return Gites
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Chambres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set gestionnaire
     *
     * @param \Gestion\GitesBundle\Entity\Gestionnaire $gestionnaire
     *
     * @return Gites
     */
    public function setGestionnaire(\Gestion\GitesBundle\Entity\Gestionnaire $gestionnaire = null)
    {
        $this->Gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * Get gestionnaire
     *
     * @return \Gestion\GitesBundle\Entity\Gestionnaire
     */
    public function getGestionnaire()
    {
        return $this->Gestionnaire;
    }

    /**
     * Add chambre
     *
     * @param \Gestion\GitesBundle\Entity\Chambres $chambre
     *
     * @return Gites
     */
    public function addChambre(\Gestion\GitesBundle\Entity\Chambres $chambre)
    {
        $this->Chambres[] = $chambre;

        return $this;
    }

    /**
     * Remove chambre
     *
     * @param \Gestion\GitesBundle\Entity\Chambres $chambre
     */
    public function removeChambre(\Gestion\GitesBundle\Entity\Chambres $chambre)
    {
        $this->Chambres->removeElement($chambre);
    }

    /**
     * Get chambres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChambres()
    {
        return $this->Chambres;
    }
}
