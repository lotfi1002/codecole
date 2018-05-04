<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity
 */
class Ecole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=200, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_semestre", type="integer", nullable=true)
     */
    private $nbrSemestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_cycle", type="integer", nullable=true)
     */
    private $nbrCycle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ar", type="string", length=200, nullable=true)
     */
    private $nomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_ar", type="string", length=200, nullable=true)
     */
    private $adresseAr;



    /**
     * Get id
     *
     * @return integer
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
     * @return Ecole
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
     * @return Ecole
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Ecole
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nbrSemestre
     *
     * @param integer $nbrSemestre
     *
     * @return Ecole
     */
    public function setNbrSemestre($nbrSemestre)
    {
        $this->nbrSemestre = $nbrSemestre;
    
        return $this;
    }

    /**
     * Get nbrSemestre
     *
     * @return integer
     */
    public function getNbrSemestre()
    {
        return $this->nbrSemestre;
    }

    /**
     * Set nbrCycle
     *
     * @param integer $nbrCycle
     *
     * @return Ecole
     */
    public function setNbrCycle($nbrCycle)
    {
        $this->nbrCycle = $nbrCycle;
    
        return $this;
    }

    /**
     * Get nbrCycle
     *
     * @return integer
     */
    public function getNbrCycle()
    {
        return $this->nbrCycle;
    }

    /**
     * Set nomAr
     *
     * @param string $nomAr
     *
     * @return Ecole
     */
    public function setNomAr($nomAr)
    {
        $this->nomAr = $nomAr;
    
        return $this;
    }

    /**
     * Get nomAr
     *
     * @return string
     */
    public function getNomAr()
    {
        return $this->nomAr;
    }

    /**
     * Set adresseAr
     *
     * @param string $adresseAr
     *
     * @return Ecole
     */
    public function setAdresseAr($adresseAr)
    {
        $this->adresseAr = $adresseAr;
    
        return $this;
    }

    /**
     * Get adresseAr
     *
     * @return string
     */
    public function getAdresseAr()
    {
        return $this->adresseAr;
    }
}
