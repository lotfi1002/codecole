<?php

namespace ParametrageBundle\Entity;

/**
 * CyclePedagogique
 */
class CyclePedagogique
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cycleFr;

    /**
     * @var string
     */
    private $cycleAr;

    /**
     * @var string
     */
    private $intituleFr;

    /**
     * @var string
     */
    private $intituleAr;

    /**
     * @var string
     */
    private $annee;


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
     * Set cycleFr
     *
     * @param string $cycleFr
     *
     * @return CyclePedagogique
     */
    public function setCycleFr($cycleFr)
    {
        $this->cycleFr = $cycleFr;

        return $this;
    }

    /**
     * Get cycleFr
     *
     * @return string
     */
    public function getCycleFr()
    {
        return $this->cycleFr;
    }

    /**
     * Set cycleAr
     *
     * @param string $cycleAr
     *
     * @return CyclePedagogique
     */
    public function setCycleAr($cycleAr)
    {
        $this->cycleAr = $cycleAr;

        return $this;
    }

    /**
     * Get cycleAr
     *
     * @return string
     */
    public function getCycleAr()
    {
        return $this->cycleAr;
    }

    /**
     * Set intituleFr
     *
     * @param string $intituleFr
     *
     * @return CyclePedagogique
     */
    public function setIntituleFr($intituleFr)
    {
        $this->intituleFr = $intituleFr;

        return $this;
    }

    /**
     * Get intituleFr
     *
     * @return string
     */
    public function getIntituleFr()
    {
        return $this->intituleFr;
    }

    /**
     * Set intituleAr
     *
     * @param string $intituleAr
     *
     * @return CyclePedagogique
     */
    public function setIntituleAr($intituleAr)
    {
        $this->intituleAr = $intituleAr;

        return $this;
    }

    /**
     * Get intituleAr
     *
     * @return string
     */
    public function getIntituleAr()
    {
        return $this->intituleAr;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return CyclePedagogique
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}

