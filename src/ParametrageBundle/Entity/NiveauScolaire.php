<?php

namespace ParametrageBundle\Entity;

/**
 * NiveauScolaire
 */
class NiveauScolaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $idCyclePedagogique;

    /**
     * @var string
     */
    private $idCycleScolaire;

    /**
     * @var string
     */
    private $sigleFr;

    /**
     * @var string
     */
    private $sigleAr;

    /**
     * @var string
     */
    private $niveauScolaire;

    /**
     * @var string
     */
    private $niveauScolaireAr;

    /**
     * @var integer
     */
    private $NbClasses;


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
     * Set idCyclePedagogique
     *
     * @param string $idCyclePedagogique
     *
     * @return NiveauScolaire
     */
    public function setIdCyclePedagogique($idCyclePedagogique)
    {
        $this->idCyclePedagogique = $idCyclePedagogique;

        return $this;
    }

    /**
     * Get idCyclePedagogique
     *
     * @return string
     */
    public function getIdCyclePedagogique()
    {
        return $this->idCyclePedagogique;
    }

    /**
     * Set idCycleScolaire
     *
     * @param string $idCycleScolaire
     *
     * @return NiveauScolaire
     */
    public function setIdCycleScolaire($idCycleScolaire)
    {
        $this->idCycleScolaire = $idCycleScolaire;

        return $this;
    }

    /**
     * Get idCycleScolaire
     *
     * @return string
     */
    public function getIdCycleScolaire()
    {
        return $this->idCycleScolaire;
    }

    /**
     * Set sigleFr
     *
     * @param string $sigleFr
     *
     * @return NiveauScolaire
     */
    public function setSigleFr($sigleFr)
    {
        $this->sigleFr = $sigleFr;

        return $this;
    }

    /**
     * Get sigleFr
     *
     * @return string
     */
    public function getSigleFr()
    {
        return $this->sigleFr;
    }

    /**
     * Set sigleAr
     *
     * @param string $sigleAr
     *
     * @return NiveauScolaire
     */
    public function setSigleAr($sigleAr)
    {
        $this->sigleAr = $sigleAr;

        return $this;
    }

    /**
     * Get sigleAr
     *
     * @return string
     */
    public function getSigleAr()
    {
        return $this->sigleAr;
    }

    /**
     * Set niveauScolaire
     *
     * @param string $niveauScolaire
     *
     * @return NiveauScolaire
     */
    public function setNiveauScolaire($niveauScolaire)
    {
        $this->niveauScolaire = $niveauScolaire;

        return $this;
    }

    /**
     * Get niveauScolaire
     *
     * @return string
     */
    public function getNiveauScolaire()
    {
        return $this->niveauScolaire;
    }

    /**
     * Set niveauScolaireAr
     *
     * @param string $niveauScolaireAr
     *
     * @return NiveauScolaire
     */
    public function setNiveauScolaireAr($niveauScolaireAr)
    {
        $this->niveauScolaireAr = $niveauScolaireAr;

        return $this;
    }

    /**
     * Get niveauScolaireAr
     *
     * @return string
     */
    public function getNiveauScolaireAr()
    {
        return $this->niveauScolaireAr;
    }

    /**
     * Set nbClasses
     *
     * @param integer $nbClasses
     *
     * @return NiveauScolaire
     */
    public function setNbClasses($nbClasses)
    {
        $this->NbClasses = $nbClasses;

        return $this;
    }

    /**
     * Get nbClasses
     *
     * @return integer
     */
    public function getNbClasses()
    {
        return $this->NbClasses;
    }
}
