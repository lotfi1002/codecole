<?php

namespace ParametrageBundle\Entity;

/**
 * ServicesProposes
 */
class ServicesProposes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $scolariteFR;

    /**
     * @var string
     */
    private $scolariteAR;

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
     * Set scolariteFR
     *
     * @param string $scolariteFR
     *
     * @return ServicesProposes
     */
    public function setScolariteFR($scolariteFR)
    {
        $this->scolariteFR = $scolariteFR;

        return $this;
    }

    /**
     * Get scolariteFR
     *
     * @return string
     */
    public function getScolariteFR()
    {
        return $this->scolariteFR;
    }

    /**
     * Set scolariteAR
     *
     * @param string $scolariteAR
     *
     * @return ServicesProposes
     */
    public function setScolariteAR($scolariteAR)
    {
        $this->scolariteAR = $scolariteAR;

        return $this;
    }

    /**
     * Get scolariteAR
     *
     * @return string
     */
    public function getScolariteAR()
    {
        return $this->scolariteAR;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return ServicesProposes
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

