<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * prof_mat_classe
 *
 * @ORM\Table(name="prof_mat_classe")
 * @ORM\Entity
 */
class prof_mat_classe
{
    /**
     * @var int
     *@ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="id_professeur", type="integer",nullable=true)
     */
    private $idProfesseur;

    /**
     * @var int
     * @ORM\Column(name="id_matiere", type="integer",nullable=true)
     */
    private $idMatiere;

    /**
     * @var int
     * @ORM\Column(name="id_classe", type="integer",nullable=true)
     */
    private $idClasse;


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
     * Set idProfesseur
     *
     * @param integer $idProfesseur
     *
     * @return prof_mat_classe
     */
    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;

        return $this;
    }

    /**
     * Get idProfesseur
     *
     * @return int
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
     * @return prof_mat_classe
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set idClasse
     *
     * @param integer $idClasse
     *
     * @return prof_mat_classe
     */
    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    /**
     * Get idClasse
     *
     * @return int
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }
}
