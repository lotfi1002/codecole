<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity
 */
class Evaluation
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
     * @ORM\Column(name="id_professeur", type="integer", nullable=true)
     */
    private $idProfesseur;



    /**
     * @var integer
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=true)
     */
    private $idClasse;



    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_competance", type="integer", nullable=true)
     */
    private $idTypeCompetance;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=200, nullable=true)
     */
    private $titre;



    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=200, nullable=true)
     */
    private $element;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;



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
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Evaluation
     */
    public function setIdTypeCompetance($idTypeCompetance)
    {
        $this->idTypeCompetance = $idTypeCompetance;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return integer
     */
    public function getIdTypeCompetance()
    {
        return $this->idTypeCompetance;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Evaluation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evaluation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idProfesseur
     *
     * @param integer $idProfesseur
     *
     * @return Evaluation
     */
    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;

        return $this;
    }

    /**
     * Get idProfesseur
     *
     * @return integer
     */
    public function getIdProfesseur()
    {
        return $this->idProfesseur;
    }

    /**
     * Set element
     *
     * @param string $element
     *
     * @return Evaluation
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set idClasse
     *
     * @param integer $idClasse
     *
     * @return Evaluation
     */
    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    /**
     * Get idClasse
     *
     * @return integer
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }
}
