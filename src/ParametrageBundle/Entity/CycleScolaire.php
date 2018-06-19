<?php

namespace ParametrageBundle\Entity;

/**
 * CycleScolaire
 */
class CycleScolaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cycleScolaireFr;

    /**
     * @var string
     */
    private $cycleScolaireAr;

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
     * Set cycleScolaireFr
     *
     * @param string $cycleScolaireFr
     *
     * @return CycleScolaire
     */
    public function setCycleScolaireFr($cycleScolaireFr)
    {
        $this->cycleScolaireFr = $cycleScolaireFr;

        return $this;
    }

    /**
     * Get cycleScolaireFr
     *
     * @return string
     */
    public function getCycleScolaireFr()
    {
        return $this->cycleScolaireFr;
    }

    /**
     * Set cycleScolaireAr
     *
     * @param string $cycleScolaireAr
     *
     * @return CycleScolaire
     */
    public function setCycleScolaireAr($cycleScolaireAr)
    {
        $this->cycleScolaireAr = $cycleScolaireAr;

        return $this;
    }

    /**
     * Get cycleScolaireAr
     *
     * @return string
     */
    public function getCycleScolaireAr()
    {
        return $this->cycleScolaireAr;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return CycleScolaire
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