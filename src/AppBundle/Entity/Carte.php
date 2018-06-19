<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carte
 *
 * @ORM\Table(name="carte")
 * @ORM\Entity
 */
class Carte
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
     * @ORM\Column(name="id_professeur", type="integer", nullable=false)
     */
    private $idProfesseur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matiere", type="integer", nullable=false)
     */
    private $idMatiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_format", type="integer", nullable=false)
     */
    private $idFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=255, nullable=false)
     */
    private $abreviation;



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
     * Set idProfesseur
     *
     * @param integer $idProfesseur
     *
     * @return Carte
     */
    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;

        return $this;
    }

    /**
     * Get idProfesseur
     *
     * @return integer
     */
    public function getIdProfesseur()
    {
        return $this->idProfesseur;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Carte
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return integer
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set idFormat
     *
     * @param integer $idFormat
     *
     * @return Carte
     */
    public function setIdFormat($idFormat)
    {
        $this->idFormat = $idFormat;

        return $this;
    }

    /**
     * Get idFormat
     *
     * @return integer
     */
    public function getIdFormat()
    {
        return $this->idFormat;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Carte
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set abreviation
     *
     * @param string $abreviation
     *
     * @return Carte
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }
}
