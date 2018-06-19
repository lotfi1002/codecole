<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat")
 * @ORM\Entity
 */
class Resultat
{


    public $security=true;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etudiant", type="integer", nullable=true)
     */
    private $idEtudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_plan_evaluation", type="integer", nullable=true)
     */
    private $idPlanEvaluation;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string", length=200, nullable=true)
     */
    private $appreciation;



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
     * Set idEtudiant
     *
     * @param integer $idEtudiant
     *
     * @return Resultat
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;
self::check($idEtudiant);

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return integer
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set idPlanEvaluation
     *
     * @param integer $idPlanEvaluation
     *
     * @return Resultat
     */
    public function setIdPlanEvaluation($idPlanEvaluation)
    {
        $this->idPlanEvaluation = $idPlanEvaluation;
        self::check($idPlanEvaluation);
        return $this;
    }

    /**
     * Get idPlanEvaluation
     *
     * @return integer
     */
    public function getIdPlanEvaluation()
    {
        return $this->idPlanEvaluation;
    }

    public function check($str){

        if (strlen($str)<1)
            $this->security=false;
    }
    /**
     * Set note
     *
     * @param float $note
     *
     * @return Resultat
     */
    public function setNote($note)
    {
        $this->note = $note;
self::check($note);
        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set appreciation
     *
     * @param string $appreciation
     *
     * @return Resultat
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;
self::check($appreciation);

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
}
