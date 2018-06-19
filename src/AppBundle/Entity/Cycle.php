<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cycle
 *
 * @ORM\Table(name="cycle")
 * @ORM\Entity
 */
class Cycle
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
     * @ORM\Column(name="id_ecole", type="integer", nullable=true)
     */
    private $idEcole;

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
     * Set idEcole
     *
     * @param integer $idEcole
     *
     * @return Cycle
     */
    public function setIdEcole($idEcole)
    {
        $this->idEcole = $idEcole;

        return $this;
    }

    /**
     * Get idEcole
     *
     * @return integer
     */
    public function getIdEcole()
    {
        return $this->idEcole;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Cycle
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
