<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi")
 * @ORM\Entity
 */
class Emploi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_emploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matiere", type="integer", nullable=true)
     */
    private $idMatiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_salle", type="integer", nullable=true)
     */
    private $idSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer", nullable=true)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="seance", type="integer", nullable=true)
     */
    private $seance;


    /**
     * Get idEmploi
     *
     * @return integer
     */
    public function getIdEmploi()
    {
        return $this->idEmploi;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Emploi
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
     * Set idSalle
     *
     * @param integer $idSalle
     *
     * @return Emploi
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;
    
        return $this;
    }

    /**
     * Get idSalle
     *
     * @return integer
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set jour
     *
     * @param integer $jour
     *
     * @return Emploi
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get jour
     *
     * @return integer
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set seance
     *
     * @param integer $seance
     *
     * @return Emploi
     */
    public function setSeance($seance)
    {
        $this->seance = $seance;
    
        return $this;
    }

    /**
     * Get seance
     *
     * @return integer
     */
    public function getSeance()
    {
        return $this->seance;
    }
}

