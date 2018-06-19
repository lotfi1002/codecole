<?php

namespace ParametrageBundle\Entity;

/**
 * Classe
 */
class Classe
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $idNiveauScolaire;

    /**
     * @var string
     */
    private $codeFr;

    /**
     * @var string
     */
    private $codeAr;

    /**
     * @var string
     */
    private $classeFr;

    /**
     * @var string
     */
    private $classeAr;


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
     * Set idNiveauScolaire
     *
     * @param string $idNiveauScolaire
     *
     * @return Classe
     */
    public function setIdNiveauScolaire($idNiveauScolaire)
    {
        $this->idNiveauScolaire = $idNiveauScolaire;

        return $this;
    }

    /**
     * Get idNiveauScolaire
     *
     * @return string
     */
    public function getIdNiveauScolaire()
    {
        return $this->idNiveauScolaire;
    }

    /**
     * Set codeFr
     *
     * @param string $codeFr
     *
     * @return Classe
     */
    public function setCodeFr($codeFr)
    {
        $this->codeFr = $codeFr;

        return $this;
    }

    /**
     * Get codeFr
     *
     * @return string
     */
    public function getCodeFr()
    {
        return $this->codeFr;
    }

    /**
     * Set codeAr
     *
     * @param string $codeAr
     *
     * @return Classe
     */
    public function setCodeAr($codeAr)
    {
        $this->codeAr = $codeAr;

        return $this;
    }

    /**
     * Get codeAr
     *
     * @return string
     */
    public function getCodeAr()
    {
        return $this->codeAr;
    }

    /**
     * Set classeFr
     *
     * @param string $classeFr
     *
     * @return Classe
     */
    public function setClasseFr($classeFr)
    {
        $this->classeFr = $classeFr;

        return $this;
    }

    /**
     * Get classeFr
     *
     * @return string
     */
    public function getClasseFr()
    {
        return $this->classeFr;
    }

    /**
     * Set classeAr
     *
     * @param string $classeAr
     *
     * @return Classe
     */
    public function setClasseAr($classeAr)
    {
        $this->classeAr = $classeAr;

        return $this;
    }

    /**
     * Get classeAr
     *
     * @return string
     */
    public function getClasseAr()
    {
        return $this->classeAr;
    }
}

