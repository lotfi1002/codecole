<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * appreciation
 *
 * @ORM\Table(name="appreciation")
 * @ORM\Entity
 */
class appreciation
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
     * @var boolean
     *
     * @ORM\Column(name="used", type="boolean", nullable=false)
     */
    private $used;

    /**
     * @var text
     *
     * @ORM\Column(name="color", type="text", nullable=false)
     */
    private $color;

    /**
     * @var text
     *
     * @ORM\Column(name="lettre", type="text", nullable=false)
     */
    private $lettre;

    /**
     * @var float
     *
     * @ORM\Column(name="debutPourcentage", type="float", nullable=false)
     */
    private $debutPourcentage;

    /**
     * @var float
     *
     * @ORM\Column(name="finPourcentage", type="float", nullable=false)
     */
    private $finPourcentage;

    /**
     * @var text
     *
     * @ORM\Column(name="appreciation", type="text", nullable=false)
     */
    private $appreciation;

    /**
     * @var text
     *
     * @ORM\Column(name="niveauAc", type="text", nullable=false)
     */
    private $niveauAc;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFormatAp", type="integer", nullable=true)
     */
    private $idFormatAp;


   

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
     * Set lettre
     *
     * @param string $lettre
     *
     * @return appreciation
     */
    public function setLettre($lettre)
    {
        $this->lettre = $lettre;

        return $this;
    }

    /**
     * Get lettre
     *
     * @return string
     */
    public function getLettre()
    {
        return $this->lettre;
    }

    /**
     * Set debutPourcentage
     *
     * @param float $debutPourcentage
     *
     * @return appreciation
     */
    public function setDebutPourcentage($debutPourcentage)
    {
        $this->debutPourcentage = $debutPourcentage;

        return $this;
    }

    /**
     * Get debutPourcentage
     *
     * @return float
     */
    public function getDebutPourcentage()
    {
        return $this->debutPourcentage;
    }

    /**
     * Set finPourcentage
     *
     * @param float $finPourcentage
     *
     * @return appreciation
     */
    public function setFinPourcentage($finPourcentage)
    {
        $this->finPourcentage = $finPourcentage;

        return $this;
    }

    /**
     * Get finPourcentage
     *
     * @return float
     */
    public function getFinPourcentage()
    {
        return $this->finPourcentage;
    }

    /**
     * Set appreciation
     *
     * @param string $appreciation
     *
     * @return appreciation
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;

        return $this;
    }

    /**
     * Get appreciation
     *
     * @return string
     */
    public function getAppreciation()
    {
        return $this->appreciation;
    }

    /**
     * Set niveauAc
     *
     * @param string $niveauAc
     *
     * @return appreciation
     */
    public function setNiveauAc($niveauAc)
    {
        $this->niveauAc = $niveauAc;

        return $this;
    }

    /**
     * Get niveauAc
     *
     * @return string
     */
    public function getNiveauAc()
    {
        return $this->niveauAc;
    }

    /**
     * Set idFormatAp
     *
     * @param integer $idFormatAp
     *
     * @return appreciation
     */
    public function setIdFormatAp($idFormatAp)
    {
        $this->idFormatAp = $idFormatAp;

        return $this;
    }

    /**
     * Get idFormatAp
     *
     * @return integer
     */
    public function getIdFormatAp()
    {
        return $this->idFormatAp;
    }

    /**
     * Set used
     *
     * @param boolean $used
     *
     * @return appreciation
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return boolean
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return appreciation
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
