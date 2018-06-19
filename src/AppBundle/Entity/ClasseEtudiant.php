<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasseEtudiant
 *
 * @ORM\Table(name="classe_etudiant")
 * @ORM\Entity
 */
class ClasseEtudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idClasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etudiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_scolaire", type="string", length=200, nullable=true)
     */
    private $anneeScolaire;




    /**
     * Set idClasse
     *
     * @param integer $idClasse
     *
     * @return ClasseEtudiant
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
     * Set idEtudiant
     *
     * @param integer $idEtudiant
     *
     * @return ClasseEtudiant
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;
    
        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return integer
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     *
     * @return ClasseEtudiant
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
    
        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return string
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }
}

