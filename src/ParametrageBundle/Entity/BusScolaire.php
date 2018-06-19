<?php

namespace ParametrageBundle\Entity;

/**
 * BusScolaire
 */
class BusScolaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bus;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $matricule;

    /**
     * @var \DateTime
     */
    private $dateAcuisition;

    /**
     * @var string
     */
    private $agentConduite;

    /**
     * @var string
     */
    private $accompagnatrice;

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
     * Set bus
     *
     * @param string $bus
     *
     * @return BusScolaire
     */
    public function setBus($bus)
    {
        $this->bus = $bus;

        return $this;
    }

    /**
     * Get bus
     *
     * @return string
     */
    public function getBus()
    {
        return $this->bus;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return BusScolaire
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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return BusScolaire
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set dateAcuisition
     *
     * @param \DateTime $dateAcuisition
     *
     * @return BusScolaire
     */
    public function setDateAcuisition($dateAcuisition)
    {
        $this->dateAcuisition = $dateAcuisition;

        return $this;
    }

    /**
     * Get dateAcuisition
     *
     * @return \DateTime
     */
    public function getDateAcuisition()
    {
        return $this->dateAcuisition;
    }

    /**
     * Set agentConduite
     *
     * @param string $agentConduite
     *
     * @return BusScolaire
     */
    public function setAgentConduite($agentConduite)
    {
        $this->agentConduite = $agentConduite;

        return $this;
    }

    /**
     * Get agentConduite
     *
     * @return string
     */
    public function getAgentConduite()
    {
        return $this->agentConduite;
    }

    /**
     * Set accompagnatrice
     *
     * @param string $accompagnatrice
     *
     * @return BusScolaire
     */
    public function setAccompagnatrice($accompagnatrice)
    {
        $this->accompagnatrice = $accompagnatrice;

        return $this;
    }

    /**
     * Get accompagnatrice
     *
     * @return string
     */
    public function getAccompagnatrice()
    {
        return $this->accompagnatrice;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return BusScolaire
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

