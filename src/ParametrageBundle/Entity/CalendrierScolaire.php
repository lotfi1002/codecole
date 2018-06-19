<?php

namespace ParametrageBundle\Entity;

/**
 * CalendrierScolaire
 */
class CalendrierScolaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $anneeScolaire;

    /**
     * @var string
     */
    private $debut;

    /**
     * @var string
     */
    private $fin;

    /**
     * @var string
     */
    private $jours;

    /**
     * @var string
     */
    private $periode;

    /**
     * @var string
     */
    private $semestres;

    /**
     * @var string
     */
    private $nbrJoursFerie;

    /**
     * @var string
     */
    private $listeFeries;


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
     * Set anneeScolaire
     *
     * @param integer $anneeScolaire
     *
     * @return CalendrierScolaire
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return int
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * Set debut
     *
     * @param string $debut
     *
     * @return CalendrierScolaire
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return string
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param string $fin
     *
     * @return CalendrierScolaire
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return string
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set jours
     *
     * @param string $jours
     *
     * @return CalendrierScolaire
     */
    public function setJours($jours)
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get jours
     *
     * @return string
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Set periode
     *
     * @param string $periode
     *
     * @return CalendrierScolaire
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set semestres
     *
     * @param string $semestres
     *
     * @return CalendrierScolaire
     */
    public function setSemestres($semestres)
    {
        $this->semestres = $semestres;

        return $this;
    }

    /**
     * Get semestres
     *
     * @return string
     */
    public function getSemestres()
    {
        return $this->semestres;
    }

    /**
     * Set nbrJoursFerie
     *
     * @param string $nbrJoursFerie
     *
     * @return CalendrierScolaire
     */
    public function setNbrJoursFerie($nbrJoursFerie)
    {
        $this->nbrJoursFerie = $nbrJoursFerie;

        return $this;
    }

    /**
     * Get nbrJoursFerie
     *
     * @return string
     */
    public function getNbrJoursFerie()
    {
        return $this->nbrJoursFerie;
    }

    /**
     * Set listeFeries
     *
     * @param string $listeFeries
     *
     * @return CalendrierScolaire
     */
    public function setListeFeries($listeFeries)
    {
        $this->listeFeries = $listeFeries;

        return $this;
    }

    /**
     * Get listeFeries
     *
     * @return string
     */
    public function getListeFeries()
    {
        return $this->listeFeries;
    }
}

