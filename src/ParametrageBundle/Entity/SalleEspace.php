<?php

namespace ParametrageBundle\Entity;

/**
 * SalleEspace
 */
class SalleEspace
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $salleEspace;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $localisation;

    /**
     * @var string
     */
    private $nature;

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
     * Set salleEspace
     *
     * @param string $salleEspace
     *
     * @return SalleEspace
     */
    public function setSalleEspace($salleEspace)
    {
        $this->salleEspace = $salleEspace;

        return $this;
    }

    /**
     * Get salleEspace
     *
     * @return string
     */
    public function getSalleEspace()
    {
        return $this->salleEspace;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return SalleEspace
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return SalleEspace
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set nature
     *
     * @param string $nature
     *
     * @return SalleEspace
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return SalleEspace
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

