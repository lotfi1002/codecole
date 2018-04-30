<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanEvaluation
 *
 * @ORM\Table(name="plan_evaluation")
 * @ORM\Entity
 */
class PlanEvaluation
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
     * @var integer
     *
     * @ORM\Column(name="id_evaluation", type="integer", nullable=true)
     */
    private $idEvaluation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competance", type="integer", nullable=true)
     */
    private $idCompetance;



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
     * Set idEvaluation
     *
     * @param integer $idEvaluation
     *
     * @return PlanEvaluation
     */
    public function setIdEvaluation($idEvaluation)
    {
        $this->idEvaluation = $idEvaluation;
    
        return $this;
    }

    /**
     * Get idEvaluation
     *
     * @return integer
     */
    public function getIdEvaluation()
    {
        return $this->idEvaluation;
    }

    /**
     * Set idCompetance
     *
     * @param integer $idCompetance
     *
     * @return PlanEvaluation
     */
    public function setIdCompetance($idCompetance)
    {
        $this->idCompetance = $idCompetance;
    
        return $this;
    }

    /**
     * Get idCompetance
     *
     * @return integer
     */
    public function getIdCompetance()
    {
        return $this->idCompetance;
    }
}
