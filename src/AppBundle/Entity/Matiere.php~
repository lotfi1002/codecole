<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity
 */
class Matiere
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
     * @var integer
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=true)
     */
    private $idClasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enseignant", type="integer", nullable=true)
     */
    private $idEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="coef", type="integer", nullable=true)
     */
    private $coef;



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
     * Set idClasse
     *
     * @param integer $idClasse
     *
     * @return Matiere
     */
    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;
    
        return $this;
    }

    /**
     * Get idClasse
     *
     * @return integer
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }

    /**
     * Set idEnseignant
     *
     * @param integer $idEnseignant
     *
     * @return Matiere
     */
    public function setIdEnseignant($idEnseignant)
    {
        $this->idEnseignant = $idEnseignant;
    
        return $this;
    }

    /**
     * Get idEnseignant
     *
     * @return integer
     */
    public function getIdEnseignant()
    {
        return $this->idEnseignant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Matiere
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
     * Set coef
     *
     * @param integer $coef
     *
     * @return Matiere
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;
    
        return $this;
    }

    /**
     * Get coef
     *
     * @return integer
     */
    public function getCoef()
    {
        return $this->coef;
    }
}
