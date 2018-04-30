<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity
 */
class Niveau
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
     * @ORM\Column(name="id_cycle", type="integer", nullable=true)
     */
    private $idCycle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;



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
     * Set idCycle
     *
     * @param integer $idCycle
     *
     * @return Niveau
     */
    public function setIdCycle($idCycle)
    {
        $this->idCycle = $idCycle;
    
        return $this;
    }

    /**
     * Get idCycle
     *
     * @return integer
     */
    public function getIdCycle()
    {
        return $this->idCycle;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Niveau
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
}
