<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
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
     * @ORM\Column(name="id_massar", type="string", length=200, nullable=true)
     */
    private $idMassar;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=200, nullable=true)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=200, nullable=true)
     */
    private $tel;



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
     * Set idMassar
     *
     * @param string $idMassar
     *
     * @return Etudiant
     */
    public function setIdMassar($idMassar)
    {
        $this->idMassar = $idMassar;
    
        return $this;
    }

    /**
     * Get idMassar
     *
     * @return string
     */
    public function getIdMassar()
    {
        return $this->idMassar;
    }

    /**
     * Set cne
     *
     * @param string $cne
     *
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;
    
        return $this;
    }

    /**
     * Get cne
     *
     * @return string
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
}
