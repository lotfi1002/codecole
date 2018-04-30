<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity
 */
class Evaluation
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
     * @ORM\Column(name="id_matiere", type="integer", nullable=true)
     */
    private $idMatiere;



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
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Evaluation
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
}
