<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Format
 *
 * @ORM\Table(name="format")
 * @ORM\Entity
 */
class Format
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
     * @var string
     *
     * @ORM\Column(name="nom_edt", type="string", length=255, nullable=false)
     */
    private $nomEdt;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_jour_par_semaine", type="integer", nullable=false)
     */
    private $nbrJourParSemaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_cours_par_jour", type="integer", nullable=false)
     */
    private $nbrCoursParJour;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnneeScolaire", type="integer", nullable=false)
     */
    private $anneescolaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_duree_cours", type="integer", nullable=false)
     */
    private $minDureeCours;

    /**
     * @var integer
     *
     * @ORM\Column(name="premier_cours_en_heure", type="integer", nullable=false)
     */
    private $premierCoursEnHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="premier_cours_en_minute", type="integer", nullable=false)
     */
    private $premierCoursEnMinute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_annee", type="date", nullable=false)
     */
    private $debutAnnee;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_semaine", type="integer", nullable=false)
     */
    private $nbrSemaine;

    /**
     * @var string
     *
     * @ORM\Column(name="Cycle", type="string", length=255, nullable=false)
     */
    private $cycle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime", nullable=false)
     */
    private $lastupdate;


}

